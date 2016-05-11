<?php

/* admin.html.twig */
class __TwigTemplate_bd20491811af12bdec589eb45fb6957906e09e79e054fd4098e6395dd35dd0ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'js' => array($this, 'block_js'),
            'titulo' => array($this, 'block_titulo'),
            'sub_titulo' => array($this, 'block_sub_titulo'),
            'contenido' => array($this, 'block_contenido'),
            'js_footer' => array($this, 'block_js_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ee7480e53512c7f11e4433edae3f9701c5c36f7536645af54947a0374705ef2 = $this->env->getExtension("native_profiler");
        $__internal_3ee7480e53512c7f11e4433edae3f9701c5c36f7536645af54947a0374705ef2->enter($__internal_3ee7480e53512c7f11e4433edae3f9701c5c36f7536645af54947a0374705ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "   ";
        $this->displayBlock('js', $context, $blocks);
        // line 29
        echo "</head>
<body class=\"nav-md\">
    <div class=\"container body\">
        <div class=\"main_container\">
            <div class=\"col-md-3 left_col\">
                <div class=\"left_col scroll-view\">
                    <div class=\"navbar nav_title\" style=\"border: 0;\">
\t\t\t<a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>SPDE</span></a>
                    </div>
                    <div class=\"clearfix\"></div>
                    <!-- menu prile quick info -->
                    <div class=\"profile\">
                        <div class=\"profile_pic\">
                            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
\t\t\t</div>
\t\t\t<div class=\"profile_info\">
                            <span>Welcome,</span>
                            <h2>Leandro Pájaro F</h2>
\t\t\t</div>
                    </div>
                    <!-- /menu prile quick info -->
                    <br/>
                    <!-- sidebar menu -->
                    <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
        \t\t<div class=\"menu_section\">
                            <h3>&nbsp;</h3>
                            <ul class=\"nav side-menu\">
                                <li>
                                    <a><i class=\"fa fa-home\"></i> Estudiantes <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
                                                <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("estudiantesList");
        echo "\">Listar</a>
                                                </li>
                                                <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("estudiantesForm");
        echo "\">Agregar</a>
                                                </li>
                                        </ul>
\t\t\t\t</li>
                                <li>
                                    <a><i class=\"fa fa-edit\"></i> Configuración <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
                                                <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("r_tipousuario");
        echo "\">Tipos de usuarios</a>
                                                </li>
                                                <li><a href=\"empty.html\">Meny2.2s</a>
                                                </li>
                                        </ul>
                                </li>
                            </ul>
\t\t\t</div>
                    </div>
                    <!-- /sidebar menu -->\t                    
\t\t</div>
            </div>

            <!-- top navigation -->
            <div class=\"top_nav\">
                <div class=\"nav_menu\">
                    <nav class=\"\" role=\"navigation\">
                        <div class=\"nav toggle\">
                          <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                        </div>
                        <ul class=\"nav navbar-nav navbar-right\">
                          <li class=\"\">
                            <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                              Leandro Pájaro Fuentes  <span class=\" fa fa-angle-down\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-usermenu animated fadeInDown pull-right\">
                                <li>
                                    <a href=\"http://localhost:8080/spde2/web/app_dev.php/logout\"><i class=\"fa fa-sign-out pull-right\"></i>LogOut</a>
                                </li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                    </div>
            </div>
            <!-- /top navigation -->                                                
            
            <!-- page content -->
            <div class=\"right_col\" role=\"main\">
        \t<div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"dashboard_graph\">
                            <div class=\"row x_title\">
\t\t\t\t<div class=\"col-md-6\">
                                    <h3> ";
        // line 112
        $this->displayBlock('titulo', $context, $blocks);
        echo " <small>";
        $this->displayBlock('sub_titulo', $context, $blocks);
        echo "</small></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\"></div>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            ";
        // line 117
        $this->displayBlock('contenido', $context, $blocks);
        // line 120
        echo "                            </div>
                            <div class=\"clearfix\"></div>
\t\t\t</div>
                    </div>
\t\t</div>
                <br>
\t\t<!-- footer content -->
\t\t<footer>
                    <div class=\"copyright-info\">
                        <p class=\"pull-right\">Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>\t\t
\t\t\t</p>
                    </div>
                    <div class=\"clearfix\"></div>
\t\t</footer>
\t\t<!-- /footer content -->
            </div>
            <!-- /page content -->
        </div>
    </div>
   
   ";
        // line 140
        $this->displayBlock('js_footer', $context, $blocks);
        // line 154
        echo "</body>

</html>
";
        
        $__internal_3ee7480e53512c7f11e4433edae3f9701c5c36f7536645af54947a0374705ef2->leave($__internal_3ee7480e53512c7f11e4433edae3f9701c5c36f7536645af54947a0374705ef2_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_61ea872e69dcc84fd93a12149dcf7e38def3a9a0e46d711b7ce58e9147014142 = $this->env->getExtension("native_profiler");
        $__internal_61ea872e69dcc84fd93a12149dcf7e38def3a9a0e46d711b7ce58e9147014142->enter($__internal_61ea872e69dcc84fd93a12149dcf7e38def3a9a0e46d711b7ce58e9147014142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SPDE";
        
        $__internal_61ea872e69dcc84fd93a12149dcf7e38def3a9a0e46d711b7ce58e9147014142->leave($__internal_61ea872e69dcc84fd93a12149dcf7e38def3a9a0e46d711b7ce58e9147014142_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a26b6539562203e9f33bfda10a474ed14f9a8d73efd746455bd8a052c08bcd22 = $this->env->getExtension("native_profiler");
        $__internal_a26b6539562203e9f33bfda10a474ed14f9a8d73efd746455bd8a052c08bcd22->enter($__internal_a26b6539562203e9f33bfda10a474ed14f9a8d73efd746455bd8a052c08bcd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/fonts/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/select/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styling plus plugins -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
   ";
        
        $__internal_a26b6539562203e9f33bfda10a474ed14f9a8d73efd746455bd8a052c08bcd22->leave($__internal_a26b6539562203e9f33bfda10a474ed14f9a8d73efd746455bd8a052c08bcd22_prof);

    }

    // line 23
    public function block_js($context, array $blocks = array())
    {
        $__internal_a8661cd7fc2ebb7467a8967666c72dffc992f63a89402642dd8113721b4d4fcf = $this->env->getExtension("native_profiler");
        $__internal_a8661cd7fc2ebb7467a8967666c72dffc992f63a89402642dd8113721b4d4fcf->enter($__internal_a8661cd7fc2ebb7467a8967666c72dffc992f63a89402642dd8113721b4d4fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 24
        echo "    <!-- Scripts -->
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/nprogress.js"), "html", null, true);
        echo "\"></script>
    
    ";
        
        $__internal_a8661cd7fc2ebb7467a8967666c72dffc992f63a89402642dd8113721b4d4fcf->leave($__internal_a8661cd7fc2ebb7467a8967666c72dffc992f63a89402642dd8113721b4d4fcf_prof);

    }

    // line 112
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_8e890037712c1fdee5b2c188a0a50baf9f3f72705b7a2c4fe065e70601f19db9 = $this->env->getExtension("native_profiler");
        $__internal_8e890037712c1fdee5b2c188a0a50baf9f3f72705b7a2c4fe065e70601f19db9->enter($__internal_8e890037712c1fdee5b2c188a0a50baf9f3f72705b7a2c4fe065e70601f19db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " Titulo ";
        
        $__internal_8e890037712c1fdee5b2c188a0a50baf9f3f72705b7a2c4fe065e70601f19db9->leave($__internal_8e890037712c1fdee5b2c188a0a50baf9f3f72705b7a2c4fe065e70601f19db9_prof);

    }

    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_6eb5b978bae651e65f8a77e9770cf490584bded9eb307f2f77e2bb80a3246eaa = $this->env->getExtension("native_profiler");
        $__internal_6eb5b978bae651e65f8a77e9770cf490584bded9eb307f2f77e2bb80a3246eaa->enter($__internal_6eb5b978bae651e65f8a77e9770cf490584bded9eb307f2f77e2bb80a3246eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " Sub titulo ";
        
        $__internal_6eb5b978bae651e65f8a77e9770cf490584bded9eb307f2f77e2bb80a3246eaa->leave($__internal_6eb5b978bae651e65f8a77e9770cf490584bded9eb307f2f77e2bb80a3246eaa_prof);

    }

    // line 117
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_bbe57acbe8d991afecd5058956974e7fc08c41595dca9eda5de99c34788a31a1 = $this->env->getExtension("native_profiler");
        $__internal_bbe57acbe8d991afecd5058956974e7fc08c41595dca9eda5de99c34788a31a1->enter($__internal_bbe57acbe8d991afecd5058956974e7fc08c41595dca9eda5de99c34788a31a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 118
        echo "                               
                            ";
        
        $__internal_bbe57acbe8d991afecd5058956974e7fc08c41595dca9eda5de99c34788a31a1->leave($__internal_bbe57acbe8d991afecd5058956974e7fc08c41595dca9eda5de99c34788a31a1_prof);

    }

    // line 140
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_d66f965a0f3ee2b35184173c894fbe4f0a434def8d09f2c8a96f5a4ffb5e86fc = $this->env->getExtension("native_profiler");
        $__internal_d66f965a0f3ee2b35184173c894fbe4f0a434def8d09f2c8a96f5a4ffb5e86fc->enter($__internal_d66f965a0f3ee2b35184173c894fbe4f0a434def8d09f2c8a96f5a4ffb5e86fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        echo "                       
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- bootstrap progress js -->
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>    

    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/custom.js"), "html", null, true);
        echo "\"></script>  
    
    <!-- Datatables-->
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/fnReloadAjax.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_d66f965a0f3ee2b35184173c894fbe4f0a434def8d09f2c8a96f5a4ffb5e86fc->leave($__internal_d66f965a0f3ee2b35184173c894fbe4f0a434def8d09f2c8a96f5a4ffb5e86fc_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 152,  338 => 151,  334 => 150,  328 => 147,  323 => 145,  319 => 144,  313 => 141,  305 => 140,  297 => 118,  291 => 117,  268 => 112,  258 => 26,  254 => 25,  251 => 24,  245 => 23,  236 => 21,  232 => 20,  226 => 17,  222 => 16,  218 => 15,  214 => 14,  211 => 13,  205 => 12,  193 => 10,  183 => 154,  181 => 140,  159 => 120,  157 => 117,  147 => 112,  100 => 68,  90 => 61,  85 => 59,  65 => 42,  50 => 29,  47 => 23,  45 => 12,  40 => 10,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <!-- Meta, title, CSS, favicons, etc. -->*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}SPDE{% endblock %}</title>*/
/*     */
/*     {% block stylesheets %}*/
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{ asset('bundles/Gentellela/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bundles/Gentellela/fonts/css/font-awesome.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bundles/Gentellela/css/animate.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bundles/Gentellela/css/select/select2.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom styling plus plugins -->*/
/*     <link href="{{ asset('bundles/Gentellela/css/custom.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bundles/Gentellela/js/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />*/
/*    {% endblock %}*/
/*    {% block js %}*/
/*     <!-- Scripts -->*/
/*     <script src="{{ asset('bundles/Gentellela/js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/Gentellela/js/nprogress.js') }}"></script>*/
/*     */
/*     {% endblock %}*/
/* </head>*/
/* <body class="nav-md">*/
/*     <div class="container body">*/
/*         <div class="main_container">*/
/*             <div class="col-md-3 left_col">*/
/*                 <div class="left_col scroll-view">*/
/*                     <div class="navbar nav_title" style="border: 0;">*/
/* 			<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SPDE</span></a>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                     <!-- menu prile quick info -->*/
/*                     <div class="profile">*/
/*                         <div class="profile_pic">*/
/*                             <img src="{{ asset('bundles/Gentellela/images/img.jpg') }}" alt="..." class="img-circle profile_img">*/
/* 			</div>*/
/* 			<div class="profile_info">*/
/*                             <span>Welcome,</span>*/
/*                             <h2>Leandro Pájaro F</h2>*/
/* 			</div>*/
/*                     </div>*/
/*                     <!-- /menu prile quick info -->*/
/*                     <br/>*/
/*                     <!-- sidebar menu -->*/
/*                     <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/*         		<div class="menu_section">*/
/*                             <h3>&nbsp;</h3>*/
/*                             <ul class="nav side-menu">*/
/*                                 <li>*/
/*                                     <a><i class="fa fa-home"></i> Estudiantes <span class="fa fa-chevron-down"></span></a>*/
/*                                         <ul class="nav child_menu" style="display: none">*/
/*                                                 <li><a href="{{ path('estudiantesList') }}">Listar</a>*/
/*                                                 </li>*/
/*                                                 <li><a href="{{ path('estudiantesForm') }}">Agregar</a>*/
/*                                                 </li>*/
/*                                         </ul>*/
/* 				</li>*/
/*                                 <li>*/
/*                                     <a><i class="fa fa-edit"></i> Configuración <span class="fa fa-chevron-down"></span></a>*/
/*                                         <ul class="nav child_menu" style="display: none">*/
/*                                                 <li><a href="{{ path('r_tipousuario') }}">Tipos de usuarios</a>*/
/*                                                 </li>*/
/*                                                 <li><a href="empty.html">Meny2.2s</a>*/
/*                                                 </li>*/
/*                                         </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/* 			</div>*/
/*                     </div>*/
/*                     <!-- /sidebar menu -->	                    */
/* 		</div>*/
/*             </div>*/
/* */
/*             <!-- top navigation -->*/
/*             <div class="top_nav">*/
/*                 <div class="nav_menu">*/
/*                     <nav class="" role="navigation">*/
/*                         <div class="nav toggle">*/
/*                           <a id="menu_toggle"><i class="fa fa-bars"></i></a>*/
/*                         </div>*/
/*                         <ul class="nav navbar-nav navbar-right">*/
/*                           <li class="">*/
/*                             <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/*                               Leandro Pájaro Fuentes  <span class=" fa fa-angle-down"></span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">*/
/*                                 <li>*/
/*                                     <a href="http://localhost:8080/spde2/web/app_dev.php/logout"><i class="fa fa-sign-out pull-right"></i>LogOut</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                           </li>*/
/*                         </ul>*/
/*                       </nav>*/
/*                     </div>*/
/*             </div>*/
/*             <!-- /top navigation -->                                                */
/*             */
/*             <!-- page content -->*/
/*             <div class="right_col" role="main">*/
/*         	<div class="row">*/
/*                     <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                         <div class="dashboard_graph">*/
/*                             <div class="row x_title">*/
/* 				<div class="col-md-6">*/
/*                                     <h3> {% block titulo %} Titulo {% endblock %} <small>{% block sub_titulo %} Sub titulo {% endblock %}</small></h3>*/
/* 				</div>*/
/* 				<div class="col-md-6"></div>*/
/*                             </div>*/
/*                             <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                             {% block contenido %}*/
/*                                */
/*                             {% endblock %}*/
/*                             </div>*/
/*                             <div class="clearfix"></div>*/
/* 			</div>*/
/*                     </div>*/
/* 		</div>*/
/*                 <br>*/
/* 		<!-- footer content -->*/
/* 		<footer>*/
/*                     <div class="copyright-info">*/
/*                         <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>		*/
/* 			</p>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/* 		</footer>*/
/* 		<!-- /footer content -->*/
/*             </div>*/
/*             <!-- /page content -->*/
/*         </div>*/
/*     </div>*/
/*    */
/*    {% block js_footer %}                       */
/*     <script src="{{ asset('bundles/Gentellela/js/bootstrap.min.js')}}"></script>*/
/* */
/*     <!-- bootstrap progress js -->*/
/*     <script src="{{ asset('bundles/Gentellela/js/progressbar/bootstrap-progressbar.min.js')}}"></script>*/
/*     <script src="{{ asset('bundles/Gentellela/js/nicescroll/jquery.nicescroll.min.js')}}"></script>    */
/* */
/*     <script src="{{ asset('bundles/Gentellela/js/custom.js')}}"></script>  */
/*     */
/*     <!-- Datatables-->*/
/*         <script src="{{ asset('bundles/Gentellela/js/datatables/jquery.dataTables.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/Gentellela/js/datatables/dataTables.bootstrap.js') }}"></script>*/
/*         <script src="{{ asset('bundles/Gentellela/js/fnReloadAjax.js')}}"></script>*/
/*    {% endblock %}*/
/* </body>*/
/* */
/* </html>*/
/* */
