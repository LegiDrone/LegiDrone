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
    }
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Polytech\EcommerceBundle\Entity\Commandes", mappedBy="entreprise", cascade={"persist"})
     *@ORM\JoinColumn(nullable=true)
     */
    private $commandes;
    
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
    
        /**
     * Add commande
     *
     * @param \Polytech\EcommerceBundle\Entity\Commandes $commande
     *
     * @return User
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
    
        public function __toString()
    {
        return $this->getNom();
    }
}
