<?php

namespace Polytech\GestionFichiersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Polytech\GestionFichiersBundle\Entity\Fichier;
use Polytech\GestionFichiersBundle\Form\FichierType;

/**
 * Fichier controller.
 * Permet de faire l'administration des fichiers de tous les utilisateurs
 *
 */
class FichierAdminController extends Controller
{

    /**
     * Lists all Fichier entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionFichiersBundle:Fichier')->findAll();

        return $this->render('GestionFichiersBundle:Fichier:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Fichier entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Fichier();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_fichier_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionFichiersBundle:Fichier:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Fichier entity.
     *
     * @param Fichier $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Fichier $entity)
    {
        $form = $this->createForm(new FichierType(), $entity, array(
            'action' => $this->generateUrl('admin_fichier_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Fichier entity.
     *
     */
    public function newAction()
    {
        $entity = new Fichier();
        $form   = $this->createCreateForm($entity);

        return $this->render('GestionFichiersBundle:Fichier:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Fichier entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionFichiersBundle:Fichier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fichier entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionFichiersBundle:Fichier:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Fichier entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionFichiersBundle:Fichier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fichier entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionFichiersBundle:Fichier:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Fichier entity.
    *
    * @param Fichier $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Fichier $entity)
    {
        $form = $this->createForm(new FichierType(), $entity, array(
            'action' => $this->generateUrl('admin_fichier_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Fichier entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionFichiersBundle:Fichier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fichier entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_fichier_edit', array('id' => $id)));
        }

        return $this->render('GestionFichiersBundle:Fichier:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Fichier entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionFichiersBundle:Fichier')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Fichier entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_fichier'));
    }

    /**
     * Creates a form to delete a Fichier entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_fichier_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
