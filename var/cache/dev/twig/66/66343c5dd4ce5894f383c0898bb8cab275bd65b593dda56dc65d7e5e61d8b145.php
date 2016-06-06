<?php

/* admin/acciones/fm_actualizar_acciones.html.twig */
class __TwigTemplate_901005b519a38813f476109d26568f215528c172a695794ab76deb29c6a66d65 extends Twig_Template
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
        $__internal_1e1303bf1924780c4a3e766fd9ba3cc995c5188c08937706428fb596612497ef = $this->env->getExtension("native_profiler");
        $__internal_1e1303bf1924780c4a3e766fd9ba3cc995c5188c08937706428fb596612497ef->enter($__internal_1e1303bf1924780c4a3e766fd9ba3cc995c5188c08937706428fb596612497ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/acciones/fm_actualizar_acciones.html.twig"));

        // line 1
        echo " <div class=\"modal-body\">
<div id=\"respuesta_actualizar\"></div>
    <form id=\"frm_actualiza_accion\" data-parsley-validate class=\"form-horizontal form-label-left\">

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"descripcion\">Descripción <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"descripcion\" name=\"descripcion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                <input type=\"hidden\" class=\"form-control\" id=\"idaccion\" name=\"idaccion\">
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
        
        $__internal_1e1303bf1924780c4a3e766fd9ba3cc995c5188c08937706428fb596612497ef->leave($__internal_1e1303bf1924780c4a3e766fd9ba3cc995c5188c08937706428fb596612497ef_prof);

    }

    public function getTemplateName()
    {
        return "admin/acciones/fm_actualizar_acciones.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/*  <div class="modal-body">*/
/* <div id="respuesta_actualizar"></div>*/
/*     <form id="frm_actualiza_accion" data-parsley-validate class="form-horizontal form-label-left">*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripción <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">*/
/*                 <input type="hidden" class="form-control" id="idaccion" name="idaccion">*/
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
