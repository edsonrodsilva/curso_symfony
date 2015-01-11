<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $nome = array(
            "nome" => "Edson",
            "sobrenome" => "Rodrigues",
            "idade" => "35",
            "sexo" => "M"
        );
        return $this->render('AppBundle:Default:index.html.twig', $nome);
    }

    /**
     * @Route("/run/{marca}/{modelo}")
     */
    public function runCar($marca, $modelo)
    {
        $carro = array(
            "marca" => $marca,
            "modelo" => $modelo
        );

        return $this->render('AppBundle:Default:runcar.html.twig', $carro);

    }
}
