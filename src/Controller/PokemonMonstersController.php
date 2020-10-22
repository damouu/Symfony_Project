<?php

namespace App\Controller;

use App\Entity\PokemonMonsters;
use App\Repository\PokemonMonstersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class PokemonMonstersController extends AbstractController
{
    /**
     * @Route("/pokemon/monsters/{id}", name="pokemon_monsters", methods={"GET","HEAD"})
     * @param PokemonMonsters $pokemonMonsters
     * @return Response
     */
    public function getPokemonId(PokemonMonsters $pokemonMonsters): Response
    {
        return $this->render('pokemon_monsters/index.html.twig', [
            'controller_name' => 'PokemonMonstersController',
            'pokemon' => $pokemonMonsters
        ]);
    }

    /**
     * @Route ("/pokemon/monsters", name="post_pokemon", methods={"POST","HEAD"})
     * @param PokemonMonsters $pokemonMonsters
     * @return Response
     */
    public function postPokemon(PokemonMonsters $pokemonMonsters): Response
    {
        dd($pokemonMonsters);
    }
}
