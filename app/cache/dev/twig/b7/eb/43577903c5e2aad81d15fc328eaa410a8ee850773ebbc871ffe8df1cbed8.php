<?php

/* BsFrontOfficeBundle:Evenement:accueilEv.html.twig */
class __TwigTemplate_b7eb43577903c5e2aad81d15fc328eaa410a8ee850773ebbc871ffe8df1cbed8 extends Twig_Template
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
<table width=\"960px\" style=\"background-color:#fdeb8d;\">
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
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getIdevenement", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getPath", array()), "html", null, true);
            echo "\" width=\"900px\" height=\"350px\"  />
</div>
               </div>
        </td>
   
    
        <td>
        <div  class=\"staff_item every_2nd every_3rd\">

             
        <table class=\"record_properties\" height=\"350px\" width=\"260px\" style=\"background-color:#fb9b52;margin-top:11px\" >
        <tbody>
          
            <tr>
                <th>Nom De L'evenement</th>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomevenement", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Lieu De l'evenement</th>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lieuevenement", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateevenement", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Organisateur</th>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "organisateur", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Nombre Des Visiteur</th>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbrevisiteur", array()), "html", null, true);
            echo "</td>
            </tr>
        </tbody>
    </table>

            </div>
        
    
        </td>
        
        <td align=\"center\">
             </br></br></br>
            <div  class=\"staff_item every_2nd every_3rd\">
           
            <a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_evenement_create");
            echo "\" class=\"btn\">
                Ajouter Evenement
            </a>
        
        </br></br></br></br>
        
            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bs_front_office_espace_evenement_edit", array("id" => $this->getAttribute($context["entity"], "idevenement", array()))), "html", null, true);
            echo "\" class=\"btn\">
                Modifier Evenement
            </a>
        </br></br></br></br>
        <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bs_front_office_espace_evenement_supprimer", array("id" => $this->getAttribute($context["entity"], "idevenement", array()))), "html", null, true);
            echo "\" class=\"btn\">
                Supprimer Evenement
            </a>
        
            </div>
        </td>
        
    </tr>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo " 
    <tr><td><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_responsable");
        echo "\" class=\"btn btn_green\"><span>Retour A L'espace Responsable</span></a></td></tr>
</table>

";
    }

    public function getTemplateName()
    {
        return "BsFrontOfficeBundle:Evenement:accueilEv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 75,  143 => 74,  128 => 66,  121 => 62,  112 => 56,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  46 => 11,  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
