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
        $__internal_ebcc8f834e7cb14725c95e0665e21e3943401fd3ed8962ca869f70da0bd2f321 = $this->env->getExtension("native_profiler");
        $__internal_ebcc8f834e7cb14725c95e0665e21e3943401fd3ed8962ca869f70da0bd2f321->enter($__internal_ebcc8f834e7cb14725c95e0665e21e3943401fd3ed8962ca869f70da0bd2f321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

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
        // line 28
        echo "</head>

<body class=\"nav-md\">
    <div class=\"container body\">
        <div class=\"main_container\">
            <div class=\"col-md-3 left_col\">
                <div class=\"left_col scroll-view\">
                    <div class=\"navbar nav_title\" style=\"border: 0;\">
\t\t\t<a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Test</span></a>
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
                            <h2>Empty user</h2>
\t\t\t</div>
                    </div>
                    <!-- /menu prile quick info -->
                    <br/>
                    <!-- sidebar menu -->
                    <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
        \t\t<div class=\"menu_section\">
                \t    <h3>General</h3>
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
        echo $this->env->getExtension('routing')->getPath("parametros");
        echo "\">Parámetros</a>
                                                </li>
                                                <li><a href=\"empty.html\">Meny2.2s</a>
                                                </li>
                                        </ul>
                                </li>
                            </ul>
\t\t\t</div>
                    </div>
                    <!-- /sidebar menu -->\t\t
\t\t</div>
            </div>
            <!-- page content -->
            <div class=\"right_col\" role=\"main\">
        \t<div class=\"row\">
                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"dashboard_graph\">
                            <div class=\"row x_title\">
\t\t\t\t<div class=\"col-md-6\">
                                    <h3> ";
        // line 87
        $this->displayBlock('titulo', $context, $blocks);
        echo " <small>";
        $this->displayBlock('sub_titulo', $context, $blocks);
        echo "</small></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\"></div>
                            </div>
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            ";
        // line 92
        $this->displayBlock('contenido', $context, $blocks);
        // line 95
        echo "                            </div>
                            <div class=\"clearfix\"></div>
\t\t\t</div>
                    </div>
\t\t</div>
\t\t<br />
\t\t<!-- footer content -->
\t\t<footer>
                    <div class=\"copyright-info\">
                        <p class=\"pull-right\">Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>\t\t
\t\t\t</p>
                    </div>
                    <div class=\"clearfix\"></div>
\t\t</footer>
\t\t<!-- /footer content -->
\t\t</div>
\t\t<!-- /page content -->
        </div>
    </div>
    
   
   ";
        // line 116
        $this->displayBlock('js_footer', $context, $blocks);
        // line 131
        echo "</body>

</html>
";
        
        $__internal_ebcc8f834e7cb14725c95e0665e21e3943401fd3ed8962ca869f70da0bd2f321->leave($__internal_ebcc8f834e7cb14725c95e0665e21e3943401fd3ed8962ca869f70da0bd2f321_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_234f43e5a332ed72ab656ce932462893a44fa77c4c78fad138764c1fd9727f05 = $this->env->getExtension("native_profiler");
        $__internal_234f43e5a332ed72ab656ce932462893a44fa77c4c78fad138764c1fd9727f05->enter($__internal_234f43e5a332ed72ab656ce932462893a44fa77c4c78fad138764c1fd9727f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SPDE";
        
        $__internal_234f43e5a332ed72ab656ce932462893a44fa77c4c78fad138764c1fd9727f05->leave($__internal_234f43e5a332ed72ab656ce932462893a44fa77c4c78fad138764c1fd9727f05_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30b2c8e7a92a41e7c583674767d95b07be93b8b00921ae50aaa148ce1a0e18ca = $this->env->getExtension("native_profiler");
        $__internal_30b2c8e7a92a41e7c583674767d95b07be93b8b00921ae50aaa148ce1a0e18ca->enter($__internal_30b2c8e7a92a41e7c583674767d95b07be93b8b00921ae50aaa148ce1a0e18ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_30b2c8e7a92a41e7c583674767d95b07be93b8b00921ae50aaa148ce1a0e18ca->leave($__internal_30b2c8e7a92a41e7c583674767d95b07be93b8b00921ae50aaa148ce1a0e18ca_prof);

    }

    // line 23
    public function block_js($context, array $blocks = array())
    {
        $__internal_45fbffaa41f5f95951ef54f2ec9a2949499680fa0de73266da536b2e1ad73dac = $this->env->getExtension("native_profiler");
        $__internal_45fbffaa41f5f95951ef54f2ec9a2949499680fa0de73266da536b2e1ad73dac->enter($__internal_45fbffaa41f5f95951ef54f2ec9a2949499680fa0de73266da536b2e1ad73dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_45fbffaa41f5f95951ef54f2ec9a2949499680fa0de73266da536b2e1ad73dac->leave($__internal_45fbffaa41f5f95951ef54f2ec9a2949499680fa0de73266da536b2e1ad73dac_prof);

    }

    // line 87
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_01b35d495abfcb4cb03e85173cb6e41c687264d2a07216df98c2d42ce16d93ff = $this->env->getExtension("native_profiler");
        $__internal_01b35d495abfcb4cb03e85173cb6e41c687264d2a07216df98c2d42ce16d93ff->enter($__internal_01b35d495abfcb4cb03e85173cb6e41c687264d2a07216df98c2d42ce16d93ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " Titulo ";
        
        $__internal_01b35d495abfcb4cb03e85173cb6e41c687264d2a07216df98c2d42ce16d93ff->leave($__internal_01b35d495abfcb4cb03e85173cb6e41c687264d2a07216df98c2d42ce16d93ff_prof);

    }

    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_da9ec8e14815204e66cbb0db38ee835248361a4db605d18c03965a78937316ae = $this->env->getExtension("native_profiler");
        $__internal_da9ec8e14815204e66cbb0db38ee835248361a4db605d18c03965a78937316ae->enter($__internal_da9ec8e14815204e66cbb0db38ee835248361a4db605d18c03965a78937316ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " Sub titulo ";
        
        $__internal_da9ec8e14815204e66cbb0db38ee835248361a4db605d18c03965a78937316ae->leave($__internal_da9ec8e14815204e66cbb0db38ee835248361a4db605d18c03965a78937316ae_prof);

    }

    // line 92
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_c26f45a187f5da036281a0129e96af47edd9b952ecd7640653a4ee694ecdd93d = $this->env->getExtension("native_profiler");
        $__internal_c26f45a187f5da036281a0129e96af47edd9b952ecd7640653a4ee694ecdd93d->enter($__internal_c26f45a187f5da036281a0129e96af47edd9b952ecd7640653a4ee694ecdd93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 93
        echo "                               
                            ";
        
        $__internal_c26f45a187f5da036281a0129e96af47edd9b952ecd7640653a4ee694ecdd93d->leave($__internal_c26f45a187f5da036281a0129e96af47edd9b952ecd7640653a4ee694ecdd93d_prof);

    }

    // line 116
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_e9a7fe93606e5e5de9628c8fa261768b7466071b75fe5eb8aa8ef79625878cc9 = $this->env->getExtension("native_profiler");
        $__internal_e9a7fe93606e5e5de9628c8fa261768b7466071b75fe5eb8aa8ef79625878cc9->enter($__internal_e9a7fe93606e5e5de9628c8fa261768b7466071b75fe5eb8aa8ef79625878cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        echo "                       
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- bootstrap progress js -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>    

    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/custom.js"), "html", null, true);
        echo "\"></script>  
    
    <!-- Datatables-->
        <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    
  
   ";
        
        $__internal_e9a7fe93606e5e5de9628c8fa261768b7466071b75fe5eb8aa8ef79625878cc9->leave($__internal_e9a7fe93606e5e5de9628c8fa261768b7466071b75fe5eb8aa8ef79625878cc9_prof);

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
        return array (  314 => 127,  310 => 126,  304 => 123,  299 => 121,  295 => 120,  289 => 117,  281 => 116,  273 => 93,  267 => 92,  244 => 87,  235 => 26,  231 => 25,  228 => 24,  222 => 23,  213 => 21,  209 => 20,  203 => 17,  199 => 16,  195 => 15,  191 => 14,  188 => 13,  182 => 12,  170 => 10,  160 => 131,  158 => 116,  135 => 95,  133 => 92,  123 => 87,  101 => 68,  91 => 61,  86 => 59,  66 => 42,  50 => 28,  47 => 23,  45 => 12,  40 => 10,  29 => 1,);
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
/*     {% endblock %}*/
/* </head>*/
/* */
/* <body class="nav-md">*/
/*     <div class="container body">*/
/*         <div class="main_container">*/
/*             <div class="col-md-3 left_col">*/
/*                 <div class="left_col scroll-view">*/
/*                     <div class="navbar nav_title" style="border: 0;">*/
/* 			<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Test</span></a>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                     <!-- menu prile quick info -->*/
/*                     <div class="profile">*/
/*                         <div class="profile_pic">*/
/*                             <img src="{{ asset('bundles/Gentellela/images/img.jpg') }}" alt="..." class="img-circle profile_img">*/
/* 			</div>*/
/* 			<div class="profile_info">*/
/*                             <span>Welcome,</span>*/
/*                             <h2>Empty user</h2>*/
/* 			</div>*/
/*                     </div>*/
/*                     <!-- /menu prile quick info -->*/
/*                     <br/>*/
/*                     <!-- sidebar menu -->*/
/*                     <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/*         		<div class="menu_section">*/
/*                 	    <h3>General</h3>*/
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
/*                                                 <li><a href="{{ path('parametros') }}">Parámetros</a>*/
/*                                                 </li>*/
/*                                                 <li><a href="empty.html">Meny2.2s</a>*/
/*                                                 </li>*/
/*                                         </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/* 			</div>*/
/*                     </div>*/
/*                     <!-- /sidebar menu -->		*/
/* 		</div>*/
/*             </div>*/
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
/* 		<br />*/
/* 		<!-- footer content -->*/
/* 		<footer>*/
/*                     <div class="copyright-info">*/
/*                         <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>		*/
/* 			</p>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/* 		</footer>*/
/* 		<!-- /footer content -->*/
/* 		</div>*/
/* 		<!-- /page content -->*/
/*         </div>*/
/*     </div>*/
/*     */
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
/*     */
/*   */
/*    {% endblock %}*/
/* </body>*/
/* */
/* </html>*/
/* */
