<?php

namespace LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use LibraryBundle\Entity\Books;
use LibraryBundle\Entity\Categories;

/**
 * Admin controller
 * @Route("admin")
 */
class AdminController extends Controller{
    /**
     * Admin controller
     * @Route("/", name="admin_index")
     * @Method ("GET")
     */
    public function indexAction(){
        return $this->render('LibraryBundle:Admin:index.html.twig');
    }
    /**
     * Admin controller
     * @Route("/books", name= "admin_books_index")
     * @Method ("GET")
     */
    public function booksAction(){
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('LibraryBundle:Books')->findAll();
        return $this->render('LibraryBundle:Admin:books.html.twig', array(
        'books' => $books,
        ));
    }
    /**
     * Finds and displays a book entity.
     *
     * @Route("/books/show/{id}", name="admin_books_show")
     * @Method("GET")
     */
    public function showBookAction(Books $book)
    {
        $deleteForm = $this->createDeleteForm($book);

        return $this->render('LibraryBundle:Admin:bookshow.html.twig', array(
            'book' => $book,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Creates a new book entity.
     *
     * @Route("/books/new", name="admin_books_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $book = new Books();
        $form = $this->createForm('LibraryBundle\Form\BooksType', $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush($book);

            return $this->redirectToRoute('admin_books_show', array('id' => $book->getId()));
        }

        return $this->render('LibraryBundle:Admin:booknew.html.twig', array(
            'book' => $book,
            'form' => $form->createView(),
        ));
    }
    /**
     * Displays a form to edit an existing book entity.
     *
     * @Route("/books/{id}/edit", name="admin_books_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Books $book)
    {
        $deleteForm = $this->createDeleteForm($book);
        $editForm = $this->createForm('LibraryBundle\Form\BooksType', $book);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_books_edit', array('id' => $book->getId()));
        }

        return $this->render('LibraryBundle:Admin:bookedit.html.twig', array(
            'book' => $book,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a book entity.
     *
     * @Route("/books/{id}", name="admin_books_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Books $book)
    {
        $form = $this->createDeleteForm($book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($book);
            $em->flush($book);
        }

        return $this->redirectToRoute('admin_books_index');
    }

    /**
     * Creates a form to delete a book entity.
     *
     * @param Books $book The book entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Books $book)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_books_delete', array('id' => $book->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
