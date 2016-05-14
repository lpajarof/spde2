<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_70cdee313872234df5e2d01963b6b11499038c5eedff16befb506e359cb7dc34 extends Twig_Template
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
        $__internal_760ddfe87ab8a13e6e89e3fc339e584638d3e4d622a3ce7045bae67be1e2676a = $this->env->getExtension("native_profiler");
        $__internal_760ddfe87ab8a13e6e89e3fc339e584638d3e4d622a3ce7045bae67be1e2676a->enter($__internal_760ddfe87ab8a13e6e89e3fc339e584638d3e4d622a3ce7045bae67be1e2676a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_760ddfe87ab8a13e6e89e3fc339e584638d3e4d622a3ce7045bae67be1e2676a->leave($__internal_760ddfe87ab8a13e6e89e3fc339e584638d3e4d622a3ce7045bae67be1e2676a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
