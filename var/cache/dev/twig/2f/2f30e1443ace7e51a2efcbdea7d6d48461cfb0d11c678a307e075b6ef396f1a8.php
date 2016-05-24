<?php

/* admin/caracteristicas/fm_actualizar_caracteristicas.html.twig */
class __TwigTemplate_e4cdf3bbc3708839e4db0ec28d0c105b04dc80208d2d65dcff5972e7163b12ce extends Twig_Template
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
        $__internal_4f8aeb8923440456fb37eb2f0126d0cc26e2da65ce5cde1b4a786ac57d8e3992 = $this->env->getExtension("native_profiler");
        $__internal_4f8aeb8923440456fb37eb2f0126d0cc26e2da65ce5cde1b4a786ac57d8e3992->enter($__internal_4f8aeb8923440456fb37eb2f0126d0cc26e2da65ce5cde1b4a786ac57d8e3992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/caracteristicas/fm_actualizar_caracteristicas.html.twig"));

        // line 1
        echo " <div class=\"modal-body\">
<div id=\"respuesta_actualizar\"></div>
    <form id=\"frm_actualiza_caracteristica\" data-parsley-validate class=\"form-horizontal form-label-left\">

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"descripcion\">Descripción <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"descripcion\" name=\"descripcion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                <input type=\"hidden\" class=\"form-control\" id=\"idcaracteristica\" name=\"idcaracteristica\">
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cancelar</button>
                <button type=\"submit\" class=\"btn btn-success\">Actualizar</button>
            </div>
        </div>                                      
    </form>
</div>    
";
        
        $__internal_4f8aeb8923440456fb37eb2f0126d0cc26e2da65ce5cde1b4a786ac57d8e3992->leave($__internal_4f8aeb8923440456fb37eb2f0126d0cc26e2da65ce5cde1b4a786ac57d8e3992_prof);

    }

    public function getTemplateName()
    {
        return "admin/caracteristicas/fm_actualizar_caracteristicas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/*  <div class="modal-body">*/
/* <div id="respuesta_actualizar"></div>*/
/*     <form id="frm_actualiza_caracteristica" data-parsley-validate class="form-horizontal form-label-left">*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripción <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">*/
/*                 <input type="hidden" class="form-control" id="idcaracteristica" name="idcaracteristica">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                 <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>*/
/*                 <button type="submit" class="btn btn-success">Actualizar</button>*/
/*             </div>*/
/*         </div>                                      */
/*     </form>*/
/* </div>    */
/* */
