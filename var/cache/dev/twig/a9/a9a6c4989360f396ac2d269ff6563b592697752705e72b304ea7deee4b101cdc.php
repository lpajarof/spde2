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
        $__internal_06f11302e13ffa0cde4e4d1d4e43e505d662d22af0f5dd1b8a7afdd80891c69c = $this->env->getExtension("native_profiler");
        $__internal_06f11302e13ffa0cde4e4d1d4e43e505d662d22af0f5dd1b8a7afdd80891c69c->enter($__internal_06f11302e13ffa0cde4e4d1d4e43e505d662d22af0f5dd1b8a7afdd80891c69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tipousuario/vw_tipousuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06f11302e13ffa0cde4e4d1d4e43e505d662d22af0f5dd1b8a7afdd80891c69c->leave($__internal_06f11302e13ffa0cde4e4d1d4e43e505d662d22af0f5dd1b8a7afdd80891c69c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65494d85f42bdad75adca8539cb866eefaab2e06d95b8453f3855dec28e2823d = $this->env->getExtension("native_profiler");
        $__internal_65494d85f42bdad75adca8539cb866eefaab2e06d95b8453f3855dec28e2823d->enter($__internal_65494d85f42bdad75adca8539cb866eefaab2e06d95b8453f3855dec28e2823d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_65494d85f42bdad75adca8539cb866eefaab2e06d95b8453f3855dec28e2823d->leave($__internal_65494d85f42bdad75adca8539cb866eefaab2e06d95b8453f3855dec28e2823d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_499aa969ed75f0d15244b58e8cf8a4733e027bf4123f985df1d7cc9757fc8668 = $this->env->getExtension("native_profiler");
        $__internal_499aa969ed75f0d15244b58e8cf8a4733e027bf4123f985df1d7cc9757fc8668->enter($__internal_499aa969ed75f0d15244b58e8cf8a4733e027bf4123f985df1d7cc9757fc8668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_499aa969ed75f0d15244b58e8cf8a4733e027bf4123f985df1d7cc9757fc8668->leave($__internal_499aa969ed75f0d15244b58e8cf8a4733e027bf4123f985df1d7cc9757fc8668_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_a3d7f977a05f1f6624013a8892f83b6378a1a7bc4c570d3c60502b2b26a47cd6 = $this->env->getExtension("native_profiler");
        $__internal_a3d7f977a05f1f6624013a8892f83b6378a1a7bc4c570d3c60502b2b26a47cd6->enter($__internal_a3d7f977a05f1f6624013a8892f83b6378a1a7bc4c570d3c60502b2b26a47cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_a3d7f977a05f1f6624013a8892f83b6378a1a7bc4c570d3c60502b2b26a47cd6->leave($__internal_a3d7f977a05f1f6624013a8892f83b6378a1a7bc4c570d3c60502b2b26a47cd6_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_0719c2f0bcc40dfa16f4a80dd2a912935ff931a700a5e00a5605117d62f250f1 = $this->env->getExtension("native_profiler");
        $__internal_0719c2f0bcc40dfa16f4a80dd2a912935ff931a700a5e00a5605117d62f250f1->enter($__internal_0719c2f0bcc40dfa16f4a80dd2a912935ff931a700a5e00a5605117d62f250f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Configuraci&oacute;n
";
        
        $__internal_0719c2f0bcc40dfa16f4a80dd2a912935ff931a700a5e00a5605117d62f250f1->leave($__internal_0719c2f0bcc40dfa16f4a80dd2a912935ff931a700a5e00a5605117d62f250f1_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_ae8493fd4642692218de2933d1cef63e1f39fd95490d7d082d3263f55469d002 = $this->env->getExtension("native_profiler");
        $__internal_ae8493fd4642692218de2933d1cef63e1f39fd95490d7d082d3263f55469d002->enter($__internal_ae8493fd4642692218de2933d1cef63e1f39fd95490d7d082d3263f55469d002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_ae8493fd4642692218de2933d1cef63e1f39fd95490d7d082d3263f55469d002->leave($__internal_ae8493fd4642692218de2933d1cef63e1f39fd95490d7d082d3263f55469d002_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_7021ed7fb44e952684f363defeea06b0f8929b22c562e8691f6c6e555da2653b = $this->env->getExtension("native_profiler");
        $__internal_7021ed7fb44e952684f363defeea06b0f8929b22c562e8691f6c6e555da2653b->enter($__internal_7021ed7fb44e952684f363defeea06b0f8929b22c562e8691f6c6e555da2653b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_7021ed7fb44e952684f363defeea06b0f8929b22c562e8691f6c6e555da2653b->leave($__internal_7021ed7fb44e952684f363defeea06b0f8929b22c562e8691f6c6e555da2653b_prof);

    }

    // line 90
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_589be1bd3d7dac674fee3d0dc42bef62304f3aebfc595404df3fafbab9c4136e = $this->env->getExtension("native_profiler");
        $__internal_589be1bd3d7dac674fee3d0dc42bef62304f3aebfc595404df3fafbab9c4136e->enter($__internal_589be1bd3d7dac674fee3d0dc42bef62304f3aebfc595404df3fafbab9c4136e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

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
        
        $__internal_589be1bd3d7dac674fee3d0dc42bef62304f3aebfc595404df3fafbab9c4136e->leave($__internal_589be1bd3d7dac674fee3d0dc42bef62304f3aebfc595404df3fafbab9c4136e_prof);

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
