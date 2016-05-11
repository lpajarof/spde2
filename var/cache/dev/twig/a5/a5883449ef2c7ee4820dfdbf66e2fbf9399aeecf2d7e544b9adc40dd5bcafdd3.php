<?php

/* admin/tipousuario/fm_agreagar_tipousuario.twig */
class __TwigTemplate_9c11204e09e1a2d2e8ceb673df4cb43d1f4bf15f99aec509a6de54b9959b2d3d extends Twig_Template
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
        $__internal_ecd943704781d9d0d61dca38cc55aa2e54bddfc4426dcdd3ab3b6f6f1c1f944f = $this->env->getExtension("native_profiler");
        $__internal_ecd943704781d9d0d61dca38cc55aa2e54bddfc4426dcdd3ab3b6f6f1c1f944f->enter($__internal_ecd943704781d9d0d61dca38cc55aa2e54bddfc4426dcdd3ab3b6f6f1c1f944f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/tipousuario/fm_agreagar_tipousuario.twig"));

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
        
        $__internal_ecd943704781d9d0d61dca38cc55aa2e54bddfc4426dcdd3ab3b6f6f1c1f944f->leave($__internal_ecd943704781d9d0d61dca38cc55aa2e54bddfc4426dcdd3ab3b6f6f1c1f944f_prof);

    }

    public function getTemplateName()
    {
        return "admin/tipousuario/fm_agreagar_tipousuario.twig";
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
