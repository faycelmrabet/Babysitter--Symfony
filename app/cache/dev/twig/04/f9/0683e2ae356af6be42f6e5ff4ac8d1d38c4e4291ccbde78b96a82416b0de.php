<?php

/* BsFrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_04f90683e2ae356af6be42f6e5ff4ac8d1d38c4e4291ccbde78b96a82416b0de extends Twig_Template
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
        echo "     
<div id=\"mid_bird\"></div>
        <div id=\"mid_baloon\"></div>
    
    \t<!-- header slider -->
\t\t<div class=\"header_slider\">
        
\t\t\t<div class=\"banner-container\">
\t\t\t\t<div class=\"banner\">
                \t<ul>
                    \t<li data-transition=\"fade\" data-slotamount=\"10\" data-masterspeed=\"300\">
                        \t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bsfrontoffice/KiddoTurf/images/temp/slider_1_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            
                            <div class=\"caption sft slide_title1\" data-x=\"500\" data-y=\"55\" data-speed=\"900\" data-start=\"400\" data-easing=\"easeOutExpo\">
                            \thello
                            </div>
                            <div class=\"caption sfl slide_title2\" data-x=\"500\" data-y=\"90\" data-speed=\"900\" data-start=\"500\" data-easing=\"easeOutExpo\">
\t\t                    \tccc
\t\t                    </div>
                            <div class=\"caption sfl slide_line\" data-x=\"500\" data-y=\"145\" data-speed=\"900\" data-start=\"600\" data-easing=\"easeOutExpo\"></div>
                            
                            <div class=\"caption sfl slide_descr\" data-x=\"500\" data-y=\"155\" data-speed=\"600\" data-start=\"700\" data-easing=\"easeOutExpo\">
\t\t                    \t<p>Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere.</p>
\t\t                    </div>
                            <div class=\"caption sfb slide_btn\" data-x=\"500\" data-y=\"255\" data-speed=\"900\" data-start=\"1000\" data-easing=\"easeOutExpo\">
\t\t                    \t<a href=\"#\" class=\"btn_slider\"><span>Play Now</span></a>
\t\t                    </div>
                        </li>
                        <li data-transition=\"3dcurtain-vertical\" data-slotamount=\"10\" data-masterspeed=\"200\">
                        \t<img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bsfrontoffice/KiddoTurf/images/temp/slider_1_2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            
                            <div class=\"caption sft slide_title1\" data-x=\"280\" data-y=\"45\" data-speed=\"900\" data-start=\"1300\" data-easing=\"easeOutExpo\">
                            \tLorem ipsum
                            </div>
                            <div class=\"caption sfl slide_title2\" data-x=\"280\" data-y=\"80\" data-speed=\"900\" data-start=\"1500\" data-easing=\"easeOutExpo\">
\t\t                    \tCras nec mi quis
\t\t                    </div>
                            <div class=\"caption sfl slide_line\" data-x=\"280\" data-y=\"135\" data-speed=\"900\" data-start=\"1600\" data-easing=\"easeOutExpo\"></div>
                            
                            <div class=\"caption sfl slide_descr\" data-x=\"280\" data-y=\"145\" data-speed=\"600\" data-start=\"1700\" data-easing=\"easeOutExpo\">
\t\t                    \t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec mi quis metus tincidunt blandit sit amet vel neque. Nullam semper porttitor nibh.</p>
\t\t                    </div>
                            <div class=\"caption sfb slide_btn\" data-x=\"280\" data-y=\"245\" data-speed=\"900\" data-start=\"1800\" data-easing=\"easeOutExpo\">
\t\t                    \t<a href=\"#\" class=\"btn_slider\"><span>Read More</span></a>
\t\t                    </div>
                        </li>
                        <li data-transition=\"3dcurtain-vertical\" data-slotamount=\"10\" data-masterspeed=\"200\">
                        \t<img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bsfrontoffice/KiddoTurf/images/temp/slider_1_3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            
                            <div class=\"caption sft slide_title1\" data-x=\"80\" data-y=\"55\" data-speed=\"900\" data-start=\"1400\" data-easing=\"easeOutExpo\">
                            \thome activities
                            </div>
                            <div class=\"caption sfl slide_title2\" data-x=\"80\" data-y=\"90\" data-speed=\"900\" data-start=\"1600\" data-easing=\"easeOutExpo\">
\t\t                    \tPlay & Grow
\t\t                    </div>
                            <div class=\"caption sfl slide_line\" data-x=\"80\" data-y=\"145\" data-speed=\"900\" data-start=\"1700\" data-easing=\"easeOutExpo\"></div>
                            
                            <div class=\"caption sfl slide_descr\" data-x=\"80\" data-y=\"155\" data-speed=\"600\" data-start=\"1800\" data-easing=\"easeOutExpo\">
\t\t                    \t<p>Vivamus tristique tempus lorem, in tincidunt justo molestie sit amet. Curabitur at velit nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
\t\t                    </div>
                            <div class=\"caption sfb slide_btn\" data-x=\"80\" data-y=\"255\" data-speed=\"900\" data-start=\"1900\" data-easing=\"easeOutExpo\">
\t\t                    \t<a href=\"#\" class=\"btn_slider\"><span>Play Now</span></a>
\t\t                    </div>
                        </li>
                    </ul>
                </div>
\t\t\t</div>
            <script>
\t\t\t\tjQuery(document).ready(function(\$) {
\t
\t\t\t\tif (\$.fn.cssOriginal!=undefined)
\t\t\t\t\t\$.fn.css = \$.fn.cssOriginal;
\t
\t\t\t\t\$('.banner').revolution({
\t\t\t\t\t\tdelay:8000,
\t\t\t\t\t\tstartwidth:940,
\t\t\t\t\t\tstartheight:356,
\t
\t\t\t\t\t\tonHoverStop:\"on\",\t\t\t\t\t\t// Stop Banner Timet at Hover on Slide on/off
\t\t\t\t\t\thideThumbs:0,
\t\t\t\t\t\tnavigationType:\"none\",\t\t\t\t\t// bullet, thumb, none
\t\t\t\t\t\tnavigationArrows:\"solo\",\t\t\t\t// nexttobullets, solo (old name verticalcentered), none
\t
\t\t\t\t\t\tnavigationStyle:\"round\",\t\t\t\t// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
\t\t\t\t\t\t
\t\t\t\t\t\tnavigationHAlign:\"center\",\t\t\t\t// Vertical Align top,center,bottom
\t\t\t\t\t\tnavigationVAlign:\"center\",\t\t\t\t// Horizontal Align left,center,right
\t\t\t\t\t\t
\t\t\t\t\t\tsoloArrowLeftHalign:\"left\",
\t\t\t\t\t\tsoloArrowLeftValign:\"center\",
\t\t\t\t\t\tsoloArrowLeftHOffset:-29,
\t\t\t\t\t\tsoloArrowLeftVOffset:0,

\t\t\t\t\t\tsoloArrowRightHalign:\"right\",
\t\t\t\t\t\tsoloArrowRightValign:\"center\",
\t\t\t\t\t\tsoloArrowRightHOffset:-29,
\t\t\t\t\t\tsoloArrowRightVOffset:0,
\t
\t\t\t\t\t\ttouchenabled:\"on\",\t\t\t\t\t\t// Enable Swipe Function : on/off
\t
\t\t\t\t\t\tstopAtSlide:-1,\t\t\t\t\t\t\t// Stop Timer if Slide \"x\" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
\t\t\t\t\t\tstopAfterLoops:-1,\t\t\t\t\t\t// Stop Timer if All slides has been played \"x\" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
\t
\t\t\t\t\t\thideCaptionAtLimit:0,\t\t\t\t\t// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
\t\t\t\t\t\thideAllCaptionAtLilmit:0,\t\t\t\t// Hide all The Captions if Width of Browser is less then this value
\t\t\t\t\t\thideSliderAtLimit:0,\t\t\t\t\t// Hide the whole slider, and stop also functions if Width of Browser is less than this value
\t
\t\t\t\t\t\tfullWidth:\"off\",
\t\t\t\t\t\tshadow:0\t\t\t\t\t\t\t\t//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
\t
\t\t\t\t\t});
\t\t\t\t});
\t\t\t</script>
            
\t\t</div>
\t\t<!--/ header slider -->
        
        <!-- boxes, 3 cols -->
        <div class=\"boxrow clearfix\">
                  
            <div class=\"box box_1\">
                <div class=\"box_content\">
              <h3>Parent</h3>\t
               <div class=\"box_thumb_round\"><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bsfrontoffice/KiddoTurf/images/temp/bebe210113.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>                    
                    <div class=\"staff_title\"><strong>Maman, Papa</strong> <br> <span class=\"subtitle\"></span></div>
                    <p>Je recherche une baby sitter ou une nounou  </p>
                </div>
                <div class=\"box_bot\">
                     <a href=\"#\" class=\"btn\"><span>Inscription</span></a>
                </div>
            </div>
            
            <div class=\"box box_2\">
                <div class=\"box_content\">
                <h3>Responsable Garderie</h3>\t
               <div class=\"box_thumb_round\"><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bsfrontoffice/KiddoTurf/images/temp/anim9.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>                    
                    <div class=\"staff_title\"><strong>Responsable Garderie</strong> <br> <span class=\"subtitle\"></span></div>
                    <p>Je souhaite ajouter mon espace  </p>
                </div>
                <div class=\"box_bot\">
                  <a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_responsable");
        echo "\" class=\"btn\"><span>Inscription</span></a>
                </div>
            </div>
            
            <div class=\"box box_3\">
                <div class=\"box_content\">
                \t<h3>Baby Sitter</h3>
                \t<div class=\"box_thumb_round\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bsfrontoffice/KiddoTurf/images/temp/staff_1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>                    
                    <div class=\"staff_title\"><strong>Baby sitter ,Nounou</strong> <br> <span class=\"subtitle\"></span></div>
                    <p>Je souhaite garder des enfants </p>
                </div>
                <div class=\"box_bot\">
                <a href=\"#\" class=\"btn\"><span>Inscription</span></a>
                </div>
            </div>
                
        </div>
        <!--/ boxes, 3 cols -->
        
    \t<div class=\"big_button_box\">
        \t<a href=\"#\" class=\"btn_custom\"><strong>Get in Touch Now!</strong></a>
        </div>
        
        <!-- bottom 2 boxes -->
       <!-- <div class=\"bottom_boxes\">
        \t<div class=\"box box_circle_date\">
            \t<div class=\"ribbon\"><strong>25</strong> <span>august</span></div>
                <div class=\"box_content\">
\t                <h2><a href=\"#\">Children in the garden ligula lacinia scelerisque</a></h2>
\t                <p>Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas.</p>
\t                <a href=\"#\" class=\"link_more\">Read Article</a>
                </div>
            </div>
            
            <div class=\"box box_circle_photo\">
            \t<div class=\"ribbon\"><span></span><img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bsfrontoffice/KiddoTurf/images/temp/ribbon_photo.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"box_content\">
                \t<p>&ldquo;Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.&rdquo;</p>
                    <span class=\"author\">&minus; Harry Simons</span>
                </div>
            </div>
        </div>-->
        <!--/ bottom 2 boxes -->
        
      <div id=\"bottom_bee\"></div> 
      ";
    }

    public function getTemplateName()
    {
        return "BsFrontOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 177,  197 => 149,  187 => 142,  179 => 137,  164 => 125,  85 => 49,  64 => 31,  43 => 13,  28 => 2,);
    }
}
