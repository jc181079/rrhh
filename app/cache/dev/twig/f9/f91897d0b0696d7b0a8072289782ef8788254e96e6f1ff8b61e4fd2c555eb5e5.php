<?php

/* definicionesBundle:main:cargoMain.html.twig */
class __TwigTemplate_8ea81b86f6acef0006cd9b67ecc3e96000765af31e71c10f383edc2e1df4df02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "definicionesBundle:main:cargoMain.html.twig", 1);
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
        $__internal_316acf72e64f24182c416d405b53ccf5fb45da9466ee8b817295dbbad18321ce = $this->env->getExtension("native_profiler");
        $__internal_316acf72e64f24182c416d405b53ccf5fb45da9466ee8b817295dbbad18321ce->enter($__internal_316acf72e64f24182c416d405b53ccf5fb45da9466ee8b817295dbbad18321ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "definicionesBundle:main:cargoMain.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_316acf72e64f24182c416d405b53ccf5fb45da9466ee8b817295dbbad18321ce->leave($__internal_316acf72e64f24182c416d405b53ccf5fb45da9466ee8b817295dbbad18321ce_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd47270519d1293cd81071647905887c24779ac2487613bd62393132f0536667 = $this->env->getExtension("native_profiler");
        $__internal_fd47270519d1293cd81071647905887c24779ac2487613bd62393132f0536667->enter($__internal_fd47270519d1293cd81071647905887c24779ac2487613bd62393132f0536667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_fd47270519d1293cd81071647905887c24779ac2487613bd62393132f0536667->leave($__internal_fd47270519d1293cd81071647905887c24779ac2487613bd62393132f0536667_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_783e257ebedfce4ffdd982f45716215c2a298f8d08a53b79fa77ea4e9828a3f4 = $this->env->getExtension("native_profiler");
        $__internal_783e257ebedfce4ffdd982f45716215c2a298f8d08a53b79fa77ea4e9828a3f4->enter($__internal_783e257ebedfce4ffdd982f45716215c2a298f8d08a53b79fa77ea4e9828a3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>::Modulo de definiciones - Cargos</h1>
            <p>
                <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("definiciones_cargo_add");
        echo "\" role=\"button\">Cargo nuevo</a>
                <a class=\"btn btn-lg btn-info\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("definiciones_menu");
        echo "\" role=\"button\">Volver</a>
            </p>
            <form class=\"form-inline\" method=\"post\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("definiciones_cargo_busca");
        echo "\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"palabra\" name=\"palabra\" placeholder=\"Escriba el cargo a buscar\" size=\"100\" >
                    <button type=\"submit\" class=\"btn btn-default\">Iniciar Busqueda</button>
                </div>            

            </form>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 24
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "Mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            echo "                            <span class=\"alert-warning\" >
                                ";
            // line 26
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CARGO</th>                                            
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 40
        if ((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))) {
            // line 41
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["ver"]) {
                // line 42
                echo "                            <tr>
                                <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "id", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "denominacion", array()), "html", null, true);
                echo "</td>
                                <td><a class=\"popup-gmaps\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("definiciones_cargo_cons", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-search\"></span></a></td>
                                <td><a class=\"popup-gmaps\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("definiciones_cargo_mod", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
                                <td><a class=\"popup-gmaps\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("definiciones_cargo_del", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a></td>
                            </tr> 
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                        ";
        } else {
            // line 51
            echo "                            <tr colspan=\"5\">
                                <td>No hay registros </td>
                            </tr> 
                        ";
        }
        // line 55
        echo "                    </tbody>
                </table>
            </div>
        </div>

        ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    

    ";
        
        $__internal_783e257ebedfce4ffdd982f45716215c2a298f8d08a53b79fa77ea4e9828a3f4->leave($__internal_783e257ebedfce4ffdd982f45716215c2a298f8d08a53b79fa77ea4e9828a3f4_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d84efb3efb35928eba5ebbb348af7f85a1d1fe390013068ef26c16eaea3b6410 = $this->env->getExtension("native_profiler");
        $__internal_d84efb3efb35928eba5ebbb348af7f85a1d1fe390013068ef26c16eaea3b6410->enter($__internal_d84efb3efb35928eba5ebbb348af7f85a1d1fe390013068ef26c16eaea3b6410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "            ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <script  src = \"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
            <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
            <script src=\"js/bootstrap.js\"></script>
            <script> \$('.collapse').collapse()</script>
        ";
        
        $__internal_d84efb3efb35928eba5ebbb348af7f85a1d1fe390013068ef26c16eaea3b6410->leave($__internal_d84efb3efb35928eba5ebbb348af7f85a1d1fe390013068ef26c16eaea3b6410_prof);

    }

    public function getTemplateName()
    {
        return "definicionesBundle:main:cargoMain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 62,  184 => 61,  178 => 60,  169 => 66,  167 => 60,  160 => 55,  154 => 51,  151 => 50,  142 => 47,  138 => 46,  134 => 45,  130 => 44,  126 => 43,  123 => 42,  118 => 41,  116 => 40,  103 => 29,  94 => 26,  91 => 25,  86 => 24,  73 => 13,  68 => 11,  64 => 10,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>::Modulo de definiciones - Cargos</h1>*/
/*             <p>*/
/*                 <a class="btn btn-lg btn-primary" href="{{ path('definiciones_cargo_add') }}" role="button">Cargo nuevo</a>*/
/*                 <a class="btn btn-lg btn-info" href="{{ path('definiciones_menu') }}" role="button">Volver</a>*/
/*             </p>*/
/*             <form class="form-inline" method="post" action="{{ path('definiciones_cargo_busca') }}">*/
/*                 <div class="form-group">*/
/*                     <input type="text" class="form-control" id="palabra" name="palabra" placeholder="Escriba el cargo a buscar" size="100" >*/
/*                     <button type="submit" class="btn btn-default">Iniciar Busqueda</button>*/
/*                 </div>            */
/* */
/*             </form>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-6">*/
/*                 {# para mostrar el mensaje de que se borro el dato #}*/
/*                         {% for flashMessage in app.session.flashbag.get('Mensaje') %}*/
/*                             <span class="alert-warning" >*/
/*                                 {{flashMessage}}*/
/*                             </span>*/
/*                         {% endfor%}*/
/*                 <table class="table">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>ID</th>*/
/*                             <th>CARGO</th>                                            */
/*                             <th></th>*/
/*                             <th></th>*/
/*                             <th></th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% if data %}*/
/*                         {% for ver in data %}*/
/*                             <tr>*/
/*                                 <td>{{ ver.id }}</td>*/
/*                                 <td>{{ ver.denominacion }}</td>*/
/*                                 <td><a class="popup-gmaps" href="{{ path('definiciones_cargo_cons',{'id':ver.id}) }}"><span class="glyphicon glyphicon-search"></span></a></td>*/
/*                                 <td><a class="popup-gmaps" href="{{ path('definiciones_cargo_mod',{'id':ver.id}) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>*/
/*                                 <td><a class="popup-gmaps" href="{{ path('definiciones_cargo_del',{'id':ver.id}) }}"><span class="glyphicon glyphicon-trash"></span></a></td>*/
/*                             </tr> */
/*                         {% endfor %}*/
/*                         {% else %}*/
/*                             <tr colspan="5">*/
/*                                 <td>No hay registros </td>*/
/*                             </tr> */
/*                         {% endif %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% block javascripts %}*/
/*             {{ parent() }}*/
/*             <script  src = "{{ asset('public/js/jquery-latest.min.js') }}"  type = "text / javascript"> </script>*/
/*             <script src = "https://code.jquery.com/jquery-2.1.3.js"></script>*/
/*             <script src="js/bootstrap.js"></script>*/
/*             <script> $('.collapse').collapse()</script>*/
/*         {% endblock %}    */
/* */
/*     {% endblock %}*/
/* */
/* */
/* */
