<?php

namespace App\Repository;

use App\Entity\NinHolder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NinHolder>
 *
 * @method NinHolder|null find($id, $lockMode = null, $lockVersion = null)
 * @method NinHolder|null findOneBy(array $criteria, array $orderBy = null)
 * @method NinHolder[]    findAll()
 * @method NinHolder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NinHolderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NinHolder::class);
    }

//    /**
//     * @return NinHolder[] Returns an array of NinHolder objects
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

//    public function findOneBySomeField($value): ?NinHolder
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
