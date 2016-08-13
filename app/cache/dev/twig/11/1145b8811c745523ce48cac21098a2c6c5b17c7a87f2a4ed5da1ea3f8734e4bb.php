<?php

/* definicionesBundle:main:bancoMain.html.twig */
class __TwigTemplate_64775ba83746d9f1d88efc3a7ba87fea16fe3fd9054213d7cc0a4b656df71d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "definicionesBundle:main:bancoMain.html.twig", 1);
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
        $__internal_50e7bc4fc25137c01fe65508c9107efd51097c356a09aaffa5a1f45650fb3992 = $this->env->getExtension("native_profiler");
        $__internal_50e7bc4fc25137c01fe65508c9107efd51097c356a09aaffa5a1f45650fb3992->enter($__internal_50e7bc4fc25137c01fe65508c9107efd51097c356a09aaffa5a1f45650fb3992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "definicionesBundle:main:bancoMain.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50e7bc4fc25137c01fe65508c9107efd51097c356a09aaffa5a1f45650fb3992->leave($__internal_50e7bc4fc25137c01fe65508c9107efd51097c356a09aaffa5a1f45650fb3992_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce256e19bbc6f44324acf0a7d5a5516c060ffcce7f1180102fe2bd1bf5b789b0 = $this->env->getExtension("native_profiler");
        $__internal_ce256e19bbc6f44324acf0a7d5a5516c060ffcce7f1180102fe2bd1bf5b789b0->enter($__internal_ce256e19bbc6f44324acf0a7d5a5516c060ffcce7f1180102fe2bd1bf5b789b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_ce256e19bbc6f44324acf0a7d5a5516c060ffcce7f1180102fe2bd1bf5b789b0->leave($__internal_ce256e19bbc6f44324acf0a7d5a5516c060ffcce7f1180102fe2bd1bf5b789b0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_31a54163c4ae56f9bd942eb33df3b6ec5c5d2fe04e96a975aa1658a046a7f67a = $this->env->getExtension("native_profiler");
        $__internal_31a54163c4ae56f9bd942eb33df3b6ec5c5d2fe04e96a975aa1658a046a7f67a->enter($__internal_31a54163c4ae56f9bd942eb33df3b6ec5c5d2fe04e96a975aa1658a046a7f67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>::Modulo de definiciones - Banco</h1>
            <p>
                <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("definiciones_banco_add");
        echo "\" role=\"button\">Banco nuevo</a>
                <a class=\"btn btn-lg btn-info\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("definiciones_menu");
        echo "\" role=\"button\">Volver</a>
            </p>
            <form class=\"form-inline\" method=\"post\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("personal_personal_busca");
        echo "\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"palabra\" name=\"palabra\" placeholder=\"Escriba el banco a buscar\" size=\"100\" >
                    <button type=\"submit\" class=\"btn btn-default\">Iniciar Busqueda</button>
                </div>            

            </form>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <table class=\"table\">
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
        // line 34
        if ((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))) {
            // line 35
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["ver"]) {
                // line 36
                echo "                            <tr>
                                <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "id", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "denomninacionbnc", array()), "html", null, true);
                echo "</td>
                                <td><a class=\"popup-gmaps\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("definiciones_banco_cons", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-search\"></span></a></td>
                                <td><a class=\"popup-gmaps\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("definiciones_banco_mod", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
                                <td><a class=\"popup-gmaps\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("definiciones_banco_del", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a></td>
                            </tr> 
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "  
                        ";
        } else {
            // line 45
            echo "                            <tr colspan=\"5\">
                                <td>No hay registros de bancos</td>
                            </tr> 
                        ";
        }
        // line 49
        echo "                    </tbody>
                </table>
            </div>
        </div>

        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "    

    ";
        
        $__internal_31a54163c4ae56f9bd942eb33df3b6ec5c5d2fe04e96a975aa1658a046a7f67a->leave($__internal_31a54163c4ae56f9bd942eb33df3b6ec5c5d2fe04e96a975aa1658a046a7f67a_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a26aa8cfed7e4b4cf33fc83e9b692f4056fc811683a9f17325869659dd80ef69 = $this->env->getExtension("native_profiler");
        $__internal_a26aa8cfed7e4b4cf33fc83e9b692f4056fc811683a9f17325869659dd80ef69->enter($__internal_a26aa8cfed7e4b4cf33fc83e9b692f4056fc811683a9f17325869659dd80ef69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "            ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <script  src = \"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
            <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
            <script src=\"js/bootstrap.js\"></script>
            <script> \$('.collapse').collapse()</script>
        ";
        
        $__internal_a26aa8cfed7e4b4cf33fc83e9b692f4056fc811683a9f17325869659dd80ef69->leave($__internal_a26aa8cfed7e4b4cf33fc83e9b692f4056fc811683a9f17325869659dd80ef69_prof);

    }

    public function getTemplateName()
    {
        return "definicionesBundle:main:bancoMain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 56,  166 => 55,  160 => 54,  151 => 60,  149 => 54,  142 => 49,  136 => 45,  132 => 43,  123 => 41,  119 => 40,  115 => 39,  111 => 38,  107 => 37,  104 => 36,  99 => 35,  97 => 34,  73 => 13,  68 => 11,  64 => 10,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>::Modulo de definiciones - Banco</h1>*/
/*             <p>*/
/*                 <a class="btn btn-lg btn-primary" href="{{ path('definiciones_banco_add') }}" role="button">Banco nuevo</a>*/
/*                 <a class="btn btn-lg btn-info" href="{{ path('definiciones_menu') }}" role="button">Volver</a>*/
/*             </p>*/
/*             <form class="form-inline" method="post" action="{{ path('personal_personal_busca') }}">*/
/*                 <div class="form-group">*/
/*                     <input type="text" class="form-control" id="palabra" name="palabra" placeholder="Escriba el banco a buscar" size="100" >*/
/*                     <button type="submit" class="btn btn-default">Iniciar Busqueda</button>*/
/*                 </div>            */
/* */
/*             </form>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-6">*/
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
/*                                 <td>{{ ver.denomninacionbnc }}</td>*/
/*                                 <td><a class="popup-gmaps" href="{{ path('definiciones_banco_cons',{'id':ver.id}) }}"><span class="glyphicon glyphicon-search"></span></a></td>*/
/*                                 <td><a class="popup-gmaps" href="{{ path('definiciones_banco_mod',{'id':ver.id}) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>*/
/*                                 <td><a class="popup-gmaps" href="{{ path('definiciones_banco_del',{'id':ver.id}) }}"><span class="glyphicon glyphicon-trash"></span></a></td>*/
/*                             </tr> */
/*                         {% endfor %}  */
/*                         {% else  %}*/
/*                             <tr colspan="5">*/
/*                                 <td>No hay registros de bancos</td>*/
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
