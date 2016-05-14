<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_3412d17ac8e271a1427abed36ee35a7125dff22c7244633adcf28f1d5e754789 extends Twig_Template
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
        $__internal_bdffad38f97bb2af0c622b571c4bcdc0b2e9b3372e8eb8601264b79cb8c62824 = $this->env->getExtension("native_profiler");
        $__internal_bdffad38f97bb2af0c622b571c4bcdc0b2e9b3372e8eb8601264b79cb8c62824->enter($__internal_bdffad38f97bb2af0c622b571c4bcdc0b2e9b3372e8eb8601264b79cb8c62824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bdffad38f97bb2af0c622b571c4bcdc0b2e9b3372e8eb8601264b79cb8c62824->leave($__internal_bdffad38f97bb2af0c622b571c4bcdc0b2e9b3372e8eb8601264b79cb8c62824_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
