<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_0a4db4beedf6a5d8c8e2e731f936762fb98d54b05adce544197a46447a193019 extends Twig_Template
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
        $__internal_836dd3462ea793a1b6a2de781cc2b5152d7f702f86630f136fcb8b25ec2d8669 = $this->env->getExtension("native_profiler");
        $__internal_836dd3462ea793a1b6a2de781cc2b5152d7f702f86630f136fcb8b25ec2d8669->enter($__internal_836dd3462ea793a1b6a2de781cc2b5152d7f702f86630f136fcb8b25ec2d8669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_836dd3462ea793a1b6a2de781cc2b5152d7f702f86630f136fcb8b25ec2d8669->leave($__internal_836dd3462ea793a1b6a2de781cc2b5152d7f702f86630f136fcb8b25ec2d8669_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
