<?php

namespace Suivi\SuiviBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CalenderController extends Controller {

    public function indexAction() {
        return $this->render('SuiviVenteBundle:Calender:calender.html.twig');
    }



}
