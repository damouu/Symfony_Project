<?php

namespace App\Factory;

use App\Entity\People;
use App\Repository\PeopleRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static People|Proxy findOrCreate(array $attributes)
 * @method static People|Proxy random()
 * @method static People[]|Proxy[] randomSet(int $number)
 * @method static People[]|Proxy[] randomRange(int $min, int $max)
 * @method static PeopleRepository|RepositoryProxy repository()
 * @method People|Proxy create($attributes = [])
 * @method People[]|Proxy[] createMany(int $number, $attributes = [])
 */
final class PeopleFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://github.com/zenstruck/foundry#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            'title' => self::faker()->title,
            'first_name' => self::faker()->firstName,
            'last_name' => self::faker()->lastName,
            'age' => self::faker()->numberBetween(0, 122),
            'email' => self::faker()->email,
            'password' => self::faker()->password(6, 20),
            'agreedTermsAt' => self::faker()->date(),
        ];
    }

    protected function initialize(): self
    {
        // see https://github.com/zenstruck/foundry#initialization
        return $this// ->afterInstantiate(function(People $people) {})
            ;
    }

    protected static function getClass(): string
    {
        return People::class;
    }
}
