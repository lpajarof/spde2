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
        $__internal_9197e334cb50422f5704ba8605e4cc83c60ac21adcf6428b4f327900d23e03b5 = $this->env->getExtension("native_profiler");
        $__internal_9197e334cb50422f5704ba8605e4cc83c60ac21adcf6428b4f327900d23e03b5->enter($__internal_9197e334cb50422f5704ba8605e4cc83c60ac21adcf6428b4f327900d23e03b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9197e334cb50422f5704ba8605e4cc83c60ac21adcf6428b4f327900d23e03b5->leave($__internal_9197e334cb50422f5704ba8605e4cc83c60ac21adcf6428b4f327900d23e03b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_649a4172b2fc3ee59172ab75de17528f980d2d38538e6a2297b96a461c3a6f1e = $this->env->getExtension("native_profiler");
        $__internal_649a4172b2fc3ee59172ab75de17528f980d2d38538e6a2297b96a461c3a6f1e->enter($__internal_649a4172b2fc3ee59172ab75de17528f980d2d38538e6a2297b96a461c3a6f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_649a4172b2fc3ee59172ab75de17528f980d2d38538e6a2297b96a461c3a6f1e->leave($__internal_649a4172b2fc3ee59172ab75de17528f980d2d38538e6a2297b96a461c3a6f1e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11bc24897dbcb679b09e49f4ee1959d7d1b078f41c2f0e99d2e828ec40015eb4 = $this->env->getExtension("native_profiler");
        $__internal_11bc24897dbcb679b09e49f4ee1959d7d1b078f41c2f0e99d2e828ec40015eb4->enter($__internal_11bc24897dbcb679b09e49f4ee1959d7d1b078f41c2f0e99d2e828ec40015eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_11bc24897dbcb679b09e49f4ee1959d7d1b078f41c2f0e99d2e828ec40015eb4->leave($__internal_11bc24897dbcb679b09e49f4ee1959d7d1b078f41c2f0e99d2e828ec40015eb4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f007bc2589acaf3ba8c613cb2ea4587d2912f793447b4ab9e81479b1ecce0c79 = $this->env->getExtension("native_profiler");
        $__internal_f007bc2589acaf3ba8c613cb2ea4587d2912f793447b4ab9e81479b1ecce0c79->enter($__internal_f007bc2589acaf3ba8c613cb2ea4587d2912f793447b4ab9e81479b1ecce0c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f007bc2589acaf3ba8c613cb2ea4587d2912f793447b4ab9e81479b1ecce0c79->leave($__internal_f007bc2589acaf3ba8c613cb2ea4587d2912f793447b4ab9e81479b1ecce0c79_prof);

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
