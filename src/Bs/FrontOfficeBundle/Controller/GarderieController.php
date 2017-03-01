<?php

namespace Bs\FrontOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Bs\FrontOfficeBundle\Entity\Garderie;
use Bs\FrontOfficeBundle\Form\GarderieType;


/**
 * Garderie controller.
 *
 */
class GarderieController extends Controller
{
    

       public function accueilgaAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BsFrontOfficeBundle:Garderie')->findAll();
        
         return $this->render('BsFrontOfficeBundle:Garderie:accueilGa.html.twig',array( 'entities' => $entities,));
       
    }
    
    
     public function ajout1Action() {
        $document = new Garderie();
        $form = $this->createFormBuilder($document)
                ->add('nomgarderie')
                ->add('description')
                ->add('tarif')
                ->add('codepostale')
                ->add('nomresponsable')
                ->add('file')
                ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->handleRequest($this->getRequest());


            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $em->persist($document);
                $em->flush();

                $this->redirect($this->generateUrl('bs_front_office_espace_garderie_accueil'));
            }
        }
         return $this->render('BsFrontOfficeBundle:Garderie:new.html.twig',array('form'=>$form->createView()));

        return array('form' => $form->createView());
    }
    public function modifierAction($id){
        $em=$this->getDoctrine()->getManager();
        $garderie = $em->getRepository('BsFrontOfficeBundle:Garderie')->find($id);
        $f= new GarderieType();
        $form=$this->createFormBuilder($garderie)
                ->add('nomgarderie')
                ->add('description')
                ->add('tarif')
                ->add('codepostale')
                ->add('nomresponsable')
                ->getForm();
        $request=$this->get('request');
        if($request->getMethod()=="POST"){
            $form->bind($request);
            if($form->isValid()){
                
                $em->persist($garderie);
                $em->flush();
                return $this->redirect($this->generateUrl('bs_front_office_espace_garderie_accueil'));
            }
        }
        return $this->render('BsFrontOfficeBundle:Garderie:edit.html.twig',array('form'=>$form->createView(),'garderie'=>$garderie));
    }
     public function supprimerAction($id){
        $em=$this->getDoctrine()->getManager();
        $garderie=$em->getRepository('BsFrontOfficeBundle:Garderie')->find($id);

           $em->remove($garderie); 
       
             $em->flush();
            return  $this->redirect($this->generateUrl('bs_front_office_espace_garderie_accueil'));
        
    }
}
