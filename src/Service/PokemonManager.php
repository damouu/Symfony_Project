<?php


namespace App\Service;


use App\Entity\Pokemon;
use App\Repository\PokemonRepository;
use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\Cache\CacheInterface;

class PokemonManager
{
    /**
     * @var Pokemon
     */
    private $pokemon;
    /**
     * @var PokemonRepository
     */
    private $pokemonRepository;
    /**
     * @var CacheInterface
     */
    private $cache;
    /**
     * @var MarkdownParserInterface
     */
    private $markdownParser;
    /**
     * @var LoggerInterface
     */
    private $mdLogger;

    /**
     * PokemonManager constructor.
     * @param Pokemon $pokemon
     * @param PokemonRepository $pokemonRepository
     * @param CacheInterface $cache
     * @param MarkdownParserInterface $markdownParser
     * @param LoggerInterface $mdLogger
     */
    public function __construct(Pokemon $pokemon, PokemonRepository $pokemonRepository, CacheInterface $cache, MarkdownParserInterface $markdownParser, LoggerInterface $mdLogger)
    {
        $this->pokemon = $pokemon;
        $this->pokemonRepository = $pokemonRepository;
        $this->cache = $cache;
        $this->markdownParser = $markdownParser;
        $this->mdLogger = $mdLogger;
    }
}