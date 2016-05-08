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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a80d9ca2148bb9f7a9a0edb8d99e384d2e766c76d4273a2d7d2302e72d18cfa = $this->env->getExtension("native_profiler");
        $__internal_4a80d9ca2148bb9f7a9a0edb8d99e384d2e766c76d4273a2d7d2302e72d18cfa->enter($__internal_4a80d9ca2148bb9f7a9a0edb8d99e384d2e766c76d4273a2d7d2302e72d18cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a80d9ca2148bb9f7a9a0edb8d99e384d2e766c76d4273a2d7d2302e72d18cfa->leave($__internal_4a80d9ca2148bb9f7a9a0edb8d99e384d2e766c76d4273a2d7d2302e72d18cfa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f321e9fe8ab8dfbb1042b1abcf047c949110146b3ee8935c80a960dc1a9b7b71 = $this->env->getExtension("native_profiler");
        $__internal_f321e9fe8ab8dfbb1042b1abcf047c949110146b3ee8935c80a960dc1a9b7b71->enter($__internal_f321e9fe8ab8dfbb1042b1abcf047c949110146b3ee8935c80a960dc1a9b7b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Modulo adminstrador
";
        
        $__internal_f321e9fe8ab8dfbb1042b1abcf047c949110146b3ee8935c80a960dc1a9b7b71->leave($__internal_f321e9fe8ab8dfbb1042b1abcf047c949110146b3ee8935c80a960dc1a9b7b71_prof);

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
/* {% block body %}*/
/*     Modulo adminstrador*/
/* {% endblock %}*/
/* */
/* */
/* */
