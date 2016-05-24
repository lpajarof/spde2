<?php

/* admin/programas/vw_programas.html.twig */
class __TwigTemplate_da9c71e6c6dec4455172b918c46a3bb3819d26eb40d2632ca9ca76a96b2d20ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/programas/vw_programas.html.twig", 1);
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
        $__internal_44bcfc830aeb4cf2a4e446512bdd0f258510563640c7b2411ddaba4b55ea2842 = $this->env->getExtension("native_profiler");
        $__internal_44bcfc830aeb4cf2a4e446512bdd0f258510563640c7b2411ddaba4b55ea2842->enter($__internal_44bcfc830aeb4cf2a4e446512bdd0f258510563640c7b2411ddaba4b55ea2842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/programas/vw_programas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44bcfc830aeb4cf2a4e446512bdd0f258510563640c7b2411ddaba4b55ea2842->leave($__internal_44bcfc830aeb4cf2a4e446512bdd0f258510563640c7b2411ddaba4b55ea2842_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e63889e4541cd9e87c92c6d901a743efb4b7a25cadaf22eababe9c62967aca2 = $this->env->getExtension("native_profiler");
        $__internal_3e63889e4541cd9e87c92c6d901a743efb4b7a25cadaf22eababe9c62967aca2->enter($__internal_3e63889e4541cd9e87c92c6d901a743efb4b7a25cadaf22eababe9c62967aca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3e63889e4541cd9e87c92c6d901a743efb4b7a25cadaf22eababe9c62967aca2->leave($__internal_3e63889e4541cd9e87c92c6d901a743efb4b7a25cadaf22eababe9c62967aca2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9788fb98beaa26ef38c94100c7700b2ff983aeb4199ceecc2c5b59ddce083f11 = $this->env->getExtension("native_profiler");
        $__internal_9788fb98beaa26ef38c94100c7700b2ff983aeb4199ceecc2c5b59ddce083f11->enter($__internal_9788fb98beaa26ef38c94100c7700b2ff983aeb4199ceecc2c5b59ddce083f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_9788fb98beaa26ef38c94100c7700b2ff983aeb4199ceecc2c5b59ddce083f11->leave($__internal_9788fb98beaa26ef38c94100c7700b2ff983aeb4199ceecc2c5b59ddce083f11_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_e665e1909969a05580674c689a98fc48e94a788dfbdd8069e3c6e15375c742c6 = $this->env->getExtension("native_profiler");
        $__internal_e665e1909969a05580674c689a98fc48e94a788dfbdd8069e3c6e15375c742c6->enter($__internal_e665e1909969a05580674c689a98fc48e94a788dfbdd8069e3c6e15375c742c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_e665e1909969a05580674c689a98fc48e94a788dfbdd8069e3c6e15375c742c6->leave($__internal_e665e1909969a05580674c689a98fc48e94a788dfbdd8069e3c6e15375c742c6_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_70cdcff30692e189e0505c11e5012ce79a3ffb5f8e2bee1bfb1887538cfb9950 = $this->env->getExtension("native_profiler");
        $__internal_70cdcff30692e189e0505c11e5012ce79a3ffb5f8e2bee1bfb1887538cfb9950->enter($__internal_70cdcff30692e189e0505c11e5012ce79a3ffb5f8e2bee1bfb1887538cfb9950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
    Configuraci&oacute;n
";
        
        $__internal_70cdcff30692e189e0505c11e5012ce79a3ffb5f8e2bee1bfb1887538cfb9950->leave($__internal_70cdcff30692e189e0505c11e5012ce79a3ffb5f8e2bee1bfb1887538cfb9950_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_61cb621db53cf1cfb9bac7c77fb46f6c4ef06797f9c03db44972b81dc263bbe8 = $this->env->getExtension("native_profiler");
        $__internal_61cb621db53cf1cfb9bac7c77fb46f6c4ef06797f9c03db44972b81dc263bbe8->enter($__internal_61cb621db53cf1cfb9bac7c77fb46f6c4ef06797f9c03db44972b81dc263bbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_61cb621db53cf1cfb9bac7c77fb46f6c4ef06797f9c03db44972b81dc263bbe8->leave($__internal_61cb621db53cf1cfb9bac7c77fb46f6c4ef06797f9c03db44972b81dc263bbe8_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_fe499729d2ee2c04dab084cbf9b5c629fea69510612ee0bfaf1d0368c480a030 = $this->env->getExtension("native_profiler");
        $__internal_fe499729d2ee2c04dab084cbf9b5c629fea69510612ee0bfaf1d0368c480a030->enter($__internal_fe499729d2ee2c04dab084cbf9b5c629fea69510612ee0bfaf1d0368c480a030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#programas\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Programas</a>
                    </li>                  
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    ";
        // line 34
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"programas\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#vm_agregar\">Agregar</button></p>                         
                        ";
        // line 37
        echo "                        <div class=\"modal fade\" id=\"vm_agregar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Programas</h4>
                                </div>
                                ";
        // line 45
        echo "                                ";
        $this->loadTemplate("admin/programas/fm_agregar_programas.html.twig", "admin/programas/vw_programas.html.twig", 45)->display($context);
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
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Programas</h4>
                                </div>
                                ";
        // line 60
        echo "                                ";
        $this->loadTemplate("admin/programas/fm_actualizar_programas.html.twig", "admin/programas/vw_programas.html.twig", 60)->display($context);
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
                                <table id=\"th_programas\" class=\"table table-striped table-bordered\">
                                    <thead>
                                        <tr>
                                            <th>C&oacute;digo</th>
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
        
        $__internal_fe499729d2ee2c04dab084cbf9b5c629fea69510612ee0bfaf1d0368c480a030->leave($__internal_fe499729d2ee2c04dab084cbf9b5c629fea69510612ee0bfaf1d0368c480a030_prof);

    }

    // line 90
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_8eaa159f197f4a695bdb5e77309711ff8523a7dfc861b763e73fb9e82e952485 = $this->env->getExtension("native_profiler");
        $__internal_8eaa159f197f4a695bdb5e77309711ff8523a7dfc861b763e73fb9e82e952485->enter($__internal_8eaa159f197f4a695bdb5e77309711ff8523a7dfc861b763e73fb9e82e952485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 91
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
        var oTable  
        \$(document).ready(function() {
          oTable =  \$('#th_programas').dataTable({                
                \"ajax\": \"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("thdb_programas");
        echo "\",
                \"columns\": [
                            { \"width\": \"20%\" },
                            null,                           
                            { \"width\": \"10%\" }
                          ]
            });          
            /*
             * Cuando se activa ventana modal para agregar, se ejecuta
             * este evento el cual coloca en blsnco todos los campos del
             * formulario
             */
            \$('#vm_agregar').on('show.bs.modal', function (event) {
                \$(\"#respuesta_agregar\").html(\"\");
\t\tvar modal = \$(this)
                modal.find('.modal-body #codigo').val('')
                modal.find('.modal-body #descripcion').val('')                

            });           

            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de creación
             */
            \$( \"#frm_agregar_programas\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("programasAdd");
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
                  var codigo = button.data('codigo') 
                  var descripcion = button.data('descripcion') 
                  var idprograma = button.data('idprograma')
                  var modal = \$(this)
                  modal.find('.modal-body #codigo').val(codigo)
                  modal.find('.modal-body #descripcion').val(descripcion)
                  modal.find('.modal-body #idprograma').val(idprograma)

            });
            /**
             * Envia datos del formulario a controlador que se encarga de 
             * realizar la operación de actualización
             */
            \$( \"#frm_actualiza_programas\" ).submit(function( event ) {\t\t
                var parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("programasMod");
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
        
        $__internal_8eaa159f197f4a695bdb5e77309711ff8523a7dfc861b763e73fb9e82e952485->leave($__internal_8eaa159f197f4a695bdb5e77309711ff8523a7dfc861b763e73fb9e82e952485_prof);

    }

    public function getTemplateName()
    {
        return "admin/programas/vw_programas.html.twig";
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
/*                     <li role="presentation" class="active"><a href="#programas" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Programas</a>*/
/*                     </li>                  */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     {# Panel tipo programas #}*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="programas" aria-labelledby="home-tab">*/
/*                         <p class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vm_agregar">Agregar</button></p>                         */
/*                         {# Venta modal agregar tipo usuario #}*/
/*                         <div class="modal fade" id="vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Programas</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar programas #}*/
/*                                 {% include 'admin/programas/fm_agregar_programas.html.twig' %}*/
/*                                 {# Fin Formulario agregar programas #}        */
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
/*                                         <h4 class="modal-title" id="myModalLabel">Actualizar Programas</h4>*/
/*                                 </div>*/
/*                                 {# Formulario actualizar #}*/
/*                                 {% include 'admin/programas/fm_actualizar_programas.html.twig' %} */
/*                                 {# Fin Formulario actualizar #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal actualizar tipo usuario#}*/
/*                         {#Tabla tipo de usuario#}*/
/*                         <div class="x_panel">                            */
/*                             <div class="x_content">*/
/*                                 <table id="th_programas" class="table table-striped table-bordered">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>C&oacute;digo</th>*/
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
/*           oTable =  $('#th_programas').dataTable({                */
/*                 "ajax": "{{ path('thdb_programas') }}",*/
/*                 "columns": [*/
/*                             { "width": "20%" },*/
/*                             null,                           */
/*                             { "width": "10%" }*/
/*                           ]*/
/*             });          */
/*             /**/
/*              * Cuando se activa ventana modal para agregar, se ejecuta*/
/*              * este evento el cual coloca en blsnco todos los campos del*/
/*              * formulario*/
/*              *//* */
/*             $('#vm_agregar').on('show.bs.modal', function (event) {*/
/*                 $("#respuesta_agregar").html("");*/
/* 		var modal = $(this)*/
/*                 modal.find('.modal-body #codigo').val('')*/
/*                 modal.find('.modal-body #descripcion').val('')                */
/* */
/*             });           */
/* */
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de creación*/
/*              *//* */
/*             $( "#frm_agregar_programas" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('programasAdd') }}",*/
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
/*                   var codigo = button.data('codigo') */
/*                   var descripcion = button.data('descripcion') */
/*                   var idprograma = button.data('idprograma')*/
/*                   var modal = $(this)*/
/*                   modal.find('.modal-body #codigo').val(codigo)*/
/*                   modal.find('.modal-body #descripcion').val(descripcion)*/
/*                   modal.find('.modal-body #idprograma').val(idprograma)*/
/* */
/*             });*/
/*             /***/
/*              * Envia datos del formulario a controlador que se encarga de */
/*              * realizar la operación de actualización*/
/*              *//* */
/*             $( "#frm_actualiza_programas" ).submit(function( event ) {		*/
/*                 var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('programasMod') }}",*/
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
