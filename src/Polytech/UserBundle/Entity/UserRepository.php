<?php

namespace Polytech\UserBundle\Entity;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function byPiloteEntreprise($entreprise, $role)
    {
        $qb = $this->createQueryBuilder('u')
                ->select('u')
                ->where('u.entreprise = :entreprise')
                ->andwhere('u.roles = :roles')
                ->orderBy('u.id')
                ->setParameter('entreprise', $entreprise)
                ->setParameter('roles', $role);
        
        return $qb->getQuery()->getResult();
    }
    
}