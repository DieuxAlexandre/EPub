<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taxation
 *
 * @ORM\Table(name="taxation")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\TaxationRepository")
 */
class Taxation
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
     * @var float
     *
     * @ORM\Column(name="taux", type="float")
     */
    private $taux;

    /**
     * @var int
     *
     * @ORM\Column(name="fkType", type="integer")
     */
    /**
     * Many taxation have One type
     * @ORM\ManyToOne(targetEntity="TypeTaxe")
     * @ORM\JoinColumn(name="idTypeTaxe", referencedColumnName="id")
     */
    private $fkType;


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
     * @return taxation
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
     * Set taux
     *
     * @param float $taux
     *
     * @return taxation
     */
    public function setTaux($taux)
    {
        $this->taux = $taux;

        return $this;
    }

    /**
     * Get taux
     *
     * @return float
     */
    public function getTaux()
    {
        return $this->taux;
    }

    /**
     * Set fkType
     *
     * @param integer $fkType
     *
     * @return taxation
     */
    public function setFkType($fkType)
    {
        $this->fkType = $fkType;

        return $this;
    }

    /**
     * Get fkType
     *
     * @return int
     */
    public function getFkType()
    {
        return $this->fkType;
    }
}

