<?php

namespace Polytech\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Polytech\EcommerceBundle\Form\UtilisateursAdressesType;
use Polytech\EcommerceBundle\Entity\UtilisateursAdresses;
use Polytech\EcommerceBundle\Entity\Commandes;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ecommerceController extends Controller
{
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function ProduitsAction()
    {
        $session = $this->getRequest()->getSession();
        
        $em = $this->getDoctrine()->getManager();
        $findProduits = $em->getRepository('PolytechEcommerceBundle:Produits')->findBy(array('disponible' => 1));

        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        
        $produits = $this->get('knp_paginator')->paginate($findProduits,$this->get('request')->query->get('page', 1),4);
        
        return $this->render('PolytechEcommerceBundle:Produits:produits.html.twig', array('produits' => $produits,
                                                                                                 'panier' => $panier));
    }
    
    /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function AdminProduitsAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('PolytechEcommerceBundle:Produits')->findAll();
        return $this->render('PolytechEcommerceBundle:Produits:AdminProduits.html.twig', array('title' => 'Administration des produits','produits' => $produits));
    }
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function ProduitDetailsAction($id)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PolytechEcommerceBundle:Produits')->find($id);
        
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        
        return $this->render('PolytechEcommerceBundle:Produits:ProduitDetails.html.twig', array('title' => 'Modifier un produit','produit' => $produit,'panier' => $panier));
    }
    
    /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function AlterProduitAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('PolytechEcommerceBundle:Produits')->find($id);
        return $this->render('PolytechEcommerceBundle:Produits:AlterProduit.html.twig', array('title' => 'Modifier un produit','produit' => $produit));
    }
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function PanierAction()
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has('panier')) $session->set('panier', array());
        
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('PolytechEcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));
        
        return $this->render('PolytechEcommerceBundle:Produits:Panier.html.twig', array('title' => 'Panier','produits' =>$produits,'panier' => $session->get('panier')));
    }
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function LivraisonAction()
    {   
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $entity = new UtilisateursAdresses();
        $form = $this->createForm(new UtilisateursAdressesType(),$entity);
        
        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->handleRequest($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setUtilisateur($utilisateur);
                $em->persist($entity);
                $em->flush();
                
                return $this->redirect($this->generateUrl('polytech_ecommerce_Livraison'));
            }
        }
        
        return $this->render('PolytechEcommerceBundle:Panier:livraison.html.twig', array('title' => 'Livraison','utilisateur' => $utilisateur,'form' => $form->createView()));
    }
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function SuppressionAdresseAction($id)
    {   
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PolytechEcommerceBundle:UtilisateursAdresses')->find($id);
        
        if ($this->container->get('security.context')->getToken()->getUser() != $entity->getUtilisateur() || !$entity)
            return $this->redirect ($this->generateUrl ('livraison'));
        
        $em->remove($entity);
        $em->flush();
                
        return $this->redirect($this->generateUrl('polytech_ecommerce_Livraison'));
    }
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function AjouterProduitAction($id)
    {
        //Récupération de la session en cours
        $session = $this->getRequest()->getSession();
        
        // Si la session 'panier' n'existe pas, alors on la créée avec un tableau vide
        if (!$session->has('panier')) $session->set('panier',array());
        
        //On récupère la session panier
        $panier = $session->get('panier');
        
        //Si le produits est déjà dans le panier
        if (array_key_exists($id, $panier)) {
            //Si la quantité choisie est diffèrente de null alors on ajoute la quantité voulue
            if ($this->getRequest()->query->get('qte') != null) $panier[$id] = $this->getRequest()->query->get('qte');
            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } 
        else // Le produits n'existe pas dans le panier
        {
            //Si la quantité choisie est difèrente de null alors on ajoute la quantité
            if ($this->getRequest()->query->get('qte') != null)
                $panier[$id] = $this->getRequest()->query->get('qte');
            else
                $panier[$id] = 1;
            
            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }
            
        $session->set('panier',$panier);
        
        return $this->redirect($this->generateUrl('polytech_ecommerce_Panier'));
    }
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function SupprimerProduitAction($id)
    {
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier))
        {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
        }
        
        return $this->redirect($this->generateUrl('polytech_ecommerce_Panier')); 
    }
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function SetLivraisonOnSession()
    {
        //Récupération de la session en cours
        $session = $this->getRequest()->getSession();
        
        // Si la session 'panier' n'existe pas, alors on la créée avec un tableau vide
        if (!$session->has('adresse')) $session->set('adresse',array());
        $adresse = $session->get('adresse');
        
        if ($this->getRequest()->request->get('livraison') != null && $this->getRequest()->request->get('facturation') != null)
        {
            $adresse['livraison'] = $this->getRequest()->request->get('livraison');
            $adresse['facturation'] = $this->getRequest()->request->get('facturation');
        } else {
            return $this->redirect($this->generateUrl('polytech_ecommerce_Validation'));
        }
        
        $session->set('adresse',$adresse);
        return $this->redirect($this->generateUrl('polytech_ecommerce_Validation'));
        
    }
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function ValidationAction()
    {
        if ($this->get('request')->getMethod() == 'POST'){
            $this->setLivraisonOnSession();
        }
        
        $em = $this->getDoctrine()->getManager();
        $prepareCommande = $this->forward('PolytechEcommerceBundle:Commandes:prepareCommande');
        $commande = $em->getRepository('PolytechEcommerceBundle:Commandes')->find($prepareCommande->getContent());
        
        return $this->render('PolytechEcommerceBundle:Panier:validation.html.twig', array('commande' => $commande));
    }
     
}