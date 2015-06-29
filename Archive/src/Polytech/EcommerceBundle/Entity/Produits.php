<?php

namespace Polytech\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Polytech\EcommerceBundle\Entity\ProduitsRepository")
 */
class Produits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     *
     * @ORM\OneToOne(targetEntity="Polytech\EcommerceBundle\Entity\Media", cascade={"persist","remove"})
     *@ORM\JoinColumn(nullable=false)
     */
    private $media_id;
        
    /**
     *
     * @ORM\ManyToOne(targetEntity="Polytech\EcommerceBundle\Entity\Tva", cascade={"persist"})
     *@ORM\JoinColumn(nullable=false)
     */
    private $tva_id;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Polytech\EcommerceBundle\Entity\Categories", cascade={"persist"})
     *@ORM\JoinColumn(nullable=false)
     */
    private $categories_id;
    

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;


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
     * @return Produits
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
     * Set description
     *
     * @param string $description
     *
     * @return Produits
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Produits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     *
     * @return Produits
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set mediaId
     *
     * @param \Polytech\EcommerceBundle\Entity\Media $mediaId
     *
     * @return Produits
     */
    public function setMediaId(\Polytech\EcommerceBundle\Entity\Media $mediaId)
    {
        $this->media_id = $mediaId;

        return $this;
    }

    /**
     * Get mediaId
     *
     * @return \Polytech\EcommerceBundle\Entity\Media
     */
    public function getMediaId()
    {
        return $this->media_id;
    }

    /**
     * Set tvaId
     *
     * @param \Polytech\EcommerceBundle\Entity\Tva $tvaId
     *
     * @return Produits
     */
    public function setTvaId(\Polytech\EcommerceBundle\Entity\Tva $tvaId)
    {
        $this->tva_id = $tvaId;

        return $this;
    }

    /**
     * Get tvaId
     *
     * @return \Polytech\EcommerceBundle\Entity\Tva
     */
    public function getTvaId()
    {
        return $this->tva_id;
    }

    /**
     * Set categoriesId
     *
     * @param \Polytech\EcommerceBundle\Entity\Categories $categoriesId
     *
     * @return Produits
     */
    public function setCategoriesId(\Polytech\EcommerceBundle\Entity\Categories $categoriesId)
    {
        $this->categories_id = $categoriesId;

        return $this;
    }

    /**
     * Get categoriesId
     *
     * @return \Polytech\EcommerceBundle\Entity\Categories
     */
    public function getCategoriesId()
    {
        return $this->categories_id;
    }
}
