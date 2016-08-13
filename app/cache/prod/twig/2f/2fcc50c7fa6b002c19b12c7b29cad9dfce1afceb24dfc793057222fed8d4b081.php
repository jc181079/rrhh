<?php

/* logingloginBundle:login:login.html.twig */
class __TwigTemplate_dec2a14b45bd24ed6e050e910f05a6deffd3f9284a095dd71c31c3e8fcb9f23f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "logingloginBundle:login:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cd41394fb232099d2b9aa8574235ba42b415f08074f888df9abb9a2b9d8b707 = $this->env->getExtension("native_profiler");
        $__internal_6cd41394fb232099d2b9aa8574235ba42b415f08074f888df9abb9a2b9d8b707->enter($__internal_6cd41394fb232099d2b9aa8574235ba42b415f08074f888df9abb9a2b9d8b707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "logingloginBundle:login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cd41394fb232099d2b9aa8574235ba42b415f08074f888df9abb9a2b9d8b707->leave($__internal_6cd41394fb232099d2b9aa8574235ba42b415f08074f888df9abb9a2b9d8b707_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_489a47ba77349d94d4c462b4daf3cb9fca6ba2ce8d0eb8b2f60c859c3c230995 = $this->env->getExtension("native_profiler");
        $__internal_489a47ba77349d94d4c462b4daf3cb9fca6ba2ce8d0eb8b2f60c859c3c230995->enter($__internal_489a47ba77349d94d4c462b4daf3cb9fca6ba2ce8d0eb8b2f60c859c3c230995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/parsley.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_489a47ba77349d94d4c462b4daf3cb9fca6ba2ce8d0eb8b2f60c859c3c230995->leave($__internal_489a47ba77349d94d4c462b4daf3cb9fca6ba2ce8d0eb8b2f60c859c3c230995_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_beacfb779908b1adbc1a2c90d564fd1d92a3183d4eff1889df0ccdbf0ba2d069 = $this->env->getExtension("native_profiler");
        $__internal_beacfb779908b1adbc1a2c90d564fd1d92a3183d4eff1889df0ccdbf0ba2d069->enter($__internal_beacfb779908b1adbc1a2c90d564fd1d92a3183d4eff1889df0ccdbf0ba2d069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/parsley.min.js"), "html", null, true);
        echo "\" ></script>
    <form class=\"form-signin\" method=\"post\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("loginglogin_check");
        echo "\" data-parsley-validate=\"\">
        <h2 class=\"form-signin-heading\">::Seguridad::</h2>
        <label  class=\"sr-only\">Login</label>
        <input  id=\"login\" name=\"login\" class=\"form-control\" placeholder=\"Login\"   >
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input type=\"password\" id=\"pass\" name=\"pass\" class=\"form-control\" placeholder=\"Password\"  >
        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" value=\"remember-me\"> Remember me
            </label>
        </div>
        <div class=\"invalid-form-error-message\"></div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
    </form>
";
        
        $__internal_beacfb779908b1adbc1a2c90d564fd1d92a3183d4eff1889df0ccdbf0ba2d069->leave($__internal_beacfb779908b1adbc1a2c90d564fd1d92a3183d4eff1889df0ccdbf0ba2d069_prof);

    }

    public function getTemplateName()
    {
        return "logingloginBundle:login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 10,  70 => 9,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('public/css/signin.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('public/css/parsley.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <script src="{{ asset('public/js/jquery.js') }}" ></script>*/
/*     <script src="{{ asset('public/js/parsley.min.js') }}" ></script>*/
/*     <form class="form-signin" method="post" action="{{ path('loginglogin_check') }}" data-parsley-validate="">*/
/*         <h2 class="form-signin-heading">::Seguridad::</h2>*/
/*         <label  class="sr-only">Login</label>*/
/*         <input  id="login" name="login" class="form-control" placeholder="Login"   >*/
/*         <label for="inputPassword" class="sr-only">Password</label>*/
/*         <input type="password" id="pass" name="pass" class="form-control" placeholder="Password"  >*/
/*         <div class="checkbox">*/
/*             <label>*/
/*                 <input type="checkbox" value="remember-me"> Remember me*/
/*             </label>*/
/*         </div>*/
/*         <div class="invalid-form-error-message"></div>*/
/*         <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>*/
/*     </form>*/
/* {% endblock %}*/
/* */
/* */
