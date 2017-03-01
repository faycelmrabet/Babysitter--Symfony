<?php

namespace Bs\FrontOfficeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Bs\FrontOfficeBundle\Entity\Evenement;
use Bs\FrontOfficeBundle\Form\EvenementType;


class EvenementController extends Controller {
    
       public function uploadAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BsFrontOfficeBundle:Evenement')->findAll();
        
         return $this->render('BsFrontOfficeBundle:Evenement:accueilEv.html.twig',array( 'entities' => $entities,));

        
    }
        public function upload1Action() {
        $document = new Evenement();
        $form = $this->createFormBuilder($document)
                ->add('nomevenement')
                ->add('lieuevenement')
                ->add('dateevenement','date')
                ->add('organisateur')
                ->add('nbrevisiteur')
                ->add('file')
                ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->handleRequest($this->getRequest());


            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $em->persist($document);
                $em->flush();

                $this->redirect($this->generateUrl('bs_front_office_espace_evenement_accueil'));
            }
        }
         return $this->render('BsFrontOfficeBundle:Evenement:new.html.twig',array('form'=>$form->createView()));

        return array('form' => $form->createView());
    }
   
    public function modifierAction($id){
        $em=$this->getDoctrine()->getManager();
        $evenement = $em->getRepository('BsFrontOfficeBundle:Evenement')->find($id);
        $f= new EvenementType();
        $form=$this->createFormBuilder($evenement)
                ->add('nomevenement')
                ->add('lieuevenement')
                ->add('dateevenement')
                ->add('organisateur')
                ->add('nbrevisiteur')
                ->add('file')
                ->getForm();
        $request=$this->get('request');
        if($request->getMethod()=="POST"){
            $form->bind($request);
            if($form->isValid()){
                
                $em->persist($evenement);
                $em->flush();
                return $this->redirect($this->generateUrl('bs_front_office_espace_evenement_accueil'));
            }
        }
        return $this->render('BsFrontOfficeBundle:Evenement:edit.html.twig',array('form'=>$form->createView(),'evenement'=>$evenement));
    }
   
     public function supprimerAction($id){
        $em=$this->getDoctrine()->getManager();
        $evenement=$em->getRepository('BsFrontOfficeBundle:Evenement')->find($id);

           $em->remove($evenement); 
       
             $em->flush();
            return  $this->redirect($this->generateUrl('bs_front_office_espace_evenement_accueil'));
        
    }
  
}

   
