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
        $__internal_73e36ff58a9d3f01e6df80780385661323335aacd47d71cd13a3ad1fcfaf5d6d = $this->env->getExtension("native_profiler");
        $__internal_73e36ff58a9d3f01e6df80780385661323335aacd47d71cd13a3ad1fcfaf5d6d->enter($__internal_73e36ff58a9d3f01e6df80780385661323335aacd47d71cd13a3ad1fcfaf5d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73e36ff58a9d3f01e6df80780385661323335aacd47d71cd13a3ad1fcfaf5d6d->leave($__internal_73e36ff58a9d3f01e6df80780385661323335aacd47d71cd13a3ad1fcfaf5d6d_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_81278ce796a83f802771b90f2cea74898b8866bd3282a89a887c6df9345d4bc6 = $this->env->getExtension("native_profiler");
        $__internal_81278ce796a83f802771b90f2cea74898b8866bd3282a89a887c6df9345d4bc6->enter($__internal_81278ce796a83f802771b90f2cea74898b8866bd3282a89a887c6df9345d4bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "    Modulo adminstrador..
";
        
        $__internal_81278ce796a83f802771b90f2cea74898b8866bd3282a89a887c6df9345d4bc6->leave($__internal_81278ce796a83f802771b90f2cea74898b8866bd3282a89a887c6df9345d4bc6_prof);

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
