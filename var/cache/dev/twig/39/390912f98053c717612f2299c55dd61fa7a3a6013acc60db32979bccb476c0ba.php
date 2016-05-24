<?php

/* admin/estudiantes/fm_agregar_estudiante.html.twig */
class __TwigTemplate_60b9fa14c25262360277938838fe71498b39f4e13b47cd1788e79d73b128d442 extends Twig_Template
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
        $__internal_60afd1afe35275414c10a28ee327aa6f1e9803931ba2b1921c2c91a790dc922a = $this->env->getExtension("native_profiler");
        $__internal_60afd1afe35275414c10a28ee327aa6f1e9803931ba2b1921c2c91a790dc922a->enter($__internal_60afd1afe35275414c10a28ee327aa6f1e9803931ba2b1921c2c91a790dc922a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/estudiantes/fm_agregar_estudiante.html.twig"));

        // line 1
        echo "<div class=\"modal-body\">     
    <div id=\"respuesta_agregar\"></div>
    <form id=\"frm_agregar_estudiante\" data-parsley-validate class=\"form-horizontal form-label-left\">
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"codigo\">C&oacute;digo <span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"codigo\" name=\"codigo\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>

         <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"programa\">Programa<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <select id=\"programa\" name=\"programa\" class=\"form-control\" required>
                    <option value=\"\">Choose..</option>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programas"]) ? $context["programas"] : $this->getContext($context, "programas")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 19
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
        // line 21
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
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipoidentificacion"]) ? $context["tipoidentificacion"] : $this->getContext($context, "tipoidentificacion")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 32
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
        // line 34
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
        
        $__internal_60afd1afe35275414c10a28ee327aa6f1e9803931ba2b1921c2c91a790dc922a->leave($__internal_60afd1afe35275414c10a28ee327aa6f1e9803931ba2b1921c2c91a790dc922a_prof);

    }

    public function getTemplateName()
    {
        return "admin/estudiantes/fm_agregar_estudiante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 34,  72 => 32,  68 => 31,  56 => 21,  45 => 19,  41 => 18,  22 => 1,);
    }
}
/* <div class="modal-body">     */
/*     <div id="respuesta_agregar"></div>*/
/*     <form id="frm_agregar_estudiante" data-parsley-validate class="form-horizontal form-label-left">*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">C&oacute;digo <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="codigo" name="codigo" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/* */
/*          <div class="form-group">*/
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
/*         */
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
/*         */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="identificacion">Identificaci&oacute;n <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="identificacion" name="identificacion" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombres">Nombres <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="nombres" name="nombres" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">Apellidos<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="apellidos" name="apellidos" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">email <span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*         */
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
/*         </div>              */
/*         */
/*         <div class="form-group">*/
/*             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                 <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>*/
/*                 <button type="submit" class="btn btn-success">Agregar</button>*/
/*             </div>*/
/*         </div>                                      */
/*     </form>*/
/* </div> */
/* */
