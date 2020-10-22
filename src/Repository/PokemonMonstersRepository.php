<?php

namespace App\Repository;

use App\Entity\PokemonMonsters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PokemonMonsters|null find($id, $lockMode = null, $lockVersion = null)
 * @method PokemonMonsters|null findOneBy(array $criteria, array $orderBy = null)
 * @method PokemonMonsters[]    findAll()
 * @method PokemonMonsters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PokemonMonstersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PokemonMonsters::class);
    }


    public function findAttack100(QueryBuilder $queryBuilder): QueryBuilder
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.attack > 100')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * @return PokemonMonsters[] Returns an array of PokemonMonsters objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PokemonMonsters
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
