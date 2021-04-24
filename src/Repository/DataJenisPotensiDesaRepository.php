<?php

namespace App\Repository;

use App\Entity\DataJenisPotensiDesa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataJenisPotensiDesa|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataJenisPotensiDesa|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataJenisPotensiDesa[]    findAll()
 * @method DataJenisPotensiDesa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataJenisPotensiDesaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataJenisPotensiDesa::class);
    }

    // /**
    //  * @return DataJenisPotensiDesa[] Returns an array of DataJenisPotensiDesa objects
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
    public function findOneBySomeField($value): ?DataJenisPotensiDesa
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
