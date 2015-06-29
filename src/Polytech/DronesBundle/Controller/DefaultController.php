<?php

namespace Polytech\DronesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PolytechDronesBundle:Default:index.html.twig', array('name' => $name));
    }
}
