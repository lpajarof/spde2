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
        $__internal_9e690749e8301cf5adf6b451a90a64a686920f06ff35fc3b6a7d7f093f27dcc1 = $this->env->getExtension("native_profiler");
        $__internal_9e690749e8301cf5adf6b451a90a64a686920f06ff35fc3b6a7d7f093f27dcc1->enter($__internal_9e690749e8301cf5adf6b451a90a64a686920f06ff35fc3b6a7d7f093f27dcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

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
                                                <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("r_seguimiento");
        echo "\">Seguimiento</a>
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
                                                <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("r_acciones");
        echo "\">Acciones</a>
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
        // line 174
        echo "</body>

</html>
";
        
        $__internal_9e690749e8301cf5adf6b451a90a64a686920f06ff35fc3b6a7d7f093f27dcc1->leave($__internal_9e690749e8301cf5adf6b451a90a64a686920f06ff35fc3b6a7d7f093f27dcc1_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_c35c6ae85580ca665ac5c20dc1a041aad124b1f0b6a39e7f6129d556cea8b74a = $this->env->getExtension("native_profiler");
        $__internal_c35c6ae85580ca665ac5c20dc1a041aad124b1f0b6a39e7f6129d556cea8b74a->enter($__internal_c35c6ae85580ca665ac5c20dc1a041aad124b1f0b6a39e7f6129d556cea8b74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SPDE";
        
        $__internal_c35c6ae85580ca665ac5c20dc1a041aad124b1f0b6a39e7f6129d556cea8b74a->leave($__internal_c35c6ae85580ca665ac5c20dc1a041aad124b1f0b6a39e7f6129d556cea8b74a_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6980c2ae462ce7800d0f3cf6f0a88ae2a8625e56e2b9cc247dc8e049d03c44f5 = $this->env->getExtension("native_profiler");
        $__internal_6980c2ae462ce7800d0f3cf6f0a88ae2a8625e56e2b9cc247dc8e049d03c44f5->enter($__internal_6980c2ae462ce7800d0f3cf6f0a88ae2a8625e56e2b9cc247dc8e049d03c44f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6980c2ae462ce7800d0f3cf6f0a88ae2a8625e56e2b9cc247dc8e049d03c44f5->leave($__internal_6980c2ae462ce7800d0f3cf6f0a88ae2a8625e56e2b9cc247dc8e049d03c44f5_prof);

    }

    // line 25
    public function block_js($context, array $blocks = array())
    {
        $__internal_87f3374fce5696aa7a9e9c6baba501a90a7c4ab53ab9060ca60f8d4ceeee43d7 = $this->env->getExtension("native_profiler");
        $__internal_87f3374fce5696aa7a9e9c6baba501a90a7c4ab53ab9060ca60f8d4ceeee43d7->enter($__internal_87f3374fce5696aa7a9e9c6baba501a90a7c4ab53ab9060ca60f8d4ceeee43d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_87f3374fce5696aa7a9e9c6baba501a90a7c4ab53ab9060ca60f8d4ceeee43d7->leave($__internal_87f3374fce5696aa7a9e9c6baba501a90a7c4ab53ab9060ca60f8d4ceeee43d7_prof);

    }

    // line 128
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_7a237acf72e40e4e9bd957cbbf9d4bd4f00b3c007a69c54903f2d583529a41e4 = $this->env->getExtension("native_profiler");
        $__internal_7a237acf72e40e4e9bd957cbbf9d4bd4f00b3c007a69c54903f2d583529a41e4->enter($__internal_7a237acf72e40e4e9bd957cbbf9d4bd4f00b3c007a69c54903f2d583529a41e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " Titulo ";
        
        $__internal_7a237acf72e40e4e9bd957cbbf9d4bd4f00b3c007a69c54903f2d583529a41e4->leave($__internal_7a237acf72e40e4e9bd957cbbf9d4bd4f00b3c007a69c54903f2d583529a41e4_prof);

    }

    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_0a8c538b368beb525d6a4fe6f02de0a5e28ac4b4bc308bc5e7a2686a350249eb = $this->env->getExtension("native_profiler");
        $__internal_0a8c538b368beb525d6a4fe6f02de0a5e28ac4b4bc308bc5e7a2686a350249eb->enter($__internal_0a8c538b368beb525d6a4fe6f02de0a5e28ac4b4bc308bc5e7a2686a350249eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " Sub titulo ";
        
        $__internal_0a8c538b368beb525d6a4fe6f02de0a5e28ac4b4bc308bc5e7a2686a350249eb->leave($__internal_0a8c538b368beb525d6a4fe6f02de0a5e28ac4b4bc308bc5e7a2686a350249eb_prof);

    }

    // line 133
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_607240f20bbaffba58b95a9c9b2473d2df92d7e0a6aea8449cb5e6ed6dff90d8 = $this->env->getExtension("native_profiler");
        $__internal_607240f20bbaffba58b95a9c9b2473d2df92d7e0a6aea8449cb5e6ed6dff90d8->enter($__internal_607240f20bbaffba58b95a9c9b2473d2df92d7e0a6aea8449cb5e6ed6dff90d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 134
        echo "                               
                            ";
        
        $__internal_607240f20bbaffba58b95a9c9b2473d2df92d7e0a6aea8449cb5e6ed6dff90d8->leave($__internal_607240f20bbaffba58b95a9c9b2473d2df92d7e0a6aea8449cb5e6ed6dff90d8_prof);

    }

    // line 156
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_a6a9f0ea62e87c04a2cbe4eac6703a8514749897d29f6e86bc113545441fcc83 = $this->env->getExtension("native_profiler");
        $__internal_a6a9f0ea62e87c04a2cbe4eac6703a8514749897d29f6e86bc113545441fcc83->enter($__internal_a6a9f0ea62e87c04a2cbe4eac6703a8514749897d29f6e86bc113545441fcc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

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
        
    <!-- Datepicker -->
        <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_a6a9f0ea62e87c04a2cbe4eac6703a8514749897d29f6e86bc113545441fcc83->leave($__internal_a6a9f0ea62e87c04a2cbe4eac6703a8514749897d29f6e86bc113545441fcc83_prof);

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
        return array (  389 => 172,  385 => 171,  379 => 168,  375 => 167,  371 => 166,  365 => 163,  360 => 161,  356 => 160,  350 => 157,  342 => 156,  334 => 134,  328 => 133,  305 => 128,  295 => 29,  291 => 28,  287 => 27,  284 => 26,  278 => 25,  269 => 23,  265 => 22,  258 => 18,  254 => 17,  250 => 16,  246 => 15,  242 => 14,  239 => 13,  233 => 12,  221 => 10,  211 => 174,  209 => 156,  187 => 136,  185 => 133,  175 => 128,  130 => 86,  125 => 84,  120 => 82,  115 => 80,  105 => 73,  100 => 71,  90 => 64,  85 => 62,  65 => 45,  50 => 32,  47 => 25,  45 => 12,  40 => 10,  29 => 1,);
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
/*                                                 <li><a href="{{ path('r_seguimiento') }}">Seguimiento</a>*/
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
/*                                                 <li><a href="{{ path("r_acciones")}}">Acciones</a>*/
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
/*         */
/*     <!-- Datepicker -->*/
/*         <script src="{{ asset('bundles/Gentellela/js/moment/moment.min.js')}}"></script>*/
/*         <script src="{{ asset('bundles/Gentellela/js/datepicker/daterangepicker.js')}}"></script>*/
/*    {% endblock %}*/
/* </body>*/
/* */
/* </html>*/
/* */
