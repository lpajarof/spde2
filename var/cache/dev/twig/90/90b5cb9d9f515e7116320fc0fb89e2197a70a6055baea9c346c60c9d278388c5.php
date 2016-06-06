<?php

/* /admin/seguimiento/vw_seguimiento.html.twig */
class __TwigTemplate_f96c6aa99e2cad1599aa2c5243b38dd65322935e7b1677978bbd252f7d81cd04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "/admin/seguimiento/vw_seguimiento.html.twig", 1);
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
        $__internal_4fd8f7b34dbfc5e1a410182e89a2c1f8a8b41b758d69c7e9426758aa67c805b3 = $this->env->getExtension("native_profiler");
        $__internal_4fd8f7b34dbfc5e1a410182e89a2c1f8a8b41b758d69c7e9426758aa67c805b3->enter($__internal_4fd8f7b34dbfc5e1a410182e89a2c1f8a8b41b758d69c7e9426758aa67c805b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/admin/seguimiento/vw_seguimiento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fd8f7b34dbfc5e1a410182e89a2c1f8a8b41b758d69c7e9426758aa67c805b3->leave($__internal_4fd8f7b34dbfc5e1a410182e89a2c1f8a8b41b758d69c7e9426758aa67c805b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2462c044d796ebc4ac57e47bdf349b804a76db5453fa18b6f18d3b46b2a8840 = $this->env->getExtension("native_profiler");
        $__internal_e2462c044d796ebc4ac57e47bdf349b804a76db5453fa18b6f18d3b46b2a8840->enter($__internal_e2462c044d796ebc4ac57e47bdf349b804a76db5453fa18b6f18d3b46b2a8840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e2462c044d796ebc4ac57e47bdf349b804a76db5453fa18b6f18d3b46b2a8840->leave($__internal_e2462c044d796ebc4ac57e47bdf349b804a76db5453fa18b6f18d3b46b2a8840_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d12e3f12230f3f50aff43746d6abb979a63e827a6bddd77e98042fe79d70f8cd = $this->env->getExtension("native_profiler");
        $__internal_d12e3f12230f3f50aff43746d6abb979a63e827a6bddd77e98042fe79d70f8cd->enter($__internal_d12e3f12230f3f50aff43746d6abb979a63e827a6bddd77e98042fe79d70f8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_d12e3f12230f3f50aff43746d6abb979a63e827a6bddd77e98042fe79d70f8cd->leave($__internal_d12e3f12230f3f50aff43746d6abb979a63e827a6bddd77e98042fe79d70f8cd_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_5352d91c99e1dd4840f55c565b7d43369feaae119c983227551b4123b22e41b6 = $this->env->getExtension("native_profiler");
        $__internal_5352d91c99e1dd4840f55c565b7d43369feaae119c983227551b4123b22e41b6->enter($__internal_5352d91c99e1dd4840f55c565b7d43369feaae119c983227551b4123b22e41b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_5352d91c99e1dd4840f55c565b7d43369feaae119c983227551b4123b22e41b6->leave($__internal_5352d91c99e1dd4840f55c565b7d43369feaae119c983227551b4123b22e41b6_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_5df214e699f4101983b1993e7d866e66362aa1863d56975768a27f2403bace98 = $this->env->getExtension("native_profiler");
        $__internal_5df214e699f4101983b1993e7d866e66362aa1863d56975768a27f2403bace98->enter($__internal_5df214e699f4101983b1993e7d866e66362aa1863d56975768a27f2403bace98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Seguimiento
";
        
        $__internal_5df214e699f4101983b1993e7d866e66362aa1863d56975768a27f2403bace98->leave($__internal_5df214e699f4101983b1993e7d866e66362aa1863d56975768a27f2403bace98_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_fc988b5891e9daa2e53b24113739d647fc22cf9cd1e425e2415154c125da5344 = $this->env->getExtension("native_profiler");
        $__internal_fc988b5891e9daa2e53b24113739d647fc22cf9cd1e425e2415154c125da5344->enter($__internal_fc988b5891e9daa2e53b24113739d647fc22cf9cd1e425e2415154c125da5344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_fc988b5891e9daa2e53b24113739d647fc22cf9cd1e425e2415154c125da5344->leave($__internal_fc988b5891e9daa2e53b24113739d647fc22cf9cd1e425e2415154c125da5344_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2df041409c2f19a953f2891f70abe7a1a2aeb8c1397852f4e567329ee33b9866 = $this->env->getExtension("native_profiler");
        $__internal_2df041409c2f19a953f2891f70abe7a1a2aeb8c1397852f4e567329ee33b9866->enter($__internal_2df041409c2f19a953f2891f70abe7a1a2aeb8c1397852f4e567329ee33b9866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#seguimiento\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Seguimiento</a>
                    </li>                  
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    ";
        // line 34
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"seguimiento\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#vm_agregar\">Agregar</button></p>                         
                        ";
        // line 37
        echo "                        <div class=\"modal fade\" id=\"vm_agregar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Seguimiento</h4>
                                </div>
                                ";
        // line 45
        echo "                                ";
        echo twig_include($this->env, $context, "admin/seguimiento/fm_agregar_seguimiento.html.twig");
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Seguimiento</h4>
                                </div>
                                ";
        // line 60
        echo "                                ";
        echo twig_include($this->env, $context, "admin/seguimiento/fm_actualizar_seguimiento.html.twig");
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Eliminar seguimiento</h4>
                                </div>
                                ";
        // line 75
        echo "                                ";
        $this->loadTemplate("admin/seguimiento/fm_eliminar_seguimiento.html.twig", "/admin/seguimiento/vw_seguimiento.html.twig", 75)->display($context);
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
                                <table id=\"th_seguimiento\" class=\"table table-striped table-bordered\" width=\"100%\">
                                    <thead>
                                        <tr>
                                            <th>Estudiante</th>
                                            <th>Seguimiento</th>
                                            <th>Observaciones</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Fin</th>
                                            <th>Estado</th>
                                            <th>Asignado a</th>
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
        
        $__internal_2df041409c2f19a953f2891f70abe7a1a2aeb8c1397852f4e567329ee33b9866->leave($__internal_2df041409c2f19a953f2891f70abe7a1a2aeb8c1397852f4e567329ee33b9866_prof);

    }

    // line 110
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_2bfbf40fd320dbdba1b2236a234edcb642e84bda3a8766cba48e5b88c2c93277 = $this->env->getExtension("native_profiler");
        $__internal_2bfbf40fd320dbdba1b2236a234edcb642e84bda3a8766cba48e5b88c2c93277->enter($__internal_2bfbf40fd320dbdba1b2236a234edcb642e84bda3a8766cba48e5b88c2c93277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 111
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
        var oTable  
        \$(document).ready(function() {
          oTable =  \$('#th_seguimiento').dataTable({                
                \"ajax\": \"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("thdb_seguimiento");
        echo "\",
                \"columns\": [
                            { className: \"dt-left\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" }
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
                modal.find('.modal-body #idseguimientoestudiante').val('')           
                modal.find('.modal-body #idestudiante').val('')           
                modal.find('.modal-body #idaccion').val('')                
                modal.find('.modal-body #observaciones').val('')                
                modal.find('.modal-body #fechainicio').val('')                
                modal.find('.modal-body #fechafin').val('')                
                modal.find('.modal-body #asignadoa').val('')                
            });           

            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de creación
             */
            \$( \"#frm_agregar_seguimiento\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("seguimientoAdd");
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
                  var idestudiante = button.data('idestudiante'); 
                  var c1 = button.data('c1'); 
                  var c2 = button.data('c2'); 
                  var c3 = button.data('c3'); 
                  var c4 = button.data('c4'); 
                  var desertor = button.data('desertor'); 
                  var modal = \$(this);
                  modal.find('.modal-body #identrenamiento').val(identrenamiento);
                  modal.find('.modal-body #idestudiante').val(idestudiante);
                  modal.find('.modal-body #c1').val(c1);
                  modal.find('.modal-body #c2').val(c2);
                  modal.find('.modal-body #c3').val(c3);
                  modal.find('.modal-body #c4').val(c4);
                  modal.find('.modal-body #desertor').val(desertor);
                                                    
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
        // line 201
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
        // line 238
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
            
            \$('#fechainicio').daterangepicker({
                singleDatePicker: true,
                calender_style: \"picker_1\"
                }, function(start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                }
            );
        
            \$('#fechafin').daterangepicker({
                singleDatePicker: true,
                calender_style: \"picker_1\"
                }, function(start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                }
            );
     });   
  </script>
";
        
        $__internal_2bfbf40fd320dbdba1b2236a234edcb642e84bda3a8766cba48e5b88c2c93277->leave($__internal_2bfbf40fd320dbdba1b2236a234edcb642e84bda3a8766cba48e5b88c2c93277_prof);

    }

    public function getTemplateName()
    {
        return "/admin/seguimiento/vw_seguimiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 238,  344 => 201,  293 => 153,  253 => 116,  244 => 111,  238 => 110,  226 => 103,  223 => 101,  203 => 82,  201 => 81,  195 => 76,  190 => 75,  181 => 67,  179 => 66,  173 => 61,  168 => 60,  159 => 52,  157 => 51,  151 => 46,  146 => 45,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*     Seguimiento*/
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
/*                     <li role="presentation" class="active"><a href="#seguimiento" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Seguimiento</a>*/
/*                     </li>                  */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     {# Panel seguimiento #}*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="seguimiento" aria-labelledby="home-tab">*/
/*                         <p class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vm_agregar">Agregar</button></p>                         */
/*                         {# Venta modal agregar seguimiento #}*/
/*                         <div class="modal fade" id="vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Seguimiento</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar seguimiento #}*/
/*                                 {{ include ('admin/seguimiento/fm_agregar_seguimiento.html.twig') }}*/
/*                                 {# Fin Formulario agregar seguimiento #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal agregar seguimiento #}*/
/*                         {#Venta modal actualizar seguimiento #}*/
/*                         <div class="modal fade" id="vm_actualizar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Actualizar Seguimiento</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar seguimiento #}*/
/*                                 {{ include ('admin/seguimiento/fm_actualizar_seguimiento.html.twig') }} */
/*                                 {# Fin Formulario actualizar seguimiento #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal actualizar seguimiento#}*/
/*                         {#Venta modal eliminar seguimiento #}*/
/*                         <div class="modal fade" id="vm_eliminar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Eliminar seguimiento</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar seguimiento #}*/
/*                                 {% include 'admin/seguimiento/fm_eliminar_seguimiento.html.twig' %} */
/*                                 {# Fin Formulario actualizar seguimiento #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal eliminar seguimiento #}*/
/*                         {#Tabla seguimiento #}*/
/*                         <div class="x_panel">                            */
/*                             <div class="x_content">*/
/*                                 <table id="th_seguimiento" class="table table-striped table-bordered" width="100%">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>Estudiante</th>*/
/*                                             <th>Seguimiento</th>*/
/*                                             <th>Observaciones</th>*/
/*                                             <th>Fecha Inicio</th>*/
/*                                             <th>Fecha Fin</th>*/
/*                                             <th>Estado</th>*/
/*                                             <th>Asignado a</th>*/
/*                                             <th>Acci&oacute;n</th> */
/*                                         </tr>*/
/*                                     </thead>                                        */
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Tabla seguimiento #}*/
/*                     </div>*/
/*                     {#Fin Panel seguimiento #}*/
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
/*           oTable =  $('#th_seguimiento').dataTable({                */
/*                 "ajax": "{{ path('thdb_seguimiento')}}",*/
/*                 "columns": [*/
/*                             { className: "dt-left" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" }*/
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
/*                 modal.find('.modal-body #idseguimientoestudiante').val('')           */
/*                 modal.find('.modal-body #idestudiante').val('')           */
/*                 modal.find('.modal-body #idaccion').val('')                */
/*                 modal.find('.modal-body #observaciones').val('')                */
/*                 modal.find('.modal-body #fechainicio').val('')                */
/*                 modal.find('.modal-body #fechafin').val('')                */
/*                 modal.find('.modal-body #asignadoa').val('')                */
/*             });           */
/* */
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de creación*/
/*              *//* */
/*             $( "#frm_agregar_seguimiento" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('seguimientoAdd') }}",*/
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
/*                   var idestudiante = button.data('idestudiante'); */
/*                   var c1 = button.data('c1'); */
/*                   var c2 = button.data('c2'); */
/*                   var c3 = button.data('c3'); */
/*                   var c4 = button.data('c4'); */
/*                   var desertor = button.data('desertor'); */
/*                   var modal = $(this);*/
/*                   modal.find('.modal-body #identrenamiento').val(identrenamiento);*/
/*                   modal.find('.modal-body #idestudiante').val(idestudiante);*/
/*                   modal.find('.modal-body #c1').val(c1);*/
/*                   modal.find('.modal-body #c2').val(c2);*/
/*                   modal.find('.modal-body #c3').val(c3);*/
/*                   modal.find('.modal-body #c4').val(c4);*/
/*                   modal.find('.modal-body #desertor').val(desertor);*/
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
/*             $('#fechainicio').daterangepicker({*/
/*                 singleDatePicker: true,*/
/*                 calender_style: "picker_1"*/
/*                 }, function(start, end, label) {*/
/*                     console.log(start.toISOString(), end.toISOString(), label);*/
/*                 }*/
/*             );*/
/*         */
/*             $('#fechafin').daterangepicker({*/
/*                 singleDatePicker: true,*/
/*                 calender_style: "picker_1"*/
/*                 }, function(start, end, label) {*/
/*                     console.log(start.toISOString(), end.toISOString(), label);*/
/*                 }*/
/*             );*/
/*      });   */
/*   </script>*/
/* {% endblock %}*/
/*     */
