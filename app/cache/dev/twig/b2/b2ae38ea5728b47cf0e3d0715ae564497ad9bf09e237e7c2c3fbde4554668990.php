<?php

/* personalBundle:main:main.html.twig */
class __TwigTemplate_d2cc9283b037ce15b245ace77ce6c69da19c2784db4f7f0fc160360b7bd54380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "personalBundle:main:main.html.twig", 1);
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
        $__internal_8073db2c55c085645e654f974d515bd1b103c64d10ad47835e91b31f99b3159e = $this->env->getExtension("native_profiler");
        $__internal_8073db2c55c085645e654f974d515bd1b103c64d10ad47835e91b31f99b3159e->enter($__internal_8073db2c55c085645e654f974d515bd1b103c64d10ad47835e91b31f99b3159e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personalBundle:main:main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8073db2c55c085645e654f974d515bd1b103c64d10ad47835e91b31f99b3159e->leave($__internal_8073db2c55c085645e654f974d515bd1b103c64d10ad47835e91b31f99b3159e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cf9c4d0235fa3169ae5b2b40714439c02d80b54e72b6600a30ada2622eb7fec = $this->env->getExtension("native_profiler");
        $__internal_5cf9c4d0235fa3169ae5b2b40714439c02d80b54e72b6600a30ada2622eb7fec->enter($__internal_5cf9c4d0235fa3169ae5b2b40714439c02d80b54e72b6600a30ada2622eb7fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_5cf9c4d0235fa3169ae5b2b40714439c02d80b54e72b6600a30ada2622eb7fec->leave($__internal_5cf9c4d0235fa3169ae5b2b40714439c02d80b54e72b6600a30ada2622eb7fec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b30244e3ff5de10b09864ea31892154deae6247f67e712de189d6f602a436d1 = $this->env->getExtension("native_profiler");
        $__internal_0b30244e3ff5de10b09864ea31892154deae6247f67e712de189d6f602a436d1->enter($__internal_0b30244e3ff5de10b09864ea31892154deae6247f67e712de189d6f602a436d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1>::Modulo de personal</h1>
            <p>
                <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("personal_personal_add");
        echo "\" role=\"button\">Personal nuevo</a>
                <a class=\"btn btn-lg btn-info\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("menu_principal_menu");
        echo "\" role=\"button\">Volver al menu principal</a>
            </p>
            <form class=\"form-inline\" method=\"post\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("personal_personal_busca");
        echo "\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" id=\"palabra\" name=\"palabra\" placeholder=\"Escriba un fragmento de Cedula, Rif, Nombre, Apellido o Direccion\" size=\"100\" >
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
                            <th>CEDULA</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>                
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["ver"]) {
            // line 44
            echo "                            <tr>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "cedula", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "nombre", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "apellido", array()), "html", null, true);
            echo "</td>                
                                <td><a class=\"popup-gmaps\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_cons", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-search\"></span></a></td>
                                <td><a class=\"popup-gmaps\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_mod", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
                                <td><a class=\"popup-gmaps\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_del", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a></td>
                                <td><a class=\"popup-gmaps\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_usuario", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span></a></td>
                            </tr> 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "          
                    </tbody>
                </table>
            </div>
        </div>

        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "    

    ";
        
        $__internal_0b30244e3ff5de10b09864ea31892154deae6247f67e712de189d6f602a436d1->leave($__internal_0b30244e3ff5de10b09864ea31892154deae6247f67e712de189d6f602a436d1_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5fb94888e200b6241d8d130b1fbfdaf9695e1f8e627ca36a986b2e1336dcef9 = $this->env->getExtension("native_profiler");
        $__internal_a5fb94888e200b6241d8d130b1fbfdaf9695e1f8e627ca36a986b2e1336dcef9->enter($__internal_a5fb94888e200b6241d8d130b1fbfdaf9695e1f8e627ca36a986b2e1336dcef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "            ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <script  src = \"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
            <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
            <script src=\"js/bootstrap.js\"></script>
            <script> \$('.collapse').collapse()</script>
        ";
        
        $__internal_a5fb94888e200b6241d8d130b1fbfdaf9695e1f8e627ca36a986b2e1336dcef9->leave($__internal_a5fb94888e200b6241d8d130b1fbfdaf9695e1f8e627ca36a986b2e1336dcef9_prof);

    }

    public function getTemplateName()
    {
        return "personalBundle:main:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 61,  184 => 60,  178 => 59,  169 => 65,  167 => 59,  159 => 53,  150 => 51,  146 => 50,  142 => 49,  138 => 48,  134 => 47,  130 => 46,  126 => 45,  123 => 44,  119 => 43,  103 => 29,  94 => 26,  91 => 25,  86 => 24,  73 => 13,  68 => 11,  64 => 10,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="jumbotron">*/
/*             <h1>::Modulo de personal</h1>*/
/*             <p>*/
/*                 <a class="btn btn-lg btn-primary" href="{{ path('personal_personal_add') }}" role="button">Personal nuevo</a>*/
/*                 <a class="btn btn-lg btn-info" href="{{ path('menu_principal_menu') }}" role="button">Volver al menu principal</a>*/
/*             </p>*/
/*             <form class="form-inline" method="post" action="{{ path('personal_personal_busca') }}">*/
/*                 <div class="form-group">*/
/*                     <input type="text" class="form-control" id="palabra" name="palabra" placeholder="Escriba un fragmento de Cedula, Rif, Nombre, Apellido o Direccion" size="100" >*/
/*                     <button type="submit" class="btn btn-default">Iniciar Busqueda</button>*/
/*                 </div>            */
/* */
/*             </form>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-6">*/
/*                  {# para mostrar el mensaje de que se borro el dato #}*/
/*                         {% for flashMessage in app.session.flashbag.get('Mensaje') %}*/
/*                             <span class="alert-warning" >*/
/*                                 {{flashMessage}}*/
/*                             </span>*/
/*                         {% endfor%}*/
/*                 <table class="table">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>CEDULA</th>*/
/*                             <th>NOMBRE</th>*/
/*                             <th>APELLIDO</th>                */
/*                             <th></th>*/
/*                             <th></th>*/
/*                             <th></th>*/
/*                             <th></th>*/
/*                             <th></th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for ver in data %}*/
/*                             <tr>*/
/*                                 <td>{{ ver.cedula }}</td>*/
/*                                 <td>{{ ver.nombre }}</td>*/
/*                                 <td>{{ ver.apellido }}</td>                */
/*                                 <td><a class="popup-gmaps" href="{{ path('personal_personal_cons',{'id':ver.id}) }}"><span class="glyphicon glyphicon-search"></span></a></td>*/
/*                                 <td><a class="popup-gmaps" href="{{ path('personal_personal_mod',{'id':ver.id}) }}"><span class="glyphicon glyphicon-pencil"></span></a></td>*/
/*                                 <td><a class="popup-gmaps" href="{{ path('personal_personal_del',{'id':ver.id}) }}"><span class="glyphicon glyphicon-trash"></span></a></td>*/
/*                                 <td><a class="popup-gmaps" href="{{ path('personal_personal_usuario',{'id':ver.id}) }}"><span class="glyphicon glyphicon-user"></span></a></td>*/
/*                             </tr> */
/*                         {% endfor %}          */
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
