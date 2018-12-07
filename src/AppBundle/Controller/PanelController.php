<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PanelController extends Controller
{
    /**
     * @Route("/home", name="homepage")
     */
    public function panelAction(Request $request)
    {


        // replace this example code with whatever you need
        return $this->render('@App/Panel/home.html.twig');
    }

}
