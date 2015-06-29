<?php

namespace Polytech\DronesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Polytech\ProjetCoBundle\Entity as Etp;

/**
 * Drones
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Polytech\DronesBundle\Entity\DronesRepository")
 */
class Drones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    public function __construct(Etp\Entreprises $etp = null)
    {
        $this->setEntreprise($etp);
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="Polytech\ProjetCoBundle\Entity\Entreprises", inversedBy="drones")
     * 
     */
    private $entreprise;
    
    /**
     * @ORM\ManyToOne(targetEntity="Polytech\GestionFichiersBundle\Entity\Fichier", inversedBy="drone",cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $document;
    
    /**
     *
     * @ORM\OneToOne(targetEntity="Polytech\EcommerceBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $media;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Approval", type="string", length=255)
     */
    private $approval;


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
     * Set name
     *
     * @param string $name
     *
     * @return Drones
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set approval
     *
     * @param string $approval
     *
     * @return Drones
     */
    public function setApproval($approval)
    {
        $this->approval = $approval;

        return $this;
    }

    /**
     * Get approval
     *
     * @return string
     */
    public function getApproval()
    {
        return $this->approval;
    }

    /**
     * Set entreprise
     *
     * @param \Polytech\ProjetCoBundle\Entity\Entreprises $entreprise
     *
     * @return Drones
     */
    public function setEntreprise(\Polytech\ProjetCoBundle\Entity\Entreprises $entreprise = null)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return \Polytech\ProjetCoBundle\Entity\Entreprises
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }
    

    /**
     * Get media
     *
     * @return \Polytech\EcommerceBundle\Entity\Media
     */
    public function getMedia()
    {
        return $this->media;
    }


    /**
     * Set media
     *
     * @param \Polytech\EcommerceBundle\Entity\Media $media
     *
     * @return Drones
     */
    public function setMedia(\Polytech\EcommerceBundle\Entity\Media $media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Set document
     *
     * @param \Polytech\GestionFichiersBundle\Entity\Fichier $document
     *
     * @return Drones
     */
    public function setDocument(\Polytech\GestionFichiersBundle\Entity\Fichier $document = null)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return \Polytech\GestionFichiersBundle\Entity\Fichier
     */
    public function getDocument()
    {
        return $this->document;
    }
    
    public function __toString()
    {
        return $this->getName();
    }
}
