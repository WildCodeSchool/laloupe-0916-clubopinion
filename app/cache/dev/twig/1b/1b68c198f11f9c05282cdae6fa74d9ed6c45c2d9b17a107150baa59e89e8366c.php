<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ab33507bfa9dbad9b565541df1fd2e30f32746e793086586746a8f3a79548c81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b81f468a6d97475cbd04ff826b9d28855ddc24038eb9010a777812f23522602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b81f468a6d97475cbd04ff826b9d28855ddc24038eb9010a777812f23522602->enter($__internal_0b81f468a6d97475cbd04ff826b9d28855ddc24038eb9010a777812f23522602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0b81f468a6d97475cbd04ff826b9d28855ddc24038eb9010a777812f23522602->leave($__internal_0b81f468a6d97475cbd04ff826b9d28855ddc24038eb9010a777812f23522602_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_03617732b78042b88e62f07db14c0d632061d3d8a809a9e1bf301d52ac4c9342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03617732b78042b88e62f07db14c0d632061d3d8a809a9e1bf301d52ac4c9342->enter($__internal_03617732b78042b88e62f07db14c0d632061d3d8a809a9e1bf301d52ac4c9342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_03617732b78042b88e62f07db14c0d632061d3d8a809a9e1bf301d52ac4c9342->leave($__internal_03617732b78042b88e62f07db14c0d632061d3d8a809a9e1bf301d52ac4c9342_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f1b09fc8ad3fb47b3ea0b7e267e76779e886573b8aef5964ddd949baa089d73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b09fc8ad3fb47b3ea0b7e267e76779e886573b8aef5964ddd949baa089d73e->enter($__internal_f1b09fc8ad3fb47b3ea0b7e267e76779e886573b8aef5964ddd949baa089d73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f1b09fc8ad3fb47b3ea0b7e267e76779e886573b8aef5964ddd949baa089d73e->leave($__internal_f1b09fc8ad3fb47b3ea0b7e267e76779e886573b8aef5964ddd949baa089d73e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7af717b29ef86cadb6a5911c06422897ed7d7ea93a5ab886bacb2beea3bfa4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af717b29ef86cadb6a5911c06422897ed7d7ea93a5ab886bacb2beea3bfa4f2->enter($__internal_7af717b29ef86cadb6a5911c06422897ed7d7ea93a5ab886bacb2beea3bfa4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_7af717b29ef86cadb6a5911c06422897ed7d7ea93a5ab886bacb2beea3bfa4f2->leave($__internal_7af717b29ef86cadb6a5911c06422897ed7d7ea93a5ab886bacb2beea3bfa4f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/projets/clubdelopinion/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
