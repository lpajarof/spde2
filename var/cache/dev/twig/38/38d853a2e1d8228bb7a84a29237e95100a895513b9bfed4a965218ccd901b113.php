<?php

/* admin/index.html.twig */
class __TwigTemplate_d24ce511f3a9f1ce984287afd27798344081b8969d16ad1d5db0759f84e205b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc29d5975d08497a5c35cbbeddfe95ed49c57860d5ee74ffe6dbad506c5c7018 = $this->env->getExtension("native_profiler");
        $__internal_dc29d5975d08497a5c35cbbeddfe95ed49c57860d5ee74ffe6dbad506c5c7018->enter($__internal_dc29d5975d08497a5c35cbbeddfe95ed49c57860d5ee74ffe6dbad506c5c7018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc29d5975d08497a5c35cbbeddfe95ed49c57860d5ee74ffe6dbad506c5c7018->leave($__internal_dc29d5975d08497a5c35cbbeddfe95ed49c57860d5ee74ffe6dbad506c5c7018_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_5c31732fb297722cd5d761d2db43e87084c2b526a14452132331f6776e984d5b = $this->env->getExtension("native_profiler");
        $__internal_5c31732fb297722cd5d761d2db43e87084c2b526a14452132331f6776e984d5b->enter($__internal_5c31732fb297722cd5d761d2db43e87084c2b526a14452132331f6776e984d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    Modulo adminstrador..
";
        
        $__internal_5c31732fb297722cd5d761d2db43e87084c2b526a14452132331f6776e984d5b->leave($__internal_5c31732fb297722cd5d761d2db43e87084c2b526a14452132331f6776e984d5b_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     Modulo adminstrador..*/
/* {% endblock %}*/
/* */
/* */
/* */
