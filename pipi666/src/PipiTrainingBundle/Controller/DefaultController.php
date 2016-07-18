<?php

namespace PipiTrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller; // klasa która pozwala na dziedziczenie mojej klasie kontrolera z klasy symfonowskiego kontrolera
use Symfony\Component\HttpFoundation\Response; //pozwala na odpowiedz za pomocą obiektu response
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; //do mapowania kontrolera za pomocą adnotacji
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template; //pozwala na generowanie szablonu za pomocą adnotacji
use Symfony\Component\HttpFoundation\Request; // pozwala na automatyczne wstrzyknięcie obiektu request do kontrolera
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // aby w adnotacji móc umieścić parametr method


class DefaultController extends Controller
{
    /**
     * @Route("/")
     *
     *
     */
    public function indexAction()
    {
        return $this->render('PipiTrainingBundle:Default:index.html.twig');
    }

    /**
     * @Route("/dupa")
     */
    public function dupaAction(){
        return new Response('Hello wdsadfsfsdorld!');
    }



}

