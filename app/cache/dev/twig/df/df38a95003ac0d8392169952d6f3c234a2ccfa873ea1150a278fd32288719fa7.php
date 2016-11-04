<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_40323d99d57fc91be6170fae9deb92bb683a454fba4edc07e161ac80b8937a39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_061c6bef16f6fdd520164d6f0661d149b21f716ab86ad0055ac0b85c1f19eae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061c6bef16f6fdd520164d6f0661d149b21f716ab86ad0055ac0b85c1f19eae3->enter($__internal_061c6bef16f6fdd520164d6f0661d149b21f716ab86ad0055ac0b85c1f19eae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_061c6bef16f6fdd520164d6f0661d149b21f716ab86ad0055ac0b85c1f19eae3->leave($__internal_061c6bef16f6fdd520164d6f0661d149b21f716ab86ad0055ac0b85c1f19eae3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_156edd0988afa4e3dc513e548b2910d30e6af83d6f8294da7a44cc66e0a21ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156edd0988afa4e3dc513e548b2910d30e6af83d6f8294da7a44cc66e0a21ad8->enter($__internal_156edd0988afa4e3dc513e548b2910d30e6af83d6f8294da7a44cc66e0a21ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_156edd0988afa4e3dc513e548b2910d30e6af83d6f8294da7a44cc66e0a21ad8->leave($__internal_156edd0988afa4e3dc513e548b2910d30e6af83d6f8294da7a44cc66e0a21ad8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f1c3de9b8aa0f42c8fa33093693718b1e7af2b4326d806ea32eccc23a706c929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c3de9b8aa0f42c8fa33093693718b1e7af2b4326d806ea32eccc23a706c929->enter($__internal_f1c3de9b8aa0f42c8fa33093693718b1e7af2b4326d806ea32eccc23a706c929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f1c3de9b8aa0f42c8fa33093693718b1e7af2b4326d806ea32eccc23a706c929->leave($__internal_f1c3de9b8aa0f42c8fa33093693718b1e7af2b4326d806ea32eccc23a706c929_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3effdeae5bb0a8a8fe4c71f3246d3535b9d11db74537af1c1f208a55fc05049b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3effdeae5bb0a8a8fe4c71f3246d3535b9d11db74537af1c1f208a55fc05049b->enter($__internal_3effdeae5bb0a8a8fe4c71f3246d3535b9d11db74537af1c1f208a55fc05049b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3effdeae5bb0a8a8fe4c71f3246d3535b9d11db74537af1c1f208a55fc05049b->leave($__internal_3effdeae5bb0a8a8fe4c71f3246d3535b9d11db74537af1c1f208a55fc05049b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
