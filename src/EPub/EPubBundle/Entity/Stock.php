<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\StockRepository")
 */
class Stock
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
     * @ORM\Column(name="fkFournisseur", type="integer")
     */
    /**
     * Many stock has Many fournisseur
     * @ORM\ManyToMany(targetEntity="RessourcesHumaines")
     * @ORM\JoinTable(name="ressourcesHumaines_stock",
     *     joinColumns={@ORM\JoinColumn(name="idRH", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="idStock", referencedColumnName="id", unique=true)}
     *     )
     */
    private $fkFournisseur;

    /**
     * @var int
     *
     * @ORM\Column(name="fkEmplacementStock", type="integer")
     */
    /**
     * Many stock have One emplacement
     * @ORM\ManyToOne(targetEntity="EmplacementStock")
     * @ORM\JoinColumn(name="idEmplacement", referencedColumnName="id")
     */
    private $fkEmplacementStock;


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
     * @return stock
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
     * Set fkFournisseur
     *
     * @param integer $fkFournisseur
     *
     * @return stock
     */
    public function setFkFournisseur($fkFournisseur)
    {
        $this->fkFournisseur = $fkFournisseur;

        return $this;
    }

    /**
     * Get fkFournisseur
     *
     * @return int
     */
    public function getFkFournisseur()
    {
        return $this->fkFournisseur;
    }

    /**
     * Set fkEmplacementStock
     *
     * @param integer $fkEmplacementStock
     *
     * @return stock
     */
    public function setFkEmplacementStock($fkEmplacementStock)
    {
        $this->fkEmplacementStock = $fkEmplacementStock;

        return $this;
    }

    /**
     * Get fkEmplacementStock
     *
     * @return int
     */
    public function getFkEmplacementStock()
    {
        return $this->fkEmplacementStock;
    }
}

