<?php

/* personalBundle:add:adminCargoAsignar.html.twig */
class __TwigTemplate_9a62db696ddf1f30fac555d5cb017a904bcb42925b0203c96641e9dbb1f83281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "personalBundle:add:adminCargoAsignar.html.twig", 1);
        $_trait_0 = $this->loadTemplate("::botonera.html.twig", "personalBundle:add:adminCargoAsignar.html.twig", 2);
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
        $__internal_548ae0bc3c82e7027a94a60fb8637794457a8820daaca91c33906b127ff6e084 = $this->env->getExtension("native_profiler");
        $__internal_548ae0bc3c82e7027a94a60fb8637794457a8820daaca91c33906b127ff6e084->enter($__internal_548ae0bc3c82e7027a94a60fb8637794457a8820daaca91c33906b127ff6e084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personalBundle:add:adminCargoAsignar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_548ae0bc3c82e7027a94a60fb8637794457a8820daaca91c33906b127ff6e084->leave($__internal_548ae0bc3c82e7027a94a60fb8637794457a8820daaca91c33906b127ff6e084_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_760baffd3bc73e913baf878ac777c0538db46aa0f33c200df48181c36b88db1e = $this->env->getExtension("native_profiler");
        $__internal_760baffd3bc73e913baf878ac777c0538db46aa0f33c200df48181c36b88db1e->enter($__internal_760baffd3bc73e913baf878ac777c0538db46aa0f33c200df48181c36b88db1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_760baffd3bc73e913baf878ac777c0538db46aa0f33c200df48181c36b88db1e->leave($__internal_760baffd3bc73e913baf878ac777c0538db46aa0f33c200df48181c36b88db1e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_48adb0d6d9268d5d69ec9692e3e38214ebabcecfaf60e95b280d3c9aae398f3a = $this->env->getExtension("native_profiler");
        $__internal_48adb0d6d9268d5d69ec9692e3e38214ebabcecfaf60e95b280d3c9aae398f3a->enter($__internal_48adb0d6d9268d5d69ec9692e3e38214ebabcecfaf60e95b280d3c9aae398f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <label >Cargo</label>
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idcargo", array()), 'widget');
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
                                    <th>Cargo actual</th>                                                              
                                    
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver2"], "denominacion", array()), "html", null, true);
            echo "</td>
                                        
                                    </tr> 
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "          
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
    ";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "  
";
        
        $__internal_48adb0d6d9268d5d69ec9692e3e38214ebabcecfaf60e95b280d3c9aae398f3a->leave($__internal_48adb0d6d9268d5d69ec9692e3e38214ebabcecfaf60e95b280d3c9aae398f3a_prof);

    }

    // line 16
    public function block_botonera($context, array $blocks = array())
    {
        $__internal_25166a3232bf3bbea48724a4ed52d89c576e4ff6ebb679815c30a78a3dec0fb6 = $this->env->getExtension("native_profiler");
        $__internal_25166a3232bf3bbea48724a4ed52d89c576e4ff6ebb679815c30a78a3dec0fb6->enter($__internal_25166a3232bf3bbea48724a4ed52d89c576e4ff6ebb679815c30a78a3dec0fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "botonera"));

        // line 17
        echo "                            ";
        $this->displayParentBlock("botonera", $context, $blocks);
        echo "
                        ";
        
        $__internal_25166a3232bf3bbea48724a4ed52d89c576e4ff6ebb679815c30a78a3dec0fb6->leave($__internal_25166a3232bf3bbea48724a4ed52d89c576e4ff6ebb679815c30a78a3dec0fb6_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27880a2cb184c73be7d0f622b24a430f1d33ad042028e495d35d00d8b2349b9b = $this->env->getExtension("native_profiler");
        $__internal_27880a2cb184c73be7d0f622b24a430f1d33ad042028e495d35d00d8b2349b9b->enter($__internal_27880a2cb184c73be7d0f622b24a430f1d33ad042028e495d35d00d8b2349b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script  src = \"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
        <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
    ";
        
        $__internal_27880a2cb184c73be7d0f622b24a430f1d33ad042028e495d35d00d8b2349b9b->leave($__internal_27880a2cb184c73be7d0f622b24a430f1d33ad042028e495d35d00d8b2349b9b_prof);

    }

    public function getTemplateName()
    {
        return "personalBundle:add:adminCargoAsignar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 88,  274 => 87,  268 => 86,  258 => 17,  252 => 16,  244 => 90,  242 => 86,  234 => 80,  224 => 77,  221 => 76,  217 => 75,  207 => 67,  198 => 64,  195 => 63,  190 => 62,  183 => 56,  177 => 52,  172 => 50,  166 => 47,  160 => 44,  156 => 43,  153 => 42,  151 => 41,  131 => 35,  124 => 31,  117 => 27,  110 => 23,  104 => 19,  101 => 16,  99 => 15,  95 => 12,  78 => 11,  72 => 7,  66 => 6,  56 => 4,  50 => 3,  35 => 1,  14 => 2,  11 => 1,);
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
/*                                 <label >Cargo</label>*/
/*                             {{ form_widget(form.idcargo) }}*/
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
/*                                     <th>Cargo actual</th>                                                              */
/*                                     */
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for ver2 in data2 %}*/
/*                                     <tr>*/
/*                                         <td>{{ ver2.denominacion }}</td>*/
/*                                         */
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
