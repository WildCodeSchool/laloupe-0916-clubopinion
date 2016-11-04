<?php

/* ClubBundle:rcvl:index.html.twig */
class __TwigTemplate_a0c426d7f2e485a50f9834e8d2e2811554c21a3b072c639e170ca4c92db6f920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:rcvl:index.html.twig", 1);
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
        $__internal_71e6110c9a0356c3bf2d3053bc94bc12d2f9035892a7b9cc187281e2be73afe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e6110c9a0356c3bf2d3053bc94bc12d2f9035892a7b9cc187281e2be73afe6->enter($__internal_71e6110c9a0356c3bf2d3053bc94bc12d2f9035892a7b9cc187281e2be73afe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:rcvl:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e6110c9a0356c3bf2d3053bc94bc12d2f9035892a7b9cc187281e2be73afe6->leave($__internal_71e6110c9a0356c3bf2d3053bc94bc12d2f9035892a7b9cc187281e2be73afe6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee88c1145354acced313733706dab20d4922430bb4c0831354120c45897dce52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee88c1145354acced313733706dab20d4922430bb4c0831354120c45897dce52->enter($__internal_ee88c1145354acced313733706dab20d4922430bb4c0831354120c45897dce52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:rcvl:index.html.twig"));

        // line 4
        echo "

        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rcvls"]) ? $context["rcvls"] : $this->getContext($context, "rcvls")));
        foreach ($context['_seq'] as $context["_key"] => $context["rcvl"]) {
            // line 7
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rcvl"], "title", array()), "html", null, true);
            echo "</h1>

            <div class=\"container-fluid\">
                <div class=\"row blockGray homepageBlock\"><!--******************* 1er bloc ***************-->
                    <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                        <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["rcvl"], "image", "ClubBundle\\Entity\\rcvl"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rcvl"], "title", array()), "html", null, true);
            echo "\" class=\"center-block\" width=\"100%\"/>
                    </div>


                    <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                        <h2>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["rcvl"], "soustitre", array()), "html", null, true);
            echo "</h2>

                        <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["rcvl"], "paragraph", array()), "html", null, true);
            echo "</p>

                    </div>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rcvl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ee88c1145354acced313733706dab20d4922430bb4c0831354120c45897dce52->leave($__internal_ee88c1145354acced313733706dab20d4922430bb4c0831354120c45897dce52_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:rcvl:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  67 => 17,  57 => 12,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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


        {% for rcvl in rcvls %}
            <h1>{{ rcvl.title }}</h1>

            <div class=\"container-fluid\">
                <div class=\"row blockGray homepageBlock\"><!--******************* 1er bloc ***************-->
                    <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                        <img src=\"{{ vich_uploader_asset(rcvl, 'image', 'ClubBundle\\\\Entity\\\\rcvl') }}\" alt=\"{{ rcvl.title }}\" class=\"center-block\" width=\"100%\"/>
                    </div>


                    <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                        <h2>{{ rcvl.soustitre }}</h2>

                        <p>{{ rcvl.paragraph }}</p>

                    </div>
                </div>
            </div>

        {% endfor %}
{% endblock %}
", "ClubBundle:rcvl:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/rcvl/index.html.twig");
    }
}
