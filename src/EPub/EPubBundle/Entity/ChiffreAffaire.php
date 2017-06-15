<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChiffreAffaire
 *
 * @ORM\Table(name="chiffre_affaire")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\ChiffreAffaireRepository")
 */
class ChiffreAffaire
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
     * @ORM\Column(name="montantHT", type="float")
     */
    private $montantHT;

    /**
     * @var float
     *
     * @ORM\Column(name="montantTTC", type="float")
     */
    private $montantTTC;

    /**
     * @var float
     *
     * @ORM\Column(name="montantTaxe", type="float")
     */
    private $montantTaxe;

    /**
     * @var float
     *
     * @ORM\Column(name="pertesHT", type="float")
     */
    private $pertesHT;

    /**
     * @var float
     *
     * @ORM\Column(name="pertesTTC", type="float")
     */
    private $pertesTTC;

    /**
     * @var float
     *
     * @ORM\Column(name="margeHT", type="float")
     */
    private $margeHT;

    /**
     * @var float
     *
     * @ORM\Column(name="frais", type="float")
     */
    private $frais;


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
     * @return chiffreAffaire
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
     * Set montantHT
     *
     * @param float $montantHT
     *
     * @return chiffreAffaire
     */
    public function setMontantHT($montantHT)
    {
        $this->montantHT = $montantHT;

        return $this;
    }

    /**
     * Get montantHT
     *
     * @return float
     */
    public function getMontantHT()
    {
        return $this->montantHT;
    }

    /**
     * Set montantTTC
     *
     * @param float $montantTTC
     *
     * @return chiffreAffaire
     */
    public function setMontantTTC($montantTTC)
    {
        $this->montantTTC = $montantTTC;

        return $this;
    }

    /**
     * Get montantTTC
     *
     * @return float
     */
    public function getMontantTTC()
    {
        return $this->montantTTC;
    }

    /**
     * Set montantTaxe
     *
     * @param float $montantTaxe
     *
     * @return chiffreAffaire
     */
    public function setMontantTaxe($montantTaxe)
    {
        $this->montantTaxe = $montantTaxe;

        return $this;
    }

    /**
     * Get montantTaxe
     *
     * @return float
     */
    public function getMontantTaxe()
    {
        return $this->montantTaxe;
    }

    /**
     * Set pertesHT
     *
     * @param float $pertesHT
     *
     * @return chiffreAffaire
     */
    public function setPertesHT($pertesHT)
    {
        $this->pertesHT = $pertesHT;

        return $this;
    }

    /**
     * Get pertesHT
     *
     * @return float
     */
    public function getPertesHT()
    {
        return $this->pertesHT;
    }

    /**
     * Set pertesTTC
     *
     * @param float $pertesTTC
     *
     * @return chiffreAffaire
     */
    public function setPertesTTC($pertesTTC)
    {
        $this->pertesTTC = $pertesTTC;

        return $this;
    }

    /**
     * Get pertesTTC
     *
     * @return float
     */
    public function getPertesTTC()
    {
        return $this->pertesTTC;
    }

    /**
     * Set margeHT
     *
     * @param float $margeHT
     *
     * @return chiffreAffaire
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
     * Set frais
     *
     * @param float $frais
     *
     * @return chiffreAffaire
     */
    public function setFrais($frais)
    {
        $this->frais = $frais;

        return $this;
    }

    /**
     * Get frais
     *
     * @return float
     */
    public function getFrais()
    {
        return $this->frais;
    }
}

