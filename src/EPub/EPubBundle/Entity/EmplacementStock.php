<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmplacementStock
 *
 * @ORM\Table(name="emplacement_stock")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\EmplacementStockRepository")
 */
class EmplacementStock
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
     * @ORM\Column(name="fkMagasin", type="integer")
     */
    /**
     * Many emplacementStock have One magasin
     * @ORM\ManyToOne(targetEntity="Magasin")
     * @ORM\JoinColumn(name="idMagasin", referencedColumnName="id")
     */
    private $fkMagasin;


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
     * @return emplacementStock
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
     * Set fkMagasin
     *
     * @param integer $fkMagasin
     *
     * @return emplacementStock
     */
    public function setFkMagasin($fkMagasin)
    {
        $this->fkMagasin = $fkMagasin;

        return $this;
    }

    /**
     * Get fkMagasin
     *
     * @return int
     */
    public function getFkMagasin()
    {
        return $this->fkMagasin;
    }
}

