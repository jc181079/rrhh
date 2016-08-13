<?php

/* definicionesBundle:cons:consBanco.html.twig */
class __TwigTemplate_c5cd29476e58e35735f4a428f744822a51ac1673dbf9f205211d5662858f60b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "definicionesBundle:cons:consBanco.html.twig", 1);
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
        $__internal_a472be9c3dea2bc5e559c648a702ab8b37895fe958fe8ffe5d80ffc10957a2b4 = $this->env->getExtension("native_profiler");
        $__internal_a472be9c3dea2bc5e559c648a702ab8b37895fe958fe8ffe5d80ffc10957a2b4->enter($__internal_a472be9c3dea2bc5e559c648a702ab8b37895fe958fe8ffe5d80ffc10957a2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "definicionesBundle:cons:consBanco.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a472be9c3dea2bc5e559c648a702ab8b37895fe958fe8ffe5d80ffc10957a2b4->leave($__internal_a472be9c3dea2bc5e559c648a702ab8b37895fe958fe8ffe5d80ffc10957a2b4_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9810b4bacf678e9db5d0dfe4bd06339af2fbc5662209b8ca46c328129375a881 = $this->env->getExtension("native_profiler");
        $__internal_9810b4bacf678e9db5d0dfe4bd06339af2fbc5662209b8ca46c328129375a881->enter($__internal_9810b4bacf678e9db5d0dfe4bd06339af2fbc5662209b8ca46c328129375a881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_9810b4bacf678e9db5d0dfe4bd06339af2fbc5662209b8ca46c328129375a881->leave($__internal_9810b4bacf678e9db5d0dfe4bd06339af2fbc5662209b8ca46c328129375a881_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3a6600eb42cadd711c4e5f8e71f8adaab509e9c447ea8ae724c5ef46c14efdf = $this->env->getExtension("native_profiler");
        $__internal_a3a6600eb42cadd711c4e5f8e71f8adaab509e9c447ea8ae724c5ef46c14efdf->enter($__internal_a3a6600eb42cadd711c4e5f8e71f8adaab509e9c447ea8ae724c5ef46c14efdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container show-top-margin separate-rows tall-rows\">
    <div class=\"row\">
        
            <!-- div de vista de los datos -->
             <div class=\"well well-small\">            
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["ver"]) {
            // line 12
            echo "                    <fieldset>
                        <legend>::Consulta del banco::</legend>
                        
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Denominacion</label>
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "denomninacionbnc", array()), "html", null, true);
            echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"></label>
                            <button type=\"button\" class=\"btn btn-lg btn-danger\" onclick=\"location.href = '";
            // line 21
            echo $this->env->getExtension('routing')->getPath("definiciones_banco_main");
            echo "'\">Volver</button>
                        </div> 

                    </fieldset>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
            </div>
       
       
    </div>
</div>

    ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "    

";
        
        $__internal_a3a6600eb42cadd711c4e5f8e71f8adaab509e9c447ea8ae724c5ef46c14efdf->leave($__internal_a3a6600eb42cadd711c4e5f8e71f8adaab509e9c447ea8ae724c5ef46c14efdf_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2dc6fa6bd711668e8273cac97a8bde167843935480a8c0126022a9bdd9fbd71d = $this->env->getExtension("native_profiler");
        $__internal_2dc6fa6bd711668e8273cac97a8bde167843935480a8c0126022a9bdd9fbd71d->enter($__internal_2dc6fa6bd711668e8273cac97a8bde167843935480a8c0126022a9bdd9fbd71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script  src = \"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
        <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
        
        <script> 
//<![CDATA[
try{(function(a){var b=\"http://\",c=\"librosweb.es\",d=\"/cdn-cgi/cl/\",e=\"img.gif\",f=new a;f.src=[b,c,d,e].join(\"\")})(Image)}catch(e){}
//]]></script>
    ";
        
        $__internal_2dc6fa6bd711668e8273cac97a8bde167843935480a8c0126022a9bdd9fbd71d->leave($__internal_2dc6fa6bd711668e8273cac97a8bde167843935480a8c0126022a9bdd9fbd71d_prof);

    }

    public function getTemplateName()
    {
        return "definicionesBundle:cons:consBanco.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 36,  121 => 35,  115 => 34,  106 => 43,  104 => 34,  95 => 27,  83 => 21,  76 => 17,  69 => 12,  65 => 11,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/* <div class="container show-top-margin separate-rows tall-rows">*/
/*     <div class="row">*/
/*         */
/*             <!-- div de vista de los datos -->*/
/*              <div class="well well-small">            */
/*                 {% for ver in data %}*/
/*                     <fieldset>*/
/*                         <legend>::Consulta del banco::</legend>*/
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Denominacion</label>*/
/*                             {{ver.denomninacionbnc }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label"></label>*/
/*                             <button type="button" class="btn btn-lg btn-danger" onclick="location.href = '{{ path('definiciones_banco_main') }}'">Volver</button>*/
/*                         </div> */
/* */
/*                     </fieldset>*/
/* */
/*                 {% endfor %}*/
/* */
/*             </div>*/
/*        */
/*        */
/*     </div>*/
/* </div>*/
/* */
/*     {% block javascripts %}*/
/*         {{ parent() }}*/
/*         <script  src = "{{ asset('public/js/jquery-latest.min.js') }}"  type = "text / javascript"> </script>*/
/*         <script src = "https://code.jquery.com/jquery-2.1.3.js"></script>*/
/*         */
/*         <script> */
/* //<![CDATA[*/
/* try{(function(a){var b="http://",c="librosweb.es",d="/cdn-cgi/cl/",e="img.gif",f=new a;f.src=[b,c,d,e].join("")})(Image)}catch(e){}*/
/* //]]></script>*/
/*     {% endblock %}    */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
