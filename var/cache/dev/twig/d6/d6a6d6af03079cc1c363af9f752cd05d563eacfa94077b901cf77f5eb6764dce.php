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
        $__internal_598e98566f27d0e852331de3eaed06022f8577cdb3acedaa0709e7971599e7c1 = $this->env->getExtension("native_profiler");
        $__internal_598e98566f27d0e852331de3eaed06022f8577cdb3acedaa0709e7971599e7c1->enter($__internal_598e98566f27d0e852331de3eaed06022f8577cdb3acedaa0709e7971599e7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/estudiantes/vw_estudiantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_598e98566f27d0e852331de3eaed06022f8577cdb3acedaa0709e7971599e7c1->leave($__internal_598e98566f27d0e852331de3eaed06022f8577cdb3acedaa0709e7971599e7c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb08ee28d1f33ecbdc472111bed73df724d64b6503d66a4d1e7a5ddcd6affb89 = $this->env->getExtension("native_profiler");
        $__internal_cb08ee28d1f33ecbdc472111bed73df724d64b6503d66a4d1e7a5ddcd6affb89->enter($__internal_cb08ee28d1f33ecbdc472111bed73df724d64b6503d66a4d1e7a5ddcd6affb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cb08ee28d1f33ecbdc472111bed73df724d64b6503d66a4d1e7a5ddcd6affb89->leave($__internal_cb08ee28d1f33ecbdc472111bed73df724d64b6503d66a4d1e7a5ddcd6affb89_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f865a3dbe61c143f0cf764c94dc710da1520205e622a9ef426c2559794a41de9 = $this->env->getExtension("native_profiler");
        $__internal_f865a3dbe61c143f0cf764c94dc710da1520205e622a9ef426c2559794a41de9->enter($__internal_f865a3dbe61c143f0cf764c94dc710da1520205e622a9ef426c2559794a41de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_f865a3dbe61c143f0cf764c94dc710da1520205e622a9ef426c2559794a41de9->leave($__internal_f865a3dbe61c143f0cf764c94dc710da1520205e622a9ef426c2559794a41de9_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_cf938e883a825a8303864fdbd80fa0a574e64d0c517af7b7c0200707c0ea2782 = $this->env->getExtension("native_profiler");
        $__internal_cf938e883a825a8303864fdbd80fa0a574e64d0c517af7b7c0200707c0ea2782->enter($__internal_cf938e883a825a8303864fdbd80fa0a574e64d0c517af7b7c0200707c0ea2782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_cf938e883a825a8303864fdbd80fa0a574e64d0c517af7b7c0200707c0ea2782->leave($__internal_cf938e883a825a8303864fdbd80fa0a574e64d0c517af7b7c0200707c0ea2782_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_1b8c348c4b33e472d198383c1b5dc3a04a2e1e465de4e6c9942caa482fb24d7b = $this->env->getExtension("native_profiler");
        $__internal_1b8c348c4b33e472d198383c1b5dc3a04a2e1e465de4e6c9942caa482fb24d7b->enter($__internal_1b8c348c4b33e472d198383c1b5dc3a04a2e1e465de4e6c9942caa482fb24d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Configuraci&oacute;n
";
        
        $__internal_1b8c348c4b33e472d198383c1b5dc3a04a2e1e465de4e6c9942caa482fb24d7b->leave($__internal_1b8c348c4b33e472d198383c1b5dc3a04a2e1e465de4e6c9942caa482fb24d7b_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_f7577f5a2e330db2908da054009bd408e6c2074607c2c76e2913d921ee163b00 = $this->env->getExtension("native_profiler");
        $__internal_f7577f5a2e330db2908da054009bd408e6c2074607c2c76e2913d921ee163b00->enter($__internal_f7577f5a2e330db2908da054009bd408e6c2074607c2c76e2913d921ee163b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_f7577f5a2e330db2908da054009bd408e6c2074607c2c76e2913d921ee163b00->leave($__internal_f7577f5a2e330db2908da054009bd408e6c2074607c2c76e2913d921ee163b00_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2b2eab2713f1a1c74d2404bc9289a549833032e67af3afc5f98533ded43bd24e = $this->env->getExtension("native_profiler");
        $__internal_2b2eab2713f1a1c74d2404bc9289a549833032e67af3afc5f98533ded43bd24e->enter($__internal_2b2eab2713f1a1c74d2404bc9289a549833032e67af3afc5f98533ded43bd24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_2b2eab2713f1a1c74d2404bc9289a549833032e67af3afc5f98533ded43bd24e->leave($__internal_2b2eab2713f1a1c74d2404bc9289a549833032e67af3afc5f98533ded43bd24e_prof);

    }

    // line 93
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_5a46e176556ee0202f2cb0e2324101c81ccc85338a8e9d96310c812a3fc7c5a1 = $this->env->getExtension("native_profiler");
        $__internal_5a46e176556ee0202f2cb0e2324101c81ccc85338a8e9d96310c812a3fc7c5a1->enter($__internal_5a46e176556ee0202f2cb0e2324101c81ccc85338a8e9d96310c812a3fc7c5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

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
        
        $__internal_5a46e176556ee0202f2cb0e2324101c81ccc85338a8e9d96310c812a3fc7c5a1->leave($__internal_5a46e176556ee0202f2cb0e2324101c81ccc85338a8e9d96310c812a3fc7c5a1_prof);

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
