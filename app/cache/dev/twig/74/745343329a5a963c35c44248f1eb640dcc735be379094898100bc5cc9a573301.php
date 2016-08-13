<?php

/* definicionesBundle:add:bancoAdd.html.twig */
class __TwigTemplate_46d811a6bb851303f08d63a86b8891320800fad4751ac1f2f7e2e7dd35f2345f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "definicionesBundle:add:bancoAdd.html.twig", 1);
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
        $__internal_6aca0b7ef33757099f5994e8a38ec80b66892c3644fce240dec736abe572a600 = $this->env->getExtension("native_profiler");
        $__internal_6aca0b7ef33757099f5994e8a38ec80b66892c3644fce240dec736abe572a600->enter($__internal_6aca0b7ef33757099f5994e8a38ec80b66892c3644fce240dec736abe572a600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "definicionesBundle:add:bancoAdd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aca0b7ef33757099f5994e8a38ec80b66892c3644fce240dec736abe572a600->leave($__internal_6aca0b7ef33757099f5994e8a38ec80b66892c3644fce240dec736abe572a600_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4457253ec7a21db0e4704bae9fe0f29408376454be5d1f3b7e40bcfeb9e64f8b = $this->env->getExtension("native_profiler");
        $__internal_4457253ec7a21db0e4704bae9fe0f29408376454be5d1f3b7e40bcfeb9e64f8b->enter($__internal_4457253ec7a21db0e4704bae9fe0f29408376454be5d1f3b7e40bcfeb9e64f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_4457253ec7a21db0e4704bae9fe0f29408376454be5d1f3b7e40bcfeb9e64f8b->leave($__internal_4457253ec7a21db0e4704bae9fe0f29408376454be5d1f3b7e40bcfeb9e64f8b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d761f81e1f0e790055cec4ca7e927b47ef8314099e52d5a15767f105a0ba4bd6 = $this->env->getExtension("native_profiler");
        $__internal_d761f81e1f0e790055cec4ca7e927b47ef8314099e52d5a15767f105a0ba4bd6->enter($__internal_d761f81e1f0e790055cec4ca7e927b47ef8314099e52d5a15767f105a0ba4bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>::Modulo de Definiciones - Banco - Agregar Nuevo</h1>
            <p>
                ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">Denominacion</label>
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denomninacionbnc", array()), 'widget');
        echo "
                    </div>                  
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"></label>
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo " | <button type=\"button\" class=\"btn btn-lg btn-danger\" onclick=\"location.href='";
        echo $this->env->getExtension('routing')->getPath("definiciones_banco_main");
        echo "'\">Cancelar</button>
                    </div>
                ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                
            </p>
            
        </div>
        

        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    

    ";
        
        $__internal_d761f81e1f0e790055cec4ca7e927b47ef8314099e52d5a15767f105a0ba4bd6->leave($__internal_d761f81e1f0e790055cec4ca7e927b47ef8314099e52d5a15767f105a0ba4bd6_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae4f58b00d82d9c06bf9e8682339360dbcec2fdd7349aa222ab4251e57de2b0c = $this->env->getExtension("native_profiler");
        $__internal_ae4f58b00d82d9c06bf9e8682339360dbcec2fdd7349aa222ab4251e57de2b0c->enter($__internal_ae4f58b00d82d9c06bf9e8682339360dbcec2fdd7349aa222ab4251e57de2b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "            ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <script  src = \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
            <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
            <script src=\"js/bootstrap.js\"></script>
            <script> \$('.collapse').collapse()</script>
        ";
        
        $__internal_ae4f58b00d82d9c06bf9e8682339360dbcec2fdd7349aa222ab4251e57de2b0c->leave($__internal_ae4f58b00d82d9c06bf9e8682339360dbcec2fdd7349aa222ab4251e57de2b0c_prof);

    }

    public function getTemplateName()
    {
        return "definicionesBundle:add:bancoAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 28,  111 => 27,  105 => 26,  96 => 32,  94 => 26,  84 => 19,  77 => 17,  70 => 13,  64 => 10,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>::Modulo de Definiciones - Banco - Agregar Nuevo</h1>*/
/*             <p>*/
/*                 {{ form_start(form) }}*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">Denominacion</label>*/
/*                         {{ form_widget(form.denomninacionbnc) }}*/
/*                     </div>                  */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"></label>*/
/*                         {{ form_widget(form.guardar)      }} | <button type="button" class="btn btn-lg btn-danger" onclick="location.href='{{ path('definiciones_banco_main') }}'">Cancelar</button>*/
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
