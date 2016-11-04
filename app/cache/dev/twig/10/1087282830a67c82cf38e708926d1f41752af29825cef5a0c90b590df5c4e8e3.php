<?php

/* ClubBundle:club_sup:index.html.twig */
class __TwigTemplate_4fcd9cfe0cc825861c4a5aa0e5df6a51e9f4e2b0fcbdde8c28bf3d46978e4ab1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:club_sup:index.html.twig", 1);
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
        $__internal_55664931492034d265fa8cecfdd52ec6b5e31a368a108f28f19a6a962df69d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55664931492034d265fa8cecfdd52ec6b5e31a368a108f28f19a6a962df69d5e->enter($__internal_55664931492034d265fa8cecfdd52ec6b5e31a368a108f28f19a6a962df69d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:club_sup:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55664931492034d265fa8cecfdd52ec6b5e31a368a108f28f19a6a962df69d5e->leave($__internal_55664931492034d265fa8cecfdd52ec6b5e31a368a108f28f19a6a962df69d5e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5732b4a9c1eb8867f91548d56282d2c631dfa1720b0bd7c4fcfbb38ed7c21a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5732b4a9c1eb8867f91548d56282d2c631dfa1720b0bd7c4fcfbb38ed7c21a4->enter($__internal_a5732b4a9c1eb8867f91548d56282d2c631dfa1720b0bd7c4fcfbb38ed7c21a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:club_sup:index.html.twig"));

        // line 4
        echo "


    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["club_sups"]) ? $context["club_sups"] : $this->getContext($context, "club_sups")));
        foreach ($context['_seq'] as $context["_key"] => $context["club_sup"]) {
            // line 8
            echo "
    <h1>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["club_sup"], "title", array()), "html", null, true);
            echo "</h1>

        <div class=\"container-fluid\">
            <div class=\"row blockGray homepageBlock\"><!--******************* 1er bloc ***************-->
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["club_sup"], "image", "ClubBundle\\Entity\\club_sup"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["club_sup"], "title", array()), "html", null, true);
            echo "\" class=\"center-block\" width=\"100%\"/>
                </div>
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <h2>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["club_sup"], "soutitre", array()), "html", null, true);
            echo "</h2>

                    <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["club_sup"], "paragraph", array()), "html", null, true);
            echo "</p>

                </div>
            </div>
        </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club_sup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a5732b4a9c1eb8867f91548d56282d2c631dfa1720b0bd7c4fcfbb38ed7c21a4->leave($__internal_a5732b4a9c1eb8867f91548d56282d2c631dfa1720b0bd7c4fcfbb38ed7c21a4_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:club_sup:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  68 => 17,  60 => 14,  52 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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



    {% for club_sup in club_sups %}

    <h1>{{ club_sup.title }}</h1>

        <div class=\"container-fluid\">
            <div class=\"row blockGray homepageBlock\"><!--******************* 1er bloc ***************-->
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <img src=\"{{ vich_uploader_asset(club_sup, 'image', 'ClubBundle\\\\Entity\\\\club_sup') }}\" alt=\"{{ club_sup.title }}\" class=\"center-block\" width=\"100%\"/>
                </div>
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <h2>{{ club_sup.soutitre }}</h2>

                    <p>{{ club_sup.paragraph }}</p>

                </div>
            </div>
        </div>


        {% endfor %}
{% endblock %}
", "ClubBundle:club_sup:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/club_sup/index.html.twig");
    }
}
