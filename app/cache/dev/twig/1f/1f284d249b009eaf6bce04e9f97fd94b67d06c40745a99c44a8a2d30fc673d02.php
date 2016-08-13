<?php

/* ::botonera.html.twig */
class __TwigTemplate_6df91e18daaf20a9e4b5fed86ca99c5108106b3a54df8b7f6e77ed25ca8d773f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'botonera' => array($this, 'block_botonera'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0486f0dbf4a9dbafd181ffcf5bbca95100ee5311db219a73debcac0608760457 = $this->env->getExtension("native_profiler");
        $__internal_0486f0dbf4a9dbafd181ffcf5bbca95100ee5311db219a73debcac0608760457->enter($__internal_0486f0dbf4a9dbafd181ffcf5bbca95100ee5311db219a73debcac0608760457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::botonera.html.twig"));

        // line 2
        $this->displayBlock('botonera', $context, $blocks);
        // line 15
        echo "    ";
        
        $__internal_0486f0dbf4a9dbafd181ffcf5bbca95100ee5311db219a73debcac0608760457->leave($__internal_0486f0dbf4a9dbafd181ffcf5bbca95100ee5311db219a73debcac0608760457_prof);

    }

    // line 2
    public function block_botonera($context, array $blocks = array())
    {
        $__internal_ae2747acd0e4b7b1a691b652d0218df33b83f2b2ae4e96a13df916d9ff9d237a = $this->env->getExtension("native_profiler");
        $__internal_ae2747acd0e4b7b1a691b652d0218df33b83f2b2ae4e96a13df916d9ff9d237a->enter($__internal_ae2747acd0e4b7b1a691b652d0218df33b83f2b2ae4e96a13df916d9ff9d237a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "botonera"));

        // line 3
        echo "    ";
        if (((isset($context["perfil"]) ? $context["perfil"] : $this->getContext($context, "perfil")) == "Admin")) {
            // line 4
            echo "    <div class=\"btn-group\">
        <a class=\"btn btn-lg btn-info\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_exp_lab_ant", array("id" => $this->getAttribute((isset($context["ver"]) ? $context["ver"] : $this->getContext($context, "ver")), "id", array()))), "html", null, true);
            echo "\" role=\"button\"><span class=\"glyphicon glyphicon-briefcase\"></span> Exp. laboral anterior</a>
        <!--a class=\"btn btn-lg btn-info\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal", array("id" => $this->getAttribute((isset($context["ver"]) ? $context["ver"] : $this->getContext($context, "ver")), "id", array()))), "html", null, true);
            echo "\" role=\"button\"><span class=\"glyphicon glyphicon-list\"></span> Carga Familiar</a-->
        <a class=\"btn btn-lg btn-info\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_cargo_add", array("id" => $this->getAttribute((isset($context["ver"]) ? $context["ver"] : $this->getContext($context, "ver")), "id", array()))), "html", null, true);
            echo "\" role=\"button\"><span class=\"glyphicon glyphicon-scale\"></span> Cargo</a>
        <!--a class=\"btn btn-lg btn-info\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal", array("id" => $this->getAttribute((isset($context["ver"]) ? $context["ver"] : $this->getContext($context, "ver")), "id", array()))), "html", null, true);
            echo "\" role=\"button\"><span class=\"glyphicon glyphicon-briefcase\"></span> Exp. laboral interna</a-->
        <a class=\"btn btn-lg btn-info\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_academico", array("id" => $this->getAttribute((isset($context["ver"]) ? $context["ver"] : $this->getContext($context, "ver")), "id", array()))), "html", null, true);
            echo "\" role=\"button\"><span class=\"glyphicon glyphicon-education\"></span> Inf. academica</a>
        <a class=\"btn btn-lg btn-info\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_asignaciones_add", array("id" => $this->getAttribute((isset($context["ver"]) ? $context["ver"] : $this->getContext($context, "ver")), "id", array()))), "html", null, true);
            echo "\" role=\"button\"><span class=\"glyphicon glyphicon-thumbs-up\"></span> Asignaciones de nomina</a>
        <a class=\"btn btn-lg btn-info\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_retenciones_add", array("id" => $this->getAttribute((isset($context["ver"]) ? $context["ver"] : $this->getContext($context, "ver")), "id", array()))), "html", null, true);
            echo "\" role=\"button\"><span class=\"glyphicon glyphicon-thumbs-down\"></span> Retenciones de nomina</a>
    </div>
    ";
        }
        
        $__internal_ae2747acd0e4b7b1a691b652d0218df33b83f2b2ae4e96a13df916d9ff9d237a->leave($__internal_ae2747acd0e4b7b1a691b652d0218df33b83f2b2ae4e96a13df916d9ff9d237a_prof);

    }

    public function getTemplateName()
    {
        return "::botonera.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  41 => 4,  38 => 3,  32 => 2,  25 => 15,  23 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% block botonera %}*/
/*     {% if perfil == 'Admin' %}*/
/*     <div class="btn-group">*/
/*         <a class="btn btn-lg btn-info" href="{{ path('personal_personal_exp_lab_ant',{'id':ver.id}) }}" role="button"><span class="glyphicon glyphicon-briefcase"></span> Exp. laboral anterior</a>*/
/*         <!--a class="btn btn-lg btn-info" href="{{ path('personal_personal',{'id':ver.id}) }}" role="button"><span class="glyphicon glyphicon-list"></span> Carga Familiar</a-->*/
/*         <a class="btn btn-lg btn-info" href="{{ path('personal_personal_cargo_add',{'id':ver.id}) }}" role="button"><span class="glyphicon glyphicon-scale"></span> Cargo</a>*/
/*         <!--a class="btn btn-lg btn-info" href="{{ path('personal_personal',{'id':ver.id}) }}" role="button"><span class="glyphicon glyphicon-briefcase"></span> Exp. laboral interna</a-->*/
/*         <a class="btn btn-lg btn-info" href="{{ path('personal_personal_academico',{'id':ver.id}) }}" role="button"><span class="glyphicon glyphicon-education"></span> Inf. academica</a>*/
/*         <a class="btn btn-lg btn-info" href="{{ path('personal_personal_asignaciones_add',{'id':ver.id}) }}" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> Asignaciones de nomina</a>*/
/*         <a class="btn btn-lg btn-info" href="{{ path('personal_personal_retenciones_add',{'id':ver.id}) }}" role="button"><span class="glyphicon glyphicon-thumbs-down"></span> Retenciones de nomina</a>*/
/*     </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/*     */
