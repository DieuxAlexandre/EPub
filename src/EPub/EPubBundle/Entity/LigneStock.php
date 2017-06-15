<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneStock
 *
 * @ORM\Table(name="ligne_stock")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\LigneStockRepository")
 */
class LigneStock
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
     * @ORM\Column(name="fkStock", type="integer")
     */
    /**
     * Many ligneStock have One stock
     * @ORM\ManyToOne(targetEntity="Stock")
     * @ORM\JoinColumn(name="idStock", referencedColumnName="id")
     */
    private $fkStock;

    /**
     * @var int
     *
     * @ORM\Column(name="fkProduit", type="integer")
     */
    /**
     * One ligneStock has One produit
     * @ORM\OneToOne(targetEntity="Produit")
     * @ORM\JoinColumn(name="idProduit", referencedColumnName="id")
     */
    private $fkProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prixAchatHT", type="float")
     */
    private $prixAchatHT;


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
     * Set fkStock
     *
     * @param integer $fkStock
     *
     * @return ligneStock
     */
    public function setFkStock($fkStock)
    {
        $this->fkStock = $fkStock;

        return $this;
    }

    /**
     * Get fkStock
     *
     * @return int
     */
    public function getFkStock()
    {
        return $this->fkStock;
    }

    /**
     * Set fkProduit
     *
     * @param integer $fkProduit
     *
     * @return ligneStock
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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return ligneStock
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
     * Set prixAchatHT
     *
     * @param float $prixAchatHT
     *
     * @return ligneStock
     */
    public function setPrixAchatHT($prixAchatHT)
    {
        $this->prixAchatHT = $prixAchatHT;

        return $this;
    }

    /**
     * Get prixAchatHT
     *
     * @return float
     */
    public function getPrixAchatHT()
    {
        return $this->prixAchatHT;
    }
}

