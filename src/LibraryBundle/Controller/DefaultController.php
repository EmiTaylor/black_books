<?php

namespace LibraryBundle\Controller;

use LibraryBundle\Entity\Categories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/Library")
     */
    public function indexAction(){
        return $this->render('LibraryBundle:Default:index.html.twig');
    }
    /**
     * @Method ({"POST"})
     * @Route("/cat")
     */
    public function catAction(Request $Request){
        // DEFINED NEW OBJECT $CAT
        $categories = new Categories();
        // SEND 'nom' TO VAR $CAT
        $categories->setNom($Request->get('nom'));
        // CALL ENTITY MANAGER
        $em=$this->getDoctrine()->getManager();
        // PREPARING SEND
        $em->persist($categories);
        // SEND
        $em->flush($categories);
        // RETURN JSON FORMAT
        return new JsonResponse ($categories->getNom());
    }
    public function editAction(){

        $em=$this->getDoctrine()->getManager();
        // PREPARING SEND
        $categories->$em->getRepository('LibraryBundle:Categories')->find($request->get('id'));
        // SEND
        $categories->setNom($request->get('nom'));
        $em->getList($categories);
        // RETURN JSON FORMAT
        return new JsonResponse ($categories->getNom());
    }
    public function deleteAction(){
        $em=$this->getDoctrine()->getManager();
        $categories->$em->getRepository('LibraryBundle:Categories')->find($request->get('id'));
        $em->remove($categories);
        $em->flush();

        return new JsonResponse ($categories);
    }
}
