<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e3f6e464b1a9797615371b0c567f185f26fdf3eb3c88b40395624f99652f8a0c extends Twig_Template
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
        $__internal_3ff1b4241bf4841043b1394c14bdc882b95252215e8b8329a77f8ace7db4b472 = $this->env->getExtension("native_profiler");
        $__internal_3ff1b4241bf4841043b1394c14bdc882b95252215e8b8329a77f8ace7db4b472->enter($__internal_3ff1b4241bf4841043b1394c14bdc882b95252215e8b8329a77f8ace7db4b472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3ff1b4241bf4841043b1394c14bdc882b95252215e8b8329a77f8ace7db4b472->leave($__internal_3ff1b4241bf4841043b1394c14bdc882b95252215e8b8329a77f8ace7db4b472_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
