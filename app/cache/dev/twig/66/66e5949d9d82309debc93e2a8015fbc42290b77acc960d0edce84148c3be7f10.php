<?php

/* ClubBundle:av1:index.html.twig */
class __TwigTemplate_6c6e4ee1fa78b521380bd8a8a53c1eeabe6be9ad8f1874b64a1f693cb5cea287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:av1:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2094f080c46f31a8e9cf6706f95bd8c545bff943498899ee3f80f14d258f9caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2094f080c46f31a8e9cf6706f95bd8c545bff943498899ee3f80f14d258f9caa->enter($__internal_2094f080c46f31a8e9cf6706f95bd8c545bff943498899ee3f80f14d258f9caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:av1:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2094f080c46f31a8e9cf6706f95bd8c545bff943498899ee3f80f14d258f9caa->leave($__internal_2094f080c46f31a8e9cf6706f95bd8c545bff943498899ee3f80f14d258f9caa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8d3b9a4e4220773473bf2fca943ca4b0e95cc0bb9bbc5fbf8783c2267502327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d3b9a4e4220773473bf2fca943ca4b0e95cc0bb9bbc5fbf8783c2267502327->enter($__internal_e8d3b9a4e4220773473bf2fca943ca4b0e95cc0bb9bbc5fbf8783c2267502327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:av1:index.html.twig"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["av1s"]) ? $context["av1s"] : $this->getContext($context, "av1s")));
        foreach ($context['_seq'] as $context["_key"] => $context["av1"]) {
            // line 6
            echo "    <h1><i class=\"fa fa-newspaper-o fa-1x\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["av1"], "titleAv1", array()), "html", null, true);
            echo "</h1>

    <div class=\"container-fluid\">
        <div class=\"row blockGray\"><!--******************* 1er bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["av1"], "image", "ClubBundle\\Entity\\av1"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["av1"], "titleAv1", array()), "html", null, true);
            echo "\" class=\"center-block\" height=\"500px\"/>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <p>";
            // line 14
            echo $this->getAttribute($context["av1"], "paragraphAv1", array());
            echo "</p>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['av1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e8d3b9a4e4220773473bf2fca943ca4b0e95cc0bb9bbc5fbf8783c2267502327->leave($__internal_e8d3b9a4e4220773473bf2fca943ca4b0e95cc0bb9bbc5fbf8783c2267502327_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:av1:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  56 => 11,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    {% for av1 in av1s %}
    <h1><i class=\"fa fa-newspaper-o fa-1x\" aria-hidden=\"true\"></i> {{ av1.titleAv1 }}</h1>

    <div class=\"container-fluid\">
        <div class=\"row blockGray\"><!--******************* 1er bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"{{ vich_uploader_asset(av1, 'image', 'ClubBundle\\\\Entity\\\\av1') }}\" alt=\"{{ av1.titleAv1 }}\" class=\"center-block\" height=\"500px\"/>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <p>{{ av1.paragraphAv1|raw }}</p>
            </div>
        </div>
    </div>
    {% endfor %}
{% endblock %}
", "ClubBundle:av1:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/av1/index.html.twig");
    }
}
