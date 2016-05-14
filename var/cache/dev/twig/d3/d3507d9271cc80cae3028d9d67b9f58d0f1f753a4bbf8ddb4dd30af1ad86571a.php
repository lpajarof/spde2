<?php

/* :default:index.html.twig */
class __TwigTemplate_c61921108543f14779557324af611c7420e3ba18dd8b4ac815960a0168ebc046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c312efa6037725d29b561955f0bd574330065ef6a25400154416107f3db9c70 = $this->env->getExtension("native_profiler");
        $__internal_8c312efa6037725d29b561955f0bd574330065ef6a25400154416107f3db9c70->enter($__internal_8c312efa6037725d29b561955f0bd574330065ef6a25400154416107f3db9c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c312efa6037725d29b561955f0bd574330065ef6a25400154416107f3db9c70->leave($__internal_8c312efa6037725d29b561955f0bd574330065ef6a25400154416107f3db9c70_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa9554be3b158c5ba10c021ee23a6a1cbb7384461857fced05453049513b8c53 = $this->env->getExtension("native_profiler");
        $__internal_aa9554be3b158c5ba10c021ee23a6a1cbb7384461857fced05453049513b8c53->enter($__internal_aa9554be3b158c5ba10c021ee23a6a1cbb7384461857fced05453049513b8c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    hola
";
        
        $__internal_aa9554be3b158c5ba10c021ee23a6a1cbb7384461857fced05453049513b8c53->leave($__internal_aa9554be3b158c5ba10c021ee23a6a1cbb7384461857fced05453049513b8c53_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     hola*/
/* {% endblock %}*/
/* */
/* */
/* */
