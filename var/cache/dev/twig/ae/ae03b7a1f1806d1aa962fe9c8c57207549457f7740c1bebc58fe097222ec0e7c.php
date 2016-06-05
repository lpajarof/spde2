<?php

/* admin/entrenamiento/fm_actualizar_entrenamiento.html.twig */
class __TwigTemplate_1b9338f2584af7df5113603fe142eb24072c0a3d7e79648e0c744702e5675746 extends Twig_Template
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
        $__internal_22ed3a521bcdd378a1ea155beae98540cef3b2d78997603086a35aeafa34b5e1 = $this->env->getExtension("native_profiler");
        $__internal_22ed3a521bcdd378a1ea155beae98540cef3b2d78997603086a35aeafa34b5e1->enter($__internal_22ed3a521bcdd378a1ea155beae98540cef3b2d78997603086a35aeafa34b5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/entrenamiento/fm_actualizar_entrenamiento.html.twig"));

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
        
        $__internal_22ed3a521bcdd378a1ea155beae98540cef3b2d78997603086a35aeafa34b5e1->leave($__internal_22ed3a521bcdd378a1ea155beae98540cef3b2d78997603086a35aeafa34b5e1_prof);

    }

    public function getTemplateName()
    {
        return "admin/entrenamiento/fm_actualizar_entrenamiento.html.twig";
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
