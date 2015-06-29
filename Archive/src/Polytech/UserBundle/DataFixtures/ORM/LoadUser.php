<?php
// src/OC/UserBundle/DataFixtures/ORM/LoadUser.php

namespace Polytech\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Polytech\UserBundle\Entity\User;

class LoadUser implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    /* Les noms d'utilisateurs à créer
    $listNames = array('Alexandre', 'Mathieu', 'Antoine','Florian','Damien','Claire');

    foreach ($listNames as $name) {
      // On crée l'utilisateur
      $user = new User;

      // Le nom d'utilisateur et le mot de passe sont identiques
      $user->setUsername($name);
      $user->setPassword($name);

      // On ne se sert pas du sel pour l'instant
      $user->setSalt('');
      // On définit uniquement le role ROLE_USER qui est le role de base
      $user->setRoles(array('ROLE_USER'));
        
        
      $user->setNom($name);
      $user->setPrenom($name);
        $user->setEmail($name & '@projetco.com');
        $user->setNumrue('7');
        $user->setNomrue('rue des lilas');
        $user->setCp('37000');
        $user->setVille('Tours');
        $user->setCivilite(1);
        $user->setDateinscription( new \Datetime());
        $user->setLastlogin( new \Datetime());
        
        

      // On le persiste
      $manager->persist($user);
    }

    // On déclenche l'enregistrement
    $manager->flush();*/
  }
    
    public function getOrder()
    {
        return 5;
    }
}