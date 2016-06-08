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
        $__internal_b64e1e238956ebb23f26833e228f02ab161d157b2cfe9bd2355ab9d58a8ee6b3 = $this->env->getExtension("native_profiler");
        $__internal_b64e1e238956ebb23f26833e228f02ab161d157b2cfe9bd2355ab9d58a8ee6b3->enter($__internal_b64e1e238956ebb23f26833e228f02ab161d157b2cfe9bd2355ab9d58a8ee6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

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
                            <span>Hola,</span>
                            <h2>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombres", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array()), "html", null, true);
        echo "</h2>
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
                                                ";
        // line 62
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 63
            echo "                                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("r_entrenamiento");
            echo "\">Entrenamiento</a>
                                                </li>
                                                ";
        }
        // line 66
        echo "                                                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("r_clasificacion");
        echo "\">Clasificaci&oacute;n</a>
                                                </li>
                                        </ul>
\t\t\t\t</li>
                                <li>
                                    <a><i class=\"fa fa-home\"></i> Estudiantes <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
                                                <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("r_estudiantes");
        echo "\">Listar</a>
                                                </li>
                                                <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("r_seguimiento");
        echo "\">Seguimiento</a>
                                                </li>
                                        </ul>
\t\t\t\t</li>
                                ";
        // line 79
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 80
            echo "                                <li>
                                    <a><i class=\"fa fa-edit\"></i> Configuración <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\" style=\"display: none\">
                                                <li><a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("r_tipousuario");
            echo "\">Tipos de usuarios</a>
                                                </li>
                                                <li><a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("r_programas");
            echo "\">Programas</a>
                                                </li>
                                                <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("r_caracteristicas");
            echo "\">Caracter&iacute;sticas</a>
                                                </li>
                                                <li><a href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("r_acciones");
            echo "\">Acciones</a>
                                                </li>
                                        </ul>
                                </li>
                                ";
        }
        // line 94
        echo "                            </ul>
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
                              ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombres", array()), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array()), "html", null, true);
        echo " <span class=\" fa fa-angle-down\"></span>
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
        // line 132
        $this->displayBlock('titulo', $context, $blocks);
        echo " <small>";
        $this->displayBlock('sub_titulo', $context, $blocks);
        echo "</small></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\"></div>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            ";
        // line 137
        $this->displayBlock('contenido', $context, $blocks);
        // line 140
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
        // line 160
        $this->displayBlock('js_footer', $context, $blocks);
        // line 178
        echo "</body>

</html>
";
        
        $__internal_b64e1e238956ebb23f26833e228f02ab161d157b2cfe9bd2355ab9d58a8ee6b3->leave($__internal_b64e1e238956ebb23f26833e228f02ab161d157b2cfe9bd2355ab9d58a8ee6b3_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_c67f0765f121219fee8b7523e9cb74f6dd38815eeb3def23288c8df6007e2bd5 = $this->env->getExtension("native_profiler");
        $__internal_c67f0765f121219fee8b7523e9cb74f6dd38815eeb3def23288c8df6007e2bd5->enter($__internal_c67f0765f121219fee8b7523e9cb74f6dd38815eeb3def23288c8df6007e2bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SPDE";
        
        $__internal_c67f0765f121219fee8b7523e9cb74f6dd38815eeb3def23288c8df6007e2bd5->leave($__internal_c67f0765f121219fee8b7523e9cb74f6dd38815eeb3def23288c8df6007e2bd5_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba739bd467a684130eb0814c0d4b40337a21756781f93ed9b637ad333eb96cb4 = $this->env->getExtension("native_profiler");
        $__internal_ba739bd467a684130eb0814c0d4b40337a21756781f93ed9b637ad333eb96cb4->enter($__internal_ba739bd467a684130eb0814c0d4b40337a21756781f93ed9b637ad333eb96cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ba739bd467a684130eb0814c0d4b40337a21756781f93ed9b637ad333eb96cb4->leave($__internal_ba739bd467a684130eb0814c0d4b40337a21756781f93ed9b637ad333eb96cb4_prof);

    }

    // line 25
    public function block_js($context, array $blocks = array())
    {
        $__internal_9e382ac1846e29df32647c99aa6b07624b21c6079d0be562cd1bfad5c0c64e78 = $this->env->getExtension("native_profiler");
        $__internal_9e382ac1846e29df32647c99aa6b07624b21c6079d0be562cd1bfad5c0c64e78->enter($__internal_9e382ac1846e29df32647c99aa6b07624b21c6079d0be562cd1bfad5c0c64e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_9e382ac1846e29df32647c99aa6b07624b21c6079d0be562cd1bfad5c0c64e78->leave($__internal_9e382ac1846e29df32647c99aa6b07624b21c6079d0be562cd1bfad5c0c64e78_prof);

    }

    // line 132
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_1c53a51b085f3ac8b1e4ff9ed6a49567818903b9a44bdc732fb2a076d8231ce2 = $this->env->getExtension("native_profiler");
        $__internal_1c53a51b085f3ac8b1e4ff9ed6a49567818903b9a44bdc732fb2a076d8231ce2->enter($__internal_1c53a51b085f3ac8b1e4ff9ed6a49567818903b9a44bdc732fb2a076d8231ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " Titulo ";
        
        $__internal_1c53a51b085f3ac8b1e4ff9ed6a49567818903b9a44bdc732fb2a076d8231ce2->leave($__internal_1c53a51b085f3ac8b1e4ff9ed6a49567818903b9a44bdc732fb2a076d8231ce2_prof);

    }

    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_29bd98f6e50aba5eda65278be913e13c79a2a34cf34a61d7211a53a50709498b = $this->env->getExtension("native_profiler");
        $__internal_29bd98f6e50aba5eda65278be913e13c79a2a34cf34a61d7211a53a50709498b->enter($__internal_29bd98f6e50aba5eda65278be913e13c79a2a34cf34a61d7211a53a50709498b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " Sub titulo ";
        
        $__internal_29bd98f6e50aba5eda65278be913e13c79a2a34cf34a61d7211a53a50709498b->leave($__internal_29bd98f6e50aba5eda65278be913e13c79a2a34cf34a61d7211a53a50709498b_prof);

    }

    // line 137
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_92b1e8bcd9ab43e13e05fb50380c4057e98119798221fa30799401d98e7de40b = $this->env->getExtension("native_profiler");
        $__internal_92b1e8bcd9ab43e13e05fb50380c4057e98119798221fa30799401d98e7de40b->enter($__internal_92b1e8bcd9ab43e13e05fb50380c4057e98119798221fa30799401d98e7de40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 138
        echo "                               
                            ";
        
        $__internal_92b1e8bcd9ab43e13e05fb50380c4057e98119798221fa30799401d98e7de40b->leave($__internal_92b1e8bcd9ab43e13e05fb50380c4057e98119798221fa30799401d98e7de40b_prof);

    }

    // line 160
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_546654cede93bb6b4e76b39c02aa88739145b697bf89b3edca29c963097b8eca = $this->env->getExtension("native_profiler");
        $__internal_546654cede93bb6b4e76b39c02aa88739145b697bf89b3edca29c963097b8eca->enter($__internal_546654cede93bb6b4e76b39c02aa88739145b697bf89b3edca29c963097b8eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        echo "                       
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- bootstrap progress js -->
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>    

    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/custom.js"), "html", null, true);
        echo "\"></script>  
    
    <!-- Datatables-->
        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/fnReloadAjax.js"), "html", null, true);
        echo "\"></script>
        
    <!-- Datepicker -->
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_546654cede93bb6b4e76b39c02aa88739145b697bf89b3edca29c963097b8eca->leave($__internal_546654cede93bb6b4e76b39c02aa88739145b697bf89b3edca29c963097b8eca_prof);

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
        return array (  411 => 176,  407 => 175,  401 => 172,  397 => 171,  393 => 170,  387 => 167,  382 => 165,  378 => 164,  372 => 161,  364 => 160,  356 => 138,  350 => 137,  327 => 132,  317 => 29,  313 => 28,  309 => 27,  306 => 26,  300 => 25,  291 => 23,  287 => 22,  280 => 18,  276 => 17,  272 => 16,  268 => 15,  264 => 14,  261 => 13,  255 => 12,  243 => 10,  233 => 178,  231 => 160,  209 => 140,  207 => 137,  197 => 132,  171 => 111,  152 => 94,  144 => 89,  139 => 87,  134 => 85,  129 => 83,  124 => 80,  122 => 79,  115 => 75,  110 => 73,  99 => 66,  92 => 63,  90 => 62,  72 => 49,  65 => 45,  50 => 32,  47 => 25,  45 => 12,  40 => 10,  29 => 1,);
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
/*                             <span>Hola,</span>*/
/*                             <h2>{{ app.user.nombres }}&nbsp;{{ app.user.apellidos }}</h2>*/
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
/*                                                 {% if is_granted('ROLE_ADMIN') %}*/
/*                                                 <li><a href="{{ path('r_entrenamiento') }}">Entrenamiento</a>*/
/*                                                 </li>*/
/*                                                 {% endif %}*/
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
/*                                 {% if is_granted('ROLE_ADMIN') %}*/
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
/*                                 {% endif %}*/
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
/*                               {{ app.user.nombres }}&nbsp;{{ app.user.apellidos }} <span class=" fa fa-angle-down"></span>*/
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
