<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ad1378de31c3655297d6af3a82a12d64ecf5148421706fe099393ed36a716778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_2dbb4a46efc4bbfe61e78337d62c1d04182b755b04f29b429793c98c55fe1fe3 = $this->env->getExtension("native_profiler");
        $__internal_2dbb4a46efc4bbfe61e78337d62c1d04182b755b04f29b429793c98c55fe1fe3->enter($__internal_2dbb4a46efc4bbfe61e78337d62c1d04182b755b04f29b429793c98c55fe1fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dbb4a46efc4bbfe61e78337d62c1d04182b755b04f29b429793c98c55fe1fe3->leave($__internal_2dbb4a46efc4bbfe61e78337d62c1d04182b755b04f29b429793c98c55fe1fe3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e6b123ff953ffb0856051a5e04a167b21ef9989574d416e050e09b02cd1b4a4f = $this->env->getExtension("native_profiler");
        $__internal_e6b123ff953ffb0856051a5e04a167b21ef9989574d416e050e09b02cd1b4a4f->enter($__internal_e6b123ff953ffb0856051a5e04a167b21ef9989574d416e050e09b02cd1b4a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e6b123ff953ffb0856051a5e04a167b21ef9989574d416e050e09b02cd1b4a4f->leave($__internal_e6b123ff953ffb0856051a5e04a167b21ef9989574d416e050e09b02cd1b4a4f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da82c750227ba449407f4d3e3c752ade4e0cebd42449533fbea42ba345223708 = $this->env->getExtension("native_profiler");
        $__internal_da82c750227ba449407f4d3e3c752ade4e0cebd42449533fbea42ba345223708->enter($__internal_da82c750227ba449407f4d3e3c752ade4e0cebd42449533fbea42ba345223708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da82c750227ba449407f4d3e3c752ade4e0cebd42449533fbea42ba345223708->leave($__internal_da82c750227ba449407f4d3e3c752ade4e0cebd42449533fbea42ba345223708_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7732e7153c505ccdc8628568f43b9314957d7b2a5790499683e9358d1a8a4276 = $this->env->getExtension("native_profiler");
        $__internal_7732e7153c505ccdc8628568f43b9314957d7b2a5790499683e9358d1a8a4276->enter($__internal_7732e7153c505ccdc8628568f43b9314957d7b2a5790499683e9358d1a8a4276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7732e7153c505ccdc8628568f43b9314957d7b2a5790499683e9358d1a8a4276->leave($__internal_7732e7153c505ccdc8628568f43b9314957d7b2a5790499683e9358d1a8a4276_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
