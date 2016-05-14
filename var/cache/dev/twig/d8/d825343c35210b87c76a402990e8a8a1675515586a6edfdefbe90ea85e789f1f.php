<?php

/* ::admin.html.twig */
class __TwigTemplate_8418c07bde2fba8d00ccaadf90647961c7c3801a98f7c24c8b5063abfffd0cfd extends Twig_Template
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
        $__internal_ba31df6043e7e856d279c1a3c3e0bfb6230359f4172bf953a7809ad308be6abe = $this->env->getExtension("native_profiler");
        $__internal_ba31df6043e7e856d279c1a3c3e0bfb6230359f4172bf953a7809ad308be6abe->enter($__internal_ba31df6043e7e856d279c1a3c3e0bfb6230359f4172bf953a7809ad308be6abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin.html.twig"));

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
                                                <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("r_programas");
        echo "\">Programas</a>
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
        
        $__internal_ba31df6043e7e856d279c1a3c3e0bfb6230359f4172bf953a7809ad308be6abe->leave($__internal_ba31df6043e7e856d279c1a3c3e0bfb6230359f4172bf953a7809ad308be6abe_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_37a961b4eb18529249642520cf4c598237cd6dae4788f44d6a7793489f866922 = $this->env->getExtension("native_profiler");
        $__internal_37a961b4eb18529249642520cf4c598237cd6dae4788f44d6a7793489f866922->enter($__internal_37a961b4eb18529249642520cf4c598237cd6dae4788f44d6a7793489f866922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SPDE";
        
        $__internal_37a961b4eb18529249642520cf4c598237cd6dae4788f44d6a7793489f866922->leave($__internal_37a961b4eb18529249642520cf4c598237cd6dae4788f44d6a7793489f866922_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b64a565a284f2b5d27e9d864343f846d1d4cd1b5113f0ad7d07fedac65621a4a = $this->env->getExtension("native_profiler");
        $__internal_b64a565a284f2b5d27e9d864343f846d1d4cd1b5113f0ad7d07fedac65621a4a->enter($__internal_b64a565a284f2b5d27e9d864343f846d1d4cd1b5113f0ad7d07fedac65621a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b64a565a284f2b5d27e9d864343f846d1d4cd1b5113f0ad7d07fedac65621a4a->leave($__internal_b64a565a284f2b5d27e9d864343f846d1d4cd1b5113f0ad7d07fedac65621a4a_prof);

    }

    // line 23
    public function block_js($context, array $blocks = array())
    {
        $__internal_39273215a80621e5d5c0c47ef84bbd00c20f3fc996844d563494deec82dfe690 = $this->env->getExtension("native_profiler");
        $__internal_39273215a80621e5d5c0c47ef84bbd00c20f3fc996844d563494deec82dfe690->enter($__internal_39273215a80621e5d5c0c47ef84bbd00c20f3fc996844d563494deec82dfe690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_39273215a80621e5d5c0c47ef84bbd00c20f3fc996844d563494deec82dfe690->leave($__internal_39273215a80621e5d5c0c47ef84bbd00c20f3fc996844d563494deec82dfe690_prof);

    }

    // line 112
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_f4d3f54ae60ba7d3a4300dc5e7079026d0fba5cc1db881b2a9341b78b5e6b03f = $this->env->getExtension("native_profiler");
        $__internal_f4d3f54ae60ba7d3a4300dc5e7079026d0fba5cc1db881b2a9341b78b5e6b03f->enter($__internal_f4d3f54ae60ba7d3a4300dc5e7079026d0fba5cc1db881b2a9341b78b5e6b03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " Titulo ";
        
        $__internal_f4d3f54ae60ba7d3a4300dc5e7079026d0fba5cc1db881b2a9341b78b5e6b03f->leave($__internal_f4d3f54ae60ba7d3a4300dc5e7079026d0fba5cc1db881b2a9341b78b5e6b03f_prof);

    }

    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_e6868be6aad1a4d70a4131afc066b440ec708a27d81c6e4d2ad0f6393e71a01f = $this->env->getExtension("native_profiler");
        $__internal_e6868be6aad1a4d70a4131afc066b440ec708a27d81c6e4d2ad0f6393e71a01f->enter($__internal_e6868be6aad1a4d70a4131afc066b440ec708a27d81c6e4d2ad0f6393e71a01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " Sub titulo ";
        
        $__internal_e6868be6aad1a4d70a4131afc066b440ec708a27d81c6e4d2ad0f6393e71a01f->leave($__internal_e6868be6aad1a4d70a4131afc066b440ec708a27d81c6e4d2ad0f6393e71a01f_prof);

    }

    // line 117
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_c76bb94ec16dc06f842dd670b7b50480ab5722bc76090f4e500388d343fbb0b8 = $this->env->getExtension("native_profiler");
        $__internal_c76bb94ec16dc06f842dd670b7b50480ab5722bc76090f4e500388d343fbb0b8->enter($__internal_c76bb94ec16dc06f842dd670b7b50480ab5722bc76090f4e500388d343fbb0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 118
        echo "                               
                            ";
        
        $__internal_c76bb94ec16dc06f842dd670b7b50480ab5722bc76090f4e500388d343fbb0b8->leave($__internal_c76bb94ec16dc06f842dd670b7b50480ab5722bc76090f4e500388d343fbb0b8_prof);

    }

    // line 140
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_e74e8b21aa7b8d63e6396ff64f9ead54edee873934592d29ee107509956de25b = $this->env->getExtension("native_profiler");
        $__internal_e74e8b21aa7b8d63e6396ff64f9ead54edee873934592d29ee107509956de25b->enter($__internal_e74e8b21aa7b8d63e6396ff64f9ead54edee873934592d29ee107509956de25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

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
        
        $__internal_e74e8b21aa7b8d63e6396ff64f9ead54edee873934592d29ee107509956de25b->leave($__internal_e74e8b21aa7b8d63e6396ff64f9ead54edee873934592d29ee107509956de25b_prof);

    }

    public function getTemplateName()
    {
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 152,  341 => 151,  337 => 150,  331 => 147,  326 => 145,  322 => 144,  316 => 141,  308 => 140,  300 => 118,  294 => 117,  271 => 112,  261 => 26,  257 => 25,  254 => 24,  248 => 23,  239 => 21,  235 => 20,  229 => 17,  225 => 16,  221 => 15,  217 => 14,  214 => 13,  208 => 12,  196 => 10,  186 => 154,  184 => 140,  162 => 120,  160 => 117,  150 => 112,  105 => 70,  100 => 68,  90 => 61,  85 => 59,  65 => 42,  50 => 29,  47 => 23,  45 => 12,  40 => 10,  29 => 1,);
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
/*                                                 <li><a href="{{ path('r_programas')}}">Programas</a>*/
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
