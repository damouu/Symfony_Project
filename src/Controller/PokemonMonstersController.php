<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PokemonMonstersController extends AbstractController
{
    /**
     * @Route("/pokemon/monsters", name="pokemon_monsters")
     */
    public function index()
    {
        return $this->render('pokemon_monsters/index.html.twig', [
            'controller_name' => 'PokemonMonstersController',
        ]);
    }
}
