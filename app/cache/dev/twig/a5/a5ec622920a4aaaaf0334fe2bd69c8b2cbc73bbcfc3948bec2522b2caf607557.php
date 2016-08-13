<?php

/* personalBundle:del:del.html.twig */
class __TwigTemplate_56aa48e6627b9027d2273670843888fd4096434f0ad662beb873c6d9fa217283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "personalBundle:del:del.html.twig", 1);
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
        $__internal_1a7e997a874a32e8bfd3f57d46c25c89b8c43469a5e516b9cec10e1f935d98a8 = $this->env->getExtension("native_profiler");
        $__internal_1a7e997a874a32e8bfd3f57d46c25c89b8c43469a5e516b9cec10e1f935d98a8->enter($__internal_1a7e997a874a32e8bfd3f57d46c25c89b8c43469a5e516b9cec10e1f935d98a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personalBundle:del:del.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a7e997a874a32e8bfd3f57d46c25c89b8c43469a5e516b9cec10e1f935d98a8->leave($__internal_1a7e997a874a32e8bfd3f57d46c25c89b8c43469a5e516b9cec10e1f935d98a8_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6aaba0569cd4b4096b3d6816d908a590e14bf90e51c1eba536147f0ee2ad4af4 = $this->env->getExtension("native_profiler");
        $__internal_6aaba0569cd4b4096b3d6816d908a590e14bf90e51c1eba536147f0ee2ad4af4->enter($__internal_6aaba0569cd4b4096b3d6816d908a590e14bf90e51c1eba536147f0ee2ad4af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_6aaba0569cd4b4096b3d6816d908a590e14bf90e51c1eba536147f0ee2ad4af4->leave($__internal_6aaba0569cd4b4096b3d6816d908a590e14bf90e51c1eba536147f0ee2ad4af4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1293fb25f23460b3ceee3b3c416e462299f5e85c6593e59211eaa31471a71e2 = $this->env->getExtension("native_profiler");
        $__internal_e1293fb25f23460b3ceee3b3c416e462299f5e85c6593e59211eaa31471a71e2->enter($__internal_e1293fb25f23460b3ceee3b3c416e462299f5e85c6593e59211eaa31471a71e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
    <div class=\"container-fluid\">
        <div class=\"well well-small\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["ver"]) {
            // line 10
            echo "          <fieldset>
            <legend>::Eliminacion del empleado::</legend>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Rif</label>
                ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "rif", array()), "html", null, true);
            echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Cedula</label>
                ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "cedula", array()), "html", null, true);
            echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Nombre</label>
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "nombre", array()), "html", null, true);
            echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Apellido</label>
                ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "apellido", array()), "html", null, true);
            echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Estado Civil</label>
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "ec", array()), "html", null, true);
            echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Sexo</label>
                ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "sexo", array()), "html", null, true);
            echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Telefono movil</label>
                ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "tlfmovil", array()), "html", null, true);
            echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Telefono de casa</label>
                ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "tlfcasa", array()), "html", null, true);
            echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Correo electronico</label>
                ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "correoelectronico", array()), "html", null, true);
            echo "
            </div>
             <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Direccion</label>
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["ver"], "direccionhab", array()), "html", null, true);
            echo "
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">Desea eliminar este registro?</label>
                <button type=\"button\" class=\"btn btn-lg btn-success\" onclick=\"location.href='";
            // line 54
            echo $this->env->getExtension('routing')->getPath("personal_personal");
            echo "'\">No</button> 
                <button type=\"button\" class=\"btn btn-lg btn-danger\" onclick=\"location.href='";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("personal_personal_delete", array("id" => $this->getAttribute($context["ver"], "id", array()))), "html", null, true);
            echo "'\">Si</button>
            </div>        
          </fieldset>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ver'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </div>
    </div>
    </div>
        

";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "    

";
        
        $__internal_e1293fb25f23460b3ceee3b3c416e462299f5e85c6593e59211eaa31471a71e2->leave($__internal_e1293fb25f23460b3ceee3b3c416e462299f5e85c6593e59211eaa31471a71e2_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_03f2307ffc19a8e900143c4c0f0b3d444a81feba7fd82ba567c11cde8a32605f = $this->env->getExtension("native_profiler");
        $__internal_03f2307ffc19a8e900143c4c0f0b3d444a81feba7fd82ba567c11cde8a32605f->enter($__internal_03f2307ffc19a8e900143c4c0f0b3d444a81feba7fd82ba567c11cde8a32605f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script  src = \"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-latest.min.js"), "html", null, true);
        echo "\"  type = \"text / javascript\"> </script>
    <script src = \"https://code.jquery.com/jquery-2.1.3.js\"></script>
    <script src=\"js/bootstrap.js\"></script>
    <script> \$('.collapse'.collapse(</script>
";
        
        $__internal_03f2307ffc19a8e900143c4c0f0b3d444a81feba7fd82ba567c11cde8a32605f->leave($__internal_03f2307ffc19a8e900143c4c0f0b3d444a81feba7fd82ba567c11cde8a32605f_prof);

    }

    public function getTemplateName()
    {
        return "personalBundle:del:del.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 66,  181 => 65,  175 => 64,  166 => 70,  164 => 64,  157 => 59,  147 => 55,  143 => 54,  136 => 50,  129 => 46,  122 => 42,  115 => 38,  108 => 34,  101 => 30,  94 => 26,  87 => 22,  80 => 18,  73 => 14,  67 => 10,  63 => 9,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*     <div class="container-fluid">*/
/*         <div class="well well-small">*/
/*         {% for ver in data %}*/
/*           <fieldset>*/
/*             <legend>::Eliminacion del empleado::</legend>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Rif</label>*/
/*                 {{ver.rif }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Cedula</label>*/
/*                 {{ver.cedula          }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Nombre</label>*/
/*                 {{ver.nombre         }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Apellido</label>*/
/*                 {{ver.apellido    }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Estado Civil</label>*/
/*                 {{ver.ec    }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Sexo</label>*/
/*                 {{ver.sexo       }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Telefono movil</label>*/
/*                 {{ver.tlfmovil         }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Telefono de casa</label>*/
/*                 {{ver.tlfcasa         }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Correo electronico</label>*/
/*                 {{ver.correoelectronico      }}*/
/*             </div>*/
/*              <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Direccion</label>*/
/*                 {{ver.direccionhab      }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">Desea eliminar este registro?</label>*/
/*                 <button type="button" class="btn btn-lg btn-success" onclick="location.href='{{ path('personal_personal') }}'">No</button> */
/*                 <button type="button" class="btn btn-lg btn-danger" onclick="location.href='{{ path('personal_personal_delete',{'id':ver.id}) }}'">Si</button>*/
/*             </div>        */
/*           </fieldset>*/
/*         {% endfor %}*/
/*         </div>*/
/*     </div>*/
/*     </div>*/
/*         */
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script  src = "{{ asset('public/js/jquery-latest.min.js') }}"  type = "text / javascript"> </script>*/
/*     <script src = "https://code.jquery.com/jquery-2.1.3.js"></script>*/
/*     <script src="js/bootstrap.js"></script>*/
/*     <script> $('.collapse'.collapse(</script>*/
/* {% endblock %}    */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
