<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\TicketRepository")
 */
class Ticket
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
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=255, nullable=true)
     */
    private $client;

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
     * @ORM\Column(name="totalTVA", type="float")
     */
    private $totalTVA;

    /**
     * @var float
     *
     * @ORM\Column(name="margeHT", type="float")
     */
    private $margeHT;

    /**
     * @var float
     *
     * @ORM\Column(name="margeTTC", type="float")
     */
    private $margeTTC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateTicket", type="datetime")
     */
    private $dateTicket;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return ticket
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
     * Set client
     *
     * @param string $client
     *
     * @return ticket
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set totalHT
     *
     * @param float $totalHT
     *
     * @return ticket
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
     * @return ticket
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
     * Set totalTVA
     *
     * @param float $totalTVA
     *
     * @return ticket
     */
    public function setTotalTVA($totalTVA)
    {
        $this->totalTVA = $totalTVA;

        return $this;
    }

    /**
     * Get totalTVA
     *
     * @return float
     */
    public function getTotalTVA()
    {
        return $this->totalTVA;
    }

    /**
     * Set margeHT
     *
     * @param float $margeHT
     *
     * @return ticket
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
     * Set margeTTC
     *
     * @param float $margeTTC
     *
     * @return ticket
     */
    public function setMargeTTC($margeTTC)
    {
        $this->margeTTC = $margeTTC;

        return $this;
    }

    /**
     * Get margeTTC
     *
     * @return float
     */
    public function getMargeTTC()
    {
        return $this->margeTTC;
    }

    /**
     * Set dateTicket
     *
     * @param \DateTime $dateTicket
     *
     * @return ticket
     */
    public function setDateTicket($dateTicket)
    {
        $this->dateTicket = $dateTicket;

        return $this;
    }

    /**
     * Get dateTicket
     *
     * @return \DateTime
     */
    public function getDateTicket()
    {
        return $this->dateTicket;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return ticket
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

