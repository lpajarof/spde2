<?php

/* admin/parametros/parametros.html.twig */
class __TwigTemplate_06aa4a8d9f11103246ee3009e721cdf873e7210fb446ac77f09639af7ff097d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/parametros/parametros.html.twig", 1);
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
        $__internal_d42cf8233da9af6b24e09e252355ba9493ec40656d49349f19ce8c03968c8470 = $this->env->getExtension("native_profiler");
        $__internal_d42cf8233da9af6b24e09e252355ba9493ec40656d49349f19ce8c03968c8470->enter($__internal_d42cf8233da9af6b24e09e252355ba9493ec40656d49349f19ce8c03968c8470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/parametros/parametros.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d42cf8233da9af6b24e09e252355ba9493ec40656d49349f19ce8c03968c8470->leave($__internal_d42cf8233da9af6b24e09e252355ba9493ec40656d49349f19ce8c03968c8470_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fba326f7449df4bfc412787b64795adb6979cb5885f5502716bbbd3c2c38e3d5 = $this->env->getExtension("native_profiler");
        $__internal_fba326f7449df4bfc412787b64795adb6979cb5885f5502716bbbd3c2c38e3d5->enter($__internal_fba326f7449df4bfc412787b64795adb6979cb5885f5502716bbbd3c2c38e3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fba326f7449df4bfc412787b64795adb6979cb5885f5502716bbbd3c2c38e3d5->leave($__internal_fba326f7449df4bfc412787b64795adb6979cb5885f5502716bbbd3c2c38e3d5_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f6c275f1ae3917f30058ff5165f8bd7dfb0cefd8e7d78213b6717cb3b41839b9 = $this->env->getExtension("native_profiler");
        $__internal_f6c275f1ae3917f30058ff5165f8bd7dfb0cefd8e7d78213b6717cb3b41839b9->enter($__internal_f6c275f1ae3917f30058ff5165f8bd7dfb0cefd8e7d78213b6717cb3b41839b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_f6c275f1ae3917f30058ff5165f8bd7dfb0cefd8e7d78213b6717cb3b41839b9->leave($__internal_f6c275f1ae3917f30058ff5165f8bd7dfb0cefd8e7d78213b6717cb3b41839b9_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_51ec43db48209e8a528c3f044825a3925d7526fed985bdef6d31c7f3b723ec5d = $this->env->getExtension("native_profiler");
        $__internal_51ec43db48209e8a528c3f044825a3925d7526fed985bdef6d31c7f3b723ec5d->enter($__internal_51ec43db48209e8a528c3f044825a3925d7526fed985bdef6d31c7f3b723ec5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_51ec43db48209e8a528c3f044825a3925d7526fed985bdef6d31c7f3b723ec5d->leave($__internal_51ec43db48209e8a528c3f044825a3925d7526fed985bdef6d31c7f3b723ec5d_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_90837caef1edd051d40ded201cf6bff63df3f9af889ab237eeb0166a0f847bfa = $this->env->getExtension("native_profiler");
        $__internal_90837caef1edd051d40ded201cf6bff63df3f9af889ab237eeb0166a0f847bfa->enter($__internal_90837caef1edd051d40ded201cf6bff63df3f9af889ab237eeb0166a0f847bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
   Parametros
";
        
        $__internal_90837caef1edd051d40ded201cf6bff63df3f9af889ab237eeb0166a0f847bfa->leave($__internal_90837caef1edd051d40ded201cf6bff63df3f9af889ab237eeb0166a0f847bfa_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_e60a3e383e794945e1c22be27fa4657cf3150c9c7977de3515009af01d170a38 = $this->env->getExtension("native_profiler");
        $__internal_e60a3e383e794945e1c22be27fa4657cf3150c9c7977de3515009af01d170a38->enter($__internal_e60a3e383e794945e1c22be27fa4657cf3150c9c7977de3515009af01d170a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_e60a3e383e794945e1c22be27fa4657cf3150c9c7977de3515009af01d170a38->leave($__internal_e60a3e383e794945e1c22be27fa4657cf3150c9c7977de3515009af01d170a38_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_4412f59c8a4d0cd08b54ce9bba664d1cc2a8761eb79e33ac7741734e4da7f272 = $this->env->getExtension("native_profiler");
        $__internal_4412f59c8a4d0cd08b54ce9bba664d1cc2a8761eb79e33ac7741734e4da7f272->enter($__internal_4412f59c8a4d0cd08b54ce9bba664d1cc2a8761eb79e33ac7741734e4da7f272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
                        <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".vm_agregar\">Agregar</button></p>                         
                        ";
        // line 37
        echo "                        <div class=\"modal fade vm_agregar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Tipo Usuario</h4>
                                </div>
                                ";
        // line 45
        echo "                                <div class=\"modal-body\">                                  
                                    <form id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\" action=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("tipousuariosAdd");
        echo "\" method=\"POST\">
                                        <div class=\"form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"tipoUsuario\">Tipo Usuario <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                <input type=\"text\" id=\"tipoUsuario\" name=\"tipoUsuario\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                            </div>
                                        </div>
                                       
                                        <div class=\"form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"descripcion\">Descripción <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                <input type=\"text\" id=\"descripcion\" name=\"descripcion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                            </div>
                                        </div>
                                      
                                        <div class=\"form-group\">
                                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"submit\" class=\"btn btn-success\">Agregar</button>
                                            </div>
                                        </div>                                      
                                    </form>
                                </div>     
                                ";
        // line 71
        echo "        
                            </div>
                            </div>
                        </div>
                        ";
        // line 76
        echo "                        ";
        // line 77
        echo "                        <div class=\"modal fade\" id=\"vm_actualizar\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Actualizar Tipo Usuario</h4>
                                </div>
                                ";
        // line 85
        echo "                                <div class=\"modal-body\">
                                    <div id=\"datos_ajax\"></div>
                                    <form id=\"frm_actualiza_tipousuario\" data-parsley-validate class=\"form-horizontal form-label-left\">
                                        <div class=\"form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"tipoUsuario\">Tipo Usuario <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                <input type=\"text\" id=\"tipousuario\" name=\"tipousuario\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                                <input type=\"hidden\" class=\"form-control\" id=\"idtipousuario\" name=\"idtipousuario\">
                                            </div>
                                        </div>
                                       
                                        <div class=\"form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"descripcion\">Descripción <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                <input type=\"text\" id=\"descripcion\" name=\"descripcion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                                            </div>
                                        </div>
                                      
                                        <div class=\"form-group\">
                                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"submit\" class=\"btn btn-success\">Agregar</button>
                                            </div>
                                        </div>                                      
                                    </form>
                                </div>     
                                ";
        // line 113
        echo "        
                            </div>
                            </div>
                        </div>
                        ";
        // line 118
        echo "                            ";
        // line 119
        echo "                            <div class=\"x_panel\">                            
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
        // line 133
        echo "                    </div>
                    ";
        // line 135
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_4412f59c8a4d0cd08b54ce9bba664d1cc2a8761eb79e33ac7741734e4da7f272->leave($__internal_4412f59c8a4d0cd08b54ce9bba664d1cc2a8761eb79e33ac7741734e4da7f272_prof);

    }

    // line 142
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_1de0371fab3b1e9e41f00184c834ea2fb1e7fb1090e6cc3a4fd52b5323716ce3 = $this->env->getExtension("native_profiler");
        $__internal_1de0371fab3b1e9e41f00184c834ea2fb1e7fb1090e6cc3a4fd52b5323716ce3->enter($__internal_1de0371fab3b1e9e41f00184c834ea2fb1e7fb1090e6cc3a4fd52b5323716ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 143
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
        var oTable  
        \$(document).ready(function() {
          oTable =  \$('#th_tipoUsuarios').dataTable({                
                \"ajax\": \"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("thdb_tipoUsuarios");
        echo "\",
                \"columns\": [
                            { \"width\": \"20%\" },
                            null,                           
                            { \"width\": \"10%\" }
                          ]
            });
            
            \$('#vm_actualizar').on('show.bs.modal', function (event) {
\t\t  var button = \$(event.relatedTarget) 
                  var tipousuario = button.data('tipousuario') 
                  var descripcion = button.data('descripcion') 
                  var idtipousuario = button.data('idtipousuario')
                  var modal = \$(this)
                  modal.find('.modal-body #tipousuario').val(tipousuario)
                  modal.find('.modal-body #descripcion').val(descripcion)
                  modal.find('.modal-body #idtipousuario').val(idtipousuario)

            });
            
            \$( \"#frm_actualiza_tipousuario\" ).submit(function( event ) {
\t\tvar parametros = \$(this).serialize();
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("tipousuariosMod");
        echo "\",
\t\t\tdata:   parametros,
                                beforeSend: function(objeto){
                                    \$(\"#datos_ajax\").html(\"Mensaje: Cargando...\");
\t\t\t\t},
\t\t\t\tsuccess: function(datos){
                                    \$(\"#datos_ajax\").html(datos);  
                                                                            
                                      oTable.fnReloadAjax();
\t\t\t\t}
\t\t\t});
\t\t  event.preventDefault();
\t\t});
        });
              
  </script>
";
        
        $__internal_1de0371fab3b1e9e41f00184c834ea2fb1e7fb1090e6cc3a4fd52b5323716ce3->leave($__internal_1de0371fab3b1e9e41f00184c834ea2fb1e7fb1090e6cc3a4fd52b5323716ce3_prof);

    }

    public function getTemplateName()
    {
        return "admin/parametros/parametros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 172,  277 => 148,  268 => 143,  262 => 142,  250 => 135,  247 => 133,  232 => 119,  230 => 118,  224 => 113,  194 => 85,  185 => 77,  183 => 76,  177 => 71,  149 => 46,  146 => 45,  137 => 37,  133 => 34,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*    Parametros*/
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
/*                         <p class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".vm_agregar">Agregar</button></p>                         */
/*                         {#Venta modal agregar tipo usuario#}*/
/*                         <div class="modal fade vm_agregar" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Tipo Usuario</h4>*/
/*                                 </div>*/
/*                                 {# Formulario agregar #}*/
/*                                 <div class="modal-body">                                  */
/*                                     <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ path('tipousuariosAdd')}}" method="POST">*/
/*                                         <div class="form-group">*/
/*                                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoUsuario">Tipo Usuario <span class="required">*</span>*/
/*                                             </label>*/
/*                                             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                                 <input type="text" id="tipoUsuario" name="tipoUsuario" required="required" class="form-control col-md-7 col-xs-12">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                        */
/*                                         <div class="form-group">*/
/*                                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripción <span class="required">*</span>*/
/*                                             </label>*/
/*                                             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                                 <input type="text" id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                       */
/*                                         <div class="form-group">*/
/*                                             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                                                 <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>*/
/*                                                 <button type="submit" class="btn btn-success">Agregar</button>*/
/*                                             </div>*/
/*                                         </div>                                      */
/*                                     </form>*/
/*                                 </div>     */
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
/*                                 <div class="modal-body">*/
/*                                     <div id="datos_ajax"></div>*/
/*                                     <form id="frm_actualiza_tipousuario" data-parsley-validate class="form-horizontal form-label-left">*/
/*                                         <div class="form-group">*/
/*                                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoUsuario">Tipo Usuario <span class="required">*</span>*/
/*                                             </label>*/
/*                                             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                                 <input type="text" id="tipousuario" name="tipousuario" required="required" class="form-control col-md-7 col-xs-12">*/
/*                                                 <input type="hidden" class="form-control" id="idtipousuario" name="idtipousuario">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                        */
/*                                         <div class="form-group">*/
/*                                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripción <span class="required">*</span>*/
/*                                             </label>*/
/*                                             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                                 <input type="text" id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                       */
/*                                         <div class="form-group">*/
/*                                             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                                                 <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>*/
/*                                                 <button type="submit" class="btn btn-success">Agregar</button>*/
/*                                             </div>*/
/*                                         </div>                                      */
/*                                     </form>*/
/*                                 </div>     */
/*                                 {# Fin Formulario actualizar #}        */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {# Fin Venta modal agregar tipo usuario#}*/
/*                             {#Tabla tipo de usuario#}*/
/*                             <div class="x_panel">                            */
/*                                 <div class="x_content">*/
/*                                     <table id="th_tipoUsuarios" class="table table-striped table-bordered">*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <th>Tipo de usuario</th>*/
/*                                                 <th>Descripci&oacute;n</th>                                                */
/*                                                 <th>Acci&oacute;n</th>*/
/*                                             </tr>*/
/*                                         </thead>                                        */
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>*/
/*                             {# Fin Tabla tipo de usuario#}*/
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
/*             });*/
/*             */
/*             $('#vm_actualizar').on('show.bs.modal', function (event) {*/
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
/*             */
/*             $( "#frm_actualiza_tipousuario" ).submit(function( event ) {*/
/* 		var parametros = $(this).serialize();*/
/* 		$.ajax({*/
/* 			type: "POST",*/
/* 			url: "{{ path('tipousuariosMod') }}",*/
/* 			data:   parametros,*/
/*                                 beforeSend: function(objeto){*/
/*                                     $("#datos_ajax").html("Mensaje: Cargando...");*/
/* 				},*/
/* 				success: function(datos){*/
/*                                     $("#datos_ajax").html(datos);  */
/*                                                                             */
/*                                       oTable.fnReloadAjax();*/
/* 				}*/
/* 			});*/
/* 		  event.preventDefault();*/
/* 		});*/
/*         });*/
/*               */
/*   </script>*/
/* {% endblock %}*/
/*     */
