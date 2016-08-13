<?php

/* personalBundle:add:add.html.twig */
class __TwigTemplate_9de52b4c57d2c14226bd3f5a3287adbe7718b747be963f24afea48f97cf63552 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "personalBundle:add:add.html.twig", 1);
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
        $__internal_17dfd0a6a1dc73c7382585c3ae789b22e1ef97a315136e9f2856ba99e355dfe9 = $this->env->getExtension("native_profiler");
        $__internal_17dfd0a6a1dc73c7382585c3ae789b22e1ef97a315136e9f2856ba99e355dfe9->enter($__internal_17dfd0a6a1dc73c7382585c3ae789b22e1ef97a315136e9f2856ba99e355dfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personalBundle:add:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17dfd0a6a1dc73c7382585c3ae789b22e1ef97a315136e9f2856ba99e355dfe9->leave($__internal_17dfd0a6a1dc73c7382585c3ae789b22e1ef97a315136e9f2856ba99e355dfe9_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c78a4dfcb4af0f01103962a346c1097b37247d113e6e01e6f0b436833d61c588 = $this->env->getExtension("native_profiler");
        $__internal_c78a4dfcb4af0f01103962a346c1097b37247d113e6e01e6f0b436833d61c588->enter($__internal_c78a4dfcb4af0f01103962a346c1097b37247d113e6e01e6f0b436833d61c588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c78a4dfcb4af0f01103962a346c1097b37247d113e6e01e6f0b436833d61c588->leave($__internal_c78a4dfcb4af0f01103962a346c1097b37247d113e6e01e6f0b436833d61c588_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a38a198fed4879114f8053ea975250b06f0e98571f538ce359229f080ba71ade = $this->env->getExtension("native_profiler");
        $__internal_a38a198fed4879114f8053ea975250b06f0e98571f538ce359229f080ba71ade->enter($__internal_a38a198fed4879114f8053ea975250b06f0e98571f538ce359229f080ba71ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "Mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "            <span class=\"alert-warning\" >
                ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
          <fieldset>
            <legend>::Nuevo empleado::</legend>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Rif</label>
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rif", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Cedula</label>
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Nombre</label>
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Apellido</label>
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Estado Civil</label>
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ec", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Sexo</label>
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Telefono movil</label>
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tlfmovil", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Telefono de casa</label>
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tlfcasa", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Correo electronico</label>
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correoelectronico", array()), 'widget');
        echo "
            </div>
             <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Direccion</label>
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccionhab", array()), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"></label>
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo " | <button type=\"button\" class=\"btn btn-lg btn-danger\" onclick=\"location.href='";
        echo $this->env->getExtension('routing')->getPath("personal_personal");
        echo "'\">Cancelar</button>
            </div>        
          </fieldset>
        ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
    </div>
";
        
        $__internal_a38a198fed4879114f8053ea975250b06f0e98571f538ce359229f080ba71ade->leave($__internal_a38a198fed4879114f8053ea975250b06f0e98571f538ce359229f080ba71ade_prof);

    }

    public function getTemplateName()
    {
        return "personalBundle:add:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 67,  173 => 64,  166 => 60,  159 => 56,  152 => 52,  145 => 48,  138 => 44,  131 => 40,  124 => 36,  117 => 32,  110 => 28,  103 => 24,  94 => 19,  85 => 16,  82 => 15,  77 => 14,  70 => 9,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*         {# para mostrar el mensaje de que se borro el dato #}*/
/*         {% for flashMessage in app.session.flashbag.get('Mensaje') %}*/
/*             <span class="alert-warning" >*/
/*                 {{flashMessage}}*/
/*             </span>*/
/*         {% endfor%}*/
/*         {{ form_start(form) }}*/
/*           <fieldset>*/
/*             <legend>::Nuevo empleado::</legend>*/
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
