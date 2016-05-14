<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_78fe13124bb37af50d28012925b5bffe5e5ccd769f460957641a18470d0d2510 extends Twig_Template
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
        $__internal_c606da5b22a2c67da107ad073a0dcd26868e721abaf6c67387a186cbf2ee538f = $this->env->getExtension("native_profiler");
        $__internal_c606da5b22a2c67da107ad073a0dcd26868e721abaf6c67387a186cbf2ee538f->enter($__internal_c606da5b22a2c67da107ad073a0dcd26868e721abaf6c67387a186cbf2ee538f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c606da5b22a2c67da107ad073a0dcd26868e721abaf6c67387a186cbf2ee538f->leave($__internal_c606da5b22a2c67da107ad073a0dcd26868e721abaf6c67387a186cbf2ee538f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
