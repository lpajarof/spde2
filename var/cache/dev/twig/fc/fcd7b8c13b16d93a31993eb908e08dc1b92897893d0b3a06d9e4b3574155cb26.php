<?php

/* /admin/usuarios/vw_usuarios.html.twig */
class __TwigTemplate_e6e94c2215833a6ca4b51a806745f3fd304230cb0da92e6445615d1ab606ac94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "/admin/usuarios/vw_usuarios.html.twig", 1);
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
        $__internal_df652a30c28c630c093175a52586c8f970ca15dfcf09b51f633df0158c37df9a = $this->env->getExtension("native_profiler");
        $__internal_df652a30c28c630c093175a52586c8f970ca15dfcf09b51f633df0158c37df9a->enter($__internal_df652a30c28c630c093175a52586c8f970ca15dfcf09b51f633df0158c37df9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/admin/usuarios/vw_usuarios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df652a30c28c630c093175a52586c8f970ca15dfcf09b51f633df0158c37df9a->leave($__internal_df652a30c28c630c093175a52586c8f970ca15dfcf09b51f633df0158c37df9a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46d2a2a7b62e72187c04519524fd0612edbfd713de2dd5968badb4cb1ccc012c = $this->env->getExtension("native_profiler");
        $__internal_46d2a2a7b62e72187c04519524fd0612edbfd713de2dd5968badb4cb1ccc012c->enter($__internal_46d2a2a7b62e72187c04519524fd0612edbfd713de2dd5968badb4cb1ccc012c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_46d2a2a7b62e72187c04519524fd0612edbfd713de2dd5968badb4cb1ccc012c->leave($__internal_46d2a2a7b62e72187c04519524fd0612edbfd713de2dd5968badb4cb1ccc012c_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d160d1f3117b0a9c04a406ae14d6afe926884eb898221386cfc9ce1cc423528 = $this->env->getExtension("native_profiler");
        $__internal_8d160d1f3117b0a9c04a406ae14d6afe926884eb898221386cfc9ce1cc423528->enter($__internal_8d160d1f3117b0a9c04a406ae14d6afe926884eb898221386cfc9ce1cc423528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_8d160d1f3117b0a9c04a406ae14d6afe926884eb898221386cfc9ce1cc423528->leave($__internal_8d160d1f3117b0a9c04a406ae14d6afe926884eb898221386cfc9ce1cc423528_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_23d62106b1e5406e7ca911a6dea2c0878d04054bf54299eb4b8329f3269f9c41 = $this->env->getExtension("native_profiler");
        $__internal_23d62106b1e5406e7ca911a6dea2c0878d04054bf54299eb4b8329f3269f9c41->enter($__internal_23d62106b1e5406e7ca911a6dea2c0878d04054bf54299eb4b8329f3269f9c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_23d62106b1e5406e7ca911a6dea2c0878d04054bf54299eb4b8329f3269f9c41->leave($__internal_23d62106b1e5406e7ca911a6dea2c0878d04054bf54299eb4b8329f3269f9c41_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_84914344fa588ba5061854854bf67ab41b7f5123cbe4faba67b1376c6b3cbd5e = $this->env->getExtension("native_profiler");
        $__internal_84914344fa588ba5061854854bf67ab41b7f5123cbe4faba67b1376c6b3cbd5e->enter($__internal_84914344fa588ba5061854854bf67ab41b7f5123cbe4faba67b1376c6b3cbd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Configuraci&oacute;n
";
        
        $__internal_84914344fa588ba5061854854bf67ab41b7f5123cbe4faba67b1376c6b3cbd5e->leave($__internal_84914344fa588ba5061854854bf67ab41b7f5123cbe4faba67b1376c6b3cbd5e_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_45683ecc084b347e3745849e9afc0f0d0fc4ccaef986e12fcca9f0c13ebb1bf2 = $this->env->getExtension("native_profiler");
        $__internal_45683ecc084b347e3745849e9afc0f0d0fc4ccaef986e12fcca9f0c13ebb1bf2->enter($__internal_45683ecc084b347e3745849e9afc0f0d0fc4ccaef986e12fcca9f0c13ebb1bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_45683ecc084b347e3745849e9afc0f0d0fc4ccaef986e12fcca9f0c13ebb1bf2->leave($__internal_45683ecc084b347e3745849e9afc0f0d0fc4ccaef986e12fcca9f0c13ebb1bf2_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_290ddee8be38a4c30b7a59cccd48352bd8cd103112685892e29e5d33e291ee37 = $this->env->getExtension("native_profiler");
        $__internal_290ddee8be38a4c30b7a59cccd48352bd8cd103112685892e29e5d33e291ee37->enter($__internal_290ddee8be38a4c30b7a59cccd48352bd8cd103112685892e29e5d33e291ee37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#usuarios\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Usuarios</a>
                    </li>                  
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    ";
        // line 34
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"usuarios\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#vm_agregar\">Agregar</button></p>                         
                        ";
        // line 37
        echo "                        <div class=\"modal fade\" id=\"vm_agregar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Usuario</h4>
                                </div>
                                ";
        // line 45
        echo "                                ";
        echo twig_include($this->env, $context, "admin/usuarios/fm_agregar_usuario.html.twig");
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Usuario</h4>
                                </div>
                                ";
        // line 60
        echo "                                ";
        echo twig_include($this->env, $context, "admin/usuarios/fm_actualizar_usuario.html.twig");
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
                                <table id=\"th_usuarios\" class=\"table table-striped table-bordered\" width=\"100%\">
                                    <thead>
                                        <tr>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Identificacion</th>
                                            <th>E-mail</th>
                                            <th>Usuario</th>
                                            <th>Rol</th>
                                            <th>Acci&oacute;n</th>
                                        </tr>
                                    </thead>                                        
                                </table>
                            </div>
                        </div>
                        ";
        // line 85
        echo "                    </div>
                    ";
        // line 87
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_290ddee8be38a4c30b7a59cccd48352bd8cd103112685892e29e5d33e291ee37->leave($__internal_290ddee8be38a4c30b7a59cccd48352bd8cd103112685892e29e5d33e291ee37_prof);

    }

    // line 94
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_84e6fb3189cb0aeaf760e9464d445dbcd5aa6db954383e3fcd5e32b4514dc7dc = $this->env->getExtension("native_profiler");
        $__internal_84e6fb3189cb0aeaf760e9464d445dbcd5aa6db954383e3fcd5e32b4514dc7dc->enter($__internal_84e6fb3189cb0aeaf760e9464d445dbcd5aa6db954383e3fcd5e32b4514dc7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 95
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
        var oTable  
        \$(document).ready(function() {
          oTable =  \$('#th_usuarios').dataTable({                
                \"ajax\": \"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("thdb_usuarios");
        echo "\",
                \"columns\": [
                            { className: \"dt-left\",\"width\": \"15%\" },
                            { className: \"dt-left\",\"width\": \"15%\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\",\"width\": \"20%\" },
                            
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
                modal.find('.modal-body #nombres').val('')
                modal.find('.modal-body #apellidos').val('')
                modal.find('.modal-body #identificacion').val('')
                modal.find('.modal-body #email').val('')
                modal.find('.modal-body #username').val('')
                modal.find('.modal-body #password').val('')
                modal.find('.modal-body #rol').val('')
                modal.find('.modal-body #isactive').val('')                             
            });           

            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de creación
             */
            \$( \"#frm_agregar_usuario\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("usuarioAdd");
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
                  var iduser = button.data('iduser');
                  var nombres = button.data('nombres');
                  var apellidos = button.data('apellidos');
                  var identificacion = button.data('identificacion');
                  var email = button.data('email');
                  var username = button.data('username');                  
                  var rol = button.data('rol');
                  var isactive = button.data('isactive');
                  var modal = \$(this);
                  modal.find('.modal-body #iduser').val(iduser);
                  modal.find('.modal-body #nombres').val(nombres);
                  modal.find('.modal-body #apellidos').val(apellidos);
                  modal.find('.modal-body #identificacion').val(identificacion);
                  modal.find('.modal-body #email').val(email);
                  modal.find('.modal-body #username').val(username);
                  modal.find('.modal-body #password').val('')
                  modal.find('.modal-body #rol').val(rol);
                  modal.find('.modal-body #isactive').val(isactive);

            });
            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de actualización
             */
            \$( \"#frm_actualizar_usuario\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("usuarioMod");
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
        
        $__internal_84e6fb3189cb0aeaf760e9464d445dbcd5aa6db954383e3fcd5e32b4514dc7dc->leave($__internal_84e6fb3189cb0aeaf760e9464d445dbcd5aa6db954383e3fcd5e32b4514dc7dc_prof);

    }

    public function getTemplateName()
    {
        return "/admin/usuarios/vw_usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 189,  271 => 138,  230 => 100,  221 => 95,  215 => 94,  203 => 87,  200 => 85,  181 => 67,  179 => 66,  173 => 61,  168 => 60,  159 => 52,  157 => 51,  151 => 46,  146 => 45,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*                     <li role="presentation" class="active"><a href="#usuarios" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Usuarios</a>*/
/*                     </li>                  */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     {# Panel usuarios #}*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="usuarios" aria-labelledby="home-tab">*/
/*                         <p class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vm_agregar">Agregar</button></p>                         */
/*                         {# Venta modal agregar  usuario #}*/
/*                         <div class="modal fade" id="vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Usuario</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar usuario #}*/
/*                                 {{ include ('admin/usuarios/fm_agregar_usuario.html.twig') }}*/
/*                                 {# Fin Formulario agregar usuario #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal agregar usuario#}*/
/*                         {#Venta modal actualizar usuario#}*/
/*                         <div class="modal fade" id="vm_actualizar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Actualizar Usuario</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar usuario #}*/
/*                                 {{ include ('admin/usuarios/fm_actualizar_usuario.html.twig') }}*/
/*                                 {# Fin Formulario actualizar usuario #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal actualizar usuario#}*/
/*                         {#Tabla usuario#}*/
/*                         <div class="x_panel">                            */
/*                             <div class="x_content">*/
/*                                 <table id="th_usuarios" class="table table-striped table-bordered" width="100%">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>Nombres</th>*/
/*                                             <th>Apellidos</th>*/
/*                                             <th>Identificacion</th>*/
/*                                             <th>E-mail</th>*/
/*                                             <th>Usuario</th>*/
/*                                             <th>Rol</th>*/
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
/*           oTable =  $('#th_usuarios').dataTable({                */
/*                 "ajax": "{{ path('thdb_usuarios') }}",*/
/*                 "columns": [*/
/*                             { className: "dt-left","width": "15%" },*/
/*                             { className: "dt-left","width": "15%" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center","width": "20%" },*/
/*                             */
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
/*                 modal.find('.modal-body #nombres').val('')*/
/*                 modal.find('.modal-body #apellidos').val('')*/
/*                 modal.find('.modal-body #identificacion').val('')*/
/*                 modal.find('.modal-body #email').val('')*/
/*                 modal.find('.modal-body #username').val('')*/
/*                 modal.find('.modal-body #password').val('')*/
/*                 modal.find('.modal-body #rol').val('')*/
/*                 modal.find('.modal-body #isactive').val('')                             */
/*             });           */
/* */
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de creación*/
/*              *//* */
/*             $( "#frm_agregar_usuario" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('usuarioAdd') }}",*/
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
/*                   var iduser = button.data('iduser');*/
/*                   var nombres = button.data('nombres');*/
/*                   var apellidos = button.data('apellidos');*/
/*                   var identificacion = button.data('identificacion');*/
/*                   var email = button.data('email');*/
/*                   var username = button.data('username');                  */
/*                   var rol = button.data('rol');*/
/*                   var isactive = button.data('isactive');*/
/*                   var modal = $(this);*/
/*                   modal.find('.modal-body #iduser').val(iduser);*/
/*                   modal.find('.modal-body #nombres').val(nombres);*/
/*                   modal.find('.modal-body #apellidos').val(apellidos);*/
/*                   modal.find('.modal-body #identificacion').val(identificacion);*/
/*                   modal.find('.modal-body #email').val(email);*/
/*                   modal.find('.modal-body #username').val(username);*/
/*                   modal.find('.modal-body #password').val('')*/
/*                   modal.find('.modal-body #rol').val(rol);*/
/*                   modal.find('.modal-body #isactive').val(isactive);*/
/* */
/*             });*/
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de actualización*/
/*              *//* */
/*             $( "#frm_actualizar_usuario" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('usuarioMod') }}",*/
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
