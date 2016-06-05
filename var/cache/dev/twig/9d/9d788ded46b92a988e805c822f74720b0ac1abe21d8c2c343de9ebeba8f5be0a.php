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
        $__internal_5275394c2a5ee17cde31b2560490012f30a8ff3acba9e7f22efce6e80ae220a1 = $this->env->getExtension("native_profiler");
        $__internal_5275394c2a5ee17cde31b2560490012f30a8ff3acba9e7f22efce6e80ae220a1->enter($__internal_5275394c2a5ee17cde31b2560490012f30a8ff3acba9e7f22efce6e80ae220a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/clasificacion/fm_agregar_clasificacion.html.twig"));

        // line 1
        echo "<div class=\"modal-body\">     
    <div id=\"respuesta_agregar\"></div>
    <form id=\"frm_agregar_clasificacion\" data-parsley-validate class=\"form-horizontal form-label-left\">        
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
            </div>                    
        </div>
                                              
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"c1\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 0, array(), "array"), "descripcion", array()), "html", null, true);
        echo "<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"c1\" name=\"c1\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>  
                             
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"c1\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 1, array(), "array"), "descripcion", array()), "html", null, true);
        echo "<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"c2\" name=\"c2\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>       
       
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"c1\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")), 2, array(), "array"), "descripcion", array()), "html", null, true);
        echo "<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"c3\" name=\"c3\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div>  
                             
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"c1\">";
        // line 42
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
        
        $__internal_5275394c2a5ee17cde31b2560490012f30a8ff3acba9e7f22efce6e80ae220a1->leave($__internal_5275394c2a5ee17cde31b2560490012f30a8ff3acba9e7f22efce6e80ae220a1_prof);

    }

    public function getTemplateName()
    {
        return "admin/clasificacion/fm_agregar_clasificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 42,  81 => 34,  70 => 26,  59 => 18,  52 => 13,  37 => 11,  33 => 10,  22 => 1,);
    }
}
/* <div class="modal-body">     */
/*     <div id="respuesta_agregar"></div>*/
/*     <form id="frm_agregar_clasificacion" data-parsley-validate class="form-horizontal form-label-left">        */
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
/* */
