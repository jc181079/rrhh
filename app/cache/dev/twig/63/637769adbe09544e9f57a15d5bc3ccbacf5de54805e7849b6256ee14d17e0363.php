<?php

/* definicionesBundle:del:delBanco.html.twig */
class __TwigTemplate_3e955f027b9377128313b53eb1b17762734137dadd45b804d6ec836f23428555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "definicionesBundle:del:delBanco.html.twig", 1);
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
        $__internal_e92f16384482895622aab74b50400685b23a77e44e55e6ebed9eabf3f9591cc1 = $this->env->getExtension("native_profiler");
        $__internal_e92f16384482895622aab74b50400685b23a77e44e55e6ebed9eabf3f9591cc1->enter($__internal_e92f16384482895622aab74b50400685b23a77e44e55e6ebed9eabf3f9591cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "definicionesBundle:del:delBanco.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e92f16384482895622aab74b50400685b23a77e44e55e6ebed9eabf3f9591cc1->leave($__internal_e92f16384482895622aab74b50400685b23a77e44e55e6ebed9eabf3f9591cc1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a834ac58d5aba5ec06af2b65bd999cee15ef3455c5ee475e0c88570f4ca53730 = $this->env->getExtension("native_profiler");
        $__internal_a834ac58d5aba5ec06af2b65bd999cee15ef3455c5ee475e0c88570f4ca53730->enter($__internal_a834ac58d5aba5ec06af2b65bd999cee15ef3455c5ee475e0c88570f4ca53730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_a834ac58d5aba5ec06af2b65bd999cee15ef3455c5ee475e0c88570f4ca53730->leave($__internal_a834ac58d5aba5ec06af2b65bd999cee15ef3455c5ee475e0c88570f4ca53730_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c74a172bc3ab94d47d95bc286a08a947c62138b9d809037a7ced1c896f20a93 = $this->env->getExtension("native_profiler");
        $__internal_1c74a172bc3ab94d47d95bc286a08a947c62138b9d809037a7ced1c896f20a93->enter($__internal_1c74a172bc3ab94d47d95bc286a08a947c62138b9d809037a7ced1c896f20a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
    <div class=\"container-fluid\">
        <div class=\"well well-small\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["ver"]) {
            // line 10
            echo "          <fieldset>
            <legend>::Eliminacion del cargo::</legend>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Denominacion</label>
                ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "denomninacionbnc", array()), "html", null, true);
            echo "
            </div>                
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Desea eliminar este registro?</label>
                <button type=\"button\" class=\"btn btn-lg btn-success\" onclick=\"location.href='";
            // line 18
            echo $this->env->getExtension('routing')->getPath("definiciones_banco_main");
            echo "'\">No</button> 
                <button type=\"button\" class=\"btn btn-lg btn-danger\" onclick=\"location.href='";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("definiciones_banco_delete", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
            echo "'\">Si</button>
            </div>        
          </fieldset>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
    </div>
        

";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    

";
        
        $__internal_1c74a172bc3ab94d47d95bc286a08a947c62138b9d809037a7ced1c896f20a93->leave($__internal_1c74a172bc3ab94d47d95bc286a08a947c62138b9d809037a7ced1c896f20a93_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_344d48f601743155d4c4b45deab90a8b9809e6ab8ec3c00b0ad714f27dbb2bdc = $this->env->getExtension("native_profiler");
        $__internal_344d48f601743155d4c4b45deab90a8b9809e6ab8ec3c00b0ad714f27dbb2bdc->enter($__internal_344d48f601743155d4c4b45deab90a8b9809e6ab8ec3c00b0ad714f27dbb2bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script  src = \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
    <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
    <script src=\"js/bootstrap.js\"></script>
    <script> \$('.collapse'.collapse(</script>
";
        
        $__internal_344d48f601743155d4c4b45deab90a8b9809e6ab8ec3c00b0ad714f27dbb2bdc->leave($__internal_344d48f601743155d4c4b45deab90a8b9809e6ab8ec3c00b0ad714f27dbb2bdc_prof);

    }

    public function getTemplateName()
    {
        return "definicionesBundle:del:delBanco.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 30,  118 => 29,  112 => 28,  103 => 34,  101 => 28,  94 => 23,  84 => 19,  80 => 18,  73 => 14,  67 => 10,  63 => 9,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*     <div class="container-fluid">*/
/*         <div class="well well-small">*/
/*         {% for ver in data %}*/
/*           <fieldset>*/
/*             <legend>::Eliminacion del cargo::</legend>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Denominacion</label>*/
/*                 {{ver.denomninacionbnc }}*/
/*             </div>                */
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Desea eliminar este registro?</label>*/
/*                 <button type="button" class="btn btn-lg btn-success" onclick="location.href='{{ path('definiciones_banco_main') }}'">No</button> */
/*                 <button type="button" class="btn btn-lg btn-danger" onclick="location.href='{{ path('definiciones_banco_delete',{'id':ver.id}) }}'">Si</button>*/
/*             </div>        */
/*           </fieldset>*/
/*         {% endfor %}*/
/*         </div>*/
/*     </div>*/
/*     </div>*/
/*         */
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script  src = "{{ asset('public/js/jquery-latest.min.js') }}"  type = "text / javascript"> </script>*/
/*     <script src = "https://code.jquery.com/jquery-2.1.3.js"></script>*/
/*     <script src="js/bootstrap.js"></script>*/
/*     <script> $('.collapse'.collapse(</script>*/
/* {% endblock %}    */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
