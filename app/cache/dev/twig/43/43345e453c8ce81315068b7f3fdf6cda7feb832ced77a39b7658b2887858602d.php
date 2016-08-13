<?php

/* menuPrincipalBundle:Menu:construccion.html.twig */
class __TwigTemplate_f69a464ac27d179f3862fa8377106d2762cb5dc69e54e4ff562a8012c0f142ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "menuPrincipalBundle:Menu:construccion.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d873a486767c35aa315b4202a06f6bf1d274f77290194112dc8a6114fd209b2 = $this->env->getExtension("native_profiler");
        $__internal_3d873a486767c35aa315b4202a06f6bf1d274f77290194112dc8a6114fd209b2->enter($__internal_3d873a486767c35aa315b4202a06f6bf1d274f77290194112dc8a6114fd209b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menuPrincipalBundle:Menu:construccion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d873a486767c35aa315b4202a06f6bf1d274f77290194112dc8a6114fd209b2->leave($__internal_3d873a486767c35aa315b4202a06f6bf1d274f77290194112dc8a6114fd209b2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1248b13cac153f5ff0b725e1c9b6d7185b178e9d07eae3326c0f1be50ed246d1 = $this->env->getExtension("native_profiler");
        $__internal_1248b13cac153f5ff0b725e1c9b6d7185b178e9d07eae3326c0f1be50ed246d1->enter($__internal_1248b13cac153f5ff0b725e1c9b6d7185b178e9d07eae3326c0f1be50ed246d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_1248b13cac153f5ff0b725e1c9b6d7185b178e9d07eae3326c0f1be50ed246d1->leave($__internal_1248b13cac153f5ff0b725e1c9b6d7185b178e9d07eae3326c0f1be50ed246d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2d67d265bacd60955c8ac9e7dbc46d7273526d5fdf1eb2a2ff59adae58634b7 = $this->env->getExtension("native_profiler");
        $__internal_e2d67d265bacd60955c8ac9e7dbc46d7273526d5fdf1eb2a2ff59adae58634b7->enter($__internal_e2d67d265bacd60955c8ac9e7dbc46d7273526d5fdf1eb2a2ff59adae58634b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Main component for a primary marketing message or call to action -->
    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>Atencion</h1>
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/construccion.jpg"), "html", null, true);
        echo "\" />
            <a class=\"btn btn-lg btn-info\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("menu_principal_menu");
        echo "\" role=\"button\">Volver al menu principal</a>
        </div>   
    </div> 

    ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    

";
        
        $__internal_e2d67d265bacd60955c8ac9e7dbc46d7273526d5fdf1eb2a2ff59adae58634b7->leave($__internal_e2d67d265bacd60955c8ac9e7dbc46d7273526d5fdf1eb2a2ff59adae58634b7_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12743bad8861905979318d964a0b28d8473f5b060f042e8ec5790450e41e93d5 = $this->env->getExtension("native_profiler");
        $__internal_12743bad8861905979318d964a0b28d8473f5b060f042e8ec5790450e41e93d5->enter($__internal_12743bad8861905979318d964a0b28d8473f5b060f042e8ec5790450e41e93d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script  src = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  tipo = \"text / javascript\"> < / script>
                < script src = \"https://code.jquery.com/jquery-2.1.3.js\" ></script>
        <script src=\"js/bootstrap.js\"></script>
        <script> \$('.collapse').collapse()</script>
    ";
        
        $__internal_12743bad8861905979318d964a0b28d8473f5b060f042e8ec5790450e41e93d5->leave($__internal_12743bad8861905979318d964a0b28d8473f5b060f042e8ec5790450e41e93d5_prof);

    }

    public function getTemplateName()
    {
        return "menuPrincipalBundle:Menu:construccion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 18,  93 => 17,  87 => 16,  78 => 22,  76 => 16,  69 => 12,  65 => 11,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*     <!-- Main component for a primary marketing message or call to action -->*/
/*     <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>Atencion</h1>*/
/*             <img src="{{ asset('public/images/construccion.jpg') }}" />*/
/*             <a class="btn btn-lg btn-info" href="{{ path('menu_principal_menu') }}" role="button">Volver al menu principal</a>*/
/*         </div>   */
/*     </div> */
/* */
/*     {% block javascripts %}*/
/*         {{ parent() }}*/
/*         <script  src = "{{ asset('public/js/jquery-latest.min.js') }}"  tipo = "text / javascript"> < / script>*/
/*                 < script src = "https://code.jquery.com/jquery-2.1.3.js" ></script>*/
/*         <script src="js/bootstrap.js"></script>*/
/*         <script> $('.collapse').collapse()</script>*/
/*     {% endblock %}    */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
