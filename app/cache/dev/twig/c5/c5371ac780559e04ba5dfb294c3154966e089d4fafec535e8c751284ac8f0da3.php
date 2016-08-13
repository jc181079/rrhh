<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1feaa986519e4b1c7ccb3a33f64f3405fde834fa36f3415be5cd1e2b5f2bc6b5 extends Twig_Template
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
        $__internal_ae003b6f099c2156a5331a91aab6f28340dc4ba3ad0a79d150ce7879cb547df7 = $this->env->getExtension("native_profiler");
        $__internal_ae003b6f099c2156a5331a91aab6f28340dc4ba3ad0a79d150ce7879cb547df7->enter($__internal_ae003b6f099c2156a5331a91aab6f28340dc4ba3ad0a79d150ce7879cb547df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae003b6f099c2156a5331a91aab6f28340dc4ba3ad0a79d150ce7879cb547df7->leave($__internal_ae003b6f099c2156a5331a91aab6f28340dc4ba3ad0a79d150ce7879cb547df7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_444f954897e7e23790af2904d998420125afb61dfd94addecfd35734e94ecca5 = $this->env->getExtension("native_profiler");
        $__internal_444f954897e7e23790af2904d998420125afb61dfd94addecfd35734e94ecca5->enter($__internal_444f954897e7e23790af2904d998420125afb61dfd94addecfd35734e94ecca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_444f954897e7e23790af2904d998420125afb61dfd94addecfd35734e94ecca5->leave($__internal_444f954897e7e23790af2904d998420125afb61dfd94addecfd35734e94ecca5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_252abbeafed94c5d570b3aa6dcef7353f84524a39f77c5a22cd2ece70cd2912e = $this->env->getExtension("native_profiler");
        $__internal_252abbeafed94c5d570b3aa6dcef7353f84524a39f77c5a22cd2ece70cd2912e->enter($__internal_252abbeafed94c5d570b3aa6dcef7353f84524a39f77c5a22cd2ece70cd2912e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_252abbeafed94c5d570b3aa6dcef7353f84524a39f77c5a22cd2ece70cd2912e->leave($__internal_252abbeafed94c5d570b3aa6dcef7353f84524a39f77c5a22cd2ece70cd2912e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aee2529df811e4fbdef7eeb032aa0d8031ab47f7ce2198ef294b65a7d033ecfe = $this->env->getExtension("native_profiler");
        $__internal_aee2529df811e4fbdef7eeb032aa0d8031ab47f7ce2198ef294b65a7d033ecfe->enter($__internal_aee2529df811e4fbdef7eeb032aa0d8031ab47f7ce2198ef294b65a7d033ecfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_aee2529df811e4fbdef7eeb032aa0d8031ab47f7ce2198ef294b65a7d033ecfe->leave($__internal_aee2529df811e4fbdef7eeb032aa0d8031ab47f7ce2198ef294b65a7d033ecfe_prof);

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
