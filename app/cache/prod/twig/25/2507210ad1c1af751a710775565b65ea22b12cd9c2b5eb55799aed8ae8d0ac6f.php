<?php

/* menuPrincipalBundle:Menu:menu.html.twig */
class __TwigTemplate_48efec996fd4c1482f679ee5fb774534550aa72a329f8d6ecefc0914f52e63ff extends Twig_Template
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
        $__internal_c3f87e81fbed06b42f6721e81ae4ddbc35bfee3c6478b5ba93595b46f71ebf29 = $this->env->getExtension("native_profiler");
        $__internal_c3f87e81fbed06b42f6721e81ae4ddbc35bfee3c6478b5ba93595b46f71ebf29->enter($__internal_c3f87e81fbed06b42f6721e81ae4ddbc35bfee3c6478b5ba93595b46f71ebf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menuPrincipalBundle:Menu:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f87e81fbed06b42f6721e81ae4ddbc35bfee3c6478b5ba93595b46f71ebf29->leave($__internal_c3f87e81fbed06b42f6721e81ae4ddbc35bfee3c6478b5ba93595b46f71ebf29_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38e85cc198909f6ea7ea8450be11d6772d5d6ab3630cda23b8b0ee6730e838df = $this->env->getExtension("native_profiler");
        $__internal_38e85cc198909f6ea7ea8450be11d6772d5d6ab3630cda23b8b0ee6730e838df->enter($__internal_38e85cc198909f6ea7ea8450be11d6772d5d6ab3630cda23b8b0ee6730e838df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/parsley.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_38e85cc198909f6ea7ea8450be11d6772d5d6ab3630cda23b8b0ee6730e838df->leave($__internal_38e85cc198909f6ea7ea8450be11d6772d5d6ab3630cda23b8b0ee6730e838df_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7ee249217f3690ace697da7041789126a5cfd4174abf5d789b27d79f5fb51cb = $this->env->getExtension("native_profiler");
        $__internal_e7ee249217f3690ace697da7041789126a5cfd4174abf5d789b27d79f5fb51cb->enter($__internal_e7ee249217f3690ace697da7041789126a5cfd4174abf5d789b27d79f5fb51cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    
    <div id=\"tree\">
        <div class=\"col-sm-4\">
          <h2>Custom Icons</h2>
          <div id=\"treeview5\" class=\"\"></div>
        </div>
    </div>
    
";
        
        $__internal_e7ee249217f3690ace697da7041789126a5cfd4174abf5d789b27d79f5fb51cb->leave($__internal_e7ee249217f3690ace697da7041789126a5cfd4174abf5d789b27d79f5fb51cb_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_130943cfe54396e777e9cb3acb965b82784b96fb77eae9db6f47f13f829e4caa = $this->env->getExtension("native_profiler");
        $__internal_130943cfe54396e777e9cb3acb965b82784b96fb77eae9db6f47f13f829e4caa->enter($__internal_130943cfe54396e777e9cb3acb965b82784b96fb77eae9db6f47f13f829e4caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "  
    <script>
        var tree = [
  {
    text: \"Parent 1\",
    icon: \"glyphicon glyphicon-stop\",
    selectedIcon: \"glyphicon glyphicon-stop\",
    color: \"#000000\",
    backColor: \"#FFFFFF\",
    href: \"#node-1\",
    selectable: true,
    state: {
      checked: true,
      disabled: true,
      expanded: true,
      selected: true
    },
    tags: ['available'],
      nodes: [
      {
        text: \"Child 1\",
        nodes: [
          {
            text: \"Grandchild 1\"
          },
          {
            text: \"Grandchild 2\"
          }
        ]
      },
      {
        text: \"Child 2\"
      }
    ]
  },
  {
    text: \"Parent 2\"
  },
  {
    text: \"Parent 3\"
  },
  {
    text: \"Parent 4\"
  },
  {
    text: \"Parent 5\"
  }
];
    
        function getTree() {
          // Some logic to retrieve, or generate tree structure
          return data;
        }

        \$('#tree').treeview({data: getTree()});
    </script>      
";
        
        $__internal_130943cfe54396e777e9cb3acb965b82784b96fb77eae9db6f47f13f829e4caa->leave($__internal_130943cfe54396e777e9cb3acb965b82784b96fb77eae9db6f47f13f829e4caa_prof);

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
        return array (  87 => 18,  81 => 17,  66 => 8,  60 => 7,  51 => 5,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('public/css/signin.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('public/css/parsley.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* {% block body %}*/
/*     */
/*     <div id="tree">*/
/*         <div class="col-sm-4">*/
/*           <h2>Custom Icons</h2>*/
/*           <div id="treeview5" class=""></div>*/
/*         </div>*/
/*     </div>*/
/*     */
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}  */
/*     <script>*/
/*         var tree = [*/
/*   {*/
/*     text: "Parent 1",*/
/*     icon: "glyphicon glyphicon-stop",*/
/*     selectedIcon: "glyphicon glyphicon-stop",*/
/*     color: "#000000",*/
/*     backColor: "#FFFFFF",*/
/*     href: "#node-1",*/
/*     selectable: true,*/
/*     state: {*/
/*       checked: true,*/
/*       disabled: true,*/
/*       expanded: true,*/
/*       selected: true*/
/*     },*/
/*     tags: ['available'],*/
/*       nodes: [*/
/*       {*/
/*         text: "Child 1",*/
/*         nodes: [*/
/*           {*/
/*             text: "Grandchild 1"*/
/*           },*/
/*           {*/
/*             text: "Grandchild 2"*/
/*           }*/
/*         ]*/
/*       },*/
/*       {*/
/*         text: "Child 2"*/
/*       }*/
/*     ]*/
/*   },*/
/*   {*/
/*     text: "Parent 2"*/
/*   },*/
/*   {*/
/*     text: "Parent 3"*/
/*   },*/
/*   {*/
/*     text: "Parent 4"*/
/*   },*/
/*   {*/
/*     text: "Parent 5"*/
/*   }*/
/* ];*/
/*     */
/*         function getTree() {*/
/*           // Some logic to retrieve, or generate tree structure*/
/*           return data;*/
/*         }*/
/* */
/*         $('#tree').treeview({data: getTree()});*/
/*     </script>      */
/* {% endblock %}*/
/* */
