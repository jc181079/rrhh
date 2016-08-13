<?php

/* personalBundle:mod:mod.html.twig */
class __TwigTemplate_5e41cdb093c2962ebaa2c7bd409d22abba80752a109e7c0ef34f8ffa08c3cab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "personalBundle:mod:mod.html.twig", 1);
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
        $__internal_5e79dc95f24a80af2ebd9f1321ed21dfa3ba54b4054727ffae4c5798d2988d4b = $this->env->getExtension("native_profiler");
        $__internal_5e79dc95f24a80af2ebd9f1321ed21dfa3ba54b4054727ffae4c5798d2988d4b->enter($__internal_5e79dc95f24a80af2ebd9f1321ed21dfa3ba54b4054727ffae4c5798d2988d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personalBundle:mod:mod.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e79dc95f24a80af2ebd9f1321ed21dfa3ba54b4054727ffae4c5798d2988d4b->leave($__internal_5e79dc95f24a80af2ebd9f1321ed21dfa3ba54b4054727ffae4c5798d2988d4b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebe77a73e6941c06fb1922c0952c4eae398dea7bba0d05ef04a1d85c6bd37fc0 = $this->env->getExtension("native_profiler");
        $__internal_ebe77a73e6941c06fb1922c0952c4eae398dea7bba0d05ef04a1d85c6bd37fc0->enter($__internal_ebe77a73e6941c06fb1922c0952c4eae398dea7bba0d05ef04a1d85c6bd37fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ebe77a73e6941c06fb1922c0952c4eae398dea7bba0d05ef04a1d85c6bd37fc0->leave($__internal_ebe77a73e6941c06fb1922c0952c4eae398dea7bba0d05ef04a1d85c6bd37fc0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_93154b53e52764895d705013d2aa943fef3af565c43e8b1f3c91b6d30bc5d1ca = $this->env->getExtension("native_profiler");
        $__internal_93154b53e52764895d705013d2aa943fef3af565c43e8b1f3c91b6d30bc5d1ca->enter($__internal_93154b53e52764895d705013d2aa943fef3af565c43e8b1f3c91b6d30bc5d1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <legend>::Modifica datos del empleado::</legend>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Rif</label>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rif", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Cedula</label>
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Nombre</label>
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Apellido</label>
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Estado Civil</label>
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ec", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Sexo</label>
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Telefono movil</label>
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tlfmovil", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Telefono de casa</label>
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tlfcasa", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Correo electronico</label>
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoelectronico", array()), 'widget');
        echo "
            </div>
             <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Direccion</label>
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccionhab", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"></label>
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo " | <button type=\"button\" class=\"btn btn-lg btn-danger\" onclick=\"location.href='";
        echo $this->env->getExtension('routing')->getPath("personal_personal");
        echo "'\">Cancelar</button>
            </div>        
          </fieldset>
        ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    </div>
";
        
        $__internal_93154b53e52764895d705013d2aa943fef3af565c43e8b1f3c91b6d30bc5d1ca->leave($__internal_93154b53e52764895d705013d2aa943fef3af565c43e8b1f3c91b6d30bc5d1ca_prof);

    }

    public function getTemplateName()
    {
        return "personalBundle:mod:mod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 61,  155 => 58,  148 => 54,  141 => 50,  134 => 46,  127 => 42,  120 => 38,  113 => 34,  106 => 30,  99 => 26,  92 => 22,  85 => 18,  77 => 13,  70 => 9,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*             <legend>::Modifica datos del empleado::</legend>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Rif</label>*/
/*                 {{ form_widget(form.rif) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Cedula</label>*/
/*                 {{ form_widget(form.cedula)          }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Nombre</label>*/
/*                 {{ form_widget(form.nombre)         }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Apellido</label>*/
/*                 {{ form_widget(form.apellido)    }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Estado Civil</label>*/
/*                 {{ form_widget(form.ec)    }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Sexo</label>*/
/*                 {{ form_widget(form.sexo)       }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Telefono movil</label>*/
/*                 {{ form_widget(form.tlfmovil)         }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Telefono de casa</label>*/
/*                 {{ form_widget(form.tlfcasa)         }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Correo electronico</label>*/
/*                 {{ form_widget(form.correoelectronico)      }}*/
/*             </div>*/
/*              <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Direccion</label>*/
/*                 {{ form_widget(form.direccionhab)      }}*/
/*             </div>*/
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
