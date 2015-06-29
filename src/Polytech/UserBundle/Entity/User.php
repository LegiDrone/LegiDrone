<?php

namespace Polytech\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Polytech\ProjetCoBundle\Entity as Etp;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Polytech\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    public function __construct()
    {
        parent::__construct();
        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setRoles(array('ROLE_ENTREPRISE'));
        $this->setDateinscription(new \Datetime());
        $Etp = new Etp\Entreprises;
        $this->setEntreprise($Etp);
    }
    
    /**
     * @ORM\OneToMany(targetEntity="Polytech\EcommerceBundle\Entity\UtilisateursAdresses", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $adresses;
    
    /**
     * @ORM\ManyToOne(targetEntity="Polytech\ProjetCoBundle\Entity\Entreprises", inversedBy="employes", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable =true)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable =true)
     */
    protected $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="numrue", type="string", length=11, nullable =true)
     */
    protected $numrue;

    /**
     * @var string
     *
     * @ORM\Column(name="nomrue", type="string", length=255, nullable =true)
     */
    protected $nomrue;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5, nullable =true)
     */
    protected $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable =true)
     */
    protected $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="civilite", type="smallint", nullable =true)
     */
    protected $civilite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateinscription", type="datetime", nullable =true)
     */
    protected $dateinscription;
    
    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }


    /**
     * Set civilite
     *
     * @param integer $civilite
     *
     * @return User
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return integer
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set dateinscription
     *
     * @param \DateTime $dateinscription
     *
     * @return User
     */
    public function setDateinscription($dateinscription)
    {
        $this->dateinscription = $dateinscription;

        return $this;
    }

    /**
     * Get dateinscription
     *
     * @return \DateTime
     */
    public function getDateinscription()
    {
        return $this->dateinscription;
    }
    
    public function eraseCredentials()
  {
  }

    /**
     * Add adress
     *
     * @param \Polytech\EcommerceBundle\Entity\UtilisateursAdresses $adress
     *
     * @return User
     */
    public function addAdress(\Polytech\EcommerceBundle\Entity\UtilisateursAdresses $adress)
    {
        $this->adresses[] = $adress;

        return $this;
    }

    /**
     * Remove adress
     *
     * @param \Polytech\EcommerceBundle\Entity\UtilisateursAdresses $adress
     */
    public function removeAdress(\Polytech\EcommerceBundle\Entity\UtilisateursAdresses $adress)
    {
        $this->adresses->removeElement($adress);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }

    /**
     * Set entreprise
     *
     * @param \Polytech\ProjetCoBundle\Entity\Entreprises $entreprise
     *
     * @return User
     */
    public function setEntreprise(\Polytech\ProjetCoBundle\Entity\Entreprises $entreprise)
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
     * Set numrue
     *
     * @param string $numrue
     *
     * @return User
     */
    public function setNumrue($numrue)
    {
        $this->numrue = $numrue;

        return $this;
    }

    /**
     * Get numrue
     *
     * @return string
     */
    public function getNumrue()
    {
        return $this->numrue;
    }

    /**
     * Set nomrue
     *
     * @param string $nomrue
     *
     * @return User
     */
    public function setNomrue($nomrue)
    {
        $this->nomrue = $nomrue;

        return $this;
    }

    /**
     * Get nomrue
     *
     * @return string
     */
    public function getNomrue()
    {
        return $this->nomrue;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return User
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }
}
