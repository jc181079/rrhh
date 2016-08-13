<?php

/* definicionesBundle:del:delCargo.html.twig */
class __TwigTemplate_082c0a56756d7613d746c893f7e74ad81afd75bf606379cef1656bd5c288fc67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "definicionesBundle:del:delCargo.html.twig", 1);
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
        $__internal_8030153b177f21f4f6ea556837fe9d4de1426d78950a40abe8a951efd9770d03 = $this->env->getExtension("native_profiler");
        $__internal_8030153b177f21f4f6ea556837fe9d4de1426d78950a40abe8a951efd9770d03->enter($__internal_8030153b177f21f4f6ea556837fe9d4de1426d78950a40abe8a951efd9770d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "definicionesBundle:del:delCargo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8030153b177f21f4f6ea556837fe9d4de1426d78950a40abe8a951efd9770d03->leave($__internal_8030153b177f21f4f6ea556837fe9d4de1426d78950a40abe8a951efd9770d03_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d3e0adbecb1b1caf8d785e46358fdd154fc0c469ea17c5d696db2e913ac73d1 = $this->env->getExtension("native_profiler");
        $__internal_7d3e0adbecb1b1caf8d785e46358fdd154fc0c469ea17c5d696db2e913ac73d1->enter($__internal_7d3e0adbecb1b1caf8d785e46358fdd154fc0c469ea17c5d696db2e913ac73d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_7d3e0adbecb1b1caf8d785e46358fdd154fc0c469ea17c5d696db2e913ac73d1->leave($__internal_7d3e0adbecb1b1caf8d785e46358fdd154fc0c469ea17c5d696db2e913ac73d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c46f101eab5c939a531c65acaf2a39c705d5b2345d098a11da1489230cf31dec = $this->env->getExtension("native_profiler");
        $__internal_c46f101eab5c939a531c65acaf2a39c705d5b2345d098a11da1489230cf31dec->enter($__internal_c46f101eab5c939a531c65acaf2a39c705d5b2345d098a11da1489230cf31dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "denominacion", array()), "html", null, true);
            echo "
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Sueldo</label>
                            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "sueldo", array()), "html", null, true);
            echo "
                        </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Desea eliminar este registro?</label>
                <button type=\"button\" class=\"btn btn-lg btn-success\" onclick=\"location.href='";
            // line 22
            echo $this->env->getExtension('routing')->getPath("definiciones_cargo_main");
            echo "'\">No</button> 
                <button type=\"button\" class=\"btn btn-lg btn-danger\" onclick=\"location.href='";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("definiciones_cargo_delete", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
            echo "'\">Si</button>
            </div>        
          </fieldset>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
    </div>
    </div>
        

";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    

";
        
        $__internal_c46f101eab5c939a531c65acaf2a39c705d5b2345d098a11da1489230cf31dec->leave($__internal_c46f101eab5c939a531c65acaf2a39c705d5b2345d098a11da1489230cf31dec_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_934a86f1673018a1b4715cd6818aca6aeb6469571dace5880e1f3d81557a321a = $this->env->getExtension("native_profiler");
        $__internal_934a86f1673018a1b4715cd6818aca6aeb6469571dace5880e1f3d81557a321a->enter($__internal_934a86f1673018a1b4715cd6818aca6aeb6469571dace5880e1f3d81557a321a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script  src = \"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
    <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
    <script src=\"js/bootstrap.js\"></script>
    <script> \$('.collapse'.collapse(</script>
";
        
        $__internal_934a86f1673018a1b4715cd6818aca6aeb6469571dace5880e1f3d81557a321a->leave($__internal_934a86f1673018a1b4715cd6818aca6aeb6469571dace5880e1f3d81557a321a_prof);

    }

    public function getTemplateName()
    {
        return "definicionesBundle:del:delCargo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  125 => 33,  119 => 32,  110 => 38,  108 => 32,  101 => 27,  91 => 23,  87 => 22,  80 => 18,  73 => 14,  67 => 10,  63 => 9,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
/*                             <label class="col-sm-2 control-label">Denominacion</label>*/
/*                             {{ver.denominacion }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Sueldo</label>*/
/*                             {{ver.sueldo          }}*/
/*                         </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Desea eliminar este registro?</label>*/
/*                 <button type="button" class="btn btn-lg btn-success" onclick="location.href='{{ path('definiciones_cargo_main') }}'">No</button> */
/*                 <button type="button" class="btn btn-lg btn-danger" onclick="location.href='{{ path('definiciones_cargo_delete',{'id':ver.id}) }}'">Si</button>*/
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
