<?php

/* menuPrincipalBundle:Menu:menu.html.twig */
class __TwigTemplate_9160c753a0a0107b4994110a3b532563073b93512318bebc5c719a2ee22dd302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "menuPrincipalBundle:Menu:menu.html.twig", 1);
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
        $__internal_17d6c83a941e2c60060ce45f0dc0607cfd970f9705949c64b1fb6f1dcaf38949 = $this->env->getExtension("native_profiler");
        $__internal_17d6c83a941e2c60060ce45f0dc0607cfd970f9705949c64b1fb6f1dcaf38949->enter($__internal_17d6c83a941e2c60060ce45f0dc0607cfd970f9705949c64b1fb6f1dcaf38949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menuPrincipalBundle:Menu:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17d6c83a941e2c60060ce45f0dc0607cfd970f9705949c64b1fb6f1dcaf38949->leave($__internal_17d6c83a941e2c60060ce45f0dc0607cfd970f9705949c64b1fb6f1dcaf38949_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00f917b5032bd3bcccb46938c02d3f6f1d79829afe314a667672db729a52bc52 = $this->env->getExtension("native_profiler");
        $__internal_00f917b5032bd3bcccb46938c02d3f6f1d79829afe314a667672db729a52bc52->enter($__internal_00f917b5032bd3bcccb46938c02d3f6f1d79829afe314a667672db729a52bc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_00f917b5032bd3bcccb46938c02d3f6f1d79829afe314a667672db729a52bc52->leave($__internal_00f917b5032bd3bcccb46938c02d3f6f1d79829afe314a667672db729a52bc52_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c4a9fd823c3a4400199329af4fdc4ca4e2bed9343811c1c512da7559be02b36 = $this->env->getExtension("native_profiler");
        $__internal_5c4a9fd823c3a4400199329af4fdc4ca4e2bed9343811c1c512da7559be02b36->enter($__internal_5c4a9fd823c3a4400199329af4fdc4ca4e2bed9343811c1c512da7559be02b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<!-- Main component for a primary marketing message or call to action -->
<div class=\"container\">
    <div class=\"jumbotron\">
        <h1>Atencion</h1>
        <p>Para crear usuarios con privilegios de administracion o para simplemente consultar el recibo de pago precione icono que aparece en la consulta del personal,
            cabe destacar que no se puede crear ningun usuario que no este registrado en la nomina</p>
        
    </div>
    ";
        // line 14
        if (((isset($context["perfil"]) ? $context["perfil"] : $this->getContext($context, "perfil")) == "Admin")) {
            // line 15
            echo "        ";
            // line 16
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "Mensaje"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 17
                echo "                            <span class=\"alert-warning\" >
                                ";
                // line 18
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                            </span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                <h4 class=\"panel-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        Nomina y personal
                    </a>
                </h4>
            </div>
            <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                <div class=\"panel-body\">
                    <ul class=\"\">
                        <!--li><a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
            echo "\">Asignaciones Generales para el Calculo de nomina</a></li>
                        <li><a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
            echo "\">Comision de Servicios</a></li>
                        <li><a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
            echo "\">Calculo de nomina</a></li-->
                        <li><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("definiciones_menu");
            echo "\">Definiciones Generales</a></li>
                        <!--li><a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
            echo "\">Mantenimiento</a></li>
                        <li><a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
            echo "\">Movimiento de nomina</a></li>
                        <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
            echo "\">Nominas especiales</a></li-->
                        <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("personal_personal");
            echo "\">Personal</a></li>
                        <!--li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
            echo "\">Prestaciones</a></li>
                        <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
            echo "\">Prestamos</a></li>
                        <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
            echo "\">RAC</a></li>
                        <li><a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
            echo "\">Reportes</a></li>
                        <li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
            echo "\">Reposos medicos</a></li>
                        <li><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("menu_principal_construccion");
            echo "\">Vacaciones</a></li-->                  
                    </ul>
                </div>
            </div>
        </div>
    ";
        }
        // line 51
        echo " 
    ";
        // line 52
        if ((((isset($context["perfil"]) ? $context["perfil"] : $this->getContext($context, "perfil")) == "Admin") || ((isset($context["perfil"]) ? $context["perfil"] : $this->getContext($context, "perfil")) == "Empleado"))) {
            // line 53
            echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
                <h4 class=\"panel-title\">
                    <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                        Acciones mas comunes
                    </a>
                </h4>
            </div>
            <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                <div class=\"panel-body\">
                    <ul class=\"\">
                        <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("rec_pago_recibo");
            echo "\">Recibo de pago</a></li>
                        <!--li><a href=\"#\">ARC</a></li>
                        <li><a href=\"#\">Constancia de trabajo</a></li-->
                    </ul>
                </div>
            </div>
        </div>
        ";
        }
        // line 71
        echo " 
        ";
        // line 72
        if ((((isset($context["perfil"]) ? $context["perfil"] : $this->getContext($context, "perfil")) == "Admin") || ((isset($context["perfil"]) ? $context["perfil"] : $this->getContext($context, "perfil")) == "Empleado"))) {
            echo "                
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
                <h4 class=\"panel-title\">
                    <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                        Sistema
                    </a>
                </h4>
            </div>
            <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                <div class=\"panel-body\">
                    <ul class=\"\">
                   <li><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_usuario", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
            echo "\">Cambiar clave de acceso</a></li>                   
                   <li><a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("loginglogin_logout");
            echo "\">Salir del sistema</a></li>                  
                 </ul>
                </div>
            </div>
        </div>
        ";
        }
        // line 90
        echo " 
    </div>
    
</div>   
</div> 

";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "    

";
        
        $__internal_5c4a9fd823c3a4400199329af4fdc4ca4e2bed9343811c1c512da7559be02b36->leave($__internal_5c4a9fd823c3a4400199329af4fdc4ca4e2bed9343811c1c512da7559be02b36_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a433fc1f54f086aad9b432f10145d0b841db8c8f3f88ba3ea21d274140a08bf9 = $this->env->getExtension("native_profiler");
        $__internal_a433fc1f54f086aad9b432f10145d0b841db8c8f3f88ba3ea21d274140a08bf9->enter($__internal_a433fc1f54f086aad9b432f10145d0b841db8c8f3f88ba3ea21d274140a08bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script  src = \"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  tipo = \"text / javascript\"> < / script>
               < script src = \"https://code.jquery.com/jquery-2.1.3.js\" ></script>
    <script src=\"js/bootstrap.js\"></script>
    <script> \$('.collapse').collapse()</script>
";
        
        $__internal_a433fc1f54f086aad9b432f10145d0b841db8c8f3f88ba3ea21d274140a08bf9->leave($__internal_a433fc1f54f086aad9b432f10145d0b841db8c8f3f88ba3ea21d274140a08bf9_prof);

    }

    public function getTemplateName()
    {
        return "menuPrincipalBundle:Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 98,  249 => 97,  243 => 96,  234 => 102,  232 => 96,  224 => 90,  215 => 85,  211 => 84,  196 => 72,  193 => 71,  182 => 64,  169 => 53,  167 => 52,  164 => 51,  155 => 46,  151 => 45,  147 => 44,  143 => 43,  139 => 42,  135 => 41,  131 => 40,  127 => 39,  123 => 38,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  103 => 33,  89 => 21,  80 => 18,  77 => 17,  72 => 16,  70 => 15,  68 => 14,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/* <!-- Main component for a primary marketing message or call to action -->*/
/* <div class="container">*/
/*     <div class="jumbotron">*/
/*         <h1>Atencion</h1>*/
/*         <p>Para crear usuarios con privilegios de administracion o para simplemente consultar el recibo de pago precione icono que aparece en la consulta del personal,*/
/*             cabe destacar que no se puede crear ningun usuario que no este registrado en la nomina</p>*/
/*         */
/*     </div>*/
/*     {% if perfil == 'Admin' %}*/
/*         {# para mostrar el mensaje de que se borro el dato #}*/
/*                         {% for flashMessage in app.session.flashbag.get('Mensaje') %}*/
/*                             <span class="alert-warning" >*/
/*                                 {{flashMessage}}*/
/*                             </span>*/
/*                         {% endfor%}*/
/*     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading" role="tab" id="headingOne">*/
/*                 <h4 class="panel-title">*/
/*                     <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">*/
/*                         Nomina y personal*/
/*                     </a>*/
/*                 </h4>*/
/*             </div>*/
/*             <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">*/
/*                 <div class="panel-body">*/
/*                     <ul class="">*/
/*                         <!--li><a href="{{ path('menu_principal_construccion') }}">Asignaciones Generales para el Calculo de nomina</a></li>*/
/*                         <li><a href="{{ path('menu_principal_construccion') }}">Comision de Servicios</a></li>*/
/*                         <li><a href="{{ path('menu_principal_construccion') }}">Calculo de nomina</a></li-->*/
/*                         <li><a href="{{ path('definiciones_menu') }}">Definiciones Generales</a></li>*/
/*                         <!--li><a href="{{ path('menu_principal_construccion') }}">Mantenimiento</a></li>*/
/*                         <li><a href="{{ path('menu_principal_construccion') }}">Movimiento de nomina</a></li>*/
/*                         <li><a href="{{ path('menu_principal_construccion') }}">Nominas especiales</a></li-->*/
/*                         <li><a href="{{ path('personal_personal') }}">Personal</a></li>*/
/*                         <!--li><a href="{{ path('menu_principal_construccion') }}">Prestaciones</a></li>*/
/*                         <li><a href="{{ path('menu_principal_construccion') }}">Prestamos</a></li>*/
/*                         <li><a href="{{ path('menu_principal_construccion') }}">RAC</a></li>*/
/*                         <li><a href="{{ path('menu_principal_construccion') }}">Reportes</a></li>*/
/*                         <li><a href="{{ path('menu_principal_construccion') }}">Reposos medicos</a></li>*/
/*                         <li><a href="{{ path('menu_principal_construccion') }}">Vacaciones</a></li-->                  */
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %} */
/*     {% if perfil == 'Admin' or perfil=='Empleado' %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading" role="tab" id="headingTwo">*/
/*                 <h4 class="panel-title">*/
/*                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">*/
/*                         Acciones mas comunes*/
/*                     </a>*/
/*                 </h4>*/
/*             </div>*/
/*             <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">*/
/*                 <div class="panel-body">*/
/*                     <ul class="">*/
/*                         <li><a href="{{ path('rec_pago_recibo') }}">Recibo de pago</a></li>*/
/*                         <!--li><a href="#">ARC</a></li>*/
/*                         <li><a href="#">Constancia de trabajo</a></li-->*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% endif %} */
/*         {% if perfil == 'Admin' or perfil=='Empleado' %}                */
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading" role="tab" id="headingThree">*/
/*                 <h4 class="panel-title">*/
/*                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">*/
/*                         Sistema*/
/*                     </a>*/
/*                 </h4>*/
/*             </div>*/
/*             <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">*/
/*                 <div class="panel-body">*/
/*                     <ul class="">*/
/*                    <li><a href="{{ path('personal_personal_usuario',{'id':id}) }}">Cambiar clave de acceso</a></li>                   */
/*                    <li><a href="{{ path('loginglogin_logout') }}">Salir del sistema</a></li>                  */
/*                  </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% endif %} */
/*     </div>*/
/*     */
/* </div>   */
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
/* */
/* */
/* */
