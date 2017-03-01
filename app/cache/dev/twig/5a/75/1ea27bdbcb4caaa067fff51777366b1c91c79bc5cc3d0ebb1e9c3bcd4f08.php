<?php

/* BsFrontOfficeBundle:Garderie:galerie.html.twig */
class __TwigTemplate_5a751ea27bdbcb4caaa067fff51777366b1c91c79bc5cc3d0ebb1e9c3bcd4f08 extends Twig_Template
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
            \t<h1>Galerie Des Garderies</h1>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/files/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getIdgarderie", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getPath", array()), "html", null, true);
            echo "\" width=\"800px\" height=\"350px\"  alt=\"\"></a></div>
                        <div class=\"article_title\">
                        \t<h2><a href=\"#\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomgarderie", array()), "html", null, true);
            echo "</a></h2>
                            <span class=\"subtitle\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomresponsable", array()), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"article_descr entry\">
                        <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</p>
                        <a href=\"#\" class=\"link_more\">Read Article</a>
                        </div>
                ";
            // line 31
            echo $this->env->getExtension('nomaya_social_bar')->getTwitterButton();
            echo $this->env->getExtension('nomaya_social_bar')->getPinterestButton();
            echo $this->env->getExtension('nomaya_social_bar')->getLinkedinButton();
            echo $this->env->getExtension('nomaya_social_bar')->getGoogleplusButton();
            echo $this->env->getExtension('nomaya_social_bar')->getFacebookLikeButton();
            echo "
                   
                </div>
                

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
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
        return "BsFrontOfficeBundle:Garderie:galerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  80 => 31,  74 => 28,  68 => 25,  64 => 24,  56 => 22,  50 => 18,  46 => 17,  28 => 3,);
    }
}
