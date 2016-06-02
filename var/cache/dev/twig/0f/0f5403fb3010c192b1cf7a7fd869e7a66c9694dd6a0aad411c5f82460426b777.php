<?php

/* admin/programas/fm_actualizar_programas.html.twig */
class __TwigTemplate_1003db10b95ef9cc6dce6508bae0297d73941e8088fd3008a00887dca7db193a extends Twig_Template
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
        $__internal_a945d842423b85a4cc651e711c5c75ab0b7032758777569deb321060bc80fb8d = $this->env->getExtension("native_profiler");
        $__internal_a945d842423b85a4cc651e711c5c75ab0b7032758777569deb321060bc80fb8d->enter($__internal_a945d842423b85a4cc651e711c5c75ab0b7032758777569deb321060bc80fb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/programas/fm_actualizar_programas.html.twig"));

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
        
        $__internal_a945d842423b85a4cc651e711c5c75ab0b7032758777569deb321060bc80fb8d->leave($__internal_a945d842423b85a4cc651e711c5c75ab0b7032758777569deb321060bc80fb8d_prof);

    }

    public function getTemplateName()
    {
        return "admin/programas/fm_actualizar_programas.html.twig";
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
