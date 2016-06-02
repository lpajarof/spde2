<?php

/* /admin/entrenamiento/vw_entrenamiento.html.twig */
class __TwigTemplate_4d5492295189d6d4859b3f144d473a99019d1b734f1c14001a17dedfd3fe5326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "/admin/entrenamiento/vw_entrenamiento.html.twig", 1);
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
        $__internal_a80f27665d6721bac3208f3cc19cfc1321db71381c18b5a9d2c70faef3ee3915 = $this->env->getExtension("native_profiler");
        $__internal_a80f27665d6721bac3208f3cc19cfc1321db71381c18b5a9d2c70faef3ee3915->enter($__internal_a80f27665d6721bac3208f3cc19cfc1321db71381c18b5a9d2c70faef3ee3915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/admin/entrenamiento/vw_entrenamiento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a80f27665d6721bac3208f3cc19cfc1321db71381c18b5a9d2c70faef3ee3915->leave($__internal_a80f27665d6721bac3208f3cc19cfc1321db71381c18b5a9d2c70faef3ee3915_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_acf08ad60c4d143f245edfe7224fab1562f69611969f2f11a3f5ba591779d36c = $this->env->getExtension("native_profiler");
        $__internal_acf08ad60c4d143f245edfe7224fab1562f69611969f2f11a3f5ba591779d36c->enter($__internal_acf08ad60c4d143f245edfe7224fab1562f69611969f2f11a3f5ba591779d36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_acf08ad60c4d143f245edfe7224fab1562f69611969f2f11a3f5ba591779d36c->leave($__internal_acf08ad60c4d143f245edfe7224fab1562f69611969f2f11a3f5ba591779d36c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6fdbe34943d5cb8dd2fd45f0cbbba43722301fa6d7bf899b54eb924a799336f5 = $this->env->getExtension("native_profiler");
        $__internal_6fdbe34943d5cb8dd2fd45f0cbbba43722301fa6d7bf899b54eb924a799336f5->enter($__internal_6fdbe34943d5cb8dd2fd45f0cbbba43722301fa6d7bf899b54eb924a799336f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_6fdbe34943d5cb8dd2fd45f0cbbba43722301fa6d7bf899b54eb924a799336f5->leave($__internal_6fdbe34943d5cb8dd2fd45f0cbbba43722301fa6d7bf899b54eb924a799336f5_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_2911ba88c7a07ca61074f9ba974bf68e25cf7bd9683d6c1a0a34a9a9bbc2269b = $this->env->getExtension("native_profiler");
        $__internal_2911ba88c7a07ca61074f9ba974bf68e25cf7bd9683d6c1a0a34a9a9bbc2269b->enter($__internal_2911ba88c7a07ca61074f9ba974bf68e25cf7bd9683d6c1a0a34a9a9bbc2269b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_2911ba88c7a07ca61074f9ba974bf68e25cf7bd9683d6c1a0a34a9a9bbc2269b->leave($__internal_2911ba88c7a07ca61074f9ba974bf68e25cf7bd9683d6c1a0a34a9a9bbc2269b_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_659520bed34869c9b810620455ec0afb0702829e6425c58699ea2d901d8ccd66 = $this->env->getExtension("native_profiler");
        $__internal_659520bed34869c9b810620455ec0afb0702829e6425c58699ea2d901d8ccd66->enter($__internal_659520bed34869c9b810620455ec0afb0702829e6425c58699ea2d901d8ccd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Entrenamiento
";
        
        $__internal_659520bed34869c9b810620455ec0afb0702829e6425c58699ea2d901d8ccd66->leave($__internal_659520bed34869c9b810620455ec0afb0702829e6425c58699ea2d901d8ccd66_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_faddf5f60afe2912274f9c814c26134cb616d097a8bfa1a6979f7459b01e7ec7 = $this->env->getExtension("native_profiler");
        $__internal_faddf5f60afe2912274f9c814c26134cb616d097a8bfa1a6979f7459b01e7ec7->enter($__internal_faddf5f60afe2912274f9c814c26134cb616d097a8bfa1a6979f7459b01e7ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_faddf5f60afe2912274f9c814c26134cb616d097a8bfa1a6979f7459b01e7ec7->leave($__internal_faddf5f60afe2912274f9c814c26134cb616d097a8bfa1a6979f7459b01e7ec7_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_30cd58f9396d9a355b0711f28378125ca180a804e9a02a20fb5d757c3f006fb2 = $this->env->getExtension("native_profiler");
        $__internal_30cd58f9396d9a355b0711f28378125ca180a804e9a02a20fb5d757c3f006fb2->enter($__internal_30cd58f9396d9a355b0711f28378125ca180a804e9a02a20fb5d757c3f006fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#entrenamiento\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Entrenamiento</a>
                    </li>                  
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    ";
        // line 34
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"entrenamiento\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#vm_agregar\">Agregar</button></p>                         
                        ";
        // line 37
        echo "                        <div class=\"modal fade\" id=\"vm_agregar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Entrenamiento</h4>
                                </div>
                                ";
        // line 45
        echo "                                ";
        echo twig_include($this->env, $context, "admin/entrenamiento/fm_agregar_entrenamiento.html.twig", array("clasificacion" => (isset($context["clasificacion"]) ? $context["clasificacion"] : $this->getContext($context, "clasificacion")), "caracteristica" => (isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica"))));
        echo "
                                ";
        // line 46
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Entrenamiento</h4>
                                </div>
                                ";
        // line 60
        echo "                                ";
        echo twig_include($this->env, $context, "admin/entrenamiento/fm_actualizar_entrenamiento.html.twig", array("clasificacion" => (isset($context["clasificacion"]) ? $context["clasificacion"] : $this->getContext($context, "clasificacion")), "caracteristica" => (isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica"))));
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Eliminar Entrenamiento</h4>
                                </div>
                                ";
        // line 75
        echo "                                ";
        $this->loadTemplate("admin/entrenamiento/fm_eliminar_entrenamiento.html.twig", "/admin/entrenamiento/vw_entrenamiento.html.twig", 75)->display($context);
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
                                <table id=\"th_entrenamiento\" class=\"table table-striped table-bordered\" width=\"100%\">
                                    <thead>
                                        <tr>
                                            <th>Estudiante</th>
                                            <th>Caracter&iacute;stica</th>
                                            <th>Valor</th>                                             
                                            <th>Acci&oacute;n</th> 
                                        </tr>
                                    </thead>                                        
                                </table>
                            </div>
                        </div>
                        ";
        // line 97
        echo "                    </div>
                    ";
        // line 99
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_30cd58f9396d9a355b0711f28378125ca180a804e9a02a20fb5d757c3f006fb2->leave($__internal_30cd58f9396d9a355b0711f28378125ca180a804e9a02a20fb5d757c3f006fb2_prof);

    }

    // line 106
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_9fcefee6bc42ffff8678d21fd9ded7ae489b296d3e1588f3995dad33e8d5e723 = $this->env->getExtension("native_profiler");
        $__internal_9fcefee6bc42ffff8678d21fd9ded7ae489b296d3e1588f3995dad33e8d5e723->enter($__internal_9fcefee6bc42ffff8678d21fd9ded7ae489b296d3e1588f3995dad33e8d5e723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 107
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
        var oTable  
        \$(document).ready(function() {
          oTable =  \$('#th_entrenamiento').dataTable({                
                \"ajax\": \"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("thdb_entrenamiento");
        echo "\",
                \"columns\": [
                            { className: \"dt-center\",\"width\": \"5%\" },
                            { className: \"dt-left\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\",\"width\": \"20%\" }
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
                modal.find('.modal-body #idclasificacion').val('')                
                modal.find('.modal-body #idcaracteristica').val('')                
                modal.find('.modal-body #identrenamiento').val('')                
                modal.find('.modal-body #valor').val('')                

            });           

            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de creación
             */
            \$( \"#frm_agregar_entrenamiento\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("entrenamientoAdd");
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
                  var identrenamiento = button.data('identrenamiento'); 
                  var idclasificacion = button.data('idclasificacion');
                  var idcaracteristica = button.data('idcaracteristica');
                  var valor = button.data('valor');
                  var modal = \$(this);
                  modal.find('.modal-body #identrenamiento').val(identrenamiento);
                  modal.find('.modal-body #idclasificacion').val(idclasificacion);
                  modal.find('.modal-body #idcaracteristica').val(idcaracteristica);
                  modal.find('.modal-body #valor').val(valor);
                                                    
            });
            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de actualización
             */
            \$( \"#frm_actualiza_entrenamiento\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 185
        echo $this->env->getExtension('routing')->getPath("entrenamientoMod");
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
                  var identrenamiento = button.data('identrenamiento') 
                  var modal = \$(this)
                  modal.find('.modal-body #identrenamiento').val(identrenamiento)
            });
            
            
            /**
            * Envía datos al controlador para eliminr datos
            */
            \$( \"#frm_elimina_entrenamiento\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 222
        echo $this->env->getExtension('routing')->getPath("entrenamientoDel");
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
        
        $__internal_9fcefee6bc42ffff8678d21fd9ded7ae489b296d3e1588f3995dad33e8d5e723->leave($__internal_9fcefee6bc42ffff8678d21fd9ded7ae489b296d3e1588f3995dad33e8d5e723_prof);

    }

    public function getTemplateName()
    {
        return "/admin/entrenamiento/vw_entrenamiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 222,  328 => 185,  283 => 143,  249 => 112,  240 => 107,  234 => 106,  222 => 99,  219 => 97,  203 => 82,  201 => 81,  195 => 76,  190 => 75,  181 => 67,  179 => 66,  173 => 61,  168 => 60,  159 => 52,  157 => 51,  151 => 46,  146 => 45,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*     Entrenamiento*/
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
/*                     <li role="presentation" class="active"><a href="#entrenamiento" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Entrenamiento</a>*/
/*                     </li>                  */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     {# Panel entrenamiento #}*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="entrenamiento" aria-labelledby="home-tab">*/
/*                         <p class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vm_agregar">Agregar</button></p>                         */
/*                         {# Venta modal agregar entrenamiento #}*/
/*                         <div class="modal fade" id="vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Entrenamiento</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar entrenamiento #}*/
/*                                 {{ include ('admin/entrenamiento/fm_agregar_entrenamiento.html.twig',{'clasificacion':clasificacion,'caracteristica':caracteristica}) }}*/
/*                                 {# Fin Formulario agregar entrenamiento #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal agregar entrenamiento #}*/
/*                         {#Venta modal actualizar entrenamiento #}*/
/*                         <div class="modal fade" id="vm_actualizar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Actualizar Entrenamiento</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar  entrenamiento #}*/
/*                                 {{ include ('admin/entrenamiento/fm_actualizar_entrenamiento.html.twig',{'clasificacion':clasificacion,'caracteristica':caracteristica}) }} */
/*                                 {# Fin Formulario actualizar entrenamiento #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal actualizar clasificación#}*/
/*                         {#Venta modal eliminar entrenamiento #}*/
/*                         <div class="modal fade" id="vm_eliminar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Eliminar Entrenamiento</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar  entrenamiento #}*/
/*                                 {% include 'admin/entrenamiento/fm_eliminar_entrenamiento.html.twig' %} */
/*                                 {# Fin Formulario actualizar entrenamiento #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal eliminar entrenamiento #}*/
/*                         {#Tabla entrenamiento #}*/
/*                         <div class="x_panel">                            */
/*                             <div class="x_content">*/
/*                                 <table id="th_entrenamiento" class="table table-striped table-bordered" width="100%">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>Estudiante</th>*/
/*                                             <th>Caracter&iacute;stica</th>*/
/*                                             <th>Valor</th>                                             */
/*                                             <th>Acci&oacute;n</th> */
/*                                         </tr>*/
/*                                     </thead>                                        */
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Tabla entrenamiento #}*/
/*                     </div>*/
/*                     {#Fin Panel entrenamiento #}*/
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
/*           oTable =  $('#th_entrenamiento').dataTable({                */
/*                 "ajax": "{{ path('thdb_entrenamiento')}}",*/
/*                 "columns": [*/
/*                             { className: "dt-center","width": "5%" },*/
/*                             { className: "dt-left" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center","width": "20%" }*/
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
/*                 modal.find('.modal-body #idclasificacion').val('')                */
/*                 modal.find('.modal-body #idcaracteristica').val('')                */
/*                 modal.find('.modal-body #identrenamiento').val('')                */
/*                 modal.find('.modal-body #valor').val('')                */
/* */
/*             });           */
/* */
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de creación*/
/*              *//* */
/*             $( "#frm_agregar_entrenamiento" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('entrenamientoAdd') }}",*/
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
/*                   var identrenamiento = button.data('identrenamiento'); */
/*                   var idclasificacion = button.data('idclasificacion');*/
/*                   var idcaracteristica = button.data('idcaracteristica');*/
/*                   var valor = button.data('valor');*/
/*                   var modal = $(this);*/
/*                   modal.find('.modal-body #identrenamiento').val(identrenamiento);*/
/*                   modal.find('.modal-body #idclasificacion').val(idclasificacion);*/
/*                   modal.find('.modal-body #idcaracteristica').val(idcaracteristica);*/
/*                   modal.find('.modal-body #valor').val(valor);*/
/*                                                     */
/*             });*/
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de actualización*/
/*              *//* */
/*             $( "#frm_actualiza_entrenamiento" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('entrenamientoMod') }}",*/
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
/*                   var identrenamiento = button.data('identrenamiento') */
/*                   var modal = $(this)*/
/*                   modal.find('.modal-body #identrenamiento').val(identrenamiento)*/
/*             });*/
/*             */
/*             */
/*             /***/
/*             * Envía datos al controlador para eliminr datos*/
/*             *//* */
/*             $( "#frm_elimina_entrenamiento" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('entrenamientoDel') }}",*/
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
