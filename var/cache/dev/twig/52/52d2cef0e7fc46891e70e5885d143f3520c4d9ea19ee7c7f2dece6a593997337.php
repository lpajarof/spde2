<?php

/* /admin/clasificacion/vw_clasificacion.html.twig */
class __TwigTemplate_53136225a5d6ac400dac3f32bf6fe01d9d1746b3bb6892e8f3114f25adc9c15b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "/admin/clasificacion/vw_clasificacion.html.twig", 1);
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
        $__internal_f0a17542e7a1dbd2ca20698ba92a8a332f88a2148d556f225c9afb0661395b8e = $this->env->getExtension("native_profiler");
        $__internal_f0a17542e7a1dbd2ca20698ba92a8a332f88a2148d556f225c9afb0661395b8e->enter($__internal_f0a17542e7a1dbd2ca20698ba92a8a332f88a2148d556f225c9afb0661395b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/admin/clasificacion/vw_clasificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0a17542e7a1dbd2ca20698ba92a8a332f88a2148d556f225c9afb0661395b8e->leave($__internal_f0a17542e7a1dbd2ca20698ba92a8a332f88a2148d556f225c9afb0661395b8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebce7a4db83356c5154740e0738fd96c619b6a9f29b1dae857ec1884b1ce3463 = $this->env->getExtension("native_profiler");
        $__internal_ebce7a4db83356c5154740e0738fd96c619b6a9f29b1dae857ec1884b1ce3463->enter($__internal_ebce7a4db83356c5154740e0738fd96c619b6a9f29b1dae857ec1884b1ce3463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ebce7a4db83356c5154740e0738fd96c619b6a9f29b1dae857ec1884b1ce3463->leave($__internal_ebce7a4db83356c5154740e0738fd96c619b6a9f29b1dae857ec1884b1ce3463_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dde0fbb33caed79530d5499af25c109d3f5a1b001e973664bdc899a57742e594 = $this->env->getExtension("native_profiler");
        $__internal_dde0fbb33caed79530d5499af25c109d3f5a1b001e973664bdc899a57742e594->enter($__internal_dde0fbb33caed79530d5499af25c109d3f5a1b001e973664bdc899a57742e594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_dde0fbb33caed79530d5499af25c109d3f5a1b001e973664bdc899a57742e594->leave($__internal_dde0fbb33caed79530d5499af25c109d3f5a1b001e973664bdc899a57742e594_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_9acc27d3b7e2905cc2c64805493f3f49164a5aa49b0600a35bbac983b6f4fd15 = $this->env->getExtension("native_profiler");
        $__internal_9acc27d3b7e2905cc2c64805493f3f49164a5aa49b0600a35bbac983b6f4fd15->enter($__internal_9acc27d3b7e2905cc2c64805493f3f49164a5aa49b0600a35bbac983b6f4fd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_9acc27d3b7e2905cc2c64805493f3f49164a5aa49b0600a35bbac983b6f4fd15->leave($__internal_9acc27d3b7e2905cc2c64805493f3f49164a5aa49b0600a35bbac983b6f4fd15_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_068a69f6851a83eca232adf26175c3c19cc9cc8d74d64cb3b343def493e2dc62 = $this->env->getExtension("native_profiler");
        $__internal_068a69f6851a83eca232adf26175c3c19cc9cc8d74d64cb3b343def493e2dc62->enter($__internal_068a69f6851a83eca232adf26175c3c19cc9cc8d74d64cb3b343def493e2dc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Modelo
";
        
        $__internal_068a69f6851a83eca232adf26175c3c19cc9cc8d74d64cb3b343def493e2dc62->leave($__internal_068a69f6851a83eca232adf26175c3c19cc9cc8d74d64cb3b343def493e2dc62_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_c6ad597b2a935102beb42d51550b24dd6d6b5a62ec948621d5e669dc8b224360 = $this->env->getExtension("native_profiler");
        $__internal_c6ad597b2a935102beb42d51550b24dd6d6b5a62ec948621d5e669dc8b224360->enter($__internal_c6ad597b2a935102beb42d51550b24dd6d6b5a62ec948621d5e669dc8b224360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_c6ad597b2a935102beb42d51550b24dd6d6b5a62ec948621d5e669dc8b224360->leave($__internal_c6ad597b2a935102beb42d51550b24dd6d6b5a62ec948621d5e669dc8b224360_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_bc6d823477c5266199a7c1bf6c038520e016ba7b2890f51e0c74e6ad10ffa7a3 = $this->env->getExtension("native_profiler");
        $__internal_bc6d823477c5266199a7c1bf6c038520e016ba7b2890f51e0c74e6ad10ffa7a3->enter($__internal_bc6d823477c5266199a7c1bf6c038520e016ba7b2890f51e0c74e6ad10ffa7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#clasificacion\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Clasificaci&oacute;n</a>
                    </li>                  
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    ";
        // line 34
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"clasificacion\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#vm_agregar\">Agregar</button></p>                         
                        ";
        // line 37
        echo "                        <div class=\"modal fade\" id=\"vm_agregar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Clasificaci&oacute;n</h4>
                                </div>
                                ";
        // line 45
        echo "                                ";
        $this->loadTemplate("admin/clasificacion/fm_agregar_clasificacion.html.twig", "/admin/clasificacion/vw_clasificacion.html.twig", 45)->display($context);
        // line 46
        echo "                                ";
        echo "        
                            </div>
                            </div>
                        </div>
                        ";
        // line 51
        echo "                        ";
        // line 52
        echo "                        <div class=\"modal fade\" id=\"vm_actualizar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Clasificaci&oacute;n</h4>
                                </div>
                                ";
        // line 60
        echo "                                ";
        $this->loadTemplate("admin/clasificacion/fm_actualizar_clasificacion.html.twig", "/admin/clasificacion/vw_clasificacion.html.twig", 60)->display($context);
        echo " 
                                ";
        // line 61
        echo "        
                            </div>
                            </div>
                        </div>
                        ";
        // line 66
        echo "                        ";
        // line 67
        echo "                        <div class=\"modal fade\" id=\"vm_eliminar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Eliminar Clasificaci&oacute;n</h4>
                                </div>
                                ";
        // line 75
        echo "                                ";
        $this->loadTemplate("admin/clasificacion/fm_eliminar_clasificacion.html.twig", "/admin/clasificacion/vw_clasificacion.html.twig", 75)->display($context);
        echo " 
                                ";
        // line 76
        echo "        
                            </div>
                            </div>
                        </div>
                        ";
        // line 81
        echo "                        ";
        // line 82
        echo "                        <div class=\"x_panel\">                            
                            <div class=\"x_content\">
                                <table id=\"th_clasificacion\" class=\"table table-striped table-bordered\" width=\"100%\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombres</th>
                                            <th>Desertor</th>
                                            <th><div data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 0, array(), "array"), "descripcion", array()), "html", null, true);
        echo "\">C1</div></th>                                             
                                            <th><div data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 1, array(), "array"), "descripcion", array()), "html", null, true);
        echo "\">C2</div></th> 
                                            <th><div data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 2, array(), "array"), "descripcion", array()), "html", null, true);
        echo "\">C3</div></th> 
                                            <th><div data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 3, array(), "array"), "descripcion", array()), "html", null, true);
        echo "\">C4</div></th> 
                                            <th>Acci&oacute;n</th> 
                                        </tr>
                                    </thead>                                        
                                </table>
                            </div>
                        </div>
                        ";
        // line 101
        echo "                    </div>
                    ";
        // line 103
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_bc6d823477c5266199a7c1bf6c038520e016ba7b2890f51e0c74e6ad10ffa7a3->leave($__internal_bc6d823477c5266199a7c1bf6c038520e016ba7b2890f51e0c74e6ad10ffa7a3_prof);

    }

    // line 110
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_994c00b0918345b0db676c3bc040b8ebb891f10be3bafd0b3bccc38eebbcff31 = $this->env->getExtension("native_profiler");
        $__internal_994c00b0918345b0db676c3bc040b8ebb891f10be3bafd0b3bccc38eebbcff31->enter($__internal_994c00b0918345b0db676c3bc040b8ebb891f10be3bafd0b3bccc38eebbcff31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 111
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
        var oTable  
        \$(document).ready(function() {
          oTable =  \$('#th_clasificacion').dataTable({                
                \"ajax\": \"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("thdb_clasificacion");
        echo "\",
                \"columns\": [
                            { className: \"dt-center\",\"width\": \"5%\" },
                            { className: \"dt-left\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\",\"width\": \"30%\" }
                          ]
            });          
            /*
             * Cuando se activa ventana modal para agregar, se ejecuta
             * este evento el cual coloca en blanco todos los campos del
             * formulario
             */
            \$('#vm_agregar').on('show.bs.modal', function () {
                \$(\"#respuesta_agregar\").html(\"\");
\t\tvar modal = \$(this)                
                modal.find('.modal-body #codigo').val('')                
                modal.find('.modal-body #anio').val('')                
                modal.find('.modal-body #periodo').val('')                
                modal.find('.modal-body #desertor').val('')                

            });           

            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de creación
             */
            \$( \"#frm_agregar_clasificacion\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("clasificacionAdd");
        echo "\",
\t\t\tdata:   parametros,
                                beforeSend: function(){
                                    \$(\"#respuesta_agregar\").html(\"Mensaje: Cargando...\");
\t\t\t\t},
\t\t\t\tsuccess: function(datos){
                                    \$(\"#respuesta_agregar\").html(datos);                                       
                                    oTable.fnReloadAjax();
\t\t\t\t},
                                error: function(datos){
                                    \$(\"#respuesta_agregar\").html(datos);
                                }
\t\t\t});
\t\t  event.preventDefault();
            });
            /*
             * Cuando se activa ventana modal para modificar, se ejecuta
             * este evento el cual llena los campos del formulario con los
             * datos a modificar
             */
            \$('#vm_actualizar').on('show.bs.modal', function (event) {
                  \$(\"#respuesta_actualizar\").html(\"\");
\t\t  var button = \$(event.relatedTarget); 
                  var idclasificacion = button.data('idclasificacion'); 
                  var idestudiante = button.data('idestudiante');
                  var c1 = button.data('c1');
                  var c2 = button.data('c2');
                  var c3 = button.data('c3');
                  var c4 = button.data('c4');
                  var modal = \$(this);
                  modal.find('.modal-body #idclasificacion').val(idclasificacion);
                  modal.find('.modal-body #idestudiante').val(idestudiante);
                  modal.find('.modal-body #c1').val(c1);
                  modal.find('.modal-body #c2').val(c2);
                  modal.find('.modal-body #c3').val(c3);
                  modal.find('.modal-body #c4').val(c4);
            });
            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de actualización
             */
            \$( \"#frm_actualiza_clasificacion\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 196
        echo $this->env->getExtension('routing')->getPath("clasificacionMod");
        echo "\",
\t\t\tdata:   parametros,
                                beforeSend: function(){
                                    \$(\"#respuesta_actualizar\").html(\"Mensaje: Cargando...\");
\t\t\t\t},
\t\t\t\tsuccess: function(datos){
                                    \$(\"#respuesta_actualizar\").html(datos);                  
                                      oTable.fnReloadAjax();
\t\t\t\t},
                                error: function(datos){
                                    \$(\"#respuesta_actualizar\").html(datos);
                                }
\t\t\t});
\t\t  event.preventDefault();
            });
            
            /*
             * Cuando se activa ventana modal para eliminar, se ejecuta
             * este evento el cual llena campo oculto con id de la clasificacion
             * a eliminar
             */
            \$('#vm_eliminar').on('show.bs.modal', function (event) {
                  \$(\"#respuesta_eliminar\").html(\"\");
\t\t  var button = \$(event.relatedTarget) 
                  var idclasificacion = button.data('idclasificacion') 
                  var modal = \$(this)
                  modal.find('.modal-body #idclasificacion').val(idclasificacion)
            });
            
            
            /**
            * Envía datos al controlador para eliminr datos
            */
            \$( \"#frm_elimina_clasificacion\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 233
        echo $this->env->getExtension('routing')->getPath("clasificacionDel");
        echo "\",
\t\t\tdata:   parametros,
                                beforeSend: function(){
                                    \$(\"#respuesta_eliminar\").html(\"Mensaje: Cargando...\");
\t\t\t\t},
\t\t\t\tsuccess: function(datos){
                                    \$(\"#respuesta_eliminar\").html(datos);                  
                                      oTable.fnReloadAjax();
\t\t\t\t},
                                error: function(datos){
                                    \$(\"#respuesta_eliminar\").html(datos);
                                }
\t\t\t});
\t\t  event.preventDefault();
            });
            
        });   
  </script>
";
        
        $__internal_994c00b0918345b0db676c3bc040b8ebb891f10be3bafd0b3bccc38eebbcff31->leave($__internal_994c00b0918345b0db676c3bc040b8ebb891f10be3bafd0b3bccc38eebbcff31_prof);

    }

    public function getTemplateName()
    {
        return "/admin/clasificacion/vw_clasificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 233,  350 => 196,  302 => 151,  264 => 116,  255 => 111,  249 => 110,  237 => 103,  234 => 101,  224 => 93,  220 => 92,  216 => 91,  212 => 90,  202 => 82,  200 => 81,  194 => 76,  189 => 75,  180 => 67,  178 => 66,  172 => 61,  167 => 60,  158 => 52,  156 => 51,  149 => 46,  146 => 45,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}    */
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block titulo %} */
/*     Modelo*/
/* {% endblock %}*/
/* */
/* {% block sub_titulo %} */
/*     */
/* {% endblock %}*/
/* */
/* {% block contenido %}   */
/* <div class="col-md-12 col-sm-6 col-xs-12">*/
/*     <div class="x_panel">*/
/*         <div class="x_content">*/
/*             <div class="" role="tabpanel" data-example-id="togglable-tabs">*/
/*                 <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">*/
/*                     <li role="presentation" class="active"><a href="#clasificacion" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Clasificaci&oacute;n</a>*/
/*                     </li>                  */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     {# Panel clasificacion #}*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="clasificacion" aria-labelledby="home-tab">*/
/*                         <p class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vm_agregar">Agregar</button></p>                         */
/*                         {# Venta modal agregar clasificacion #}*/
/*                         <div class="modal fade" id="vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Clasificaci&oacute;n</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar clasificacion #}*/
/*                                 {% include 'admin/clasificacion/fm_agregar_clasificacion.html.twig' %}*/
/*                                 {# Fin Formulario agregar clasificacion #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal agregar clasificación #}*/
/*                         {#Venta modal actualizar clasificacion #}*/
/*                         <div class="modal fade" id="vm_actualizar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Actualizar Clasificaci&oacute;n</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar  clasificación #}*/
/*                                 {% include 'admin/clasificacion/fm_actualizar_clasificacion.html.twig' %} */
/*                                 {# Fin Formulario actualizar clasificación #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal actualizar clasificación#}*/
/*                         {#Venta modal eliminar clasificación #}*/
/*                         <div class="modal fade" id="vm_eliminar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Eliminar Clasificaci&oacute;n</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar  clasificación #}*/
/*                                 {% include 'admin/clasificacion/fm_eliminar_clasificacion.html.twig' %} */
/*                                 {# Fin Formulario actualizar clasificación #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal eliminar clasificación#}*/
/*                         {#Tabla clasificación#}*/
/*                         <div class="x_panel">                            */
/*                             <div class="x_content">*/
/*                                 <table id="th_clasificacion" class="table table-striped table-bordered" width="100%">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>Id</th>*/
/*                                             <th>Nombres</th>*/
/*                                             <th>Desertor</th>*/
/*                                             <th><div data-toggle="tooltip" data-placement="top" title="{{ caracteristica[0].descripcion }}">C1</div></th>                                             */
/*                                             <th><div data-toggle="tooltip" data-placement="top" title="{{ caracteristica[1].descripcion }}">C2</div></th> */
/*                                             <th><div data-toggle="tooltip" data-placement="top" title="{{ caracteristica[2].descripcion }}">C3</div></th> */
/*                                             <th><div data-toggle="tooltip" data-placement="top" title="{{ caracteristica[3].descripcion }}">C4</div></th> */
/*                                             <th>Acci&oacute;n</th> */
/*                                         </tr>*/
/*                                     </thead>                                        */
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Tabla entrenamiento #}*/
/*                     </div>*/
/*                     {#Fin Panel caracteristica #}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block js_footer %}*/
/*     {{ parent() }}   */
/*      <script type="text/javascript">*/
/*         var oTable  */
/*         $(document).ready(function() {*/
/*           oTable =  $('#th_clasificacion').dataTable({                */
/*                 "ajax": "{{ path('thdb_clasificacion')}}",*/
/*                 "columns": [*/
/*                             { className: "dt-center","width": "5%" },*/
/*                             { className: "dt-left" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center","width": "30%" }*/
/*                           ]*/
/*             });          */
/*             /**/
/*              * Cuando se activa ventana modal para agregar, se ejecuta*/
/*              * este evento el cual coloca en blanco todos los campos del*/
/*              * formulario*/
/*              *//* */
/*             $('#vm_agregar').on('show.bs.modal', function () {*/
/*                 $("#respuesta_agregar").html("");*/
/* 		var modal = $(this)                */
/*                 modal.find('.modal-body #codigo').val('')                */
/*                 modal.find('.modal-body #anio').val('')                */
/*                 modal.find('.modal-body #periodo').val('')                */
/*                 modal.find('.modal-body #desertor').val('')                */
/* */
/*             });           */
/* */
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de creación*/
/*              *//* */
/*             $( "#frm_agregar_clasificacion" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('clasificacionAdd') }}",*/
/* 			data:   parametros,*/
/*                                 beforeSend: function(){*/
/*                                     $("#respuesta_agregar").html("Mensaje: Cargando...");*/
/* 				},*/
/* 				success: function(datos){*/
/*                                     $("#respuesta_agregar").html(datos);                                       */
/*                                     oTable.fnReloadAjax();*/
/* 				},*/
/*                                 error: function(datos){*/
/*                                     $("#respuesta_agregar").html(datos);*/
/*                                 }*/
/* 			});*/
/* 		  event.preventDefault();*/
/*             });*/
/*             /**/
/*              * Cuando se activa ventana modal para modificar, se ejecuta*/
/*              * este evento el cual llena los campos del formulario con los*/
/*              * datos a modificar*/
/*              *//* */
/*             $('#vm_actualizar').on('show.bs.modal', function (event) {*/
/*                   $("#respuesta_actualizar").html("");*/
/* 		  var button = $(event.relatedTarget); */
/*                   var idclasificacion = button.data('idclasificacion'); */
/*                   var idestudiante = button.data('idestudiante');*/
/*                   var c1 = button.data('c1');*/
/*                   var c2 = button.data('c2');*/
/*                   var c3 = button.data('c3');*/
/*                   var c4 = button.data('c4');*/
/*                   var modal = $(this);*/
/*                   modal.find('.modal-body #idclasificacion').val(idclasificacion);*/
/*                   modal.find('.modal-body #idestudiante').val(idestudiante);*/
/*                   modal.find('.modal-body #c1').val(c1);*/
/*                   modal.find('.modal-body #c2').val(c2);*/
/*                   modal.find('.modal-body #c3').val(c3);*/
/*                   modal.find('.modal-body #c4').val(c4);*/
/*             });*/
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de actualización*/
/*              *//* */
/*             $( "#frm_actualiza_clasificacion" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('clasificacionMod') }}",*/
/* 			data:   parametros,*/
/*                                 beforeSend: function(){*/
/*                                     $("#respuesta_actualizar").html("Mensaje: Cargando...");*/
/* 				},*/
/* 				success: function(datos){*/
/*                                     $("#respuesta_actualizar").html(datos);                  */
/*                                       oTable.fnReloadAjax();*/
/* 				},*/
/*                                 error: function(datos){*/
/*                                     $("#respuesta_actualizar").html(datos);*/
/*                                 }*/
/* 			});*/
/* 		  event.preventDefault();*/
/*             });*/
/*             */
/*             /**/
/*              * Cuando se activa ventana modal para eliminar, se ejecuta*/
/*              * este evento el cual llena campo oculto con id de la clasificacion*/
/*              * a eliminar*/
/*              *//* */
/*             $('#vm_eliminar').on('show.bs.modal', function (event) {*/
/*                   $("#respuesta_eliminar").html("");*/
/* 		  var button = $(event.relatedTarget) */
/*                   var idclasificacion = button.data('idclasificacion') */
/*                   var modal = $(this)*/
/*                   modal.find('.modal-body #idclasificacion').val(idclasificacion)*/
/*             });*/
/*             */
/*             */
/*             /***/
/*             * Envía datos al controlador para eliminr datos*/
/*             *//* */
/*             $( "#frm_elimina_clasificacion" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('clasificacionDel') }}",*/
/* 			data:   parametros,*/
/*                                 beforeSend: function(){*/
/*                                     $("#respuesta_eliminar").html("Mensaje: Cargando...");*/
/* 				},*/
/* 				success: function(datos){*/
/*                                     $("#respuesta_eliminar").html(datos);                  */
/*                                       oTable.fnReloadAjax();*/
/* 				},*/
/*                                 error: function(datos){*/
/*                                     $("#respuesta_eliminar").html(datos);*/
/*                                 }*/
/* 			});*/
/* 		  event.preventDefault();*/
/*             });*/
/*             */
/*         });   */
/*   </script>*/
/* {% endblock %}*/
/*     */
