<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ae30b7e5cba42a85560befd92ab5bdec83dca6c58a15a6704cba12c940c16c35 extends Twig_Template
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
        $__internal_284d09ebbc29fb4ed42831d89c0a289793afcf791d4dfc38e92b45d178484c5a = $this->env->getExtension("native_profiler");
        $__internal_284d09ebbc29fb4ed42831d89c0a289793afcf791d4dfc38e92b45d178484c5a->enter($__internal_284d09ebbc29fb4ed42831d89c0a289793afcf791d4dfc38e92b45d178484c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_284d09ebbc29fb4ed42831d89c0a289793afcf791d4dfc38e92b45d178484c5a->leave($__internal_284d09ebbc29fb4ed42831d89c0a289793afcf791d4dfc38e92b45d178484c5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
