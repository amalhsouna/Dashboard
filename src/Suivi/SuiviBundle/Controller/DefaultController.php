<?php

namespace Suivi\SuiviBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Suivi\SuiviBundle\Form\VenteForm;
use Suivi\SuiviBundle\Form\Vente1Form;
use Suivi\SuiviBundle\Form\Vente2Form;
use Suivi\SuiviBundle\Form\OffresType;
use Suivi\SuiviBundle\Entity\Ventes;
use Suivi\SuiviBundle\Entity\Offres;
use Suivi\SuiviBundle\Entity\Categorie;
use Suivi\SuiviBundle\Form\RecherchedateForm;
use Suivi\SuiviBundle\Form\CategorieType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction() {

        return $this->render('SuiviVenteBundle:Default:index.html.twig');
    }

    public function adminAction() {
        $em = $this->getDoctrine()->getManager();
        $locationRepo = $em->getRepository('SuiviVenteBundle:Categorie');
        $offreRepo = $em->getRepository('SuiviVenteBundle:Offres');
        $nb1 = $locationRepo->getNb();
        $nbOffres = $offreRepo->getNbOffres();
        $offreS=$offreRepo->getOffresbyStatus();
        
   
        $userManager = $this->get('fos_user.user_manager');
        $userss = $userManager->findUsers();
        $users = array();
        $n = 0;
        foreach ($userss AS $user) {
            {
                $users[$n] = $user;
                $n = $n + 1;
            }
        }
        return $this->render('SuiviVenteBundle:Default:Acceuil.html.twig', array(
                    'nbr1' => $nb1, 'nboffre' => $nbOffres, 'users' => $users, "nbreutil" => $n, "offreS" => $offreS));
    }

    public function chefAction() {
        $message = "";
        $em = $this->getDoctrine()->getManager();
        $categoryNames = $em->getRepository('SuiviVenteBundle:Categorie')->findAll();
        $vente = new Ventes();
        $form = $this->get('form.factory')->create(new VenteForm(), $vente);
        $request = $this->get('request');
        $userManager = $this->get('fos_user.user_manager');
        $userss = $userManager->findUsers();
        $users = array();
        $id_user = $this->container->get('security.context')->getToken()->getUser()->getEspace();

        if ($request->getMethod() == 'POST') {

            $form->bind($request);
            if ($form->isValid()) {
                $em->persist($vente);
                $em->persist($vente->getOffrelcle());
		$vente->setespacett($id_user);
                $em->flush();
                $message = 'Ajout effectué avec succès';
             }


        }
        
        return $this->render('SuiviVenteBundle:Vente:ajoutventechef.html.twig', array(
                    'categoryNames' => $categoryNames, 'form' => $form->createView(), 'message' => $message, 'vente' => $vente
        ));
    }

    public function listesventeAction() {

        $form = $this->get('form.factory')->create(new RecherchedateForm());
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT a FROM SuiviVenteBundle:Ventes a  ORDER BY a.date DESC ");
        $paginator = $this->get('knp_paginator');
        $listeventes = $paginator->paginate($query, $this->get('request')->query->get('page', 1), 10);
        return $this->render('SuiviVenteBundle:Vente:listesventechef.html.twig', array(
                    'form' => $form->createView(),'entities' => $listeventes
        ));
    }

    public function testventeAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery("SELECT u FROM SuiviVenteBundle:Offres u JOIN u.categ a");
        $operation = $query->getResult();

        if ($operation == null) {
            return new response("pas de res");
        } else {
            return $this->render('SuiviVenteBundle:Vente:testventechef.html.twig');
        }
    }

    public function ResultatAction() {
        $form = $this->get('form.factory')->create(new RecherchedateForm());
        $request = $this->get('request');
        $cle = $request->get('formre');
        $test1 = $cle['date1'];
        $test2 = $cle['date2'];
        $test = $cle['NomREF'];
        $em = $this->getDoctrine()->getEntityManager();

        //C'est le nom de l'attribut qu'il faut utiliser, pas le nom de la classe
        $query = $em->createQuery("SELECT a FROM SuiviVenteBundle:Ventes a  JOIN a.offrelcle u WHERE (a.date BETWEEN '$test1' AND '$test2' OR u.nom='$test') ");

        $listevente = $query->getResult();


        if ($listevente == null) {
            return new response("pas de res");
        } else {
        $paginator = $this->get('knp_paginator');
        $listeventes = $paginator->paginate($query, $this->get('request')->query->get('page', 1), 10);
        return $this->render('SuiviVenteBundle:Vente:listesventechef.html.twig', array(
                    'form' => $form->createView(),'entities' => $listeventes
        ));
    }
    }

}
