<?php

/* admin/seguimiento/fm_actualizar_seguimiento.html.twig */
class __TwigTemplate_6c1c49045216b02f4cf6814b58e165328efc114dc9c6db6d3c8f5ded9c98a878 extends Twig_Template
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
        $__internal_582c021215a83cd34ef76d0e1f9eb326286a5e30ad6c53bb782efeafcd08c78a = $this->env->getExtension("native_profiler");
        $__internal_582c021215a83cd34ef76d0e1f9eb326286a5e30ad6c53bb782efeafcd08c78a->enter($__internal_582c021215a83cd34ef76d0e1f9eb326286a5e30ad6c53bb782efeafcd08c78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/seguimiento/fm_actualizar_seguimiento.html.twig"));

        // line 1
        echo "<div class=\"modal-body\">     
    <div id=\"respuesta_actualizar\"></div>
    <form id=\"frm_actualiza_entrenamiento\" data-parsley-validate class=\"form-horizontal form-label-left\">        
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
                <input type=\"hidden\" id=\"identrenamiento\" name=\"identrenamiento\">
            </div>                    
        </div>
                                              
        <div class=\"form-group\">          
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"desertor\">Desertor<span class=\"required\">*</span>
            </label>    
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <select id=\"desertor\" name=\"desertor\" class=\"form-control\" required>
                    <option value=\"\">Seleccione</option>
                        <option value=\"1\">Si</option>
                        <option value=\"0\">No</option>
                </select>
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
        
        $__internal_582c021215a83cd34ef76d0e1f9eb326286a5e30ad6c53bb782efeafcd08c78a->leave($__internal_582c021215a83cd34ef76d0e1f9eb326286a5e30ad6c53bb782efeafcd08c78a_prof);

    }

    public function getTemplateName()
    {
        return "admin/seguimiento/fm_actualizar_seguimiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  37 => 11,  33 => 10,  22 => 1,);
    }
}
/* <div class="modal-body">     */
/*     <div id="respuesta_actualizar"></div>*/
/*     <form id="frm_actualiza_entrenamiento" data-parsley-validate class="form-horizontal form-label-left">        */
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
/*                 <input type="hidden" id="identrenamiento" name="identrenamiento">*/
/*             </div>                    */
/*         </div>*/
/*                                               */
/*         <div class="form-group">          */
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="desertor">Desertor<span class="required">*</span>*/
/*             </label>    */
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <select id="desertor" name="desertor" class="form-control" required>*/
/*                     <option value="">Seleccione</option>*/
/*                         <option value="1">Si</option>*/
/*                         <option value="0">No</option>*/
/*                 </select>*/
/*             </div>                    */
/*         </div>    */
/*                         */
/*         <div class="form-group">*/
/*             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                 <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>*/
/*                 <button type="submit" class="btn btn-success">Agregar</button>*/
/*             </div>*/
/*         </div>                                      */
/*     </form>*/
/* </div> */
/* */
