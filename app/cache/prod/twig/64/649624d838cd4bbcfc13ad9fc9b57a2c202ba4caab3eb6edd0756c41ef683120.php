<?php

/* logingloginBundle:login:login.html.twig */
class __TwigTemplate_72c901b1eea5f5f94c8c6e40c5fefb34741407419b273be48e426afd88ac2fbf extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
         <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "        <form class=\"form-signin\">
          <h2 class=\"form-signin-heading\">Seguridad por favor inicio su usuario</h2>
        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
        <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" value=\"remember-me\"> Remember me
          </label>
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
        </form>
    ";
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
        return array (  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/*     {% block stylesheets %}*/
/*         {{ parent() }}*/
/*          <link href="{{ asset('public/css/signin.css') }}" rel="stylesheet">*/
/*     {% endblock %}*/
/*     {% block body %}*/
/*         <form class="form-signin">*/
/*           <h2 class="form-signin-heading">Seguridad por favor inicio su usuario</h2>*/
/*         <label for="inputEmail" class="sr-only">Email address</label>*/
/*         <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>*/
/*         <label for="inputPassword" class="sr-only">Password</label>*/
/*         <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>*/
/*         <div class="checkbox">*/
/*           <label>*/
/*             <input type="checkbox" value="remember-me"> Remember me*/
/*           </label>*/
/*         </div>*/
/*         <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>*/
/*         </form>*/
/*     {% endblock %}*/
/* */
