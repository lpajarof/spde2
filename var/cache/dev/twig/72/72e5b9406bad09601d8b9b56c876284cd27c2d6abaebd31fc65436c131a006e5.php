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
        $__internal_5039682f26bc649bc4cfddd9631d326cf9e1c8414c8041a1e558d9b672ec5093 = $this->env->getExtension("native_profiler");
        $__internal_5039682f26bc649bc4cfddd9631d326cf9e1c8414c8041a1e558d9b672ec5093->enter($__internal_5039682f26bc649bc4cfddd9631d326cf9e1c8414c8041a1e558d9b672ec5093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5039682f26bc649bc4cfddd9631d326cf9e1c8414c8041a1e558d9b672ec5093->leave($__internal_5039682f26bc649bc4cfddd9631d326cf9e1c8414c8041a1e558d9b672ec5093_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ebf233ae4aa2d701099d19675ec12954fd6fb06aef38904c439e9924aadb6952 = $this->env->getExtension("native_profiler");
        $__internal_ebf233ae4aa2d701099d19675ec12954fd6fb06aef38904c439e9924aadb6952->enter($__internal_ebf233ae4aa2d701099d19675ec12954fd6fb06aef38904c439e9924aadb6952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ebf233ae4aa2d701099d19675ec12954fd6fb06aef38904c439e9924aadb6952->leave($__internal_ebf233ae4aa2d701099d19675ec12954fd6fb06aef38904c439e9924aadb6952_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a1348af25bb2dd929a67230c3b238a6fbc32a29dfe670775bf4c862bdf632da3 = $this->env->getExtension("native_profiler");
        $__internal_a1348af25bb2dd929a67230c3b238a6fbc32a29dfe670775bf4c862bdf632da3->enter($__internal_a1348af25bb2dd929a67230c3b238a6fbc32a29dfe670775bf4c862bdf632da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a1348af25bb2dd929a67230c3b238a6fbc32a29dfe670775bf4c862bdf632da3->leave($__internal_a1348af25bb2dd929a67230c3b238a6fbc32a29dfe670775bf4c862bdf632da3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a442e136cc930ea37b189609ad54caaceed1a441b2f844e7c53698763fe6ee93 = $this->env->getExtension("native_profiler");
        $__internal_a442e136cc930ea37b189609ad54caaceed1a441b2f844e7c53698763fe6ee93->enter($__internal_a442e136cc930ea37b189609ad54caaceed1a441b2f844e7c53698763fe6ee93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a442e136cc930ea37b189609ad54caaceed1a441b2f844e7c53698763fe6ee93->leave($__internal_a442e136cc930ea37b189609ad54caaceed1a441b2f844e7c53698763fe6ee93_prof);

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
