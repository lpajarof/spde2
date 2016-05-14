<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7afc4011427be22cac34f4ef98686abd6f237ab7216ef106943832c55df3dd16 extends Twig_Template
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
        $__internal_21b33503a7ca01576603a96f5d38fb5dac313a7a5a6828adb1ba170e3b0e8d37 = $this->env->getExtension("native_profiler");
        $__internal_21b33503a7ca01576603a96f5d38fb5dac313a7a5a6828adb1ba170e3b0e8d37->enter($__internal_21b33503a7ca01576603a96f5d38fb5dac313a7a5a6828adb1ba170e3b0e8d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_21b33503a7ca01576603a96f5d38fb5dac313a7a5a6828adb1ba170e3b0e8d37->leave($__internal_21b33503a7ca01576603a96f5d38fb5dac313a7a5a6828adb1ba170e3b0e8d37_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
