<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7d824998f8a0ad4292e2c45c529070b8f1d94345ea658716b1e2310fffbd2805 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59c7c8977139c0ee8441e26c9c81f78b1a21dbc8bf67127b98650f0bade91723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c7c8977139c0ee8441e26c9c81f78b1a21dbc8bf67127b98650f0bade91723->enter($__internal_59c7c8977139c0ee8441e26c9c81f78b1a21dbc8bf67127b98650f0bade91723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59c7c8977139c0ee8441e26c9c81f78b1a21dbc8bf67127b98650f0bade91723->leave($__internal_59c7c8977139c0ee8441e26c9c81f78b1a21dbc8bf67127b98650f0bade91723_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0984168f6ac7426b3f8cb0eddb309d95e425a92331bce033ac4b99d8bc25dd1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0984168f6ac7426b3f8cb0eddb309d95e425a92331bce033ac4b99d8bc25dd1f->enter($__internal_0984168f6ac7426b3f8cb0eddb309d95e425a92331bce033ac4b99d8bc25dd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_0984168f6ac7426b3f8cb0eddb309d95e425a92331bce033ac4b99d8bc25dd1f->leave($__internal_0984168f6ac7426b3f8cb0eddb309d95e425a92331bce033ac4b99d8bc25dd1f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/projets/clubdelopinion/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
