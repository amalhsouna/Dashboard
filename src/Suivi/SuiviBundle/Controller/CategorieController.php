<?php

namespace Suivi\SuiviBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Suivi\SuiviBundle\Entity\Categorie;
use Suivi\SuiviBundle\Form\CategorieType;

/**
 * Categorie controller.
 *
 */
class CategorieController extends Controller
{

    /**
     * Lists all Categorie entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery("SELECT a FROM SuiviVenteBundle:Categorie a ORDER BY a.dateCreation DESC");
        $paginator = $this->get('knp_paginator');
        $listeclients = $paginator->paginate($query,
            $this->get('request')->query->get('page', 1), 4);
        //add categorie
       $message='';
       $entity = new Categorie();
       $form = $this->createForm(new CategorieType(), $entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $message='Ajout effectuée avec succée';
            $em->persist($entity);
            $em->flush();

        }
        
        return $this->render('SuiviVenteBundle:Categorie:index.html.twig' , array('entities' => $listeclients,'entity' => $entity,
            'form'   => $form->createView(),
            'message' => $message,)
        );
    }
    /**
     * Creates a new Categorie entity.
     *
     */
    public function createAction(Request $request)
    {  $message='';
       $entity = new Categorie();
       $form = $this->createForm(new CategorieType(), $entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $message='Ajout effectuée avec succée';
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categorie_show', array('id' => $entity->getId())));
        }

        return $this->render('SuiviVenteBundle:Categorie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'action'=>"Ajouter",'message' => $message,
        ));
    }

    /**
     * Creates a form to create a Categorie entity.
     *
     * @param Categorie $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Categorie $entity)
    {
        $form = $this->createForm(new CategorieType(), $entity);
        $form->add('submit', 'submit', array('label' => 'Ajouter'));
      
        return $form;
    }

    /**
     * Displays a form to create a new Categorie entity.
     *
     */
    public function newAction()
    {
        $entity = new Categorie();
        $form   = $this->createCreateForm($entity);

        return $this->render('SuiviVenteBundle:Categorie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Categorie entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuiviVenteBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SuiviVenteBundle:Categorie:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Categorie entity.
     *
     */
    public function editAction(Categorie $categorie)
 {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new CategorieType(), $categorie);


        $request = $this->getRequest();
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $categorie = $form->getData();
                $em->persist($categorie);
                $em->flush();

                return $this->redirect($this->generateUrl('categorie_show', array('id' => $categorie->getId())));
            }
        }

        return $this->render('SuiviVenteBundle:Categorie:edit.html.twig', array(
                    'categorie' => $categorie,
                    'form' => $form->createView(),
                    'action' => "Editer"
        ));
    }

    /**
     * Deletes a Categorie entity.
     *
     */
    public function deleteAction($id)
    {
            $em = $this->getDoctrine()->getManager();
            $categorie = $em->getRepository('SuiviVenteBundle:Categorie')->find($id);
            if (! $categorie) {
                throw $this->createNotFoundException('  Entité Categorie n"existe pas !!!');
            }
            $em->remove($categorie);
            $em->flush();
        
        return $this->redirect($this->generateUrl('categorie'));
    }

    /**
     * Creates a form to delete a Categorie entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categorie_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}
