<?php

namespace EPub\EPubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sequence
 *
 * @ORM\Table(name="sequence")
 * @ORM\Entity(repositoryClass="EPub\EPubBundle\Repository\SequenceRepository")
 */
class Sequence
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
     * @ORM\Column(name="sequenceTable", type="string", length=255)
     */
    private $sequenceTable;

    /**
     * @var int
     *
     * @ORM\Column(name="increment", type="integer")
     */
    private $increment;


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
     * Set sequenceTable
     *
     * @param string $sequenceTable
     *
     * @return sequence
     */
    public function setSequenceTable($sequenceTable)
    {
        $this->sequenceTable = $sequenceTable;

        return $this;
    }

    /**
     * Get sequenceTable
     *
     * @return string
     */
    public function getSequenceTable()
    {
        return $this->sequenceTable;
    }

    /**
     * Set increment
     *
     * @param integer $increment
     *
     * @return sequence
     */
    public function setIncrement($increment)
    {
        $this->increment = $increment;

        return $this;
    }

    /**
     * Get increment
     *
     * @return int
     */
    public function getIncrement()
    {
        return $this->increment;
    }
}

