<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_fb96db178625b3c7a6882db6aaf906d5c8ab71a815c77d928958d007f7e5ae29 extends Twig_Template
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
        $__internal_30cfe98c12458812699e68627c23c26d20a6070e5c9e32cd3e4c104b53ce73fa = $this->env->getExtension("native_profiler");
        $__internal_30cfe98c12458812699e68627c23c26d20a6070e5c9e32cd3e4c104b53ce73fa->enter($__internal_30cfe98c12458812699e68627c23c26d20a6070e5c9e32cd3e4c104b53ce73fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_30cfe98c12458812699e68627c23c26d20a6070e5c9e32cd3e4c104b53ce73fa->leave($__internal_30cfe98c12458812699e68627c23c26d20a6070e5c9e32cd3e4c104b53ce73fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
