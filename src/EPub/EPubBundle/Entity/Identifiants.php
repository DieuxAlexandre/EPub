<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Identifiants
 *
 * @ORM\Table(name="identifiants")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\IdentifiantsRepository")
 */
class Identifiants
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
     * @ORM\Column(name="fkRH", type="integer")
     */
    /**
     * One identifiants has One RH
     * @ORM\OneToOne(targetEntity="RessourcesHumaines")
     * @ORM\JoinColumn(name="idRH", referencedColumnName="id")
     */
    private $fkRH;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=255)
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;


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
     * Set fkRH
     *
     * @param integer $fkRH
     *
     * @return identifiants
     */
    public function setFkRH($fkRH)
    {
        $this->fkRH = $fkRH;

        return $this;
    }

    /**
     * Get fkRH
     *
     * @return int
     */
    public function getFkRH()
    {
        return $this->fkRH;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return identifiants
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return identifiants
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}

