<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4271c45c8c7e2f1606800b75918f503d2ef475a509422402d4acaa859e80f6ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_9e07003ec3e084094a0dbdbfea55c31c2a8a50da27d9d713e2e8de7181256e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e07003ec3e084094a0dbdbfea55c31c2a8a50da27d9d713e2e8de7181256e25->enter($__internal_9e07003ec3e084094a0dbdbfea55c31c2a8a50da27d9d713e2e8de7181256e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e07003ec3e084094a0dbdbfea55c31c2a8a50da27d9d713e2e8de7181256e25->leave($__internal_9e07003ec3e084094a0dbdbfea55c31c2a8a50da27d9d713e2e8de7181256e25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2272fb6aafe9dcba5e23b36e0f384f58e336391ca1bd8d5484aa17a3bb420c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2272fb6aafe9dcba5e23b36e0f384f58e336391ca1bd8d5484aa17a3bb420c3f->enter($__internal_2272fb6aafe9dcba5e23b36e0f384f58e336391ca1bd8d5484aa17a3bb420c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2272fb6aafe9dcba5e23b36e0f384f58e336391ca1bd8d5484aa17a3bb420c3f->leave($__internal_2272fb6aafe9dcba5e23b36e0f384f58e336391ca1bd8d5484aa17a3bb420c3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/projets/clubdelopinion/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
