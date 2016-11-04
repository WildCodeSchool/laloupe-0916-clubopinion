<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_5b34f1061e5d243bbad7b22c97a0fc395bfdd50985b60fa29dd72c4eb3d7b406 extends Twig_Template
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
        $__internal_0965085aa95d1aaa4a4a1a6f89b0edd4d293a852257660653a59567cc7de12e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0965085aa95d1aaa4a4a1a6f89b0edd4d293a852257660653a59567cc7de12e3->enter($__internal_0965085aa95d1aaa4a4a1a6f89b0edd4d293a852257660653a59567cc7de12e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0965085aa95d1aaa4a4a1a6f89b0edd4d293a852257660653a59567cc7de12e3->leave($__internal_0965085aa95d1aaa4a4a1a6f89b0edd4d293a852257660653a59567cc7de12e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff2ee77bacbe348eb618daf856969f3b54f3de04698a071c9936a599fb169f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2ee77bacbe348eb618daf856969f3b54f3de04698a071c9936a599fb169f1d->enter($__internal_ff2ee77bacbe348eb618daf856969f3b54f3de04698a071c9936a599fb169f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_ff2ee77bacbe348eb618daf856969f3b54f3de04698a071c9936a599fb169f1d->leave($__internal_ff2ee77bacbe348eb618daf856969f3b54f3de04698a071c9936a599fb169f1d_prof);

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
