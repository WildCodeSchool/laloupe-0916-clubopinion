<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_5475c3a67288044fc7f3f325c788520d9467af1a742d5027fe9d431a57dfcfed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_cd048da9407427c84058570bcf8bf1dfdfcf82e7e46f5dd1f95d8072007d0e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd048da9407427c84058570bcf8bf1dfdfcf82e7e46f5dd1f95d8072007d0e71->enter($__internal_cd048da9407427c84058570bcf8bf1dfdfcf82e7e46f5dd1f95d8072007d0e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd048da9407427c84058570bcf8bf1dfdfcf82e7e46f5dd1f95d8072007d0e71->leave($__internal_cd048da9407427c84058570bcf8bf1dfdfcf82e7e46f5dd1f95d8072007d0e71_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bde9ece0f978e4130daf5ce7f6fc30ee1e7938d18c1b5fc9b8dd85c91a8dd9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bde9ece0f978e4130daf5ce7f6fc30ee1e7938d18c1b5fc9b8dd85c91a8dd9b->enter($__internal_1bde9ece0f978e4130daf5ce7f6fc30ee1e7938d18c1b5fc9b8dd85c91a8dd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_1bde9ece0f978e4130daf5ce7f6fc30ee1e7938d18c1b5fc9b8dd85c91a8dd9b->leave($__internal_1bde9ece0f978e4130daf5ce7f6fc30ee1e7938d18c1b5fc9b8dd85c91a8dd9b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/projets/clubdelopinion/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
