<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_b983bdae59cfb1c7e31c1952fd689aeb03176bbcfc52387b21efaa30b526e5c7 extends Twig_Template
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
        $__internal_ab17182f2186ea1dda8aee99c9e8bc15d4d79d4a34968294670255b41b3f5e15 = $this->env->getExtension("native_profiler");
        $__internal_ab17182f2186ea1dda8aee99c9e8bc15d4d79d4a34968294670255b41b3f5e15->enter($__internal_ab17182f2186ea1dda8aee99c9e8bc15d4d79d4a34968294670255b41b3f5e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ab17182f2186ea1dda8aee99c9e8bc15d4d79d4a34968294670255b41b3f5e15->leave($__internal_ab17182f2186ea1dda8aee99c9e8bc15d4d79d4a34968294670255b41b3f5e15_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
