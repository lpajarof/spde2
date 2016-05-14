<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_08ca1bff62be2adf407cddd631f41d6ee3a1aabe3ee2c19e9c967ee37331b2cc extends Twig_Template
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
        $__internal_a163baa3f1389e1709a4c490548826932957e24eb3d0790623efccd35261b04f = $this->env->getExtension("native_profiler");
        $__internal_a163baa3f1389e1709a4c490548826932957e24eb3d0790623efccd35261b04f->enter($__internal_a163baa3f1389e1709a4c490548826932957e24eb3d0790623efccd35261b04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_a163baa3f1389e1709a4c490548826932957e24eb3d0790623efccd35261b04f->leave($__internal_a163baa3f1389e1709a4c490548826932957e24eb3d0790623efccd35261b04f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
