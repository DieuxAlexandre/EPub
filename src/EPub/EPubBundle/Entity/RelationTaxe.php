<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use taxation;
use ligneTicket;

/**
 * RelationTaxe
 *
 * @ORM\Table(name="relation_taxe")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\RelationTaxeRepository")
 */
class RelationTaxe
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
     * @ORM\Column(name="fkLigneTicket", type="integer")
     */
    /**
     * Une taxe correspond a plusieurs lignes ticket
     * @ORM\ManyToOne(targetEntity="LigneTicket")
     * @ORM\JoinColumn(name="idLigneTicket", referencedColumnName="id")
     */
    private $fkLigneTicket;

    /**
     * @var int
     *
     * @ORM\Column(name="fkTaxation", type="integer")
     */
    /**
     * Une taxe correspond a plusieurs taxations
     * @ORM\ManyToOne(targetEntity="Taxation")
     * @ORM\JoinColumn(name="idTaxation", referencedColumnName="id")
     */
    private $fkTaxation;


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
     * Set fkLigneTicket
     *
     * @param integer $fkLigneTicket
     *
     * @return relationTaxe
     */
    public function setFkLigneTicket($fkLigneTicket)
    {
        $this->fkLigneTicket = $fkLigneTicket;

        return $this;
    }

    /**
     * Get fkLigneTicket
     *
     * @return int
     */
    public function getFkLigneTicket()
    {
        return $this->fkLigneTicket;
    }

    /**
     * Set fkTaxation
     *
     * @param integer $fkTaxation
     *
     * @return relationTaxe
     */
    public function setFkTaxation($fkTaxation)
    {
        $this->fkTaxation = $fkTaxation;

        return $this;
    }

    /**
     * Get fkTaxation
     *
     * @return int
     */
    public function getFkTaxation()
    {
        return $this->fkTaxation;
    }
}

