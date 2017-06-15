<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journee
 *
 * @ORM\Table(name="journee")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\JourneeRepository")
 */
class Journee
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
     * @var int
     *
     * @ORM\Column(name="fkMois", type="integer")
     */
    /**
     * Many journee have One mois
     * @ORM\ManyToOne(targetEntity="Mois")
     * @ORM\JoinColumn(name="idMois", referencedColumnName="id")
     */
    private $fkMois;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOuverture", type="datetime")
     */
    private $dateOuverture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFermeture", type="datetime")
     */
    private $dateFermeture;


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
     * Set fkMois
     *
     * @param integer $fkMois
     *
     * @return journee
     */
    public function setFkMois($fkMois)
    {
        $this->fkMois = $fkMois;

        return $this;
    }

    /**
     * Get fkMois
     *
     * @return int
     */
    public function getFkMois()
    {
        return $this->fkMois;
    }

    /**
     * Set dateOuverture
     *
     * @param \DateTime $dateOuverture
     *
     * @return journee
     */
    public function setDateOuverture($dateOuverture)
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    /**
     * Get dateOuverture
     *
     * @return \DateTime
     */
    public function getDateOuverture()
    {
        return $this->dateOuverture;
    }

    /**
     * Set dateFermeture
     *
     * @param \DateTime $dateFermeture
     *
     * @return journee
     */
    public function setDateFermeture($dateFermeture)
    {
        $this->dateFermeture = $dateFermeture;

        return $this;
    }

    /**
     * Get dateFermeture
     *
     * @return \DateTime
     */
    public function getDateFermeture()
    {
        return $this->dateFermeture;
    }
}

