<?php

namespace Polytech\GestionFichiersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Polytech\DepartementBundle\Departement\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Fichier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Polytech\GestionFichiersBundle\Entity\FichierRepository")
 */
class Fichier
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;
	
	/**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=255)
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=255)
     */
    private $lien;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer")
     */
    private $taille;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateValiditee", type="date")
     */
    private $dateValiditee;
	
	private $file;
	
	/**
	  * @ORM\ManyToOne(targetEntity="Polytech\DepartementBundle\Entity\Departement", cascade={"persist"})
	  * @ORM\JoinColumn(nullable=true)
	  */
	private $departement;
	
	/**
	  * @ORM\ManyToOne(targetEntity="Polytech\ProjetCoBundle\Entity\Entreprises", inversedBy="documents")
	  * @ORM\JoinColumn(nullable=true)
	  */
	private $entreprise;
    
    /**
     * @ORM\ManyToOne(targetEntity="Polytech\DronesBundle\Entity\Drones", inversedBy="document",cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $drone;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Fichier
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }
	
	/**
     * Set extension
     *
     * @param string $extension
     *
     * @return Fichier
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
    
        return $this;
    }

	 /**
     * Set type
     *
     * @param string $type
     *
     * @return Fichier
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }
	
    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
	
	/**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }
	
	/**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set lien
     *
     * @param string $lien
     *
     * @return Fichier
     */
    public function setLien($lien)
    {
        $this->lien = $lien;
    
        return $this;
    }

    /**
     * Get lien
     *
     * @return string
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Fichier
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     *
     * @return Fichier
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    
        return $this;
    }

    /**
     * Get taille
     *
     * @return integer
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set dateValiditee
     *
     * @param \DateTime $dateValiditee
     *
     * @return Fichier
     */
    public function setDateValiditee($dateValiditee)
    {
        $this->dateValiditee = $dateValiditee;
    
        return $this;
    }

    /**
     * Get dateValiditee
     *
     * @return \DateTime
     */
    public function getDateValiditee()
    {
        return $this->dateValiditee;
    }
	
	//gestion du département
	public function getDepartement()
	  {
		return $this->departement;
	  }

	public function setDepartement(\Polytech\DepartementBundle\Entity\Departement $departement = null)
	{
		$this->departement = $departement;
	}
	
	//gestion de l'entreprise
	public function getEntreprise()
	  {
		return $this->entreprise;
	  }

	public function setEntreprise(\Polytech\ProjetCoBundle\Entity\Entreprises $entreprise = null)
	{
		$this->entreprise = $entreprise;
	}
    
    //gestion du département
	public function getDrone()
	  {
		return $this->drone;
	  }

	public function setDrone(\Polytech\DronesBundle\Entity\drones $drone = null)
	{
		$this->drone = $drone;
	}
	
	//Fonction qui permettent de gérer les fichiers
	public function getFile()
	  {
		return $this->file;
	  }

	public function setFile(UploadedFile $file = null)
	{
		$this->file = $file;
	}
		
	public function __construct()
	{
		$this->dateValiditee = new \DateTime();
		$this->type = "Défaut";
	}
	
	public function upload()
	{
		// Si jamais il n'y a pas de fichier (champ facultatif), on ne fait rien
		if (null === $this->file) {
			return;
		}
		//On récupère la taille
		$this->taille = $this->file->getSize();
		
		//On récupère l'extension
		$this->extension = $this->file->getClientOriginalExtension();
		
		// On déplace le fichier envoyé dans le répertoire de notre choix
		$this->file->move($this->getUploadRootDir(), $this->titre.".".$this->extension);

		// On sauvegarde le nom de fichier dans notre attribut $lien
		$this->lien = $this->getUploadRootDir()."/".$this->titre.".".$this->extension;		
	}

	public function getUploadDir()
	{
		$lien = 'uploads/img/'.$this->entreprise;
		if(!file_exists($lien)){ //Si le dossier existe pas on le crée
			mkdir($lien);
		}
		// On retourne le chemin relatif vers l'image pour un navigateur (relatif au répertoire /web donc)
		return $lien;
	}

	protected function getUploadRootDir()
	{
		// On retourne le chemin relatif vers l'image pour notre code PHP
		return __DIR__.'/../../../../web/'.$this->getUploadDir();
	}
	
	public function deleteFromServer()
	{
		unlink($this->lien);
	}
}
