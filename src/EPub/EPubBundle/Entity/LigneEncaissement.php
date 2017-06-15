<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneEncaissement
 *
 * @ORM\Table(name="ligne_encaissement")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\LigneEncaissementRepository")
 */
class LigneEncaissement
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
     * @ORM\Column(name="fkTicket", type="integer")
     */
    /**
     * Many ligneEncaissement have One ticket
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumn(name="idTicket", referencedColumnName="id")
     */
    private $fkTicket;

    /**
     * @var int
     *
     * @ORM\Column(name="fkCaisse", type="integer")
     */
    /**
     * Many ligneEncaissement have One caisse
     * @ORM\ManyToOne(targetEntity="Caisse")
     * @ORM\JoinColumn(name="idCaisse", referencedColumnName="id")
     */
    private $fkCaisse;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEncaissement", type="datetime")
     */
    private $dateEncaissement;


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
     * @return ligneEncaissement
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
     * Set fkTicket
     *
     * @param integer $fkTicket
     *
     * @return ligneEncaissement
     */
    public function setFkTicket($fkTicket)
    {
        $this->fkTicket = $fkTicket;

        return $this;
    }

    /**
     * Get fkTicket
     *
     * @return int
     */
    public function getFkTicket()
    {
        return $this->fkTicket;
    }

    /**
     * Set fkCaisse
     *
     * @param integer $fkCaisse
     *
     * @return ligneEncaissement
     */
    public function setFkCaisse($fkCaisse)
    {
        $this->fkCaisse = $fkCaisse;

        return $this;
    }

    /**
     * Get fkCaisse
     *
     * @return int
     */
    public function getFkCaisse()
    {
        return $this->fkCaisse;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return ligneEncaissement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set dateEncaissement
     *
     * @param \DateTime $dateEncaissement
     *
     * @return ligneEncaissement
     */
    public function setDateEncaissement($dateEncaissement)
    {
        $this->dateEncaissement = $dateEncaissement;

        return $this;
    }

    /**
     * Get dateEncaissement
     *
     * @return \DateTime
     */
    public function getDateEncaissement()
    {
        return $this->dateEncaissement;
    }
}

