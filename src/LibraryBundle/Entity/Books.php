<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Books
 *
 * @ORM\Table(name="books", indexes={@ORM\Index(name="IDX_4A1B2A92CB8C5497", columns={"categorie"})})
 * @ORM\Entity
 */
class Books
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
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255, nullable=false)
     */
    private $auteur;

    /**
     * @var \LibraryBundle\Entity\Books
     *
     * @ORM\ManyToOne(targetEntity="LibraryBundle\Entity\Books")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie", referencedColumnName="id")
     * })
     */
    private $categorie;



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
     * Set titre
     *
     * @param string $titre
     *
     * @return Books
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Books
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set categorie
     *
     * @param \LibraryBundle\Entity\Books $categorie
     *
     * @return Books
     */
    public function setCategorie(\LibraryBundle\Entity\Books $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \LibraryBundle\Entity\Books
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
