<?php

namespace App\Controller;

use App\Entity\Pokemon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PokemonController extends AbstractController
{
    /**
     * @Route("/pokemon/{id}", name="pokemon")
     * @param HttpClientInterface $client
     * @param Pokemon $pokemon
     * @return Response
     */
    public function index(HttpClientInterface $client, Pokemon $pokemon): Response
    {
        $pokemonGif = "https://projectpokemon.org/images/normal-sprite/" . lcfirst($pokemon->getName()) . ".gif";
        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
            'pokemon' => $pokemon,
            'pokemonGif' => $pokemonGif
        ]);
    }
}
