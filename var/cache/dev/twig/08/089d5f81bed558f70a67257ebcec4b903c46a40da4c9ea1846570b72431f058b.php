<?php

/* :admin/estudiantes:estudiantesForm.html.twig */
class __TwigTemplate_cb5358fe0f6a43364441dc656e87cf7598fcf769c3c9b2ba14316c87f1dbefbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":admin/estudiantes:estudiantesForm.html.twig", 1);
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

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a6f42cd213d1f711caf641804dccf9239a7bc3211cbd0e8bcf410eeede50d17 = $this->env->getExtension("native_profiler");
        $__internal_0a6f42cd213d1f711caf641804dccf9239a7bc3211cbd0e8bcf410eeede50d17->enter($__internal_0a6f42cd213d1f711caf641804dccf9239a7bc3211cbd0e8bcf410eeede50d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/estudiantes:estudiantesForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a6f42cd213d1f711caf641804dccf9239a7bc3211cbd0e8bcf410eeede50d17->leave($__internal_0a6f42cd213d1f711caf641804dccf9239a7bc3211cbd0e8bcf410eeede50d17_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_888fca4eea613aa206a57412e77400d5809b28082582ef3b7168c087498e49f9 = $this->env->getExtension("native_profiler");
        $__internal_888fca4eea613aa206a57412e77400d5809b28082582ef3b7168c087498e49f9->enter($__internal_888fca4eea613aa206a57412e77400d5809b28082582ef3b7168c087498e49f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_888fca4eea613aa206a57412e77400d5809b28082582ef3b7168c087498e49f9->leave($__internal_888fca4eea613aa206a57412e77400d5809b28082582ef3b7168c087498e49f9_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab166b5e0bfc3428f85065ecb8eef69172c261cc6498c59816200d0ede2c931c = $this->env->getExtension("native_profiler");
        $__internal_ab166b5e0bfc3428f85065ecb8eef69172c261cc6498c59816200d0ede2c931c->enter($__internal_ab166b5e0bfc3428f85065ecb8eef69172c261cc6498c59816200d0ede2c931c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/select/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_ab166b5e0bfc3428f85065ecb8eef69172c261cc6498c59816200d0ede2c931c->leave($__internal_ab166b5e0bfc3428f85065ecb8eef69172c261cc6498c59816200d0ede2c931c_prof);

    }

    // line 12
    public function block_js($context, array $blocks = array())
    {
        $__internal_c6ed138682d930f67f2c64e7875938b55243b3abd0f42092b40ddc3e4fa42c14 = $this->env->getExtension("native_profiler");
        $__internal_c6ed138682d930f67f2c64e7875938b55243b3abd0f42092b40ddc3e4fa42c14->enter($__internal_c6ed138682d930f67f2c64e7875938b55243b3abd0f42092b40ddc3e4fa42c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 13
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_c6ed138682d930f67f2c64e7875938b55243b3abd0f42092b40ddc3e4fa42c14->leave($__internal_c6ed138682d930f67f2c64e7875938b55243b3abd0f42092b40ddc3e4fa42c14_prof);

    }

    // line 16
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_d4bb000cfe605ada07da918feeb29457183168481d8d25ba1235988926fef0f0 = $this->env->getExtension("native_profiler");
        $__internal_d4bb000cfe605ada07da918feeb29457183168481d8d25ba1235988926fef0f0->enter($__internal_d4bb000cfe605ada07da918feeb29457183168481d8d25ba1235988926fef0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
   Estudiantes
";
        
        $__internal_d4bb000cfe605ada07da918feeb29457183168481d8d25ba1235988926fef0f0->leave($__internal_d4bb000cfe605ada07da918feeb29457183168481d8d25ba1235988926fef0f0_prof);

    }

    // line 20
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_c414eb41c9dcf59a26a67f0f4eb26bdb55abb615911ea07e406faf422c2800a6 = $this->env->getExtension("native_profiler");
        $__internal_c414eb41c9dcf59a26a67f0f4eb26bdb55abb615911ea07e406faf422c2800a6->enter($__internal_c414eb41c9dcf59a26a67f0f4eb26bdb55abb615911ea07e406faf422c2800a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_c414eb41c9dcf59a26a67f0f4eb26bdb55abb615911ea07e406faf422c2800a6->leave($__internal_c414eb41c9dcf59a26a67f0f4eb26bdb55abb615911ea07e406faf422c2800a6_prof);

    }

    // line 24
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_9579489f9b11a404b522878ec340b0fc3b631a572856a7bd2b17d7800c1f378d = $this->env->getExtension("native_profiler");
        $__internal_9579489f9b11a404b522878ec340b0fc3b631a572856a7bd2b17d7800c1f378d->enter($__internal_9579489f9b11a404b522878ec340b0fc3b631a572856a7bd2b17d7800c1f378d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
    <div class=\"x_content\">
        <form class=\"form-horizontal form-label-left\" novalidate method=\"POST\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("estudiantesAdd");
        echo "\" >            
            <span class=\"section\">Agregar</span>
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Tipo de Identificación</label>
                    <div class=\"col-md-6 col-sm-9 col-xs-12\">
                        <select class=\"form-control\" id=\"tipoIdentificacion\" name=\"tipoIdentificacion\">
                          <option>Seleccione</option>
                          <option>Tarjeta de identidad</option>
                          <option>Cédula de ciudadanía</option>
                          <option>Pasaporte</option>                          
                        </select>
                    </div>
            </div>
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"identificacion\">Identificación<span class=\"required\">*</span></label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input id=\"identificacion\" class=\"form-control col-md-7 col-xs-12\" data-validate-length-range=\"6\" data-validate-words=\"2\" name=\"identificacion\" placeholder=\"Número de Identificación\" required=\"required\" type=\"text\">
                    </div>
            </div>
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"nombres\">Nombres<span class=\"required\">*</span></label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"nombres\" name=\"nombres\" data-validate-linked=\"nombres\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
            </div>
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"apellidos\">Apellidos<span class=\"required\">*</span></label>
                      <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"number\" name=\"number\" required=\"required\" data-validate-minmax=\"10,100\" class=\"form-control col-md-7 col-xs-12\">
                      </div>
            </div>
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"codigo\">Código<span class=\"required\">*</span></label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"codigo\" name=\"codigo\" required=\"required\" placeholder=\"Código\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
            </div>
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"telefono\">Teléfono<span class=\"required\">*</span></label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input id=\"telefono\" type=\"text\" name=\"telefono\" data-validate-length-range=\"5,20\" class=\"optional form-control col-md-7 col-xs-12\">
                    </div>
            </div>            
            <div class=\"item form-group\">
                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"direccion\">Dirección<span class=\"required\">*</span></label>
                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                        <input type=\"text\" id=\"direccion\" name=\"direccion\" required=\"required\" data-validate-length-range=\"8,20\" class=\"form-control col-md-7 col-xs-12\">
                    </div>
            </div>
            <div class=\"ln_solid\"></div>
            <div class=\"form-group\">
                <div class=\"col-md-6 col-md-offset-5\">
                    <button type=\"submit\" class=\"btn btn-primary\">Cancel</button>
                    <button id=\"send\" type=\"submit\" class=\"btn btn-success\">Submit</button>
                </div>
            </div>
        </form>
    </div>
        
";
        
        $__internal_9579489f9b11a404b522878ec340b0fc3b631a572856a7bd2b17d7800c1f378d->leave($__internal_9579489f9b11a404b522878ec340b0fc3b631a572856a7bd2b17d7800c1f378d_prof);

    }

    // line 87
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_da2ea53c5e3fb7e1f588671c2962503fa12279711a1741ce23ef9261868062d0 = $this->env->getExtension("native_profiler");
        $__internal_da2ea53c5e3fb7e1f588671c2962503fa12279711a1741ce23ef9261868062d0->enter($__internal_da2ea53c5e3fb7e1f588671c2962503fa12279711a1741ce23ef9261868062d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 88
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
              \$(document).ready(function() {
                \$('#datatable').dataTable();            
              });
              TableManageButtons.init();
        </script>
";
        
        $__internal_da2ea53c5e3fb7e1f588671c2962503fa12279711a1741ce23ef9261868062d0->leave($__internal_da2ea53c5e3fb7e1f588671c2962503fa12279711a1741ce23ef9261868062d0_prof);

    }

    public function getTemplateName()
    {
        return ":admin/estudiantes:estudiantesForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 88,  196 => 87,  129 => 26,  120 => 24,  106 => 20,  92 => 16,  82 => 13,  76 => 12,  67 => 9,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('bundles/Gentellela/css/select/select2.min.css')}}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block titulo %} */
/*    Estudiantes*/
/* {% endblock %}*/
/* */
/* {% block sub_titulo %} */
/*     */
/* {% endblock %}*/
/* */
/* {% block contenido %}   */
/*     <div class="x_content">*/
/*         <form class="form-horizontal form-label-left" novalidate method="POST" action="{{ path('estudiantesAdd') }}" >            */
/*             <span class="section">Agregar</span>*/
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Identificación</label>*/
/*                     <div class="col-md-6 col-sm-9 col-xs-12">*/
/*                         <select class="form-control" id="tipoIdentificacion" name="tipoIdentificacion">*/
/*                           <option>Seleccione</option>*/
/*                           <option>Tarjeta de identidad</option>*/
/*                           <option>Cédula de ciudadanía</option>*/
/*                           <option>Pasaporte</option>                          */
/*                         </select>*/
/*                     </div>*/
/*             </div>*/
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="identificacion">Identificación<span class="required">*</span></label>*/
/*                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                         <input id="identificacion" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="identificacion" placeholder="Número de Identificación" required="required" type="text">*/
/*                     </div>*/
/*             </div>*/
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombres">Nombres<span class="required">*</span></label>*/
/*                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                         <input type="text" id="nombres" name="nombres" data-validate-linked="nombres" required="required" class="form-control col-md-7 col-xs-12">*/
/*                     </div>*/
/*             </div>*/
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">Apellidos<span class="required">*</span></label>*/
/*                       <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                         <input type="text" id="number" name="number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">*/
/*                       </div>*/
/*             </div>*/
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">Código<span class="required">*</span></label>*/
/*                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                         <input type="text" id="codigo" name="codigo" required="required" placeholder="Código" class="form-control col-md-7 col-xs-12">*/
/*                     </div>*/
/*             </div>*/
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Teléfono<span class="required">*</span></label>*/
/*                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                         <input id="telefono" type="text" name="telefono" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">*/
/*                     </div>*/
/*             </div>            */
/*             <div class="item form-group">*/
/*                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">Dirección<span class="required">*</span></label>*/
/*                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                         <input type="text" id="direccion" name="direccion" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">*/
/*                     </div>*/
/*             </div>*/
/*             <div class="ln_solid"></div>*/
/*             <div class="form-group">*/
/*                 <div class="col-md-6 col-md-offset-5">*/
/*                     <button type="submit" class="btn btn-primary">Cancel</button>*/
/*                     <button id="send" type="submit" class="btn btn-success">Submit</button>*/
/*                 </div>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/*         */
/* {% endblock %}*/
/* */
/* {% block js_footer %}*/
/*     {{ parent() }}*/
/*         <script type="text/javascript">*/
/*               $(document).ready(function() {*/
/*                 $('#datatable').dataTable();            */
/*               });*/
/*               TableManageButtons.init();*/
/*         </script>*/
/* {% endblock %}*/
/*     */
