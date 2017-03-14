<?php

namespace LibraryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use LibraryBundle\Entity\Books;
use LibraryBundle\Entity\Categories;

/**
 * Crud controller
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
            * @Route("/read", name="crud_read")
            * @Method("GET")
            */
            public function readAction(Request $request){

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

                 $updateForm = $this->createUpdateForm($book);

                 return $this->render('LibraryBundle:Crud:crud_update.html.twig', array(
                     'book' => $book,
                     'delete_form' => $deleteForm->createView(),
                 ));
             }
             /**
              * Delete a book entity.
              *
              * @Route("/books/{id}", name="crud_delete")
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

                 return $this->redirectToRoute('crud_index');
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
                     ->setAction($this->generateUrl('crud_delete', array('id' => $book->getId())))
                     ->setMethod('DELETE')
                     ->getForm()
                 ;
             }
       }
