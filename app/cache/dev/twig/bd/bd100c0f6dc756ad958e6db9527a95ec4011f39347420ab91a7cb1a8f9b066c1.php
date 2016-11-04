<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e512bd06f4cd88b018be486717f1f4087416e9e453fbddb17b1cd7582007bbd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_6591c4c8ce9b8b6c2eec0f3bfe97e0762ae23a060f1baf9826fd0e13025fcb18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6591c4c8ce9b8b6c2eec0f3bfe97e0762ae23a060f1baf9826fd0e13025fcb18->enter($__internal_6591c4c8ce9b8b6c2eec0f3bfe97e0762ae23a060f1baf9826fd0e13025fcb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6591c4c8ce9b8b6c2eec0f3bfe97e0762ae23a060f1baf9826fd0e13025fcb18->leave($__internal_6591c4c8ce9b8b6c2eec0f3bfe97e0762ae23a060f1baf9826fd0e13025fcb18_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7098b2ecd0fdff6fecb59525d68096de42f6ea4b58342b27436e992ba22cccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7098b2ecd0fdff6fecb59525d68096de42f6ea4b58342b27436e992ba22cccf->enter($__internal_a7098b2ecd0fdff6fecb59525d68096de42f6ea4b58342b27436e992ba22cccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_a7098b2ecd0fdff6fecb59525d68096de42f6ea4b58342b27436e992ba22cccf->leave($__internal_a7098b2ecd0fdff6fecb59525d68096de42f6ea4b58342b27436e992ba22cccf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4e44caff1299337f21cd2df083db9a1d0d2b2c4dee25c4f0870d56502e99dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e44caff1299337f21cd2df083db9a1d0d2b2c4dee25c4f0870d56502e99dae->enter($__internal_b4e44caff1299337f21cd2df083db9a1d0d2b2c4dee25c4f0870d56502e99dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4e44caff1299337f21cd2df083db9a1d0d2b2c4dee25c4f0870d56502e99dae->leave($__internal_b4e44caff1299337f21cd2df083db9a1d0d2b2c4dee25c4f0870d56502e99dae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb82d7977f27e1057fa3bfeb430e3e8b7ee27c8078baecb4caab65fc0eaabb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb82d7977f27e1057fa3bfeb430e3e8b7ee27c8078baecb4caab65fc0eaabb7d->enter($__internal_bb82d7977f27e1057fa3bfeb430e3e8b7ee27c8078baecb4caab65fc0eaabb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bb82d7977f27e1057fa3bfeb430e3e8b7ee27c8078baecb4caab65fc0eaabb7d->leave($__internal_bb82d7977f27e1057fa3bfeb430e3e8b7ee27c8078baecb4caab65fc0eaabb7d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
