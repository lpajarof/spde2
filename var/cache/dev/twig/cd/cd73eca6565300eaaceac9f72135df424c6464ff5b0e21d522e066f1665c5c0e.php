<?php

/* admin/seguimiento/fm_agregar_seguimiento.html.twig */
class __TwigTemplate_5915ea218dcf360a848828da156b15ac0881afdf97240bc11c1b15e75e92e85c extends Twig_Template
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
        $__internal_40281fa08489bf69d05771bb3b404a80f60847dd20c1ec0dc148e6e2a8f57ede = $this->env->getExtension("native_profiler");
        $__internal_40281fa08489bf69d05771bb3b404a80f60847dd20c1ec0dc148e6e2a8f57ede->enter($__internal_40281fa08489bf69d05771bb3b404a80f60847dd20c1ec0dc148e6e2a8f57ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/seguimiento/fm_agregar_seguimiento.html.twig"));

        // line 1
        echo "<div class=\"modal-body\">     
    <div id=\"respuesta_agregar\"></div>
    <form id=\"frm_agregar_seguimiento\" data-parsley-validate class=\"form-horizontal form-label-left\">        
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "idestudiante", array()), "idestudiante", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "idestudiante", array()), "codigo", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "idestudiante", array()), "nombres", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "idestudiante", array()), "apellidos", array()), "html", null, true);
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
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"estudiante\">Acci&oacute;n<span class=\"required\">*</span>
            </label>    
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <select id=\"idaccion\" name=\"idaccion\" class=\"form-control\" required>
                    <option value=\"\">Seleccione</option>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accion"]) ? $context["accion"] : $this->getContext($context, "accion")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 23
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "idaccion", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "descripcion", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </select>
            </div>                    
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"observaciones\">Observaciones<span class=\"required\"></span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"observaciones\" name=\"observaciones\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
            </div>
        </div> 
        <div class=\"form-group\">
            <label class=\"col-xs-3 control-label\">Fecha inicio</label>
            <div class=\"col-xs-5 date\">
\t\t<div class=\"input-group input-append date\" >
                    <input type=\"text\" class=\"form-control\" name=\"fechainicio\" id=\"fechainicio\"/>
                    <span class=\"input-group-addon add-on\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
\t\t</div>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-xs-3 control-label\">Fecha fin</label>
            <div class=\"col-xs-5 date\">
\t\t<div class=\"input-group input-append date\" >
                    <input type=\"text\" class=\"form-control\" name=\"fechafin\" id=\"fechafin\"/>
                    <span class=\"input-group-addon add-on\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
\t\t</div>
            </div>
        </div>       
        <div class=\"form-group\">          
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"estado\">Estado<span class=\"required\">*</span>
            </label>    
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <select id=\"estado\" name=\"estado\" class=\"form-control\" required>
                    <option value=\"\">Seleccione</option>                    
                        <option value=\"1\">Abierta</option>                    
                        <option value=\"2\">Cerrada</option>                    
                </select>
            </div>                    
        </div>
        <div class=\"form-group\">          
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"usuario\">Asignado a<span class=\"required\">*</span>
            </label>    
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <select id=\"asignadoa\" name=\"asignadoa\" class=\"form-control\" required>
                    <option value=\"\">Seleccione</option>
                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 71
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "iduser", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nombres", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "apellidos", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </select>
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
        
        $__internal_40281fa08489bf69d05771bb3b404a80f60847dd20c1ec0dc148e6e2a8f57ede->leave($__internal_40281fa08489bf69d05771bb3b404a80f60847dd20c1ec0dc148e6e2a8f57ede_prof);

    }

    public function getTemplateName()
    {
        return "admin/seguimiento/fm_agregar_seguimiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 73,  129 => 71,  125 => 70,  78 => 25,  67 => 23,  63 => 22,  52 => 13,  37 => 11,  33 => 10,  22 => 1,);
    }
}
/* <div class="modal-body">     */
/*     <div id="respuesta_agregar"></div>*/
/*     <form id="frm_agregar_seguimiento" data-parsley-validate class="form-horizontal form-label-left">        */
/*         <div class="form-group">          */
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estudiante">Estudiante<span class="required">*</span>*/
/*             </label>    */
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <select id="idestudiante" name="idestudiante" class="form-control" required>*/
/*                     <option value="">Seleccione</option>*/
/*                     {% for e in estudiante %}*/
/*                         <option value="{{e.idestudiante.idestudiante}}">{{e.idestudiante.codigo }}&nbsp;{{e.idestudiante.nombres }}&nbsp;{{e.idestudiante.apellidos }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>                    */
/*         </div>        */
/*         <div class="form-group">          */
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estudiante">Acci&oacute;n<span class="required">*</span>*/
/*             </label>    */
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <select id="idaccion" name="idaccion" class="form-control" required>*/
/*                     <option value="">Seleccione</option>*/
/*                     {% for a in accion %}*/
/*                         <option value="{{a.idaccion}}">{{ a.descripcion }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>                    */
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="observaciones">Observaciones<span class="required"></span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="observaciones" name="observaciones" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div> */
/*         <div class="form-group">*/
/*             <label class="col-xs-3 control-label">Fecha inicio</label>*/
/*             <div class="col-xs-5 date">*/
/* 		<div class="input-group input-append date" >*/
/*                     <input type="text" class="form-control" name="fechainicio" id="fechainicio"/>*/
/*                     <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>*/
/* 		</div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-xs-3 control-label">Fecha fin</label>*/
/*             <div class="col-xs-5 date">*/
/* 		<div class="input-group input-append date" >*/
/*                     <input type="text" class="form-control" name="fechafin" id="fechafin"/>*/
/*                     <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>*/
/* 		</div>*/
/*             </div>*/
/*         </div>       */
/*         <div class="form-group">          */
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estado">Estado<span class="required">*</span>*/
/*             </label>    */
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <select id="estado" name="estado" class="form-control" required>*/
/*                     <option value="">Seleccione</option>                    */
/*                         <option value="1">Abierta</option>                    */
/*                         <option value="2">Cerrada</option>                    */
/*                 </select>*/
/*             </div>                    */
/*         </div>*/
/*         <div class="form-group">          */
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usuario">Asignado a<span class="required">*</span>*/
/*             </label>    */
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <select id="asignadoa" name="asignadoa" class="form-control" required>*/
/*                     <option value="">Seleccione</option>*/
/*                     {% for u in usuario %}*/
/*                         <option value="{{u.iduser}}">{{ u.nombres }}&nbsp;{{ u.apellidos }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>                    */
/*         </div>  */
/* */
/*         <div class="form-group">*/
/*             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                 <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>*/
/*                 <button type="submit" class="btn btn-success">Agregar</button>*/
/*             </div>*/
/*         </div>                                      */
/*     </form>*/
/* </div> */
/*                */
