<?php

/* ClubBundle:av3:index.html.twig */
class __TwigTemplate_887b803d7af43e335864d60e02677d296ccc971aeb5a98e18c531a1f44127574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:av3:index.html.twig", 1);
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
        $__internal_7a01d229f8c730ff0d874794ebfa97e75af2b5726b52a7fd804215c5b2c43609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a01d229f8c730ff0d874794ebfa97e75af2b5726b52a7fd804215c5b2c43609->enter($__internal_7a01d229f8c730ff0d874794ebfa97e75af2b5726b52a7fd804215c5b2c43609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:av3:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a01d229f8c730ff0d874794ebfa97e75af2b5726b52a7fd804215c5b2c43609->leave($__internal_7a01d229f8c730ff0d874794ebfa97e75af2b5726b52a7fd804215c5b2c43609_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d051ebffe86b3379f90cb68221f06d58fd98ec4cc79e4ae666cf7010a3c13fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d051ebffe86b3379f90cb68221f06d58fd98ec4cc79e4ae666cf7010a3c13fce->enter($__internal_d051ebffe86b3379f90cb68221f06d58fd98ec4cc79e4ae666cf7010a3c13fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:av3:index.html.twig"));

        // line 4
        echo "
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["av3s"]) ? $context["av3s"] : $this->getContext($context, "av3s")));
        foreach ($context['_seq'] as $context["_key"] => $context["av3"]) {
            // line 6
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["av3"], "titleAv3", array()), "html", null, true);
            echo "</h1>

            <div class=\"container-fluid\">
                <div class=\"row blockGray\">
                    <div class=\"row\"><!--**************** 2ème bloc *****************-->
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <p>";
            // line 12
            echo $this->getAttribute($context["av3"], "paragraphAv3", array());
            echo "</p>

                        </div>
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["av3"], "image", "ClubBundle\\Entity\\av3"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["av3"], "titleAv3", array()), "html", null, true);
            echo "\" class=\"center-block\" width=\"100%\"/>
                        </div>
                    </div>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['av3'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
";
        
        $__internal_d051ebffe86b3379f90cb68221f06d58fd98ec4cc79e4ae666cf7010a3c13fce->leave($__internal_d051ebffe86b3379f90cb68221f06d58fd98ec4cc79e4ae666cf7010a3c13fce_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:av3:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  64 => 16,  57 => 12,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

        {% for av3 in av3s %}
            <h1>{{ av3.titleAv3 }}</h1>

            <div class=\"container-fluid\">
                <div class=\"row blockGray\">
                    <div class=\"row\"><!--**************** 2ème bloc *****************-->
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <p>{{ av3.paragraphAv3|raw  }}</p>

                        </div>
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <img src=\"{{ vich_uploader_asset(av3, 'image', 'ClubBundle\\\\Entity\\\\av3') }}\" alt=\"{{ av3.titleAv3 }}\" class=\"center-block\" width=\"100%\"/>
                        </div>
                    </div>
                </div>
            </div>

        {% endfor %}

{% endblock %}", "ClubBundle:av3:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/av3/index.html.twig");
    }
}
