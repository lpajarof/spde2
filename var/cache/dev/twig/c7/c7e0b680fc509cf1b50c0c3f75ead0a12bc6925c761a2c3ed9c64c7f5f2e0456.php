<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a856377316642a36de290d7df3be2586de137991be79e24cc61743240c39f85c extends Twig_Template
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
        $__internal_e7cf091eab126c74857b1647c907f9c858fe850be8cb9a5e1954cb7216aa8ca8 = $this->env->getExtension("native_profiler");
        $__internal_e7cf091eab126c74857b1647c907f9c858fe850be8cb9a5e1954cb7216aa8ca8->enter($__internal_e7cf091eab126c74857b1647c907f9c858fe850be8cb9a5e1954cb7216aa8ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e7cf091eab126c74857b1647c907f9c858fe850be8cb9a5e1954cb7216aa8ca8->leave($__internal_e7cf091eab126c74857b1647c907f9c858fe850be8cb9a5e1954cb7216aa8ca8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
