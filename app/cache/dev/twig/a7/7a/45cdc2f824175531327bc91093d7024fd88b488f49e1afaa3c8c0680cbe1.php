<?php

/* BsFrontOfficeBundle:Evenement:new.html.twig */
class __TwigTemplate_a77a45cdc2f824175531327bc91093d7024fd88b488f49e1afaa3c8c0680cbe1 extends Twig_Template
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
        // line 4
        echo "    <h1>Création D'un Événement </h1>
    
    <form action=\"#\" method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        <table width=\"700px\" height=\"400px\" style=\"margin: 80px\">
    <tr>
        <td><b>Nom Événement</b></td>
        <td>
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomevenement", array()), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <td><b>Lieu Ou Espace De Déroulement</br></td>
            <td>
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuevenement", array()), 'widget');
        echo "
                </td>
            </tr>
            
        <tr>
            <td><b>Date</br></td>
            <td>
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateevenement", array()), 'widget');
        echo "
                </td>
           </tr> 
           <tr>
               <td><b>Nom De L'organisateur</br></td>
               <td>
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisateur", array()), 'widget');
        echo "
                   </td>
                </tr>
                <tr>
                    <td><b>Nombre Des Places Disponibles</br> </td>
                    <td>
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrevisiteur", array()), 'widget');
        echo "
                        </td>
                    </tr>
                     <tr>
                         <td><b>Affiche De L'événement</br></td>
                         <td>
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
                             </td>
                          </tr>
    </table>
        </br>
    <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_evenement_accueil");
        echo "\" class=\"btn btn_green\">
        <span>Retour à la liste des evenements</span>
        </a>
        <input type=\"submit\" value=\"Créer Evenement\" />
    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>



  
";
    }

    public function getTemplateName()
    {
        return "BsFrontOfficeBundle:Evenement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 51,  97 => 47,  89 => 42,  80 => 36,  71 => 30,  62 => 24,  52 => 17,  43 => 11,  35 => 6,  31 => 4,  28 => 3,);
    }
}
