<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2ef0f98d35d6c97464824ee9f81262c1deee4ef5a3bef36fc576fc7d841d6db5 extends Twig_Template
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
        $__internal_f9baa842969824042143e5eca110503cd44c91cf2a328353c820852312b8b2d6 = $this->env->getExtension("native_profiler");
        $__internal_f9baa842969824042143e5eca110503cd44c91cf2a328353c820852312b8b2d6->enter($__internal_f9baa842969824042143e5eca110503cd44c91cf2a328353c820852312b8b2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f9baa842969824042143e5eca110503cd44c91cf2a328353c820852312b8b2d6->leave($__internal_f9baa842969824042143e5eca110503cd44c91cf2a328353c820852312b8b2d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
