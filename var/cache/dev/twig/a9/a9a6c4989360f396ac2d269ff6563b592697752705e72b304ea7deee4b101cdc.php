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
        $__internal_a3d70a3fd607ea7322b0b29529e13c056d067a28c5de198ca3b0772a671e2d12 = $this->env->getExtension("native_profiler");
        $__internal_a3d70a3fd607ea7322b0b29529e13c056d067a28c5de198ca3b0772a671e2d12->enter($__internal_a3d70a3fd607ea7322b0b29529e13c056d067a28c5de198ca3b0772a671e2d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tipousuario/vw_tipousuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d70a3fd607ea7322b0b29529e13c056d067a28c5de198ca3b0772a671e2d12->leave($__internal_a3d70a3fd607ea7322b0b29529e13c056d067a28c5de198ca3b0772a671e2d12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8d5ab1105f530350e65aa4e889c234b9e62381d4300efbde8e3b06f073fc603 = $this->env->getExtension("native_profiler");
        $__internal_d8d5ab1105f530350e65aa4e889c234b9e62381d4300efbde8e3b06f073fc603->enter($__internal_d8d5ab1105f530350e65aa4e889c234b9e62381d4300efbde8e3b06f073fc603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d8d5ab1105f530350e65aa4e889c234b9e62381d4300efbde8e3b06f073fc603->leave($__internal_d8d5ab1105f530350e65aa4e889c234b9e62381d4300efbde8e3b06f073fc603_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e6e84cd1d35abc5746192a7083ab00a95fb4ae04fbe36274d878c60eba51549 = $this->env->getExtension("native_profiler");
        $__internal_3e6e84cd1d35abc5746192a7083ab00a95fb4ae04fbe36274d878c60eba51549->enter($__internal_3e6e84cd1d35abc5746192a7083ab00a95fb4ae04fbe36274d878c60eba51549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_3e6e84cd1d35abc5746192a7083ab00a95fb4ae04fbe36274d878c60eba51549->leave($__internal_3e6e84cd1d35abc5746192a7083ab00a95fb4ae04fbe36274d878c60eba51549_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_113210d052c1666c9bc4fb8667341c78339e5970137d22c6320be95e5f86e049 = $this->env->getExtension("native_profiler");
        $__internal_113210d052c1666c9bc4fb8667341c78339e5970137d22c6320be95e5f86e049->enter($__internal_113210d052c1666c9bc4fb8667341c78339e5970137d22c6320be95e5f86e049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_113210d052c1666c9bc4fb8667341c78339e5970137d22c6320be95e5f86e049->leave($__internal_113210d052c1666c9bc4fb8667341c78339e5970137d22c6320be95e5f86e049_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_cecbbdb04f0737624090a199b1aba16e0431ef60a62916a88c0e35524d95319b = $this->env->getExtension("native_profiler");
        $__internal_cecbbdb04f0737624090a199b1aba16e0431ef60a62916a88c0e35524d95319b->enter($__internal_cecbbdb04f0737624090a199b1aba16e0431ef60a62916a88c0e35524d95319b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Configuraci&oacute;n
";
        
        $__internal_cecbbdb04f0737624090a199b1aba16e0431ef60a62916a88c0e35524d95319b->leave($__internal_cecbbdb04f0737624090a199b1aba16e0431ef60a62916a88c0e35524d95319b_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_bdaeaa4cbb29c639d9a9e2fef507d70da46931a26cdcf70a2fc4b6bcab128a92 = $this->env->getExtension("native_profiler");
        $__internal_bdaeaa4cbb29c639d9a9e2fef507d70da46931a26cdcf70a2fc4b6bcab128a92->enter($__internal_bdaeaa4cbb29c639d9a9e2fef507d70da46931a26cdcf70a2fc4b6bcab128a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_bdaeaa4cbb29c639d9a9e2fef507d70da46931a26cdcf70a2fc4b6bcab128a92->leave($__internal_bdaeaa4cbb29c639d9a9e2fef507d70da46931a26cdcf70a2fc4b6bcab128a92_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_a6010ca162f1e81d99e1ce92b7a5571a99fed41a3da50353d6a6174a3db98c28 = $this->env->getExtension("native_profiler");
        $__internal_a6010ca162f1e81d99e1ce92b7a5571a99fed41a3da50353d6a6174a3db98c28->enter($__internal_a6010ca162f1e81d99e1ce92b7a5571a99fed41a3da50353d6a6174a3db98c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_a6010ca162f1e81d99e1ce92b7a5571a99fed41a3da50353d6a6174a3db98c28->leave($__internal_a6010ca162f1e81d99e1ce92b7a5571a99fed41a3da50353d6a6174a3db98c28_prof);

    }

    // line 90
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_41dfdf1908c59447525df6e0ff0408de4c635841d81e1778e8211a50f2394a77 = $this->env->getExtension("native_profiler");
        $__internal_41dfdf1908c59447525df6e0ff0408de4c635841d81e1778e8211a50f2394a77->enter($__internal_41dfdf1908c59447525df6e0ff0408de4c635841d81e1778e8211a50f2394a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

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
        
        $__internal_41dfdf1908c59447525df6e0ff0408de4c635841d81e1778e8211a50f2394a77->leave($__internal_41dfdf1908c59447525df6e0ff0408de4c635841d81e1778e8211a50f2394a77_prof);

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
