<?php

/* BsFrontOfficeBundle:ResponsableGarderie:accueil.html.twig */
class __TwigTemplate_d88a991c1b4bee93385c8e6f680ff0f1bc3d932751b060642d6485de31648c2b extends Twig_Template
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
        echo "<div class=\"title_top\" >
            \t<h1>Espace Responsable Garderie</h1>
                <h1>Bienvenu Mr ...</h1>
            </div>
            
\t        <!-- content -->
\t        <div class=\"content\">
            \t
                <!-- post list -->
\t            <div class=\"postlist\">
                \t
                    <div class=\"post-item\">
\t\t                <div class=\"post-title\">
\t\t                    <h2> <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_evenement_accueil");
        echo "\">Espace Evenements</a></h2>
\t\t                                    
\t\t                </div>                            
\t\t                
\t                    <div class=\"post-image\"><a href=\"blog-details.html\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/evenement.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></div>
\t                    
\t\t                <div class=\"entry clearfix\">
\t\t                    <p>l'organisation des événements est le role principale pour chaque responsable garderie,en effet il lance des événements de sensibilisations pour les parents. ils sont sensés à savoir comment traiter leurs bébés.</p> \t                    
\t\t                </div>     
                        <div class=\"post-meta-bot\">
                        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_responsable_galerie");
        echo "\" class=\"btn\"><span>Accéder au gallerie</span></a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_evenement_accueil");
        echo "\" class=\"btn btn_green\"><span>Accéder A L'espace</span></a>
                        </div>  
\t\t\t\t\t</div>
                    
                    <div class=\"post-item\">
\t\t                <div class=\"post-title\">
\t\t                    <h2><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_garderie_accueil");
        echo "\">Espace Garderie</a></h2>
\t\t                                
\t\t                </div>                            
\t\t                
\t                    <div class=\"post-image\"><a href=\"blog-details.html\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/temp/garderie.png"), "html", null, true);
        echo "\" alt=\"\" /></a></div>
\t                    
\t\t                <div class=\"entry clearfix\">
\t\t                    <p>Chaque responsable garderie peut gérer son espace garderie afin qu'il puisse publier les différents critéres de son garderie ,ainsi il peut crée une gallerie photo de son garderie.</p> \t                    
\t\t                </div>     
                        <div class=\"post-meta-bot\">
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_responsable_galerie1");
        echo "\" class=\"btn\"><span>Accéder au gallerie</span></a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("bs_front_office_espace_garderie_accueil");
        echo "\" class=\"btn btn_green\"><span>Accéder A L'espace</span></a>
                        </div>  
\t\t\t\t\t</div>
                    
                   
                    
                    
                </div>
                <!--/ post list -->
                
              
                
\t        </div>
\t        <!--/ content -->
\t
\t        <!-- sidebar -->
\t        <div class=\"sidebar\">
            \t
              
                
                <!-- flickr widget -->
\t\t\t\t<div class=\"widget-container flickr clearfix\">
\t                <h3 class=\"widget-title\">Des jouets aimables pour les enfants </h3>
\t                <div class=\"flickr_badge_image\" id=\"flickr_badge_image1\"><a href=\"#\"><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/jouet/j1.jpg"), "html", null, true);
        echo "\" alt=\"A photo on Flickr\" title=\"Bon Apetit HTML/WP template - Homepage\" height=\"100\" width=\"100\"></a></div>
\t                
\t                <div class=\"flickr_badge_image\" id=\"flickr_badge_image3\"><a href=\"#\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/jouet/j2.jpg"), "html", null, true);
        echo "\" alt=\"A photo on Flickr\" title=\"Bon Apetit HTML/WP template - Homepage\" height=\"100\" width=\"100\"></a></div>
\t                
\t                <div class=\"flickr_badge_image\" id=\"flickr_badge_image2\"><a href=\"#\"><img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/jouet/j3.jpg"), "html", null, true);
        echo "\" alt=\"A photo on Flickr\" title=\"TechOffers HTML Newsletter\" height=\"100\" width=\"100\"></a></div>
\t                
\t                <div class=\"flickr_badge_image\" id=\"flickr_badge_image4\"><a href=\"#\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/jouet/j4.jpg"), "html", null, true);
        echo "\" alt=\"A photo on Flickr\" title=\"TechOffers HTML Newsletter\" height=\"100\" width=\"100\"></a></div>
\t                
\t                <div class=\"flickr_badge_image\" id=\"flickr_badge_image5\"><a href=\"#\"><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/jouet/j5.jpg"), "html", null, true);
        echo "\" alt=\"A photo on Flickr\" title=\"Art Gallery HTML/WP template - Homepage\" height=\"100\" width=\"100\"></a></div>                        
\t                <div class=\"flickr_badge_image\" id=\"flickr_badge_image6\"><a href=\"#\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/jouet/j6.jpg"), "html", null, true);
        echo "\" alt=\"A photo on Flickr\" title=\"Bon Apetit HTML/WP template - Homepage\" height=\"100\" width=\"100\"></a></div>
\t                
\t                <div class=\"flickr_badge_image\" id=\"flickr_badge_image2\"><a href=\"#\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/jouet/j7.jpg"), "html", null, true);
        echo "\" alt=\"A photo on Flickr\" title=\"TechOffers HTML Newsletter\" height=\"100\" width=\"100\"></a></div>
\t                
\t                <div class=\"flickr_badge_image\" id=\"flickr_badge_image1\"><a href=\"#\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/jouet/j8.jpg"), "html", null, true);
        echo "\" alt=\"A photo on Flickr\" title=\"Bon Apetit HTML/WP template - Homepage\" height=\"100\" width=\"100\"></a></div>
\t                
\t                <div class=\"flickr_badge_image\" id=\"flickr_badge_image3\"><a href=\"#\"><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/jouet/j9.jpg"), "html", null, true);
        echo "\" alt=\"A photo on Flickr\" title=\"Bon Apetit HTML/WP template - Homepage\" height=\"100\" width=\"100\"></a></div>                
\t                
\t            </div>
\t\t\t\t<!--/ flickr widget -->
\t\t\t\t
              
                
                <!-- widget_recent_comments -->                   
\t            <div class=\"widget-container widget_recent_comments\">
\t\t\t\t\t<h3 class=\"widget-title\">Derniers Commentaires</h3>
\t                <ul id=\"recentcomments\">
\t                    <li class=\"recentcomments\">
\t                    <a href=\"post-details.html\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/comment/me.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"thumbnail\"></a> 
\t                    <span class=\"recent_comment\"><a href=\"#\" rel=\"external nofollow\" class=\"url\">Mr semer:</a>j'ai admiré vos services</span><span class=\"clear\"></span></li>
\t                    <li class=\"recentcomments\">
\t                    <a href=\"post-details.html\"><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/comment/me.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"thumbnail\"></a> 
\t                    <span class=\"recent_comment\"><a href=\"#\" rel=\"external nofollow\" class=\"url\">Mr semer1:</a> je veut inscrire mon enfant dans la garderie touyour aljannah ...</span><span class=\"clear\"></span></li>
\t                    <li class=\"recentcomments\">
\t                    <a href=\"post-details.html\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/comment/me.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"thumbnail\"></a> 
\t                    <span class=\"recent_comment\"><a href=\"#\" rel=\"external nofollow\" class=\"url\">Mr semer2:</a>the best site ever thank you</span><span class=\"clear\"></span></li>
\t                  
\t                </ul>
\t\t\t\t</div>
\t\t\t\t<!--/ widget_recent_comments --> 
\t            
\t            <!-- widget_text -->
\t\t        <div class=\"widget-container widget_text\">
\t\t\t\t\t<h3 class=\"widget-title\">Message De L'admin</h3>
\t\t\t\t\t\t<div class=\"textwidget\">
\t\t\t\t\t\t<p>merci de disposer des photos de bonnes qualités pour les garderies et les événements.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t<!--/ widget_text -->
                
                <!-- widget_tag_cloud -->
\t\t        <div class=\"widget-container widget_tag_cloud\">\t        \t
\t                <h3 class=\"widget-title\">Mots clés populaires:</h3>
\t                <div class=\"tagcloud\">
\t                    <a href='#' class='tag-link-4' title='2 topics' style='font-size: 10pt;'><span>Matériels garderies</span></a>
\t                    <a href='#' class='tag-link-7' title='3 topics' style='font-size: 15pt;'><span>Conférence</span></a>
\t                    <a href='#' class='tag-link-3' title='2 topics' style='font-size: 10pt;'><span>Pédagogies</span></a>
\t                    <a href='#' class='tag-link-6' title='3 topics' style='font-size: 17pt;'><span>Santé</span></a>
\t                    <a href='#' class='tag-link-5' title='2 topics' style='font-size: 10pt;'><span>Sport</span></a>
\t                    <a href='#' class='tag-link-5' title='2 topics' style='font-size: 13pt;'><span>Activités</span></a>
\t                    <a href='#' class='tag-link-5' title='2 topics' style='font-size: 15pt;'><span>Parents</span></a>
\t                    <a href='#' class='tag-link-5' title='2 topics' style='font-size: 12pt;'><span>Budget</span></a>
\t                    <a href='#' class='tag-link-4' title='2 topics' style='font-size: 10pt;'><span>Financement</span></a>                    
\t                    <a href='#' class='tag-link-4' title='2 topics' style='font-size: 17pt;'><span>Sécurité</span></a>                                   
\t                </div>
\t            </div>
\t            <!--/ widget_tag_cloud -->
\t                        
\t            <!-- widget_calendar -->
\t        \t<div class=\"widget-container widget_calendar\">  
\t                        \t
\t\t            <div id=\"calendar_wrap\">
\t\t            <table id=\"wp-calendar\" summary=\"Calendar\">
\t\t            <caption>Avril 2013</caption>
\t\t        
\t\t            <thead>
\t\t            <tr>
\t\t                <th scope=\"col\" title=\"Monday\">l</th>
\t\t                <th scope=\"col\" title=\"Tuesday\">m</th>
\t\t                <th scope=\"col\" title=\"Wednesday\">m</th>
\t\t                <th scope=\"col\" title=\"Thursday\">j</th>
\t\t                <th scope=\"col\" title=\"Friday\">v</th>
\t\t        
\t\t                <th scope=\"col\" title=\"Saturday\">s</th>
\t\t                <th scope=\"col\" title=\"Sunday\">d</th>
\t\t            </tr>
\t\t            </thead>
\t\t        
\t\t            <tfoot>
\t\t            <tr>
\t\t                <td colspan=\"3\" id=\"prev\"><a href=\"#\" title=\"View posts for March 2013\">« Mar</a></td>
\t\t                <td class=\"pad\">&nbsp;</td>
\t\t                <td colspan=\"3\" id=\"next\"><a href=\"#\" title=\"View posts for May 2013\">May »</a></td>
\t\t            </tr>
\t\t            </tfoot>
\t\t        
\t\t            <tbody>
\t\t            <tr>
\t\t                <td colspan=\"6\" class=\"pad\">&nbsp;</td><td>1</td>
\t\t            </tr>
\t\t        
\t\t            <tr>
\t\t                <td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td>
\t
\t\t            </tr>
\t\t            <tr>
\t\t                <td>9</td><td><a href=\"#\" title=\"Hello world!, Test 3\">10</a></td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td>
\t\t        
\t\t            </tr>
\t\t            <tr>
\t\t                <td>16</td><td>17</td><td id=\"today\">18</td><td>19</td><td>20</td><td>21</td><td>22</td>
\t\t            </tr>
\t\t            <tr>
\t\t        
\t\t                <td>23</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td>
\t\t            </tr>
\t\t            <tr>
\t\t                <td>30</td><td>31</td>
\t\t        
\t\t                <td class=\"pad\" colspan=\"5\">&nbsp;</td>
\t\t            </tr>
\t\t            </tbody>
\t\t            </table>
\t\t            </div>
\t\t        </div>
\t\t        <!--/ widget_calendar -->
                
                
                
\t        </div>
\t        <!--/ sidebar -->
            
            <div class=\"clear\"></div>
            ";
    }

    public function getTemplateName()
    {
        return "BsFrontOfficeBundle:ResponsableGarderie:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 100,  177 => 97,  171 => 94,  156 => 82,  151 => 80,  146 => 78,  141 => 76,  137 => 75,  132 => 73,  127 => 71,  122 => 69,  117 => 67,  89 => 44,  80 => 38,  73 => 34,  62 => 28,  53 => 22,  46 => 18,  31 => 5,  28 => 4,);
    }
}
