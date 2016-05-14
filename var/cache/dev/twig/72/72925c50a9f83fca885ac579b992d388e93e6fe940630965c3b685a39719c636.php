<?php

/* :security:login.html.twig */
class __TwigTemplate_80e3989c780cd37b080f5b5960827f8109e5d85d821fd28e15bf740fc0c938f8 extends Twig_Template
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
        $__internal_508d0d32a8f755254ba7250bbe409837150afee9e4872899c636d0d2d2ab24ce = $this->env->getExtension("native_profiler");
        $__internal_508d0d32a8f755254ba7250bbe409837150afee9e4872899c636d0d2d2ab24ce->enter($__internal_508d0d32a8f755254ba7250bbe409837150afee9e4872899c636d0d2d2ab24ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>SPDE</title>

  <!-- Bootstrap core CSS -->

  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/fonts/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Custom styling plus plugins -->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/css/icheck/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


  <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Gentellela/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

</head>

<body style=\"background:#F7F7F7;\">

  <div class=\"\">
    <a class=\"hiddenanchor\" id=\"toregister\"></a>
    <a class=\"hiddenanchor\" id=\"tologin\"></a>

    <div id=\"wrapper\">
      <div id=\"login\" class=\"animate form\">
        <section class=\"login_content\">
          <form action=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
            <h1>Ingreso SPDE</h1>
            <div>              
              <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Username\" required=\"required\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
            </div>
            <div>
              <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" id=\"password\" name=\"_password\" />
            </div>
            <div>
              <button id=\"send\" type=\"submit\" class=\"btn btn-success\">Submit</button>              
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"separator\">
                <p>
                    ";
        // line 52
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 53
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 54
        echo " 
                </p>              
              <div class=\"clearfix\"></div>
              <br />            
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    
    </div>
  </div>

</body>

</html>
    ";
        
        $__internal_508d0d32a8f755254ba7250bbe409837150afee9e4872899c636d0d2d2ab24ce->leave($__internal_508d0d32a8f755254ba7250bbe409837150afee9e4872899c636d0d2d2ab24ce_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 54,  101 => 53,  99 => 52,  85 => 41,  79 => 38,  63 => 25,  57 => 22,  53 => 21,  47 => 18,  43 => 17,  38 => 15,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*   <!-- Meta, title, CSS, favicons, etc. -->*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>SPDE</title>*/
/* */
/*   <!-- Bootstrap core CSS -->*/
/* */
/*   <link href="{{ asset('bundles/Gentellela/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*   <link href="{{ asset('bundles/Gentellela/fonts/css/font-awesome.min.css') }}" rel="stylesheet">*/
/*   <link href="{{ asset('bundles/Gentellela/css/animate.min.css') }}" rel="stylesheet">*/
/* */
/*   <!-- Custom styling plus plugins -->*/
/*   <link href="{{ asset('bundles/Gentellela/css/custom.css')}}" rel="stylesheet">*/
/*   <link href="{{ asset('bundles/Gentellela/css/icheck/flat/green.css')}}" rel="stylesheet">*/
/* */
/* */
/*   <script src="{{ asset('bundles/Gentellela/js/jquery.min.js')}}"></script>*/
/* */
/* </head>*/
/* */
/* <body style="background:#F7F7F7;">*/
/* */
/*   <div class="">*/
/*     <a class="hiddenanchor" id="toregister"></a>*/
/*     <a class="hiddenanchor" id="tologin"></a>*/
/* */
/*     <div id="wrapper">*/
/*       <div id="login" class="animate form">*/
/*         <section class="login_content">*/
/*           <form action="{{ path('login') }}" method="post">*/
/*             <h1>Ingreso SPDE</h1>*/
/*             <div>              */
/*               <input type="text" class="form-control" id="username" name="_username" placeholder="Username" required="required" value="{{ last_username }}" />*/
/*             </div>*/
/*             <div>*/
/*               <input type="password" class="form-control" placeholder="Password" required="" id="password" name="_password" />*/
/*             </div>*/
/*             <div>*/
/*               <button id="send" type="submit" class="btn btn-success">Submit</button>              */
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*             <div class="separator">*/
/*                 <p>*/
/*                     {% if error %}*/
/*                     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                     {% endif %} */
/*                 </p>              */
/*               <div class="clearfix"></div>*/
/*               <br />            */
/*             </div>*/
/*           </form>*/
/*           <!-- form -->*/
/*         </section>*/
/*         <!-- content -->*/
/*       </div>*/
/*     */
/*     </div>*/
/*   </div>*/
/* */
/* </body>*/
/* */
/* </html>*/
/*     */
