<?php

/* admin/tipousuario/vw_tipousuario.html.twig */
class __TwigTemplate_d6cbcf32bd0dfae26f63a6a8497272d0b546f178f41befa4ba4b2cba262cbdf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/tipousuario/vw_tipousuario.html.twig", 1);
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
        $__internal_2a976f4db013b7fd8fad11c14a21cf2a2ee98a896186fd19d4525fd505acac5c = $this->env->getExtension("native_profiler");
        $__internal_2a976f4db013b7fd8fad11c14a21cf2a2ee98a896186fd19d4525fd505acac5c->enter($__internal_2a976f4db013b7fd8fad11c14a21cf2a2ee98a896186fd19d4525fd505acac5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tipousuario/vw_tipousuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a976f4db013b7fd8fad11c14a21cf2a2ee98a896186fd19d4525fd505acac5c->leave($__internal_2a976f4db013b7fd8fad11c14a21cf2a2ee98a896186fd19d4525fd505acac5c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bfb948a23a879052ea73565f9e4237a8334e47ab846a60c7f75de398a5fde92 = $this->env->getExtension("native_profiler");
        $__internal_2bfb948a23a879052ea73565f9e4237a8334e47ab846a60c7f75de398a5fde92->enter($__internal_2bfb948a23a879052ea73565f9e4237a8334e47ab846a60c7f75de398a5fde92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2bfb948a23a879052ea73565f9e4237a8334e47ab846a60c7f75de398a5fde92->leave($__internal_2bfb948a23a879052ea73565f9e4237a8334e47ab846a60c7f75de398a5fde92_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_510f4d2af5e3fc7f9be4e4f396a4d8ff7f9bb538380ab7222e20b700830ea20a = $this->env->getExtension("native_profiler");
        $__internal_510f4d2af5e3fc7f9be4e4f396a4d8ff7f9bb538380ab7222e20b700830ea20a->enter($__internal_510f4d2af5e3fc7f9be4e4f396a4d8ff7f9bb538380ab7222e20b700830ea20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_510f4d2af5e3fc7f9be4e4f396a4d8ff7f9bb538380ab7222e20b700830ea20a->leave($__internal_510f4d2af5e3fc7f9be4e4f396a4d8ff7f9bb538380ab7222e20b700830ea20a_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_d356c9a447615e1aae79f156b61654d3090768fb379e8afcf19bf8c11f7392e8 = $this->env->getExtension("native_profiler");
        $__internal_d356c9a447615e1aae79f156b61654d3090768fb379e8afcf19bf8c11f7392e8->enter($__internal_d356c9a447615e1aae79f156b61654d3090768fb379e8afcf19bf8c11f7392e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_d356c9a447615e1aae79f156b61654d3090768fb379e8afcf19bf8c11f7392e8->leave($__internal_d356c9a447615e1aae79f156b61654d3090768fb379e8afcf19bf8c11f7392e8_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_1e74acbed80666b379d8e252b485125483c87fdc7f872e710c4a1c783df60be4 = $this->env->getExtension("native_profiler");
        $__internal_1e74acbed80666b379d8e252b485125483c87fdc7f872e710c4a1c783df60be4->enter($__internal_1e74acbed80666b379d8e252b485125483c87fdc7f872e710c4a1c783df60be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Configuraci&oacute;n
";
        
        $__internal_1e74acbed80666b379d8e252b485125483c87fdc7f872e710c4a1c783df60be4->leave($__internal_1e74acbed80666b379d8e252b485125483c87fdc7f872e710c4a1c783df60be4_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_8b897a2a5d70012ac430186048b74609e42b40058f4590d51aa6526d9f008338 = $this->env->getExtension("native_profiler");
        $__internal_8b897a2a5d70012ac430186048b74609e42b40058f4590d51aa6526d9f008338->enter($__internal_8b897a2a5d70012ac430186048b74609e42b40058f4590d51aa6526d9f008338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_8b897a2a5d70012ac430186048b74609e42b40058f4590d51aa6526d9f008338->leave($__internal_8b897a2a5d70012ac430186048b74609e42b40058f4590d51aa6526d9f008338_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_f6bfa6094490fc4798da19049b6aaf497d0e7e2b8897a9bcb215806b3181759b = $this->env->getExtension("native_profiler");
        $__internal_f6bfa6094490fc4798da19049b6aaf497d0e7e2b8897a9bcb215806b3181759b->enter($__internal_f6bfa6094490fc4798da19049b6aaf497d0e7e2b8897a9bcb215806b3181759b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#tipoUsuarios\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Tipo de Usuarios</a>
                    </li>                  
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    ";
        // line 34
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tipoUsuarios\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#vm_agregar\">Agregar</button></p>                         
                        ";
        // line 37
        echo "                        <div class=\"modal fade\" id=\"vm_agregar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Tipo Usuario</h4>
                                </div>
                                ";
        // line 45
        echo "                                ";
        $this->loadTemplate("admin/tipousuario/fm_agregar_tipousuario.html.twig", "admin/tipousuario/vw_tipousuario.html.twig", 45)->display($context);
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Tipo Usuario</h4>
                                </div>
                                ";
        // line 60
        echo "                                ";
        $this->loadTemplate("admin/tipousuario/fm_actualizar_tipousuario.html.twig", "admin/tipousuario/vw_tipousuario.html.twig", 60)->display($context);
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
                                <table id=\"th_tipoUsuarios\" class=\"table table-striped table-bordered\">
                                    <thead>
                                        <tr>
                                            <th>Tipo de usuario</th>
                                            <th>Descripci&oacute;n</th>                                                
                                            <th>Acci&oacute;n</th>
                                        </tr>
                                    </thead>                                        
                                </table>
                            </div>
                        </div>
                        ";
        // line 81
        echo "                    </div>
                    ";
        // line 83
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_f6bfa6094490fc4798da19049b6aaf497d0e7e2b8897a9bcb215806b3181759b->leave($__internal_f6bfa6094490fc4798da19049b6aaf497d0e7e2b8897a9bcb215806b3181759b_prof);

    }

    // line 90
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_90afa9e56cd4eaf414995980f4a5b686a69bb27df12f62e20fa8f00f95486f04 = $this->env->getExtension("native_profiler");
        $__internal_90afa9e56cd4eaf414995980f4a5b686a69bb27df12f62e20fa8f00f95486f04->enter($__internal_90afa9e56cd4eaf414995980f4a5b686a69bb27df12f62e20fa8f00f95486f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 91
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
        var oTable  
        \$(document).ready(function() {
          oTable =  \$('#th_tipoUsuarios').dataTable({                
                \"ajax\": \"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("thdb_tipoUsuarios");
        echo "\",
                \"columns\": [
                            { \"width\": \"20%\" },
                            null,                           
                            { \"width\": \"10%\" }
                          ]
            });          
            /*
             * Cuando se activa ventana modal para agregar, se ejecuta
             * este evento el cual coloca en balnco todos los campos del
             * formulario
             */
            \$('#vm_agregar').on('show.bs.modal', function (event) {
                \$(\"#respuesta_agregar\").html(\"\");
\t\tvar modal = \$(this)
                modal.find('.modal-body #tipousuario').val('')
                modal.find('.modal-body #descripcion').val('')                

            });           

            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de creación
             */
            \$( \"#frm_agregar_tipousuario\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("tipousuarioAdd");
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
                  var tipousuario = button.data('tipousuario') 
                  var descripcion = button.data('descripcion') 
                  var idtipousuario = button.data('idtipousuario')
                  var modal = \$(this)
                  modal.find('.modal-body #tipousuario').val(tipousuario)
                  modal.find('.modal-body #descripcion').val(descripcion)
                  modal.find('.modal-body #idtipousuario').val(idtipousuario)

            });
            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de actualización
             */
            \$( \"#frm_actualiza_tipousuario\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("tipousuarioMod");
        echo "\",
\t\t\tdata:   parametros,
                                ";
        // line 169
        echo "\t\t\t\tsuccess: function(datos){
                                    \$(\"#respuesta_actualizar\").html(datos);                  
                                      oTable.fnReloadAjax();
\t\t\t\t}
\t\t\t});
\t\t  event.preventDefault();
            });
        });   
  </script>
";
        
        $__internal_90afa9e56cd4eaf414995980f4a5b686a69bb27df12f62e20fa8f00f95486f04->leave($__internal_90afa9e56cd4eaf414995980f4a5b686a69bb27df12f62e20fa8f00f95486f04_prof);

    }

    public function getTemplateName()
    {
        return "admin/tipousuario/vw_tipousuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 169,  299 => 164,  256 => 124,  225 => 96,  216 => 91,  210 => 90,  198 => 83,  195 => 81,  180 => 67,  178 => 66,  172 => 61,  167 => 60,  158 => 52,  156 => 51,  149 => 46,  146 => 45,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*                     <li role="presentation" class="active"><a href="#tipoUsuarios" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Tipo de Usuarios</a>*/
/*                     </li>                  */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     {#Panel tipo usuarios #}*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="tipoUsuarios" aria-labelledby="home-tab">*/
/*                         <p class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vm_agregar">Agregar</button></p>                         */
/*                         {#Venta modal agregar tipo usuario#}*/
/*                         <div class="modal fade" id="vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Tipo Usuario</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar #}*/
/*                                 {% include 'admin/tipousuario/fm_agregar_tipousuario.html.twig' %}*/
/*                                 {# Fin Formulario agregar #}        */
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
/*                                         <h4 class="modal-title" id="myModalLabel">Actualizar Tipo Usuario</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar #}*/
/*                                 {% include 'admin/tipousuario/fm_actualizar_tipousuario.html.twig' %} */
/*                                 {# Fin Formulario actualizar #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal actualizar tipo usuario#}*/
/*                         {#Tabla tipo de usuario#}*/
/*                         <div class="x_panel">                            */
/*                             <div class="x_content">*/
/*                                 <table id="th_tipoUsuarios" class="table table-striped table-bordered">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>Tipo de usuario</th>*/
/*                                             <th>Descripci&oacute;n</th>                                                */
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
/*           oTable =  $('#th_tipoUsuarios').dataTable({                */
/*                 "ajax": "{{ path('thdb_tipoUsuarios') }}",*/
/*                 "columns": [*/
/*                             { "width": "20%" },*/
/*                             null,                           */
/*                             { "width": "10%" }*/
/*                           ]*/
/*             });          */
/*             /**/
/*              * Cuando se activa ventana modal para agregar, se ejecuta*/
/*              * este evento el cual coloca en balnco todos los campos del*/
/*              * formulario*/
/*              *//* */
/*             $('#vm_agregar').on('show.bs.modal', function (event) {*/
/*                 $("#respuesta_agregar").html("");*/
/* 		var modal = $(this)*/
/*                 modal.find('.modal-body #tipousuario').val('')*/
/*                 modal.find('.modal-body #descripcion').val('')                */
/* */
/*             });           */
/* */
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de creación*/
/*              *//* */
/*             $( "#frm_agregar_tipousuario" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('tipousuarioAdd') }}",*/
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
/*                   var tipousuario = button.data('tipousuario') */
/*                   var descripcion = button.data('descripcion') */
/*                   var idtipousuario = button.data('idtipousuario')*/
/*                   var modal = $(this)*/
/*                   modal.find('.modal-body #tipousuario').val(tipousuario)*/
/*                   modal.find('.modal-body #descripcion').val(descripcion)*/
/*                   modal.find('.modal-body #idtipousuario').val(idtipousuario)*/
/* */
/*             });*/
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de actualización*/
/*              *//* */
/*             $( "#frm_actualiza_tipousuario" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('tipousuarioMod') }}",*/
/* 			data:   parametros,*/
/*                                 {#beforeSend: function(){*/
/*                                     $("#respuesta_actualizar").html("Mensaje: Cargando...");*/
/* 				},#}*/
/* 				success: function(datos){*/
/*                                     $("#respuesta_actualizar").html(datos);                  */
/*                                       oTable.fnReloadAjax();*/
/* 				}*/
/* 			});*/
/* 		  event.preventDefault();*/
/*             });*/
/*         });   */
/*   </script>*/
/* {% endblock %}*/
/*     */
