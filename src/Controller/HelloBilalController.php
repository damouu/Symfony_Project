<?php

namespace App\Controller;

use App\Entity\PokemonMonsters;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloBilalController extends AbstractController
{
    /**
     * @Route("/pokemon", name="pokemon")
     */
    public function index()
    {
        $Pokemon_games = array('Pokemon_red' => 'Pokémon Red Version is the reprogrammed versions of Pocket Monsters Red',
            'Pokemon_blue' => 'Pokémon Blue Version is the reprogrammed versions of Pocket Monsters Blue',
            'Pokemon_green' => 'Pokémon Green Version is the reprogrammed versions of Pocket Monsters Green');
        /*dd($Pokemon_games); dump and die function */
        /*dump($Pokemon_games); //the dump fonction now is printed in the web debug tool bar .
        $pokemon_monsters = new PokemonMonsters();*/
        return $this->render('Pokemon.html.twig', [
            'Pokemon_games' => $Pokemon_games,
        ]);
    }
}
