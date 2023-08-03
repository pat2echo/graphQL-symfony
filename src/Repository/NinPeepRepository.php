<?php

namespace App\Repository;

use App\Entity\NinPeep;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NinPeep>
 *
 * @method NinPeep|null find($id, $lockMode = null, $lockVersion = null)
 * @method NinPeep|null findOneBy(array $criteria, array $orderBy = null)
 * @method NinPeep[]    findAll()
 * @method NinPeep[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NinPeepRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NinPeep::class);
    }

//    /**
//     * @return NinPeep[] Returns an array of NinPeep objects
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

//    public function findOneBySomeField($value): ?NinPeep
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
