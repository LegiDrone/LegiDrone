<?php

namespace Polytech\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Polytech\EcommerceBundle\Entity\UtilisateursAdresses;
use Polytech\EcommerceBundle\Entity\Commandes;
use Polytech\EcommerceBundle\Entity\Produits;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class CommandesController extends Controller
{
    /*Permet d'enregistrer toutes les informations concernant la facture
    * (Adresses, produits, total)
    */
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function facture()
    {
        //Récupération de tout ce que l'on a besoin pour travailler
        $em = $this->getDoctrine()->getManager();
        $generator = $this->container->get('security.secure_random');
        $session = $this->getRequest()->getSession();
        $adresse = $session->get('adresse');
        $panier = $session->get('panier');
        $commande = array();
        $totalHT = 0;
        $totalTVA = 0;
        
        //Récupération des bonnes adresses
        $facturation = $em->getRepository('PolytechEcommerceBundle:UtilisateursAdresses')->find($adresse['facturation']);
        $livraison = $em->getRepository('PolytechEcommerceBundle:UtilisateursAdresses')->find($adresse['livraison']);
        //Récupération des produits du panier
        $produits = $em->getRepository('PolytechEcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));
        
        //Calcul des prix de tous les produits et enregistrement dans un tableau 
        foreach($produits as $produit)
        {
            $prixHT = ($produit->getPrix() * $panier[$produit->getId()]);
            $prixTTC = ($produit->getPrix() * $panier[$produit->getId()] / $produit->getTvaId()->getMultiplicate());
            $totalHT += $prixHT;
            
            if (!isset($commande['tva']['%'.$produit->getTvaId()->getValeur()]))
                $commande['tva']['%'.$produit->getTvaId()->getValeur()] = round($prixTTC - $prixHT,2);
            else
                $commande['tva']['%'.$produit->getTvaId()->getValeur()] += round($prixTTC - $prixHT,2);
            
            $totalTVA += round($prixTTC - $prixHT,2);
            
            $commande['produit'][$produit->getId()] = array('reference' => $produit->getNom(),
                                                            'quantite' => $panier[$produit->getId()],
                                                            'prixHT' => round($produit->getPrix(),2),
                                                            'prixTTC' => round($produit->getPrix() / $produit->getTvaId()->getMultiplicate(),2));
        }  
        
        $commande['livraison'] = array('prenom' => $livraison->getPrenom(),
                                    'nom' => $livraison->getNom(),
                                    'telephone' => $livraison->getTelephone(),
                                    'adresse' => $livraison->getAdresse(),
                                    'cp' => $livraison->getCp(),
                                    'ville' => $livraison->getVille(),
                                    'pays' => $livraison->getPays(),
                                    'complement' => $livraison->getComplement());
        
        $commande['facturation'] = array('prenom' => $facturation->getPrenom(),
                                    'nom' => $facturation->getNom(),
                                    'telephone' => $facturation->getTelephone(),
                                    'adresse' => $facturation->getAdresse(),
                                    'cp' => $facturation->getCp(),
                                    'ville' => $facturation->getVille(),
                                    'pays' => $facturation->getPays(),
                                    'complement' => $facturation->getComplement());
        
        $commande['prixHT'] = round($totalHT,2);
        $commande['prixTTC'] = round($totalHT + $totalTVA,2);
        
        $commande['token'] = bin2hex($generator->nextBytes(20));
        
        return $commande;
    }
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function prepareCommandeAction()
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        
        if (!$session->has('commande'))
            $commande = new Commandes();
        else
            $commande = $em->getRepository('PolytechEcommerceBundle:Commandes')->find($session->get('commande'));
        
        $commande->setDate(new \DateTime());
        $commande->setEntreprise($this->container->get('security.context')->getToken()->getUser()->getEntreprise());
        $commande->setValider(0);
        $commande->setReference(0);
        $commande->setstatus(0);
        $commande->setCommande($this->facture());
        
        //Si la session de commande n'existe pas 
        if (!$session->has('commande')) {
            $em->persist($commande);
            $session->set('commande',$commande);
        }
        
        $em->flush();
        
        return new Response($commande->getId());
    }
    
    /*
     * Cette methode remplace l'api banque.
     */
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function validationCommandeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('PolytechEcommerceBundle:Commandes')->find($id);
        
        if (!$commande || $commande->getValider() == 1)
            throw $this->createNotFoundException('La commande n\'existe pas');
        
        $commande->setValider(1);
        $commande->setStatus(2);
        $commande->setReference($this->container->get('setNewReference')->reference()); //Service
        $em->flush();   
        
        $session = $this->getRequest()->getSession();
        $session->remove('adresse');
        $session->remove('panier');
        $session->remove('commande');
        
        $this->get('session')->getFlashBag()->add('success','Votre commande est validé avec succès');
        return $this->redirect($this->generateUrl('polytech_ecommerce_Virement'));
    }
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function virementAction()
    {
        return $this->render('PolytechEcommerceBundle:Paiement:virement.html.twig');
    }
}