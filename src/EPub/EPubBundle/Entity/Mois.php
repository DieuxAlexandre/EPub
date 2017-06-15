<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mois
 *
 * @ORM\Table(name="mois")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\MoisRepository")
 */
class Mois
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
     * @var int
     *
     * @ORM\Column(name="fkAnnee", type="integer")
     */
    /**
     * Many mois have One annee
     * @ORM\ManyToOne(targetEntity="annee")
     * @ORM\JoinColumn(name="idAnnee", referencedColumnName="id")
     */
    private $fkAnnee;


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
     * @return mois
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
     * Set fkAnnee
     *
     * @param integer $fkAnnee
     *
     * @return mois
     */
    public function setFkAnnee($fkAnnee)
    {
        $this->fkAnnee = $fkAnnee;

        return $this;
    }

    /**
     * Get fkAnnee
     *
     * @return int
     */
    public function getFkAnnee()
    {
        return $this->fkAnnee;
    }
}

