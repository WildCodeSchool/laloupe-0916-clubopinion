<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1ad64e3156655f1ad74f813e98ab764536e200a7de7e99fb99c529898e6339ee extends Twig_Template
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
        $__internal_a18d5d3ea50180242a24dc922b7a130a3859a80fd0f9c5c62565d87064e38806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18d5d3ea50180242a24dc922b7a130a3859a80fd0f9c5c62565d87064e38806->enter($__internal_a18d5d3ea50180242a24dc922b7a130a3859a80fd0f9c5c62565d87064e38806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a18d5d3ea50180242a24dc922b7a130a3859a80fd0f9c5c62565d87064e38806->leave($__internal_a18d5d3ea50180242a24dc922b7a130a3859a80fd0f9c5c62565d87064e38806_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2988bead79f10b19cf948f9661bc08b533cea5e5dcef2f5ab5d6c389de21bd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2988bead79f10b19cf948f9661bc08b533cea5e5dcef2f5ab5d6c389de21bd03->enter($__internal_2988bead79f10b19cf948f9661bc08b533cea5e5dcef2f5ab5d6c389de21bd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_2988bead79f10b19cf948f9661bc08b533cea5e5dcef2f5ab5d6c389de21bd03->leave($__internal_2988bead79f10b19cf948f9661bc08b533cea5e5dcef2f5ab5d6c389de21bd03_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_015f53c8352789ce65fccd1ec7c4aefbedf4e052326cee1a653ed83d036f4835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015f53c8352789ce65fccd1ec7c4aefbedf4e052326cee1a653ed83d036f4835->enter($__internal_015f53c8352789ce65fccd1ec7c4aefbedf4e052326cee1a653ed83d036f4835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_015f53c8352789ce65fccd1ec7c4aefbedf4e052326cee1a653ed83d036f4835->leave($__internal_015f53c8352789ce65fccd1ec7c4aefbedf4e052326cee1a653ed83d036f4835_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_26dbce1e713fd170f4a119a982b2a8a16e6df16b24aee0bd2a22e336d41b8da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26dbce1e713fd170f4a119a982b2a8a16e6df16b24aee0bd2a22e336d41b8da1->enter($__internal_26dbce1e713fd170f4a119a982b2a8a16e6df16b24aee0bd2a22e336d41b8da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_26dbce1e713fd170f4a119a982b2a8a16e6df16b24aee0bd2a22e336d41b8da1->leave($__internal_26dbce1e713fd170f4a119a982b2a8a16e6df16b24aee0bd2a22e336d41b8da1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/projets/clubdelopinion/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
