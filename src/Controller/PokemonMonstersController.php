<?php

namespace App\Controller;

use App\Entity\PokemonMonsters;
use App\Repository\PokemonMonstersRepository;
use App\Service\MarkdownHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\Cache\CacheInterface;

class PokemonMonstersController extends AbstractController
{
    /**
     * @Route("/pokemon/monsters/{id}", name="pokemon_monsters", methods={"GET","HEAD"})
     * @param PokemonMonsters $pokemonMonsters
     * @param MarkdownHelper $markdownHelper
     * @return Response
     */
    public function getPokemonId(CacheInterface $cache, PokemonMonsters $pokemonMonsters, MarkdownHelper $markdownHelper): Response
    {
        $random_Text = "the visitor is like the *red* `cows` ";
        dump($this->getParameter('cache_adapter'));
        $parsedQuestionText = $markdownHelper->parse($random_Text);
        return $this->render('pokemon_monsters/index.html.twig', [
            'controller_name' => 'PokemonMonstersController',
            'parsedQuestionText' => $parsedQuestionText
        ]);
    }

    /**
     * @Route ("/pokemon/monsters/", name="pokemon_100_attack", methods={"get","HEAD"})
     * @param PokemonMonsters $pokemonMonsters
     * @return Response
     */
    public function postPokemon(PokemonMonstersRepository $pokemonMonstersRepository): Response
    {
        $dede = $pokemonMonstersRepository->findAttack100();
        dd($dede);
    }

    /**
     * @Route ("/zemel/", name="zemel_route", methods={"get","HEAD"})
     * @param PokemonMonsters $pokemonMonsters
     * @return Response
     */
    public function zemel(PokemonMonstersRepository $pokemonMonstersRepository): Response
    {
        $dede = $pokemonMonstersRepository->findAttack100();
        return $this->render('pokemon_monsters/index.html.twig', [
            'controller_name' => 'PokemonMonstersController',
            'pokemon' => $dede,
            'dede' => $dede
        ]);
    }
}
