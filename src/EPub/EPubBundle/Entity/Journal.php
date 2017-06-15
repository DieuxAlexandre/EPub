<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journal
 *
 * @ORM\Table(name="journal")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\JournalRepository")
 */
class journal
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
     * @ORM\Column(name="pctBanque", type="float")
     */
    private $pctBanque;


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
     * @return journal
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
     * Set pctBanque
     *
     * @param float $pctBanque
     *
     * @return journal
     */
    public function setPctBanque($pctBanque)
    {
        $this->pctBanque = $pctBanque;

        return $this;
    }

    /**
     * Get pctBanque
     *
     * @return float
     */
    public function getPctBanque()
    {
        return $this->pctBanque;
    }
}

