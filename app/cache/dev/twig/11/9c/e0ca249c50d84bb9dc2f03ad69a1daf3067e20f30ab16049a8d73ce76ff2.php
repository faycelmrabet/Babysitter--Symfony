<?php

/* NomayaSocialBundle:Buttons:pinterestButton.html.twig */
class __TwigTemplate_119ce0ca249c50d84bb9dc2f03ad69a1daf3067e20f30ab16049a8d73ce76ff2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:pinterestButton.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
