<?php

/* personalBundle:cons:cons.html.twig */
class __TwigTemplate_3edab71b6f8ac100ef0a0d9a8a9b99f5d18da994ecb57c0841df190256c6919b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "personalBundle:cons:cons.html.twig", 1);
        $_trait_0 = $this->loadTemplate("::botonera.html.twig", "personalBundle:cons:cons.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."::botonera.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'stylesheets' => array($this, 'block_stylesheets'),
                'body' => array($this, 'block_body'),
                'botonera' => array($this, 'block_botonera'),
                'javascripts' => array($this, 'block_javascripts'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eec09b213696bc1ac3f1c308e1785fffa909a9c003a43a531b0547f0f849eb05 = $this->env->getExtension("native_profiler");
        $__internal_eec09b213696bc1ac3f1c308e1785fffa909a9c003a43a531b0547f0f849eb05->enter($__internal_eec09b213696bc1ac3f1c308e1785fffa909a9c003a43a531b0547f0f849eb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personalBundle:cons:cons.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eec09b213696bc1ac3f1c308e1785fffa909a9c003a43a531b0547f0f849eb05->leave($__internal_eec09b213696bc1ac3f1c308e1785fffa909a9c003a43a531b0547f0f849eb05_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_600bacca7d33a2245dd9429003cd23a112c38ec10c78d4f5966bb14957e5109b = $this->env->getExtension("native_profiler");
        $__internal_600bacca7d33a2245dd9429003cd23a112c38ec10c78d4f5966bb14957e5109b->enter($__internal_600bacca7d33a2245dd9429003cd23a112c38ec10c78d4f5966bb14957e5109b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_600bacca7d33a2245dd9429003cd23a112c38ec10c78d4f5966bb14957e5109b->leave($__internal_600bacca7d33a2245dd9429003cd23a112c38ec10c78d4f5966bb14957e5109b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f3885bbd165df47b7ec0cda3df6b3d21e54299e66510e0cf65e5a00f7f69cbe = $this->env->getExtension("native_profiler");
        $__internal_2f3885bbd165df47b7ec0cda3df6b3d21e54299e66510e0cf65e5a00f7f69cbe->enter($__internal_2f3885bbd165df47b7ec0cda3df6b3d21e54299e66510e0cf65e5a00f7f69cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container show-top-margin separate-rows tall-rows\">
    <div class=\"row\">
        
            <!-- div de vista de los datos -->
             <div class=\"well well-small\">            
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ver"]) {
            // line 13
            echo "                    <fieldset>
                        <legend>::Datos personales::</legend>
                        ";
            // line 16
            echo "                        ";
            // line 17
            echo "                        ";
            $this->displayBlock('botonera', $context, $blocks);
            // line 20
            echo "                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-6 control-label\">Rif</label>
                                ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "rif", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-6 control-label\">Cedula</label>
                                ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "cedula", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-6 control-label\">Nombre</label>
                                ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "nombre", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-6 control-label\">Apellido</label>
                                ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "apellido", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-6 control-label\">Estado Civil</label>
                                ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "ec", array()), "html", null, true);
            echo "
                            </div>
                            
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-6 \">Sexo</label>
                                ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "sexo", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-6 \">Telefono movil</label>
                                ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "tlfmovil", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-6 \">Telefono de casa</label>
                                ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "tlfcasa", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-6 \">Correo electronico</label>
                                ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "correoelectronico", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-6 \">Direccion</label>
                                ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "direccionhab", array()), "html", null, true);
            echo "
                            </div>
                        </div>
                        
                        
                        <div align=\"center\" class=\"col-md-9\">
                            <label class=\"col-sm-2 control-label\"></label>
                            <button type=\"button\" class=\"btn btn-lg btn-danger\" onclick=\"location.href = '";
            // line 69
            echo $this->env->getExtension('routing')->getPath("personal_personal");
            echo "'\">Volver</button>
                        </div> 

                    </fieldset>

                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
            </div>
       
       
    </div>
</div>

    ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "    

";
        
        $__internal_2f3885bbd165df47b7ec0cda3df6b3d21e54299e66510e0cf65e5a00f7f69cbe->leave($__internal_2f3885bbd165df47b7ec0cda3df6b3d21e54299e66510e0cf65e5a00f7f69cbe_prof);

    }

    // line 17
    public function block_botonera($context, array $blocks = array())
    {
        $__internal_b547495bfe719cda48fd80fb77a2c163777e0c355459bdd2409a3962fd8a4a76 = $this->env->getExtension("native_profiler");
        $__internal_b547495bfe719cda48fd80fb77a2c163777e0c355459bdd2409a3962fd8a4a76->enter($__internal_b547495bfe719cda48fd80fb77a2c163777e0c355459bdd2409a3962fd8a4a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "botonera"));

        // line 18
        echo "                            ";
        $this->displayParentBlock("botonera", $context, $blocks);
        echo "
                        ";
        
        $__internal_b547495bfe719cda48fd80fb77a2c163777e0c355459bdd2409a3962fd8a4a76->leave($__internal_b547495bfe719cda48fd80fb77a2c163777e0c355459bdd2409a3962fd8a4a76_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_387aab1a40771283e6f51ab4c71d334c496dbe9604b6b97d7d520fd9e567184b = $this->env->getExtension("native_profiler");
        $__internal_387aab1a40771283e6f51ab4c71d334c496dbe9604b6b97d7d520fd9e567184b->enter($__internal_387aab1a40771283e6f51ab4c71d334c496dbe9604b6b97d7d520fd9e567184b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script  src = \"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
        <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
        
        <script> 
//<![CDATA[
try{(function(a){var b=\"http://\",c=\"librosweb.es\",d=\"/cdn-cgi/cl/\",e=\"img.gif\",f=new a;f.src=[b,c,d,e].join(\"\")})(Image)}catch(e){}
//]]></script>
    ";
        
        $__internal_387aab1a40771283e6f51ab4c71d334c496dbe9604b6b97d7d520fd9e567184b->leave($__internal_387aab1a40771283e6f51ab4c71d334c496dbe9604b6b97d7d520fd9e567184b_prof);

    }

    public function getTemplateName()
    {
        return "personalBundle:cons:cons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 84,  248 => 83,  242 => 82,  232 => 18,  226 => 17,  217 => 91,  215 => 82,  206 => 75,  186 => 69,  176 => 62,  169 => 58,  162 => 54,  155 => 50,  148 => 46,  138 => 39,  131 => 35,  124 => 31,  117 => 27,  110 => 23,  105 => 20,  102 => 17,  100 => 16,  96 => 13,  79 => 12,  72 => 7,  66 => 6,  56 => 4,  50 => 3,  35 => 1,  14 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% use "::botonera.html.twig" %}*/
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
/*                         <legend>::Datos personales::</legend>*/
/*                         {# con el siguiente bloque se asegura que la #}*/
/*                         {# botonera sea la misma en todos los twig #}*/
/*                         {% block botonera %}*/
/*                             {{ parent() }}*/
/*                         {% endblock %}*/
/*                         <div class="col-md-6">*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-6 control-label">Rif</label>*/
/*                                 {{ver.rif }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-6 control-label">Cedula</label>*/
/*                                 {{ver.cedula          }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-6 control-label">Nombre</label>*/
/*                                 {{ver.nombre         }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-6 control-label">Apellido</label>*/
/*                                 {{ver.apellido    }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-6 control-label">Estado Civil</label>*/
/*                                 {{ver.ec    }}*/
/*                             </div>*/
/*                             */
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-6 ">Sexo</label>*/
/*                                 {{ver.sexo       }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-6 ">Telefono movil</label>*/
/*                                 {{ver.tlfmovil         }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-6 ">Telefono de casa</label>*/
/*                                 {{ver.tlfcasa         }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-6 ">Correo electronico</label>*/
/*                                 {{ver.correoelectronico      }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-6 ">Direccion</label>*/
/*                                 {{ver.direccionhab      }}*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         */
/*                         <div align="center" class="col-md-9">*/
/*                             <label class="col-sm-2 control-label"></label>*/
/*                             <button type="button" class="btn btn-lg btn-danger" onclick="location.href = '{{ path('personal_personal') }}'">Volver</button>*/
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
