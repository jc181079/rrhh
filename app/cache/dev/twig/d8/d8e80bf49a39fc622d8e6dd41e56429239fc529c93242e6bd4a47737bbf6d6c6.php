<?php

/* personalBundle:add:adminAca.html.twig */
class __TwigTemplate_36d16bcee1438aaa6f0de80103cc00845d893d5af81e2368d79845e0f0f23476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "personalBundle:add:adminAca.html.twig", 1);
        $_trait_0 = $this->loadTemplate("::botonera.html.twig", "personalBundle:add:adminAca.html.twig", 2);
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
        $__internal_9e83266d4998b9a8c2d58d395031ddce855395ee9eb260876e4a3f44835fd025 = $this->env->getExtension("native_profiler");
        $__internal_9e83266d4998b9a8c2d58d395031ddce855395ee9eb260876e4a3f44835fd025->enter($__internal_9e83266d4998b9a8c2d58d395031ddce855395ee9eb260876e4a3f44835fd025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personalBundle:add:adminAca.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e83266d4998b9a8c2d58d395031ddce855395ee9eb260876e4a3f44835fd025->leave($__internal_9e83266d4998b9a8c2d58d395031ddce855395ee9eb260876e4a3f44835fd025_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8ea50dd193d4b9866c33f488ddac6fc1779463e13354baef6564a6a6bf98e1e = $this->env->getExtension("native_profiler");
        $__internal_b8ea50dd193d4b9866c33f488ddac6fc1779463e13354baef6564a6a6bf98e1e->enter($__internal_b8ea50dd193d4b9866c33f488ddac6fc1779463e13354baef6564a6a6bf98e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_b8ea50dd193d4b9866c33f488ddac6fc1779463e13354baef6564a6a6bf98e1e->leave($__internal_b8ea50dd193d4b9866c33f488ddac6fc1779463e13354baef6564a6a6bf98e1e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dc125627ab5c40b246d60205fc0fc53d2ad3d89fe91ee90ec9279a87352b770 = $this->env->getExtension("native_profiler");
        $__internal_8dc125627ab5c40b246d60205fc0fc53d2ad3d89fe91ee90ec9279a87352b770->enter($__internal_8dc125627ab5c40b246d60205fc0fc53d2ad3d89fe91ee90ec9279a87352b770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <legend>::Datos Academicos::</legend>
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
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idempleado", array()), 'widget');
        echo "
                            <div class=\"form-group\">
                                <label >Nivel</label>
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nivel", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                             <label >Area</label>
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "area", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                             <label >Profesion</label>
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profesion", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                             <label >Observacion</label>
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'widget');
        echo "
                            </div>
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Agregar", array()), 'widget');
        echo "
                            
                        ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <p>        
                ";
        // line 67
        echo "                
            </div>
        </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        ";
        // line 73
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "Mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 74
            echo "                            <span class=\"alert-warning\" >
                                ";
            // line 75
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                        <table class=\"table\" align=\"center\">
                            <thead>
                                <tr>
                                    <th>Nivel</th>
                                    <th>Area</th>
                                    <th>Profesion</th>
                                    <th>Observacion</th>                                        
                                    <th></th>                                        
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data2"]) ? $context["data2"] : $this->getContext($context, "data2")));
        foreach ($context['_seq'] as $context["_key"] => $context["ver2"]) {
            // line 91
            echo "                                    <tr>
                                        <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver2"], "nivel", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver2"], "area", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver2"], "profesion", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver2"], "observacion", array()), "html", null, true);
            echo "</td>
                                        <!--td><a class=\"popup-gmaps\" href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_cons", array("id" => $this->getAttribute($context["ver2"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a></td-->
                                        <td><a class=\"popup-gmaps\" href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_academico_delete", array("id" => $this->getAttribute($context["ver2"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a></td>
                                    </tr> 
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "          
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
    ";
        // line 105
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "  
";
        
        $__internal_8dc125627ab5c40b246d60205fc0fc53d2ad3d89fe91ee90ec9279a87352b770->leave($__internal_8dc125627ab5c40b246d60205fc0fc53d2ad3d89fe91ee90ec9279a87352b770_prof);

    }

    // line 16
    public function block_botonera($context, array $blocks = array())
    {
        $__internal_c5da5cc272b29752d994c85f803d69eb9b72d0e5958e8f944cc393b95a98b83b = $this->env->getExtension("native_profiler");
        $__internal_c5da5cc272b29752d994c85f803d69eb9b72d0e5958e8f944cc393b95a98b83b->enter($__internal_c5da5cc272b29752d994c85f803d69eb9b72d0e5958e8f944cc393b95a98b83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "botonera"));

        // line 17
        echo "                            ";
        $this->displayParentBlock("botonera", $context, $blocks);
        echo "
                        ";
        
        $__internal_c5da5cc272b29752d994c85f803d69eb9b72d0e5958e8f944cc393b95a98b83b->leave($__internal_c5da5cc272b29752d994c85f803d69eb9b72d0e5958e8f944cc393b95a98b83b_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d6027e37e2d6cc95298a682aac5e1a0a7e6a723ef618978e2c5ac821da5faff = $this->env->getExtension("native_profiler");
        $__internal_0d6027e37e2d6cc95298a682aac5e1a0a7e6a723ef618978e2c5ac821da5faff->enter($__internal_0d6027e37e2d6cc95298a682aac5e1a0a7e6a723ef618978e2c5ac821da5faff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script  src = \"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
        <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
    ";
        
        $__internal_0d6027e37e2d6cc95298a682aac5e1a0a7e6a723ef618978e2c5ac821da5faff->leave($__internal_0d6027e37e2d6cc95298a682aac5e1a0a7e6a723ef618978e2c5ac821da5faff_prof);

    }

    public function getTemplateName()
    {
        return "personalBundle:add:adminAca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 107,  317 => 106,  311 => 105,  301 => 17,  295 => 16,  287 => 109,  285 => 105,  277 => 99,  268 => 97,  264 => 96,  260 => 95,  256 => 94,  252 => 93,  248 => 92,  245 => 91,  241 => 90,  227 => 78,  218 => 75,  215 => 74,  210 => 73,  203 => 67,  197 => 63,  192 => 61,  187 => 59,  180 => 55,  173 => 51,  166 => 47,  160 => 44,  156 => 43,  153 => 42,  151 => 41,  131 => 35,  124 => 31,  117 => 27,  110 => 23,  104 => 19,  101 => 16,  99 => 15,  95 => 12,  78 => 11,  72 => 7,  66 => 6,  56 => 4,  50 => 3,  35 => 1,  14 => 2,  11 => 1,);
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
/*                         <legend>::Datos Academicos::</legend>*/
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
/*                             {{ form_widget(form.idempleado) }}*/
/*                             <div class="form-group">*/
/*                                 <label >Nivel</label>*/
/*                             {{ form_widget(form.nivel) }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                              <label >Area</label>*/
/*                             {{ form_widget(form.area) }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                              <label >Profesion</label>*/
/*                             {{ form_widget(form.profesion) }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                              <label >Observacion</label>*/
/*                             {{ form_widget(form.observacion) }}*/
/*                             </div>*/
/*                             {{ form_widget(form.Agregar) }}*/
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
/*                                     <th>Nivel</th>*/
/*                                     <th>Area</th>*/
/*                                     <th>Profesion</th>*/
/*                                     <th>Observacion</th>                                        */
/*                                     <th></th>                                        */
/*                                     <th></th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for ver2 in data2 %}*/
/*                                     <tr>*/
/*                                         <td>{{ ver2.nivel }}</td>*/
/*                                         <td>{{ ver2.area }}</td>*/
/*                                         <td>{{ ver2.profesion }}</td>*/
/*                                         <td>{{ ver2.observacion }}</td>*/
/*                                         <!--td><a class="popup-gmaps" href="{{ path('personal_personal_cons',{'id':ver2.id}) }}"><span class="glyphicon glyphicon-search"></span></a></td-->*/
/*                                         <td><a class="popup-gmaps" href="{{ path('personal_personal_academico_delete',{'id':ver2.id}) }}"><span class="glyphicon glyphicon-trash"></span></a></td>*/
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
