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
        $__internal_9f6a99ff290cc585a6d941b2946b57028ac1807394a337e024fb3f2dd33bbf40 = $this->env->getExtension("native_profiler");
        $__internal_9f6a99ff290cc585a6d941b2946b57028ac1807394a337e024fb3f2dd33bbf40->enter($__internal_9f6a99ff290cc585a6d941b2946b57028ac1807394a337e024fb3f2dd33bbf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/parametros/parametros.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f6a99ff290cc585a6d941b2946b57028ac1807394a337e024fb3f2dd33bbf40->leave($__internal_9f6a99ff290cc585a6d941b2946b57028ac1807394a337e024fb3f2dd33bbf40_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c73f3afd648f80b818da927255d4085e1db2cbfada144ce1e10da996f11c904 = $this->env->getExtension("native_profiler");
        $__internal_7c73f3afd648f80b818da927255d4085e1db2cbfada144ce1e10da996f11c904->enter($__internal_7c73f3afd648f80b818da927255d4085e1db2cbfada144ce1e10da996f11c904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7c73f3afd648f80b818da927255d4085e1db2cbfada144ce1e10da996f11c904->leave($__internal_7c73f3afd648f80b818da927255d4085e1db2cbfada144ce1e10da996f11c904_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f5265bba34a792967022273726c956a90f8f6610c6f962b311b8adad03e00287 = $this->env->getExtension("native_profiler");
        $__internal_f5265bba34a792967022273726c956a90f8f6610c6f962b311b8adad03e00287->enter($__internal_f5265bba34a792967022273726c956a90f8f6610c6f962b311b8adad03e00287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "    
";
        
        $__internal_f5265bba34a792967022273726c956a90f8f6610c6f962b311b8adad03e00287->leave($__internal_f5265bba34a792967022273726c956a90f8f6610c6f962b311b8adad03e00287_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_43afc66cc3c8267b09145ff93d962a6bc9d62f42c3848464d355d5a9304a8ded = $this->env->getExtension("native_profiler");
        $__internal_43afc66cc3c8267b09145ff93d962a6bc9d62f42c3848464d355d5a9304a8ded->enter($__internal_43afc66cc3c8267b09145ff93d962a6bc9d62f42c3848464d355d5a9304a8ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_43afc66cc3c8267b09145ff93d962a6bc9d62f42c3848464d355d5a9304a8ded->leave($__internal_43afc66cc3c8267b09145ff93d962a6bc9d62f42c3848464d355d5a9304a8ded_prof);

    }

    // line 15
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_c3a5aceabd6651d0db250004d9760f584d7a3f27ef456c0cb8c2fe30213b378c = $this->env->getExtension("native_profiler");
        $__internal_c3a5aceabd6651d0db250004d9760f584d7a3f27ef456c0cb8c2fe30213b378c->enter($__internal_c3a5aceabd6651d0db250004d9760f584d7a3f27ef456c0cb8c2fe30213b378c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo " 
   Parametros
";
        
        $__internal_c3a5aceabd6651d0db250004d9760f584d7a3f27ef456c0cb8c2fe30213b378c->leave($__internal_c3a5aceabd6651d0db250004d9760f584d7a3f27ef456c0cb8c2fe30213b378c_prof);

    }

    // line 19
    public function block_sub_titulo($context, array $blocks = array())
    {
        $__internal_1c6e8c897df9b9c58e3d6377eeaa47bc1c6098ee9905c5c0e03dd4e80391bfa3 = $this->env->getExtension("native_profiler");
        $__internal_1c6e8c897df9b9c58e3d6377eeaa47bc1c6098ee9905c5c0e03dd4e80391bfa3->enter($__internal_1c6e8c897df9b9c58e3d6377eeaa47bc1c6098ee9905c5c0e03dd4e80391bfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_titulo"));

        echo " 
    
";
        
        $__internal_1c6e8c897df9b9c58e3d6377eeaa47bc1c6098ee9905c5c0e03dd4e80391bfa3->leave($__internal_1c6e8c897df9b9c58e3d6377eeaa47bc1c6098ee9905c5c0e03dd4e80391bfa3_prof);

    }

    // line 23
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ca7f812087d980ddb8b20777f0c86515df22ba0e3e5683a64ab867652294fa86 = $this->env->getExtension("native_profiler");
        $__internal_ca7f812087d980ddb8b20777f0c86515df22ba0e3e5683a64ab867652294fa86->enter($__internal_ca7f812087d980ddb8b20777f0c86515df22ba0e3e5683a64ab867652294fa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        echo "   
<div class=\"col-md-12 col-sm-6 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_content\">
            <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
                <ul id=\"myTab\" class=\"nav nav-tabs bar_tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#tipoUsuarios\" id=\"home-tab\" role=\"tab\" data-toggle=\"tab\" aria-expanded=\"true\">Tipo de Usuarios</a>
                    </li>
                    <li role=\"presentation\" class=\"\"><a href=\"#tab_content2\" role=\"tab\" id=\"profile-tab\" data-toggle=\"tab\" aria-expanded=\"false\">Tipo de Identificación</a>
                    </li>                    
                </ul>
                <div id=\"myTabContent\" class=\"tab-content\">
                    ";
        // line 36
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tipoUsuarios\" aria-labelledby=\"home-tab\">
                        <p class=\"text-right\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-lg\">Agregar</button></p>                         
                        <div class=\"modal fade bs-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                            <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">Agregar Tipo Usuario</h4>
                                </div>
                                <div class=\"modal-body\">                                  
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
                            </div>
                            </div>
                        </div>
                            ";
        // line 75
        echo "                            <div class=\"x_panel\">                            
                                <div class=\"x_content\">
                                    <table id=\"th_tipoUsuarios\" class=\"table table-striped table-bordered\">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Tipo de Usuario</th>                                                
                                            </tr>
                                        </thead>                                        
                                    </table>
                                </div>
                            </div>
                            ";
        // line 88
        echo "                    </div>
                    ";
        // line 90
        echo "                    
                    ";
        // line 92
        echo "                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content2\" aria-labelledby=\"profile-tab\">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                          booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content3\" aria-labelledby=\"profile-tab\">
                        <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                          booth letterpress, commodo enim craft beer mlkshk </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_ca7f812087d980ddb8b20777f0c86515df22ba0e3e5683a64ab867652294fa86->leave($__internal_ca7f812087d980ddb8b20777f0c86515df22ba0e3e5683a64ab867652294fa86_prof);

    }

    // line 107
    public function block_js_footer($context, array $blocks = array())
    {
        $__internal_f6fb9ba304a9d233e5c996e9a36bf303726b16e7cfc83a61f9b4e5c8456b67d4 = $this->env->getExtension("native_profiler");
        $__internal_f6fb9ba304a9d233e5c996e9a36bf303726b16e7cfc83a61f9b4e5c8456b67d4->enter($__internal_f6fb9ba304a9d233e5c996e9a36bf303726b16e7cfc83a61f9b4e5c8456b67d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_footer"));

        // line 108
        echo "    ";
        $this->displayParentBlock("js_footer", $context, $blocks);
        echo "   
     <script type=\"text/javascript\">
          \$(document).ready(function() {
            \$('#th_tipoUsuarios').dataTable({                
                \"ajax\": \"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("thdb_tipoUsuarios");
        echo "\"
            });            
          });          
  </script>
";
        
        $__internal_f6fb9ba304a9d233e5c996e9a36bf303726b16e7cfc83a61f9b4e5c8456b67d4->leave($__internal_f6fb9ba304a9d233e5c996e9a36bf303726b16e7cfc83a61f9b4e5c8456b67d4_prof);

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
        return array (  232 => 112,  224 => 108,  218 => 107,  198 => 92,  195 => 90,  192 => 88,  178 => 75,  147 => 46,  135 => 36,  116 => 23,  102 => 19,  88 => 15,  78 => 12,  72 => 11,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/*                     </li>*/
/*                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Tipo de Identificación</a>*/
/*                     </li>                    */
/*                 </ul>*/
/*                 <div id="myTabContent" class="tab-content">*/
/*                     {#Panel tipo usuarios #}*/
/*                     <div role="tabpanel" class="tab-pane fade active in" id="tipoUsuarios" aria-labelledby="home-tab">*/
/*                         <p class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Agregar</button></p>                         */
/*                         <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">*/
/*                             <div class="modal-dialog modal-lg">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">Agregar Tipo Usuario</h4>*/
/*                                 </div>*/
/*                                 <div class="modal-body">                                  */
/*                                     <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ path('tipousuariosAdd')}}" method="POST">*/
/*                                         <div class="form-group">*/
/*                                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoUsuario">Tipo Usuario <span class="required">*</span>*/
/*                                             </label>*/
/*                                             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                                 <input type="text" id="tipoUsuario" name="tipoUsuario" required="required" class="form-control col-md-7 col-xs-12">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         */
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
/*                                 </div>                                */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                             {#Tabla#}*/
/*                             <div class="x_panel">                            */
/*                                 <div class="x_content">*/
/*                                     <table id="th_tipoUsuarios" class="table table-striped table-bordered">*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <th>Id</th>*/
/*                                                 <th>Tipo de Usuario</th>                                                */
/*                                             </tr>*/
/*                                         </thead>                                        */
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>*/
/*                             {#Fin Tabla#}*/
/*                     </div>*/
/*                     {#Fin Panel tipo usuarios #}*/
/*                     */
/*                     {#Panel tipo usuarios #}*/
/*                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">*/
/*                         <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo*/
/*                           booth letterpress, commodo enim craft beer mlkshk aliquip</p>*/
/*                     </div>*/
/*                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">*/
/*                         <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo*/
/*                           booth letterpress, commodo enim craft beer mlkshk </p>*/
/*                     </div>*/
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
/*           $(document).ready(function() {*/
/*             $('#th_tipoUsuarios').dataTable({                */
/*                 "ajax": "{{ path('thdb_tipoUsuarios') }}"*/
/*             });            */
/*           });          */
/*   </script>*/
/* {% endblock %}*/
/*     */
