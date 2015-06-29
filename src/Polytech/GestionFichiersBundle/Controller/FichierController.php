<?php

namespace Polytech\GestionFichiersBundle\Controller;

use Polytech\DepartementBundle\Departement\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Polytech\GestionFichiersBundle\Entity\Fichier;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;

class FichierController extends Controller
{
	//Fonction permettant l'upload des fichiers
    public function uploadAction(Request $request)
    {
		//On récupère l'entity manager
		$em = $this->getDoctrine()->getManager();
		
		//On crée un objet fichier
		$fichier = new Fichier();
		
		//On crée le formBuilder		
		// On ajoute les champs de l'entité que l'on veut à notre formulaire
		$form = $this->get('form.factory')->createBuilder('form', $fichier)
		  ->add('titre', 			'text',array('attr' => array('placeholder' => 'Titre')))
		  ->add('dateValiditee',	'date',array('attr' => array('placeholder' => 'Date de validitée du fichier')))
		  ->add('departement',		'entity',array('class'    => 'DepartementBundle:Departement', //On ajoute une liste de départements
													'property' => 'label', //On affiche les départements par Numéro + nom
													'multiple' => false))
		  ->add('file',				'file',array('attr' => array('placeholder' => 'Choix du fichier')))	
		  ->getForm() //On génère le formulaire
		;
		$form->handleRequest($request);
		
		//On vérifie que le formulaire est valide : si on a pas essayé de passer par l'url, si les données sont bonnes
		if ($form->isValid()) {
			//On test la taille (et on l'ajoute aux attributs si c'est bon)
			$fichier->setAuteur($this->container->get('security.context')->getToken()->getUser());
			$fichier->setEntreprise($this->container->get('security.context')->getToken()->getUser()->getEntreprise());
			$fichier->upload(); 
			//Puis on l'ajoute à la BDD si tout s'est bien passé
			$em->persist($fichier); //On persiste l'entité
			$em->flush(); //On flush ce que l'on vient de persister
			echo "<script>alert(\"Fichier uploadé avec succès\")</script>"; //On toast /!\ NE MARCHE PAS ENCORE /!\
			//On retourne sur le dashboard				
			return $this->redirect($this->generateUrl('polytech_projet_co_dashboard'));
		}
		
		//On retourne une page HTML, ainsi qu'un tableau de variable (celui contenant notre formulaire notamment)
		//On peut également retourner notre objet, si on a besoin d'afficher des informations
        return $this->render('GestionFichiersBundle:Default:fichier.html.twig', array('title' => 'Ajout d\'un fichier','form' => $form->createView()));
    }
	
	
	//Fonction permettant l'upload des fichiers
    public function deleteAction($id)
    {
		$em = $this->getDoctrine()->getManager();
		$fichier = $em->getRepository('GestionFichiersBundle:Fichier')->find($id);
		$fichier->deleteFromServer();
		
		$em->remove($fichier);
		$em->flush();
		return $this->redirect($this->generateUrl('polytech_projet_co_dashboard'));
    }
	
	public function downloadAction($id){
		$em = $this->getDoctrine()->getManager();
		$fichier = $em->getRepository('GestionFichiersBundle:Fichier')->find($id);
		
		//On télécharge le fichier		
		$response = new Response();
		$response->setContent(file_get_contents($fichier->getLien()));
		$response->headers->set('Content-Type', 'application/force-download'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
		$response->headers->set('Content-disposition', 'filename='. $fichier->getTitre().'.'.$fichier->getExtension());
			 
		return $response;
	}
	
	public function previewAction($id)
    {
		$em = $this->getDoctrine()->getManager();
		$fichier = $em->getRepository('GestionFichiersBundle:Fichier')->find($id);
		
		//On affiche le fichier
		$response = new Response();
		$response->setContent(file_get_contents($fichier->getLien()));
        $response->headers->set(
           'Content-Type',
           'application/pdf'
       ); // Affiche le pdf au lieux de le télécharger
		$response->headers->set('Content-disposition', 'filename='. $fichier->getTitre().'.'.$fichier->getExtension());
			 
		return $response;
    }
}
