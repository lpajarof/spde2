<?php

/* admin/index.html.twig */
class __TwigTemplate_d24ce511f3a9f1ce984287afd27798344081b8969d16ad1d5db0759f84e205b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee1a6280937d45e90490258e869402f2821a84f221a5b36f7ea2bd66c6be81c6 = $this->env->getExtension("native_profiler");
        $__internal_ee1a6280937d45e90490258e869402f2821a84f221a5b36f7ea2bd66c6be81c6->enter($__internal_ee1a6280937d45e90490258e869402f2821a84f221a5b36f7ea2bd66c6be81c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee1a6280937d45e90490258e869402f2821a84f221a5b36f7ea2bd66c6be81c6->leave($__internal_ee1a6280937d45e90490258e869402f2821a84f221a5b36f7ea2bd66c6be81c6_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ecace17e5525bdce4cad456bcd7ce490c3c5f74c38d20060316ad54d098237c8 = $this->env->getExtension("native_profiler");
        $__internal_ecace17e5525bdce4cad456bcd7ce490c3c5f74c38d20060316ad54d098237c8->enter($__internal_ecace17e5525bdce4cad456bcd7ce490c3c5f74c38d20060316ad54d098237c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    Modulo adminstrador..
";
        
        $__internal_ecace17e5525bdce4cad456bcd7ce490c3c5f74c38d20060316ad54d098237c8->leave($__internal_ecace17e5525bdce4cad456bcd7ce490c3c5f74c38d20060316ad54d098237c8_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*     Modulo adminstrador..*/
/* {% endblock %}*/
/* */
/* */
/* */
