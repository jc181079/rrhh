<?php

/* ::base.html.twig */
class __TwigTemplate_a4e73e9032cf89e9717e0bfa938a069e48a821806f3ca3b1cfbc1815664e7da4 extends Twig_Template
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
        $__internal_0f0ca97ff9ab9f66834cbcebc40b2cf395bf6a8dc4f332e2cb08c2ff2c31db0d = $this->env->getExtension("native_profiler");
        $__internal_0f0ca97ff9ab9f66834cbcebc40b2cf395bf6a8dc4f332e2cb08c2ff2c31db0d->enter($__internal_0f0ca97ff9ab9f66834cbcebc40b2cf395bf6a8dc4f332e2cb08c2ff2c31db0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 19
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </body>
</html> 
";
        
        $__internal_0f0ca97ff9ab9f66834cbcebc40b2cf395bf6a8dc4f332e2cb08c2ff2c31db0d->leave($__internal_0f0ca97ff9ab9f66834cbcebc40b2cf395bf6a8dc4f332e2cb08c2ff2c31db0d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d36922036b0f416ed8613a7dbcc5909c2d7dcc13cf1c3e13e6b9f8caf6dfc2b6 = $this->env->getExtension("native_profiler");
        $__internal_d36922036b0f416ed8613a7dbcc5909c2d7dcc13cf1c3e13e6b9f8caf6dfc2b6->enter($__internal_d36922036b0f416ed8613a7dbcc5909c2d7dcc13cf1c3e13e6b9f8caf6dfc2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "::Bienvenidos a talento humano::";
        
        $__internal_d36922036b0f416ed8613a7dbcc5909c2d7dcc13cf1c3e13e6b9f8caf6dfc2b6->leave($__internal_d36922036b0f416ed8613a7dbcc5909c2d7dcc13cf1c3e13e6b9f8caf6dfc2b6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c425e2bdacad95ef7a11e3eeece1e105ebaa73ae60db9dbb03475b1bfc14f5a1 = $this->env->getExtension("native_profiler");
        $__internal_c425e2bdacad95ef7a11e3eeece1e105ebaa73ae60db9dbb03475b1bfc14f5a1->enter($__internal_c425e2bdacad95ef7a11e3eeece1e105ebaa73ae60db9dbb03475b1bfc14f5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "          <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/docs.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/navbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/ie10-viewport-bug-workaround.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_c425e2bdacad95ef7a11e3eeece1e105ebaa73ae60db9dbb03475b1bfc14f5a1->leave($__internal_c425e2bdacad95ef7a11e3eeece1e105ebaa73ae60db9dbb03475b1bfc14f5a1_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_0382eee364d51db3e6eceba853ee55d42f2df5d3125d0ea5bb0c985800063df3 = $this->env->getExtension("native_profiler");
        $__internal_0382eee364d51db3e6eceba853ee55d42f2df5d3125d0ea5bb0c985800063df3->enter($__internal_0382eee364d51db3e6eceba853ee55d42f2df5d3125d0ea5bb0c985800063df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0382eee364d51db3e6eceba853ee55d42f2df5d3125d0ea5bb0c985800063df3->leave($__internal_0382eee364d51db3e6eceba853ee55d42f2df5d3125d0ea5bb0c985800063df3_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dcae5b3261fc91b7e018ecc4c7e8acb7f88d117c72c9e57596ea930865bce162 = $this->env->getExtension("native_profiler");
        $__internal_dcae5b3261fc91b7e018ecc4c7e8acb7f88d117c72c9e57596ea930865bce162->enter($__internal_dcae5b3261fc91b7e018ecc4c7e8acb7f88d117c72c9e57596ea930865bce162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "           <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/npm.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.0.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/docs.min.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap-treeview.js"), "html", null, true);
        echo "\" ></script>
           <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.0.min"), "html", null, true);
        echo "\" ></script>
        ";
        
        $__internal_dcae5b3261fc91b7e018ecc4c7e8acb7f88d117c72c9e57596ea930865bce162->leave($__internal_dcae5b3261fc91b7e018ecc4c7e8acb7f88d117c72c9e57596ea930865bce162_prof);

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
        return array (  173 => 31,  169 => 30,  165 => 29,  161 => 28,  157 => 27,  153 => 26,  149 => 25,  144 => 24,  138 => 23,  127 => 22,  118 => 17,  114 => 16,  110 => 15,  106 => 14,  102 => 13,  98 => 12,  94 => 11,  90 => 10,  86 => 9,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 33,  47 => 23,  45 => 22,  38 => 19,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}::Bienvenidos a talento humano::{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*           <link href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/datepicker3.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/bootstrap.min3.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/bootstrap-theme.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/bootstrap-theme.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/bootstrap-theme.min.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/docs.min.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/bootstrap-theme.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/navbar.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/main.css') }}" rel="stylesheet">*/
/*           <link href="{{ asset('public/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*            <script src="{{ asset('public/js/bootstrap.js') }}" ></script>*/
/*            <script src="{{ asset('public/js/bootstrap-datepicker.js') }}" ></script>*/
/*            <script src="{{ asset('public/js/bootstrap.min.js') }}" ></script>*/
/*            <script src="{{ asset('public/js/npm.js') }}" ></script>*/
/*            <script src="{{ asset('public/js/jquery-1.12.0.js') }}" ></script>*/
/*            <script src="{{ asset('public/js/docs.min.js') }}" ></script>*/
/*            <script src="{{ asset('public/js/bootstrap-treeview.js') }}" ></script>*/
/*            <script src="{{ asset('public/js/jquery-1.12.0.min') }}" ></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html> */
/* */
