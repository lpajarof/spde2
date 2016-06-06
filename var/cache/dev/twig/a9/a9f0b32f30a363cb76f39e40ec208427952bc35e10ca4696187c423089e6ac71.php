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
        $__internal_fcf92223dee33e63f64892c749a7b45dca588f23e632dac1f57a2d4c043f5232 = $this->env->getExtension("native_profiler");
        $__internal_fcf92223dee33e63f64892c749a7b45dca588f23e632dac1f57a2d4c043f5232->enter($__internal_fcf92223dee33e63f64892c749a7b45dca588f23e632dac1f57a2d4c043f5232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/caracteristicas/vw_caracteristicas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcf92223dee33e63f64892c749a7b45dca588f23e632dac1f57a2d4c043f5232->leave($__internal_fcf92223dee33e63f64892c749a7b45dca588f23e632dac1f57a2d4c043f5232_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f273d20f4390aa43302242ad8ef6b39e9a3bb2da9332facf5d69130887826be = $this->env->getExtension("native_profiler");
        $__internal_4f273d20f4390aa43302242ad8ef6b39e9a3bb2da9332facf5d69130887826be->enter($__internal_4f273d20f4390aa43302242ad8ef6b39e9a3bb2da9332facf5d69130887826be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4f273d20f4390aa43302242ad8ef6b39e9a3bb2da9332facf5d69130887826be->leave($__internal_4f273d20f4390aa43302242ad8ef6b39e9a3bb2da9332facf5d69130887826be_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45cdf7fe1a385b10f831df80a02cdd220442a7412f9d2b23bddc7359b1a65b84 = $this->env->getExtension("native_profiler");
        $__internal_45cdf7fe1a385b10f831df80a02cdd220442a7412f9d2b23bddc7359b1a65b84->enter($__internal_45cdf7fe1a385b10f831df80a02cdd220442a7412f9d2b23bddc7359b1a65b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_45cdf7fe1a385b10f831df80a02cdd220442a7412f9d2b23bddc7359b1a65b84->leave($__internal_45cdf7fe1a385b10f831df80a02cdd220442a7412f9d2b23bddc7359b1a65b84_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_4dea67ca5d130f6a1ca49d7e5e4f468f1c51799b9a69768d7a7285244eb0d0c3 = $this->env->getExtension("native_profiler");
        $__internal_4dea67ca5d130f6a1ca49d7e5e4f468f1c51799b9a69768d7a7285244eb0d0c3->enter($__internal_4dea67ca5d130f6a1ca49d7e5e4f468f1c51799b9a69768d7a7285244eb0d0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_4dea67ca5d130f6a1ca49d7e5e4f468f1c51799b9a69768d7a7285244eb0d0c3->leave($__internal_4dea67ca5d130f6a1ca49d7e5e4f468f1c51799b9a69768d7a7285244eb0d0c3_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_f42f8fb67fd0193b2e83ae125832b6908963246b1f0571e807be5bc862bdd340 = $this->env->getExtension("native_profiler");
        $__internal_f42f8fb67fd0193b2e83ae125832b6908963246b1f0571e807be5bc862bdd340->enter($__internal_f42f8fb67fd0193b2e83ae125832b6908963246b1f0571e807be5bc862bdd340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Configuraci&oacute;n
";
        
        $__internal_f42f8fb67fd0193b2e83ae125832b6908963246b1f0571e807be5bc862bdd340->leave($__internal_f42f8fb67fd0193b2e83ae125832b6908963246b1f0571e807be5bc862bdd340_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_eba3f0d731264c710ba008c7cc3b651772077150bcdb9f7263ac59290b77f156 = $this->env->getExtension("native_profiler");
        $__internal_eba3f0d731264c710ba008c7cc3b651772077150bcdb9f7263ac59290b77f156->enter($__internal_eba3f0d731264c710ba008c7cc3b651772077150bcdb9f7263ac59290b77f156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_eba3f0d731264c710ba008c7cc3b651772077150bcdb9f7263ac59290b77f156->leave($__internal_eba3f0d731264c710ba008c7cc3b651772077150bcdb9f7263ac59290b77f156_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_f151eb60cfa57b300114eba9d512f25d0aef308d8c0b1cc53a66063f5a6dda16 = $this->env->getExtension("native_profiler");
        $__internal_f151eb60cfa57b300114eba9d512f25d0aef308d8c0b1cc53a66063f5a6dda16->enter($__internal_f151eb60cfa57b300114eba9d512f25d0aef308d8c0b1cc53a66063f5a6dda16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_f151eb60cfa57b300114eba9d512f25d0aef308d8c0b1cc53a66063f5a6dda16->leave($__internal_f151eb60cfa57b300114eba9d512f25d0aef308d8c0b1cc53a66063f5a6dda16_prof);

    }

    // line 106
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_3859d8575970390a367f6c4144e6c7058c55df50fd3c016bf9222abffa0782cf = $this->env->getExtension("native_profiler");
        $__internal_3859d8575970390a367f6c4144e6c7058c55df50fd3c016bf9222abffa0782cf->enter($__internal_3859d8575970390a367f6c4144e6c7058c55df50fd3c016bf9222abffa0782cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

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
        
        $__internal_3859d8575970390a367f6c4144e6c7058c55df50fd3c016bf9222abffa0782cf->leave($__internal_3859d8575970390a367f6c4144e6c7058c55df50fd3c016bf9222abffa0782cf_prof);

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
