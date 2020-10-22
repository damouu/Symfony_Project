<?php

namespace App\Factory;

use App\Entity\PokemonMonsters;
use App\Repository\PokemonMonstersRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static PokemonMonsters|Proxy findOrCreate(array $attributes)
 * @method static PokemonMonsters|Proxy random()
 * @method static PokemonMonsters[]|Proxy[] randomSet(int $number)
 * @method static PokemonMonsters[]|Proxy[] randomRange(int $min, int $max)
 * @method static PokemonMonstersRepository|RepositoryProxy repository()
 * @method PokemonMonsters|Proxy create($attributes = [])
 * @method PokemonMonsters[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class PokemonMonstersFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://github.com/zenstruck/foundry#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            'name' => self::faker()->name, 'hp' => self::faker()->numberBetween(0, 200), 'attack' => self::faker()->numberBetween(0, 200), 'defense' => self::faker()->numberBetween(0, 200), 'speed' => self::faker()->numberBetween(0, 200), 'special' => self::faker()->numberBetween(0, 200), 'special_attack' => self::faker()->numberBetween(0, 200)
        ];
    }

    protected function initialize(): self
    {
        // see https://github.com/zenstruck/foundry#initialization
        return $this// ->afterInstantiate(function(PokemonMonsters $pokemonMonsters) {})
            ;
    }

    protected static function getClass(): string
    {
        return PokemonMonsters::class;
    }
}
