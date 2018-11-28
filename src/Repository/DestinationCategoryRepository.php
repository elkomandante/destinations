<?php

namespace App\Repository;

use App\Entity\DestinationCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DestinationCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method DestinationCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method DestinationCategory[]    findAll()
 * @method DestinationCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DestinationCategoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DestinationCategory::class);
    }

//    /**
//     * @return DestinationCategory[] Returns an array of DestinationCategory objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DestinationCategory
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
