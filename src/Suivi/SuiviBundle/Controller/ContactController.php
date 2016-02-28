<?php

namespace Suivi\SuiviBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Suivi\SuiviBundle\Form\ContactForm;
use Suivi\SuiviBundle\Entity\Contact;



class ContactController extends Controller
{

    public function AjoutcontactAction()
    {
        $message = "";

        $contact = new Contact();

        $form = $this->get('form.factory')->create(new  ContactForm(), $contact);

        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {

            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $contact->setstatus("0");
		$contact->getImage()->upload();
                $em->flush();
                $message = 'Ajout effectué avec succès';

            }


        }
        return $this->render('SuiviVenteBundle:Contact:ajoutcontact.html.twig',array('message' => $message, 'form' => $form->createView()));
    }
    public function ListecontactAction() {

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT a FROM SuiviVenteBundle:Contact a");
        $paginator = $this->get('knp_paginator');
        $listecontacts = $paginator->paginate($query,
            $this->get('request')->query->get('page', 1), 4);
        return $this->render('SuiviVenteBundle:Contact:listescontact.html.twig' , array('contact' => $listecontacts)
        );
    }
	 public function detailcontactAction($id)
    {
        $contact= $this->getDoctrine()->getRepository('SuiviVenteBundle:Contact')->find($id);
        return $this->render('SuiviVenteBundle:Contact:detailcontact.html.twig', array(
            'contact' => $contact
        ));
    }
    public function modifiercontactAction($id)
    {
        $message='';
        $em = $this->getDoctrine()->getManager();
        $contact=$em->find('SuiviVenteBundle:Contact',$id);
        $form = $this->get('form.factory')->create(new  ContactForm(),$contact);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist( $contact);
                $em->flush();
                $message='Modification effectué avec succèes';
            }
        }
        return $this->render('SuiviVenteBundle:Contact:ajoutcontact.html.twig', array(
            'form' => $form->createView(),'message'  => $message,
        ));

    }
    /**
     * Displays a form to edit an existing Contact entity.
     *
     */
    public function editAction(Contact $contact)
 {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new ContactType(), $contact);


        $request = $this->getRequest();
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $contact = $form->getData();
                $em->persist($contact);
                $em->flush();

                return $this->redirect($this->generateUrl('contact_detail', array('id' => $contact->getId())));
            }
        }

        return $this->render('SuiviVenteBundle:Contact:ajoutcontact.html.twig', array(
                    'contact' => $contact,
                    'form' => $form->createView(),
                    'action' => "Editer"
        ));
    }



}
