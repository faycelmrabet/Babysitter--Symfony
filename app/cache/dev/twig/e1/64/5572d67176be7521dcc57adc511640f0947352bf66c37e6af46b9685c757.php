<?php

/* BsFrontOfficeBundle:Garderie:edit.html.twig */
class __TwigTemplate_e1645572d67176be7521dcc57adc511640f0947352bf66c37e6af46b9685c757 extends Twig_Template
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
        echo "    <h1>Modifier Garderie</h1>
      
    <form method=\"POST\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bs_front_office_espace_garderie_edit", array("id" => $this->getAttribute((isset($context["garderie"]) ? $context["garderie"] : $this->getContext($context, "garderie")), "idgarderie", array()))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

                <table width=\"700px\" height=\"400px\"  style=\"margin: 80px; \"> 
    <tr>
        <td><b>Nom Garderie</b></td>
        <td>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomgarderie", array()), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <td><b>Description</b></td>
            <td>
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
                </td>
            </tr>
            
        <tr>
            <td><b>Tarif</b></td>
            <td>
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tarif", array()), 'widget');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tarif", array()), 'errors');
        echo "
                </td>
           </tr> 
           <tr>
               <td><b>Code Postale</b></td>
               <td>
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codepostale", array()), 'widget');
        echo "
                   </td>
                </tr>
                <tr>
                    <td><b>Nom Responsable</b></td>
                    <td>
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomresponsable", array()), 'widget');
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td>
              <input type=\"submit\" value=\"Modifier Garderie\" /> 
                        </td>
              </tr>
    </table>
        
      
      ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
    }

    public function getTemplateName()
    {
        return "BsFrontOfficeBundle:Garderie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 49,  87 => 38,  78 => 32,  69 => 26,  65 => 25,  55 => 18,  46 => 12,  35 => 6,  31 => 4,  28 => 3,);
    }
}
