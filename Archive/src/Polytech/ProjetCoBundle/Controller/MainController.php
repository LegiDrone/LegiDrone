<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace Polytech\ProjetCoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Polytech\ProjetCoBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class MainController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('PolytechProjetCoBundle:Main:index.html.twig', array('title' => 'Accueil'));
    }
    
    public function contactAction()
    {
        return $this->render('PolytechProjetCoBundle:Main:contact.html.twig', array('title' => 'Contact'));
    }
    
    public function connexionAction()
    {
        return $this->render('PolytechProjetCoBundle:Main:index.html.twig', array('title' => 'Connexion'));
    }
    
    public function inscriptionAction()
    {
        
        //création du nouvel utilisateur
        $user = new User();
        
        $form = $this->createFormBuilder($user)
                     ->add('Nom',           'text',array('attr' => array('placeholder' => 'Nom')))
                     ->add('Prenom',        'text',array('attr' => array('placeholder' => 'Prénom')))
                     ->add('Mail',          'email',array('attr' => array('placeholder' => 'Mail')))
                     ->add('NumRue',        'text',array('attr' => array('placeholder' => 'Numéro de rue')))
                     ->add('NomRue',        'text',array('attr' => array('placeholder' => 'Nom de rue')))
                     ->add('CP',            'text',array('attr' => array('placeholder' => 'Code postal')))
                     ->add('Ville',         'text',array('attr' => array('placeholder' => 'Ville')))
                     ->getForm();
        
        
        //Gestion du POST
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST'){
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                
                return $this->redirect($this->generateUrl('polytech_projet_co_inscription'));
            }}
        
        return $this->render('PolytechProjetCoBundle:Main:inscription.html.twig', array('title' => 'Inscription', 'form'=> $form->createView()));
    }
    
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function dashbordAction()
    {
          // Ici, $user est une instance de notre classe User
            return $this->render('PolytechProjetCoBundle:Admin:dashbord.html.twig', array('title' => 'Tableau de bord'));
        
    }
        
}
?>