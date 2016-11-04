<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_4e31ad79258f149c86665d684d50c9fac816a641343ed8ee5e12e8b4184de96c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_2edff5e26a7a93e26719ab776ef954a7abb38db5936f0fa768006703472a6166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edff5e26a7a93e26719ab776ef954a7abb38db5936f0fa768006703472a6166->enter($__internal_2edff5e26a7a93e26719ab776ef954a7abb38db5936f0fa768006703472a6166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2edff5e26a7a93e26719ab776ef954a7abb38db5936f0fa768006703472a6166->leave($__internal_2edff5e26a7a93e26719ab776ef954a7abb38db5936f0fa768006703472a6166_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f726f44b6a087f89412134f647b5bf47c9115604a6ccf75fdce7682d43677cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f726f44b6a087f89412134f647b5bf47c9115604a6ccf75fdce7682d43677cd->enter($__internal_3f726f44b6a087f89412134f647b5bf47c9115604a6ccf75fdce7682d43677cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3f726f44b6a087f89412134f647b5bf47c9115604a6ccf75fdce7682d43677cd->leave($__internal_3f726f44b6a087f89412134f647b5bf47c9115604a6ccf75fdce7682d43677cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/projets/clubdelopinion/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
