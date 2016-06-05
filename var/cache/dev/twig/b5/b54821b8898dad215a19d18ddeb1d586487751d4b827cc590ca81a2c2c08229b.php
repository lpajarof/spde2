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
        $__internal_5bd06d651c8405a54e1e8ec0796117ee73ba034eca74bfc81d28ef054f02d354 = $this->env->getExtension("native_profiler");
        $__internal_5bd06d651c8405a54e1e8ec0796117ee73ba034eca74bfc81d28ef054f02d354->enter($__internal_5bd06d651c8405a54e1e8ec0796117ee73ba034eca74bfc81d28ef054f02d354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/clasificacion/fm_actualizar_clasificacion.html.twig"));

        // line 1
        echo "<div class=\"modal-body\">     
    <div id=\"respuesta_actualizar\"></div>
    <form id=\"frm_actualiza_clasificacion\" data-parsley-validate class=\"form-horizontal form-label-left\">        
        <div class=\"form-group\">          
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"estudiante\">Estudiante<span class=\"required\">*</span>
            </label>    
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <select id=\"idestudiante\" name=\"idestudiante\" class=\"form-control\" required>
                    <option value=\"\">Seleccione</option>
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 11
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "idestudiante", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "codigo", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "apellidos", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nombres", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </select>
                <input type=\"hidden\" id=\"idclasificacion\" name=\"idclasificacion\">
            </div>                    
        </div>
                                              
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"c1\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 0, array(), "array"), "descripcion", array()), "html", null, true);
        echo "<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"c1\" name=\"c1\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>  
                             
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"c1\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 1, array(), "array"), "descripcion", array()), "html", null, true);
        echo "<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"c2\" name=\"c2\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>       
       
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"c1\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 2, array(), "array"), "descripcion", array()), "html", null, true);
        echo "<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"c3\" name=\"c3\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>  
                             
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"c1\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 3, array(), "array"), "descripcion", array()), "html", null, true);
        echo "<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"c4\" name=\"c4\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
        
        $__internal_5bd06d651c8405a54e1e8ec0796117ee73ba034eca74bfc81d28ef054f02d354->leave($__internal_5bd06d651c8405a54e1e8ec0796117ee73ba034eca74bfc81d28ef054f02d354_prof);

    }

    public function getTemplateName()
    {
        return "admin/clasificacion/fm_actualizar_clasificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 43,  82 => 35,  71 => 27,  60 => 19,  52 => 13,  37 => 11,  33 => 10,  22 => 1,);
    }
}
/* <div class="modal-body">     */
/*     <div id="respuesta_actualizar"></div>*/
/*     <form id="frm_actualiza_clasificacion" data-parsley-validate class="form-horizontal form-label-left">        */
/*         <div class="form-group">          */
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estudiante">Estudiante<span class="required">*</span>*/
/*             </label>    */
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <select id="idestudiante" name="idestudiante" class="form-control" required>*/
/*                     <option value="">Seleccione</option>*/
/*                     {% for e in estudiante %}*/
/*                         <option value="{{e.idestudiante}}">{{ e.codigo }}&nbsp;{{ e.apellidos }}&nbsp;{{ e.nombres }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <input type="hidden" id="idclasificacion" name="idclasificacion">*/
/*             </div>                    */
/*         </div>*/
/*                                               */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="c1">{{ caracteristica[0].descripcion }}<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="c1" name="c1" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>  */
/*                              */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="c1">{{ caracteristica[1].descripcion }}<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="c2" name="c2" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>       */
/*        */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="c1">{{ caracteristica[2].descripcion }}<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="c3" name="c3" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>  */
/*                              */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="c1">{{ caracteristica[3].descripcion }}<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="c4" name="c4" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                 <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>*/
/*                 <button type="submit" class="btn btn-success">Agregar</button>*/
/*             </div>*/
/*         </div>                                      */
/*     </form>*/
/* </div> */
/*            */
