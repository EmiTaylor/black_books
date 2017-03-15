<?php

namespace LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use LibraryBundle\Entity\Books;
use LibraryBundle\Entity\Categories;
use LibraryBundle\Entity\Etat;
use LibraryBundle\Entity\Status;
use LibraryBundle\Entity\Copy;

/**
 * Crud controller
 *@author Emilie Letailleur
 * @Route("crud")
 */
 class CrudController extends Controller{
     /**
      * Crud controller
      * @Route("/", name="crud_index")
      * @Method ("GET")
      */
      public function indexAction(){
          return $this->render('LibraryBundle:Crud:index.html.twig');
      }
      /**
       * Creates a new book entity.
       *
       * @Route("/create", name="crud_create")
       * @Method({"GET", "POST"})
       */
       public function createAction(Request $request){

           $book = new Books();
           $form = $this->createForm('LibraryBundle\Form\CrudType', $book);
           $form->handleRequest($request);

           if ($form->isSubmitted() && $form->isValid()) {
               $em = $this->getDoctrine()->getManager();
               $em->persist($book);
               $em->flush($book);

               return $this->redirectToRoute('crud_index', array('id' => $book->getId()));
           }
               return $this->render('LibraryBundle:Crud:crudcreate.html.twig', array(
                   'book' => $book,
                   'form' => $form->createView(),
               ));
           }
           /**
            * Read book entity.
            *
            * @Route("/read/{id}", name="crud_read")
            * @Method("GET")
            */
            public function readAction(Request $request){

                $book = new Books();
                $deleteForm = $this->createDeleteForm($book);

                return $this->render('LibraryBundle:Crud:crudread.html.twig', array(
                    'book' => $book,
                    'delete_form' => $deleteForm->createView(),
                ));
            }
            /**
             * Update book entity.
             *
             * @Route("/update", name="crud_update")
             * @Method({"GET", "POST"})
             */

             public function updateAction(Request $request){

                 $book = new Books();
                 $updateForm = $this->createDeleteForm($book);

                 return $this->render('LibraryBundle:Crud:crudupdate.html.twig');
             }
             /**
              * Delete a book entity.
              *
              * @Route("/books/delete", name="crud_books_delete")
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

                 return $this->render('LibraryBundle:Crud:index.html.twig');
             }

             /**
              * Creates a form to delete a book entity.
              *
              * @param Books $book The book entity
              *
              * @return \Symfony\Component\Form\Form The form
              */
             public function createDeleteForm(Books $book)
             {
                 return $this->createFormBuilder()
                     ->setAction($this->generateUrl('crud_books_delete', array('id' => $book->getId())))
                     ->setMethod('DELETE')
                     ->getForm()
                 ;
             }
       }
