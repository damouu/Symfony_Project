<?php

namespace App\Tests\Controller;

use App\Controller\PokemonController;
use PHPUnit\Framework\TestCase;

class PokemonMonstersControllerTest extends TestCase
{
    public function testPokemon(): void
    {
        $dede = 'dedepinche';
        self::assertIsString($dede);
    }
}
