<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_8e87ee97f845bc409279233cabd44c520d327c894809703130217a7d3370dd8c extends Twig_Template
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
        $__internal_feb54ab6fcd8b64cd4993772123c9e2a53f31bc68246c77a6e141efa2567a12c = $this->env->getExtension("native_profiler");
        $__internal_feb54ab6fcd8b64cd4993772123c9e2a53f31bc68246c77a6e141efa2567a12c->enter($__internal_feb54ab6fcd8b64cd4993772123c9e2a53f31bc68246c77a6e141efa2567a12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_feb54ab6fcd8b64cd4993772123c9e2a53f31bc68246c77a6e141efa2567a12c->leave($__internal_feb54ab6fcd8b64cd4993772123c9e2a53f31bc68246c77a6e141efa2567a12c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
