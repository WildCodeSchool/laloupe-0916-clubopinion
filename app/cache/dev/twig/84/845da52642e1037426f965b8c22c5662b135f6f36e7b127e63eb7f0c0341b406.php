<?php

/* ClubBundle:ara:index.html.twig */
class __TwigTemplate_7050c51b32adf91621653f2b7b22a660ded307d2a93a32b989b70aeac47016be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:ara:index.html.twig", 1);
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
        $__internal_53b1979a12ecda36152ee824d4af92b7b08dab420682fd974ee7ff09d0c1875e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b1979a12ecda36152ee824d4af92b7b08dab420682fd974ee7ff09d0c1875e->enter($__internal_53b1979a12ecda36152ee824d4af92b7b08dab420682fd974ee7ff09d0c1875e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:ara:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53b1979a12ecda36152ee824d4af92b7b08dab420682fd974ee7ff09d0c1875e->leave($__internal_53b1979a12ecda36152ee824d4af92b7b08dab420682fd974ee7ff09d0c1875e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_694d2f3e9d41223dc2636a962a4e9de9cfc21d29266d7d8c08da6e9391394fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694d2f3e9d41223dc2636a962a4e9de9cfc21d29266d7d8c08da6e9391394fde->enter($__internal_694d2f3e9d41223dc2636a962a4e9de9cfc21d29266d7d8c08da6e9391394fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:ara:index.html.twig"));

        // line 5
        echo "
    <!-- ****************************************** -->
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aras"]) ? $context["aras"] : $this->getContext($context, "aras")));
        foreach ($context['_seq'] as $context["_key"] => $context["ara"]) {
            // line 8
            echo "
    <div class=\"container-fluid\">
        <h1>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["ara"], "title", array()), "html", null, true);
            echo "</h1>

        <div class=\"row blockGray homepageBlock\">
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["ara"], "image", "ClubBundle\\Entity\\Ara"), "html", null, true);
            echo "\" alt=\"\" width=\"100%\"/>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ara"], "soustitre", array()), "html", null, true);
            echo "</h2>

                <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["ara"], "paragraph", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ara'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
        
        $__internal_694d2f3e9d41223dc2636a962a4e9de9cfc21d29266d7d8c08da6e9391394fde->leave($__internal_694d2f3e9d41223dc2636a962a4e9de9cfc21d29266d7d8c08da6e9391394fde_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:ara:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  70 => 19,  65 => 17,  59 => 14,  52 => 10,  48 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
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

    <!-- ****************************************** -->
{% for ara in aras %}

    <div class=\"container-fluid\">
        <h1>{{ ara.title }}</h1>

        <div class=\"row blockGray homepageBlock\">
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"{{ vich_uploader_asset(ara, 'image', 'ClubBundle\\\\Entity\\\\Ara') }}\" alt=\"\" width=\"100%\"/>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>{{ ara.soustitre }}</h2>

                <p>{{ ara.paragraph }}</p>
            </div>
        </div>
    </div>
{% endfor %}

{% endblock %}
", "ClubBundle:ara:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/ara/index.html.twig");
    }
}
