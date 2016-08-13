<?php

/* personalBundle:Default:index.html.twig */
class __TwigTemplate_b58d6f6aafbd9cc9df0c2ea2cc2c3262c505aa064f57e854c80043f21f31265b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a9097830aafd748920e7149e90a331ee532f89332b98c752215e8a19c09175e = $this->env->getExtension("native_profiler");
        $__internal_4a9097830aafd748920e7149e90a331ee532f89332b98c752215e8a19c09175e->enter($__internal_4a9097830aafd748920e7149e90a331ee532f89332b98c752215e8a19c09175e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personalBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_4a9097830aafd748920e7149e90a331ee532f89332b98c752215e8a19c09175e->leave($__internal_4a9097830aafd748920e7149e90a331ee532f89332b98c752215e8a19c09175e_prof);

    }

    public function getTemplateName()
    {
        return "personalBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
