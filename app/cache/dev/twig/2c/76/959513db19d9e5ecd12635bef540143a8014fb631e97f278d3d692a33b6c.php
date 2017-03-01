<?php

/* BsFrontOfficeBundle:Garderie:afficherGa.html.twig */
class __TwigTemplate_2c76959513db19d9e5ecd12635bef540143a8014fb631e97f278d3d692a33b6c extends Twig_Template
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

    // line 4
    public function block_contenu($context, array $blocks = array())
    {
        // line 5
        echo "
    <h1 >Liste Garderies</h1>

    <table width=\"950px\"  class=\"box_sprite_inner clearfix\">
        
            <tr >
                <th class=\"box_sprite_inner clearfix\"><h3>idgarderie</h3></th>
                <th class=\"box_sprite_inner clearfix\"><h3>nomgarderie</h3></th>
                <th class=\"box_sprite_inner clearfix\"><h3> description</h3></th>
                <th class=\"box_sprite_inner clearfix\"><h3>tarif</h3></th>
                <th class=\"box_sprite_inner clearfix\"><h3>codepostale</h3></th>
                <th class=\"box_sprite_inner clearfix\"><h3>nomresponsable</h3></th>
                <th class=\"box_sprite_inner clearfix\"><h3>Actions</h3></th>
            </tr>
        
        
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
                <th class=\"box_sprite_inner clearfix\"><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bs_front_office_espace_evenement", array("id" => $this->getAttribute($context["entity"], "idgarderie", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idgarderie", array()), "html", null, true);
            echo "</a></th>
                <th class=\"box_sprite_inner clearfix\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomgarderie", array()), "html", null, true);
            echo "</th>
                <th class=\"box_sprite_inner clearfix\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</th>
                <th class=\"box_sprite_inner clearfix\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tarif", array()), "html", null, true);
            echo "</th>
                <th class=\"box_sprite_inner clearfix\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codepostale", array()), "html", null, true);
            echo "</th>
                <th class=\"box_sprite_inner clearfix\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomresponsable", array()), "html", null, true);
            echo "</th>
                <td class=\"box_sprite_inner clearfix\">
                <ul>
                    <li>
                       <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bs_front_office_espace_garderie_show", array("id" => $this->getAttribute($context["entity"], "idgarderie", array()))), "html", null, true);
            echo "\">afficher</a>  
                    </li>
                    <li>
                      <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bs_front_office_espace_garderie_edit", array("id" => $this->getAttribute($context["entity"], "idgarderie", array()))), "html", null, true);
            echo "\">editer</a> 
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_garderie_create");
        echo "\">
                Ajouter Garderie
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "BsFrontOfficeBundle:Garderie:afficherGa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 46,  103 => 41,  91 => 35,  85 => 32,  78 => 28,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  56 => 23,  53 => 22,  49 => 21,  31 => 5,  28 => 4,);
    }
}
