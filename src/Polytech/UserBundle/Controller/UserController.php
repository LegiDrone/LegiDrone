<?php

namespace Polytech\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Polytech\ProjetCoBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class UserController extends Controller
{    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function AdminUserAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_ENTREPRISE')) {
          // Sinon on déclenche une exception « Accès interdit »
          throw new AccessDeniedException('Accès limité aux Entreprises.');
        }
          // Ici, $user est une instance de notre classe User
            return $this->render('PolytechUserBundle:Admin:ListeUser.html.twig', array('title' => 'Liste des utilisateurs'));
        
    }
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function facturesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $factures = $em->getRepository('PolytechEcommerceBundle:Commandes')->byFacture($this->getUser()->getEntreprise());
        
        return $this->render('PolytechUserBundle:User:facture.html.twig', array('factures' => $factures));
    }
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function facturesPDFAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('PolytechEcommerceBundle:Commandes')->findOneBy(array('entreprise' => $this->getUser()->getEntreprise(),
                                                                                     'valider' => 1,
                                                                                     'id' => $id));
        
        if (!$facture) {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('polytech_user_facture'));
        }
        
        $html = $this->renderView('PolytechUserBundle:User:facturePDF.html.twig', array('facture' => $facture));
        
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
        $html2pdf->pdf->SetAuthor('DroneContrast');
        $html2pdf->pdf->SetTitle('Facture '.$facture->getReference());
        $html2pdf->pdf->SetSubject('Facture DroneContrast');
        $html2pdf->pdf->SetKeywords('facture,dronecontrast');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);
        $html2pdf->Output('Facture.pdf');
        
        var_dump($html); 

        
        $response = new Response();
        $response->headers->set('Content-type' , 'application/pdf');
        
        return $response;
    }
    
    /**
   * @Security("has_role('ROLE_ENTREPRISE')")
   */
    public function pilotesAction()
    {
        $em = $this->getdoctrine()->getManager();
        $pilotes = $em->getRepository('PolytechUserBundle:User')->findAll();
            //byPiloteEntreprise($this->getUser()->getEntreprise(),"ROLE_PILOTE");
        
        return $this->render('PolytechUserBundle:Pilotes:ListePilotes.html.twig',array('pilotes' => $pilotes));
    }
        
}
?>