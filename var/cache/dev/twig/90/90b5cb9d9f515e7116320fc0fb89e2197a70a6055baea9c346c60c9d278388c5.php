<?php

/* /admin/seguimiento/vw_seguimiento.html.twig */
class __TwigTemplate_f96c6aa99e2cad1599aa2c5243b38dd65322935e7b1677978bbd252f7d81cd04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "/admin/seguimiento/vw_seguimiento.html.twig", 1);
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
        $__internal_fc1bd336b733450804e13435f53d983fb634fb30219e7ce4caad56ba0ea9ad32 = $this->env->getExtension("native_profiler");
        $__internal_fc1bd336b733450804e13435f53d983fb634fb30219e7ce4caad56ba0ea9ad32->enter($__internal_fc1bd336b733450804e13435f53d983fb634fb30219e7ce4caad56ba0ea9ad32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/admin/seguimiento/vw_seguimiento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc1bd336b733450804e13435f53d983fb634fb30219e7ce4caad56ba0ea9ad32->leave($__internal_fc1bd336b733450804e13435f53d983fb634fb30219e7ce4caad56ba0ea9ad32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a91f1b5545226045e7f846dc04d680272580a336fc9b235a42e717efe826026 = $this->env->getExtension("native_profiler");
        $__internal_7a91f1b5545226045e7f846dc04d680272580a336fc9b235a42e717efe826026->enter($__internal_7a91f1b5545226045e7f846dc04d680272580a336fc9b235a42e717efe826026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7a91f1b5545226045e7f846dc04d680272580a336fc9b235a42e717efe826026->leave($__internal_7a91f1b5545226045e7f846dc04d680272580a336fc9b235a42e717efe826026_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bf1008ee15d1e3e3eedbc5a9e7525c811c36d75183ac825874a3e45c7f1c932a = $this->env->getExtension("native_profiler");
        $__internal_bf1008ee15d1e3e3eedbc5a9e7525c811c36d75183ac825874a3e45c7f1c932a->enter($__internal_bf1008ee15d1e3e3eedbc5a9e7525c811c36d75183ac825874a3e45c7f1c932a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_bf1008ee15d1e3e3eedbc5a9e7525c811c36d75183ac825874a3e45c7f1c932a->leave($__internal_bf1008ee15d1e3e3eedbc5a9e7525c811c36d75183ac825874a3e45c7f1c932a_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_8287853f22b7a709bfb3b2bc8f4c725d26370b43ffa5676ab52319650eadd066 = $this->env->getExtension("native_profiler");
        $__internal_8287853f22b7a709bfb3b2bc8f4c725d26370b43ffa5676ab52319650eadd066->enter($__internal_8287853f22b7a709bfb3b2bc8f4c725d26370b43ffa5676ab52319650eadd066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_8287853f22b7a709bfb3b2bc8f4c725d26370b43ffa5676ab52319650eadd066->leave($__internal_8287853f22b7a709bfb3b2bc8f4c725d26370b43ffa5676ab52319650eadd066_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_78f6fc7e9f8de805c8c1237eb0eec4e3de5b7a3be9eb6ed726153687c8c5fc87 = $this->env->getExtension("native_profiler");
        $__internal_78f6fc7e9f8de805c8c1237eb0eec4e3de5b7a3be9eb6ed726153687c8c5fc87->enter($__internal_78f6fc7e9f8de805c8c1237eb0eec4e3de5b7a3be9eb6ed726153687c8c5fc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Seguimiento
";
        
        $__internal_78f6fc7e9f8de805c8c1237eb0eec4e3de5b7a3be9eb6ed726153687c8c5fc87->leave($__internal_78f6fc7e9f8de805c8c1237eb0eec4e3de5b7a3be9eb6ed726153687c8c5fc87_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_db7bfd92bfd5cedcee047bb346dbc460b5f384f09aeec2eecc4c45b35db32608 = $this->env->getExtension("native_profiler");
        $__internal_db7bfd92bfd5cedcee047bb346dbc460b5f384f09aeec2eecc4c45b35db32608->enter($__internal_db7bfd92bfd5cedcee047bb346dbc460b5f384f09aeec2eecc4c45b35db32608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_db7bfd92bfd5cedcee047bb346dbc460b5f384f09aeec2eecc4c45b35db32608->leave($__internal_db7bfd92bfd5cedcee047bb346dbc460b5f384f09aeec2eecc4c45b35db32608_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_fdf0fa74accd2d9db73b725a1b509605c88c9a01ce0fd3e20d5010fb9e6c2c53 = $this->env->getExtension("native_profiler");
        $__internal_fdf0fa74accd2d9db73b725a1b509605c88c9a01ce0fd3e20d5010fb9e6c2c53->enter($__internal_fdf0fa74accd2d9db73b725a1b509605c88c9a01ce0fd3e20d5010fb9e6c2c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#seguimiento\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Seguimiento</a>
                    </li>                  
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    ";
        // line 34
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"seguimiento\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#vm_agregar\">Agregar</button></p>                         
                        ";
        // line 37
        echo "                        <div class=\"modal fade\" id=\"vm_agregar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Seguimiento</h4>
                                </div>
                                ";
        // line 45
        echo "                                ";
        echo twig_include($this->env, $context, "admin/seguimiento/fm_agregar_seguimiento.html.twig");
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Seguimiento</h4>
                                </div>
                                ";
        // line 60
        echo "                                ";
        echo twig_include($this->env, $context, "admin/seguimiento/fm_actualizar_seguimiento.html.twig");
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Eliminar seguimiento</h4>
                                </div>
                                ";
        // line 75
        echo "                                ";
        $this->loadTemplate("admin/seguimiento/fm_eliminar_seguimiento.html.twig", "/admin/seguimiento/vw_seguimiento.html.twig", 75)->display($context);
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
                                <table id=\"th_seguimiento\" class=\"table table-striped table-bordered\" width=\"100%\">
                                    <thead>
                                        <tr>
                                            <th>Estudiante</th>
                                            <th>Seguimiento</th>
                                            <th>Observaciones</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Fin</th>
                                            <th>Estado</th>
                                            <th>Asignado a</th>
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
        
        $__internal_fdf0fa74accd2d9db73b725a1b509605c88c9a01ce0fd3e20d5010fb9e6c2c53->leave($__internal_fdf0fa74accd2d9db73b725a1b509605c88c9a01ce0fd3e20d5010fb9e6c2c53_prof);

    }

    // line 110
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_966554fe61e75f03a11e4facef352ecd0cf88e281cf037de950244f970eae3f3 = $this->env->getExtension("native_profiler");
        $__internal_966554fe61e75f03a11e4facef352ecd0cf88e281cf037de950244f970eae3f3->enter($__internal_966554fe61e75f03a11e4facef352ecd0cf88e281cf037de950244f970eae3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 111
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
        var oTable  
        \$(document).ready(function() {
          oTable =  \$('#th_seguimiento').dataTable({                
                \"ajax\": \"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("thdb_seguimiento");
        echo "\",
                \"columns\": [
                            { className: \"dt-left\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" },
                            { className: \"dt-center\" }
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
                modal.find('.modal-body #idseguimientoestudiante').val('')           
                modal.find('.modal-body #idestudiante').val('')           
                modal.find('.modal-body #idaccion').val('')                
                modal.find('.modal-body #observaciones').val('')                
                modal.find('.modal-body #fechainicio').val('')                
                modal.find('.modal-body #fechafin').val('')                
                modal.find('.modal-body #asignadoa').val('')                
                modal.find('.modal-body #estado').val('')                
            });           

            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de creación
             */
            \$( \"#frm_agregar_seguimiento\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("seguimientoAdd");
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
                  var idseguimientoestudiante = button.data('idseguimientoestudiante'); 
                  var idestudiante = button.data('idestudiante'); 
                  var idaccion = button.data('idaccion'); 
                  var observaciones = button.data('observaciones'); 
                  var fechainicio = button.data('fechainicio'); 
                  var fechafin = button.data('fechafin'); 
                  var asignadoa = button.data('asignadoa'); 
                  var estado = button.data('estado'); 
                  var modal = \$(this);
                  modal.find('.modal-body #idseguimientoestudiante').val(idseguimientoestudiante);
                  modal.find('.modal-body #idestudiante').val(idestudiante);
                  modal.find('.modal-body #idaccion').val(idaccion);
                  modal.find('.modal-body #observaciones').val(observaciones);
                  modal.find('.modal-body #fechainicio').val(fechainicio);
                  modal.find('.modal-body #fechafin').val(fechafin);
                  modal.find('.modal-body #asignadoa').val(asignadoa);
                  modal.find('.modal-body #estado').val(estado);
                                                    
            });
            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de actualización
             */
            \$( \"#frm_actualizar_seguimiento\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 204
        echo $this->env->getExtension('routing')->getPath("seguimientoMod");
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
                  var idseguimientoestudiante = button.data('idseguimientoestudiante') 
                  var modal = \$(this)
                  modal.find('.modal-body #idseguimientoestudiante').val(idseguimientoestudiante)
            });
            
            
            /**
            * Envía datos al controlador para eliminr datos
            */
            \$( \"#frm_elimina_seguimiento\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 241
        echo $this->env->getExtension('routing')->getPath("seguimientoDel");
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
            
            \$('#fechainicio').daterangepicker({
                singleDatePicker: true,
                calender_style: \"picker_1\"
                }, function(start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                }
            );
        
            \$('#fechafin').daterangepicker({
                singleDatePicker: true,
                calender_style: \"picker_1\"
                }, function(start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                }
            );
     });   
  </script>
";
        
        $__internal_966554fe61e75f03a11e4facef352ecd0cf88e281cf037de950244f970eae3f3->leave($__internal_966554fe61e75f03a11e4facef352ecd0cf88e281cf037de950244f970eae3f3_prof);

    }

    public function getTemplateName()
    {
        return "/admin/seguimiento/vw_seguimiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 241,  347 => 204,  294 => 154,  253 => 116,  244 => 111,  238 => 110,  226 => 103,  223 => 101,  203 => 82,  201 => 81,  195 => 76,  190 => 75,  181 => 67,  179 => 66,  173 => 61,  168 => 60,  159 => 52,  157 => 51,  151 => 46,  146 => 45,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*     Seguimiento*/
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
/*                     <li role="presentation" class="active"><a href="#seguimiento" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Seguimiento</a>*/
/*                     </li>                  */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     {# Panel seguimiento #}*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="seguimiento" aria-labelledby="home-tab">*/
/*                         <p class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vm_agregar">Agregar</button></p>                         */
/*                         {# Venta modal agregar seguimiento #}*/
/*                         <div class="modal fade" id="vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Seguimiento</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar seguimiento #}*/
/*                                 {{ include ('admin/seguimiento/fm_agregar_seguimiento.html.twig') }}*/
/*                                 {# Fin Formulario agregar seguimiento #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal agregar seguimiento #}*/
/*                         {#Venta modal actualizar seguimiento #}*/
/*                         <div class="modal fade" id="vm_actualizar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Actualizar Seguimiento</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar seguimiento #}*/
/*                                 {{ include ('admin/seguimiento/fm_actualizar_seguimiento.html.twig') }} */
/*                                 {# Fin Formulario actualizar seguimiento #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal actualizar seguimiento#}*/
/*                         {#Venta modal eliminar seguimiento #}*/
/*                         <div class="modal fade" id="vm_eliminar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Eliminar seguimiento</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar seguimiento #}*/
/*                                 {% include 'admin/seguimiento/fm_eliminar_seguimiento.html.twig' %} */
/*                                 {# Fin Formulario actualizar seguimiento #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal eliminar seguimiento #}*/
/*                         {#Tabla seguimiento #}*/
/*                         <div class="x_panel">                            */
/*                             <div class="x_content">*/
/*                                 <table id="th_seguimiento" class="table table-striped table-bordered" width="100%">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>Estudiante</th>*/
/*                                             <th>Seguimiento</th>*/
/*                                             <th>Observaciones</th>*/
/*                                             <th>Fecha Inicio</th>*/
/*                                             <th>Fecha Fin</th>*/
/*                                             <th>Estado</th>*/
/*                                             <th>Asignado a</th>*/
/*                                             <th>Acci&oacute;n</th> */
/*                                         </tr>*/
/*                                     </thead>                                        */
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Tabla seguimiento #}*/
/*                     </div>*/
/*                     {#Fin Panel seguimiento #}*/
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
/*           oTable =  $('#th_seguimiento').dataTable({                */
/*                 "ajax": "{{ path('thdb_seguimiento')}}",*/
/*                 "columns": [*/
/*                             { className: "dt-left" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" },*/
/*                             { className: "dt-center" }*/
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
/*                 modal.find('.modal-body #idseguimientoestudiante').val('')           */
/*                 modal.find('.modal-body #idestudiante').val('')           */
/*                 modal.find('.modal-body #idaccion').val('')                */
/*                 modal.find('.modal-body #observaciones').val('')                */
/*                 modal.find('.modal-body #fechainicio').val('')                */
/*                 modal.find('.modal-body #fechafin').val('')                */
/*                 modal.find('.modal-body #asignadoa').val('')                */
/*                 modal.find('.modal-body #estado').val('')                */
/*             });           */
/* */
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de creación*/
/*              *//* */
/*             $( "#frm_agregar_seguimiento" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('seguimientoAdd') }}",*/
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
/*                   var idseguimientoestudiante = button.data('idseguimientoestudiante'); */
/*                   var idestudiante = button.data('idestudiante'); */
/*                   var idaccion = button.data('idaccion'); */
/*                   var observaciones = button.data('observaciones'); */
/*                   var fechainicio = button.data('fechainicio'); */
/*                   var fechafin = button.data('fechafin'); */
/*                   var asignadoa = button.data('asignadoa'); */
/*                   var estado = button.data('estado'); */
/*                   var modal = $(this);*/
/*                   modal.find('.modal-body #idseguimientoestudiante').val(idseguimientoestudiante);*/
/*                   modal.find('.modal-body #idestudiante').val(idestudiante);*/
/*                   modal.find('.modal-body #idaccion').val(idaccion);*/
/*                   modal.find('.modal-body #observaciones').val(observaciones);*/
/*                   modal.find('.modal-body #fechainicio').val(fechainicio);*/
/*                   modal.find('.modal-body #fechafin').val(fechafin);*/
/*                   modal.find('.modal-body #asignadoa').val(asignadoa);*/
/*                   modal.find('.modal-body #estado').val(estado);*/
/*                                                     */
/*             });*/
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de actualización*/
/*              *//* */
/*             $( "#frm_actualizar_seguimiento" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('seguimientoMod') }}",*/
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
/*                   var idseguimientoestudiante = button.data('idseguimientoestudiante') */
/*                   var modal = $(this)*/
/*                   modal.find('.modal-body #idseguimientoestudiante').val(idseguimientoestudiante)*/
/*             });*/
/*             */
/*             */
/*             /***/
/*             * Envía datos al controlador para eliminr datos*/
/*             *//* */
/*             $( "#frm_elimina_seguimiento" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('seguimientoDel') }}",*/
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
/*             $('#fechainicio').daterangepicker({*/
/*                 singleDatePicker: true,*/
/*                 calender_style: "picker_1"*/
/*                 }, function(start, end, label) {*/
/*                     console.log(start.toISOString(), end.toISOString(), label);*/
/*                 }*/
/*             );*/
/*         */
/*             $('#fechafin').daterangepicker({*/
/*                 singleDatePicker: true,*/
/*                 calender_style: "picker_1"*/
/*                 }, function(start, end, label) {*/
/*                     console.log(start.toISOString(), end.toISOString(), label);*/
/*                 }*/
/*             );*/
/*      });   */
/*   </script>*/
/* {% endblock %}*/
/*     */
