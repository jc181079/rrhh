<?php

/* definicionesBundle:cons:consCargo.html.twig */
class __TwigTemplate_55631ea71e0cb4eb0765bac8f7460ca5e2b9cba5622212676bbd31b6403a772b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "definicionesBundle:cons:consCargo.html.twig", 1);
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
        $__internal_5f6c4380e4f3708b717170edc4926e4b11796d3c35e96fabc9aefc7c4edc0081 = $this->env->getExtension("native_profiler");
        $__internal_5f6c4380e4f3708b717170edc4926e4b11796d3c35e96fabc9aefc7c4edc0081->enter($__internal_5f6c4380e4f3708b717170edc4926e4b11796d3c35e96fabc9aefc7c4edc0081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "definicionesBundle:cons:consCargo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f6c4380e4f3708b717170edc4926e4b11796d3c35e96fabc9aefc7c4edc0081->leave($__internal_5f6c4380e4f3708b717170edc4926e4b11796d3c35e96fabc9aefc7c4edc0081_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_12ecfd04d219b218d5f435f6b1a33c204d793f0b94dc02299fc90b2e61d9f424 = $this->env->getExtension("native_profiler");
        $__internal_12ecfd04d219b218d5f435f6b1a33c204d793f0b94dc02299fc90b2e61d9f424->enter($__internal_12ecfd04d219b218d5f435f6b1a33c204d793f0b94dc02299fc90b2e61d9f424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_12ecfd04d219b218d5f435f6b1a33c204d793f0b94dc02299fc90b2e61d9f424->leave($__internal_12ecfd04d219b218d5f435f6b1a33c204d793f0b94dc02299fc90b2e61d9f424_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_735ddd47a716ebe7dd2c02cccf16174e0b3c46d3c218ba4fd74f8a588c68a9b5 = $this->env->getExtension("native_profiler");
        $__internal_735ddd47a716ebe7dd2c02cccf16174e0b3c46d3c218ba4fd74f8a588c68a9b5->enter($__internal_735ddd47a716ebe7dd2c02cccf16174e0b3c46d3c218ba4fd74f8a588c68a9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <legend>::Consulta del cargo::</legend>
                        
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Denominacion</label>
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "denominacion", array()), "html", null, true);
            echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Sueldo</label>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "sueldo", array()), "html", null, true);
            echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\"></label>
                            <button type=\"button\" class=\"btn btn-lg btn-danger\" onclick=\"location.href = '";
            // line 25
            echo $this->env->getExtension('routing')->getPath("definiciones_cargo_main");
            echo "'\">Volver</button>
                        </div> 

                    </fieldset>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
            </div>
       
       
    </div>
</div>

    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    

";
        
        $__internal_735ddd47a716ebe7dd2c02cccf16174e0b3c46d3c218ba4fd74f8a588c68a9b5->leave($__internal_735ddd47a716ebe7dd2c02cccf16174e0b3c46d3c218ba4fd74f8a588c68a9b5_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4b67cd4b99fb6a466f6b1527fa85d65b883d91db8456524b203d0c7f5b77d75 = $this->env->getExtension("native_profiler");
        $__internal_f4b67cd4b99fb6a466f6b1527fa85d65b883d91db8456524b203d0c7f5b77d75->enter($__internal_f4b67cd4b99fb6a466f6b1527fa85d65b883d91db8456524b203d0c7f5b77d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script  src = \"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
        <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
        
        <script> 
//<![CDATA[
try{(function(a){var b=\"http://\",c=\"librosweb.es\",d=\"/cdn-cgi/cl/\",e=\"img.gif\",f=new a;f.src=[b,c,d,e].join(\"\")})(Image)}catch(e){}
//]]></script>
    ";
        
        $__internal_f4b67cd4b99fb6a466f6b1527fa85d65b883d91db8456524b203d0c7f5b77d75->leave($__internal_f4b67cd4b99fb6a466f6b1527fa85d65b883d91db8456524b203d0c7f5b77d75_prof);

    }

    public function getTemplateName()
    {
        return "definicionesBundle:cons:consCargo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 40,  128 => 39,  122 => 38,  113 => 47,  111 => 38,  102 => 31,  90 => 25,  83 => 21,  76 => 17,  69 => 12,  65 => 11,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
/*                         <legend>::Consulta del cargo::</legend>*/
/*                         */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Denominacion</label>*/
/*                             {{ver.denominacion }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Sueldo</label>*/
/*                             {{ver.sueldo          }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label"></label>*/
/*                             <button type="button" class="btn btn-lg btn-danger" onclick="location.href = '{{ path('definiciones_cargo_main') }}'">Volver</button>*/
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
