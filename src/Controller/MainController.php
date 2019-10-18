<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        /*return $this->json([
            'message' => 'Welcome to ivan new controller!',
            'path' => 'src/Controller/MainController.php',
        ]);*/

        return $this->render('home/index.html.twig');

    }

    /**
     * @Route("/customer/{name?}", name="customer")
     */
    public function custom(Request $request)
    {
        //dump($request->get("name"));
        $name = $request->get("name");
        return $this->render('home/custom.html.twig', [
            'name' => $name
        ]);
       
    }
}
