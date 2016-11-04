<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b74f8accc3b5d2cbd58c835c758e81e2920e2ddb23eb677a108adc0341d1b303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_8c17fb911f45478568c55d666c2cb8a12028ecb5923e26bf6cb2be7d331539a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c17fb911f45478568c55d666c2cb8a12028ecb5923e26bf6cb2be7d331539a3->enter($__internal_8c17fb911f45478568c55d666c2cb8a12028ecb5923e26bf6cb2be7d331539a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c17fb911f45478568c55d666c2cb8a12028ecb5923e26bf6cb2be7d331539a3->leave($__internal_8c17fb911f45478568c55d666c2cb8a12028ecb5923e26bf6cb2be7d331539a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc4bea51bc106aed58999f34026dd0fa81a013b250325883145d9c5b5f904771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4bea51bc106aed58999f34026dd0fa81a013b250325883145d9c5b5f904771->enter($__internal_fc4bea51bc106aed58999f34026dd0fa81a013b250325883145d9c5b5f904771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_fc4bea51bc106aed58999f34026dd0fa81a013b250325883145d9c5b5f904771->leave($__internal_fc4bea51bc106aed58999f34026dd0fa81a013b250325883145d9c5b5f904771_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/projets/clubdelopinion/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
