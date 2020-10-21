<?php

namespace App\Controller;

use App\Repository\PokemonMonstersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class PokemonMonstersController extends AbstractController
{
    /**
     * @Route("/pokemon/monsters/{id}", name="pokemon_monsters", methods={"GET","HEAD"})
     * @param int $id
     * @param PokemonMonstersRepository $pokemonMonstersRepository
     * @return Response
     */
    public function getPokemonId(int $id, PokemonMonstersRepository $pokemonMonstersRepository): Response
    {
        $pokemon = $pokemonMonstersRepository->findOneBy(['id' => $id]);
        /*$test = $pokemonMonstersRepository->findAttack100();*/
        if (!$pokemon) {
            throw $this->createNotFoundException('Not found Pokemon');
        } else {
            return $this->render('pokemon_monsters/index.html.twig', [
                'controller_name' => 'PokemonMonstersController',
                'pokemon' => $pokemon
            ]);
        }
    }
}
