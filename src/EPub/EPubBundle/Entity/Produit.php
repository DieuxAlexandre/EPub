<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="fkCategorie", type="integer")
     */
    /**
     * Many produit have One categorieProduit
     * @ORM\ManyToOne(targetEntity="CategorieProduit")
     * @ORM\JoinColumn(name="idCategorie", referencedColumnName="id")
     */
    private $fkCategorie;

    /**
     * @var int
     *
     * @ORM\Column(name="fkTaxe", type="integer")
     */
    private $fkTaxe;

    /**
     * @var int
     *
     * @ORM\Column(name="fkContenance", type="integer")
     */
    /**
     * Many produit have One contenance
     * @ORM\ManyToOne(targetEntity="Contenance")
     * @ORM\JoinColumn(name="idContenance", referencedColumnName="id")
     */
    private $fkContenance;

    /**
     * @var int
     *
     * @ORM\Column(name="fkLigneStock", type="integer")
     */
    private $fkLigneStock;

    /**
     * @var float
     *
     * @ORM\Column(name="pctAlcool", type="float")
     */
    private $pctAlcool;

    /**
     * @var float
     *
     * @ORM\Column(name="pctSucre", type="float")
     */
    private $pctSucre;

    /**
     * @var int
     *
     * @ORM\Column(name="contenance", type="integer")
     */
    private $contenance;

    /**
     * @var string
     *
     * @ORM\Column(name="uniteContenance", type="string", length=255)
     */
    private $uniteContenance;

    /**
     * @var float
     *
     * @ORM\Column(name="contenanceActuelle", type="float")
     */
    private $contenanceActuelle;

    /**
     * @var float
     *
     * @ORM\Column(name="margeHT", type="float")
     */
    private $margeHT;

    /**
     * @var bool
     *
     * @ORM\Column(name="stockCritique", type="boolean")
     */
    private $stockCritique;

    /**
     * @var bool
     *
     * @ORM\Column(name="actif", type="boolean")
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
     * @return produit
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
     * Set fkCategorie
     *
     * @param integer $fkCategorie
     *
     * @return produit
     */
    public function setFkCategorie($fkCategorie)
    {
        $this->fkCategorie = $fkCategorie;

        return $this;
    }

    /**
     * Get fkCategorie
     *
     * @return int
     */
    public function getFkCategorie()
    {
        return $this->fkCategorie;
    }

    /**
     * Set fkTaxe
     *
     * @param integer $fkTaxe
     *
     * @return produit
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

    /**
     * Set fkContenance
     *
     * @param integer $fkContenance
     *
     * @return produit
     */
    public function setFkContenance($fkContenance)
    {
        $this->fkContenance = $fkContenance;

        return $this;
    }

    /**
     * Get fkContenance
     *
     * @return int
     */
    public function getFkContenance()
    {
        return $this->fkContenance;
    }

    /**
     * Set fkLigneStock
     *
     * @param integer $fkLigneStock
     *
     * @return produit
     */
    public function setFkLigneStock($fkLigneStock)
    {
        $this->fkLigneStock = $fkLigneStock;

        return $this;
    }

    /**
     * Get fkLigneStock
     *
     * @return int
     */
    public function getFkLigneStock()
    {
        return $this->fkLigneStock;
    }

    /**
     * Set pctAlcool
     *
     * @param float $pctAlcool
     *
     * @return produit
     */
    public function setPctAlcool($pctAlcool)
    {
        $this->pctAlcool = $pctAlcool;

        return $this;
    }

    /**
     * Get pctAlcool
     *
     * @return float
     */
    public function getPctAlcool()
    {
        return $this->pctAlcool;
    }

    /**
     * Set pctSucre
     *
     * @param float $pctSucre
     *
     * @return produit
     */
    public function setPctSucre($pctSucre)
    {
        $this->pctSucre = $pctSucre;

        return $this;
    }

    /**
     * Get pctSucre
     *
     * @return float
     */
    public function getPctSucre()
    {
        return $this->pctSucre;
    }

    /**
     * Set contenance
     *
     * @param integer $contenance
     *
     * @return produit
     */
    public function setContenance($contenance)
    {
        $this->contenance = $contenance;

        return $this;
    }

    /**
     * Get contenance
     *
     * @return int
     */
    public function getContenance()
    {
        return $this->contenance;
    }

    /**
     * Set uniteContenance
     *
     * @param string $uniteContenance
     *
     * @return produit
     */
    public function setUniteContenance($uniteContenance)
    {
        $this->uniteContenance = $uniteContenance;

        return $this;
    }

    /**
     * Get uniteContenance
     *
     * @return string
     */
    public function getUniteContenance()
    {
        return $this->uniteContenance;
    }

    /**
     * Set contenanceActuelle
     *
     * @param float $contenanceActuelle
     *
     * @return produit
     */
    public function setContenanceActuelle($contenanceActuelle)
    {
        $this->contenanceActuelle = $contenanceActuelle;

        return $this;
    }

    /**
     * Get contenanceActuelle
     *
     * @return float
     */
    public function getContenanceActuelle()
    {
        return $this->contenanceActuelle;
    }

    /**
     * Set margeHT
     *
     * @param float $margeHT
     *
     * @return produit
     */
    public function setMargeHT($margeHT)
    {
        $this->margeHT = $margeHT;

        return $this;
    }

    /**
     * Get margeHT
     *
     * @return float
     */
    public function getMargeHT()
    {
        return $this->margeHT;
    }

    /**
     * Set stockCritique
     *
     * @param boolean $stockCritique
     *
     * @return produit
     */
    public function setStockCritique($stockCritique)
    {
        $this->stockCritique = $stockCritique;

        return $this;
    }

    /**
     * Get stockCritique
     *
     * @return bool
     */
    public function getStockCritique()
    {
        return $this->stockCritique;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     *
     * @return produit
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

