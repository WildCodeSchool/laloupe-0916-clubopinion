<?php

/* ClubBundle:av2:index.html.twig */
class __TwigTemplate_47aaaecda1468360736f2fa8018c3f6c2225c50895864f293edfc7c0ec3fe808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:av2:index.html.twig", 1);
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
        $__internal_f0b144da7116cbb528a70c381afe44648fa256de6fef3b097a6244d8759781b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b144da7116cbb528a70c381afe44648fa256de6fef3b097a6244d8759781b7->enter($__internal_f0b144da7116cbb528a70c381afe44648fa256de6fef3b097a6244d8759781b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:av2:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0b144da7116cbb528a70c381afe44648fa256de6fef3b097a6244d8759781b7->leave($__internal_f0b144da7116cbb528a70c381afe44648fa256de6fef3b097a6244d8759781b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e985f4a58e9b802caf41449a8d69298d02dd1e714bfa18f3e3d3d38dfcd174c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e985f4a58e9b802caf41449a8d69298d02dd1e714bfa18f3e3d3d38dfcd174c->enter($__internal_3e985f4a58e9b802caf41449a8d69298d02dd1e714bfa18f3e3d3d38dfcd174c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:av2:index.html.twig"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["av2s"]) ? $context["av2s"] : $this->getContext($context, "av2s")));
        foreach ($context['_seq'] as $context["_key"] => $context["av2"]) {
            // line 6
            echo "        <h1><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/club/img/signs.png"), "html", null, true);
            echo "\" width=\"30px\" id=\"fireworks\" /> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["av2"], "titleAv2", array()), "html", null, true);
            echo "</h1>

    <div class=\"container-fluid\">
        <div class=\"row blockGray\">
            ";
            // line 10
            if ($this->getAttribute($context["av2"], "iname", array())) {
                // line 11
                echo "                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["av2"], "image", "ClubBundle\\Entity\\av2"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["av2"], "titleAv2", array()), "html", null, true);
                echo "\" class=\"center-block\" height=\"100%\"/>
                </div>
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <p>";
                // line 15
                echo $this->getAttribute($context["av2"], "paragraphAv2", array());
                echo "</p>
                </div>
            ";
            } else {
                // line 18
                echo "                <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                    <p>";
                // line 19
                echo $this->getAttribute($context["av2"], "paragraphAv2", array());
                echo "</p>
                </div>
            ";
            }
            // line 22
            echo "        </div>
    </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['av2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3e985f4a58e9b802caf41449a8d69298d02dd1e714bfa18f3e3d3d38dfcd174c->leave($__internal_3e985f4a58e9b802caf41449a8d69298d02dd1e714bfa18f3e3d3d38dfcd174c_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:av2:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  79 => 19,  76 => 18,  70 => 15,  62 => 12,  59 => 11,  57 => 10,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

    {% for av2 in av2s %}
        <h1><img src=\"{{ asset('bundles/club/img/signs.png') }}\" width=\"30px\" id=\"fireworks\" /> {{ av2.titleAv2 }}</h1>

    <div class=\"container-fluid\">
        <div class=\"row blockGray\">
            {% if av2.iname %}
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <img src=\"{{ vich_uploader_asset(av2, 'image', 'ClubBundle\\\\Entity\\\\av2') }}\" alt=\"{{ av2.titleAv2 }}\" class=\"center-block\" height=\"100%\"/>
                </div>
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <p>{{ av2.paragraphAv2|raw  }}</p>
                </div>
            {% else %}
                <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                    <p>{{ av2.paragraphAv2|raw  }}</p>
                </div>
            {% endif %}
        </div>
    </div>

    {% endfor %}
{% endblock %}
", "ClubBundle:av2:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/av2/index.html.twig");
    }
}
