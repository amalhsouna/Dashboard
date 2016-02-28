<?php

namespace Suivi\SuiviBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Suivi\SuiviBundle\Entity\Contrats;
use Suivi\SuiviBundle\Entity\Factures;
use Suivi\SuiviBundle\Form\ContratType;


class ContratController extends Controller {

    public function AjoutcontratAction($id) {
        $message = "";

        $contrat = new Contrats();
        $facture = new Factures();

        $form = $this->get('form.factory')->create(new ContratType(), $contrat);

        $request = $this->get('request');
    
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery("SELECT u.nom,u.prenom,u.id FROM SuiviVenteBundle:Contact u where u.id=$id");
        $contactNom = $query->getResult();
        
        $nom=$contactNom[0]['prenom']." ".$contactNom[0]['nom'];
        $idpersonne=$contactNom[0]['id'];
        
        if ($request->getMethod() == 'POST') {

            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($contrat);
                $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('SuiviVenteBundle:Contact');
                $test = $repository->find($id);
                 
                $contrat->setContact($test);
                $contrat->setNbreFacture("12");
                $em->persist($facture);
                
                //changer status de contact
                $em = $this->getDoctrine()->getManager();
                $contact=$em->find('SuiviVenteBundle:Contact',$idpersonne);
                $em->persist($contact);
                $contact->setstatus("1");
		
                $em->flush();
                $message = 'Ajout effectué avec succès';
                return $this->redirect($this->generateUrl('contact_detail', array('id' => $contact->getId())));
            }
        }
        return $this->render('SuiviVenteBundle:Contrat:ajout.html.twig', array('message' => $message, 'form' => $form->createView(),'test' =>$nom));
    }

}
