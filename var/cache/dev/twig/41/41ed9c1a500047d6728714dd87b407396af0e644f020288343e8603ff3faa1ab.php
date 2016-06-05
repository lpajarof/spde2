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
        $__internal_57ffec92b31ce2f30b4559caf86a13038414c795193dcd84159a6089d55cd3eb = $this->env->getExtension("native_profiler");
        $__internal_57ffec92b31ce2f30b4559caf86a13038414c795193dcd84159a6089d55cd3eb->enter($__internal_57ffec92b31ce2f30b4559caf86a13038414c795193dcd84159a6089d55cd3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

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
        // line 25
        echo "   ";
        $this->displayBlock('js', $context, $blocks);
        // line 32
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
        // line 45
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
                                    <a><i class=\"fa fa-home\"></i> Modelo <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">                                                
                                                <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("r_entrenamiento");
        echo "\">Entrenamiento</a>
                                                </li>
                                                <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("r_clasificacion");
        echo "\">Clasificaci&oacute;n</a>
                                                </li>
                                        </ul>
\t\t\t\t</li>
                                <li>
                                    <a><i class=\"fa fa-home\"></i> Estudiantes <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
                                                <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("r_estudiantes");
        echo "\">Listar</a>
                                                </li>
                                                <li><a href=\"#\">Agregar</a>
                                                </li>
                                        </ul>
\t\t\t\t</li>
                                <li>
                                    <a><i class=\"fa fa-edit\"></i> Configuración <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
                                                <li><a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("r_tipousuario");
        echo "\">Tipos de usuarios</a>
                                                </li>
                                                <li><a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("r_programas");
        echo "\">Programas</a>
                                                </li>
                                                <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("r_caracteristicas");
        echo "\">Caracter&iacute;sticas</a>
                                                </li>
                                                <li><a href=\"#\">Acciones</a>
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
        // line 128
        $this->displayBlock('titulo', $context, $blocks);
        echo " <small>";
        $this->displayBlock('sub_titulo', $context, $blocks);
        echo "</small></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\"></div>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            ";
        // line 133
        $this->displayBlock('contenido', $context, $blocks);
        // line 136
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
        // line 156
        $this->displayBlock('js_footer', $context, $blocks);
        // line 170
        echo "</body>

</html>
";
        
        $__internal_57ffec92b31ce2f30b4559caf86a13038414c795193dcd84159a6089d55cd3eb->leave($__internal_57ffec92b31ce2f30b4559caf86a13038414c795193dcd84159a6089d55cd3eb_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bfecb1c5aaad1be3da70bca50b7d58143e13e1067f0564c610cae4f2e8f7c04 = $this->env->getExtension("native_profiler");
        $__internal_7bfecb1c5aaad1be3da70bca50b7d58143e13e1067f0564c610cae4f2e8f7c04->enter($__internal_7bfecb1c5aaad1be3da70bca50b7d58143e13e1067f0564c610cae4f2e8f7c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SPDE";
        
        $__internal_7bfecb1c5aaad1be3da70bca50b7d58143e13e1067f0564c610cae4f2e8f7c04->leave($__internal_7bfecb1c5aaad1be3da70bca50b7d58143e13e1067f0564c610cae4f2e8f7c04_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_251d19cb3ec9819176b54303c0f9ab57621dbe57636146ace269274ee322789c = $this->env->getExtension("native_profiler");
        $__internal_251d19cb3ec9819176b54303c0f9ab57621dbe57636146ace269274ee322789c->enter($__internal_251d19cb3ec9819176b54303c0f9ab57621dbe57636146ace269274ee322789c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/icheck/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    

    <!-- Custom styling plus plugins -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
   ";
        
        $__internal_251d19cb3ec9819176b54303c0f9ab57621dbe57636146ace269274ee322789c->leave($__internal_251d19cb3ec9819176b54303c0f9ab57621dbe57636146ace269274ee322789c_prof);

    }

    // line 25
    public function block_js($context, array $blocks = array())
    {
        $__internal_c57bfaa0fe099ab4333012791e8b586733258a4d2d192f2beae7011660716e2a = $this->env->getExtension("native_profiler");
        $__internal_c57bfaa0fe099ab4333012791e8b586733258a4d2d192f2beae7011660716e2a->enter($__internal_c57bfaa0fe099ab4333012791e8b586733258a4d2d192f2beae7011660716e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 26
        echo "    <!-- Scripts -->
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/nprogress.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    
    ";
        
        $__internal_c57bfaa0fe099ab4333012791e8b586733258a4d2d192f2beae7011660716e2a->leave($__internal_c57bfaa0fe099ab4333012791e8b586733258a4d2d192f2beae7011660716e2a_prof);

    }

    // line 128
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_4476ca9556ec2004e457162a13a86dee93a7768e8946388d5ca32b1847924af3 = $this->env->getExtension("native_profiler");
        $__internal_4476ca9556ec2004e457162a13a86dee93a7768e8946388d5ca32b1847924af3->enter($__internal_4476ca9556ec2004e457162a13a86dee93a7768e8946388d5ca32b1847924af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " Titulo ";
        
        $__internal_4476ca9556ec2004e457162a13a86dee93a7768e8946388d5ca32b1847924af3->leave($__internal_4476ca9556ec2004e457162a13a86dee93a7768e8946388d5ca32b1847924af3_prof);

    }

    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_79350617193cd46df597c6db296e8e8bf85154de6a8da1db8d9d56f13e115441 = $this->env->getExtension("native_profiler");
        $__internal_79350617193cd46df597c6db296e8e8bf85154de6a8da1db8d9d56f13e115441->enter($__internal_79350617193cd46df597c6db296e8e8bf85154de6a8da1db8d9d56f13e115441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " Sub titulo ";
        
        $__internal_79350617193cd46df597c6db296e8e8bf85154de6a8da1db8d9d56f13e115441->leave($__internal_79350617193cd46df597c6db296e8e8bf85154de6a8da1db8d9d56f13e115441_prof);

    }

    // line 133
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_00c4cd2cab42c234e66209e5d2fa4355688f6d70fe75fd21aba362d3e47e8a82 = $this->env->getExtension("native_profiler");
        $__internal_00c4cd2cab42c234e66209e5d2fa4355688f6d70fe75fd21aba362d3e47e8a82->enter($__internal_00c4cd2cab42c234e66209e5d2fa4355688f6d70fe75fd21aba362d3e47e8a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 134
        echo "                               
                            ";
        
        $__internal_00c4cd2cab42c234e66209e5d2fa4355688f6d70fe75fd21aba362d3e47e8a82->leave($__internal_00c4cd2cab42c234e66209e5d2fa4355688f6d70fe75fd21aba362d3e47e8a82_prof);

    }

    // line 156
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_157a5c95ea51d75c6d38291044c48c95ccdc05b175d3add1dc704e5708217e10 = $this->env->getExtension("native_profiler");
        $__internal_157a5c95ea51d75c6d38291044c48c95ccdc05b175d3add1dc704e5708217e10->enter($__internal_157a5c95ea51d75c6d38291044c48c95ccdc05b175d3add1dc704e5708217e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        echo "                       
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- bootstrap progress js -->
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>    

    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/custom.js"), "html", null, true);
        echo "\"></script>  
    
    <!-- Datatables-->
        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/fnReloadAjax.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_157a5c95ea51d75c6d38291044c48c95ccdc05b175d3add1dc704e5708217e10->leave($__internal_157a5c95ea51d75c6d38291044c48c95ccdc05b175d3add1dc704e5708217e10_prof);

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
        return array (  373 => 168,  369 => 167,  365 => 166,  359 => 163,  354 => 161,  350 => 160,  344 => 157,  336 => 156,  328 => 134,  322 => 133,  299 => 128,  289 => 29,  285 => 28,  281 => 27,  278 => 26,  272 => 25,  263 => 23,  259 => 22,  252 => 18,  248 => 17,  244 => 16,  240 => 15,  236 => 14,  233 => 13,  227 => 12,  215 => 10,  205 => 170,  203 => 156,  181 => 136,  179 => 133,  169 => 128,  122 => 84,  117 => 82,  112 => 80,  100 => 71,  90 => 64,  85 => 62,  65 => 45,  50 => 32,  47 => 25,  45 => 12,  40 => 10,  29 => 1,);
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
/*     <link href="{{ asset('bundles/Gentellela/css/icheck/flat/green.css')}}" rel="stylesheet">*/
/*     */
/* */
/*     <!-- Custom styling plus plugins -->*/
/*     <link href="{{ asset('bundles/Gentellela/css/custom.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bundles/Gentellela/js/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />*/
/*    {% endblock %}*/
/*    {% block js %}*/
/*     <!-- Scripts -->*/
/*     <script src="{{ asset('bundles/Gentellela/js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/Gentellela/js/nprogress.js') }}"></script>*/
/*     <script src="{{ asset('bundles/Gentellela/js/icheck/icheck.min.js') }}"></script>*/
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
/*                                     <a><i class="fa fa-home"></i> Modelo <span class="fa fa-chevron-down"></span></a>*/
/*                                         <ul class="nav child_menu" style="display: none">                                                */
/*                                                 <li><a href="{{ path('r_entrenamiento') }}">Entrenamiento</a>*/
/*                                                 </li>*/
/*                                                 <li><a href="{{ path('r_clasificacion')}}">Clasificaci&oacute;n</a>*/
/*                                                 </li>*/
/*                                         </ul>*/
/* 				</li>*/
/*                                 <li>*/
/*                                     <a><i class="fa fa-home"></i> Estudiantes <span class="fa fa-chevron-down"></span></a>*/
/*                                         <ul class="nav child_menu" style="display: none">*/
/*                                                 <li><a href="{{ path('r_estudiantes')}}">Listar</a>*/
/*                                                 </li>*/
/*                                                 <li><a href="#">Agregar</a>*/
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
/*                                                 <li><a href="{{ path("r_caracteristicas")}}">Caracter&iacute;sticas</a>*/
/*                                                 </li>*/
/*                                                 <li><a href="#">Acciones</a>*/
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
