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
        $__internal_521ebfd9f7d766bbf4d8af88d412340114ef1accc5ee4538f7c7774b8c6b1190 = $this->env->getExtension("native_profiler");
        $__internal_521ebfd9f7d766bbf4d8af88d412340114ef1accc5ee4538f7c7774b8c6b1190->enter($__internal_521ebfd9f7d766bbf4d8af88d412340114ef1accc5ee4538f7c7774b8c6b1190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/admin/clasificacion/vw_clasificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_521ebfd9f7d766bbf4d8af88d412340114ef1accc5ee4538f7c7774b8c6b1190->leave($__internal_521ebfd9f7d766bbf4d8af88d412340114ef1accc5ee4538f7c7774b8c6b1190_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21481a4f1f0bd6eedb62213ffc0d0a27b638bd74fb391d65c277eaa6fc24ada0 = $this->env->getExtension("native_profiler");
        $__internal_21481a4f1f0bd6eedb62213ffc0d0a27b638bd74fb391d65c277eaa6fc24ada0->enter($__internal_21481a4f1f0bd6eedb62213ffc0d0a27b638bd74fb391d65c277eaa6fc24ada0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_21481a4f1f0bd6eedb62213ffc0d0a27b638bd74fb391d65c277eaa6fc24ada0->leave($__internal_21481a4f1f0bd6eedb62213ffc0d0a27b638bd74fb391d65c277eaa6fc24ada0_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4bbf1cfe9a59fc4a9a98806a39f5c7efaf1d9336498e56adbb8237748347fda2 = $this->env->getExtension("native_profiler");
        $__internal_4bbf1cfe9a59fc4a9a98806a39f5c7efaf1d9336498e56adbb8237748347fda2->enter($__internal_4bbf1cfe9a59fc4a9a98806a39f5c7efaf1d9336498e56adbb8237748347fda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_4bbf1cfe9a59fc4a9a98806a39f5c7efaf1d9336498e56adbb8237748347fda2->leave($__internal_4bbf1cfe9a59fc4a9a98806a39f5c7efaf1d9336498e56adbb8237748347fda2_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_19464f114b94a42cb23fc7381d30c174be73cfd885874be97379a3d71811b42f = $this->env->getExtension("native_profiler");
        $__internal_19464f114b94a42cb23fc7381d30c174be73cfd885874be97379a3d71811b42f->enter($__internal_19464f114b94a42cb23fc7381d30c174be73cfd885874be97379a3d71811b42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_19464f114b94a42cb23fc7381d30c174be73cfd885874be97379a3d71811b42f->leave($__internal_19464f114b94a42cb23fc7381d30c174be73cfd885874be97379a3d71811b42f_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_b2306a4749483d4d936226646faf8410d6303a37885b7d790b646e467ff525f7 = $this->env->getExtension("native_profiler");
        $__internal_b2306a4749483d4d936226646faf8410d6303a37885b7d790b646e467ff525f7->enter($__internal_b2306a4749483d4d936226646faf8410d6303a37885b7d790b646e467ff525f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Modelo
";
        
        $__internal_b2306a4749483d4d936226646faf8410d6303a37885b7d790b646e467ff525f7->leave($__internal_b2306a4749483d4d936226646faf8410d6303a37885b7d790b646e467ff525f7_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_409f1ff11ec30564f88798b9a345fffd73cb096de8e9e4faa19c57107f5af307 = $this->env->getExtension("native_profiler");
        $__internal_409f1ff11ec30564f88798b9a345fffd73cb096de8e9e4faa19c57107f5af307->enter($__internal_409f1ff11ec30564f88798b9a345fffd73cb096de8e9e4faa19c57107f5af307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_409f1ff11ec30564f88798b9a345fffd73cb096de8e9e4faa19c57107f5af307->leave($__internal_409f1ff11ec30564f88798b9a345fffd73cb096de8e9e4faa19c57107f5af307_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1c3c09feeaa3988ddea5e44f5c8f35f5d018d34a55758cf63522113e63880f3d = $this->env->getExtension("native_profiler");
        $__internal_1c3c09feeaa3988ddea5e44f5c8f35f5d018d34a55758cf63522113e63880f3d->enter($__internal_1c3c09feeaa3988ddea5e44f5c8f35f5d018d34a55758cf63522113e63880f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
                                            <th>Nombres</th>
                                            <th>Desertor</th>
                                            <th><div data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 0, array(), "array"), "descripcion", array()), "html", null, true);
        echo "\">C1</div></th>                                             
                                            <th><div data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 1, array(), "array"), "descripcion", array()), "html", null, true);
        echo "\">C2</div></th> 
                                            <th><div data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 2, array(), "array"), "descripcion", array()), "html", null, true);
        echo "\">C3</div></th> 
                                            <th><div data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 3, array(), "array"), "descripcion", array()), "html", null, true);
        echo "\">C4</div></th> 
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
        
        $__internal_1c3c09feeaa3988ddea5e44f5c8f35f5d018d34a55758cf63522113e63880f3d->leave($__internal_1c3c09feeaa3988ddea5e44f5c8f35f5d018d34a55758cf63522113e63880f3d_prof);

    }

    // line 110
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_5351e3f0e7cd7090fbb8bcbd6298bfa5a110e35b6e7c788f64901fec191e4a9f = $this->env->getExtension("native_profiler");
        $__internal_5351e3f0e7cd7090fbb8bcbd6298bfa5a110e35b6e7c788f64901fec191e4a9f->enter($__internal_5351e3f0e7cd7090fbb8bcbd6298bfa5a110e35b6e7c788f64901fec191e4a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

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
                            { className: \"dt-left\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
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
                  var idclasificacion = button.data('idclasificacion'); 
                  var idestudiante = button.data('idestudiante');
                  var c1 = button.data('c1');
                  var c2 = button.data('c2');
                  var c3 = button.data('c3');
                  var c4 = button.data('c4');
                  var modal = \$(this);
                  modal.find('.modal-body #idclasificacion').val(idclasificacion);
                  modal.find('.modal-body #idestudiante').val(idestudiante);
                  modal.find('.modal-body #c1').val(c1);
                  modal.find('.modal-body #c2').val(c2);
                  modal.find('.modal-body #c3').val(c3);
                  modal.find('.modal-body #c4').val(c4);
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
        // line 196
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
        // line 233
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
        
        $__internal_5351e3f0e7cd7090fbb8bcbd6298bfa5a110e35b6e7c788f64901fec191e4a9f->leave($__internal_5351e3f0e7cd7090fbb8bcbd6298bfa5a110e35b6e7c788f64901fec191e4a9f_prof);

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
        return array (  390 => 233,  350 => 196,  302 => 151,  264 => 116,  255 => 111,  249 => 110,  237 => 103,  234 => 101,  224 => 93,  220 => 92,  216 => 91,  212 => 90,  202 => 82,  200 => 81,  194 => 76,  189 => 75,  180 => 67,  178 => 66,  172 => 61,  167 => 60,  158 => 52,  156 => 51,  149 => 46,  146 => 45,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*                                             <th>Nombres</th>*/
/*                                             <th>Desertor</th>*/
/*                                             <th><div data-toggle="tooltip" data-placement="top" title="{{ caracteristica[0].descripcion }}">C1</div></th>                                             */
/*                                             <th><div data-toggle="tooltip" data-placement="top" title="{{ caracteristica[1].descripcion }}">C2</div></th> */
/*                                             <th><div data-toggle="tooltip" data-placement="top" title="{{ caracteristica[2].descripcion }}">C3</div></th> */
/*                                             <th><div data-toggle="tooltip" data-placement="top" title="{{ caracteristica[3].descripcion }}">C4</div></th> */
/*                                             <th>Acci&oacute;n</th> */
/*                                         </tr>*/
/*                                     </thead>                                        */
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Tabla entrenamiento #}*/
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
/*                             { className: "dt-left" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
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
/*                   var idclasificacion = button.data('idclasificacion'); */
/*                   var idestudiante = button.data('idestudiante');*/
/*                   var c1 = button.data('c1');*/
/*                   var c2 = button.data('c2');*/
/*                   var c3 = button.data('c3');*/
/*                   var c4 = button.data('c4');*/
/*                   var modal = $(this);*/
/*                   modal.find('.modal-body #idclasificacion').val(idclasificacion);*/
/*                   modal.find('.modal-body #idestudiante').val(idestudiante);*/
/*                   modal.find('.modal-body #c1').val(c1);*/
/*                   modal.find('.modal-body #c2').val(c2);*/
/*                   modal.find('.modal-body #c3').val(c3);*/
/*                   modal.find('.modal-body #c4').val(c4);*/
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
