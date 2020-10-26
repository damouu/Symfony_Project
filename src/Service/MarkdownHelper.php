<?php


namespace App\Service;


use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Symfony\Contracts\Cache\CacheInterface;

class MarkdownHelper
{
    private $cache;
    private $markdownParser;

    public function __construct(CacheInterface $cache, MarkdownParserInterface $markdownParser)
    {
        $this->markdownParser = $markdownParser;
        $this->cache = $cache;
    }

    public function parse(string $source): string
    {
        return $this->cache->get('speakingInEnglish', function () use ($source) {
            return $this->markdownParser->transformMarkdown($source);
        });
    }
}