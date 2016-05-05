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
        $__internal_f6565c282cfa90b04ff8e200de0428e5e30ad97cc92ae84f073bfba6007f4193 = $this->env->getExtension("native_profiler");
        $__internal_f6565c282cfa90b04ff8e200de0428e5e30ad97cc92ae84f073bfba6007f4193->enter($__internal_f6565c282cfa90b04ff8e200de0428e5e30ad97cc92ae84f073bfba6007f4193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/modelo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6565c282cfa90b04ff8e200de0428e5e30ad97cc92ae84f073bfba6007f4193->leave($__internal_f6565c282cfa90b04ff8e200de0428e5e30ad97cc92ae84f073bfba6007f4193_prof);

    }

    // line 2
    public function block_titulo_contenido($context, array $blocks = array())
    {
        $__internal_88923e842ef54e8e47cee78c03b9018eca5e7d17c021b691a75e3cc8c15f2082 = $this->env->getExtension("native_profiler");
        $__internal_88923e842ef54e8e47cee78c03b9018eca5e7d17c021b691a75e3cc8c15f2082->enter($__internal_88923e842ef54e8e47cee78c03b9018eca5e7d17c021b691a75e3cc8c15f2082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo_contenido"));

        // line 3
        echo "    <div class=\"row x_title\">
\t<div class=\"col-md-6\">
            <h3>Modelo <small>Datos entrenamiento</small></h3>
        </div>
\t<div class=\"col-md-6\">
\t</div>
    </div>
";
        
        $__internal_88923e842ef54e8e47cee78c03b9018eca5e7d17c021b691a75e3cc8c15f2082->leave($__internal_88923e842ef54e8e47cee78c03b9018eca5e7d17c021b691a75e3cc8c15f2082_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe8654c08dd10bb39fdb5b63d0e7a1e881af182c2d329ab32ea74fc45042c329 = $this->env->getExtension("native_profiler");
        $__internal_fe8654c08dd10bb39fdb5b63d0e7a1e881af182c2d329ab32ea74fc45042c329->enter($__internal_fe8654c08dd10bb39fdb5b63d0e7a1e881af182c2d329ab32ea74fc45042c329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fe8654c08dd10bb39fdb5b63d0e7a1e881af182c2d329ab32ea74fc45042c329->leave($__internal_fe8654c08dd10bb39fdb5b63d0e7a1e881af182c2d329ab32ea74fc45042c329_prof);

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
