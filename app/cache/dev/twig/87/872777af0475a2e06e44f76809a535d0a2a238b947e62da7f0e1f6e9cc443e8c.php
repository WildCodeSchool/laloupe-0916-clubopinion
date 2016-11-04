<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_b6f1899e41c1ca0ea5abcfa9acb3ff608e5c2f76ed408dd821270635dcae27c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_3396e91d7b3b021edb7fa67c64321b0f29fb7d283a70e6faea15249c95d40463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3396e91d7b3b021edb7fa67c64321b0f29fb7d283a70e6faea15249c95d40463->enter($__internal_3396e91d7b3b021edb7fa67c64321b0f29fb7d283a70e6faea15249c95d40463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3396e91d7b3b021edb7fa67c64321b0f29fb7d283a70e6faea15249c95d40463->leave($__internal_3396e91d7b3b021edb7fa67c64321b0f29fb7d283a70e6faea15249c95d40463_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11837c60c9f87b3d4a5799ca8085a379eca0ff46e8151f976a6f631d2457329c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11837c60c9f87b3d4a5799ca8085a379eca0ff46e8151f976a6f631d2457329c->enter($__internal_11837c60c9f87b3d4a5799ca8085a379eca0ff46e8151f976a6f631d2457329c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_11837c60c9f87b3d4a5799ca8085a379eca0ff46e8151f976a6f631d2457329c->leave($__internal_11837c60c9f87b3d4a5799ca8085a379eca0ff46e8151f976a6f631d2457329c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/projets/clubdelopinion/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
