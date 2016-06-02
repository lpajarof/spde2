<?php

/* admin/estudiantes/vw_estudiantes.html.twig */
class __TwigTemplate_c1bf09079e262155989cbc81cb496fd77e831aade3b04bbeff01d7dfd902639c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/estudiantes/vw_estudiantes.html.twig", 1);
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
        $__internal_2f12e875b48906a5dd443208b0646d71de0b2a7ccb457d869f56918168dcf34d = $this->env->getExtension("native_profiler");
        $__internal_2f12e875b48906a5dd443208b0646d71de0b2a7ccb457d869f56918168dcf34d->enter($__internal_2f12e875b48906a5dd443208b0646d71de0b2a7ccb457d869f56918168dcf34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/estudiantes/vw_estudiantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f12e875b48906a5dd443208b0646d71de0b2a7ccb457d869f56918168dcf34d->leave($__internal_2f12e875b48906a5dd443208b0646d71de0b2a7ccb457d869f56918168dcf34d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c1b338bef333954dc59ab821a4b73ff7abbc273eed619c77d74b423904abf18 = $this->env->getExtension("native_profiler");
        $__internal_6c1b338bef333954dc59ab821a4b73ff7abbc273eed619c77d74b423904abf18->enter($__internal_6c1b338bef333954dc59ab821a4b73ff7abbc273eed619c77d74b423904abf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6c1b338bef333954dc59ab821a4b73ff7abbc273eed619c77d74b423904abf18->leave($__internal_6c1b338bef333954dc59ab821a4b73ff7abbc273eed619c77d74b423904abf18_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d317d10bdbb89a512322035b96804078cb51578afd9f265590cb72ec4f03c476 = $this->env->getExtension("native_profiler");
        $__internal_d317d10bdbb89a512322035b96804078cb51578afd9f265590cb72ec4f03c476->enter($__internal_d317d10bdbb89a512322035b96804078cb51578afd9f265590cb72ec4f03c476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_d317d10bdbb89a512322035b96804078cb51578afd9f265590cb72ec4f03c476->leave($__internal_d317d10bdbb89a512322035b96804078cb51578afd9f265590cb72ec4f03c476_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_1c580e4d3e31c4a37303fb1487307ab652817dcd9ff7fd1ea4510441afd954b9 = $this->env->getExtension("native_profiler");
        $__internal_1c580e4d3e31c4a37303fb1487307ab652817dcd9ff7fd1ea4510441afd954b9->enter($__internal_1c580e4d3e31c4a37303fb1487307ab652817dcd9ff7fd1ea4510441afd954b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_1c580e4d3e31c4a37303fb1487307ab652817dcd9ff7fd1ea4510441afd954b9->leave($__internal_1c580e4d3e31c4a37303fb1487307ab652817dcd9ff7fd1ea4510441afd954b9_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_62cefdd54c3019ba9e0c11ba265716512aaffa26c69c46971918c36e1e76f472 = $this->env->getExtension("native_profiler");
        $__internal_62cefdd54c3019ba9e0c11ba265716512aaffa26c69c46971918c36e1e76f472->enter($__internal_62cefdd54c3019ba9e0c11ba265716512aaffa26c69c46971918c36e1e76f472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Configuraci&oacute;n
";
        
        $__internal_62cefdd54c3019ba9e0c11ba265716512aaffa26c69c46971918c36e1e76f472->leave($__internal_62cefdd54c3019ba9e0c11ba265716512aaffa26c69c46971918c36e1e76f472_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_db73275cbc19c7398d3b243383606119873d746d4be835a35a3a0864070c8cbc = $this->env->getExtension("native_profiler");
        $__internal_db73275cbc19c7398d3b243383606119873d746d4be835a35a3a0864070c8cbc->enter($__internal_db73275cbc19c7398d3b243383606119873d746d4be835a35a3a0864070c8cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_db73275cbc19c7398d3b243383606119873d746d4be835a35a3a0864070c8cbc->leave($__internal_db73275cbc19c7398d3b243383606119873d746d4be835a35a3a0864070c8cbc_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2423bc5bd0416fa6ac568dc382fd8ef5c4fb783c75d8ba322d44419de42cbb45 = $this->env->getExtension("native_profiler");
        $__internal_2423bc5bd0416fa6ac568dc382fd8ef5c4fb783c75d8ba322d44419de42cbb45->enter($__internal_2423bc5bd0416fa6ac568dc382fd8ef5c4fb783c75d8ba322d44419de42cbb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#estudiantes\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Estudiantes</a>
                    </li>                  
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    ";
        // line 34
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"programas\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#vm_agregar\">Agregar</button></p>                         
                        ";
        // line 37
        echo "                        <div class=\"modal fade\" id=\"vm_agregar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Estudiante</h4>
                                </div>
                                ";
        // line 45
        echo "                                ";
        echo twig_include($this->env, $context, "admin/estudiantes/fm_agregar_estudiante.html.twig", array("tipoidentificacion" => (isset($context["tipoidentificacion"]) ? $context["tipoidentificacion"] : $this->getContext($context, "tipoidentificacion")), "programas" => (isset($context["programas"]) ? $context["programas"] : $this->getContext($context, "programas"))));
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Estudiante</h4>
                                </div>
                                ";
        // line 60
        echo "                                ";
        echo twig_include($this->env, $context, "admin/estudiantes/fm_actualizar_estudiante.html.twig", array("tipoidentificacion" => (isset($context["tipoidentificacion"]) ? $context["tipoidentificacion"] : $this->getContext($context, "tipoidentificacion")), "programas" => (isset($context["programas"]) ? $context["programas"] : $this->getContext($context, "programas"))));
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
        echo "                        <div class=\"x_panel\">                            
                            <div class=\"x_content\">
                                <table id=\"th_estudiantes\" class=\"table table-striped table-bordered\" width=\"100%\">
                                    <thead>
                                        <tr>
                                            <th>C&oacute;digo</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>E-mail</th>
                                            <th>Programa</th>
                                            <th>Acci&oacute;n</th>
                                        </tr>
                                    </thead>                                        
                                </table>
                            </div>
                        </div>
                        ";
        // line 84
        echo "                    </div>
                    ";
        // line 86
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_2423bc5bd0416fa6ac568dc382fd8ef5c4fb783c75d8ba322d44419de42cbb45->leave($__internal_2423bc5bd0416fa6ac568dc382fd8ef5c4fb783c75d8ba322d44419de42cbb45_prof);

    }

    // line 93
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_9c86387657c519e153bf6ab11cf2a544f2b31c0e3cd501dce003dc820e74f7ea = $this->env->getExtension("native_profiler");
        $__internal_9c86387657c519e153bf6ab11cf2a544f2b31c0e3cd501dce003dc820e74f7ea->enter($__internal_9c86387657c519e153bf6ab11cf2a544f2b31c0e3cd501dce003dc820e74f7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 94
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
        var oTable  
        \$(document).ready(function() {
          oTable =  \$('#th_estudiantes').dataTable({                
                \"ajax\": \"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("thdb_estudiantes");
        echo "\",
                \"columns\": [
                            { \"width\": \"5%\" },
                            { \"width\": \"17%\" },                           
                            { \"width\": \"18%\" },
                            { \"width\": \"30%\" },
                            { \"width\": \"25%\" },
                            { \"width\": \"5%\" },
                          ]
            });          
            /*
             * Cuando se activa ventana modal para agregar, se ejecuta
             * este evento el cual coloca en blanco todos los campos del
             * formulario
             */
            \$('#vm_agregar').on('show.bs.modal', function (event) {
                \$(\"#respuesta_agregar\").html(\"\");
\t\tvar modal = \$(this)
                modal.find('.modal-body #codigo').val('')
                modal.find('.modal-body #programa').val('')
                modal.find('.modal-body #tipoidentificacion').val('')
                modal.find('.modal-body #identificacion').val('')
                modal.find('.modal-body #nombres').val('')
                modal.find('.modal-body #apellidos').val('')
                modal.find('.modal-body #email').val('')
                modal.find('.modal-body #telefono').val('')
                modal.find('.modal-body #direccion').val('')                
            });           

            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de creación
             */
            \$( \"#frm_agregar_estudiante\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("estudiantesAdd");
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
                  var codigo = button.data('codigo');
                  var programa = button.data('programa');
                  var tipoidentificacion = button.data('tipoidentificacion');
                  var identificacion = button.data('identificacion');
                  var nombres = button.data('nombres');
                  var apellidos = button.data('apellidos');
                  var email = button.data('email');
                  var telefono = button.data('telefono');
                  var direccion = button.data('direccion');
                  var idestudiante = button.data('idestudiante');
                  var modal = \$(this);
                  modal.find('.modal-body #codigo').val(codigo);
                  modal.find('.modal-body #programa').val(programa);
                  modal.find('.modal-body #tipoidentificacion').val(tipoidentificacion);
                  modal.find('.modal-body #identificacion').val(identificacion);
                  modal.find('.modal-body #nombres').val(nombres);
                  modal.find('.modal-body #apellidos').val(apellidos);
                  modal.find('.modal-body #email').val(email);
                  modal.find('.modal-body #telefono').val(telefono);
                  modal.find('.modal-body #direccion').val(direccion);
                  modal.find('.modal-body #idestudiante').val(idestudiante);

            });
            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de actualización
             */
            \$( \"#frm_actualiza_estudiante\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("estudiantesMod");
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
                                    \$(\"#respuesta_agregar\").html(datos);
                                }
\t\t\t});
\t\t  event.preventDefault();
            });
        });   
  </script>
";
        
        $__internal_9c86387657c519e153bf6ab11cf2a544f2b31c0e3cd501dce003dc820e74f7ea->leave($__internal_9c86387657c519e153bf6ab11cf2a544f2b31c0e3cd501dce003dc820e74f7ea_prof);

    }

    public function getTemplateName()
    {
        return "admin/estudiantes/vw_estudiantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 190,  269 => 136,  229 => 99,  220 => 94,  214 => 93,  202 => 86,  199 => 84,  181 => 67,  179 => 66,  173 => 61,  168 => 60,  159 => 52,  157 => 51,  151 => 46,  146 => 45,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*     Configuraci&oacute;n*/
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
/*                     <li role="presentation" class="active"><a href="#estudiantes" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Estudiantes</a>*/
/*                     </li>                  */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     {# Panel estudiantes #}*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="programas" aria-labelledby="home-tab">*/
/*                         <p class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vm_agregar">Agregar</button></p>                         */
/*                         {# Venta modal agregar  estudiante #}*/
/*                         <div class="modal fade" id="vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Estudiante</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar estudiante #}*/
/*                                 {{ include ('admin/estudiantes/fm_agregar_estudiante.html.twig',{'tipoidentificacion':tipoidentificacion,'programas':programas}) }}*/
/*                                 {# Fin Formulario agregar estudainte #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal agregar tipo usuario#}*/
/*                         {#Venta modal actualizar tipo usuario#}*/
/*                         <div class="modal fade" id="vm_actualizar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Actualizar Estudiante</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar #}*/
/*                                 {{ include ('admin/estudiantes/fm_actualizar_estudiante.html.twig',{'tipoidentificacion':tipoidentificacion,'programas':programas}) }} */
/*                                 {# Fin Formulario actualizar #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal actualizar tipo usuario#}*/
/*                         {#Tabla tipo de usuario#}*/
/*                         <div class="x_panel">                            */
/*                             <div class="x_content">*/
/*                                 <table id="th_estudiantes" class="table table-striped table-bordered" width="100%">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>C&oacute;digo</th>*/
/*                                             <th>Nombres</th>*/
/*                                             <th>Apellidos</th>*/
/*                                             <th>E-mail</th>*/
/*                                             <th>Programa</th>*/
/*                                             <th>Acci&oacute;n</th>*/
/*                                         </tr>*/
/*                                     </thead>                                        */
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Tabla tipo de usuario#}*/
/*                     </div>*/
/*                     {#Fin Panel tipo usuarios #}*/
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
/*           oTable =  $('#th_estudiantes').dataTable({                */
/*                 "ajax": "{{ path('thdb_estudiantes') }}",*/
/*                 "columns": [*/
/*                             { "width": "5%" },*/
/*                             { "width": "17%" },                           */
/*                             { "width": "18%" },*/
/*                             { "width": "30%" },*/
/*                             { "width": "25%" },*/
/*                             { "width": "5%" },*/
/*                           ]*/
/*             });          */
/*             /**/
/*              * Cuando se activa ventana modal para agregar, se ejecuta*/
/*              * este evento el cual coloca en blanco todos los campos del*/
/*              * formulario*/
/*              *//* */
/*             $('#vm_agregar').on('show.bs.modal', function (event) {*/
/*                 $("#respuesta_agregar").html("");*/
/* 		var modal = $(this)*/
/*                 modal.find('.modal-body #codigo').val('')*/
/*                 modal.find('.modal-body #programa').val('')*/
/*                 modal.find('.modal-body #tipoidentificacion').val('')*/
/*                 modal.find('.modal-body #identificacion').val('')*/
/*                 modal.find('.modal-body #nombres').val('')*/
/*                 modal.find('.modal-body #apellidos').val('')*/
/*                 modal.find('.modal-body #email').val('')*/
/*                 modal.find('.modal-body #telefono').val('')*/
/*                 modal.find('.modal-body #direccion').val('')                */
/*             });           */
/* */
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de creación*/
/*              *//* */
/*             $( "#frm_agregar_estudiante" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('estudiantesAdd') }}",*/
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
/* 		  var button = $(event.relatedTarget);*/
/*                   var codigo = button.data('codigo');*/
/*                   var programa = button.data('programa');*/
/*                   var tipoidentificacion = button.data('tipoidentificacion');*/
/*                   var identificacion = button.data('identificacion');*/
/*                   var nombres = button.data('nombres');*/
/*                   var apellidos = button.data('apellidos');*/
/*                   var email = button.data('email');*/
/*                   var telefono = button.data('telefono');*/
/*                   var direccion = button.data('direccion');*/
/*                   var idestudiante = button.data('idestudiante');*/
/*                   var modal = $(this);*/
/*                   modal.find('.modal-body #codigo').val(codigo);*/
/*                   modal.find('.modal-body #programa').val(programa);*/
/*                   modal.find('.modal-body #tipoidentificacion').val(tipoidentificacion);*/
/*                   modal.find('.modal-body #identificacion').val(identificacion);*/
/*                   modal.find('.modal-body #nombres').val(nombres);*/
/*                   modal.find('.modal-body #apellidos').val(apellidos);*/
/*                   modal.find('.modal-body #email').val(email);*/
/*                   modal.find('.modal-body #telefono').val(telefono);*/
/*                   modal.find('.modal-body #direccion').val(direccion);*/
/*                   modal.find('.modal-body #idestudiante').val(idestudiante);*/
/* */
/*             });*/
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de actualización*/
/*              *//* */
/*             $( "#frm_actualiza_estudiante" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('estudiantesMod') }}",*/
/* 			data:   parametros,*/
/*                                 beforeSend: function(){*/
/*                                     $("#respuesta_actualizar").html("Mensaje: Cargando...");*/
/* 				},*/
/* 				success: function(datos){*/
/*                                     $("#respuesta_actualizar").html(datos);                  */
/*                                       oTable.fnReloadAjax();*/
/* 				},*/
/*                                 error: function(datos){*/
/*                                     $("#respuesta_agregar").html(datos);*/
/*                                 }*/
/* 			});*/
/* 		  event.preventDefault();*/
/*             });*/
/*         });   */
/*   </script>*/
/* {% endblock %}*/
/*     */
