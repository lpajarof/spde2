<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ca761523116a347a59f2565eac25a3c3ec0ad45ae0f000bcb7fa5d5eaa5c3e4d extends Twig_Template
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
        $__internal_e3ffed7575da738f5ea87979980c6fe7cfc8312ed50b7be48c2143bfcd707d66 = $this->env->getExtension("native_profiler");
        $__internal_e3ffed7575da738f5ea87979980c6fe7cfc8312ed50b7be48c2143bfcd707d66->enter($__internal_e3ffed7575da738f5ea87979980c6fe7cfc8312ed50b7be48c2143bfcd707d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e3ffed7575da738f5ea87979980c6fe7cfc8312ed50b7be48c2143bfcd707d66->leave($__internal_e3ffed7575da738f5ea87979980c6fe7cfc8312ed50b7be48c2143bfcd707d66_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */