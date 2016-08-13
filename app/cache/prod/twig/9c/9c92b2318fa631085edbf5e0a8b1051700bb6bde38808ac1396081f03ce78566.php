<?php

/* ::base.html.twig */
class __TwigTemplate_9e07f7672ed4d43e93794f90ed6121fedfab1bee2c6a102410016c4346661ffb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "::Bienvenidos a talento humano::";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "          <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/docs.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          
        ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "           <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/npm.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/docs.min.js"), "html", null, true);
        echo "\" ></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 24,  111 => 23,  107 => 22,  103 => 21,  98 => 20,  95 => 19,  90 => 18,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  62 => 7,  59 => 6,  53 => 5,  47 => 26,  44 => 19,  42 => 18,  35 => 15,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}::Bienvenidos a talento humano::{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*           <link href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/bootstrap-theme.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/bootstrap-theme.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/bootstrap-theme.min.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/docs.min.css') }}" rel="stylesheet">*/
/*           */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*            <script src="{{ asset('public/js/bootstrap.js') }}" ></script>*/
/*            <script src="{{ asset('public/js/bootstrap.min.js') }}" ></script>*/
/*            <script src="{{ asset('public/js/npm.js') }}" ></script>*/
/*            <script src="{{ asset('public/js/jquery.js') }}" ></script>*/
/*            <script src="{{ asset('public/js/docs.min.js') }}" ></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
