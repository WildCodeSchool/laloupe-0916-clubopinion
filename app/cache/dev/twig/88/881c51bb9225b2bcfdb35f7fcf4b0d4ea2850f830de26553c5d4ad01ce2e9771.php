<?php

/* ClubBundle:pagemembre:index.html.twig */
class __TwigTemplate_c1cb19d867f7cfe10cd5e1a445ff2dd14f3bf1325174fef2a4e1369ac33aa5c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:pagemembre:index.html.twig", 1);
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
        $__internal_16f598092122acf913b58ee14e1705e9da24beb4604adbdd606f1c697cd903a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f598092122acf913b58ee14e1705e9da24beb4604adbdd606f1c697cd903a9->enter($__internal_16f598092122acf913b58ee14e1705e9da24beb4604adbdd606f1c697cd903a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:pagemembre:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16f598092122acf913b58ee14e1705e9da24beb4604adbdd606f1c697cd903a9->leave($__internal_16f598092122acf913b58ee14e1705e9da24beb4604adbdd606f1c697cd903a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b26365a265d3d4f230954cb90b84f33820942b580adf1f3049149cb0bc43166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b26365a265d3d4f230954cb90b84f33820942b580adf1f3049149cb0bc43166->enter($__internal_4b26365a265d3d4f230954cb90b84f33820942b580adf1f3049149cb0bc43166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:pagemembre:index.html.twig"));

        // line 4
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pageMembres"]) ? $context["pageMembres"] : $this->getContext($context, "pageMembres")));
        foreach ($context['_seq'] as $context["_key"] => $context["pageMembre"]) {
            // line 5
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pageMembre"], "title", array()), "html", null, true);
            echo "</h1><br>
            <div class=\"row center-block row-diners\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres"))));
            foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                // line 8
                echo "
                <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        ";
                // line 11
                if ($this->getAttribute($context["membre"], "iname", array())) {
                    // line 12
                    echo "                            <div class=\"image\" style=\"background-image: url(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["membre"], "image", "ClubBundle\\Entity\\Membres"), "html", null, true);
                    echo ")\"></div>
                        ";
                } else {
                    // line 14
                    echo "                        ";
                }
                // line 15
                echo "                        <div class=\"caption\">
                            <h4>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "name", array()), "html", null, true);
                echo "</h4>
                            <div class=\"contrainte-membre\">
                                <p>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "description", array()), "html", null, true);
                echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMembre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "

";
        
        $__internal_4b26365a265d3d4f230954cb90b84f33820942b580adf1f3049149cb0bc43166->leave($__internal_4b26365a265d3d4f230954cb90b84f33820942b580adf1f3049149cb0bc43166_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:pagemembre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  91 => 24,  79 => 18,  74 => 16,  71 => 15,  68 => 14,  62 => 12,  60 => 11,  55 => 8,  51 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
        {% for pageMembre in pageMembres %}
            <h1>{{ pageMembre.title }}</h1><br>
            <div class=\"row center-block row-diners\">
            {% for membre in membres|reverse %}

                <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        {% if membre.iname %}
                            <div class=\"image\" style=\"background-image: url({{ vich_uploader_asset(membre, 'image', 'ClubBundle\\\\Entity\\\\Membres') }})\"></div>
                        {% else %}
                        {% endif %}
                        <div class=\"caption\">
                            <h4>{{ membre.name }}</h4>
                            <div class=\"contrainte-membre\">
                                <p>{{ membre.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
            </div>
        {% endfor %}


{% endblock %}
", "ClubBundle:pagemembre:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/pagemembre/index.html.twig");
    }
}
