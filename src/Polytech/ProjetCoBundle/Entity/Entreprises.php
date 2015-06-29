<?php

namespace Polytech\ProjetCoBundle\Entity;

/**
 * Entreprises
 */
class Entreprises
{
    /**
     * @var integer
     */
    private $id;
    
    public function __construct()
    {
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->drones =  new \Doctrine\Common\Collections\ArrayCollection();
        $this->employes =  new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Polytech\EcommerceBundle\Entity\Commandes", mappedBy="entreprise", cascade={"persist"})
     *@ORM\JoinColumn(nullable=true)
     */
    private $commandes;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Polytech\DronesBundle\Entity\Drones", mappedBy="entreprise", cascade={"persist"})
     *@ORM\JoinColumn(nullable=true)
     */
    private $drones;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Polytech\GestionFichierBundle\Entity\Fichier", mappedBy="entreprise", cascade={"persist"})
     *@ORM\JoinColumn(nullable=true)
     */
    private $documents;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Polytech\UserBundle\Entity\User", mappedBy="entreprise", cascade={"persist"})
     *@ORM\JoinColumn(nullable=true)
     */
    private $employes;
    
    /**
     * @var string
     */
    private $nom;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Entreprises
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    
        public function __toString()
    {
        return $this->getNom();
    }
    
    /**
     * Add commande
     *
     * @param \Polytech\EcommerceBundle\Entity\Commandes $commande
     *
     * @return Commandes
     */
    public function addCommande(\Polytech\EcommerceBundle\Entity\Commandes $commande)
    {
        $this->commandes[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \Polytech\EcommerceBundle\Entity\Commandes $commande
     */
    public function removeCommande(\Polytech\EcommerceBundle\Entity\Commandes $commande)
    {
        $this->commandes->removeElement($commande);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
        return $this->commandes;
    }
    
    /**
     * Add drone
     *
     * @param \Polytech\DronesBundle\Entity\Drones $drone
     *
     * @return Entreprises
     */
    public function addDrone(\Polytech\DronesBundle\Entity\Drones $drone)
    {
        $this->drones[] = $drone;

        return $this;
    }

    /**
     * Remove drone
     *
     * @param \Polytech\DronesBundle\Entity\Drones $drone
     */
    public function removeDrone(\Polytech\DronesBundle\Entity\Drones $drone)
    {
        $this->drones->removeElement($drone);
    }

    /**
     * Get drones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDrones()
    {
        return $this->drones;
    }
    
    /**
     * Add employe
     *
     * @param \Polytech\UserBundle\Entity\User $employes
     *
     * @return Entreprise
     */
    public function addEmploye(\Polytech\UserBundle\Entity\User $employes)
    {
        $this->employes[] = $employes;

        return $this;
    }

    /**
     * Remove employes
     *
     * @param \Polytech\UserBundle\Entity\User $employes
     */
    public function removeEmploye(\Polytech\UserBundle\Entity\User $employes)
    {
        $this->employes->removeElement($employes);
    }

    /**
     * Get drones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmployes()
    {
        return $this->employes;
    }
}
