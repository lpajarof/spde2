<?php

/* admin/caracteristicas/vw_caracteristicas.html.twig */
class __TwigTemplate_3977267140f05e9e2893069cdfcb310295d75604b8f4fb502addfb80a625f8a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/caracteristicas/vw_caracteristicas.html.twig", 1);
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
        $__internal_e9b41d243c8421725fc9fc7050ba812c1720631d7e38720069319817cd6a8768 = $this->env->getExtension("native_profiler");
        $__internal_e9b41d243c8421725fc9fc7050ba812c1720631d7e38720069319817cd6a8768->enter($__internal_e9b41d243c8421725fc9fc7050ba812c1720631d7e38720069319817cd6a8768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/caracteristicas/vw_caracteristicas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9b41d243c8421725fc9fc7050ba812c1720631d7e38720069319817cd6a8768->leave($__internal_e9b41d243c8421725fc9fc7050ba812c1720631d7e38720069319817cd6a8768_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cd11f4e480aa424e4ffb030ea1375f8d0ae05f8627397c062f35256615788ff = $this->env->getExtension("native_profiler");
        $__internal_8cd11f4e480aa424e4ffb030ea1375f8d0ae05f8627397c062f35256615788ff->enter($__internal_8cd11f4e480aa424e4ffb030ea1375f8d0ae05f8627397c062f35256615788ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8cd11f4e480aa424e4ffb030ea1375f8d0ae05f8627397c062f35256615788ff->leave($__internal_8cd11f4e480aa424e4ffb030ea1375f8d0ae05f8627397c062f35256615788ff_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f7c97ce138933821984d946585bdd21f04e510d88a88f0c4f0f0646cfb03f3e = $this->env->getExtension("native_profiler");
        $__internal_5f7c97ce138933821984d946585bdd21f04e510d88a88f0c4f0f0646cfb03f3e->enter($__internal_5f7c97ce138933821984d946585bdd21f04e510d88a88f0c4f0f0646cfb03f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_5f7c97ce138933821984d946585bdd21f04e510d88a88f0c4f0f0646cfb03f3e->leave($__internal_5f7c97ce138933821984d946585bdd21f04e510d88a88f0c4f0f0646cfb03f3e_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_4a75d48802d2a7f8f2361e6b5f6960993d1aed2ae765e481a0cd0dcc759bfaf7 = $this->env->getExtension("native_profiler");
        $__internal_4a75d48802d2a7f8f2361e6b5f6960993d1aed2ae765e481a0cd0dcc759bfaf7->enter($__internal_4a75d48802d2a7f8f2361e6b5f6960993d1aed2ae765e481a0cd0dcc759bfaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_4a75d48802d2a7f8f2361e6b5f6960993d1aed2ae765e481a0cd0dcc759bfaf7->leave($__internal_4a75d48802d2a7f8f2361e6b5f6960993d1aed2ae765e481a0cd0dcc759bfaf7_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_767c5b6e1af81b8add2e9fc5959d82790adf6a406e5b1f690308ff75e3601b69 = $this->env->getExtension("native_profiler");
        $__internal_767c5b6e1af81b8add2e9fc5959d82790adf6a406e5b1f690308ff75e3601b69->enter($__internal_767c5b6e1af81b8add2e9fc5959d82790adf6a406e5b1f690308ff75e3601b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Modelo
";
        
        $__internal_767c5b6e1af81b8add2e9fc5959d82790adf6a406e5b1f690308ff75e3601b69->leave($__internal_767c5b6e1af81b8add2e9fc5959d82790adf6a406e5b1f690308ff75e3601b69_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_ddb198576db72a73503f3a4cbf9c9794a21d2c96d532645c95bfb366bd418a2d = $this->env->getExtension("native_profiler");
        $__internal_ddb198576db72a73503f3a4cbf9c9794a21d2c96d532645c95bfb366bd418a2d->enter($__internal_ddb198576db72a73503f3a4cbf9c9794a21d2c96d532645c95bfb366bd418a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_ddb198576db72a73503f3a4cbf9c9794a21d2c96d532645c95bfb366bd418a2d->leave($__internal_ddb198576db72a73503f3a4cbf9c9794a21d2c96d532645c95bfb366bd418a2d_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_5780caddf35854597b04321030ea001c3ca89d7459d1bfb558689bcc70fea6e9 = $this->env->getExtension("native_profiler");
        $__internal_5780caddf35854597b04321030ea001c3ca89d7459d1bfb558689bcc70fea6e9->enter($__internal_5780caddf35854597b04321030ea001c3ca89d7459d1bfb558689bcc70fea6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#caracteristicas\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Caracter&iacute;sticas</a>
                    </li>                  
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    ";
        // line 34
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"caracteristicas\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\">
";
        // line 37
        echo "                        ";
        // line 38
        echo "                        <div class=\"modal fade\" id=\"vm_agregar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Caracter&iacute;ticas</h4>
                                </div>
                                ";
        // line 46
        echo "                                ";
        $this->loadTemplate("admin/caracteristicas/fm_agregar_caracteristicas.html.twig", "admin/caracteristicas/vw_caracteristicas.html.twig", 46)->display($context);
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Caracter&iacute;stica</h4>
                                </div>
                                ";
        // line 61
        echo "                                ";
        $this->loadTemplate("admin/caracteristicas/fm_actualizar_caracteristicas.html.twig", "admin/caracteristicas/vw_caracteristicas.html.twig", 61)->display($context);
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Eliminar Caracter&iacute;stica</h4>
                                </div>
                                ";
        // line 76
        echo "                                ";
        $this->loadTemplate("admin/caracteristicas/fm_eliminar_caracteristicas.html.twig", "admin/caracteristicas/vw_caracteristicas.html.twig", 76)->display($context);
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
                                <table id=\"th_caracteristica\" class=\"table table-striped table-bordered\" width=\"100%\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Caracter&iacute;stica</th>
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
        
        $__internal_5780caddf35854597b04321030ea001c3ca89d7459d1bfb558689bcc70fea6e9->leave($__internal_5780caddf35854597b04321030ea001c3ca89d7459d1bfb558689bcc70fea6e9_prof);

    }

    // line 106
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_a93d54daf873176a79b88d63b262baa6bd45081523d5aca3ba811a0354a9496a = $this->env->getExtension("native_profiler");
        $__internal_a93d54daf873176a79b88d63b262baa6bd45081523d5aca3ba811a0354a9496a->enter($__internal_a93d54daf873176a79b88d63b262baa6bd45081523d5aca3ba811a0354a9496a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 107
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
        var oTable  
        \$(document).ready(function() {
          oTable =  \$('#th_caracteristica').dataTable({                
                \"ajax\": \"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("thdb_caracteristica");
        echo "\",
                \"columns\": [
                            { className: \"dt-center\",\"width\": \"5%\" },
                            null,
                            { className: \"dt-center\",\"width\": \"15%\" }
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
            \$( \"#frm_agregar_caracteristicas\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("caracteristicasAdd");
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
                  var idcaracteristica = button.data('idcaracteristica') 
                  var modal = \$(this)
                  modal.find('.modal-body #descripcion').val(descripcion)
                  modal.find('.modal-body #idcaracteristica').val(idcaracteristica)
            });
            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de actualización
             */
            \$( \"#frm_actualiza_caracteristica\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 176
        echo $this->env->getExtension('routing')->getPath("caracteristicasMod");
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
                  var idcaracteristica = button.data('idcaracteristica') 
                  var modal = \$(this)
                  modal.find('.modal-body #idcaracteristica').val(idcaracteristica)
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
        echo $this->env->getExtension('routing')->getPath("caracteristicasDel");
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
        
        $__internal_a93d54daf873176a79b88d63b262baa6bd45081523d5aca3ba811a0354a9496a->leave($__internal_a93d54daf873176a79b88d63b262baa6bd45081523d5aca3ba811a0354a9496a_prof);

    }

    public function getTemplateName()
    {
        return "admin/caracteristicas/vw_caracteristicas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 213,  319 => 176,  279 => 139,  249 => 112,  240 => 107,  234 => 106,  222 => 99,  219 => 97,  204 => 83,  202 => 82,  196 => 77,  191 => 76,  182 => 68,  180 => 67,  174 => 62,  169 => 61,  160 => 53,  158 => 52,  151 => 47,  148 => 46,  139 => 38,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*     Modelo*/
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
/*                     <li role="presentation" class="active"><a href="#caracteristicas" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Caracter&iacute;sticas</a>*/
/*                     </li>                  */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     {# Panel caracterisiticas #}*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="caracteristicas" aria-labelledby="home-tab">*/
/*                         <p class="text-right">*/
/* {#                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vm_agregar">Agregar</button></p>                         #}*/
/*                         {# Venta modal agregar caracteristicas #}*/
/*                         <div class="modal fade" id="vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Caracter&iacute;ticas</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar carateristicas #}*/
/*                                 {% include 'admin/caracteristicas/fm_agregar_caracteristicas.html.twig' %}*/
/*                                 {# Fin Formulario agregar caracterisitica #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal agregar caracterisitica #}*/
/*                         {#Venta modal actualizar caracterisitica #}*/
/*                         <div class="modal fade" id="vm_actualizar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Actualizar Caracter&iacute;stica</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar  caracteristica #}*/
/*                                 {% include 'admin/caracteristicas/fm_actualizar_caracteristicas.html.twig' %} */
/*                                 {# Fin Formulario actualizar caracteristica #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal actualizar caracteristica#}*/
/*                         {#Venta modal eliminar caracterisitica #}*/
/*                         <div class="modal fade" id="vm_eliminar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Eliminar Caracter&iacute;stica</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar  caracteristica #}*/
/*                                 {% include 'admin/caracteristicas/fm_eliminar_caracteristicas.html.twig' %} */
/*                                 {# Fin Formulario actualizar caracteristica #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal eliminar caracteristica#}*/
/*                         {#Tabla caracteristica#}*/
/*                         <div class="x_panel">                            */
/*                             <div class="x_content">*/
/*                                 <table id="th_caracteristica" class="table table-striped table-bordered" width="100%">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>Id</th>*/
/*                                             <th>Caracter&iacute;stica</th>*/
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
/*           oTable =  $('#th_caracteristica').dataTable({                */
/*                 "ajax": "{{ path('thdb_caracteristica')}}",*/
/*                 "columns": [*/
/*                             { className: "dt-center","width": "5%" },*/
/*                             null,*/
/*                             { className: "dt-center","width": "15%" }*/
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
/*             $( "#frm_agregar_caracteristicas" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('caracteristicasAdd') }}",*/
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
/*                   var idcaracteristica = button.data('idcaracteristica') */
/*                   var modal = $(this)*/
/*                   modal.find('.modal-body #descripcion').val(descripcion)*/
/*                   modal.find('.modal-body #idcaracteristica').val(idcaracteristica)*/
/*             });*/
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de actualización*/
/*              *//* */
/*             $( "#frm_actualiza_caracteristica" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('caracteristicasMod') }}",*/
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
/*                   var idcaracteristica = button.data('idcaracteristica') */
/*                   var modal = $(this)*/
/*                   modal.find('.modal-body #idcaracteristica').val(idcaracteristica)*/
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
/* 			url: "{{ path('caracteristicasDel') }}",*/
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
