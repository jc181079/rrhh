<?php

/* definicionesBundle:mod:modBanco.html.twig */
class __TwigTemplate_112bb48c2f5249596a3a0005af64a26695f65e532df68550941397d2b08c6d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "definicionesBundle:mod:modBanco.html.twig", 1);
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
        $__internal_a1e211d400a89baedf7483e246cb6176a2f05834d545d3b35a3f9c262f30e9c5 = $this->env->getExtension("native_profiler");
        $__internal_a1e211d400a89baedf7483e246cb6176a2f05834d545d3b35a3f9c262f30e9c5->enter($__internal_a1e211d400a89baedf7483e246cb6176a2f05834d545d3b35a3f9c262f30e9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "definicionesBundle:mod:modBanco.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1e211d400a89baedf7483e246cb6176a2f05834d545d3b35a3f9c262f30e9c5->leave($__internal_a1e211d400a89baedf7483e246cb6176a2f05834d545d3b35a3f9c262f30e9c5_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_352cbc2f6ea8d161dae108d74c82746a8c753c9d5d1c7b5d59efc326f72bfad9 = $this->env->getExtension("native_profiler");
        $__internal_352cbc2f6ea8d161dae108d74c82746a8c753c9d5d1c7b5d59efc326f72bfad9->enter($__internal_352cbc2f6ea8d161dae108d74c82746a8c753c9d5d1c7b5d59efc326f72bfad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_352cbc2f6ea8d161dae108d74c82746a8c753c9d5d1c7b5d59efc326f72bfad9->leave($__internal_352cbc2f6ea8d161dae108d74c82746a8c753c9d5d1c7b5d59efc326f72bfad9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb040c7cfb4871d9e0f89bd7d6e1f5fd143413c3355460b16508c6bec18cbd95 = $this->env->getExtension("native_profiler");
        $__internal_cb040c7cfb4871d9e0f89bd7d6e1f5fd143413c3355460b16508c6bec18cbd95->enter($__internal_cb040c7cfb4871d9e0f89bd7d6e1f5fd143413c3355460b16508c6bec18cbd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/parsley.min.js"), "html", null, true);
        echo "\" ></script>
    <div class=\"container\">
    <div class=\"container-fluid\">
        <div class=\"well well-small\">
        ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
          <fieldset>
            <legend>::Modifica datos del banco::</legend>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Denominacion</label>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denomninacionbnc", array()), 'widget');
        echo "
            </div>                     
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"></label>
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo " | <button type=\"button\" class=\"btn btn-lg btn-danger\" onclick=\"location.href='";
        echo $this->env->getExtension('routing')->getPath("definiciones_banco_main");
        echo "'\">Cancelar</button>
            </div>        
          </fieldset>
        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    </div>
";
        
        $__internal_cb040c7cfb4871d9e0f89bd7d6e1f5fd143413c3355460b16508c6bec18cbd95->leave($__internal_cb040c7cfb4871d9e0f89bd7d6e1f5fd143413c3355460b16508c6bec18cbd95_prof);

    }

    public function getTemplateName()
    {
        return "definicionesBundle:mod:modBanco.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  92 => 22,  85 => 18,  77 => 13,  70 => 9,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*     <div class="container">*/
/*     <div class="container-fluid">*/
/*         <div class="well well-small">*/
/*         {{ form_start(form) }}*/
/*           <fieldset>*/
/*             <legend>::Modifica datos del banco::</legend>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Denominacion</label>*/
/*                 {{ form_widget(form.denomninacionbnc) }}*/
/*             </div>                     */
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"></label>*/
/*                 {{ form_widget(form.guardar)      }} | <button type="button" class="btn btn-lg btn-danger" onclick="location.href='{{ path('definiciones_banco_main') }}'">Cancelar</button>*/
/*             </div>        */
/*           </fieldset>*/
/*         {{ form_end(form) }}*/
/*         </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
