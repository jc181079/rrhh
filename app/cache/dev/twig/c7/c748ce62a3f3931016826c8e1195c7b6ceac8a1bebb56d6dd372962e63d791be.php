<?php

/* definicionesBundle:add:cargoAdd.html.twig */
class __TwigTemplate_98751852c12643cf475d573c53419cc9b5a31a1959e3f8b18589835e00ffcc4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "definicionesBundle:add:cargoAdd.html.twig", 1);
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
        $__internal_bb623d9c483f04fe0f293291da541eaf2b1d112a7254b621c9ffc757eccbf474 = $this->env->getExtension("native_profiler");
        $__internal_bb623d9c483f04fe0f293291da541eaf2b1d112a7254b621c9ffc757eccbf474->enter($__internal_bb623d9c483f04fe0f293291da541eaf2b1d112a7254b621c9ffc757eccbf474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "definicionesBundle:add:cargoAdd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb623d9c483f04fe0f293291da541eaf2b1d112a7254b621c9ffc757eccbf474->leave($__internal_bb623d9c483f04fe0f293291da541eaf2b1d112a7254b621c9ffc757eccbf474_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c806468dfa513849a8eaee205edafd2065d36ef7c98db66b6b949b03a2a49e4 = $this->env->getExtension("native_profiler");
        $__internal_8c806468dfa513849a8eaee205edafd2065d36ef7c98db66b6b949b03a2a49e4->enter($__internal_8c806468dfa513849a8eaee205edafd2065d36ef7c98db66b6b949b03a2a49e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_8c806468dfa513849a8eaee205edafd2065d36ef7c98db66b6b949b03a2a49e4->leave($__internal_8c806468dfa513849a8eaee205edafd2065d36ef7c98db66b6b949b03a2a49e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae50301cc8d878bbb411256503e315b591ff57bc379173fb071d21cb5a9889a0 = $this->env->getExtension("native_profiler");
        $__internal_ae50301cc8d878bbb411256503e315b591ff57bc379173fb071d21cb5a9889a0->enter($__internal_ae50301cc8d878bbb411256503e315b591ff57bc379173fb071d21cb5a9889a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>::Modulo de Definiciones - Cargo - Agregar Nuevo</h1>
            <p>
                ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">Denominacion</label>
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denominacion", array()), 'widget');
        echo "
                    </div>
                   <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">Sueldo</label>
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sueldo", array()), 'widget');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"></label>
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo " | <button type=\"button\" class=\"btn btn-lg btn-danger\" onclick=\"location.href='";
        echo $this->env->getExtension('routing')->getPath("definiciones_cargo_main");
        echo "'\">Cancelar</button>
                    </div>
                ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                
            </p>
            
        </div>
        

        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    

    ";
        
        $__internal_ae50301cc8d878bbb411256503e315b591ff57bc379173fb071d21cb5a9889a0->leave($__internal_ae50301cc8d878bbb411256503e315b591ff57bc379173fb071d21cb5a9889a0_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30e1ff0c7453ef68c793955bf13dd6450606dc423054a55cdf85948bc36e20ca = $this->env->getExtension("native_profiler");
        $__internal_30e1ff0c7453ef68c793955bf13dd6450606dc423054a55cdf85948bc36e20ca->enter($__internal_30e1ff0c7453ef68c793955bf13dd6450606dc423054a55cdf85948bc36e20ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "            ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <script  src = \"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
            <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
            <script src=\"js/bootstrap.js\"></script>
            <script> \$('.collapse').collapse()</script>
        ";
        
        $__internal_30e1ff0c7453ef68c793955bf13dd6450606dc423054a55cdf85948bc36e20ca->leave($__internal_30e1ff0c7453ef68c793955bf13dd6450606dc423054a55cdf85948bc36e20ca_prof);

    }

    public function getTemplateName()
    {
        return "definicionesBundle:add:cargoAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 32,  118 => 31,  112 => 30,  103 => 36,  101 => 30,  91 => 23,  84 => 21,  77 => 17,  70 => 13,  64 => 10,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>::Modulo de Definiciones - Cargo - Agregar Nuevo</h1>*/
/*             <p>*/
/*                 {{ form_start(form) }}*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">Denominacion</label>*/
/*                         {{ form_widget(form.denominacion) }}*/
/*                     </div>*/
/*                    <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">Sueldo</label>*/
/*                         {{ form_widget(form.sueldo) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"></label>*/
/*                         {{ form_widget(form.guardar)      }} | <button type="button" class="btn btn-lg btn-danger" onclick="location.href='{{ path('definiciones_cargo_main') }}'">Cancelar</button>*/
/*                     </div>*/
/*                 {{ form_end(form) }}*/
/*                 */
/*             </p>*/
/*             */
/*         </div>*/
/*         */
/* */
/*         {% block javascripts %}*/
/*             {{ parent() }}*/
/*             <script  src = "{{ asset('public/js/jquery-latest.min.js') }}"  type = "text / javascript"> </script>*/
/*             <script src = "https://code.jquery.com/jquery-2.1.3.js"></script>*/
/*             <script src="js/bootstrap.js"></script>*/
/*             <script> $('.collapse').collapse()</script>*/
/*         {% endblock %}    */
/* */
/*     {% endblock %}*/
/* */
/* */
/* */
