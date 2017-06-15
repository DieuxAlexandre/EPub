<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenance
 *
 * @ORM\Table(name="contenance")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\ContenanceRepository")
 */
class Contenance
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
     * @ORM\Column(name="parentID", type="integer")
     */
    private $parentID;

    /**
     * @var float
     *
     * @ORM\Column(name="ratio", type="float")
     */
    private $ratio;

    /**
     * @var bool
     *
     * @ORM\Column(name="uniteReference", type="boolean")
     */
    private $uniteReference;


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
     * @return contenance
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
     * Set parentID
     *
     * @param integer $parentID
     *
     * @return contenance
     */
    public function setParentID($parentID)
    {
        $this->parentID = $parentID;

        return $this;
    }

    /**
     * Get parentID
     *
     * @return int
     */
    public function getParentID()
    {
        return $this->parentID;
    }

    /**
     * Set ratio
     *
     * @param float $ratio
     *
     * @return contenance
     */
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;

        return $this;
    }

    /**
     * Get ratio
     *
     * @return float
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * Set uniteReference
     *
     * @param boolean $uniteReference
     *
     * @return contenance
     */
    public function setUniteReference($uniteReference)
    {
        $this->uniteReference = $uniteReference;

        return $this;
    }

    /**
     * Get uniteReference
     *
     * @return bool
     */
    public function getUniteReference()
    {
        return $this->uniteReference;
    }
}

