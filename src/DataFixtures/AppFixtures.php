<?php

namespace App\DataFixtures;

use App\Factory\PeopleFactory;
use App\Factory\PokemonMonstersFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //PokemonMonstersFactory::new()->createMany(3);
        PeopleFactory::new()->createMany(10);
    }
}
