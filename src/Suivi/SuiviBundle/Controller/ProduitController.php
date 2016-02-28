<?php

namespace Suivi\SuiviBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Suivi\SuiviBundle\Form\ProduitForm;
use Suivi\SuiviBundle\Entity\Produit;
use Suivi\SuiviBundle\Entity\Image;

class ProduitController extends Controller {

    public function AjoutproduitAction() {
        $message = "";

        $produit = new Produit();
        $image = new Image();
        $form = $this->get('form.factory')->create(new ProduitForm(), $produit);

        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {

            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                //$produit->getImage();
                $em->persist($produit);
                $produit->getImage()->upload();
                $em->flush();
                $message = 'Ajout effectué avec succès';
            }
        }
        return $this->render('SuiviVenteBundle:Produit:ajoutproduit.html.twig', array('message' => $message, 'form' => $form->createView()));
    }

    public function listeproduitAction() {


        $produit = $this->getDoctrine()->getRepository('SuiviVenteBundle:Produit')->findAll();
        $paginator = $this->get('knp_paginator');
        $listeproduit = $paginator->paginate($produit, $this->get('request')->query->get('page', 1), 2);
        return $this->render('SuiviVenteBundle:Produit:listesproduit.html.twig', array(
                    'produit' => $produit,'prod' => $listeproduit
        ));
    }

    public function detailproduitAction($id) {
        $produit = $this->getDoctrine()->getRepository('SuiviVenteBundle:Produit')->find($id);
        return $this->render('SuiviVenteBundle:Produit:detailproduit.html.twig', array(
                    'produit' => $produit
        ));
    }

}
