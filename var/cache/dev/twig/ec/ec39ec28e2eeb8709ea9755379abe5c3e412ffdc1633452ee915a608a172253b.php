<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_97322567fe5a13ef6f158310eb222144b41ba518c4abf94dc79165e17ee09a54 extends Twig_Template
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
        $__internal_820de0b45c3b8e57beec0654d5939c4f795a0649148cbf7a72c97ebb1b970f84 = $this->env->getExtension("native_profiler");
        $__internal_820de0b45c3b8e57beec0654d5939c4f795a0649148cbf7a72c97ebb1b970f84->enter($__internal_820de0b45c3b8e57beec0654d5939c4f795a0649148cbf7a72c97ebb1b970f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_820de0b45c3b8e57beec0654d5939c4f795a0649148cbf7a72c97ebb1b970f84->leave($__internal_820de0b45c3b8e57beec0654d5939c4f795a0649148cbf7a72c97ebb1b970f84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
