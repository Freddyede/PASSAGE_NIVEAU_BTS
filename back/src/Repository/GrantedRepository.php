<?php

namespace App\Repository;

use App\Entity\Granted;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Granted|null find($id, $lockMode = null, $lockVersion = null)
 * @method Granted|null findOneBy(array $criteria, array $orderBy = null)
 * @method Granted[]    findAll()
 * @method Granted[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrantedRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Granted::class);
    }

    // /**
    //  * @return Granted[] Returns an array of Granted objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Granted
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
