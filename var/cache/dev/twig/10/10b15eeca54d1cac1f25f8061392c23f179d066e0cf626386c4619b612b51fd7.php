<?php

/* /admin/entrenamiento/vw_entrenamiento.html.twig */
class __TwigTemplate_4d5492295189d6d4859b3f144d473a99019d1b734f1c14001a17dedfd3fe5326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "/admin/entrenamiento/vw_entrenamiento.html.twig", 1);
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
        $__internal_f20f4f8c5402b8138e3abc9d97837a850ff3aed45873cfce910473dd2f7e604f = $this->env->getExtension("native_profiler");
        $__internal_f20f4f8c5402b8138e3abc9d97837a850ff3aed45873cfce910473dd2f7e604f->enter($__internal_f20f4f8c5402b8138e3abc9d97837a850ff3aed45873cfce910473dd2f7e604f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/admin/entrenamiento/vw_entrenamiento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f20f4f8c5402b8138e3abc9d97837a850ff3aed45873cfce910473dd2f7e604f->leave($__internal_f20f4f8c5402b8138e3abc9d97837a850ff3aed45873cfce910473dd2f7e604f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dde68814f7a1b04ff5a042cb4093a639f36e0446cdb064553ce557a019003a5b = $this->env->getExtension("native_profiler");
        $__internal_dde68814f7a1b04ff5a042cb4093a639f36e0446cdb064553ce557a019003a5b->enter($__internal_dde68814f7a1b04ff5a042cb4093a639f36e0446cdb064553ce557a019003a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dde68814f7a1b04ff5a042cb4093a639f36e0446cdb064553ce557a019003a5b->leave($__internal_dde68814f7a1b04ff5a042cb4093a639f36e0446cdb064553ce557a019003a5b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68d80c2a83d68684a30a5fdbefbc6b458b327498539489f2b77a922957efae0f = $this->env->getExtension("native_profiler");
        $__internal_68d80c2a83d68684a30a5fdbefbc6b458b327498539489f2b77a922957efae0f->enter($__internal_68d80c2a83d68684a30a5fdbefbc6b458b327498539489f2b77a922957efae0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_68d80c2a83d68684a30a5fdbefbc6b458b327498539489f2b77a922957efae0f->leave($__internal_68d80c2a83d68684a30a5fdbefbc6b458b327498539489f2b77a922957efae0f_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_f3b7df76614ba4731bfadcdabda7b46997ff4fac55bddf5d96ea12ee674e9da2 = $this->env->getExtension("native_profiler");
        $__internal_f3b7df76614ba4731bfadcdabda7b46997ff4fac55bddf5d96ea12ee674e9da2->enter($__internal_f3b7df76614ba4731bfadcdabda7b46997ff4fac55bddf5d96ea12ee674e9da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_f3b7df76614ba4731bfadcdabda7b46997ff4fac55bddf5d96ea12ee674e9da2->leave($__internal_f3b7df76614ba4731bfadcdabda7b46997ff4fac55bddf5d96ea12ee674e9da2_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_7350ca2075af9fafcd45dde53916da18c89563d18c130ac12cc4c986b15541bc = $this->env->getExtension("native_profiler");
        $__internal_7350ca2075af9fafcd45dde53916da18c89563d18c130ac12cc4c986b15541bc->enter($__internal_7350ca2075af9fafcd45dde53916da18c89563d18c130ac12cc4c986b15541bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Entrenamiento
";
        
        $__internal_7350ca2075af9fafcd45dde53916da18c89563d18c130ac12cc4c986b15541bc->leave($__internal_7350ca2075af9fafcd45dde53916da18c89563d18c130ac12cc4c986b15541bc_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_303a26ff395a6b895e6111bf516f025a959af25473c784eedcdd167cc27f9de5 = $this->env->getExtension("native_profiler");
        $__internal_303a26ff395a6b895e6111bf516f025a959af25473c784eedcdd167cc27f9de5->enter($__internal_303a26ff395a6b895e6111bf516f025a959af25473c784eedcdd167cc27f9de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_303a26ff395a6b895e6111bf516f025a959af25473c784eedcdd167cc27f9de5->leave($__internal_303a26ff395a6b895e6111bf516f025a959af25473c784eedcdd167cc27f9de5_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_d40b60382f58df5fabf830dd310e5f06af715c07b0b4e662696449f1ec29b423 = $this->env->getExtension("native_profiler");
        $__internal_d40b60382f58df5fabf830dd310e5f06af715c07b0b4e662696449f1ec29b423->enter($__internal_d40b60382f58df5fabf830dd310e5f06af715c07b0b4e662696449f1ec29b423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#entrenamiento\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Entrenamiento</a>
                    </li>                  
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    ";
        // line 34
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"entrenamiento\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#vm_agregar\">Agregar</button></p>                         
                        ";
        // line 37
        echo "                        <div class=\"modal fade\" id=\"vm_agregar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Entrenamiento</h4>
                                </div>
                                ";
        // line 45
        echo "                                ";
        echo twig_include($this->env, $context, "admin/entrenamiento/fm_agregar_entrenamiento.html.twig");
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Entrenamiento</h4>
                                </div>
                                ";
        // line 60
        echo "                                ";
        echo twig_include($this->env, $context, "admin/entrenamiento/fm_actualizar_entrenamiento.html.twig", array("caracteristica" => (isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica"))));
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Eliminar Entrenamiento</h4>
                                </div>
                                ";
        // line 75
        echo "                                ";
        $this->loadTemplate("admin/entrenamiento/fm_eliminar_entrenamiento.html.twig", "/admin/entrenamiento/vw_entrenamiento.html.twig", 75)->display($context);
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
                                <table id=\"th_entrenamiento\" class=\"table table-striped table-bordered\" width=\"100%\">
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
        
        $__internal_d40b60382f58df5fabf830dd310e5f06af715c07b0b4e662696449f1ec29b423->leave($__internal_d40b60382f58df5fabf830dd310e5f06af715c07b0b4e662696449f1ec29b423_prof);

    }

    // line 110
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_6dd9947946f071fbe3c14c825c562a8b89d492f51891b832f75c82a2cc1f5b58 = $this->env->getExtension("native_profiler");
        $__internal_6dd9947946f071fbe3c14c825c562a8b89d492f51891b832f75c82a2cc1f5b58->enter($__internal_6dd9947946f071fbe3c14c825c562a8b89d492f51891b832f75c82a2cc1f5b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 111
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
        var oTable  
        \$(document).ready(function() {
          oTable =  \$('#th_entrenamiento').dataTable({                
                \"ajax\": \"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("thdb_entrenamiento");
        echo "\",
                \"columns\": [
                            { className: \"dt-center\",\"width\": \"5%\" },
                            { className: \"dt-left\" },
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
                modal.find('.modal-body #idestudiante').val('')           
                modal.find('.modal-body #c1').val('')           
                modal.find('.modal-body #c2').val('')                
                modal.find('.modal-body #c3').val('')                
                modal.find('.modal-body #c4').val('')                
                modal.find('.modal-body #desertor').val('')                
            });           

            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de creación
             */
            \$( \"#frm_agregar_entrenamiento\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("entrenamientoAdd");
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
                  var identrenamiento = button.data('identrenamiento'); 
                  var idestudiante = button.data('idestudiante'); 
                  var c1 = button.data('c1'); 
                  var c2 = button.data('c2'); 
                  var c3 = button.data('c3'); 
                  var c4 = button.data('c4'); 
                  var desertor = button.data('desertor'); 
                  var modal = \$(this);
                  modal.find('.modal-body #identrenamiento').val(identrenamiento);
                  modal.find('.modal-body #idestudiante').val(idestudiante);
                  modal.find('.modal-body #c1').val(c1);
                  modal.find('.modal-body #c2').val(c2);
                  modal.find('.modal-body #c3').val(c3);
                  modal.find('.modal-body #c4').val(c4);
                  modal.find('.modal-body #desertor').val(desertor);
                                                    
            });
            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de actualización
             */
            \$( \"#frm_actualiza_entrenamiento\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 200
        echo $this->env->getExtension('routing')->getPath("entrenamientoMod");
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
                  var identrenamiento = button.data('identrenamiento') 
                  var modal = \$(this)
                  modal.find('.modal-body #identrenamiento').val(identrenamiento)
            });
            
            
            /**
            * Envía datos al controlador para eliminr datos
            */
            \$( \"#frm_elimina_entrenamiento\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 237
        echo $this->env->getExtension('routing')->getPath("entrenamientoDel");
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
        
        $__internal_6dd9947946f071fbe3c14c825c562a8b89d492f51891b832f75c82a2cc1f5b58->leave($__internal_6dd9947946f071fbe3c14c825c562a8b89d492f51891b832f75c82a2cc1f5b58_prof);

    }

    public function getTemplateName()
    {
        return "/admin/entrenamiento/vw_entrenamiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 237,  355 => 200,  304 => 152,  265 => 116,  256 => 111,  250 => 110,  238 => 103,  235 => 101,  225 => 93,  221 => 92,  217 => 91,  213 => 90,  203 => 82,  201 => 81,  195 => 76,  190 => 75,  181 => 67,  179 => 66,  173 => 61,  168 => 60,  159 => 52,  157 => 51,  151 => 46,  146 => 45,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*     Entrenamiento*/
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
/*                     <li role="presentation" class="active"><a href="#entrenamiento" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Entrenamiento</a>*/
/*                     </li>                  */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     {# Panel entrenamiento #}*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="entrenamiento" aria-labelledby="home-tab">*/
/*                         <p class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vm_agregar">Agregar</button></p>                         */
/*                         {# Venta modal agregar entrenamiento #}*/
/*                         <div class="modal fade" id="vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Entrenamiento</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar entrenamiento #}*/
/*                                 {{ include ('admin/entrenamiento/fm_agregar_entrenamiento.html.twig') }}*/
/*                                 {# Fin Formulario agregar entrenamiento #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal agregar entrenamiento #}*/
/*                         {#Venta modal actualizar entrenamiento #}*/
/*                         <div class="modal fade" id="vm_actualizar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Actualizar Entrenamiento</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar  entrenamiento #}*/
/*                                 {{ include ('admin/entrenamiento/fm_actualizar_entrenamiento.html.twig',{'caracteristica':caracteristica}) }} */
/*                                 {# Fin Formulario actualizar entrenamiento #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal actualizar clasificación#}*/
/*                         {#Venta modal eliminar entrenamiento #}*/
/*                         <div class="modal fade" id="vm_eliminar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Eliminar Entrenamiento</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar  entrenamiento #}*/
/*                                 {% include 'admin/entrenamiento/fm_eliminar_entrenamiento.html.twig' %} */
/*                                 {# Fin Formulario actualizar entrenamiento #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal eliminar entrenamiento #}*/
/*                         {#Tabla entrenamiento #}*/
/*                         <div class="x_panel">                            */
/*                             <div class="x_content">*/
/*                                 <table id="th_entrenamiento" class="table table-striped table-bordered" width="100%">*/
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
/*                     {#Fin Panel entrenamiento #}*/
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
/*           oTable =  $('#th_entrenamiento').dataTable({                */
/*                 "ajax": "{{ path('thdb_entrenamiento')}}",*/
/*                 "columns": [*/
/*                             { className: "dt-center","width": "5%" },*/
/*                             { className: "dt-left" },*/
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
/*                 modal.find('.modal-body #idestudiante').val('')           */
/*                 modal.find('.modal-body #c1').val('')           */
/*                 modal.find('.modal-body #c2').val('')                */
/*                 modal.find('.modal-body #c3').val('')                */
/*                 modal.find('.modal-body #c4').val('')                */
/*                 modal.find('.modal-body #desertor').val('')                */
/*             });           */
/* */
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de creación*/
/*              *//* */
/*             $( "#frm_agregar_entrenamiento" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('entrenamientoAdd') }}",*/
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
/*                   var identrenamiento = button.data('identrenamiento'); */
/*                   var idestudiante = button.data('idestudiante'); */
/*                   var c1 = button.data('c1'); */
/*                   var c2 = button.data('c2'); */
/*                   var c3 = button.data('c3'); */
/*                   var c4 = button.data('c4'); */
/*                   var desertor = button.data('desertor'); */
/*                   var modal = $(this);*/
/*                   modal.find('.modal-body #identrenamiento').val(identrenamiento);*/
/*                   modal.find('.modal-body #idestudiante').val(idestudiante);*/
/*                   modal.find('.modal-body #c1').val(c1);*/
/*                   modal.find('.modal-body #c2').val(c2);*/
/*                   modal.find('.modal-body #c3').val(c3);*/
/*                   modal.find('.modal-body #c4').val(c4);*/
/*                   modal.find('.modal-body #desertor').val(desertor);*/
/*                                                     */
/*             });*/
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de actualización*/
/*              *//* */
/*             $( "#frm_actualiza_entrenamiento" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('entrenamientoMod') }}",*/
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
/*                   var identrenamiento = button.data('identrenamiento') */
/*                   var modal = $(this)*/
/*                   modal.find('.modal-body #identrenamiento').val(identrenamiento)*/
/*             });*/
/*             */
/*             */
/*             /***/
/*             * Envía datos al controlador para eliminr datos*/
/*             *//* */
/*             $( "#frm_elimina_entrenamiento" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('entrenamientoDel') }}",*/
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
