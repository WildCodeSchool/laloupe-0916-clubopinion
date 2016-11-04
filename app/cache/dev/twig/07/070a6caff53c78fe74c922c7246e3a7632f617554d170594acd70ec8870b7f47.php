<?php

/* ClubBundle:contact:index.html.twig */
class __TwigTemplate_01aaa949a1de98483e331a1519a32cab6ce393601f5ace89aa03ee825d7c24f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:contact:index.html.twig", 1);
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
        $__internal_5f5eeecc2f02fd189ecd82f0807e21f244b48343b6f2e17ed42b2c0779ebd3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5eeecc2f02fd189ecd82f0807e21f244b48343b6f2e17ed42b2c0779ebd3cf->enter($__internal_5f5eeecc2f02fd189ecd82f0807e21f244b48343b6f2e17ed42b2c0779ebd3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f5eeecc2f02fd189ecd82f0807e21f244b48343b6f2e17ed42b2c0779ebd3cf->leave($__internal_5f5eeecc2f02fd189ecd82f0807e21f244b48343b6f2e17ed42b2c0779ebd3cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_235d89e426beba2955e1af5a370c42e35982e937cb4b6644068fb59c33eee4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235d89e426beba2955e1af5a370c42e35982e937cb4b6644068fb59c33eee4ad->enter($__internal_235d89e426beba2955e1af5a370c42e35982e937cb4b6644068fb59c33eee4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:contact:index.html.twig"));

        // line 4
        echo "
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 6
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "title", array()), "html", null, true);
            echo "</h1>

            <div class=\"container-fluid\" id=\"contact\">
                <div class=\"row blockGray\">
                    ";
            // line 10
            if ($this->getAttribute($context["contact"], "iname", array())) {
                // line 11
                echo "                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["contact"], "image", "ClubBundle\\Entity\\contact"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "title", array()), "html", null, true);
                echo "\" class=\"center-block\" height=\"100%\"/>
                        </div>
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <h2>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "soustitre", array()), "html", null, true);
                echo "</h2>
                            <hr/>
                            <p>";
                // line 17
                echo $this->getAttribute($context["contact"], "paragraph", array());
                echo "</p>
                        </div>
                    ";
            } else {
                // line 20
                echo "                        <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                            <h2>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "soustitre", array()), "html", null, true);
                echo "</h2>
                            <hr/>
                            <p>";
                // line 23
                echo $this->getAttribute($context["contact"], "paragraph", array());
                echo "</p>
                        </div>
                    ";
            }
            // line 26
            echo "                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        
        $__internal_235d89e426beba2955e1af5a370c42e35982e937cb4b6644068fb59c33eee4ad->leave($__internal_235d89e426beba2955e1af5a370c42e35982e937cb4b6644068fb59c33eee4ad_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  93 => 26,  87 => 23,  82 => 21,  79 => 20,  73 => 17,  68 => 15,  60 => 12,  57 => 11,  55 => 10,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

        {% for contact in contacts %}
            <h1>{{ contact.title }}</h1>

            <div class=\"container-fluid\" id=\"contact\">
                <div class=\"row blockGray\">
                    {% if contact.iname %}
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <img src=\"{{ vich_uploader_asset(contact, 'image', 'ClubBundle\\\\Entity\\\\contact') }}\" alt=\"{{ contact.title }}\" class=\"center-block\" height=\"100%\"/>
                        </div>
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <h2>{{ contact.soustitre }}</h2>
                            <hr/>
                            <p>{{ contact.paragraph|raw }}</p>
                        </div>
                    {% else %}
                        <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                            <h2>{{ contact.soustitre }}</h2>
                            <hr/>
                            <p>{{ contact.paragraph|raw }}</p>
                        </div>
                    {% endif %}
                </div>
            </div>

        {% endfor %}

{% endblock %}
", "ClubBundle:contact:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/contact/index.html.twig");
    }
}
