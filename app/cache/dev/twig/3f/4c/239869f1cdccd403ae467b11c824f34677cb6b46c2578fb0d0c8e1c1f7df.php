<?php

/* ArmdResourceBundle:Admin:standard_layout.html.twig */
class __TwigTemplate_3f4c239869f1cdccd403ae467b11c824f34677cb6b46c2578fb0d0c8e1c1f7df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle::standard_layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'footer' => array($this, 'block_footer'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- jQuery code -->
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    <!-- base application asset -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/armdresource/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/armdresource/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ArmdResourceBundle:Admin:standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  47 => 8,  43 => 7,  38 => 5,  92 => 37,  84 => 32,  71 => 22,  63 => 15,  57 => 12,  51 => 11,  48 => 10,  42 => 8,  40 => 7,  35 => 4,  32 => 3,  29 => 3,);
    }
}
