<?php

namespace LibraryBundle\Controller;

use LibraryBundle\Entity\Books;
use LibraryBundle\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class ConsultingController extends Controller
{
    /**
     * @Method ({"GET"})
     * @Route("/books")
     */
    public function booksAction()
    {
        $em = $this->getDoctrine()->getManager();

        $books = $em->getRepository('LibraryBundle:Books')->findAll();

        // return $this->render('LibraryBundle:Consulting:books.html.twig', array(
        //     'books' => $books,
        // ));
        $tablivre = [];
        foreach ($books as $book) {
            $tablivre [] = [
                'id'    => $book->getId(),
                'titre' => $book->getTitre(),
                'auteur'=> $book->getAuteur(),
            ];
        }

        return new JsonResponse($tablivre);
    }


    /**
     * @Method ({"GET"})
     * @Route("/cat/{id}")
     */
    public function catAction(Categories $categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('LibraryBundle:Books')->findBy(array('categorie' => $categorie));

        // return $this->render('LibraryBundle:Consulting:cat.html.twig', array(
        //      'categorie' => $categorie,
        //     'books' => $books
        // ));
        $tabcat = [];
        foreach ($categories as $categorie) {
            $tabcat [] = [
                'id'    => $categorie->getId(),
                'titre'   => $categorie->getTitre(),
            ];
        }
        return new JsonResponse($tabcat);
    }

    /**
     * @Method ({"GET"})
     * @Route("/books/{id}", name="detailbooks")
     */
    public function bookAction(Books $book)
    {

        // return $this->render('LibraryBundle:Consulting:book.html.twig', array(
        //     'book' => $book,
        // ));
        return new JsonResponse ([
            'id'    => $book->getId(),
            'titre' => $book->getTitre(),
            'auteur'=> $book->getAuteur(),
        ]);
    }

}
