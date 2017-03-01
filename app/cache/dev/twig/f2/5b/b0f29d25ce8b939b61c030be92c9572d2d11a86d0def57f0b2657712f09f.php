<?php

/* BsFrontOfficeBundle:Evenement:galerie.html.twig */
class __TwigTemplate_f25bb0f29d25ce8b939b61c030be92c9572d2d11a86d0def57f0b2657712f09f extends Twig_Template
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

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        echo "  
<div id=\"mid_bird\"></div>
        <div id=\"mid_baloon\"></div>
    \t
        <div class=\"content_wrapper\">   
        \t
            <div class=\"title_top\">
            \t<h1>Galerie Des Événement</h1>
            </div>
            
\t        <!-- content -->
\t        <div class=\"content\">
            \t
                <!-- articles layout: 2 cols -->
                   ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "
                <div class=\"clearfix article_list columns2\" style=\"width:900px\">
                \t
                    
                    \t<div class=\"article_image\"><a href=\"#\"><img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getIdevenement", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getPath", array()), "html", null, true);
            echo "\" width=\"800px\" height=\"350px\"  alt=\"\"></a></div>
                        
                        <div class=\"article_title\">
                        \t<h2><a href=\"#\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomevenement", array()), "html", null, true);
            echo "</a></h2>
                            <span class=\"subtitle\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "organisateur", array()), "html", null, true);
            echo "</span>
                                 
                        </div>
                        
                        <div class=\"article_descr entry\">
                        <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lieuevenement", array()), "html", null, true);
            echo "</p>
                        <a href=\"#\" class=\"link_more\">Read Article</a>
                        </div>
                   
                   
                    
                ";
            // line 37
            echo $this->env->getExtension('nomaya_social_bar')->getTwitterButton();
            echo $this->env->getExtension('nomaya_social_bar')->getPinterestButton();
            echo $this->env->getExtension('nomaya_social_bar')->getLinkedinButton();
            echo $this->env->getExtension('nomaya_social_bar')->getGoogleplusButton();
            echo $this->env->getExtension('nomaya_social_bar')->getFacebookLikeButton();
            echo "
                </br>
                
                
                
                
                    
                </div>
             
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                <!--/ articles layout: 2 cols -->
                
\t        </div>
\t        <!--/ content -->
\t\t                    
          <div class=\"clear\"></div>
        </div>
        
        
      <div id=\"bottom_bee\"></div> 
      ";
    }

    public function getTemplateName()
    {
        return "BsFrontOfficeBundle:Evenement:galerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  86 => 37,  77 => 31,  69 => 26,  65 => 25,  56 => 22,  50 => 18,  46 => 17,  28 => 3,);
    }
}
