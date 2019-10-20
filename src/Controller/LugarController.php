<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Lugar;
use App\Repository\LugarRepository;

/**
     * @Route("/lugar", name="lugar.")
     */

class LugarController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param PostRepository $postRepository
     * @return Response
     */
    public function index(LugarRepository $lugarRepository)
    {
        $lugares = $lugarRepository->findAll();

        dump($lugares);
        return $this->render('lugar/index.html.twig', [
            'controller_name' => 'LugarController',
        ]);
    }

    /**
     * @Route("/crear", name="crear")
     * @param Request $request
     */
    public function create(Request $request)
    {
        //crear nuevo lugar
        $lugar = new Lugar();
        $lugar->setNombre('hotel xxx');
        $lugar->setDireccion('direccion calle xxx');
        $lugar->setLinkgmaps('https://maps.google.com');
        $lugar->setOperaciones('[1,2,3]');
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($lugar);
        $em->flush();

        return new Response('Lugar creado');

    }
}
