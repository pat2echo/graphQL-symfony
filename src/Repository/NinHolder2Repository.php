<?php

namespace App\Repository;

use App\Entity\NinHolder2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NinHolder2>
 *
 * @method NinHolder2|null find($id, $lockMode = null, $lockVersion = null)
 * @method NinHolder2|null findOneBy(array $criteria, array $orderBy = null)
 * @method NinHolder2[]    findAll()
 * @method NinHolder2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NinHolder2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NinHolder2::class);
    }

//    /**
//     * @return NinHolder2[] Returns an array of NinHolder2 objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NinHolder2
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
