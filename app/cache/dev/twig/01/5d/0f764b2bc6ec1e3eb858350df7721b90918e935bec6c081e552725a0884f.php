<?php

/* BsFrontOfficeBundle:Evenement:afficherEv.html.twig */
class __TwigTemplate_015d0f764b2bc6ec1e3eb858350df7721b90918e935bec6c081e552725a0884f extends Twig_Template
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
    <h1 >Liste Evenements</h1>

    <table width=\"950px\"  class=\"box_sprite_inner clearfix\">
        
            <tr >
                <th class=\"box_sprite_inner clearfix\"><h3>Idevenement</h3></th>
                <th class=\"box_sprite_inner clearfix\"><h3>Nomevenement</h3></th>
                <th class=\"box_sprite_inner clearfix\"><h3> Lieuevenement</h3></th>
                <th class=\"box_sprite_inner clearfix\"><h3>Dateevenement</h3></th>
                <th class=\"box_sprite_inner clearfix\"><h3>Organisateur</h3></th>
                <th class=\"box_sprite_inner clearfix\"><h3>Nbrevisiteur</h3></th>
                <th class=\"box_sprite_inner clearfix\"><h3>Actions</h3></th>
            </tr>
        
        
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
                <th class=\"box_sprite_inner clearfix\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idevenement", array()), "html", null, true);
            echo "</a></th>
                <th class=\"box_sprite_inner clearfix\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomevenement", array()), "html", null, true);
            echo "</th>
                <th class=\"box_sprite_inner clearfix\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lieuevenement", array()), "html", null, true);
            echo "</th>
                <th class=\"box_sprite_inner clearfix\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dateevenement", array()), "html", null, true);
            echo "</th>
                <th class=\"box_sprite_inner clearfix\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "organisateur", array()), "html", null, true);
            echo "</th>
                <th class=\"box_sprite_inner clearfix\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nbrevisiteur", array()), "html", null, true);
            echo "</th>
                <td class=\"box_sprite_inner clearfix\">
                <ul>
                    
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_evenement_create");
        echo "\">
                Ajouter Evenement
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "BsFrontOfficeBundle:Evenement:afficherEv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 41,  90 => 36,  76 => 28,  72 => 27,  68 => 26,  64 => 25,  60 => 24,  56 => 23,  53 => 22,  49 => 21,  31 => 5,  28 => 4,);
    }
}
