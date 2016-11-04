<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e183278f1a85616b06b67185b34a6f1f72f655db79fa23821078944ca9a6f9c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_fdcd6a2f335247783bb6d3426fa998a8a4a38162e2e1aa225c40d650accabee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdcd6a2f335247783bb6d3426fa998a8a4a38162e2e1aa225c40d650accabee2->enter($__internal_fdcd6a2f335247783bb6d3426fa998a8a4a38162e2e1aa225c40d650accabee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdcd6a2f335247783bb6d3426fa998a8a4a38162e2e1aa225c40d650accabee2->leave($__internal_fdcd6a2f335247783bb6d3426fa998a8a4a38162e2e1aa225c40d650accabee2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06ea0c1f4d1102d5898fd1edda97511054fe6d8432f7b15b152a26ee4d64ac1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ea0c1f4d1102d5898fd1edda97511054fe6d8432f7b15b152a26ee4d64ac1e->enter($__internal_06ea0c1f4d1102d5898fd1edda97511054fe6d8432f7b15b152a26ee4d64ac1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_06ea0c1f4d1102d5898fd1edda97511054fe6d8432f7b15b152a26ee4d64ac1e->leave($__internal_06ea0c1f4d1102d5898fd1edda97511054fe6d8432f7b15b152a26ee4d64ac1e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5ba1600ca1f17effca1eea997e1d33e9d320e2376ac36e7b67ae5ad967154db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ba1600ca1f17effca1eea997e1d33e9d320e2376ac36e7b67ae5ad967154db->enter($__internal_b5ba1600ca1f17effca1eea997e1d33e9d320e2376ac36e7b67ae5ad967154db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b5ba1600ca1f17effca1eea997e1d33e9d320e2376ac36e7b67ae5ad967154db->leave($__internal_b5ba1600ca1f17effca1eea997e1d33e9d320e2376ac36e7b67ae5ad967154db_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_15be14f2295fc3845c5d26ea93fa8c2b5ec474e3a5f973ead99d62d982ae116e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15be14f2295fc3845c5d26ea93fa8c2b5ec474e3a5f973ead99d62d982ae116e->enter($__internal_15be14f2295fc3845c5d26ea93fa8c2b5ec474e3a5f973ead99d62d982ae116e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_15be14f2295fc3845c5d26ea93fa8c2b5ec474e3a5f973ead99d62d982ae116e->leave($__internal_15be14f2295fc3845c5d26ea93fa8c2b5ec474e3a5f973ead99d62d982ae116e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
