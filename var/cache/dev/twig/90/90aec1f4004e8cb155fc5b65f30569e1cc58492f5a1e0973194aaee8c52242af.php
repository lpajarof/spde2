<?php

/* :admin/modelo:index.html.twig */
class __TwigTemplate_2cfc628ced8fc2239ddd4a07d5e756547dbca9b363b9d99ebb5fcb2086cd9f8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":admin/modelo:index.html.twig", 1);
        $this->blocks = array(
            'titulo_contenido' => array($this, 'block_titulo_contenido'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ff568ce3537f7fa34079ccc6cd63fe56b50537e60f2476ca03bc0a6a6882bf6 = $this->env->getExtension("native_profiler");
        $__internal_4ff568ce3537f7fa34079ccc6cd63fe56b50537e60f2476ca03bc0a6a6882bf6->enter($__internal_4ff568ce3537f7fa34079ccc6cd63fe56b50537e60f2476ca03bc0a6a6882bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/modelo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ff568ce3537f7fa34079ccc6cd63fe56b50537e60f2476ca03bc0a6a6882bf6->leave($__internal_4ff568ce3537f7fa34079ccc6cd63fe56b50537e60f2476ca03bc0a6a6882bf6_prof);

    }

    // line 2
    public function block_titulo_contenido($context, array $blocks = array())
    {
        $__internal_82ee2c5428449d3476d0104faf50a1f48656a6eb680bf932186a8e4b58e525b0 = $this->env->getExtension("native_profiler");
        $__internal_82ee2c5428449d3476d0104faf50a1f48656a6eb680bf932186a8e4b58e525b0->enter($__internal_82ee2c5428449d3476d0104faf50a1f48656a6eb680bf932186a8e4b58e525b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo_contenido"));

        // line 3
        echo "    <div class=\"row x_title\">
\t<div class=\"col-md-6\">
            <h3>Modelo <small>Datos entrenamiento</small></h3>
        </div>
\t<div class=\"col-md-6\">
\t</div>
    </div>
";
        
        $__internal_82ee2c5428449d3476d0104faf50a1f48656a6eb680bf932186a8e4b58e525b0->leave($__internal_82ee2c5428449d3476d0104faf50a1f48656a6eb680bf932186a8e4b58e525b0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3d98361913ba8371fbf1d4df934ad7f3560ae36e282cad9cca17f43f3d20a09 = $this->env->getExtension("native_profiler");
        $__internal_a3d98361913ba8371fbf1d4df934ad7f3560ae36e282cad9cca17f43f3d20a09->enter($__internal_a3d98361913ba8371fbf1d4df934ad7f3560ae36e282cad9cca17f43f3d20a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
     <div class=\"col-md-6 col-sm-6 col-xs-12\">
              <div class=\"x_panel_lp\">
                
                <div class=\"x_content\">


                  <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                    <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                      <li role=\"presentation\" class=\"active\"><a href=\"#tab_content1\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Datos entrenamiento</a>
                      </li>                      
                    </ul>
                    <div id=\"myTabContent\" class=\"tab-content\">
                      <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content1\" aria-labelledby=\"home-tab\">
                        <p></p>
                      </div>                      
                    </div>
                  </div>

                </div>
              </div>
            </div>

";
        
        $__internal_a3d98361913ba8371fbf1d4df934ad7f3560ae36e282cad9cca17f43f3d20a09->leave($__internal_a3d98361913ba8371fbf1d4df934ad7f3560ae36e282cad9cca17f43f3d20a09_prof);

    }

    public function getTemplateName()
    {
        return ":admin/modelo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  55 => 11,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'admin.html.twig' %}*/
/* {% block titulo_contenido %}*/
/*     <div class="row x_title">*/
/* 	<div class="col-md-6">*/
/*             <h3>Modelo <small>Datos entrenamiento</small></h3>*/
/*         </div>*/
/* 	<div class="col-md-6">*/
/* 	</div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*      <div class="col-md-6 col-sm-6 col-xs-12">*/
/*               <div class="x_panel_lp">*/
/*                 */
/*                 <div class="x_content">*/
/* */
/* */
/*                   <div class="" role="tabpanel" data-example-id="togglable-tabs">*/
/*                     <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">*/
/*                       <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Datos entrenamiento</a>*/
/*                       </li>                      */
/*                     </ul>*/
/*                     <div id="myTabContent" class="tab-content">*/
/*                       <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">*/
/*                         <p></p>*/
/*                       </div>                      */
/*                     </div>*/
/*                   </div>*/
/* */
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
