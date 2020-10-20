<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloBilalController extends AbstractController
{
    /**
     * @Route("/hello", name="hello_bilal")
     */
    public function index()
    {
        return $this->render('hello_bilal/index.html.twig', [
            'controller_name' => 'HelloBilalController',
        ]);
    }
}
