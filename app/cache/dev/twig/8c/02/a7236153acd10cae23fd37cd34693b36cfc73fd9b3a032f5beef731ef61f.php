<?php

/* BsFrontOfficeBundle:Garderie:new.html.twig */
class __TwigTemplate_8c02a7236153acd10cae23fd37cd34693b36cfc73fd9b3a032f5beef731ef61f extends Twig_Template
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
        echo "    <h1>Lancer Une Garderie </h1>
    
    <form action=\"#\" method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        <table  width=\"700px\" height=\"400px\" style=\"margin: 80px\">
    <tr>
        <td><b>Nom Garderie</b></td>
        <td>
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomgarderie", array()), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <td><b>Description</b></td>
            <td>
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
                </td>
            </tr>
            
        <tr>
            <td><b>Tarif</b></td>
            <td>
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tarif", array()), 'widget');
        echo "
                </td>
           </tr> 
           <tr>
               <td><b>Code Postale</b></td>
               <td>
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codepostale", array()), 'widget');
        echo "
                   </td>
                </tr>
                <tr>
                    <td><b>Nom Responsable</b></td>
                    <td>
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomresponsable", array()), 'widget');
        echo "
                        </td>
                    </tr>
                     <tr>
                         <td><b>Image Garderie</b></td>
                         <td>
               ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
                             </td>
                          </tr>
    </table>
          <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_garderie_accueil");
        echo "\" class=\"btn btn_green\">
            <span>Retour à la liste des garderies</span>
        </a>
    <input type=\"submit\" value=\"Créer Garderie\" />
    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>



        
      
";
    }

    public function getTemplateName()
    {
        return "BsFrontOfficeBundle:Garderie:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  96 => 46,  89 => 42,  80 => 36,  71 => 30,  62 => 24,  52 => 17,  43 => 11,  35 => 6,  31 => 4,  28 => 3,);
    }
}
