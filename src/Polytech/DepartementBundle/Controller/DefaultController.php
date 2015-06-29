<?php

namespace Polytech\DepartementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DepartementBundle:Default:index.html.twig', array('name' => $name));
    }
}
