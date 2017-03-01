<?php

/* BsFrontOfficeBundle:Garderie:accueilGa.html.twig */
class __TwigTemplate_43b5005f763a5e04e27ee33d0897b6c0baf976918fa652e79e8949465942278c extends Twig_Template
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
        // line 3
        echo "
<table width=\"960px\" style=\"background-color:#fff998;\" >
   ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 6
            echo "    <tr>       
   
        <td>
           <div  class=\"staff_item every_2nd every_3rd\">
<div class=\"staff_thumb\">
<img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/files/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getIdgarderie", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getPath", array()), "html", null, true);
            echo "\" width=\"900px\" height=\"350px\"  />
</div>
               </div>
        </td>
   
    
        <td>
        <div  class=\"staff_item every_2nd every_3rd\">

             
        <table class=\"record_properties\" height=\"350px\" width=\"260px\" style=\"background-color:#fb9b52;margin-top:11px\">
        <tbody>
          
            <tr>
                <th>Nom De L'evenement:</th>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomgarderie", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Description:</th>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Tarif:</th>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tarif", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Code Postale:</th>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codepostale", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Nombre Des Visiteur:</th>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomresponsable", array()), "html", null, true);
            echo "</td>
            </tr>
            
        </tbody>
    </table>

            </div>
        
    
        </td>
        
        <td>
             </br></br></br>
            <div  class=\"staff_item every_2nd every_3rd\">
           
            <a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_garderie_create");
            echo "\" class=\"btn\">
                Ajouter Garderie
            </a>
        
        </br></br></br></br>
        
            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bs_front_office_espace_garderie_edit", array("id" => $this->getAttribute($context["entity"], "idgarderie", array()))), "html", null, true);
            echo "\" class=\"btn\">
                Modifier Garderie
            </a>
        </br></br></br></br>
        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bs_front_office_espace_garderie_supprimer", array("id" => $this->getAttribute($context["entity"], "idgarderie", array()))), "html", null, true);
            echo "\" class=\"btn\">
                Supprimer Garderie
            </a>
        
            </div>
        </td>
        
    </tr>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo " 
<tr><td><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_responsable");
        echo "\" class=\"btn btn_green\"><span>Retour A L'espace Responsable</span></a></td></tr>   
</table>

";
    }

    public function getTemplateName()
    {
        return "BsFrontOfficeBundle:Garderie:accueilGa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 76,  144 => 75,  129 => 67,  122 => 63,  113 => 57,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  46 => 11,  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
