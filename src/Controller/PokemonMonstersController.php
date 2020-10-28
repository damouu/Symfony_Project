<?php

namespace App\Controller;

use App\Entity\PokemonMonsters;
use App\Repository\PokemonMonstersRepository;
use App\Service\MarkdownHelper;
use Sentry\State\HubInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class PokemonMonstersController extends AbstractController
{
    /**
     * @Route("/pokemon/monsters/{id}", name="pokemon_monsters", methods={"GET","HEAD"})
     * @param HubInterface $sentryHub
     * @param PokemonMonsters $pokemonMonsters
     * @param MarkdownHelper $markdownHelper
     * @param bool $isDebug
     * @return Response
     * @throws \Exception
     */
    public function getPokemonId(HubInterface $sentryHub, PokemonMonsters $pokemonMonsters, MarkdownHelper $markdownHelper, bool $isDebug): Response
    {
        dump($sentryHub);
        if ($isDebug) {
            dump($isDebug);
        } else {
            throw new \Exception('appear in sentry.io please'); // this line is an exemple to Sentry.io
        }
        $random_Text = "the visitor is like a *red* `cows` ";
        dump($this->getParameter('cache_adapter'));
        $parsedQuestionText = $markdownHelper->parse($random_Text);
        return $this->render('pokemon_monsters/index.html.twig', [
            'controller_name' => 'PokemonMonstersController',
            'PokemonMonsters' => $pokemonMonsters,
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
