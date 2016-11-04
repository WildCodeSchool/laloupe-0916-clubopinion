<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_51042eeb45a3f56942546ff8d90916f8e3e3550df2952c2a64533e34c5f79b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4b2e7905d8942aba45ab25057cfdb7958d599a12452cb6113269be60be898a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2e7905d8942aba45ab25057cfdb7958d599a12452cb6113269be60be898a33->enter($__internal_4b2e7905d8942aba45ab25057cfdb7958d599a12452cb6113269be60be898a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b2e7905d8942aba45ab25057cfdb7958d599a12452cb6113269be60be898a33->leave($__internal_4b2e7905d8942aba45ab25057cfdb7958d599a12452cb6113269be60be898a33_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_325a06f3489def72081cbdf144fa8a881d779a98148e195240dc7e817e2e5e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325a06f3489def72081cbdf144fa8a881d779a98148e195240dc7e817e2e5e38->enter($__internal_325a06f3489def72081cbdf144fa8a881d779a98148e195240dc7e817e2e5e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_325a06f3489def72081cbdf144fa8a881d779a98148e195240dc7e817e2e5e38->leave($__internal_325a06f3489def72081cbdf144fa8a881d779a98148e195240dc7e817e2e5e38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/projets/clubdelopinion/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
