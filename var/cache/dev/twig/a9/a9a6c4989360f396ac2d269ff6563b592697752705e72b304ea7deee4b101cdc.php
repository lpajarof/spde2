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
        $__internal_a644cd3d6dea50f39cce15a319785d9a823d95093d5c2407ba3e7ee8b425740a = $this->env->getExtension("native_profiler");
        $__internal_a644cd3d6dea50f39cce15a319785d9a823d95093d5c2407ba3e7ee8b425740a->enter($__internal_a644cd3d6dea50f39cce15a319785d9a823d95093d5c2407ba3e7ee8b425740a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tipousuario/vw_tipousuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a644cd3d6dea50f39cce15a319785d9a823d95093d5c2407ba3e7ee8b425740a->leave($__internal_a644cd3d6dea50f39cce15a319785d9a823d95093d5c2407ba3e7ee8b425740a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f5603756a782ab3543c4f6ca338c5e1c164ae2d73bc86db716028b49919abfb = $this->env->getExtension("native_profiler");
        $__internal_0f5603756a782ab3543c4f6ca338c5e1c164ae2d73bc86db716028b49919abfb->enter($__internal_0f5603756a782ab3543c4f6ca338c5e1c164ae2d73bc86db716028b49919abfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0f5603756a782ab3543c4f6ca338c5e1c164ae2d73bc86db716028b49919abfb->leave($__internal_0f5603756a782ab3543c4f6ca338c5e1c164ae2d73bc86db716028b49919abfb_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_549040b865e78f3b0e3364d822f35bbe45ecd538014114b6b420040eee541f47 = $this->env->getExtension("native_profiler");
        $__internal_549040b865e78f3b0e3364d822f35bbe45ecd538014114b6b420040eee541f47->enter($__internal_549040b865e78f3b0e3364d822f35bbe45ecd538014114b6b420040eee541f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_549040b865e78f3b0e3364d822f35bbe45ecd538014114b6b420040eee541f47->leave($__internal_549040b865e78f3b0e3364d822f35bbe45ecd538014114b6b420040eee541f47_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_72e86e51c5067d591880b3ff98756ca13cc29ae08a5acb8c6007b84248f8f6de = $this->env->getExtension("native_profiler");
        $__internal_72e86e51c5067d591880b3ff98756ca13cc29ae08a5acb8c6007b84248f8f6de->enter($__internal_72e86e51c5067d591880b3ff98756ca13cc29ae08a5acb8c6007b84248f8f6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_72e86e51c5067d591880b3ff98756ca13cc29ae08a5acb8c6007b84248f8f6de->leave($__internal_72e86e51c5067d591880b3ff98756ca13cc29ae08a5acb8c6007b84248f8f6de_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_d27a0609945c8bca1357508c4cb8fca5afad112491d41d2e07561d7bee95f88e = $this->env->getExtension("native_profiler");
        $__internal_d27a0609945c8bca1357508c4cb8fca5afad112491d41d2e07561d7bee95f88e->enter($__internal_d27a0609945c8bca1357508c4cb8fca5afad112491d41d2e07561d7bee95f88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Configuraci&oacute;n
";
        
        $__internal_d27a0609945c8bca1357508c4cb8fca5afad112491d41d2e07561d7bee95f88e->leave($__internal_d27a0609945c8bca1357508c4cb8fca5afad112491d41d2e07561d7bee95f88e_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_f918e8b52fd13a88ce77d33cdc5a0ebf072fe6f3907f7327f86f9e0f08da8e92 = $this->env->getExtension("native_profiler");
        $__internal_f918e8b52fd13a88ce77d33cdc5a0ebf072fe6f3907f7327f86f9e0f08da8e92->enter($__internal_f918e8b52fd13a88ce77d33cdc5a0ebf072fe6f3907f7327f86f9e0f08da8e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_f918e8b52fd13a88ce77d33cdc5a0ebf072fe6f3907f7327f86f9e0f08da8e92->leave($__internal_f918e8b52fd13a88ce77d33cdc5a0ebf072fe6f3907f7327f86f9e0f08da8e92_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_913463bd595013139ff9e7fe86c95ddac6b47099c4b5f94cd55fc9b65d554e93 = $this->env->getExtension("native_profiler");
        $__internal_913463bd595013139ff9e7fe86c95ddac6b47099c4b5f94cd55fc9b65d554e93->enter($__internal_913463bd595013139ff9e7fe86c95ddac6b47099c4b5f94cd55fc9b65d554e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_913463bd595013139ff9e7fe86c95ddac6b47099c4b5f94cd55fc9b65d554e93->leave($__internal_913463bd595013139ff9e7fe86c95ddac6b47099c4b5f94cd55fc9b65d554e93_prof);

    }

    // line 90
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_7849362a7e9cef5449828810ccd18817d5137fe42ae50e6fbfee19e9aa16fa84 = $this->env->getExtension("native_profiler");
        $__internal_7849362a7e9cef5449828810ccd18817d5137fe42ae50e6fbfee19e9aa16fa84->enter($__internal_7849362a7e9cef5449828810ccd18817d5137fe42ae50e6fbfee19e9aa16fa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

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
                                beforeSend: function(){
                                    \$(\"#respuesta_actualizar\").html(\"Mensaje: Cargando...\");
\t\t\t\t},
\t\t\t\tsuccess: function(datos){
                                    \$(\"#respuesta_actualizar\").html(datos);                  
                                      oTable.fnReloadAjax();
\t\t\t\t}
\t\t\t});
\t\t  event.preventDefault();
            });
        });   
  </script>
";
        
        $__internal_7849362a7e9cef5449828810ccd18817d5137fe42ae50e6fbfee19e9aa16fa84->leave($__internal_7849362a7e9cef5449828810ccd18817d5137fe42ae50e6fbfee19e9aa16fa84_prof);

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
        return array (  299 => 164,  256 => 124,  225 => 96,  216 => 91,  210 => 90,  198 => 83,  195 => 81,  180 => 67,  178 => 66,  172 => 61,  167 => 60,  158 => 52,  156 => 51,  149 => 46,  146 => 45,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*                                 beforeSend: function(){*/
/*                                     $("#respuesta_actualizar").html("Mensaje: Cargando...");*/
/* 				},*/
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
