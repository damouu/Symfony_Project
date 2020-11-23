<?php

namespace App\Controller;

use App\Entity\Pokemon;
use App\Repository\PokemonRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PokemonController
 * @package App\Controller
 * @Route("/pokemon", name="pokemon_")
 */
class PokemonController extends AbstractController
{
    /**
     * @Route("/{id}", name="get")
     * @param Pokemon $pokemon
     * @param PokemonRepository $pokemonRepository
     * @return Response
     */
    public function index(Pokemon $pokemon, PokemonRepository $pokemonRepository): Response
    {
        $dede = $pokemonRepository->findByExampleField(70);
        $pokemonGif = "https://projectpokemon.org/images/normal-sprite/" . lcfirst($pokemon->getName()) . ".gif";
        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
            'pokemon' => $pokemon,
            'pokemonGif' => $pokemonGif
        ]);
    }

}
