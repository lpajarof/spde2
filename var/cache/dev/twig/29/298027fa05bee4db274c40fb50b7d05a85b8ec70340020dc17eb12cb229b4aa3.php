<?php

/* admin/estudiantes/fm_actualizar_estudiante.html.twig */
class __TwigTemplate_75b24e2c3786c006be2a967ded96381151d613b1ef86f3d48bacce99bee8a0a5 extends Twig_Template
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
        $__internal_315b321f63672e46c626a0ddf95f8fc458a955f24f0906159133b81ac8779da3 = $this->env->getExtension("native_profiler");
        $__internal_315b321f63672e46c626a0ddf95f8fc458a955f24f0906159133b81ac8779da3->enter($__internal_315b321f63672e46c626a0ddf95f8fc458a955f24f0906159133b81ac8779da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/estudiantes/fm_actualizar_estudiante.html.twig"));

        // line 1
        echo " <div class=\"modal-body\">
<div id=\"respuesta_actualizar\"></div>
    <form id=\"frm_actualiza_estudiante\" data-parsley-validate class=\"form-horizontal form-label-left\">
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"codigo\">C&oacute;digo <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"codigo\" name=\"codigo\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
                <input type=\"hidden\" class=\"form-control\" id=\"idestudiante\" name=\"idestudiante\">
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"programa\">Programa<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <select id=\"programa\" name=\"programa\" class=\"form-control\" required>
                    <option value=\"\">Choose..</option>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programas"]) ? $context["programas"] : $this->getContext($context, "programas")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 20
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "idprograma", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "descripcion", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </select>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"tipoidentificacion\">Tipo de Identificaci&oacute;n <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <select id=\"tipoidentificacion\" name=\"tipoidentificacion\" class=\"form-control\" required>
                    <option value=\"\">Choose..</option>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipoidentificacion"]) ? $context["tipoidentificacion"] : $this->getContext($context, "tipoidentificacion")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 33
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "idtipoidentificacion", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "descripcion", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </select>
            </div>               
        </div>
                
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"identificacion\">Identificaci&oacute;n <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"identificacion\" name=\"identificacion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>
                
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"nombres\">Nombres <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"nombres\" name=\"nombres\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>
                
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"apellidos\">Apellidos<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"apellidos\" name=\"apellidos\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>
                
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"email\">email <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"email\" id=\"email\" name=\"email\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>
                
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"telefono\">Tel&eacute;fono<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"telefono\" name=\"telefono\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"direccion\">Direcci&oacute;n <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"direccion\" name=\"direccion\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
        
        $__internal_315b321f63672e46c626a0ddf95f8fc458a955f24f0906159133b81ac8779da3->leave($__internal_315b321f63672e46c626a0ddf95f8fc458a955f24f0906159133b81ac8779da3_prof);

    }

    public function getTemplateName()
    {
        return "admin/estudiantes/fm_actualizar_estudiante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 35,  73 => 33,  69 => 32,  57 => 22,  46 => 20,  42 => 19,  22 => 1,);
    }
}
/*  <div class="modal-body">*/
/* <div id="respuesta_actualizar"></div>*/
/*     <form id="frm_actualiza_estudiante" data-parsley-validate class="form-horizontal form-label-left">*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">C&oacute;digo <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="codigo" name="codigo" required="required" class="form-control col-md-7 col-xs-12">*/
/*                 <input type="hidden" class="form-control" id="idestudiante" name="idestudiante">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="programa">Programa<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <select id="programa" name="programa" class="form-control" required>*/
/*                     <option value="">Choose..</option>*/
/*                     {% for p in programas %}*/
/*                         <option value="{{p.idprograma}}">{{p.descripcion}}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoidentificacion">Tipo de Identificaci&oacute;n <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <select id="tipoidentificacion" name="tipoidentificacion" class="form-control" required>*/
/*                     <option value="">Choose..</option>*/
/*                     {% for t in tipoidentificacion %}*/
/*                         <option value="{{t.idtipoidentificacion}}">{{t.descripcion}}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>               */
/*         </div>*/
/*                 */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="identificacion">Identificaci&oacute;n <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="identificacion" name="identificacion" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*                 */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombres">Nombres <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="nombres" name="nombres" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*                 */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">Apellidos<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="apellidos" name="apellidos" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*                 */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">email <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*                 */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Tel&eacute;fono<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="telefono" name="telefono" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">Direcci&oacute;n <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="direccion" name="direccion" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>                  */
/*                 */
/*         <div class="form-group">*/
/*             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                 <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>*/
/*                 <button type="submit" class="btn btn-success">Agregar</button>*/
/*             </div>*/
/*         </div>                                      */
/*     </form>*/
/* </div>    */
/* */
