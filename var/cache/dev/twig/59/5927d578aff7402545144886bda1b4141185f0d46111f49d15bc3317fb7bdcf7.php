<?php

/* admin/acciones/vw_acciones.html.twig */
class __TwigTemplate_966586b84265bd21d6c260a2266906f252032863b11001d5d24021949f054abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/acciones/vw_acciones.html.twig", 1);
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
        $__internal_fbc57b3e447b5bac9ce897a27bea476a5bb9117ff89f1bdb4db3ae03ccc11aa0 = $this->env->getExtension("native_profiler");
        $__internal_fbc57b3e447b5bac9ce897a27bea476a5bb9117ff89f1bdb4db3ae03ccc11aa0->enter($__internal_fbc57b3e447b5bac9ce897a27bea476a5bb9117ff89f1bdb4db3ae03ccc11aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/acciones/vw_acciones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbc57b3e447b5bac9ce897a27bea476a5bb9117ff89f1bdb4db3ae03ccc11aa0->leave($__internal_fbc57b3e447b5bac9ce897a27bea476a5bb9117ff89f1bdb4db3ae03ccc11aa0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eefad6c2ea24ee1bfdf0725999335b507ee206fe8c8f931fb5d11aeb69a6de0a = $this->env->getExtension("native_profiler");
        $__internal_eefad6c2ea24ee1bfdf0725999335b507ee206fe8c8f931fb5d11aeb69a6de0a->enter($__internal_eefad6c2ea24ee1bfdf0725999335b507ee206fe8c8f931fb5d11aeb69a6de0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_eefad6c2ea24ee1bfdf0725999335b507ee206fe8c8f931fb5d11aeb69a6de0a->leave($__internal_eefad6c2ea24ee1bfdf0725999335b507ee206fe8c8f931fb5d11aeb69a6de0a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e53441071e5dc2295274c0783e5d275b59b5c9737599cf8c4e401f54ac2a2cbe = $this->env->getExtension("native_profiler");
        $__internal_e53441071e5dc2295274c0783e5d275b59b5c9737599cf8c4e401f54ac2a2cbe->enter($__internal_e53441071e5dc2295274c0783e5d275b59b5c9737599cf8c4e401f54ac2a2cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_e53441071e5dc2295274c0783e5d275b59b5c9737599cf8c4e401f54ac2a2cbe->leave($__internal_e53441071e5dc2295274c0783e5d275b59b5c9737599cf8c4e401f54ac2a2cbe_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_0396fda035ea46e305909b3c555fd9255c31680ea9d314821a118256181acd27 = $this->env->getExtension("native_profiler");
        $__internal_0396fda035ea46e305909b3c555fd9255c31680ea9d314821a118256181acd27->enter($__internal_0396fda035ea46e305909b3c555fd9255c31680ea9d314821a118256181acd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_0396fda035ea46e305909b3c555fd9255c31680ea9d314821a118256181acd27->leave($__internal_0396fda035ea46e305909b3c555fd9255c31680ea9d314821a118256181acd27_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_5413f8746ac777b5a9fa85db74e0ac4ee28e96bb0b3a38918d23a1c6b649a43e = $this->env->getExtension("native_profiler");
        $__internal_5413f8746ac777b5a9fa85db74e0ac4ee28e96bb0b3a38918d23a1c6b649a43e->enter($__internal_5413f8746ac777b5a9fa85db74e0ac4ee28e96bb0b3a38918d23a1c6b649a43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Configuraci&oacute;n
";
        
        $__internal_5413f8746ac777b5a9fa85db74e0ac4ee28e96bb0b3a38918d23a1c6b649a43e->leave($__internal_5413f8746ac777b5a9fa85db74e0ac4ee28e96bb0b3a38918d23a1c6b649a43e_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_e1a8c686893a3bec2110fd6af8274f91f4d54ec93c1e93ec4ae8ce07cafc415d = $this->env->getExtension("native_profiler");
        $__internal_e1a8c686893a3bec2110fd6af8274f91f4d54ec93c1e93ec4ae8ce07cafc415d->enter($__internal_e1a8c686893a3bec2110fd6af8274f91f4d54ec93c1e93ec4ae8ce07cafc415d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_e1a8c686893a3bec2110fd6af8274f91f4d54ec93c1e93ec4ae8ce07cafc415d->leave($__internal_e1a8c686893a3bec2110fd6af8274f91f4d54ec93c1e93ec4ae8ce07cafc415d_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_414bd2d5e1e9227d77eed9b5f24750dc15d9da1e2499124120a1986bfee1a893 = $this->env->getExtension("native_profiler");
        $__internal_414bd2d5e1e9227d77eed9b5f24750dc15d9da1e2499124120a1986bfee1a893->enter($__internal_414bd2d5e1e9227d77eed9b5f24750dc15d9da1e2499124120a1986bfee1a893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#acciones\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Acciones</a>
                    </li>                  
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    ";
        // line 34
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"acciones\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\">
                            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#vm_agregar\">Agregar</button></p>                         
                        ";
        // line 38
        echo "                        <div class=\"modal fade\" id=\"vm_agregar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Acciones</h4>
                                </div>
                                ";
        // line 46
        echo "                                ";
        $this->loadTemplate("admin/acciones/fm_agregar_acciones.html.twig", "admin/acciones/vw_acciones.html.twig", 46)->display($context);
        // line 47
        echo "                                ";
        echo "        
                            </div>
                            </div>
                        </div>
                        ";
        // line 52
        echo "                        ";
        // line 53
        echo "                        <div class=\"modal fade\" id=\"vm_actualizar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Acciones</h4>
                                </div>
                                ";
        // line 61
        echo "                                ";
        $this->loadTemplate("admin/acciones/fm_actualizar_acciones.html.twig", "admin/acciones/vw_acciones.html.twig", 61)->display($context);
        echo " 
                                ";
        // line 62
        echo "        
                            </div>
                            </div>
                        </div>
                        ";
        // line 67
        echo "                        ";
        // line 68
        echo "                        <div class=\"modal fade\" id=\"vm_eliminar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Eliminar Acci&oacute;n</h4>
                                </div>
                                ";
        // line 76
        echo "                                ";
        $this->loadTemplate("admin/acciones/fm_eliminar_acciones.html.twig", "admin/acciones/vw_acciones.html.twig", 76)->display($context);
        echo " 
                                ";
        // line 77
        echo "        
                            </div>
                            </div>
                        </div>
                        ";
        // line 82
        echo "                        ";
        // line 83
        echo "                        <div class=\"x_panel\">                            
                            <div class=\"x_content\">
                                <table id=\"th_acciones\" class=\"table table-striped table-bordered\" width=\"100%\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Acci&oacute;n</th>
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
        
        $__internal_414bd2d5e1e9227d77eed9b5f24750dc15d9da1e2499124120a1986bfee1a893->leave($__internal_414bd2d5e1e9227d77eed9b5f24750dc15d9da1e2499124120a1986bfee1a893_prof);

    }

    // line 106
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_b4b53a335d897665acf8f1ee04dd17cfc84fb5b26cd398a97589c6861fa8e636 = $this->env->getExtension("native_profiler");
        $__internal_b4b53a335d897665acf8f1ee04dd17cfc84fb5b26cd398a97589c6861fa8e636->enter($__internal_b4b53a335d897665acf8f1ee04dd17cfc84fb5b26cd398a97589c6861fa8e636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 107
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
        var oTable  
        \$(document).ready(function() {
          oTable =  \$('#th_acciones').dataTable({                
                \"ajax\": \"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("thdb_acciones");
        echo "\",
                \"columns\": [
                            { className: \"dt-center\",\"width\": \"5%\" },
                            null,
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
                modal.find('.modal-body #descripcion').val('')                

            });           

            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de creación
             */
            \$( \"#frm_agregar_acciones\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("accionAdd");
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
                  var descripcion = button.data('descripcion') 
                  var idaccion = button.data('idaccion') 
                  var modal = \$(this)
                  modal.find('.modal-body #descripcion').val(descripcion)
                  modal.find('.modal-body #idaccion').val(idaccion)
            });
            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de actualización
             */
            \$( \"#frm_actualiza_accion\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 176
        echo $this->env->getExtension('routing')->getPath("accionMod");
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
             * este evento el cual llena campo oculto con id de la caracteristica
             * a elimina
             */
            \$('#vm_eliminar').on('show.bs.modal', function (event) {
                  \$(\"#respuesta_eliminar\").html(\"\");
\t\t  var button = \$(event.relatedTarget) 
                  var idaccion = button.data('idaccion') 
                  var modal = \$(this)
                  modal.find('.modal-body #idaccion').val(idaccion)
            });
            
            
            /**
            * Envía datos al controlador para eliminr datos
            */
            \$( \"#frm_elimina_caracteristica\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 213
        echo $this->env->getExtension('routing')->getPath("accionDel");
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
        
        $__internal_b4b53a335d897665acf8f1ee04dd17cfc84fb5b26cd398a97589c6861fa8e636->leave($__internal_b4b53a335d897665acf8f1ee04dd17cfc84fb5b26cd398a97589c6861fa8e636_prof);

    }

    public function getTemplateName()
    {
        return "admin/acciones/vw_acciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 213,  318 => 176,  278 => 139,  248 => 112,  239 => 107,  233 => 106,  221 => 99,  218 => 97,  203 => 83,  201 => 82,  195 => 77,  190 => 76,  181 => 68,  179 => 67,  173 => 62,  168 => 61,  159 => 53,  157 => 52,  150 => 47,  147 => 46,  138 => 38,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*                     <li role="presentation" class="active"><a href="#acciones" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Acciones</a>*/
/*                     </li>                  */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     {# Panel Acciones #}*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="acciones" aria-labelledby="home-tab">*/
/*                         <p class="text-right">*/
/*                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vm_agregar">Agregar</button></p>                         */
/*                         {# Venta modal agregar Acciones #}*/
/*                         <div class="modal fade" id="vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Acciones</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar acciones #}*/
/*                                 {% include 'admin/acciones/fm_agregar_acciones.html.twig' %}*/
/*                                 {# Fin Formulario agregar acciones #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal agregar acciones #}*/
/*                         {#Venta modal actualizar acciones #}*/
/*                         <div class="modal fade" id="vm_actualizar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Actualizar Acciones</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar  acciones #}*/
/*                                 {% include 'admin/acciones/fm_actualizar_acciones.html.twig' %} */
/*                                 {# Fin Formulario actualizar acciones #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal actualizar acciones #}*/
/*                         {#Ventana modal eliminar acciones #}*/
/*                         <div class="modal fade" id="vm_eliminar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Eliminar Acci&oacute;n</h4>*/
/*                                 </div>*/
/*                                 {# Formulario eliminar  accion #}*/
/*                                 {% include 'admin/acciones/fm_eliminar_acciones.html.twig' %} */
/*                                 {# Fin Formulario eliminar acciones #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal eliminar accion#}*/
/*                         {#Tabla caracteristica#}*/
/*                         <div class="x_panel">                            */
/*                             <div class="x_content">*/
/*                                 <table id="th_acciones" class="table table-striped table-bordered" width="100%">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>Id</th>*/
/*                                             <th>Acci&oacute;n</th>*/
/*                                             <th>Acci&oacute;n</th> */
/*                                         </tr>*/
/*                                     </thead>                                        */
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Tabla caracteristica#}*/
/*                     </div>*/
/*                     {#Fin Panel caracteristica #}*/
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
/*           oTable =  $('#th_acciones').dataTable({                */
/*                 "ajax": "{{ path('thdb_acciones')}}",*/
/*                 "columns": [*/
/*                             { className: "dt-center","width": "5%" },*/
/*                             null,*/
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
/*                 modal.find('.modal-body #descripcion').val('')                */
/* */
/*             });           */
/* */
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de creación*/
/*              *//* */
/*             $( "#frm_agregar_acciones" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('accionAdd') }}",*/
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
/*                   var descripcion = button.data('descripcion') */
/*                   var idaccion = button.data('idaccion') */
/*                   var modal = $(this)*/
/*                   modal.find('.modal-body #descripcion').val(descripcion)*/
/*                   modal.find('.modal-body #idaccion').val(idaccion)*/
/*             });*/
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de actualización*/
/*              *//* */
/*             $( "#frm_actualiza_accion" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('accionMod') }}",*/
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
/*              * este evento el cual llena campo oculto con id de la caracteristica*/
/*              * a elimina*/
/*              *//* */
/*             $('#vm_eliminar').on('show.bs.modal', function (event) {*/
/*                   $("#respuesta_eliminar").html("");*/
/* 		  var button = $(event.relatedTarget) */
/*                   var idaccion = button.data('idaccion') */
/*                   var modal = $(this)*/
/*                   modal.find('.modal-body #idaccion').val(idaccion)*/
/*             });*/
/*             */
/*             */
/*             /***/
/*             * Envía datos al controlador para eliminr datos*/
/*             *//* */
/*             $( "#frm_elimina_caracteristica" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('accionDel') }}",*/
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
