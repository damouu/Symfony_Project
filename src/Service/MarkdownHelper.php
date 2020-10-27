<?php


namespace App\Service;


use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\Cache\CacheInterface;

class MarkdownHelper
{


    /**
     * @var CacheInterface
     */
    private $cache;
    /**
     * @var MarkdownParserInterface
     */
    private $markdownParser;
    /**
     * @var bool
     */
    private $isDebug;
    /**
     * @var LoggerInterface
     */
    private $mdLogger;
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(CacheInterface $cache, MarkdownParserInterface $markdownParser, bool $isDebug, LoggerInterface $mdLogger)
    {
        $this->cache = $cache;
        $this->markdownParser = $markdownParser;
        $this->isDebug = $isDebug;
        $this->logger = $mdLogger;
    }

    public function parse(string $source): string
    {
        if (stripos($source, 'blue')) {
            return $this->cache->get('speakingInEnglish', function () use ($source) {
                return $this->markdownParser->transformMarkdown($source);
            });
        } else {
            $this->logger->error('there is no red in the source given');
            return $this->cache->get('speakingInEnglish', function () use ($source) {
                return $this->markdownParser->transformMarkdown($source);
            });
        }
    }
}