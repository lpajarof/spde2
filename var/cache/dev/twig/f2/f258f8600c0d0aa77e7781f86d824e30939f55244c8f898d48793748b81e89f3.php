<?php

/* admin/tipousuario/fm_agreagar_tipousuario.html.twig */
class __TwigTemplate_cf54b4d73fcd83247a350141cd470a42b3a58358587b17d356e50dd153f6a53f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd801586e975c5f5f860d44e083c2dc41a6fc32b9b6397cd6ae15c64c32cd713 = $this->env->getExtension("native_profiler");
        $__internal_dd801586e975c5f5f860d44e083c2dc41a6fc32b9b6397cd6ae15c64c32cd713->enter($__internal_dd801586e975c5f5f860d44e083c2dc41a6fc32b9b6397cd6ae15c64c32cd713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tipousuario/fm_agreagar_tipousuario.html.twig"));

        // line 1
        echo "<div class=\"modal-body\">                                  
    <form id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\" action=\"";
        // line 2
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
        
        $__internal_dd801586e975c5f5f860d44e083c2dc41a6fc32b9b6397cd6ae15c64c32cd713->leave($__internal_dd801586e975c5f5f860d44e083c2dc41a6fc32b9b6397cd6ae15c64c32cd713_prof);

    }

    public function getTemplateName()
    {
        return "admin/tipousuario/fm_agreagar_tipousuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="modal-body">                                  */
/*     <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ path('tipousuariosAdd')}}" method="POST">*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoUsuario">Tipo Usuario <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="tipoUsuario" name="tipoUsuario" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripción <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                 <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>*/
/*                 <button type="submit" class="btn btn-success">Agregar</button>*/
/*             </div>*/
/*         </div>                                      */
/*     </form>*/
/* </div> */
/* */
