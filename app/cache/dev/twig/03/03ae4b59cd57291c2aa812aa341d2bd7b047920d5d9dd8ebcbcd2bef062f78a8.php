<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0a631f4ec4ce7384a777a3d94d463ef8ddceaec9234ca940f7d06077a5de17f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_288e9494edeaa41571a8d6e6e0f5bccf054de18453e4875eae0d5c570bf15000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288e9494edeaa41571a8d6e6e0f5bccf054de18453e4875eae0d5c570bf15000->enter($__internal_288e9494edeaa41571a8d6e6e0f5bccf054de18453e4875eae0d5c570bf15000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_288e9494edeaa41571a8d6e6e0f5bccf054de18453e4875eae0d5c570bf15000->leave($__internal_288e9494edeaa41571a8d6e6e0f5bccf054de18453e4875eae0d5c570bf15000_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03f1efc6a9143b19d1299a225a539f3b4c28d1b5853eca7885d8d77cc4b989c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f1efc6a9143b19d1299a225a539f3b4c28d1b5853eca7885d8d77cc4b989c6->enter($__internal_03f1efc6a9143b19d1299a225a539f3b4c28d1b5853eca7885d8d77cc4b989c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_03f1efc6a9143b19d1299a225a539f3b4c28d1b5853eca7885d8d77cc4b989c6->leave($__internal_03f1efc6a9143b19d1299a225a539f3b4c28d1b5853eca7885d8d77cc4b989c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/projets/clubdelopinion/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
