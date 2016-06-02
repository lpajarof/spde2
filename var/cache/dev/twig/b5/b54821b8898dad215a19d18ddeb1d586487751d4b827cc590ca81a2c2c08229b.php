<?php

/* admin/clasificacion/fm_actualizar_clasificacion.html.twig */
class __TwigTemplate_a150013861addaedbc0bc071236dfdfcfb630caef9b05a4dbf8da577bef84baf extends Twig_Template
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
        $__internal_2dab6d79d9061cad89b62b8108d251bd22dff8789b5e2c554cdc4b896eca09b6 = $this->env->getExtension("native_profiler");
        $__internal_2dab6d79d9061cad89b62b8108d251bd22dff8789b5e2c554cdc4b896eca09b6->enter($__internal_2dab6d79d9061cad89b62b8108d251bd22dff8789b5e2c554cdc4b896eca09b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/clasificacion/fm_actualizar_clasificacion.html.twig"));

        // line 1
        echo "<div class=\"modal-body\">
<div id=\"respuesta_actualizar\"></div>
    <form id=\"frm_actualiza_clasificacion\" data-parsley-validate class=\"form-horizontal form-label-left\">
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"Estudiante\">Estudiante<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"codigo\" name=\"codigo\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                <input type=\"hidden\" id=\"idclasificacion\" name=\"idclasificacion\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"A&ntilde;o\">A&ntilde;o<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"anio\" name=\"anio\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"Periodo\">Periodo<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"periodo\" name=\"periodo\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>        

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Desertor</label>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">  <br>                                     
                    <p>S:<input type=\"radio\" class=\"flat\" name=\"desertor\" id=\"desertors\" value=\"1\"/>
                       N:<input type=\"radio\" class=\"flat\" name=\"desertor\" id=\"desertorn\" value=\"0\"/>
                    </p>
                </div>
        </div>

        <div class=\"form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Cancelar</button>
                <button type=\"submit\" class=\"btn btn-success\">Agregar</button>
            </div>
        </div>                                        
    </form>
</div>    
";
        
        $__internal_2dab6d79d9061cad89b62b8108d251bd22dff8789b5e2c554cdc4b896eca09b6->leave($__internal_2dab6d79d9061cad89b62b8108d251bd22dff8789b5e2c554cdc4b896eca09b6_prof);

    }

    public function getTemplateName()
    {
        return "admin/clasificacion/fm_actualizar_clasificacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="modal-body">*/
/* <div id="respuesta_actualizar"></div>*/
/*     <form id="frm_actualiza_clasificacion" data-parsley-validate class="form-horizontal form-label-left">*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Estudiante">Estudiante<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="codigo" name="codigo" required="required" class="form-control col-md-7 col-xs-12">*/
/*                 <input type="hidden" id="idclasificacion" name="idclasificacion">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="A&ntilde;o">A&ntilde;o<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="anio" name="anio" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Periodo">Periodo<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="periodo" name="periodo" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>        */
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12">Desertor</label>*/
/*                 <div class="col-md-6 col-sm-6 col-xs-12">  <br>                                     */
/*                     <p>S:<input type="radio" class="flat" name="desertor" id="desertors" value="1"/>*/
/*                        N:<input type="radio" class="flat" name="desertor" id="desertorn" value="0"/>*/
/*                     </p>*/
/*                 </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                 <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>*/
/*                 <button type="submit" class="btn btn-success">Agregar</button>*/
/*             </div>*/
/*         </div>                                        */
/*     </form>*/
/* </div>    */
/* */
