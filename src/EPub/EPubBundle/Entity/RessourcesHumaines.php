<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RessourcesHumaines
 *
 * @ORM\Table(name="ressources_humaines")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\RessourcesHumainesRepository")
 */
class RessourcesHumaines
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroTel", type="integer")
     */
    private $numeroTel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroSIRET", type="string", length=255, nullable=true)
     */
    private $numeroSIRET;

    /**
     * @var int
     *
     * @ORM\Column(name="fkDroits", type="integer")
     */
    /**
     * Many utilisateurs have One droits
     * @ORM\ManyToOne(targetEntity="droits")
     * @ORM\JoinColumn(name="idDroits", referencedColumnName="id")
     */
    private $fkDroits;

    /**
     * @var bool
     *
     * @ORM\Column(name="actif", type="boolean")
     */
    /**
     * Many utilisateurs have One droits
     * @ORM\ManyToOne(targetEntity="Droits")
     * @ORM\JoinColumn(name="idDroits", referencedColumnName="id")
     */
    private $actif;


    /**
     * Get id
     *
     * @return int
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
     * @return ressourcesHumaines
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return ressourcesHumaines
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set numeroTel
     *
     * @param integer $numeroTel
     *
     * @return ressourcesHumaines
     */
    public function setNumeroTel($numeroTel)
    {
        $this->numeroTel = $numeroTel;

        return $this;
    }

    /**
     * Get numeroTel
     *
     * @return int
     */
    public function getNumeroTel()
    {
        return $this->numeroTel;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return ressourcesHumaines
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set numeroSIRET
     *
     * @param string $numeroSIRET
     *
     * @return ressourcesHumaines
     */
    public function setNumeroSIRET($numeroSIRET)
    {
        $this->numeroSIRET = $numeroSIRET;

        return $this;
    }

    /**
     * Get numeroSIRET
     *
     * @return string
     */
    public function getNumeroSIRET()
    {
        return $this->numeroSIRET;
    }

    /**
     * Set fkDroits
     *
     * @param integer $fkDroits
     *
     * @return ressourcesHumaines
     */
    public function setFkDroits($fkDroits)
    {
        $this->fkDroits = $fkDroits;

        return $this;
    }

    /**
     * Get fkDroits
     *
     * @return int
     */
    public function getFkDroits()
    {
        return $this->fkDroits;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     *
     * @return ressourcesHumaines
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return bool
     */
    public function getActif()
    {
        return $this->actif;
    }
}

