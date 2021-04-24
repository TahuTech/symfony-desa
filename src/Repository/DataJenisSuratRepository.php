<?php

namespace App\Repository;

use App\Entity\DataJenisSurat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataJenisSurat|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataJenisSurat|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataJenisSurat[]    findAll()
 * @method DataJenisSurat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataJenisSuratRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataJenisSurat::class);
    }

    // /**
    //  * @return DataJenisSurat[] Returns an array of DataJenisSurat objects
    //  */
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
    public function findOneBySomeField($value): ?DataJenisSurat
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
