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
        $__internal_e097bc44fde6b6e439b64d747cabc497dc15bafc3ab269957d5d275c5788e89c = $this->env->getExtension("native_profiler");
        $__internal_e097bc44fde6b6e439b64d747cabc497dc15bafc3ab269957d5d275c5788e89c->enter($__internal_e097bc44fde6b6e439b64d747cabc497dc15bafc3ab269957d5d275c5788e89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/estudiantes/vw_estudiantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e097bc44fde6b6e439b64d747cabc497dc15bafc3ab269957d5d275c5788e89c->leave($__internal_e097bc44fde6b6e439b64d747cabc497dc15bafc3ab269957d5d275c5788e89c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9aeccb1cb1c29458c5cc1bc613d1d6262145af493f18d5dfc0219a2cf8708b0c = $this->env->getExtension("native_profiler");
        $__internal_9aeccb1cb1c29458c5cc1bc613d1d6262145af493f18d5dfc0219a2cf8708b0c->enter($__internal_9aeccb1cb1c29458c5cc1bc613d1d6262145af493f18d5dfc0219a2cf8708b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9aeccb1cb1c29458c5cc1bc613d1d6262145af493f18d5dfc0219a2cf8708b0c->leave($__internal_9aeccb1cb1c29458c5cc1bc613d1d6262145af493f18d5dfc0219a2cf8708b0c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a38a54beb6e90d77815cd23f57c98d3fe0a2ce935cb13569813db95c8303fe63 = $this->env->getExtension("native_profiler");
        $__internal_a38a54beb6e90d77815cd23f57c98d3fe0a2ce935cb13569813db95c8303fe63->enter($__internal_a38a54beb6e90d77815cd23f57c98d3fe0a2ce935cb13569813db95c8303fe63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_a38a54beb6e90d77815cd23f57c98d3fe0a2ce935cb13569813db95c8303fe63->leave($__internal_a38a54beb6e90d77815cd23f57c98d3fe0a2ce935cb13569813db95c8303fe63_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_9342ae04f9ab2a9380b78b530b85d57459e645566bc241f1ecfc6a33c824b6c1 = $this->env->getExtension("native_profiler");
        $__internal_9342ae04f9ab2a9380b78b530b85d57459e645566bc241f1ecfc6a33c824b6c1->enter($__internal_9342ae04f9ab2a9380b78b530b85d57459e645566bc241f1ecfc6a33c824b6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_9342ae04f9ab2a9380b78b530b85d57459e645566bc241f1ecfc6a33c824b6c1->leave($__internal_9342ae04f9ab2a9380b78b530b85d57459e645566bc241f1ecfc6a33c824b6c1_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_a9b51a11e690f58c6d8fdbccd6c6462634e427be417c972aa014b3b30118de97 = $this->env->getExtension("native_profiler");
        $__internal_a9b51a11e690f58c6d8fdbccd6c6462634e427be417c972aa014b3b30118de97->enter($__internal_a9b51a11e690f58c6d8fdbccd6c6462634e427be417c972aa014b3b30118de97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Configuraci&oacute;n
";
        
        $__internal_a9b51a11e690f58c6d8fdbccd6c6462634e427be417c972aa014b3b30118de97->leave($__internal_a9b51a11e690f58c6d8fdbccd6c6462634e427be417c972aa014b3b30118de97_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_7e7236309eedc03de0d31bdacc551d3669ce6fb6191de2675a131450e5fcf347 = $this->env->getExtension("native_profiler");
        $__internal_7e7236309eedc03de0d31bdacc551d3669ce6fb6191de2675a131450e5fcf347->enter($__internal_7e7236309eedc03de0d31bdacc551d3669ce6fb6191de2675a131450e5fcf347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_7e7236309eedc03de0d31bdacc551d3669ce6fb6191de2675a131450e5fcf347->leave($__internal_7e7236309eedc03de0d31bdacc551d3669ce6fb6191de2675a131450e5fcf347_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2286546fdb113dfc263291fe7b6d22b24d36e8a27163fb565d87c51fe703f1e0 = $this->env->getExtension("native_profiler");
        $__internal_2286546fdb113dfc263291fe7b6d22b24d36e8a27163fb565d87c51fe703f1e0->enter($__internal_2286546fdb113dfc263291fe7b6d22b24d36e8a27163fb565d87c51fe703f1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        $this->loadTemplate("admin/estudiantes/fm_agregar_estudiante.html.twig", "admin/estudiantes/vw_estudiantes.html.twig", 45)->display($context);
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Estudiante</h4>
                                </div>
                                ";
        // line 60
        echo "                                ";
        $this->loadTemplate("admin/estudiantes/fm_actualizar_estudiante.html.twig", "admin/estudiantes/vw_estudiantes.html.twig", 60)->display($context);
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
        
        $__internal_2286546fdb113dfc263291fe7b6d22b24d36e8a27163fb565d87c51fe703f1e0->leave($__internal_2286546fdb113dfc263291fe7b6d22b24d36e8a27163fb565d87c51fe703f1e0_prof);

    }

    // line 93
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_ae2cb56b5fdce49107fa952231b341758adef51f5884c944b225a40e4f45f288 = $this->env->getExtension("native_profiler");
        $__internal_ae2cb56b5fdce49107fa952231b341758adef51f5884c944b225a40e4f45f288->enter($__internal_ae2cb56b5fdce49107fa952231b341758adef51f5884c944b225a40e4f45f288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

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
             * este evento el cual coloca en blsnco todos los campos del
             * formulario
             */
            \$('#vm_agregar').on('show.bs.modal', function (event) {
                \$(\"#respuesta_agregar\").html(\"\");
\t\tvar modal = \$(this)
                modal.find('.modal-body #codigo').val('')
                modal.find('.modal-body #descripcion').val('')                

            });           

            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de creación
             */
            \$( \"#frm_agregar_programas\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("programasAdd");
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
\t\t  var button = \$(event.relatedTarget) 
                  var codigo = button.data('codigo') 
                  var descripcion = button.data('descripcion') 
                  var idprograma = button.data('idprograma')
                  var modal = \$(this)
                  modal.find('.modal-body #codigo').val(codigo)
                  modal.find('.modal-body #descripcion').val(descripcion)
                  modal.find('.modal-body #idprograma').val(idprograma)

            });
            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de actualización
             */
            \$( \"#frm_actualiza_programas\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("programasMod");
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
        
        $__internal_ae2cb56b5fdce49107fa952231b341758adef51f5884c944b225a40e4f45f288->leave($__internal_ae2cb56b5fdce49107fa952231b341758adef51f5884c944b225a40e4f45f288_prof);

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
        return array (  305 => 170,  262 => 130,  228 => 99,  219 => 94,  213 => 93,  201 => 86,  198 => 84,  180 => 67,  178 => 66,  172 => 61,  167 => 60,  158 => 52,  156 => 51,  149 => 46,  146 => 45,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*                         {# Venta modal agregar tipo estudiante #}*/
/*                         <div class="modal fade" id="vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Estudiante</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar programas #}*/
/*                                 {% include 'admin/estudiantes/fm_agregar_estudiante.html.twig' %}*/
/*                                 {# Fin Formulario agregar programas #}        */
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
/*                                 {% include 'admin/estudiantes/fm_actualizar_estudiante.html.twig' %} */
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
/*              * este evento el cual coloca en blsnco todos los campos del*/
/*              * formulario*/
/*              *//* */
/*             $('#vm_agregar').on('show.bs.modal', function (event) {*/
/*                 $("#respuesta_agregar").html("");*/
/* 		var modal = $(this)*/
/*                 modal.find('.modal-body #codigo').val('')*/
/*                 modal.find('.modal-body #descripcion').val('')                */
/* */
/*             });           */
/* */
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de creación*/
/*              *//* */
/*             $( "#frm_agregar_programas" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('programasAdd') }}",*/
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
/* 		  var button = $(event.relatedTarget) */
/*                   var codigo = button.data('codigo') */
/*                   var descripcion = button.data('descripcion') */
/*                   var idprograma = button.data('idprograma')*/
/*                   var modal = $(this)*/
/*                   modal.find('.modal-body #codigo').val(codigo)*/
/*                   modal.find('.modal-body #descripcion').val(descripcion)*/
/*                   modal.find('.modal-body #idprograma').val(idprograma)*/
/* */
/*             });*/
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de actualización*/
/*              *//* */
/*             $( "#frm_actualiza_programas" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('programasMod') }}",*/
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
