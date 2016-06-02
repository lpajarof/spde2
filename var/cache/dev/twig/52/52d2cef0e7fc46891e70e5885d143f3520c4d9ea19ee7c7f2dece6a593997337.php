<?php

/* /admin/clasificacion/vw_clasificacion.html.twig */
class __TwigTemplate_53136225a5d6ac400dac3f32bf6fe01d9d1746b3bb6892e8f3114f25adc9c15b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "/admin/clasificacion/vw_clasificacion.html.twig", 1);
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
        $__internal_14958a3d937a25798cadcf793137462bfab8bb689b197c1639a14da36c28f329 = $this->env->getExtension("native_profiler");
        $__internal_14958a3d937a25798cadcf793137462bfab8bb689b197c1639a14da36c28f329->enter($__internal_14958a3d937a25798cadcf793137462bfab8bb689b197c1639a14da36c28f329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/admin/clasificacion/vw_clasificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14958a3d937a25798cadcf793137462bfab8bb689b197c1639a14da36c28f329->leave($__internal_14958a3d937a25798cadcf793137462bfab8bb689b197c1639a14da36c28f329_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_979da4c68ebf1d0835ec2bc3a4eb4ca6970641515b4a17c44a50a6dc9fbaa510 = $this->env->getExtension("native_profiler");
        $__internal_979da4c68ebf1d0835ec2bc3a4eb4ca6970641515b4a17c44a50a6dc9fbaa510->enter($__internal_979da4c68ebf1d0835ec2bc3a4eb4ca6970641515b4a17c44a50a6dc9fbaa510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_979da4c68ebf1d0835ec2bc3a4eb4ca6970641515b4a17c44a50a6dc9fbaa510->leave($__internal_979da4c68ebf1d0835ec2bc3a4eb4ca6970641515b4a17c44a50a6dc9fbaa510_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c87971d2d4716534b7787d685a05a34c5bb71cd4d2e605a02280752dece96d85 = $this->env->getExtension("native_profiler");
        $__internal_c87971d2d4716534b7787d685a05a34c5bb71cd4d2e605a02280752dece96d85->enter($__internal_c87971d2d4716534b7787d685a05a34c5bb71cd4d2e605a02280752dece96d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_c87971d2d4716534b7787d685a05a34c5bb71cd4d2e605a02280752dece96d85->leave($__internal_c87971d2d4716534b7787d685a05a34c5bb71cd4d2e605a02280752dece96d85_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_250d1a5cbb60ae996293a3533b29812bd4d616a30b575544bc71718432f0549b = $this->env->getExtension("native_profiler");
        $__internal_250d1a5cbb60ae996293a3533b29812bd4d616a30b575544bc71718432f0549b->enter($__internal_250d1a5cbb60ae996293a3533b29812bd4d616a30b575544bc71718432f0549b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_250d1a5cbb60ae996293a3533b29812bd4d616a30b575544bc71718432f0549b->leave($__internal_250d1a5cbb60ae996293a3533b29812bd4d616a30b575544bc71718432f0549b_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_b501817766e9a2206a182871d4b58ac0ca6aeddeb3e813b8d8ab606cefb87766 = $this->env->getExtension("native_profiler");
        $__internal_b501817766e9a2206a182871d4b58ac0ca6aeddeb3e813b8d8ab606cefb87766->enter($__internal_b501817766e9a2206a182871d4b58ac0ca6aeddeb3e813b8d8ab606cefb87766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Modelo
";
        
        $__internal_b501817766e9a2206a182871d4b58ac0ca6aeddeb3e813b8d8ab606cefb87766->leave($__internal_b501817766e9a2206a182871d4b58ac0ca6aeddeb3e813b8d8ab606cefb87766_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_518ec94c9c32f2ae7f286ccd07a4e018272accd03d5f37a41207103a1fee46c6 = $this->env->getExtension("native_profiler");
        $__internal_518ec94c9c32f2ae7f286ccd07a4e018272accd03d5f37a41207103a1fee46c6->enter($__internal_518ec94c9c32f2ae7f286ccd07a4e018272accd03d5f37a41207103a1fee46c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_518ec94c9c32f2ae7f286ccd07a4e018272accd03d5f37a41207103a1fee46c6->leave($__internal_518ec94c9c32f2ae7f286ccd07a4e018272accd03d5f37a41207103a1fee46c6_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_c3d69f2ce1528a2bc967edd916babfe8f4984e701423da56696e96f47b158f72 = $this->env->getExtension("native_profiler");
        $__internal_c3d69f2ce1528a2bc967edd916babfe8f4984e701423da56696e96f47b158f72->enter($__internal_c3d69f2ce1528a2bc967edd916babfe8f4984e701423da56696e96f47b158f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#clasificacion\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Clasificaci&oacute;n</a>
                    </li>                  
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    ";
        // line 34
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"clasificacion\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#vm_agregar\">Agregar</button></p>                         
                        ";
        // line 37
        echo "                        <div class=\"modal fade\" id=\"vm_agregar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Clasificaci&oacute;n</h4>
                                </div>
                                ";
        // line 45
        echo "                                ";
        $this->loadTemplate("admin/clasificacion/fm_agregar_clasificacion.html.twig", "/admin/clasificacion/vw_clasificacion.html.twig", 45)->display($context);
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Clasificaci&oacute;n</h4>
                                </div>
                                ";
        // line 60
        echo "                                ";
        $this->loadTemplate("admin/clasificacion/fm_actualizar_clasificacion.html.twig", "/admin/clasificacion/vw_clasificacion.html.twig", 60)->display($context);
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
        echo "                        <div class=\"modal fade\" id=\"vm_eliminar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Eliminar Clasificaci&oacute;n</h4>
                                </div>
                                ";
        // line 75
        echo "                                ";
        $this->loadTemplate("admin/clasificacion/fm_eliminar_clasificacion.html.twig", "/admin/clasificacion/vw_clasificacion.html.twig", 75)->display($context);
        echo " 
                                ";
        // line 76
        echo "        
                            </div>
                            </div>
                        </div>
                        ";
        // line 81
        echo "                        ";
        // line 82
        echo "                        <div class=\"x_panel\">                            
                            <div class=\"x_content\">
                                <table id=\"th_clasificacion\" class=\"table table-striped table-bordered\" width=\"100%\">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>C&oacute;digo</th>
                                            <th>Nombres</th> 
                                            <th>Apellidos</th> 
                                            <th>A&ntilde;o</th> 
                                            <th>Periodo</th> 
                                            <th>Desertor</th> 
                                            <th>Acci&oacute;n</th> 
                                        </tr>
                                    </thead>                                        
                                </table>
                            </div>
                        </div>
                        ";
        // line 101
        echo "                    </div>
                    ";
        // line 103
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_c3d69f2ce1528a2bc967edd916babfe8f4984e701423da56696e96f47b158f72->leave($__internal_c3d69f2ce1528a2bc967edd916babfe8f4984e701423da56696e96f47b158f72_prof);

    }

    // line 110
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_a3a1098b97d2b4f621ffd7cf190d6cac71e3fe3e34a21678abb500951e805a84 = $this->env->getExtension("native_profiler");
        $__internal_a3a1098b97d2b4f621ffd7cf190d6cac71e3fe3e34a21678abb500951e805a84->enter($__internal_a3a1098b97d2b4f621ffd7cf190d6cac71e3fe3e34a21678abb500951e805a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 111
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
        var oTable  
        \$(document).ready(function() {
          oTable =  \$('#th_clasificacion').dataTable({                
                \"ajax\": \"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("thdb_clasificacion");
        echo "\",
                \"columns\": [
                            { className: \"dt-center\",\"width\": \"5%\" },
                            { className: \"dt-center\" },
                            null,
                            null,
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            null
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
                modal.find('.modal-body #codigo').val('')                
                modal.find('.modal-body #anio').val('')                
                modal.find('.modal-body #periodo').val('')                
                modal.find('.modal-body #desertor').val('')                

            });           

            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de creación
             */
            \$( \"#frm_agregar_clasificacion\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("clasificacionAdd");
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
                  var codigo = button.data('codigo'); 
                  var idclasificacion = button.data('idclasificacion');
                  var anio = button.data('anio');
                  var periodo = button.data('periodo');
                  var desertors = button.data('desertors');
                  var desertorn = button.data('desertorn');
                  var modal = \$(this);
                  modal.find('.modal-body #idclasificacion').val(idclasificacion);
                  modal.find('.modal-body #codigo').val(codigo);
                  modal.find('.modal-body #anio').val(anio);
                  modal.find('.modal-body #periodo').val(periodo);
                                   
                  modal.find('.modal-body #desertorn').parent().removeClass(\"checked\");
                  modal.find('.modal-body #desertors').parent().removeClass(\"checked\");
                 
                  if(desertors=='1')
                    modal.find('.modal-body #desertors').parent().addClass(\"checked\");  
                  else
                    modal.find('.modal-body #desertorn').parent().addClass(\"checked\");
                
                 
            });
            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de actualización
             */
            \$( \"#frm_actualiza_clasificacion\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 204
        echo $this->env->getExtension('routing')->getPath("clasificacionMod");
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
             * este evento el cual llena campo oculto con id de la clasificacion
             * a eliminar
             */
            \$('#vm_eliminar').on('show.bs.modal', function (event) {
                  \$(\"#respuesta_eliminar\").html(\"\");
\t\t  var button = \$(event.relatedTarget) 
                  var idclasificacion = button.data('idclasificacion') 
                  var modal = \$(this)
                  modal.find('.modal-body #idclasificacion').val(idclasificacion)
            });
            
            
            /**
            * Envía datos al controlador para eliminr datos
            */
            \$( \"#frm_elimina_clasificacion\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 241
        echo $this->env->getExtension('routing')->getPath("clasificacionDel");
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
        
        $__internal_a3a1098b97d2b4f621ffd7cf190d6cac71e3fe3e34a21678abb500951e805a84->leave($__internal_a3a1098b97d2b4f621ffd7cf190d6cac71e3fe3e34a21678abb500951e805a84_prof);

    }

    public function getTemplateName()
    {
        return "/admin/clasificacion/vw_clasificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 241,  346 => 204,  290 => 151,  252 => 116,  243 => 111,  237 => 110,  225 => 103,  222 => 101,  202 => 82,  200 => 81,  194 => 76,  189 => 75,  180 => 67,  178 => 66,  172 => 61,  167 => 60,  158 => 52,  156 => 51,  149 => 46,  146 => 45,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*                     <li role="presentation" class="active"><a href="#clasificacion" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Clasificaci&oacute;n</a>*/
/*                     </li>                  */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     {# Panel clasificacion #}*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="clasificacion" aria-labelledby="home-tab">*/
/*                         <p class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vm_agregar">Agregar</button></p>                         */
/*                         {# Venta modal agregar clasificacion #}*/
/*                         <div class="modal fade" id="vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Clasificaci&oacute;n</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar clasificacion #}*/
/*                                 {% include 'admin/clasificacion/fm_agregar_clasificacion.html.twig' %}*/
/*                                 {# Fin Formulario agregar clasificacion #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal agregar clasificación #}*/
/*                         {#Venta modal actualizar clasificacion #}*/
/*                         <div class="modal fade" id="vm_actualizar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Actualizar Clasificaci&oacute;n</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar  clasificación #}*/
/*                                 {% include 'admin/clasificacion/fm_actualizar_clasificacion.html.twig' %} */
/*                                 {# Fin Formulario actualizar clasificación #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal actualizar clasificación#}*/
/*                         {#Venta modal eliminar clasificación #}*/
/*                         <div class="modal fade" id="vm_eliminar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Eliminar Clasificaci&oacute;n</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar  clasificación #}*/
/*                                 {% include 'admin/clasificacion/fm_eliminar_clasificacion.html.twig' %} */
/*                                 {# Fin Formulario actualizar clasificación #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal eliminar clasificación#}*/
/*                         {#Tabla clasificación#}*/
/*                         <div class="x_panel">                            */
/*                             <div class="x_content">*/
/*                                 <table id="th_clasificacion" class="table table-striped table-bordered" width="100%">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>Id</th>*/
/*                                             <th>C&oacute;digo</th>*/
/*                                             <th>Nombres</th> */
/*                                             <th>Apellidos</th> */
/*                                             <th>A&ntilde;o</th> */
/*                                             <th>Periodo</th> */
/*                                             <th>Desertor</th> */
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
/*           oTable =  $('#th_clasificacion').dataTable({                */
/*                 "ajax": "{{ path('thdb_clasificacion')}}",*/
/*                 "columns": [*/
/*                             { className: "dt-center","width": "5%" },*/
/*                             { className: "dt-center" },*/
/*                             null,*/
/*                             null,*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             null*/
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
/*                 modal.find('.modal-body #codigo').val('')                */
/*                 modal.find('.modal-body #anio').val('')                */
/*                 modal.find('.modal-body #periodo').val('')                */
/*                 modal.find('.modal-body #desertor').val('')                */
/* */
/*             });           */
/* */
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de creación*/
/*              *//* */
/*             $( "#frm_agregar_clasificacion" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('clasificacionAdd') }}",*/
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
/* 		  var button = $(event.relatedTarget); */
/*                   var codigo = button.data('codigo'); */
/*                   var idclasificacion = button.data('idclasificacion');*/
/*                   var anio = button.data('anio');*/
/*                   var periodo = button.data('periodo');*/
/*                   var desertors = button.data('desertors');*/
/*                   var desertorn = button.data('desertorn');*/
/*                   var modal = $(this);*/
/*                   modal.find('.modal-body #idclasificacion').val(idclasificacion);*/
/*                   modal.find('.modal-body #codigo').val(codigo);*/
/*                   modal.find('.modal-body #anio').val(anio);*/
/*                   modal.find('.modal-body #periodo').val(periodo);*/
/*                                    */
/*                   modal.find('.modal-body #desertorn').parent().removeClass("checked");*/
/*                   modal.find('.modal-body #desertors').parent().removeClass("checked");*/
/*                  */
/*                   if(desertors=='1')*/
/*                     modal.find('.modal-body #desertors').parent().addClass("checked");  */
/*                   else*/
/*                     modal.find('.modal-body #desertorn').parent().addClass("checked");*/
/*                 */
/*                  */
/*             });*/
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de actualización*/
/*              *//* */
/*             $( "#frm_actualiza_clasificacion" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('clasificacionMod') }}",*/
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
/*              * este evento el cual llena campo oculto con id de la clasificacion*/
/*              * a eliminar*/
/*              *//* */
/*             $('#vm_eliminar').on('show.bs.modal', function (event) {*/
/*                   $("#respuesta_eliminar").html("");*/
/* 		  var button = $(event.relatedTarget) */
/*                   var idclasificacion = button.data('idclasificacion') */
/*                   var modal = $(this)*/
/*                   modal.find('.modal-body #idclasificacion').val(idclasificacion)*/
/*             });*/
/*             */
/*             */
/*             /***/
/*             * Envía datos al controlador para eliminr datos*/
/*             *//* */
/*             $( "#frm_elimina_clasificacion" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('clasificacionDel') }}",*/
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
