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
        $__internal_98ce47290fbfcedf6688f150967f861e25074d50a0f92d223d9bea0396a8f1a9 = $this->env->getExtension("native_profiler");
        $__internal_98ce47290fbfcedf6688f150967f861e25074d50a0f92d223d9bea0396a8f1a9->enter($__internal_98ce47290fbfcedf6688f150967f861e25074d50a0f92d223d9bea0396a8f1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/caracteristicas/fm_actualizar_caracteristicas.html.twig"));

        // line 1
        echo " <div class=\"modal-body\">
<div id=\"respuesta_actualizar\"></div>
    <form id=\"frm_actualiza_programas\" data-parsley-validate class=\"form-horizontal form-label-left\">
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"codiggo\">C&oacute;digo <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"codigo\" name=\"codigo\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                <input type=\"hidden\" class=\"form-control\" id=\"idprograma\" name=\"idprograma\">
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
        
        $__internal_98ce47290fbfcedf6688f150967f861e25074d50a0f92d223d9bea0396a8f1a9->leave($__internal_98ce47290fbfcedf6688f150967f861e25074d50a0f92d223d9bea0396a8f1a9_prof);

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
/*     <form id="frm_actualiza_programas" data-parsley-validate class="form-horizontal form-label-left">*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codiggo">C&oacute;digo <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="codigo" name="codigo" required="required" class="form-control col-md-7 col-xs-12">*/
/*                 <input type="hidden" class="form-control" id="idprograma" name="idprograma">*/
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
/* </div>    */
/* */
