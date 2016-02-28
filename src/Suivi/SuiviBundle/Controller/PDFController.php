<?php

namespace Suivi\SuiviBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Suivi\SuiviBundle\Form\VenteForm;
use Suivi\SuiviBundle\Form\OffresType;
use Suivi\SuiviBundle\Entity\Ventes;
use Suivi\SuiviBundle\Entity\Offres;
use Suivi\SuiviBundle\Entity\Categorie;
use Suivi\SuiviBundle\Form\CategorieType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Suivi\SuiviBundle\Form\RecherchedateForm;

class PDFController extends Controller
{
   
   /*
    * retourn liste of categorie
    * myEntity type Datetime variable that contains date of day
    */
     public function pdfcatAction()
    {
        
         $categorie = $this->getDoctrine()->getRepository('SuiviVenteBundle:Categorie')->findAll();
        
         $myEntity=new \DateTime();
         $toDay=$myEntity->format('Y-m-d');
         
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->renderView('SuiviVenteBundle:PDF:categ.html.twig', array(
            'categorie' => $categorie,'myEntity' => $toDay
        ));



        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);
        $result = $html2pdf->Output("commande.pdf", true);

        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $response = new Response();
        $response->setContent($result);
        $response->headers->set('Content-Type',"commande.pdf");

        return ($response);

    }

 public function pdfoffAction()
    {
         $offre = $this->getDoctrine()->getRepository('SuiviVenteBundle:Offres')->findAll();
         $myEntity=new \DateTime();
         $toDay=$myEntity->format('Y-m-d');
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->renderView('SuiviVenteBundle:PDF:offre.html.twig', array(
            'offre' => $offre,'myEntity' => $toDay
        ));



        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);
        $result = $html2pdf->Output("commande.pdf", true);

        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $response = new Response();
        $response->setContent($result);
        $response->headers->set('Content-Type',"commande.pdf");

        return ($response);

    }
    
    
     public function pdfventeAction()
    {
      
        $id_user = $this->container->get('security.context')->getToken()->getUser()->getEspace();
        $vente = $this->getDoctrine()->getRepository('SuiviVenteBundle:Ventes')->findAll();
       
         $myEntity=new \DateTime();
         $toDay=$myEntity->format('Y-m-d');
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->renderView('SuiviVenteBundle:PDF:vente.html.twig', array(
            'vente' => $vente,'myEntity' => $toDay,'espace' => $id_user
        ));



        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);
        $result = $html2pdf->Output("commande.pdf", true);

        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $response = new Response();
        $response->setContent($result);
        $response->headers->set('Content-Type',"commande.pdf");

        return ($response);

    }
}
