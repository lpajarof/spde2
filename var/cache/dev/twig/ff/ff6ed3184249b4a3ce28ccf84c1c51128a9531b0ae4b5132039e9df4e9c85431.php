<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_7e509c6d36d563a030986fa8fbeb12d388bb2c9db648b10d220c7f9e39669c72 extends Twig_Template
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
        $__internal_5f4d7753938ebd9e9eed5f96eed16b5b2e73d68b8b604b072ba79c2c5f1f5036 = $this->env->getExtension("native_profiler");
        $__internal_5f4d7753938ebd9e9eed5f96eed16b5b2e73d68b8b604b072ba79c2c5f1f5036->enter($__internal_5f4d7753938ebd9e9eed5f96eed16b5b2e73d68b8b604b072ba79c2c5f1f5036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5f4d7753938ebd9e9eed5f96eed16b5b2e73d68b8b604b072ba79c2c5f1f5036->leave($__internal_5f4d7753938ebd9e9eed5f96eed16b5b2e73d68b8b604b072ba79c2c5f1f5036_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
