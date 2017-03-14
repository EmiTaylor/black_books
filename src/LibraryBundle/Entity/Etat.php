<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 *
 * @ORM\Table(name="etat")
 * @ORM\Entity
 */
class Etat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="neuf", type="string", length=255, nullable=false)
     */
    private $neuf;

    /**
     * @var string
     *
     * @ORM\Column(name="occasion", type="string", length=255, nullable=false)
     */
    private $occasion;

    /**
     * @var string
     *
     * @ORM\Column(name="detruit", type="string", length=255, nullable=false)
     */
    private $detruit;

    /**
     * @var string
     *
     * @ORM\Column(name="page dechire", type="string", length=255, nullable=false)
     */
    private $pageDechire;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set neuf
     *
     * @param string $neuf
     *
     * @return Etat
     */
    public function setNeuf($neuf)
    {
        $this->neuf = $neuf;

        return $this;
    }

    /**
     * Get neuf
     *
     * @return string
     */
    public function getNeuf()
    {
        return $this->neuf;
    }

    /**
     * Set occasion
     *
     * @param string $occasion
     *
     * @return Etat
     */
    public function setOccasion($occasion)
    {
        $this->occasion = $occasion;

        return $this;
    }

    /**
     * Get occasion
     *
     * @return string
     */
    public function getOccasion()
    {
        return $this->occasion;
    }

    /**
     * Set detruit
     *
     * @param string $detruit
     *
     * @return Etat
     */
    public function setDetruit($detruit)
    {
        $this->detruit = $detruit;

        return $this;
    }

    /**
     * Get detruit
     *
     * @return string
     */
    public function getDetruit()
    {
        return $this->detruit;
    }

    /**
     * Set pageDechire
     *
     * @param string $pageDechire
     *
     * @return Etat
     */
    public function setPageDechire($pageDechire)
    {
        $this->pageDechire = $pageDechire;

        return $this;
    }

    /**
     * Get pageDechire
     *
     * @return string
     */
    public function getPageDechire()
    {
        return $this->pageDechire;
    }
}
