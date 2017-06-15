<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caisse
 *
 * @ORM\Table(name="caisse")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\CaisseRepository")
 */
class Caisse
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
     * @ORM\Column(name="fkJournal", type="integer")
     */
    /**
     * Many caisse have One journal
     * @ORM\ManyToOne(targetEntity="Journal")
     * @ORM\JoinColumn(name="idJournal", referencedColumnName="id")
     */
    private $fkJournal;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="fkJournee", type="integer")
     */
    /**
     * Many caisse have One journee
     * @ORM\ManyToOne(targetEntity="journee")
     * @ORM\JoinColumn(name="idJournee", referencedColumnName="id")
     */
    private $fkJournee;

    /**
     * @var float
     *
     * @ORM\Column(name="balanceEntree", type="float")
     */
    private $balanceEntree;

    /**
     * @var float
     *
     * @ORM\Column(name="balanceSortie", type="float")
     */
    private $balanceSortie;

    /**
     * @var int
     *
     * @ORM\Column(name="ouvertureRH", type="integer")
     */
    private $ouvertureRH;

    /**
     * @var int
     *
     * @ORM\Column(name="fermetureRH", type="integer")
     */
    private $fermetureRH;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;


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
     * Set fkJournal
     *
     * @param integer $fkJournal
     *
     * @return caisse
     */
    public function setFkJournal($fkJournal)
    {
        $this->fkJournal = $fkJournal;

        return $this;
    }

    /**
     * Get fkJournal
     *
     * @return int
     */
    public function getFkJournal()
    {
        return $this->fkJournal;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return caisse
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
     * Set fkJournee
     *
     * @param integer $fkJournee
     *
     * @return caisse
     */
    public function setFkJournee($fkJournee)
    {
        $this->fkJournee = $fkJournee;

        return $this;
    }

    /**
     * Get fkJournee
     *
     * @return int
     */
    public function getFkJournee()
    {
        return $this->fkJournee;
    }

    /**
     * Set balanceEntree
     *
     * @param float $balanceEntree
     *
     * @return caisse
     */
    public function setBalanceEntree($balanceEntree)
    {
        $this->balanceEntree = $balanceEntree;

        return $this;
    }

    /**
     * Get balanceEntree
     *
     * @return float
     */
    public function getBalanceEntree()
    {
        return $this->balanceEntree;
    }

    /**
     * Set balanceSortie
     *
     * @param float $balanceSortie
     *
     * @return caisse
     */
    public function setBalanceSortie($balanceSortie)
    {
        $this->balanceSortie = $balanceSortie;

        return $this;
    }

    /**
     * Get balanceSortie
     *
     * @return float
     */
    public function getBalanceSortie()
    {
        return $this->balanceSortie;
    }

    /**
     * Set ouvertureRH
     *
     * @param integer $ouvertureRH
     *
     * @return caisse
     */
    public function setOuvertureRH($ouvertureRH)
    {
        $this->ouvertureRH = $ouvertureRH;

        return $this;
    }

    /**
     * Get ouvertureRH
     *
     * @return int
     */
    public function getOuvertureRH()
    {
        return $this->ouvertureRH;
    }

    /**
     * Set fermetureRH
     *
     * @param integer $fermetureRH
     *
     * @return caisse
     */
    public function setFermetureRH($fermetureRH)
    {
        $this->fermetureRH = $fermetureRH;

        return $this;
    }

    /**
     * Get fermetureRH
     *
     * @return int
     */
    public function getFermetureRH()
    {
        return $this->fermetureRH;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return caisse
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
}

