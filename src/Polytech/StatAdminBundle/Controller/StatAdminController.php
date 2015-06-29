<?php

namespace Polytech\StatAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Polytech\StatAdminBundle\Entity\Statview;
class StatAdminController extends Controller
{
	public function addviewAction ($page)
	{	
		$view=new Statview;
		$view->setPage($page);
		$view->setDate(new \Datetime());
		$view->setUser($this->container->get('security.context')->getToken()->getUser());
		$em=$this->getDoctrine()->getManager();
		$em->persist($view);
		$em->flush();
		return 0;
	}
    public function indexAction($name)
    {
        return $this->render('PolytechStatAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
