<?php

/* definicionesBundle:mod:modCargo.html.twig */
class __TwigTemplate_4726814c077cde56b628898501dffa972ff70a88b1cb7559e2e0f73b6b502f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "definicionesBundle:mod:modCargo.html.twig", 1);
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
        $__internal_1a5877044132ed29b8f52eeb4ef7de9d09affe736be9f117cb61a5ddf5f1674b = $this->env->getExtension("native_profiler");
        $__internal_1a5877044132ed29b8f52eeb4ef7de9d09affe736be9f117cb61a5ddf5f1674b->enter($__internal_1a5877044132ed29b8f52eeb4ef7de9d09affe736be9f117cb61a5ddf5f1674b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "definicionesBundle:mod:modCargo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a5877044132ed29b8f52eeb4ef7de9d09affe736be9f117cb61a5ddf5f1674b->leave($__internal_1a5877044132ed29b8f52eeb4ef7de9d09affe736be9f117cb61a5ddf5f1674b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32dc3bd6a28eb2ba8c3e3846c4a43f1b2b9d3538d033d87da1c9b59acadb5e06 = $this->env->getExtension("native_profiler");
        $__internal_32dc3bd6a28eb2ba8c3e3846c4a43f1b2b9d3538d033d87da1c9b59acadb5e06->enter($__internal_32dc3bd6a28eb2ba8c3e3846c4a43f1b2b9d3538d033d87da1c9b59acadb5e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_32dc3bd6a28eb2ba8c3e3846c4a43f1b2b9d3538d033d87da1c9b59acadb5e06->leave($__internal_32dc3bd6a28eb2ba8c3e3846c4a43f1b2b9d3538d033d87da1c9b59acadb5e06_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8535cf68740a272ba67ec0f58534bd6be249c83b59a12957efd50febdf57161a = $this->env->getExtension("native_profiler");
        $__internal_8535cf68740a272ba67ec0f58534bd6be249c83b59a12957efd50febdf57161a->enter($__internal_8535cf68740a272ba67ec0f58534bd6be249c83b59a12957efd50febdf57161a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <legend>::Modifica datos del cargo::</legend>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Denominacion</label>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denominacion", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Sueldo</label>
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sueldo", array()), 'widget');
        echo "
            </div>           
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"></label>
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo " | <button type=\"button\" class=\"btn btn-lg btn-danger\" onclick=\"location.href='";
        echo $this->env->getExtension('routing')->getPath("personal_personal");
        echo "'\">Cancelar</button>
            </div>        
          </fieldset>
        ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    </div>
";
        
        $__internal_8535cf68740a272ba67ec0f58534bd6be249c83b59a12957efd50febdf57161a->leave($__internal_8535cf68740a272ba67ec0f58534bd6be249c83b59a12957efd50febdf57161a_prof);

    }

    public function getTemplateName()
    {
        return "definicionesBundle:mod:modCargo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 29,  99 => 26,  92 => 22,  85 => 18,  77 => 13,  70 => 9,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*             <legend>::Modifica datos del cargo::</legend>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Denominacion</label>*/
/*                 {{ form_widget(form.denominacion) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Sueldo</label>*/
/*                 {{ form_widget(form.sueldo)          }}*/
/*             </div>           */
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"></label>*/
/*                 {{ form_widget(form.guardar)      }} | <button type="button" class="btn btn-lg btn-danger" onclick="location.href='{{ path('personal_personal') }}'">Cancelar</button>*/
/*             </div>        */
/*           </fieldset>*/
/*         {{ form_end(form) }}*/
/*         </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
