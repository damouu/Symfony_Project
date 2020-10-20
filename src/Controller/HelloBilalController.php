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
        $Pokemon_games = array('Pokemon_red', 'Pokemon_blue', 'Pokemon_green');
        return $this->render('Pokemon.html.twig', [
            'Pokemon_games' => $Pokemon_games,
        ]);
    }
}
