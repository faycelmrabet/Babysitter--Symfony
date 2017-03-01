<?php

/* BsFrontOfficeBundle:ResponsableGarderie:temoignage.html.twig */
class __TwigTemplate_e6a186589c47236ec59f97f12c9483c50ef2ccc52173a66f36bb459c2bd7e605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BsFrontOfficeBundle::layout.html.twig");

        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BsFrontOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        echo "  
        <div id=\"mid_bird\"></div>
        <div id=\"mid_baloon\"></div>
    \t
        <div class=\"content_wrapper\">   
        \t
            <div class=\"title_top\">
            \t<h1>Que pense les parents de nos services </h1>
            </div>
            
\t        <!-- content -->
\t       
            \t
                <!-- testimonials -->
                <div class=\"testimonials\">                \t
                    
                    <div class=\"author-description\">\t 
                        <div class=\"author-image\"><span></span><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temoins/1.jpg"), "html", null, true);
        echo "\" width=\"100px\" height=\"110px\" alt=\"\"></div>
                        <div class=\"author-text\">                            
                            <p>“Mes premières impressions concernant Lauren, notre nounou, sont très bonnes. Elle a l'air d'une jeune femme dynamique, elle est souriante et présente bien.”</p>\t
                            <span class=\"author-name\">— Amir Ben Hssouna</span>                            
                        </div>
                    </div>
                    
                    <div class=\"author-description photo_right\">\t 
                        <div class=\"author-image\"><span></span><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temoins/6.jpg"), "html", null, true);
        echo "\" width=\"100px\" height=\"110px\" alt=\"\"></div>
                        <div class=\"author-text\">                            
                            <p>“Les débuts sont tout à fait satisfaisants avec notre baby-sitter. Elle est adorable et attentionnée avec les enfants. J'espère qu'elle pourra les garder jusqu'au 15 juillet!”</p>\t
                            <span class=\"author-name\">— Mourad Ben Massoud</span>                            
                        </div>
                    </div> 
                    
                    <div class=\"author-description\">\t 
                        <div class=\"author-image\"><span></span><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temoins/2.jpg"), "html", null, true);
        echo "\" width=\"100px\" height=\"110px\" alt=\"\"></div>
                        <div class=\"author-text\">                            
                            <p>“Bonjour, je suis contente d'Olga, notre baby-sitter qui a su se faire accepter très rapidement par mes enfants. Elle m'a l'air à l'écoute, sérieuse et douce avec les enfants. J'espère que cela continuera ainsi.”</p>\t
                            <span class=\"author-name\">— Nermine Mbarek</span>                            
                        </div>
                    </div>
                    
                    <div class=\"author-description photo_right\">\t 
                        <div class=\"author-image\"><span></span><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temoins/3.jpg"), "html", null, true);
        echo "\" width=\"100px\" height=\"110px\" alt=\"\"></div>
                        <div class=\"author-text\">                            
                            <p>“Mes premières impressions concernant Lauren, notre nounou, sont très bonnes. Elle a l'air d'une jeune femme dynamique, elle est souriante et présente bien.”</p>\t
                            <span class=\"author-name\">— Nasr Daffef</span>                            
                        </div>
                    </div> 
                    
                    <div class=\"author-description\">\t 
                        <div class=\"author-image\"><span></span><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temoins/4.jpg"), "html", null, true);
        echo "\" width=\"100px\" height=\"110px\" alt=\"\"></div>
                        <div class=\"author-text\">                            
                            <p>“Super profil très sérieuse et adorable! notre baby-sitter nous convient nickel chrome! pourvu que ça continue...
Merci pour tout, votre service et vos équipes.”</p>\t
                            <span class=\"author-name\">— Aymen Jbeli</span>                            
                        </div>
                    </div>
                    
                    <div class=\"author-description photo_right\">\t 
                        <div class=\"author-image\"><span></span><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temoins/5.jpg"), "html", null, true);
        echo "\" width=\"100px\" height=\"110px\" alt=\"\"></div>
                        <div class=\"author-text\">                            
                            <p>“je ne suis pas satisfait de vos services , en faite le baby sitter m'a volé mes bijoux , elle n'etait bonne avec mes enfants , elle me semble tout à fait plus loins du domaine de baby sitting”</p>\t
                            <span class=\"author-name\">— Tony Mancuso</span>                            
                        </div>
                    </div>        
                    
                    <p class=\"text-center\"><a href=\"#\" class=\"btn\"><span>Lire Plus De Temoigneges</span></a></p>
                    
                </div>
                <!--/ testimonials -->
                
\t       
\t        <!--/ content -->
\t\t                    
          <div class=\"clear\"></div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "BsFrontOfficeBundle:ResponsableGarderie:temoignage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 60,  93 => 51,  82 => 43,  71 => 35,  60 => 27,  49 => 19,  28 => 2,);
    }
}
