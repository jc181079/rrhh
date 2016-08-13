<?php

/* RecPagoBundle:Recibo:recibo.html.twig */
class __TwigTemplate_9ad98958fc3cb95aef33814b8ab1f4f78b328e08b456e2b8a4fc49ef71913384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RecPagoBundle:Recibo:recibo.html.twig", 1);
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
        $__internal_3ad5589cd3bc16a635b1365a8f1e68556c337b6893523756bd4bd60af6331c14 = $this->env->getExtension("native_profiler");
        $__internal_3ad5589cd3bc16a635b1365a8f1e68556c337b6893523756bd4bd60af6331c14->enter($__internal_3ad5589cd3bc16a635b1365a8f1e68556c337b6893523756bd4bd60af6331c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RecPagoBundle:Recibo:recibo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ad5589cd3bc16a635b1365a8f1e68556c337b6893523756bd4bd60af6331c14->leave($__internal_3ad5589cd3bc16a635b1365a8f1e68556c337b6893523756bd4bd60af6331c14_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3fc4b50173e2385acf6bc020d22dc1d19609a520f3352e90291509222da1dc42 = $this->env->getExtension("native_profiler");
        $__internal_3fc4b50173e2385acf6bc020d22dc1d19609a520f3352e90291509222da1dc42->enter($__internal_3fc4b50173e2385acf6bc020d22dc1d19609a520f3352e90291509222da1dc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_3fc4b50173e2385acf6bc020d22dc1d19609a520f3352e90291509222da1dc42->leave($__internal_3fc4b50173e2385acf6bc020d22dc1d19609a520f3352e90291509222da1dc42_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_24d07d12088482964c21d235cd22e8bc9f2451284f0d359824f00c0658471419 = $this->env->getExtension("native_profiler");
        $__internal_24d07d12088482964c21d235cd22e8bc9f2451284f0d359824f00c0658471419->enter($__internal_24d07d12088482964c21d235cd22e8bc9f2451284f0d359824f00c0658471419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "    ";
        $context["sueldo"] = 0;
        // line 9
        echo "    ";
        $context["totalAsignaciones"] = 0;
        // line 10
        echo "    ";
        $context["totalRetenciones"] = 0;
        // line 11
        echo "    ";
        $context["neto"] = 0;
        // line 12
        echo "<!-- Main component for a primary marketing message or call to action -->
<div class=\"container\">
    <div class=\"jumbotron\">
        <div align=\"center\"><h3>Recibo de pago digital - Instituto de minas Bolivar</h3> </div>
        <div class=\"row\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empleado"]) ? $context["empleado"] : $this->getContext($context, "empleado")));
        foreach ($context['_seq'] as $context["_key"] => $context["ver"]) {
            // line 18
            echo "                <div class=\"col-sm-4\"><label class=\"control-label\">Cedula</label></div>
                <div class=\"col-sm-4\"><label class=\"control-label\">Nombre del trabajador</label></div>
                <div class=\"col-sm-4\"><label class=\"control-label\">Cargo</label></div>
                <div class=\"col-sm-4\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "cedula", array()), "html", null, true);
            echo "</div>
                <div class=\"col-sm-4\">";
            // line 22
            echo twig_escape_filter($this->env, (($this->getAttribute($context["ver"], "nombre", array()) . " ") . $this->getAttribute($context["ver"], "apellido", array())), "html", null, true);
            echo "</div>
                <div class=\"col-sm-4\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "denominacion", array()), "html", null, true);
            echo "</div>
                ";
            // line 24
            $context["sueldo"] = $this->getAttribute($context["ver"], "sueldo", array());
            // line 25
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            <hr>
            <div class=\"col-sm-4\"><label class=\"control-label\">conceptos</label></div>
            <div class=\"col-sm-4\"><label class=\"control-label\">Asignaciones</label></div>
            <div class=\"col-sm-4\"><label class=\"control-label\">Retenciones</label></div>
            <p>----------------------------------------------------------------------------------------------------------<p>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asignaciones"]) ? $context["asignaciones"] : $this->getContext($context, "asignaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["asig"]) {
            // line 32
            echo "                ";
            // line 33
            echo "                ";
            if (($this->getAttribute($context["asig"], "id", array()) == 1)) {
                // line 34
                echo "                    ";
                $context["calculo"] = (((isset($context["sueldo"]) ? $context["sueldo"] : $this->getContext($context, "sueldo")) * ($this->getAttribute($context["asig"], "valorAsig", array()) / 100)) / 2);
                // line 35
                echo "                ";
            } else {
                // line 36
                echo "                    ";
                $context["calculo"] = ((isset($context["sueldo"]) ? $context["sueldo"] : $this->getContext($context, "sueldo")) * ($this->getAttribute($context["asig"], "valorAsig", array()) / 100));
                // line 37
                echo "                ";
            }
            // line 38
            echo "                <div class=\"col-sm-4\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["asig"], "denominacionAsig", array()), "html", null, true);
            echo "</div>
                <div class=\"col-sm-4\">";
            // line 39
            echo twig_escape_filter($this->env, ("Bs. " . twig_number_format_filter($this->env, (isset($context["calculo"]) ? $context["calculo"] : $this->getContext($context, "calculo")), 2, ".", ",")), "html", null, true);
            echo "</div><br>
                ";
            // line 40
            $context["totalAsignaciones"] = ((isset($context["totalAsignaciones"]) ? $context["totalAsignaciones"] : $this->getContext($context, "totalAsignaciones")) + (isset($context["calculo"]) ? $context["calculo"] : $this->getContext($context, "calculo")));
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["retenciones"]) ? $context["retenciones"] : $this->getContext($context, "retenciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["rete"]) {
            // line 43
            echo "                ";
            // line 44
            echo "                ";
            if (($this->getAttribute($context["rete"], "id", array()) == 1)) {
                // line 45
                echo "                    ";
                $context["calculo2"] = (((isset($context["sueldo"]) ? $context["sueldo"] : $this->getContext($context, "sueldo")) * ($this->getAttribute($context["rete"], "valorRete", array()) / 100)) / 2);
                // line 46
                echo "                ";
            } else {
                // line 47
                echo "                    ";
                $context["calculo2"] = ((isset($context["sueldo"]) ? $context["sueldo"] : $this->getContext($context, "sueldo")) * ($this->getAttribute($context["rete"], "valorRete", array()) / 100));
                // line 48
                echo "                ";
            }
            // line 49
            echo "                <div class=\"col-sm-4\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rete"], "denominacionRete", array()), "html", null, true);
            echo "</div>
                <div class=\"col-sm-4\">";
            // line 50
            echo "-";
            echo "</div>
                <div class=\"col-sm-4\">";
            // line 51
            echo twig_escape_filter($this->env, ("Bs. " . twig_number_format_filter($this->env, (isset($context["calculo2"]) ? $context["calculo2"] : $this->getContext($context, "calculo2")), 2, ".", ",")), "html", null, true);
            echo "</div><br>
                ";
            // line 52
            $context["totalRetenciones"] = ((isset($context["totalRetenciones"]) ? $context["totalRetenciones"] : $this->getContext($context, "totalRetenciones")) + (isset($context["calculo2"]) ? $context["calculo2"] : $this->getContext($context, "calculo2")));
            // line 53
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            <hr>
            <div class=\"col-sm-4\">Recibido conforme</div>
            <div class=\"col-sm-4\">";
        // line 56
        echo twig_escape_filter($this->env, ("Bs. " . twig_number_format_filter($this->env, (isset($context["totalAsignaciones"]) ? $context["totalAsignaciones"] : $this->getContext($context, "totalAsignaciones")), 2, ".", ",")), "html", null, true);
        echo "</div>
            <div class=\"col-sm-4\">";
        // line 57
        echo twig_escape_filter($this->env, ("Bs. " . twig_number_format_filter($this->env, (isset($context["totalRetenciones"]) ? $context["totalRetenciones"] : $this->getContext($context, "totalRetenciones")), 2, ".", ",")), "html", null, true);
        echo "</div>
            ";
        // line 58
        $context["neto"] = ((isset($context["totalAsignaciones"]) ? $context["totalAsignaciones"] : $this->getContext($context, "totalAsignaciones")) - twig_number_format_filter($this->env, (isset($context["totalRetenciones"]) ? $context["totalRetenciones"] : $this->getContext($context, "totalRetenciones")), 2, ".", ","));
        // line 59
        echo "            <div class=\"col-sm-4\">Neto a cobrar</div>
            <div class=\"col-sm-4\">";
        // line 60
        echo twig_escape_filter($this->env, ("Bs. " . twig_number_format_filter($this->env, (isset($context["neto"]) ? $context["neto"] : $this->getContext($context, "neto")), 2, ".", ",")), "html", null, true);
        echo "</div>
            
        </div>
    </div>
    <button type=\"button\" class=\"btn btn-lg btn-danger\" onclick=\"location.href = '";
        // line 64
        echo $this->env->getExtension('routing')->getPath("menu_principal_menu");
        echo "'\">Volver</button>
</div> 

";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "    

";
        
        $__internal_24d07d12088482964c21d235cd22e8bc9f2451284f0d359824f00c0658471419->leave($__internal_24d07d12088482964c21d235cd22e8bc9f2451284f0d359824f00c0658471419_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61ac9a5d2cfa75203d63670689e9bfecdf762e5321b7df297b87747539cdf0c3 = $this->env->getExtension("native_profiler");
        $__internal_61ac9a5d2cfa75203d63670689e9bfecdf762e5321b7df297b87747539cdf0c3->enter($__internal_61ac9a5d2cfa75203d63670689e9bfecdf762e5321b7df297b87747539cdf0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script  src = \"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  tipo = \"text / javascript\"> < / script>
               < script src = \"https://code.jquery.com/jquery-2.1.3.js\" ></script>
    <script src=\"js/bootstrap.js\"></script>
    <script> \$('.collapse').collapse()</script>
";
        
        $__internal_61ac9a5d2cfa75203d63670689e9bfecdf762e5321b7df297b87747539cdf0c3->leave($__internal_61ac9a5d2cfa75203d63670689e9bfecdf762e5321b7df297b87747539cdf0c3_prof);

    }

    public function getTemplateName()
    {
        return "RecPagoBundle:Recibo:recibo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 69,  245 => 68,  239 => 67,  230 => 73,  228 => 67,  222 => 64,  215 => 60,  212 => 59,  210 => 58,  206 => 57,  202 => 56,  198 => 54,  192 => 53,  190 => 52,  186 => 51,  182 => 50,  177 => 49,  174 => 48,  171 => 47,  168 => 46,  165 => 45,  162 => 44,  160 => 43,  155 => 42,  149 => 41,  147 => 40,  143 => 39,  138 => 38,  135 => 37,  132 => 36,  129 => 35,  126 => 34,  123 => 33,  121 => 32,  117 => 31,  110 => 26,  104 => 25,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  85 => 18,  81 => 17,  74 => 12,  71 => 11,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {# para trabajar con variables globales en twig define primero #}*/
/*     {# la variable debajo del bloque de body colocandole cualquier valor #}*/
/*     {% set sueldo = 0.00 %}*/
/*     {% set totalAsignaciones = 0.00 %}*/
/*     {% set totalRetenciones = 0.00 %}*/
/*     {% set neto= 0.00 %}*/
/* <!-- Main component for a primary marketing message or call to action -->*/
/* <div class="container">*/
/*     <div class="jumbotron">*/
/*         <div align="center"><h3>Recibo de pago digital - Instituto de minas Bolivar</h3> </div>*/
/*         <div class="row">*/
/*             {% for ver in empleado %}*/
/*                 <div class="col-sm-4"><label class="control-label">Cedula</label></div>*/
/*                 <div class="col-sm-4"><label class="control-label">Nombre del trabajador</label></div>*/
/*                 <div class="col-sm-4"><label class="control-label">Cargo</label></div>*/
/*                 <div class="col-sm-4">{{ ver.cedula }}</div>*/
/*                 <div class="col-sm-4">{{ ver.nombre ~" "~ ver.apellido }}</div>*/
/*                 <div class="col-sm-4">{{ ver.denominacion }}</div>*/
/*                 {% set sueldo = ver.sueldo %}*/
/*             {% endfor %}*/
/*             <hr>*/
/*             <div class="col-sm-4"><label class="control-label">conceptos</label></div>*/
/*             <div class="col-sm-4"><label class="control-label">Asignaciones</label></div>*/
/*             <div class="col-sm-4"><label class="control-label">Retenciones</label></div>*/
/*             <p>----------------------------------------------------------------------------------------------------------<p>*/
/*             {% for asig in asignaciones %}*/
/*                 {# se calcula la quincena del empleado #}*/
/*                 {% if asig.id==1 %}*/
/*                     {% set calculo=sueldo*(asig.valorAsig/100)/2 %}*/
/*                 {%else %}*/
/*                     {% set calculo=sueldo*(asig.valorAsig/100) %}*/
/*                 {% endif %}*/
/*                 <div class="col-sm-4">{{ asig.denominacionAsig }}</div>*/
/*                 <div class="col-sm-4">{{ 'Bs. '~calculo|number_format(2,'.',',') }}</div><br>*/
/*                 {% set totalAsignaciones = totalAsignaciones + calculo %}*/
/*             {% endfor %}*/
/*             {% for rete in retenciones %}*/
/*                 {# se calcula la quincena del empleado #}*/
/*                 {% if rete.id==1 %}*/
/*                     {% set calculo2=sueldo*(rete.valorRete/100)/2 %}*/
/*                 {%else %}*/
/*                     {% set calculo2=sueldo*(rete.valorRete/100) %}*/
/*                 {% endif %}*/
/*                 <div class="col-sm-4">{{ rete.denominacionRete }}</div>*/
/*                 <div class="col-sm-4">{{ '-' }}</div>*/
/*                 <div class="col-sm-4">{{ 'Bs. '~calculo2|number_format(2,'.',',') }}</div><br>*/
/*                 {% set totalRetenciones = totalRetenciones + calculo2 %}*/
/*             {% endfor %}*/
/*             <hr>*/
/*             <div class="col-sm-4">Recibido conforme</div>*/
/*             <div class="col-sm-4">{{ 'Bs. '~totalAsignaciones|number_format(2,'.',',') }}</div>*/
/*             <div class="col-sm-4">{{ 'Bs. '~totalRetenciones|number_format(2,'.',',') }}</div>*/
/*             {%set neto= totalAsignaciones - totalRetenciones|number_format(2,'.',',') %}*/
/*             <div class="col-sm-4">Neto a cobrar</div>*/
/*             <div class="col-sm-4">{{ 'Bs. '~neto|number_format(2,'.',',') }}</div>*/
/*             */
/*         </div>*/
/*     </div>*/
/*     <button type="button" class="btn btn-lg btn-danger" onclick="location.href = '{{ path('menu_principal_menu') }}'">Volver</button>*/
/* </div> */
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script  src = "{{ asset('public/js/jquery-latest.min.js') }}"  tipo = "text / javascript"> < / script>*/
/*                < script src = "https://code.jquery.com/jquery-2.1.3.js" ></script>*/
/*     <script src="js/bootstrap.js"></script>*/
/*     <script> $('.collapse').collapse()</script>*/
/* {% endblock %}    */
/* */
/* {% endblock %}*/
