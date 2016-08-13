<?php

/* personalBundle:add:adminUsuario.html.twig */
class __TwigTemplate_19b5ea4031ed3806f01c6299b9fdbcac9786585645149aa032513917e0b0e579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "personalBundle:add:adminUsuario.html.twig", 1);
        $_trait_0 = $this->loadTemplate("::botonera.html.twig", "personalBundle:add:adminUsuario.html.twig", 2);
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
        $__internal_862b2aae73be0a4066fe612c965b8564e676b2bd39859969b0b59a5a524e5ee2 = $this->env->getExtension("native_profiler");
        $__internal_862b2aae73be0a4066fe612c965b8564e676b2bd39859969b0b59a5a524e5ee2->enter($__internal_862b2aae73be0a4066fe612c965b8564e676b2bd39859969b0b59a5a524e5ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personalBundle:add:adminUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_862b2aae73be0a4066fe612c965b8564e676b2bd39859969b0b59a5a524e5ee2->leave($__internal_862b2aae73be0a4066fe612c965b8564e676b2bd39859969b0b59a5a524e5ee2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb020bf72f338741e0fac39a567de35906ed89b47aadbeefc433fe8028d09aa6 = $this->env->getExtension("native_profiler");
        $__internal_cb020bf72f338741e0fac39a567de35906ed89b47aadbeefc433fe8028d09aa6->enter($__internal_cb020bf72f338741e0fac39a567de35906ed89b47aadbeefc433fe8028d09aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_cb020bf72f338741e0fac39a567de35906ed89b47aadbeefc433fe8028d09aa6->leave($__internal_cb020bf72f338741e0fac39a567de35906ed89b47aadbeefc433fe8028d09aa6_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d946e4a1930fe642c5de4294cc4e544e9fe06df979c1199a4403d899348fa7a = $this->env->getExtension("native_profiler");
        $__internal_4d946e4a1930fe642c5de4294cc4e544e9fe06df979c1199a4403d899348fa7a->enter($__internal_4d946e4a1930fe642c5de4294cc4e544e9fe06df979c1199a4403d899348fa7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <legend>::Creacion o modificacion de usuario::</legend>
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
                                ";
            // line 35
            if (((isset($context["perfil"]) ? $context["perfil"] : $this->getContext($context, "perfil")) == "Admin")) {
                // line 36
                echo "                                    <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_cons", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
                echo "'\">Volver</button>
                                ";
            } else {
                // line 38
                echo "                                    <button type=\"button\" class=\"btn btn-default\" onclick=\"location.href = '";
                echo $this->env->getExtension('routing')->getPath("menu_principal_menu");
                echo "'\">Volver</button>
                                ";
            }
            // line 40
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
        // line 45
        echo "                ";
        // line 46
        echo "                        <div class=\"form-inline\">
                        ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idempleado", array()), 'widget');
        echo "
                            <div class=\"form-group\">
                                <label >Login</label>
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label >Clave</label>
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pass", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label >Perfil</label>
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "perfil", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label >Estatus</label>
                            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estatus", array()), 'widget');
        echo "
                            </div>
                            
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo "
                            
                        ";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <p>        
                ";
        // line 72
        echo "                
            </div>
        </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <table class=\"table\" align=\"center\">
                            <thead>
                                <tr>
                                    <th>Usuario actual</th>                                                              
                                    
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data2"]) ? $context["data2"] : $this->getContext($context, "data2")));
        foreach ($context['_seq'] as $context["_key"] => $context["ver2"]) {
            // line 86
            echo "                                    <tr>
                                        <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver2"], "login", array()), "html", null, true);
            echo "</td>
                                        
                                    </tr> 
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "          
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
    ";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 100
        echo "  
";
        
        $__internal_4d946e4a1930fe642c5de4294cc4e544e9fe06df979c1199a4403d899348fa7a->leave($__internal_4d946e4a1930fe642c5de4294cc4e544e9fe06df979c1199a4403d899348fa7a_prof);

    }

    // line 16
    public function block_botonera($context, array $blocks = array())
    {
        $__internal_9c4b4b31b3d97f61981b9c8d66ca38e4a46d681ab799e359ae8b1c69488e0897 = $this->env->getExtension("native_profiler");
        $__internal_9c4b4b31b3d97f61981b9c8d66ca38e4a46d681ab799e359ae8b1c69488e0897->enter($__internal_9c4b4b31b3d97f61981b9c8d66ca38e4a46d681ab799e359ae8b1c69488e0897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "botonera"));

        // line 17
        echo "                            ";
        $this->displayParentBlock("botonera", $context, $blocks);
        echo "
                        ";
        
        $__internal_9c4b4b31b3d97f61981b9c8d66ca38e4a46d681ab799e359ae8b1c69488e0897->leave($__internal_9c4b4b31b3d97f61981b9c8d66ca38e4a46d681ab799e359ae8b1c69488e0897_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_227b0b1f653bf92b99958258d1868b948fd03feb4dfecfac260fad2b836e95bd = $this->env->getExtension("native_profiler");
        $__internal_227b0b1f653bf92b99958258d1868b948fd03feb4dfecfac260fad2b836e95bd->enter($__internal_227b0b1f653bf92b99958258d1868b948fd03feb4dfecfac260fad2b836e95bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script  src = \"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
        <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
    ";
        
        $__internal_227b0b1f653bf92b99958258d1868b948fd03feb4dfecfac260fad2b836e95bd->leave($__internal_227b0b1f653bf92b99958258d1868b948fd03feb4dfecfac260fad2b836e95bd_prof);

    }

    public function getTemplateName()
    {
        return "personalBundle:add:adminUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 98,  288 => 97,  282 => 96,  272 => 17,  266 => 16,  258 => 100,  256 => 96,  248 => 90,  238 => 87,  235 => 86,  231 => 85,  216 => 72,  210 => 68,  205 => 66,  199 => 63,  192 => 59,  185 => 55,  178 => 51,  172 => 48,  168 => 47,  165 => 46,  163 => 45,  145 => 40,  139 => 38,  133 => 36,  131 => 35,  124 => 31,  117 => 27,  110 => 23,  104 => 19,  101 => 16,  99 => 15,  95 => 12,  78 => 11,  72 => 7,  66 => 6,  56 => 4,  50 => 3,  35 => 1,  14 => 2,  11 => 1,);
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
/*                         <legend>::Creacion o modificacion de usuario::</legend>*/
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
/*                         <div class="form-inline">*/
/*                         {{ form_start(form) }}*/
/*                             {{ form_widget(form.idempleado) }}*/
/*                             <div class="form-group">*/
/*                                 <label >Login</label>*/
/*                             {{ form_widget(form.login) }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label >Clave</label>*/
/*                             {{ form_widget(form.pass) }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label >Perfil</label>*/
/*                             {{ form_widget(form.perfil) }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label >Estatus</label>*/
/*                             {{ form_widget(form.estatus) }}*/
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
/*                         <table class="table" align="center">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>Usuario actual</th>                                                              */
/*                                     */
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for ver2 in data2 %}*/
/*                                     <tr>*/
/*                                         <td>{{ ver2.login }}</td>*/
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
