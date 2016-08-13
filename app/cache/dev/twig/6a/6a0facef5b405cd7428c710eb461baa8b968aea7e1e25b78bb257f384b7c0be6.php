<?php

/* logingloginBundle:login:login.html.twig */
class __TwigTemplate_9d67dd725fc8d9a5de3c90e5c53825b6650ca9eb2813b6321e53b14075af6186 extends Twig_Template
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
        $__internal_ea98c1bc8dd4c2f4fa183b9341b4cc926a00e3d31cac8b1070e040465425ed46 = $this->env->getExtension("native_profiler");
        $__internal_ea98c1bc8dd4c2f4fa183b9341b4cc926a00e3d31cac8b1070e040465425ed46->enter($__internal_ea98c1bc8dd4c2f4fa183b9341b4cc926a00e3d31cac8b1070e040465425ed46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "logingloginBundle:login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea98c1bc8dd4c2f4fa183b9341b4cc926a00e3d31cac8b1070e040465425ed46->leave($__internal_ea98c1bc8dd4c2f4fa183b9341b4cc926a00e3d31cac8b1070e040465425ed46_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_63537c3b39bf215d9801eb9cf046aa721e908c565920852111e4e4949c531c93 = $this->env->getExtension("native_profiler");
        $__internal_63537c3b39bf215d9801eb9cf046aa721e908c565920852111e4e4949c531c93->enter($__internal_63537c3b39bf215d9801eb9cf046aa721e908c565920852111e4e4949c531c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
";
        
        $__internal_63537c3b39bf215d9801eb9cf046aa721e908c565920852111e4e4949c531c93->leave($__internal_63537c3b39bf215d9801eb9cf046aa721e908c565920852111e4e4949c531c93_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2775f290c8b9063a2c10d7f21ab6d65a502dba41bef2fb40abac523573920833 = $this->env->getExtension("native_profiler");
        $__internal_2775f290c8b9063a2c10d7f21ab6d65a502dba41bef2fb40abac523573920833->enter($__internal_2775f290c8b9063a2c10d7f21ab6d65a502dba41bef2fb40abac523573920833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    
    ";
        // line 10
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "Mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "                            <span class=\"alert-warning\" >
                                ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <form class=\"form-signin\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("loginglogin_check");
        echo "\" >
        <h2 class=\"form-signin-heading\">::Seguridad::</h2>
        <label  class=\"sr-only\">Login</label>
        <input  id=\"login\" name=\"login\" class=\"form-control\" placeholder=\"Login\"   >
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input type=\"password\" id=\"pass\" name=\"pass\" class=\"form-control\" placeholder=\"Password\"  >
        
        <div class=\"invalid-form-error-message\"></div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
    </form>
";
        
        $__internal_2775f290c8b9063a2c10d7f21ab6d65a502dba41bef2fb40abac523573920833->leave($__internal_2775f290c8b9063a2c10d7f21ab6d65a502dba41bef2fb40abac523573920833_prof);

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
        return array (  82 => 15,  73 => 12,  70 => 11,  65 => 10,  62 => 8,  56 => 7,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('public/css/signin.css') }}" rel="stylesheet">*/
/*     */
/* {% endblock %}*/
/* {% block body %}*/
/*     */
/*     {# para mostrar el mensaje de que se borro el dato #}*/
/*                         {% for flashMessage in app.session.flashbag.get('Mensaje') %}*/
/*                             <span class="alert-warning" >*/
/*                                 {{flashMessage}}*/
/*                             </span>*/
/*                         {% endfor%}*/
/*     <form class="form-signin" method="post" action="{{ path('loginglogin_check') }}" >*/
/*         <h2 class="form-signin-heading">::Seguridad::</h2>*/
/*         <label  class="sr-only">Login</label>*/
/*         <input  id="login" name="login" class="form-control" placeholder="Login"   >*/
/*         <label for="inputPassword" class="sr-only">Password</label>*/
/*         <input type="password" id="pass" name="pass" class="form-control" placeholder="Password"  >*/
/*         */
/*         <div class="invalid-form-error-message"></div>*/
/*         <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>*/
/*     </form>*/
/* {% endblock %}*/
/* */
/* */
