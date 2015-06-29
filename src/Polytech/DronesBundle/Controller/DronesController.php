<?php

namespace Polytech\DronesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Polytech\DronesBundle\Entity\Drones;
use Polytech\DronesBundle\Form\DronesType;
use Polytech\EcommerceBundle\Entity\Media;
use Polytech\GestionFichiersBundle\Entity\Fichier;

/**
 * Drones controller.
 *
 * @Route("/drones")
 */
class DronesController extends Controller
{

    /**
     * Lists all Drones entities.
     *
     * @Route("/", name="drones")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PolytechDronesBundle:Drones')->byEntreprise($this->container->get('security.context')->getToken()->getUser()->getEntreprise());

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Drones entity.
     *
     * @Route("/", name="drones_create")
     * @Method("POST")
     * @Template("PolytechDronesBundle:Drones:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Drones();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            //Ajoute le drone pour l'entreprise en cours
            $entity->setEntreprise($this->container->get('security.context')->getToken()->getUser()->getEntreprise());
            
            //On change le nom du media pour avoir le même que le drône
            $media = new Media();
            $media = $entity->getMedia();
            $media->name =  $entity->getName();
            $entity->setMedia($media);
            
            //Modification du fichier
            $fichier = $entity->getDocument();
            $fichier->setTitre($entity->getName());
            $fichier->setType("PDF");
            $fichier->setAuteur($this->container->get('security.context')->getToken()->getUser()->getEntreprise());
			$fichier->upload();
            $entity->setDocument($fichier);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('drones_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Drones entity.
     *
     * @param Drones $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Drones $entity)
    {
        $form = $this->createForm(new DronesType(), $entity, array(
            'action' => $this->generateUrl('drones_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Drones entity.
     *
     * @Route("/new", name="drones_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Drones();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Drones entity.
     *
     * @Route("/{id}", name="drones_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PolytechDronesBundle:Drones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Drones entity.');
        }
        
        //Vérification de l'utilisateur
        if($entity->getEntreprise() != $this->container->get('security.context')->getToken()->getUser()->getEntreprise())
        {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette page !');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Drones entity.
     *
     * @Route("/{id}/edit", name="drones_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PolytechDronesBundle:Drones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Drones entity.');
        }
        
        //Vérification de l'utilisateur
        if($entity->getEntreprise() != $this->container->get('security.context')->getToken()->getUser()->getEntreprise())
        {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette page !');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Drones entity.
    *
    * @param Drones $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Drones $entity)
    {
        $form = $this->createForm(new DronesType(), $entity, array(
            'action' => $this->generateUrl('drones_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Drones entity.
     *
     * @Route("/{id}", name="drones_update")
     * @Method("PUT")
     * @Template("PolytechDronesBundle:Drones:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PolytechDronesBundle:Drones')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Drones entity.');
        }
        
        //Vérification de l'utilisateur
        if($entity->getEntreprise() != $this->container->get('security.context')->getToken()->getUser()->getEntreprise())
        {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette page !');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('drones_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Drones entity.
     *
     * @Route("/{id}", name="drones_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PolytechDronesBundle:Drones')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Drones entity.');
            }
            
            //Vérification de l'utilisateur
            if($entity->getEntreprise() != $this->container->get('security.context')->getToken()->getUser()->getEntreprise())
            {
                throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette page !');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('drones'));
    }

    /**
     * Creates a form to delete a Drones entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('drones_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
