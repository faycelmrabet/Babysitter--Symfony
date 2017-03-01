<?php

/* BsFrontOfficeBundle:Evenement:edit.html.twig */
class __TwigTemplate_b4ff98933f6740e62a489b3bf5f33a4b388b8645178c36976a915b33d3ea48f4 extends Twig_Template
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
        echo "    <h1>Evenement edit</h1>
      
    <form method=\"POST\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bs_front_office_espace_evenement_edit", array("id" => $this->getAttribute((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "idevenement", array()))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

                <table width=\"700px\" height=\"400px\" style=\"margin: 80px\">
    <tr>
        <td>Nom Événement</td>
        <td>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomevenement", array()), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <td>Lieu Ou Espace De Déroulement</td>
            <td>
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuevenement", array()), 'widget');
        echo "
                </td>
            </tr>
            
        <tr>
            <td>Date</td>
            <td>
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateevenement", array()), 'widget');
        echo "
                </td>
           </tr> 
           <tr>
               <td>Nom De L'organisateur</td>
               <td>
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisateur", array()), 'widget');
        echo "
                   </td>
                </tr>
                <tr>
                    <td>Nombre Des Places Disponibles </td>
                    <td>
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrevisiteur", array()), 'widget');
        echo "
                        </td>
                    </tr>
                     <tr>
                         <td>Image</td>
                     <td> ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "</td>
                          </tr>
                          <tr>
                              <td>
                          
                                  
                          <input type=\"submit\" value=\"Modifier Evenement\" />
                          
                          </td>
                          
                          </tr>
                          
    </table>
          
      ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>
  

   
";
    }

    public function getTemplateName()
    {
        return "BsFrontOfficeBundle:Evenement:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 56,  91 => 42,  83 => 37,  74 => 31,  65 => 25,  55 => 18,  46 => 12,  35 => 6,  31 => 4,  28 => 3,);
    }
}
