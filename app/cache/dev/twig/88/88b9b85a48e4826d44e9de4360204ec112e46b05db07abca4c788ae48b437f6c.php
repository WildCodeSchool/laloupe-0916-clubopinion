<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_5f48fb1ff3d53de5402dbc0fb92af9c07c48363589d8b0de33f4e3351239cd89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_ee14e92bcb9218092c004242fe9972a5d050f712157e2c1d3051ecb0da713cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee14e92bcb9218092c004242fe9972a5d050f712157e2c1d3051ecb0da713cad->enter($__internal_ee14e92bcb9218092c004242fe9972a5d050f712157e2c1d3051ecb0da713cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee14e92bcb9218092c004242fe9972a5d050f712157e2c1d3051ecb0da713cad->leave($__internal_ee14e92bcb9218092c004242fe9972a5d050f712157e2c1d3051ecb0da713cad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee2e36500f2753c45744f09c0063daa7976741d16588f92056107df042ecdd83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2e36500f2753c45744f09c0063daa7976741d16588f92056107df042ecdd83->enter($__internal_ee2e36500f2753c45744f09c0063daa7976741d16588f92056107df042ecdd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ee2e36500f2753c45744f09c0063daa7976741d16588f92056107df042ecdd83->leave($__internal_ee2e36500f2753c45744f09c0063daa7976741d16588f92056107df042ecdd83_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/projets/clubdelopinion/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
