<?php

/* :admin/tipousuario:vw_tipousuario.html.twig */
class __TwigTemplate_2789b9608d21fd2fa44df2b9e6a43e8f9a495691cc66f4b24db9a9cec9aadbaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":admin/tipousuario:vw_tipousuario.html.twig", 1);
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
        $__internal_e325162ee45e94c22898f09c106f5535909822c292c8131bf26db6eaded67139 = $this->env->getExtension("native_profiler");
        $__internal_e325162ee45e94c22898f09c106f5535909822c292c8131bf26db6eaded67139->enter($__internal_e325162ee45e94c22898f09c106f5535909822c292c8131bf26db6eaded67139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/tipousuario:vw_tipousuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e325162ee45e94c22898f09c106f5535909822c292c8131bf26db6eaded67139->leave($__internal_e325162ee45e94c22898f09c106f5535909822c292c8131bf26db6eaded67139_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc8d6a06763eecd08b5c5a49f23ee3139ba7190f9c180b15b1e0c3f02bda6ade = $this->env->getExtension("native_profiler");
        $__internal_cc8d6a06763eecd08b5c5a49f23ee3139ba7190f9c180b15b1e0c3f02bda6ade->enter($__internal_cc8d6a06763eecd08b5c5a49f23ee3139ba7190f9c180b15b1e0c3f02bda6ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cc8d6a06763eecd08b5c5a49f23ee3139ba7190f9c180b15b1e0c3f02bda6ade->leave($__internal_cc8d6a06763eecd08b5c5a49f23ee3139ba7190f9c180b15b1e0c3f02bda6ade_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8b828e41a3c580cc3ed4b2e51176be54a2f23a8f0a49fe8716cecab8954c04b = $this->env->getExtension("native_profiler");
        $__internal_a8b828e41a3c580cc3ed4b2e51176be54a2f23a8f0a49fe8716cecab8954c04b->enter($__internal_a8b828e41a3c580cc3ed4b2e51176be54a2f23a8f0a49fe8716cecab8954c04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_a8b828e41a3c580cc3ed4b2e51176be54a2f23a8f0a49fe8716cecab8954c04b->leave($__internal_a8b828e41a3c580cc3ed4b2e51176be54a2f23a8f0a49fe8716cecab8954c04b_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_74481bce1fd7ea26745aeabf637ff53ff8542eff6cccac9ac327e5f914f02004 = $this->env->getExtension("native_profiler");
        $__internal_74481bce1fd7ea26745aeabf637ff53ff8542eff6cccac9ac327e5f914f02004->enter($__internal_74481bce1fd7ea26745aeabf637ff53ff8542eff6cccac9ac327e5f914f02004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_74481bce1fd7ea26745aeabf637ff53ff8542eff6cccac9ac327e5f914f02004->leave($__internal_74481bce1fd7ea26745aeabf637ff53ff8542eff6cccac9ac327e5f914f02004_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_64ebd06158d697949767a98e194f5384de685997a28d12e1c64a5288f18f7ddc = $this->env->getExtension("native_profiler");
        $__internal_64ebd06158d697949767a98e194f5384de685997a28d12e1c64a5288f18f7ddc->enter($__internal_64ebd06158d697949767a98e194f5384de685997a28d12e1c64a5288f18f7ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Configuraci&oacute;n
";
        
        $__internal_64ebd06158d697949767a98e194f5384de685997a28d12e1c64a5288f18f7ddc->leave($__internal_64ebd06158d697949767a98e194f5384de685997a28d12e1c64a5288f18f7ddc_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_bab1780c8f43fe5d7b0ac8bfe6c12460192ce5a33c4d1e77b3ca8bc41054d66d = $this->env->getExtension("native_profiler");
        $__internal_bab1780c8f43fe5d7b0ac8bfe6c12460192ce5a33c4d1e77b3ca8bc41054d66d->enter($__internal_bab1780c8f43fe5d7b0ac8bfe6c12460192ce5a33c4d1e77b3ca8bc41054d66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_bab1780c8f43fe5d7b0ac8bfe6c12460192ce5a33c4d1e77b3ca8bc41054d66d->leave($__internal_bab1780c8f43fe5d7b0ac8bfe6c12460192ce5a33c4d1e77b3ca8bc41054d66d_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_85026bb686c7750204f70334dabdd9376e712241d2218956ddd94615537c0ca2 = $this->env->getExtension("native_profiler");
        $__internal_85026bb686c7750204f70334dabdd9376e712241d2218956ddd94615537c0ca2->enter($__internal_85026bb686c7750204f70334dabdd9376e712241d2218956ddd94615537c0ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        $this->loadTemplate("admin/tipousuario/fm_agregar_tipousuario.html.twig", ":admin/tipousuario:vw_tipousuario.html.twig", 45)->display($context);
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
        $this->loadTemplate("admin/tipousuario/fm_actualizar_tipousuario.html.twig", ":admin/tipousuario:vw_tipousuario.html.twig", 60)->display($context);
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
        
        $__internal_85026bb686c7750204f70334dabdd9376e712241d2218956ddd94615537c0ca2->leave($__internal_85026bb686c7750204f70334dabdd9376e712241d2218956ddd94615537c0ca2_prof);

    }

    // line 90
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_00e80d4037c9fcc7bfedd2aedae329e27ff39a8b4acdc3d14c04199f642499ae = $this->env->getExtension("native_profiler");
        $__internal_00e80d4037c9fcc7bfedd2aedae329e27ff39a8b4acdc3d14c04199f642499ae->enter($__internal_00e80d4037c9fcc7bfedd2aedae329e27ff39a8b4acdc3d14c04199f642499ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

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
        
        $__internal_00e80d4037c9fcc7bfedd2aedae329e27ff39a8b4acdc3d14c04199f642499ae->leave($__internal_00e80d4037c9fcc7bfedd2aedae329e27ff39a8b4acdc3d14c04199f642499ae_prof);

    }

    public function getTemplateName()
    {
        return ":admin/tipousuario:vw_tipousuario.html.twig";
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
