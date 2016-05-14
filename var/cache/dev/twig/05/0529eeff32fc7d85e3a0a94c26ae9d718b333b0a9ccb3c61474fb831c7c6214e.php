<?php

/* admin/modelo/index.html.twig */
class __TwigTemplate_ff609482fcabfd959fc39c9cee88a9b27a036e86f588d31c2209b780d765abfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/modelo/index.html.twig", 1);
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
        $__internal_e6bffb99e79856361818e1377b2f9899eaaf525042a3c20326a9f51eaac70ec9 = $this->env->getExtension("native_profiler");
        $__internal_e6bffb99e79856361818e1377b2f9899eaaf525042a3c20326a9f51eaac70ec9->enter($__internal_e6bffb99e79856361818e1377b2f9899eaaf525042a3c20326a9f51eaac70ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/modelo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6bffb99e79856361818e1377b2f9899eaaf525042a3c20326a9f51eaac70ec9->leave($__internal_e6bffb99e79856361818e1377b2f9899eaaf525042a3c20326a9f51eaac70ec9_prof);

    }

    // line 2
    public function block_titulo_contenido($context, array $blocks = array())
    {
        $__internal_e9b6a15b9a2c5a1b7729a177faaf4c75e1805d56d58cb347edfe2254ada9977b = $this->env->getExtension("native_profiler");
        $__internal_e9b6a15b9a2c5a1b7729a177faaf4c75e1805d56d58cb347edfe2254ada9977b->enter($__internal_e9b6a15b9a2c5a1b7729a177faaf4c75e1805d56d58cb347edfe2254ada9977b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo_contenido"));

        // line 3
        echo "    <div class=\"row x_title\">
\t<div class=\"col-md-6\">
            <h3>Modelo <small>Datos entrenamiento</small></h3>
        </div>
\t<div class=\"col-md-6\">
\t</div>
    </div>
";
        
        $__internal_e9b6a15b9a2c5a1b7729a177faaf4c75e1805d56d58cb347edfe2254ada9977b->leave($__internal_e9b6a15b9a2c5a1b7729a177faaf4c75e1805d56d58cb347edfe2254ada9977b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6245e7f35252e9ffa967c01a1065ad10d295d165c1471d6bf76dc52af88cf1bc = $this->env->getExtension("native_profiler");
        $__internal_6245e7f35252e9ffa967c01a1065ad10d295d165c1471d6bf76dc52af88cf1bc->enter($__internal_6245e7f35252e9ffa967c01a1065ad10d295d165c1471d6bf76dc52af88cf1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6245e7f35252e9ffa967c01a1065ad10d295d165c1471d6bf76dc52af88cf1bc->leave($__internal_6245e7f35252e9ffa967c01a1065ad10d295d165c1471d6bf76dc52af88cf1bc_prof);

    }

    public function getTemplateName()
    {
        return "admin/modelo/index.html.twig";
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
