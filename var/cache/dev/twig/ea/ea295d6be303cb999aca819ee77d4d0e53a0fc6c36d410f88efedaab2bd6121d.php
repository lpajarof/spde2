<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_756f768f4b140719d7811c725f2fa0a83189acf957134d7838d2de4049a84cc7 extends Twig_Template
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
        $__internal_1dad5010754740812e8f16645fd36e584922e00a0ac40ba63bf080da4fff793c = $this->env->getExtension("native_profiler");
        $__internal_1dad5010754740812e8f16645fd36e584922e00a0ac40ba63bf080da4fff793c->enter($__internal_1dad5010754740812e8f16645fd36e584922e00a0ac40ba63bf080da4fff793c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1dad5010754740812e8f16645fd36e584922e00a0ac40ba63bf080da4fff793c->leave($__internal_1dad5010754740812e8f16645fd36e584922e00a0ac40ba63bf080da4fff793c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
