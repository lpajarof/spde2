<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7eef838c77561653b1ecb3728cc31325c20f84cf2d2bca3d53eb804f1bb7cc26 extends Twig_Template
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
        $__internal_f8fc17c7f432d936ab4c379beccbe814f71459ada530f5d8e11103933af1933e = $this->env->getExtension("native_profiler");
        $__internal_f8fc17c7f432d936ab4c379beccbe814f71459ada530f5d8e11103933af1933e->enter($__internal_f8fc17c7f432d936ab4c379beccbe814f71459ada530f5d8e11103933af1933e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f8fc17c7f432d936ab4c379beccbe814f71459ada530f5d8e11103933af1933e->leave($__internal_f8fc17c7f432d936ab4c379beccbe814f71459ada530f5d8e11103933af1933e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
