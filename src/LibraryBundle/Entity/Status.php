<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Status
 *
 * @ORM\Table(name="status")
 * @ORM\Entity
 */
class Status
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
     * @ORM\Column(name="rayon", type="string", length=255, nullable=false)
     */
    private $rayon;

    /**
     * @var integer
     *
     * @ORM\Column(name="categorie", type="integer", nullable=false)
     */
    private $categorie;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vendu", type="boolean", nullable=false)
     */
    private $vendu;

    /**
     * @var string
     *
     * @ORM\Column(name="emprunter", type="string", length=255, nullable=false)
     */
    private $emprunter;



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
     * Set rayon
     *
     * @param string $rayon
     *
     * @return Status
     */
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }

    /**
     * Get rayon
     *
     * @return string
     */
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set categorie
     *
     * @param integer $categorie
     *
     * @return Status
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return integer
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set vendu
     *
     * @param boolean $vendu
     *
     * @return Status
     */
    public function setVendu($vendu)
    {
        $this->vendu = $vendu;

        return $this;
    }

    /**
     * Get vendu
     *
     * @return boolean
     */
    public function getVendu()
    {
        return $this->vendu;
    }

    /**
     * Set emprunter
     *
     * @param string $emprunter
     *
     * @return Status
     */
    public function setEmprunter($emprunter)
    {
        $this->emprunter = $emprunter;

        return $this;
    }

    /**
     * Get emprunter
     *
     * @return string
     */
    public function getEmprunter()
    {
        return $this->emprunter;
    }
}
