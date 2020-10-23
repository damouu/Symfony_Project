<?php

namespace App\Controller;

use App\Entity\PokemonMonsters;
use App\Repository\PokemonMonstersRepository;
use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
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
     * @return Response
     */
    public function getPokemonId(CacheInterface $cache, PokemonMonsters $pokemonMonsters, MarkdownParserInterface $markdownParser): Response
    {
        $random_Text = "the visitor is like the *red* `cows` ";
        $dede = $cache->get('speakingInEnglish', function () use ($random_Text, $markdownParser) {
            return $markdownParser->transformMarkdown($random_Text);
        });
        return $this->render('pokemon_monsters/index.html.twig', [
            'controller_name' => 'PokemonMonstersController',
            'pokemon' => $pokemonMonsters,
            'dede' => $dede
        ]);
    }

    /**
     * @Route ("/pokemon/monsters/", name="post_pokemon", methods={"get","HEAD"})
     * @param PokemonMonsters $pokemonMonsters
     * @return Response
     */
    public function postPokemon(PokemonMonstersRepository $pokemonMonstersRepository): Response
    {
        $dede = $pokemonMonstersRepository->findAttack100();
        dd($dede);
    }
}
