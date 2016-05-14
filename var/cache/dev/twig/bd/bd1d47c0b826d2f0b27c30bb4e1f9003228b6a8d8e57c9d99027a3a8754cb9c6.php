<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_307106404f39eb2944c5d17c849a2ba9094e478133b1c04e0e86b6e658e84d7e extends Twig_Template
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
        $__internal_86b1c049e6ba3d3de791fb64cc3effc68b89d34c569496c121f537391c319eea = $this->env->getExtension("native_profiler");
        $__internal_86b1c049e6ba3d3de791fb64cc3effc68b89d34c569496c121f537391c319eea->enter($__internal_86b1c049e6ba3d3de791fb64cc3effc68b89d34c569496c121f537391c319eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_86b1c049e6ba3d3de791fb64cc3effc68b89d34c569496c121f537391c319eea->leave($__internal_86b1c049e6ba3d3de791fb64cc3effc68b89d34c569496c121f537391c319eea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
