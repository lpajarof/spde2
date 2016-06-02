<?php

/* admin/clasificacion/fm_agregar_clasificacion.html.twig */
class __TwigTemplate_1c771225dcdb0eb0c183fc874c3fdfb241924cd4abb29448ad4e3ac95010ed95 extends Twig_Template
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
        $__internal_aad027a25a683ca50ee130ba783a5293c0cd6944f57db8f21f87fff569c59f5c = $this->env->getExtension("native_profiler");
        $__internal_aad027a25a683ca50ee130ba783a5293c0cd6944f57db8f21f87fff569c59f5c->enter($__internal_aad027a25a683ca50ee130ba783a5293c0cd6944f57db8f21f87fff569c59f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/clasificacion/fm_agregar_clasificacion.html.twig"));

        // line 1
        echo "<div class=\"modal-body\">     
    <div id=\"respuesta_agregar\"></div>
    <form id=\"frm_agregar_clasificacion\" data-parsley-validate class=\"form-horizontal form-label-left\">
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"Estudiante\">Estudiante<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"codigo\" name=\"codigo\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
                <div class=\"col-md-6 col-sm-6 col-xs-12\">                    
                   <p>S:<input type=\"radio\" class=\"flat\" name=\"desertor\" id=\"desertors\" value=\"1\" checked=\"true\"/>
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
        
        $__internal_aad027a25a683ca50ee130ba783a5293c0cd6944f57db8f21f87fff569c59f5c->leave($__internal_aad027a25a683ca50ee130ba783a5293c0cd6944f57db8f21f87fff569c59f5c_prof);

    }

    public function getTemplateName()
    {
        return "admin/clasificacion/fm_agregar_clasificacion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="modal-body">     */
/*     <div id="respuesta_agregar"></div>*/
/*     <form id="frm_agregar_clasificacion" data-parsley-validate class="form-horizontal form-label-left">*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Estudiante">Estudiante<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="codigo" name="codigo" required="required" class="form-control col-md-7 col-xs-12">*/
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
/*                 <div class="col-md-6 col-sm-6 col-xs-12">                    */
/*                    <p>S:<input type="radio" class="flat" name="desertor" id="desertors" value="1" checked="true"/>*/
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
/*         </div>                                      */
/*     </form>*/
/* </div> */
/* */
