<?php

namespace Suivi\SuiviBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Suivi\SuiviBundle\Form\CategorieType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Suivi\SuiviBundle\Form\ObjectifForm;
use Suivi\SuiviBundle\Form\RecetteForm;

class RecetteController extends Controller {


    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $form = $this->get('form.factory')->create(new ObjectifForm());
        $formrectte = $this->get('form.factory')->create(new RecetteForm());
        $id_user = $this->container->get('security.context')->getToken()->getUser()->getEspace();
        $query = $em->createQuery("SELECT a FROM SuiviVenteBundle:Ventes a ");

        $recette = $query->getResult();
      
        foreach($recette as $demandefrets){
         echo($demandefrets->getQuantite());
         $sum=0;
        // $sum=$sum+$demandefrets->getQuantite();
        // echo $sum;
        }
       
       // $recette = $this->getDoctrine()->getRepository('SuiviVenteBundle:Ventes')->findAll();
        $VenteRecette = $em->getRepository('SuiviVenteBundle:Ventes');

        $recettequantite = $VenteRecette->getrecette();
       
        return $this->render('SuiviVenteBundle:Recette:index.html.twig', array('recette' => $recette,  'recettequantite' => $recettequantite,
                    'form' => $form->createView(), 'formdate' => $formrectte->createView()));
    }

    public function ResultatAction() {

        $formrectte = $this->get('form.factory')->create(new RecetteForm());
        $request = $this->get('request');
        $cle = $request->get('formdate');
        $date1 = $cle['date1'];
        $date2 = $cle['date2'];
        $id_user = $this->container->get('security.context')->getToken()->getUser()->getEspace();
        $form = $this->get('form.factory')->create(new ObjectifForm());

        


        $em = $this->getDoctrine()->getEntityManager();

        //C'est le nom de l'attribut qu'il faut utiliser, pas le nom de la classe
        $query = $em->createQuery("SELECT a FROM SuiviVenteBundle:Ventes a  WHERE   a.date BETWEEN '$date1' AND '$date2' AND a.espacett='$id_user' ");

        $recette = $query->getResult();
        $VenteRecette = $em->getRepository('SuiviVenteBundle:Ventes');

        $recettequantite = $VenteRecette->getrecette();
        

        if ($recette == null) {
            return new response("pas de resultat");
        } else {
            return $this->render('SuiviVenteBundle:Recette:index.html.twig', array('recette' => $recette, 'recettequantite' => $recettequantite,
                        'form' => $form->createView(), 'formdate' => $formrectte->createView()));
        }
    }

}
