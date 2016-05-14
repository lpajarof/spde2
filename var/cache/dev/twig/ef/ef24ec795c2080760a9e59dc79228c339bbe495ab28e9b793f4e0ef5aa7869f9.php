<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0c9c35cc159f8511d7513601261e4326c428a64c793665b2b273086199cf3742 extends Twig_Template
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
        $__internal_2c22b4179c5206bf2181deaf108630032f6405602e03b5220660742dc2213627 = $this->env->getExtension("native_profiler");
        $__internal_2c22b4179c5206bf2181deaf108630032f6405602e03b5220660742dc2213627->enter($__internal_2c22b4179c5206bf2181deaf108630032f6405602e03b5220660742dc2213627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2c22b4179c5206bf2181deaf108630032f6405602e03b5220660742dc2213627->leave($__internal_2c22b4179c5206bf2181deaf108630032f6405602e03b5220660742dc2213627_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
