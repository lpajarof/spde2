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
        $__internal_09a36bb50ffcc822d1cef34bc50bacc60642ac80ddc804256431b3f9f8e221f4 = $this->env->getExtension("native_profiler");
        $__internal_09a36bb50ffcc822d1cef34bc50bacc60642ac80ddc804256431b3f9f8e221f4->enter($__internal_09a36bb50ffcc822d1cef34bc50bacc60642ac80ddc804256431b3f9f8e221f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a36bb50ffcc822d1cef34bc50bacc60642ac80ddc804256431b3f9f8e221f4->leave($__internal_09a36bb50ffcc822d1cef34bc50bacc60642ac80ddc804256431b3f9f8e221f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_877a1435540cd8004841cf683fff6160b5501de3f60f328289da96aee687acfe = $this->env->getExtension("native_profiler");
        $__internal_877a1435540cd8004841cf683fff6160b5501de3f60f328289da96aee687acfe->enter($__internal_877a1435540cd8004841cf683fff6160b5501de3f60f328289da96aee687acfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_877a1435540cd8004841cf683fff6160b5501de3f60f328289da96aee687acfe->leave($__internal_877a1435540cd8004841cf683fff6160b5501de3f60f328289da96aee687acfe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36da3d8822a4752eef2eb3a7edb20f255ff31057c716098539a8cfc616aeb33e = $this->env->getExtension("native_profiler");
        $__internal_36da3d8822a4752eef2eb3a7edb20f255ff31057c716098539a8cfc616aeb33e->enter($__internal_36da3d8822a4752eef2eb3a7edb20f255ff31057c716098539a8cfc616aeb33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36da3d8822a4752eef2eb3a7edb20f255ff31057c716098539a8cfc616aeb33e->leave($__internal_36da3d8822a4752eef2eb3a7edb20f255ff31057c716098539a8cfc616aeb33e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_043ec791443bf75cef5c4934bda798ad76a50b2efdbb59f030efa1bcba732857 = $this->env->getExtension("native_profiler");
        $__internal_043ec791443bf75cef5c4934bda798ad76a50b2efdbb59f030efa1bcba732857->enter($__internal_043ec791443bf75cef5c4934bda798ad76a50b2efdbb59f030efa1bcba732857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_043ec791443bf75cef5c4934bda798ad76a50b2efdbb59f030efa1bcba732857->leave($__internal_043ec791443bf75cef5c4934bda798ad76a50b2efdbb59f030efa1bcba732857_prof);

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
