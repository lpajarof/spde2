<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8ceaa077f17bc376646a41ee748ffa514b1535bb6e01733eded7ab3121dd281d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6929457a24b34341e41d1dcd3f94e31e930a71598e0fe3b18b31248de893e3d4 = $this->env->getExtension("native_profiler");
        $__internal_6929457a24b34341e41d1dcd3f94e31e930a71598e0fe3b18b31248de893e3d4->enter($__internal_6929457a24b34341e41d1dcd3f94e31e930a71598e0fe3b18b31248de893e3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6929457a24b34341e41d1dcd3f94e31e930a71598e0fe3b18b31248de893e3d4->leave($__internal_6929457a24b34341e41d1dcd3f94e31e930a71598e0fe3b18b31248de893e3d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
