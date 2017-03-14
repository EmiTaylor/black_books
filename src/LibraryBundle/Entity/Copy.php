<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Copy
 *
 * @ORM\Table(name="copy", indexes={@ORM\Index(name="etat", columns={"etat"}), @ORM\Index(name="books", columns={"books"})})
 * @ORM\Entity
 */
class Copy
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
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var \LibraryBundle\Entity\Etat
     *
     * @ORM\ManyToOne(targetEntity="LibraryBundle\Entity\Etat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etat", referencedColumnName="id")
     * })
     */
    private $etat;

    /**
     * @var \LibraryBundle\Entity\Books
     *
     * @ORM\ManyToOne(targetEntity="LibraryBundle\Entity\Books")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="books", referencedColumnName="id")
     * })
     */
    private $books;



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
     * Set status
     *
     * @param integer $status
     *
     * @return Copy
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Copy
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set etat
     *
     * @param \LibraryBundle\Entity\Etat $etat
     *
     * @return Copy
     */
    public function setEtat(\LibraryBundle\Entity\Etat $etat = null)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \LibraryBundle\Entity\Etat
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set books
     *
     * @param \LibraryBundle\Entity\Books $books
     *
     * @return Copy
     */
    public function setBooks(\LibraryBundle\Entity\Books $books = null)
    {
        $this->books = $books;

        return $this;
    }

    /**
     * Get books
     *
     * @return \LibraryBundle\Entity\Books
     */
    public function getBooks()
    {
        return $this->books;
    }
}
