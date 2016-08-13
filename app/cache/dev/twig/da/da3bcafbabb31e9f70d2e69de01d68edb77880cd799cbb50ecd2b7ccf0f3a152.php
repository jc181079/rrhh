<?php

/* definicionesBundle:Default:index.html.twig */
class __TwigTemplate_43c2d32312db25453722daedcc68dc2dabba6dfaac01cb9dae1d18c72fabfd60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "definicionesBundle:Default:index.html.twig", 1);
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
        $__internal_6b204bce22539b730738c91d5d0bbd23fee7a86d037a64cae5e5e66665d7d382 = $this->env->getExtension("native_profiler");
        $__internal_6b204bce22539b730738c91d5d0bbd23fee7a86d037a64cae5e5e66665d7d382->enter($__internal_6b204bce22539b730738c91d5d0bbd23fee7a86d037a64cae5e5e66665d7d382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "definicionesBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b204bce22539b730738c91d5d0bbd23fee7a86d037a64cae5e5e66665d7d382->leave($__internal_6b204bce22539b730738c91d5d0bbd23fee7a86d037a64cae5e5e66665d7d382_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e29aad1bdc6130118fcdda18d9027550e25079462825ef957325f15b49f6cd85 = $this->env->getExtension("native_profiler");
        $__internal_e29aad1bdc6130118fcdda18d9027550e25079462825ef957325f15b49f6cd85->enter($__internal_e29aad1bdc6130118fcdda18d9027550e25079462825ef957325f15b49f6cd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_e29aad1bdc6130118fcdda18d9027550e25079462825ef957325f15b49f6cd85->leave($__internal_e29aad1bdc6130118fcdda18d9027550e25079462825ef957325f15b49f6cd85_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3e2fd16e7068c6b4e6b93d01778ce4c40d2598311801f768d5e3f5d6af61ce6 = $this->env->getExtension("native_profiler");
        $__internal_c3e2fd16e7068c6b4e6b93d01778ce4c40d2598311801f768d5e3f5d6af61ce6->enter($__internal_c3e2fd16e7068c6b4e6b93d01778ce4c40d2598311801f768d5e3f5d6af61ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<!-- Main component for a primary marketing message or call to action -->
<div class=\"container\">
    <div class=\"jumbotron\">
        <h1>Atencion</h1>
        <p>Las definiciones son todas aquellas opciones dinamicas que usara el sistema a lo largo de la ejecucion</p>
        <p>
            <a class=\"btn btn-lg btn-info\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("menu_principal_menu");
        echo "\" role=\"button\">Volver</a>
        </p>
    </div>
    <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                <h4 class=\"panel-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        Definiciones
                    </a>
                </h4>
            </div>
            <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                <div class=\"panel-body\">
                    <ul class=\"\">
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("definiciones_cargo_main");
        echo "\">Cargos</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("definiciones_banco_main");
        echo "\">Banco</a></li>
                        <!--li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
        echo "\">Asignaciones</a></li>
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
        echo "\">Deducciones</a></li-->
                                          
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    
</div>   
</div> 

";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    

";
        
        $__internal_c3e2fd16e7068c6b4e6b93d01778ce4c40d2598311801f768d5e3f5d6af61ce6->leave($__internal_c3e2fd16e7068c6b4e6b93d01778ce4c40d2598311801f768d5e3f5d6af61ce6_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9da7db159f880ee10d3a5fc7aa2f1689189002f0feaa7dda747dc21f9120332f = $this->env->getExtension("native_profiler");
        $__internal_9da7db159f880ee10d3a5fc7aa2f1689189002f0feaa7dda747dc21f9120332f->enter($__internal_9da7db159f880ee10d3a5fc7aa2f1689189002f0feaa7dda747dc21f9120332f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script  src = \"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  tipo = \"text / javascript\"> < / script>
               < script src = \"https://code.jquery.com/jquery-2.1.3.js\" ></script>
    <script src=\"js/bootstrap.js\"></script>
    <script> \$('.collapse').collapse()</script>
";
        
        $__internal_9da7db159f880ee10d3a5fc7aa2f1689189002f0feaa7dda747dc21f9120332f->leave($__internal_9da7db159f880ee10d3a5fc7aa2f1689189002f0feaa7dda747dc21f9120332f_prof);

    }

    public function getTemplateName()
    {
        return "definicionesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 44,  128 => 43,  122 => 42,  113 => 48,  111 => 42,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  66 => 12,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/* <!-- Main component for a primary marketing message or call to action -->*/
/* <div class="container">*/
/*     <div class="jumbotron">*/
/*         <h1>Atencion</h1>*/
/*         <p>Las definiciones son todas aquellas opciones dinamicas que usara el sistema a lo largo de la ejecucion</p>*/
/*         <p>*/
/*             <a class="btn btn-lg btn-info" href="{{ path('menu_principal_menu') }}" role="button">Volver</a>*/
/*         </p>*/
/*     </div>*/
/*     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading" role="tab" id="headingOne">*/
/*                 <h4 class="panel-title">*/
/*                     <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">*/
/*                         Definiciones*/
/*                     </a>*/
/*                 </h4>*/
/*             </div>*/
/*             <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">*/
/*                 <div class="panel-body">*/
/*                     <ul class="">*/
/*                         <li><a href="{{ path('definiciones_cargo_main') }}">Cargos</a></li>*/
/*                         <li><a href="{{ path('definiciones_banco_main') }}">Banco</a></li>*/
/*                         <!--li><a href="{{ path('menu_principal_construccion') }}">Asignaciones</a></li>*/
/*                         <li><a href="{{ path('menu_principal_construccion') }}">Deducciones</a></li-->*/
/*                                           */
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*     </div>*/
/*     */
/* </div>   */
/* </div> */
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script  src = "{{ asset('public/js/jquery-latest.min.js') }}"  tipo = "text / javascript"> < / script>*/
/*                < script src = "https://code.jquery.com/jquery-2.1.3.js" ></script>*/
/*     <script src="js/bootstrap.js"></script>*/
/*     <script> $('.collapse').collapse()</script>*/
/* {% endblock %}    */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
