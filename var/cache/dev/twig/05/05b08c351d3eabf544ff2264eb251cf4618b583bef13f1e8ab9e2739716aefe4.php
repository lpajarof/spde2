<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_5e9e8dc3119a70e17f220b039dcc50a457ecd641749b9090020406b52152454f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c134d8350ec2e6b77c266cd60bff2833c9319c98c760ab8e8e5a40b0fd90a47 = $this->env->getExtension("native_profiler");
        $__internal_4c134d8350ec2e6b77c266cd60bff2833c9319c98c760ab8e8e5a40b0fd90a47->enter($__internal_4c134d8350ec2e6b77c266cd60bff2833c9319c98c760ab8e8e5a40b0fd90a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c134d8350ec2e6b77c266cd60bff2833c9319c98c760ab8e8e5a40b0fd90a47->leave($__internal_4c134d8350ec2e6b77c266cd60bff2833c9319c98c760ab8e8e5a40b0fd90a47_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2632d04428bac27d431aa5a1b2495606c077ce1115919a91c0252c99a99ba8d7 = $this->env->getExtension("native_profiler");
        $__internal_2632d04428bac27d431aa5a1b2495606c077ce1115919a91c0252c99a99ba8d7->enter($__internal_2632d04428bac27d431aa5a1b2495606c077ce1115919a91c0252c99a99ba8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2632d04428bac27d431aa5a1b2495606c077ce1115919a91c0252c99a99ba8d7->leave($__internal_2632d04428bac27d431aa5a1b2495606c077ce1115919a91c0252c99a99ba8d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2c180a721997eca9d5aaaf318235e6f14352e5c5dfc71e2823d4f20d0811eb4 = $this->env->getExtension("native_profiler");
        $__internal_b2c180a721997eca9d5aaaf318235e6f14352e5c5dfc71e2823d4f20d0811eb4->enter($__internal_b2c180a721997eca9d5aaaf318235e6f14352e5c5dfc71e2823d4f20d0811eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b2c180a721997eca9d5aaaf318235e6f14352e5c5dfc71e2823d4f20d0811eb4->leave($__internal_b2c180a721997eca9d5aaaf318235e6f14352e5c5dfc71e2823d4f20d0811eb4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44dc78f7027fd7d3061b3ce14d587a26605179a2ad912d243ecc12010db525f8 = $this->env->getExtension("native_profiler");
        $__internal_44dc78f7027fd7d3061b3ce14d587a26605179a2ad912d243ecc12010db525f8->enter($__internal_44dc78f7027fd7d3061b3ce14d587a26605179a2ad912d243ecc12010db525f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_44dc78f7027fd7d3061b3ce14d587a26605179a2ad912d243ecc12010db525f8->leave($__internal_44dc78f7027fd7d3061b3ce14d587a26605179a2ad912d243ecc12010db525f8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
