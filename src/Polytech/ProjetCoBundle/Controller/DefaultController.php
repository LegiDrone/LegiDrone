<?php

namespace Polytech\ProjetCoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PolytechProjetCoBundle:Main:index.html.twig', array('page' => 'index'));
    }
}
