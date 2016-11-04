<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_7bcd48b9f9ac99c5f1080205278a4720bc399e0ac0f5432443e32959a070667c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_b6bff2b08bab0491dce0bcf6daef9c62a868da494d7a696ce76c53f08fdb943a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6bff2b08bab0491dce0bcf6daef9c62a868da494d7a696ce76c53f08fdb943a->enter($__internal_b6bff2b08bab0491dce0bcf6daef9c62a868da494d7a696ce76c53f08fdb943a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6bff2b08bab0491dce0bcf6daef9c62a868da494d7a696ce76c53f08fdb943a->leave($__internal_b6bff2b08bab0491dce0bcf6daef9c62a868da494d7a696ce76c53f08fdb943a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06018875e466c69a8cf9051c5c0bd348ee30181244a90c9a0ba777c8a11f63e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06018875e466c69a8cf9051c5c0bd348ee30181244a90c9a0ba777c8a11f63e2->enter($__internal_06018875e466c69a8cf9051c5c0bd348ee30181244a90c9a0ba777c8a11f63e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_06018875e466c69a8cf9051c5c0bd348ee30181244a90c9a0ba777c8a11f63e2->leave($__internal_06018875e466c69a8cf9051c5c0bd348ee30181244a90c9a0ba777c8a11f63e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/projets/clubdelopinion/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
