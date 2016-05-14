<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3abdfa0aad8ec6e504cde4188d935596c162a45d47869ae43098ecb1d553967f extends Twig_Template
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
        $__internal_cb0abc7718060618cd4bbc1c998caddeab2d84dda5c726a56ca939a650ab692f = $this->env->getExtension("native_profiler");
        $__internal_cb0abc7718060618cd4bbc1c998caddeab2d84dda5c726a56ca939a650ab692f->enter($__internal_cb0abc7718060618cd4bbc1c998caddeab2d84dda5c726a56ca939a650ab692f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cb0abc7718060618cd4bbc1c998caddeab2d84dda5c726a56ca939a650ab692f->leave($__internal_cb0abc7718060618cd4bbc1c998caddeab2d84dda5c726a56ca939a650ab692f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
