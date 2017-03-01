<?php
namespace Bs\FrontOfficeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResponsableGarderieController extends Controller{
       public function accueilAction()
    {
        return $this->render('BsFrontOfficeBundle:ResponsableGarderie:accueil.html.twig');
    }
   
    public function galerieAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BsFrontOfficeBundle:Evenement')->findAll();
        
         return $this->render('BsFrontOfficeBundle:Evenement:galerie.html.twig',array( 'entities' => $entities,));

        
    }
    public function galerie1Action() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BsFrontOfficeBundle:Garderie')->findAll();
        
         return $this->render('BsFrontOfficeBundle:Garderie:galerie.html.twig',array( 'entities' => $entities,));

        
    }
        
    public function temoignageAction() {
       
         return $this->render('BsFrontOfficeBundle:ResponsableGarderie:temoignage.html.twig');   
    }
   
}
