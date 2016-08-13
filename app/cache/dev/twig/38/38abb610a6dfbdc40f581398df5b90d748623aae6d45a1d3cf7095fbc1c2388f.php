<?php

/* personalBundle:add:adminRetenciones.html.twig */
class __TwigTemplate_316f5e5c1c68814224120fae0d40bf7d1c06453f32b41af6cb078fdead39f289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "personalBundle:add:adminRetenciones.html.twig", 1);
        $_trait_0 = $this->loadTemplate("::botonera.html.twig", "personalBundle:add:adminRetenciones.html.twig", 2);
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
        $__internal_7c85ccbc5787486aa64fb3926317547d4a08faa562c24ee8182f7a74847d4ab9 = $this->env->getExtension("native_profiler");
        $__internal_7c85ccbc5787486aa64fb3926317547d4a08faa562c24ee8182f7a74847d4ab9->enter($__internal_7c85ccbc5787486aa64fb3926317547d4a08faa562c24ee8182f7a74847d4ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personalBundle:add:adminRetenciones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c85ccbc5787486aa64fb3926317547d4a08faa562c24ee8182f7a74847d4ab9->leave($__internal_7c85ccbc5787486aa64fb3926317547d4a08faa562c24ee8182f7a74847d4ab9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2eb902ebb21be16d6dd77a283db7ebe2ce893d3bde9708ab7522a8364c8d7085 = $this->env->getExtension("native_profiler");
        $__internal_2eb902ebb21be16d6dd77a283db7ebe2ce893d3bde9708ab7522a8364c8d7085->enter($__internal_2eb902ebb21be16d6dd77a283db7ebe2ce893d3bde9708ab7522a8364c8d7085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_2eb902ebb21be16d6dd77a283db7ebe2ce893d3bde9708ab7522a8364c8d7085->leave($__internal_2eb902ebb21be16d6dd77a283db7ebe2ce893d3bde9708ab7522a8364c8d7085_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e9f7bd87749f51846a60734c2c5e7251fa622dd51b151a760d7354bdf5ae41a = $this->env->getExtension("native_profiler");
        $__internal_5e9f7bd87749f51846a60734c2c5e7251fa622dd51b151a760d7354bdf5ae41a->enter($__internal_5e9f7bd87749f51846a60734c2c5e7251fa622dd51b151a760d7354bdf5ae41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container show-top-margin separate-rows tall-rows\">
        <div class=\"row\">        
            <!-- div de vista de los datos -->
            <div class=\"well well-small\">            
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data1"]) ? $context["data1"] : $this->getContext($context, "data1")));
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
            // line 12
            echo "                    <fieldset>
                        <legend>::Retenciones de las nominas::</legend>
                        ";
            // line 15
            echo "                        ";
            // line 16
            echo "                        ";
            $this->displayBlock('botonera', $context, $blocks);
            // line 19
            echo "                        <p>
                        <div class=\"form-inline\">
                            <div class=\"form-group\">
                                <label >Cedula</label>
                                ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "cedula", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label >Nombre</label>
                                ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "nombre", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label >Apellido</label>
                                ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "apellido", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"></label>
                                <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_cons", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
            echo "'\">Volver</button>
                            </div>
                        </div>
                    <p>        
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
        // line 41
        echo "                ";
        // line 42
        echo "                        <div class=\"form-inline\">
                        ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            
                            <div class=\"form-group\">
                                <label >Asignaciones</label>
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idrete", array()), 'widget');
        echo "
                            </div>
                            
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo "
                            
                        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <p>        
                ";
        // line 56
        echo "                
            </div>
        </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        ";
        // line 62
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "Mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 63
            echo "                            <span class=\"alert-warning\" >
                                ";
            // line 64
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                        <table class=\"table\" align=\"center\">
                            <thead>
                                <tr>
                                    <th>Retenciones</th>                                                              
                                    
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data2"]) ? $context["data2"] : $this->getContext($context, "data2")));
        foreach ($context['_seq'] as $context["_key"] => $context["ver2"]) {
            // line 76
            echo "                                    <tr>
                                        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver2"], "denominacionRete", array()), "html", null, true);
            echo "</td>
                                        ";
            // line 78
            if (($this->getAttribute($context["ver2"], "id", array()) > 1)) {
                // line 79
                echo "                                           <td><a class=\"popup-gmaps\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_retenciones_delete", array("id" => $this->getAttribute($context["ver2"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a></td>
                                        ";
            }
            // line 81
            echo "                                    </tr> 
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "          
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
    ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo "  
";
        
        $__internal_5e9f7bd87749f51846a60734c2c5e7251fa622dd51b151a760d7354bdf5ae41a->leave($__internal_5e9f7bd87749f51846a60734c2c5e7251fa622dd51b151a760d7354bdf5ae41a_prof);

    }

    // line 16
    public function block_botonera($context, array $blocks = array())
    {
        $__internal_48779fd88f47d8bffc6fd826b683dbcb427e7412515ed6670911f9ab3403ff2e = $this->env->getExtension("native_profiler");
        $__internal_48779fd88f47d8bffc6fd826b683dbcb427e7412515ed6670911f9ab3403ff2e->enter($__internal_48779fd88f47d8bffc6fd826b683dbcb427e7412515ed6670911f9ab3403ff2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "botonera"));

        // line 17
        echo "                            ";
        $this->displayParentBlock("botonera", $context, $blocks);
        echo "
                        ";
        
        $__internal_48779fd88f47d8bffc6fd826b683dbcb427e7412515ed6670911f9ab3403ff2e->leave($__internal_48779fd88f47d8bffc6fd826b683dbcb427e7412515ed6670911f9ab3403ff2e_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_697cb425164df877b70f4a9e7543d4a3fa7bf3fa4841dc3feb3ef573c1e70a87 = $this->env->getExtension("native_profiler");
        $__internal_697cb425164df877b70f4a9e7543d4a3fa7bf3fa4841dc3feb3ef573c1e70a87->enter($__internal_697cb425164df877b70f4a9e7543d4a3fa7bf3fa4841dc3feb3ef573c1e70a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script  src = \"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
        <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
    ";
        
        $__internal_697cb425164df877b70f4a9e7543d4a3fa7bf3fa4841dc3feb3ef573c1e70a87->leave($__internal_697cb425164df877b70f4a9e7543d4a3fa7bf3fa4841dc3feb3ef573c1e70a87_prof);

    }

    public function getTemplateName()
    {
        return "personalBundle:add:adminRetenciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 90,  280 => 89,  274 => 88,  264 => 17,  258 => 16,  250 => 92,  248 => 88,  240 => 82,  233 => 81,  227 => 79,  225 => 78,  221 => 77,  218 => 76,  214 => 75,  204 => 67,  195 => 64,  192 => 63,  187 => 62,  180 => 56,  174 => 52,  169 => 50,  163 => 47,  156 => 43,  153 => 42,  151 => 41,  131 => 35,  124 => 31,  117 => 27,  110 => 23,  104 => 19,  101 => 16,  99 => 15,  95 => 12,  78 => 11,  72 => 7,  66 => 6,  56 => 4,  50 => 3,  35 => 1,  14 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% use "::botonera.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="container show-top-margin separate-rows tall-rows">*/
/*         <div class="row">        */
/*             <!-- div de vista de los datos -->*/
/*             <div class="well well-small">            */
/*                 {% for ver in data1 %}*/
/*                     <fieldset>*/
/*                         <legend>::Retenciones de las nominas::</legend>*/
/*                         {# con el siguiente bloque se asegura que la #}*/
/*                         {# botonera sea la misma en todos los twig #}*/
/*                         {% block botonera %}*/
/*                             {{ parent() }}*/
/*                         {% endblock %}*/
/*                         <p>*/
/*                         <div class="form-inline">*/
/*                             <div class="form-group">*/
/*                                 <label >Cedula</label>*/
/*                                 {{ver.cedula          }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label >Nombre</label>*/
/*                                 {{ver.nombre         }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label >Apellido</label>*/
/*                                 {{ver.apellido    }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label"></label>*/
/*                                 <button type="button" class="btn btn-default" onclick="location.href = '{{ path('personal_personal_cons',{'id':ver.id}) }}'">Volver</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     <p>        */
/*                     </fieldset>*/
/*                 {% endfor %}*/
/*                 {# se muestra el formulario de ingreso de la informacion academica #}*/
/*                         <div class="form-inline">*/
/*                         {{ form_start(form) }}*/
/*                             */
/*                             <div class="form-group">*/
/*                                 <label >Asignaciones</label>*/
/*                             {{ form_widget(form.idrete) }}*/
/*                             </div>*/
/*                             */
/*                             {{ form_widget(form.guardar) }}*/
/*                             */
/*                         {{ form_end(form) }}*/
/*                         </div>*/
/*                         <p>        */
/*                 {# se muestra la informacion de la tabla tblacademico #}*/
/*                 */
/*             </div>*/
/*         </div>*/
/*                 <div class="row">*/
/*                     <div class="col-md-6">*/
/*                         {# para mostrar el mensaje de que se borro el dato #}*/
/*                         {% for flashMessage in app.session.flashbag.get('Mensaje') %}*/
/*                             <span class="alert-warning" >*/
/*                                 {{flashMessage}}*/
/*                             </span>*/
/*                         {% endfor%}*/
/*                         <table class="table" align="center">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>Retenciones</th>                                                              */
/*                                     */
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for ver2 in data2 %}*/
/*                                     <tr>*/
/*                                         <td>{{ ver2.denominacionRete }}</td>*/
/*                                         {% if ver2.id >1 %}*/
/*                                            <td><a class="popup-gmaps" href="{{ path('personal_personal_retenciones_delete',{'id':ver2.id}) }}"><span class="glyphicon glyphicon-trash"></span></a></td>*/
/*                                         {% endif %}*/
/*                                     </tr> */
/*                                 {% endfor %}          */
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*     </div>*/
/*     {% block javascripts %}*/
/*         {{ parent() }}*/
/*         <script  src = "{{ asset('public/js/jquery-latest.min.js') }}"  type = "text / javascript"> </script>*/
/*         <script src = "https://code.jquery.com/jquery-2.1.3.js"></script>*/
/*     {% endblock %}  */
/* {% endblock %}*/
/* */
/* */
/* {# empty Twig template #}*/
/* */
