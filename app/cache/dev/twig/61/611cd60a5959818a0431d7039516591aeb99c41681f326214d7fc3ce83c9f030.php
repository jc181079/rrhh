<?php

/* personalBundle:add:adminExpLabAnt.html.twig */
class __TwigTemplate_c99de954c72ed2fe0c4d4cb642e6abffa8334426e98fedd1f3443878082b03f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "personalBundle:add:adminExpLabAnt.html.twig", 1);
        $_trait_0 = $this->loadTemplate("::botonera.html.twig", "personalBundle:add:adminExpLabAnt.html.twig", 2);
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
        $__internal_21cd52de137329eed69c5838c3edc1866429ca337942a3f15bc6ee4e25613150 = $this->env->getExtension("native_profiler");
        $__internal_21cd52de137329eed69c5838c3edc1866429ca337942a3f15bc6ee4e25613150->enter($__internal_21cd52de137329eed69c5838c3edc1866429ca337942a3f15bc6ee4e25613150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personalBundle:add:adminExpLabAnt.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21cd52de137329eed69c5838c3edc1866429ca337942a3f15bc6ee4e25613150->leave($__internal_21cd52de137329eed69c5838c3edc1866429ca337942a3f15bc6ee4e25613150_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_499be0b91e8639d0f33babc7372bb686ec9cf5401b467c6977d0faa261b2a38b = $this->env->getExtension("native_profiler");
        $__internal_499be0b91e8639d0f33babc7372bb686ec9cf5401b467c6977d0faa261b2a38b->enter($__internal_499be0b91e8639d0f33babc7372bb686ec9cf5401b467c6977d0faa261b2a38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_499be0b91e8639d0f33babc7372bb686ec9cf5401b467c6977d0faa261b2a38b->leave($__internal_499be0b91e8639d0f33babc7372bb686ec9cf5401b467c6977d0faa261b2a38b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d037d0aa33a8477cf917a152f28cb1894c9739b4dd9102474f8919bd8e5fcded = $this->env->getExtension("native_profiler");
        $__internal_d037d0aa33a8477cf917a152f28cb1894c9739b4dd9102474f8919bd8e5fcded->enter($__internal_d037d0aa33a8477cf917a152f28cb1894c9739b4dd9102474f8919bd8e5fcded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $context["xid"] = 0;
        // line 8
        echo "    <div class=\"container show-top-margin separate-rows tall-rows\">
        <div class=\"row\">        
            <!-- div de vista de los datos -->
            <div class=\"well well-small\">            
                ";
        // line 12
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
            // line 13
            echo "                    ";
            $context["xid"] = $this->getAttribute($context["ver"], "id", array());
            // line 14
            echo "                    <fieldset>
                        <legend>::Experiencia laboral anterior::</legend>
                        ";
            // line 17
            echo "                        ";
            // line 18
            echo "                        ";
            $this->displayBlock('botonera', $context, $blocks);
            // line 21
            echo "                        <p>
                           
                        <div class=\"form-inline\">
                            <div class=\"form-group\">
                                <label >Cedula</label>
                                ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "cedula", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label >Nombre</label>
                                ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "nombre", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label >Apellido</label>
                                ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "apellido", array()), "html", null, true);
            echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"></label>
                                ";
            // line 38
            if (((isset($context["perfil"]) ? $context["perfil"] : $this->getContext($context, "perfil")) == "Admin")) {
                // line 39
                echo "                                    <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_cons", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
                echo "'\">Volver</button>
                                ";
            } else {
                // line 41
                echo "                                    <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
                echo $this->env->getExtension('routing')->getPath("menu_principal_menu");
                echo "'\">Volver</button>
                                ";
            }
            // line 43
            echo "                            </div>
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
        // line 48
        echo "                ";
        // line 49
        echo "                <div class=\"col-md-6\"> 
                    <div class=\"form-inline\">
                        ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idempleado", array()), 'widget');
        echo "
                        <div class=\"form-group\">
                            <label >Institucion</label>
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "institucion", array()), 'widget');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label >denominacion</label>
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denominacion", array()), 'widget');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label >Cargo</label>
                            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cargo", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\"> 
                    <div class=\"input-group date\" data-provide=\"datepicker\">
                        <div class=\"form-group\">
                            <label >Fecha de ingreso</label>
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaingreso", array()), 'widget');
        echo "
                            <div class=\"input-group-addon\">
                                <span class=\"glyphicon glyphicon-th\"></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"input-group date\" data-provide=\"datepicker\">
                        <div class=\"form-group\">
                            <label >Fecha de egreso</label>
                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaegreso", array()), 'widget');
        echo "
                            <div class=\"input-group-addon\">
                                <span class=\"glyphicon glyphicon-th\"></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label >Razon del egreso</label>
                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "razonegreso", array()), 'widget');
        echo "
                    </div>
                </div>
                            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo "
                            
                        ";
        // line 93
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <p>        
                ";
        // line 97
        echo "                
            </div>
        </div>
                <div class=\"row\">
                    <div class=\"col-md-10\">
                        ";
        // line 103
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "Mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 104
            echo "                            <span class=\"alert-warning\" >
                                ";
            // line 105
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                        <table class=\"table table-striped\" align=\"center\">
                            <thead>
                                <tr>
                                    <th>Institucion</th>                                                              
                                    <th>Denominacion</th>
                                    <th>Cargo</th>
                                    <th>Fecha de ingreso</th>
                                    <th>Fecha de egreso</th>
                                    <th>Razon del egreso</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data2"]) ? $context["data2"] : $this->getContext($context, "data2")));
        foreach ($context['_seq'] as $context["_key"] => $context["ver2"]) {
            // line 122
            echo "                                    <tr>
                                        <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver2"], "institucion", array()), "html", null, true);
            echo "</td>
                                       <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver2"], "denominacion", array()), "html", null, true);
            echo "</td>
                                       <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver2"], "cargo", array()), "html", null, true);
            echo "</td>
                                       <td>";
            // line 126
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ver2"], "fechaingreso", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                       <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ver2"], "fechaegreso", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                       <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver2"], "razonegreso", array()), "html", null, true);
            echo "</td>
                                        <td><a class=\"popup-gmaps\" href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_exp_lab_ant_delete", array("id" => $this->getAttribute($context["ver2"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a></td>
                                    </tr> 
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "          
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
    ";
        // line 137
        $this->displayBlock('javascripts', $context, $blocks);
        // line 148
        echo "  
";
        
        $__internal_d037d0aa33a8477cf917a152f28cb1894c9739b4dd9102474f8919bd8e5fcded->leave($__internal_d037d0aa33a8477cf917a152f28cb1894c9739b4dd9102474f8919bd8e5fcded_prof);

    }

    // line 18
    public function block_botonera($context, array $blocks = array())
    {
        $__internal_902f68904b82dd43ed411afc0865ef76b9eb3b1b7bc0ed9092f822b0cbc73bbc = $this->env->getExtension("native_profiler");
        $__internal_902f68904b82dd43ed411afc0865ef76b9eb3b1b7bc0ed9092f822b0cbc73bbc->enter($__internal_902f68904b82dd43ed411afc0865ef76b9eb3b1b7bc0ed9092f822b0cbc73bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "botonera"));

        // line 19
        echo "                            ";
        $this->displayParentBlock("botonera", $context, $blocks);
        echo "
                        ";
        
        $__internal_902f68904b82dd43ed411afc0865ef76b9eb3b1b7bc0ed9092f822b0cbc73bbc->leave($__internal_902f68904b82dd43ed411afc0865ef76b9eb3b1b7bc0ed9092f822b0cbc73bbc_prof);

    }

    // line 137
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a843f16ae3835f9e6a27f19753a26a103b51872a90368206ee091a871b1457ab = $this->env->getExtension("native_profiler");
        $__internal_a843f16ae3835f9e6a27f19753a26a103b51872a90368206ee091a871b1457ab->enter($__internal_a843f16ae3835f9e6a27f19753a26a103b51872a90368206ee091a871b1457ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 138
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script  src = \"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
        <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
        <script>
            var page={bootstrap:3};
            \$('.datepicker').datepicker({
                format: 'mm/dd/yyyy',
                startDate: '-3d'
            });
        </script>
    ";
        
        $__internal_a843f16ae3835f9e6a27f19753a26a103b51872a90368206ee091a871b1457ab->leave($__internal_a843f16ae3835f9e6a27f19753a26a103b51872a90368206ee091a871b1457ab_prof);

    }

    public function getTemplateName()
    {
        return "personalBundle:add:adminExpLabAnt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 139,  370 => 138,  364 => 137,  354 => 19,  348 => 18,  340 => 148,  338 => 137,  330 => 131,  321 => 129,  317 => 128,  313 => 127,  309 => 126,  305 => 125,  301 => 124,  297 => 123,  294 => 122,  290 => 121,  275 => 108,  266 => 105,  263 => 104,  258 => 103,  251 => 97,  245 => 93,  240 => 91,  234 => 88,  223 => 80,  211 => 71,  200 => 63,  193 => 59,  186 => 55,  180 => 52,  176 => 51,  172 => 49,  170 => 48,  152 => 43,  146 => 41,  140 => 39,  138 => 38,  131 => 34,  124 => 30,  117 => 26,  110 => 21,  107 => 18,  105 => 17,  101 => 14,  98 => 13,  81 => 12,  75 => 8,  72 => 7,  66 => 6,  56 => 4,  50 => 3,  35 => 1,  14 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% use "::botonera.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% set xid = 0 %}*/
/*     <div class="container show-top-margin separate-rows tall-rows">*/
/*         <div class="row">        */
/*             <!-- div de vista de los datos -->*/
/*             <div class="well well-small">            */
/*                 {% for ver in data1 %}*/
/*                     {% set xid = ver.id %}*/
/*                     <fieldset>*/
/*                         <legend>::Experiencia laboral anterior::</legend>*/
/*                         {# con el siguiente bloque se asegura que la #}*/
/*                         {# botonera sea la misma en todos los twig #}*/
/*                         {% block botonera %}*/
/*                             {{ parent() }}*/
/*                         {% endblock %}*/
/*                         <p>*/
/*                            */
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
/*                                 {% if perfil=='Admin' %}*/
/*                                     <button type="button" class="btn btn-default" onclick="location.href = '{{ path('personal_personal_cons',{'id':ver.id}) }}'">Volver</button>*/
/*                                 {% else %}*/
/*                                     <button type="button" class="btn btn-default" onclick="location.href = '{{ path('menu_principal_menu') }}'">Volver</button>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                     <p>        */
/*                     </fieldset>*/
/*                 {% endfor %}*/
/*                 {# se muestra el formulario de ingreso de la informacion academica #}*/
/*                 <div class="col-md-6"> */
/*                     <div class="form-inline">*/
/*                         {{ form_start(form) }}*/
/*                         {{ form_widget(form.idempleado) }}*/
/*                         <div class="form-group">*/
/*                             <label >Institucion</label>*/
/*                             {{ form_widget(form.institucion) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label >denominacion</label>*/
/*                             {{ form_widget(form.denominacion) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label >Cargo</label>*/
/*                             {{ form_widget(form.cargo) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6"> */
/*                     <div class="input-group date" data-provide="datepicker">*/
/*                         <div class="form-group">*/
/*                             <label >Fecha de ingreso</label>*/
/*                             {{ form_widget(form.fechaingreso) }}*/
/*                             <div class="input-group-addon">*/
/*                                 <span class="glyphicon glyphicon-th"></span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="input-group date" data-provide="datepicker">*/
/*                         <div class="form-group">*/
/*                             <label >Fecha de egreso</label>*/
/*                             {{ form_widget(form.fechaegreso) }}*/
/*                             <div class="input-group-addon">*/
/*                                 <span class="glyphicon glyphicon-th"></span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label >Razon del egreso</label>*/
/*                         {{ form_widget(form.razonegreso) }}*/
/*                     </div>*/
/*                 </div>*/
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
/*                     <div class="col-md-10">*/
/*                         {# para mostrar el mensaje de que se borro el dato #}*/
/*                         {% for flashMessage in app.session.flashbag.get('Mensaje') %}*/
/*                             <span class="alert-warning" >*/
/*                                 {{flashMessage}}*/
/*                             </span>*/
/*                         {% endfor%}*/
/*                         <table class="table table-striped" align="center">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>Institucion</th>                                                              */
/*                                     <th>Denominacion</th>*/
/*                                     <th>Cargo</th>*/
/*                                     <th>Fecha de ingreso</th>*/
/*                                     <th>Fecha de egreso</th>*/
/*                                     <th>Razon del egreso</th>*/
/*                                     <th></th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for ver2 in data2 %}*/
/*                                     <tr>*/
/*                                         <td>{{ ver2.institucion }}</td>*/
/*                                        <td>{{ ver2.denominacion }}</td>*/
/*                                        <td>{{ ver2.cargo }}</td>*/
/*                                        <td>{{ ver2.fechaingreso|date('d-m-Y') }}</td>*/
/*                                        <td>{{ ver2.fechaegreso|date('d-m-Y') }}</td>*/
/*                                        <td>{{ ver2.razonegreso }}</td>*/
/*                                         <td><a class="popup-gmaps" href="{{ path('personal_personal_exp_lab_ant_delete',{'id':ver2.id}) }}"><span class="glyphicon glyphicon-trash"></span></a></td>*/
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
/*         <script>*/
/*             var page={bootstrap:3};*/
/*             $('.datepicker').datepicker({*/
/*                 format: 'mm/dd/yyyy',*/
/*                 startDate: '-3d'*/
/*             });*/
/*         </script>*/
/*     {% endblock %}  */
/* {% endblock %}*/
/* */
/* */
/* {# empty Twig template #}*/
/* */
