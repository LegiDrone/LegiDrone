<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace Polytech\ProjetCoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Polytech\ProjetCoBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Polytech\ProjetCoBundle\Form\MailType;

class MainController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('PolytechProjetCoBundle:Main:index.html.twig', array('title' => 'Accueil'));
    }
    
    public function contactAction()
    {
        $form = $this->get('form.factory')->create(new MailType());

         // Get the request
        $request = $this->get('request');

        // Check the method
        if ($request->getMethod() == 'POST')
        {
            // Bind value with form
            //$form->bindRequest($request);

            $data = $form->getData();

            $message = \Swift_Message::newInstance()
                ->setContentType('text/html')
                ->setSubject($data['subject'])
                ->setFrom($data['email'])
                ->setTo('thauvin.mathieu@gmail.com')
                ->setBody($data['content']);

            $this->get('mailer')->send($message);

            // Launch the message flash
            $this->get('session')->getFlashBag()->add('success', 'Merci de nous avoir contacté, nous répondrons à vos questions dans les plus brefs délais.');
        }
        

        return $this->render('PolytechProjetCoBundle:Main:contact.html.twig', array(
            'form' => $form->createView()
        ));
        
        return $this->render('PolytechProjetCoBundle:Main:contact.html.twig', array('title' => 'Contact'));
    }
    
    public function EnvoieMail($body)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Contact Legidrone')
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody($body)
        ;
        $this->get('mailer')->send($message);
        
        $this->get('session')->getFlashBag()->add('success','Message envoyé avec succès');
        return true;
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
    
    
    public function dashbordAction()
    {   
        //Role Super Admin 
        if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN'))
        {
            return $this->getPathSuperAdminDashboard();
        }
        //Role Admin
        elseif($this->get('security.context')->isGranted('ROLE_ADMIN'))
        {
            return $this->getPathAdminDashboard();
        }
        //Role entreprise
        elseif($this->get('security.context')->isGranted('ROLE_ENTREPRISE'))
        {
            return $this->getPathEntrepriseDashboard();
        }
        //Role pilote
        elseif($this->get('security.context')->isGranted('ROLE_PILOTE'))
        {
            return $this->getPathPiloteDashboard();
        }
        //Utilisateur non connecté 
        else
        {
            throw new AccessDeniedException('Accès limité utilisateurs connectés');
        }
    }
    
    public function getPathEntrepriseDashboard()
    {
        //On revérifie que l'utilisateur a bien le role entreprise
        if($this->get('security.context')->isGranted('ROLE_ENTREPRISE'))
        {
            $em = $this->getDoctrine()->getManager();
        $RepFiles = $em->getRepository('GestionFichiersBundle:Fichier');
        $RepDrone = $em->getRepository('PolytechDronesBundle:Drones');
        
		$repository = $this //On récupère notre Repository
			->getDoctrine()
			->getManager()
			->getRepository('GestionFichiersBundle:Fichier')
		;
		
		$listeFichiers = $RepFiles->myFindAll($this->container->get('security.context')->getToken()->getUser()->getEntreprise());
		$nbFichiers = count($listeFichiers);
		$dureeValiditee = 2; //Permet de régler le delais avant affichage de "Date en approche"
        
        // Permet de connaitre le nombre de drone de l'entreprise
        $nbDrones = count($RepDrone->byEntreprise($this->container->get('security.context')->getToken()->getUser()->getEntreprise()));
            $NomEntreprise = $this->container->get('security.context')->getToken()->getUser()->getEntreprise()->getNom();
            
            return $this->render('PolytechProjetCoBundle:Admin:dashbord.html.twig', array(
					'dureeValiditee'=>$dureeValiditee,'nbFichiers'=>$nbFichiers,'listeFichiers'=>$listeFichiers,'nbDrones'=> $nbDrones,'title' => 'Tableau de bord','NomEntreprise' => $NomEntreprise));
        }
        else
        {
            throw new AccessDeniedException('Accès limité utilisateurs connectés');
        }
        
    }
    
    
    public function getPathPiloteDashboard()
    {
        //On revérifie que l'utilisateur a bien le role entreprise
        if($this->get('security.context')->isGranted('ROLE_PILOTE'))
        {
            $em = $this->getDoctrine()->getManager();
            $RepFiles = $em->getRepository('GestionFichiersBundle:Fichier');
            $RepDrone = $em->getRepository('PolytechDronesBundle:Drones');
            
            $repository = $this //On récupère notre Repository
                ->getDoctrine()
                ->getManager()
                ->getRepository('GestionFichiersBundle:Fichier');
            
            $listeFichiers = $RepFiles->myFindAll($this->container->get('security.context')->getToken()->getUser()->getEntreprise());
            $nbFichiers = count($listeFichiers);
            $dureeValiditee = 2; //Permet de régler le delais avant affichage de "Date en approche"
        
            // Permet de connaitre le nombre de drone de l'entreprise
            $nbDrones = count($RepDrone->byEntreprise($this->container->get('security.context')->getToken()->getUser()->getEntreprise()));
            
            return $this->render('PolytechProjetCoBundle:Admin:dashboardPilote.html.twig', array(
					'dureeValiditee'=>$dureeValiditee,'nbFichiers'=>$nbFichiers,'listeFichiers'=>$listeFichiers,'nbDrones'=> $nbDrones,'title' => 'Tableau de bord Pilote'));
        }
        else
        {
            throw new AccessDeniedException('Accès limité utilisateurs connectés');
        }
        
    }
    
    public function getPathAdminDashboard()
    {
        $em = $this->getDoctrine()->getManager();
          //Et on recommence tout !
		$repository = $this //On récupère notre Repository
			->getDoctrine()
			->getManager()
			->getRepository('GestionFichiersBundle:Fichier')
		;
        $NbvisiteTotal=count($em->getRepository('PolytechStatAdminBundle:Statview')->findAll());
		$NbvisiteProd=count($em->getRepository('PolytechStatAdminBundle:Statview')->byPage("produit"));
		$NbvisiteDash=count($em->getRepository('PolytechStatAdminBundle:Statview')->byPage("UserDash"));
		$Nbuser=count($em->getRepository('PolytechUserBundle:User')->findAll());
        
		$RepFiles = $em->getRepository('GestionFichiersBundle:Fichier');
		$listeFichiers = $RepFiles->myFindAll($this->container->get('security.context')->getToken()->getUser()->getEntreprise());
		$nbFichiers = count($listeFichiers);
		$dureeValiditee = 2; //Permet de régler le delais avant affichage de "Date en approche"
            return $this->render('PolytechProjetCoBundle:Admin:dashbordAdmin.html.twig', array(
					'dureeValiditee'=>$dureeValiditee,'nbFichiers'=>$nbFichiers,'listeFichiers'=>$listeFichiers,'title' => 'Tableau de bord Administrateur','nbviewtotal' => $NbvisiteTotal,'nbviewprod'=> $NbvisiteProd,'nbviewdashuser'=> $NbvisiteDash,'Nbuser'=> $Nbuser));
    }
    

    public function dashbordColorMapAction()
   {
       $em = $this->getDoctrine()->getManager();
        $RepFiles = $em->getRepository('GestionFichiersBundle:Fichier');
        $RepDrone = $em->getRepository('PolytechDronesBundle:Drones');
        
		$repository = $this //On récupère notre Repository
			->getDoctrine()
			->getManager()
			->getRepository('GestionFichiersBundle:Fichier')
		;
		
		$listeFichiers = $RepFiles->myFindAll($this->container->get('security.context')->getToken()->getUser()->getEntreprise());
       
       $values = array();
           
       foreach ($listeFichiers as $value)
       {
           if($value->getDepartement() != null)
           {
               if(($value->getDateValiditee() > (new \DateTime('now'))) and ($value->getDateValiditee()->modify('-2 months') < (new \DateTime('now'))))
               {
                   $etat= 2;
               }
               else{
                   if($value->getDateValiditee()  > new \DateTime('now'))
                   {
                       $etat= 1;
                   }
                    else
                    {
                       $etat= 3 ;
                    }
               }
               // titre / lien / taille / Date / etat
               $values[$value->getDepartement()->getNumero()]=array($value->getTitre(),$value->getLien(),$value->getTaille(), $value->getDateValiditee(), $etat);
           }
       }
           
       $Response = new JsonResponse();
       return $Response->setData($values);
   }
        
}
?>