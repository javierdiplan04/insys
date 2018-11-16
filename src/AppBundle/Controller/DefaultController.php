<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        //aqui se le asigna el valor a las variales
        $usuario = new Usuario();
        $usuario->setNombre("Juan");
        $usuario->setApellido( "De los Palotes");
        $usuario->setEmail( "juanp@gmail.com");
        $usuario->setPassword( "123");
        $usuario->setHabilitado(true);

        //aqui se hace la coneccion de la BD y lo inserta
        $em = $this->getDoctrine()->getManager();
        $em->persist($usuario);
        $em->flush();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/{id}", name="homepage2")
     *
     * @param Request $request
     * @param Usuario $usuario
     */
    public function index2Action(Request $request, Usuario $usuario)
    {
       // dump($usuario);
       // die;

        // replace this example code with whatever you need
        return $this->render('@App/Usuario/ver_usuario.html.twig',
        [
            "usuario" => $usuario
        ]
            );
    }
}
