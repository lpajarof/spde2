<?php

/* admin/entrenamiento/fm_agregar_entrenamiento.html.twig */
class __TwigTemplate_719a40315c3dadedd3e98e7863e503e5779f9cf97fae0e63bd483f3197b4cecf extends Twig_Template
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
        $__internal_49f635bfed681c9b62c484419ab8da9e389022d1fdd2d6566ecad5b096d0adc5 = $this->env->getExtension("native_profiler");
        $__internal_49f635bfed681c9b62c484419ab8da9e389022d1fdd2d6566ecad5b096d0adc5->enter($__internal_49f635bfed681c9b62c484419ab8da9e389022d1fdd2d6566ecad5b096d0adc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/entrenamiento/fm_agregar_entrenamiento.html.twig"));

        // line 1
        echo "<div class=\"modal-body\">     
    <div id=\"respuesta_agregar\"></div>
    <form id=\"frm_agregar_entrenamiento\" data-parsley-validate class=\"form-horizontal form-label-left\">
        
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"clasificacion\">Clasificaci&oacute;n<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <select id=\"idclasificacion\" name=\"idclasificacion\" class=\"form-control\" required>
                    <option value=\"\">Seleccione</option>
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clasificacion"]) ? $context["clasificacion"] : $this->getContext($context, "clasificacion")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 12
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "idclasificacion", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "idEstudiante", array()), "codigo", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "idEstudiante", array()), "nombres", array()), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "idEstudiante", array()), "apellidos", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </select>
            </div>               
        </div>
        
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"caracteristica\">Caracter&iacute;stica<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <select id=\"idcaracteristica\" name=\"idcaracteristica\" class=\"form-control\" required>
                    <option value=\"\">Seleccione</option>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["caracteristica"]) ? $context["caracteristica"] : $this->getContext($context, "caracteristica")));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 25
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "idcaracteristica", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["car"], "descripcion", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </select>
            </div>               
        </div>
        
        
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"valor\">valor<span class=\"required\">*</span>
            </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                <input type=\"text\" id=\"valor\" name=\"valor\" required=\"required\" class=\"form-control col-md-7 col-xs-12\">
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
        
        $__internal_49f635bfed681c9b62c484419ab8da9e389022d1fdd2d6566ecad5b096d0adc5->leave($__internal_49f635bfed681c9b62c484419ab8da9e389022d1fdd2d6566ecad5b096d0adc5_prof);

    }

    public function getTemplateName()
    {
        return "admin/entrenamiento/fm_agregar_entrenamiento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  69 => 25,  65 => 24,  53 => 14,  38 => 12,  34 => 11,  22 => 1,);
    }
}
/* <div class="modal-body">     */
/*     <div id="respuesta_agregar"></div>*/
/*     <form id="frm_agregar_entrenamiento" data-parsley-validate class="form-horizontal form-label-left">*/
/*         */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="clasificacion">Clasificaci&oacute;n<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <select id="idclasificacion" name="idclasificacion" class="form-control" required>*/
/*                     <option value="">Seleccione</option>*/
/*                     {% for c in clasificacion %}*/
/*                         <option value="{{c.idclasificacion}}">{{ c.idEstudiante.codigo }}&nbsp;{{ c.idEstudiante.nombres }}&nbsp;{{ c.idEstudiante.apellidos }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>               */
/*         </div>*/
/*         */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="caracteristica">Caracter&iacute;stica<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <select id="idcaracteristica" name="idcaracteristica" class="form-control" required>*/
/*                     <option value="">Seleccione</option>*/
/*                     {% for car in caracteristica %}*/
/*                         <option value="{{car.idcaracteristica}}">{{ car.descripcion}}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>               */
/*         </div>*/
/*         */
/*         */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="valor">valor<span class="required">*</span>*/
/*             </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 <input type="text" id="valor" name="valor" required="required" class="form-control col-md-7 col-xs-12">*/
/*             </div>*/
/*         </div>        */
/*        */
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
