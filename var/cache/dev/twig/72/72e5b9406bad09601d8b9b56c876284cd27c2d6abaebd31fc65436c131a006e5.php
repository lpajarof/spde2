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
        $__internal_7a9af9c89900d99aeedb3bf8c375f5e4a3bfba37f52dce747783f95f3c79bd4b = $this->env->getExtension("native_profiler");
        $__internal_7a9af9c89900d99aeedb3bf8c375f5e4a3bfba37f52dce747783f95f3c79bd4b->enter($__internal_7a9af9c89900d99aeedb3bf8c375f5e4a3bfba37f52dce747783f95f3c79bd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a9af9c89900d99aeedb3bf8c375f5e4a3bfba37f52dce747783f95f3c79bd4b->leave($__internal_7a9af9c89900d99aeedb3bf8c375f5e4a3bfba37f52dce747783f95f3c79bd4b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc9a0c17f5c80679d1ba06f3f8dd1881d4b29343941ec7d2f29a25890e8b2380 = $this->env->getExtension("native_profiler");
        $__internal_bc9a0c17f5c80679d1ba06f3f8dd1881d4b29343941ec7d2f29a25890e8b2380->enter($__internal_bc9a0c17f5c80679d1ba06f3f8dd1881d4b29343941ec7d2f29a25890e8b2380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc9a0c17f5c80679d1ba06f3f8dd1881d4b29343941ec7d2f29a25890e8b2380->leave($__internal_bc9a0c17f5c80679d1ba06f3f8dd1881d4b29343941ec7d2f29a25890e8b2380_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93f0c1969ed40b84ab1ddd38ab8077a4d00b1d3ba1ac8fef56cb69dc2a09b56a = $this->env->getExtension("native_profiler");
        $__internal_93f0c1969ed40b84ab1ddd38ab8077a4d00b1d3ba1ac8fef56cb69dc2a09b56a->enter($__internal_93f0c1969ed40b84ab1ddd38ab8077a4d00b1d3ba1ac8fef56cb69dc2a09b56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_93f0c1969ed40b84ab1ddd38ab8077a4d00b1d3ba1ac8fef56cb69dc2a09b56a->leave($__internal_93f0c1969ed40b84ab1ddd38ab8077a4d00b1d3ba1ac8fef56cb69dc2a09b56a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a1e360458c60ac61a614e2f0e6b9a00510f87f69d955d1cf5fdf7f2e368385e = $this->env->getExtension("native_profiler");
        $__internal_3a1e360458c60ac61a614e2f0e6b9a00510f87f69d955d1cf5fdf7f2e368385e->enter($__internal_3a1e360458c60ac61a614e2f0e6b9a00510f87f69d955d1cf5fdf7f2e368385e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3a1e360458c60ac61a614e2f0e6b9a00510f87f69d955d1cf5fdf7f2e368385e->leave($__internal_3a1e360458c60ac61a614e2f0e6b9a00510f87f69d955d1cf5fdf7f2e368385e_prof);

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
