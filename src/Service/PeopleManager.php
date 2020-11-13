<?php


namespace App\Service;


use App\Entity\People;
use App\Form\PeopleFormType;
use App\Repository\PeopleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Cache\InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Cache\CacheInterface;

class PeopleManager
{
    /**
     * @var PeopleFormType
     */
    private $peopleFormType;
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;
    /**
     * @var PeopleRepository
     */
    private $peopleRepository;
    /**
     * @var CacheInterface
     */
    private $cache;
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var SerializerInterface
     */
    private $serializer;
    /**
     * @var FormInterface
     */
    private $form;

    /**
     * PeopleManager constructor.
     * @param FormInterface $form
     * @param SerializerInterface $serializer
     * @param AdapterInterface $cache
     * @param LoggerInterface $logger
     * @param PeopleFormType $peopleFormType
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param EntityManagerInterface $entityManager
     * @param PeopleRepository $peopleRepository
     */
    public function __construct(FormInterface $form, SerializerInterface $serializer, AdapterInterface $cache, LoggerInterface $logger, PeopleFormType $peopleFormType, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager, PeopleRepository $peopleRepository)
    {
        $this->peopleFormType = $peopleFormType;
        $this->passwordEncoder = $passwordEncoder;
        $this->entityManager = $entityManager;
        $this->peopleRepository = $peopleRepository;
        $this->cache = $cache;
        $this->logger = $logger;
        $this->serializer = $serializer;
        $this->form = $form;
    }

    public function cache(string $people)
    {
        $item = $this->cache->getItem('people' . md5($people));
        $this->cache->save($item);
    }

    public function log(string $source)
    {
        $this->logger->info($source);
    }
}