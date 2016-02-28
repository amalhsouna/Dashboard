<?php

namespace Suivi\SuiviBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;
use Suivi\SuiviBundle\Entity\Ventes;

class ChartController extends Controller
{
   public function VentestatAction()
    {  
        $em    = $this->getDoctrine()->getManager();
        $query1 = $em->createQuery("SELECT SUM(a.quantite),a.date FROM SuiviVenteBundle:Ventes a GROUP BY a.date ORDER BY a.date");
        $products1 = $query1->getResult();
        $history  =  array();
        foreach($products1 as $demandefrets){
           array_push($history, $demandefrets);
        }
       
         $x=intval($history[0][1]);
         $y=intval($history[1][1]);
         $z=intval($history[2][1]);
         $t=intval($history[3][1]);
         $d1=$history[0]['date'];
         $d2=$history[1]['date'];
         $d3=$history[2]['date'];
         $d4=$history[3]['date'];
         $arrayResultHours=$d1->format('Y-m-d');
         $arrayResultHours1=$d2->format('Y-m-d');
         $arrayResultHours2=$d3->format('Y-m-d');
         $arrayResultHours3=$d4->format('Y-m-d');
        
        $sellsHistory = array(
            array(
                "name" => "Total des ventes",
                'data'  => array($x,$y,$z,$t)
            ),


        );
        $dates = array(
          $arrayResultHours,$arrayResultHours1,$arrayResultHours2,$arrayResultHours3,
        );

        $ob = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur
        $ob->chart->renderTo('linechart');
        $ob->title->text('Vente du '.$arrayResultHours. ' au 28/08/2015');

        $ob->yAxis->title(array('text' => "Ventes (milliers d'unité)"));

        $ob->xAxis->title(array('text'  => "Date du jours"));
        $ob->xAxis->categories($dates);

        $ob->series($sellsHistory);


        return $this->render('SuiviVenteBundle:Chart:chartLine.html.twig', array(
            'linechart' => $ob
        ));
    }

public function profitsHistoryAction(){
                $sellsHistory = array(
            array(
                 "name" => "Bénéfices total",
                 "data" => array(9.1, 10.3, 6.5, 12.2, 5.3)
            ),
            array(
                 "name" => "Bénéfices Agence Ben Arous",
                 "data" => array(6.6, 8.2, 0.76, 4.6, 2.1)
            ),
            
        );

        $dates = array(
            "24/08", "25/08", "26/08", "27/08", "28/08"
        );

        $ob = new Highchart();
        // ID de l'élement de DOM que vous utilisez comme conteneur
        $ob->chart->renderTo('barchart');  
        $ob->title->text('Ventes du 24/06/2015 au 28/06/2015');
        $ob->chart->type('column');
        
        $ob->yAxis->title(array('text' => "Quantité "));

        $ob->xAxis->title(array('text' => "Date du jours"));
        $ob->xAxis->categories($dates);

        $ob->series($sellsHistory);

        return $this->render('SuiviVenteBundle:chart:chartBar.html.twig', array(
            'barchart' => $ob
        ));
    }
    
    public function piechartAction(){
 
         return $this->render('SuiviVenteBundle:Chart:PieChart.html.twig'  
          );
    }
    

}