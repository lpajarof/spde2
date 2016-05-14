<?php

/* default/index.html.twig */
class __TwigTemplate_9ca05e7b2b6fd8303b3ffe72cd70124b32c6ffb34c52cdeb1e262971026d4b8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_959a08b8d7c64621b30aab729270fa9fd61388837c24dd017be84e29d907fc9f = $this->env->getExtension("native_profiler");
        $__internal_959a08b8d7c64621b30aab729270fa9fd61388837c24dd017be84e29d907fc9f->enter($__internal_959a08b8d7c64621b30aab729270fa9fd61388837c24dd017be84e29d907fc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_959a08b8d7c64621b30aab729270fa9fd61388837c24dd017be84e29d907fc9f->leave($__internal_959a08b8d7c64621b30aab729270fa9fd61388837c24dd017be84e29d907fc9f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8a6b40c13e0b8b1839d411f92a339ab292ad7c2e486fbc28e8921fb676817ea = $this->env->getExtension("native_profiler");
        $__internal_c8a6b40c13e0b8b1839d411f92a339ab292ad7c2e486fbc28e8921fb676817ea->enter($__internal_c8a6b40c13e0b8b1839d411f92a339ab292ad7c2e486fbc28e8921fb676817ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    hola
";
        
        $__internal_c8a6b40c13e0b8b1839d411f92a339ab292ad7c2e486fbc28e8921fb676817ea->leave($__internal_c8a6b40c13e0b8b1839d411f92a339ab292ad7c2e486fbc28e8921fb676817ea_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     hola*/
/* {% endblock %}*/
/* */
/* */
/* */
