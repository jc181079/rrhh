<?php

/* ::base.html.twig */
class __TwigTemplate_2a4105ae027205d7f74bebb36269348130399aefef49c4238af953c549d53b59 extends Twig_Template
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
        $__internal_6762bd17ef411fd01eb58e826db4a8ff6186a46d750172fef7602e760f488373 = $this->env->getExtension("native_profiler");
        $__internal_6762bd17ef411fd01eb58e826db4a8ff6186a46d750172fef7602e760f488373->enter($__internal_6762bd17ef411fd01eb58e826db4a8ff6186a46d750172fef7602e760f488373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    </body>
</html>
";
        
        $__internal_6762bd17ef411fd01eb58e826db4a8ff6186a46d750172fef7602e760f488373->leave($__internal_6762bd17ef411fd01eb58e826db4a8ff6186a46d750172fef7602e760f488373_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e05d29b3650c023e5eada2c3664faa61ada3ae7ef3d6ad0f9afac97443c9652d = $this->env->getExtension("native_profiler");
        $__internal_e05d29b3650c023e5eada2c3664faa61ada3ae7ef3d6ad0f9afac97443c9652d->enter($__internal_e05d29b3650c023e5eada2c3664faa61ada3ae7ef3d6ad0f9afac97443c9652d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "::Bienvenidos a talento humano::";
        
        $__internal_e05d29b3650c023e5eada2c3664faa61ada3ae7ef3d6ad0f9afac97443c9652d->leave($__internal_e05d29b3650c023e5eada2c3664faa61ada3ae7ef3d6ad0f9afac97443c9652d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a528bc652a5eeeb7470e2fd07012d76249538c9d1015d5f6c31b7a3c8c752fc0 = $this->env->getExtension("native_profiler");
        $__internal_a528bc652a5eeeb7470e2fd07012d76249538c9d1015d5f6c31b7a3c8c752fc0->enter($__internal_a528bc652a5eeeb7470e2fd07012d76249538c9d1015d5f6c31b7a3c8c752fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
          <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          
        ";
        
        $__internal_a528bc652a5eeeb7470e2fd07012d76249538c9d1015d5f6c31b7a3c8c752fc0->leave($__internal_a528bc652a5eeeb7470e2fd07012d76249538c9d1015d5f6c31b7a3c8c752fc0_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_afeef312d464331e29f966eae487ab4d514d7e5eb59baded06825c873586a5dc = $this->env->getExtension("native_profiler");
        $__internal_afeef312d464331e29f966eae487ab4d514d7e5eb59baded06825c873586a5dc->enter($__internal_afeef312d464331e29f966eae487ab4d514d7e5eb59baded06825c873586a5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_afeef312d464331e29f966eae487ab4d514d7e5eb59baded06825c873586a5dc->leave($__internal_afeef312d464331e29f966eae487ab4d514d7e5eb59baded06825c873586a5dc_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8c8faa3fb656240e51d997e8749aa4c20d504c10edf6b52bd3b8c6b72fe1d6c = $this->env->getExtension("native_profiler");
        $__internal_d8c8faa3fb656240e51d997e8749aa4c20d504c10edf6b52bd3b8c6b72fe1d6c->enter($__internal_d8c8faa3fb656240e51d997e8749aa4c20d504c10edf6b52bd3b8c6b72fe1d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "           <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/npm.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/docs.min.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap-treeview.js"), "html", null, true);
        echo "\" ></script>
        ";
        
        $__internal_d8c8faa3fb656240e51d997e8749aa4c20d504c10edf6b52bd3b8c6b72fe1d6c->leave($__internal_d8c8faa3fb656240e51d997e8749aa4c20d504c10edf6b52bd3b8c6b72fe1d6c_prof);

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
        return array (  150 => 26,  146 => 25,  142 => 24,  138 => 23,  134 => 22,  129 => 21,  123 => 20,  112 => 19,  102 => 13,  98 => 12,  94 => 11,  90 => 10,  86 => 9,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 28,  47 => 20,  45 => 19,  38 => 16,  36 => 6,  32 => 5,  26 => 1,);
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
/*           <link href="{{ asset('public/css/bootstrap-theme.css') }}" rel="stylesheet">*/
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
/*            <script src="{{ asset('public/js/bootstrap-treeview.js') }}" ></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
