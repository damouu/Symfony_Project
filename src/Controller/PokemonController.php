<?php

namespace App\Controller;

use App\Entity\Pokemon;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/pokemon/{id}", name="pokemon")
     * @param Pokemon $pokemon
     * @return Response
     */
    public function index(Pokemon $pokemon): Response
    {
        $pokemonGif = "https://projectpokemon.org/images/normal-sprite/" . lcfirst($pokemon->getName()) . ".gif";
        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
            'pokemon' => $pokemon,
            'pokemonGif' => $pokemonGif
        ]);
    }
}
