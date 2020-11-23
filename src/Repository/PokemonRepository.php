<?php

namespace App\Repository;

use App\Entity\Pokemon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pokemon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pokemon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pokemon[]    findAll()
 * @method Pokemon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PokemonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pokemon::class);
    }

    /**
     * @param $value
     * @return Pokemon[] Returns an array of Pokemon objects
     */

    public function findByExampleField($value): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.defense = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }


    public function findOneBySpeed($value): ?Pokemon
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.speed = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
    }

}
