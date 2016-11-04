<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ebe45fed15333991fd5220c47a81878571227761f07354037ddb432c7355df01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4391d6746a92796f10e6bd08490ad2c321c6743432f8f348791e0437206ac175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4391d6746a92796f10e6bd08490ad2c321c6743432f8f348791e0437206ac175->enter($__internal_4391d6746a92796f10e6bd08490ad2c321c6743432f8f348791e0437206ac175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4391d6746a92796f10e6bd08490ad2c321c6743432f8f348791e0437206ac175->leave($__internal_4391d6746a92796f10e6bd08490ad2c321c6743432f8f348791e0437206ac175_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da1947bebff6d3ff4cf00394efcc4c5e4eb91e81c30c285dec14b747b757078b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1947bebff6d3ff4cf00394efcc4c5e4eb91e81c30c285dec14b747b757078b->enter($__internal_da1947bebff6d3ff4cf00394efcc4c5e4eb91e81c30c285dec14b747b757078b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_da1947bebff6d3ff4cf00394efcc4c5e4eb91e81c30c285dec14b747b757078b->leave($__internal_da1947bebff6d3ff4cf00394efcc4c5e4eb91e81c30c285dec14b747b757078b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fad89b9fee686c2e06f5534b0c2b7a93c78751d56edce4a1f170fdafc39dc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fad89b9fee686c2e06f5534b0c2b7a93c78751d56edce4a1f170fdafc39dc65->enter($__internal_3fad89b9fee686c2e06f5534b0c2b7a93c78751d56edce4a1f170fdafc39dc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3fad89b9fee686c2e06f5534b0c2b7a93c78751d56edce4a1f170fdafc39dc65->leave($__internal_3fad89b9fee686c2e06f5534b0c2b7a93c78751d56edce4a1f170fdafc39dc65_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
