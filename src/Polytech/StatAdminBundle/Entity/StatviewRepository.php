<?php

namespace Polytech\StatAdminBundle\Entity;

/**
 * StatviewRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class StatviewRepository extends \Doctrine\ORM\EntityRepository
{
		public function byPage($page)
    {
        $qb = $this->createQueryBuilder('u')
                ->select('u')
                ->where('u.page = :page')
                // add des filtre exemple par date) ->andWhere('u.valider > 0')
                //->andWhere('u.reference != 0')
                ->orderBy('u.id')
                ->setParameter('page', $page);
        
        return $qb->getQuery()->getResult();
    }
}