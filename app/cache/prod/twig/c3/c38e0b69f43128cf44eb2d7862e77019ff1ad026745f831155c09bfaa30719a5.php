<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fcc918210fc30fed89c7029fbdedfe555a7639d63f970a84e7e07a89aa57e3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_741eca6d0fb48d990c01a39dc21a3f6e0183a9c69435ef56f87a83b5a835a7a4 = $this->env->getExtension("native_profiler");
        $__internal_741eca6d0fb48d990c01a39dc21a3f6e0183a9c69435ef56f87a83b5a835a7a4->enter($__internal_741eca6d0fb48d990c01a39dc21a3f6e0183a9c69435ef56f87a83b5a835a7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_741eca6d0fb48d990c01a39dc21a3f6e0183a9c69435ef56f87a83b5a835a7a4->leave($__internal_741eca6d0fb48d990c01a39dc21a3f6e0183a9c69435ef56f87a83b5a835a7a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47415082e3501c19d95b4f299f20d158a5636b6730ed6482589bfdbf74ecd2a6 = $this->env->getExtension("native_profiler");
        $__internal_47415082e3501c19d95b4f299f20d158a5636b6730ed6482589bfdbf74ecd2a6->enter($__internal_47415082e3501c19d95b4f299f20d158a5636b6730ed6482589bfdbf74ecd2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_47415082e3501c19d95b4f299f20d158a5636b6730ed6482589bfdbf74ecd2a6->leave($__internal_47415082e3501c19d95b4f299f20d158a5636b6730ed6482589bfdbf74ecd2a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b84e675be83d3f3230d850bf1932764081bb27c5144a22c8597ea307fdd4138 = $this->env->getExtension("native_profiler");
        $__internal_4b84e675be83d3f3230d850bf1932764081bb27c5144a22c8597ea307fdd4138->enter($__internal_4b84e675be83d3f3230d850bf1932764081bb27c5144a22c8597ea307fdd4138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b84e675be83d3f3230d850bf1932764081bb27c5144a22c8597ea307fdd4138->leave($__internal_4b84e675be83d3f3230d850bf1932764081bb27c5144a22c8597ea307fdd4138_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_08dc3585946fe034fcbb7bc5a4eeb59737b61d6375754cf35594a8c414cbef91 = $this->env->getExtension("native_profiler");
        $__internal_08dc3585946fe034fcbb7bc5a4eeb59737b61d6375754cf35594a8c414cbef91->enter($__internal_08dc3585946fe034fcbb7bc5a4eeb59737b61d6375754cf35594a8c414cbef91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_08dc3585946fe034fcbb7bc5a4eeb59737b61d6375754cf35594a8c414cbef91->leave($__internal_08dc3585946fe034fcbb7bc5a4eeb59737b61d6375754cf35594a8c414cbef91_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
