<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneTicket
 *
 * @ORM\Table(name="ligne_ticket")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\LigneTicketRepository")
 */
class LigneTicket
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
     * @ORM\Column(name="fkProduit", type="integer")
     */
    /**
     * One ligneTicket has One produit
     * @ORM\OneToOne(targetEntity="Produit")
     * @ORM\JoinColumn(name="idProduit", referencedColumnName="id")
     */
    private $fkProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="fkTicket", type="integer")
     */
    private $fkTicket;

    /**
     * @var float
     *
     * @ORM\Column(name="prixHT", type="float")
     */
    private $prixHT;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="totalHT", type="float")
     */
    private $totalHT;

    /**
     * @var float
     *
     * @ORM\Column(name="totalTTC", type="float")
     */
    private $totalTTC;

    /**
     * @var float
     *
     * @ORM\Column(name="totalTaxe", type="float")
     */
    private $totalTaxe;

    /**
     * @var int
     *
     * @ORM\Column(name="fkTaxe", type="integer")
     */
    private $fkTaxe;


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
     * @return ligneTicket
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
     * Set fkProduit
     *
     * @param integer $fkProduit
     *
     * @return ligneTicket
     */
    public function setFkProduit($fkProduit)
    {
        $this->fkProduit = $fkProduit;

        return $this;
    }

    /**
     * Get fkProduit
     *
     * @return int
     */
    public function getFkProduit()
    {
        return $this->fkProduit;
    }

    /**
     * Set fkTicket
     *
     * @param integer $fkTicket
     *
     * @return ligneTicket
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
     * Set prixHT
     *
     * @param float $prixHT
     *
     * @return ligneTicket
     */
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;

        return $this;
    }

    /**
     * Get prixHT
     *
     * @return float
     */
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return ligneTicket
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set totalHT
     *
     * @param float $totalHT
     *
     * @return ligneTicket
     */
    public function setTotalHT($totalHT)
    {
        $this->totalHT = $totalHT;

        return $this;
    }

    /**
     * Get totalHT
     *
     * @return float
     */
    public function getTotalHT()
    {
        return $this->totalHT;
    }

    /**
     * Set totalTTC
     *
     * @param float $totalTTC
     *
     * @return ligneTicket
     */
    public function setTotalTTC($totalTTC)
    {
        $this->totalTTC = $totalTTC;

        return $this;
    }

    /**
     * Get totalTTC
     *
     * @return float
     */
    public function getTotalTTC()
    {
        return $this->totalTTC;
    }

    /**
     * Set totalTaxe
     *
     * @param float $totalTaxe
     *
     * @return ligneTicket
     */
    public function setTotalTaxe($totalTaxe)
    {
        $this->totalTaxe = $totalTaxe;

        return $this;
    }

    /**
     * Get totalTaxe
     *
     * @return float
     */
    public function getTotalTaxe()
    {
        return $this->totalTaxe;
    }

    /**
     * Set fkTaxe
     *
     * @param integer $fkTaxe
     *
     * @return ligneTicket
     */
    public function setFkTaxe($fkTaxe)
    {
        $this->fkTaxe = $fkTaxe;

        return $this;
    }

    /**
     * Get fkTaxe
     *
     * @return int
     */
    public function getFkTaxe()
    {
        return $this->fkTaxe;
    }
}

