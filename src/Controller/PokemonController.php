<?php

namespace App\Controller;

use App\Entity\Pokemon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PokemonController extends AbstractController
{
    /**
     * @Route("/pokemon/{id}", name="pokemon")
     * @param Pokemon $pokemon
     * @param HttpClient $httpClient
     * @return Response
     */
    public function index(Pokemon $pokemon, HttpClientInterface $httpClient): Response
    {
        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
            'pokemon' => $pokemon
        ]);
    }
}
