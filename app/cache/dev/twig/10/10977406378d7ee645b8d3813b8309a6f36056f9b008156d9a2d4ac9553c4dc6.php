<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7fbbef208bf75ebc986fe3cd6285dcb419dc76bfc4d12ea39cdd64dafc90771f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bf6efe7528c0a3b1f63ba0c34ecbdc526f9b49c523233919376d7bd46f132aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf6efe7528c0a3b1f63ba0c34ecbdc526f9b49c523233919376d7bd46f132aa->enter($__internal_1bf6efe7528c0a3b1f63ba0c34ecbdc526f9b49c523233919376d7bd46f132aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bf6efe7528c0a3b1f63ba0c34ecbdc526f9b49c523233919376d7bd46f132aa->leave($__internal_1bf6efe7528c0a3b1f63ba0c34ecbdc526f9b49c523233919376d7bd46f132aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69112154db98c553609c9a460aae3c4118c10878bc1f660496cd470bf5af86b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69112154db98c553609c9a460aae3c4118c10878bc1f660496cd470bf5af86b5->enter($__internal_69112154db98c553609c9a460aae3c4118c10878bc1f660496cd470bf5af86b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_69112154db98c553609c9a460aae3c4118c10878bc1f660496cd470bf5af86b5->leave($__internal_69112154db98c553609c9a460aae3c4118c10878bc1f660496cd470bf5af86b5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1f983f1aea13767a0d9aa635742997feed85f462786fd164a4ed4aee955d9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f983f1aea13767a0d9aa635742997feed85f462786fd164a4ed4aee955d9e1->enter($__internal_f1f983f1aea13767a0d9aa635742997feed85f462786fd164a4ed4aee955d9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f1f983f1aea13767a0d9aa635742997feed85f462786fd164a4ed4aee955d9e1->leave($__internal_f1f983f1aea13767a0d9aa635742997feed85f462786fd164a4ed4aee955d9e1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6093bb554daae5bd4edac206e400c7c5983e0112343437afd2c9465259b7713f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6093bb554daae5bd4edac206e400c7c5983e0112343437afd2c9465259b7713f->enter($__internal_6093bb554daae5bd4edac206e400c7c5983e0112343437afd2c9465259b7713f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6093bb554daae5bd4edac206e400c7c5983e0112343437afd2c9465259b7713f->leave($__internal_6093bb554daae5bd4edac206e400c7c5983e0112343437afd2c9465259b7713f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
