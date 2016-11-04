<?php

/* ClubBundle:presentation:index.html.twig */
class __TwigTemplate_854afa7cd0f724ca54e5f44ad32d67956198085a39cc70b612d03f373e963e4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:presentation:index.html.twig", 1);
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
        $__internal_4f258f9730cba75c1a449b3361ac25c8aca7b4fe82187e532eac8d4afe8e00a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f258f9730cba75c1a449b3361ac25c8aca7b4fe82187e532eac8d4afe8e00a9->enter($__internal_4f258f9730cba75c1a449b3361ac25c8aca7b4fe82187e532eac8d4afe8e00a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:presentation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f258f9730cba75c1a449b3361ac25c8aca7b4fe82187e532eac8d4afe8e00a9->leave($__internal_4f258f9730cba75c1a449b3361ac25c8aca7b4fe82187e532eac8d4afe8e00a9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_346364de8f430e0a5f170daf9714e56e77711a9a7dd02d58f4caf0fa892f65e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346364de8f430e0a5f170daf9714e56e77711a9a7dd02d58f4caf0fa892f65e4->enter($__internal_346364de8f430e0a5f170daf9714e56e77711a9a7dd02d58f4caf0fa892f65e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:presentation:index.html.twig"));

        // line 5
        echo "
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["presentations"]) ? $context["presentations"] : $this->getContext($context, "presentations")));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 7
            echo "

                <h1>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "title", array()), "html", null, true);
            echo "</h1>
                <div class=\"container-fluid\">
                    <div class=\"row blockGray homepageBlock \">
                    <!--******************* 1er bloc ***************-->
                        ";
            // line 13
            if ($this->getAttribute($context["presentation"], "iname", array())) {
                // line 14
                echo "                            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                                    <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["presentation"], "image", "ClubBundle\\Entity\\presentation"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "title", array()), "html", null, true);
                echo "\" class=\"center-block\" height=\"100%\"/>
                            </div>
                            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                                <h2>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "soustitre1", array()), "html", null, true);
                echo "</h2>
                                <p>";
                // line 19
                echo $this->getAttribute($context["presentation"], "paragraph1", array());
                echo "</p>
                            </div>
                        ";
            } else {
                // line 22
                echo "                            <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                                <h2>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "soustitre1", array()), "html", null, true);
                echo "</h2>
                                <p>";
                // line 24
                echo $this->getAttribute($context["presentation"], "paragraph1", array());
                echo "</p>
                            </div>
                        ";
            }
            // line 27
            echo "                    </div>
                    <div class=\"row homepageBlock\"><!--**************** 2ème bloc *****************-->
                        ";
            // line 29
            if ($this->getAttribute($context["presentation"], "iname2", array())) {
                // line 30
                echo "                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <h2>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "soustitre2", array()), "html", null, true);
                echo "</h2>
                            <p>";
                // line 32
                echo $this->getAttribute($context["presentation"], "paragraph2", array());
                echo "</p>
                        </div>
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["presentation"], "image", "ClubBundle\\Entity\\presentation"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "title", array()), "html", null, true);
                echo "\" class=\"center-block\" height=\"100%\"\"/>
                        </div>
                        ";
            } else {
                // line 38
                echo "                            <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                                <h2>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "soustitre2", array()), "html", null, true);
                echo "</h2>
                                <p>";
                // line 40
                echo $this->getAttribute($context["presentation"], "paragraph2", array());
                echo "</p>
                            </div>
                        ";
            }
            // line 43
            echo "                    </div>
                </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
";
        
        $__internal_346364de8f430e0a5f170daf9714e56e77711a9a7dd02d58f4caf0fa892f65e4->leave($__internal_346364de8f430e0a5f170daf9714e56e77711a9a7dd02d58f4caf0fa892f65e4_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:presentation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  134 => 43,  128 => 40,  124 => 39,  121 => 38,  113 => 35,  107 => 32,  103 => 31,  100 => 30,  98 => 29,  94 => 27,  88 => 24,  84 => 23,  81 => 22,  75 => 19,  71 => 18,  63 => 15,  60 => 14,  58 => 13,  51 => 9,  47 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
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

        {% for presentation in presentations %}


                <h1>{{ presentation.title }}</h1>
                <div class=\"container-fluid\">
                    <div class=\"row blockGray homepageBlock \">
                    <!--******************* 1er bloc ***************-->
                        {% if presentation.iname %}
                            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                                    <img src=\"{{ vich_uploader_asset(presentation, 'image', 'ClubBundle\\\\Entity\\\\presentation') }}\" alt=\"{{ presentation.title }}\" class=\"center-block\" height=\"100%\"/>
                            </div>
                            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                                <h2>{{ presentation.soustitre1 }}</h2>
                                <p>{{ presentation.paragraph1|raw }}</p>
                            </div>
                        {% else %}
                            <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                                <h2>{{ presentation.soustitre1 }}</h2>
                                <p>{{ presentation.paragraph1|raw }}</p>
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"row homepageBlock\"><!--**************** 2ème bloc *****************-->
                        {% if presentation.iname2 %}
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <h2>{{ presentation.soustitre2 }}</h2>
                            <p>{{ presentation.paragraph2|raw }}</p>
                        </div>
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <img src=\"{{ vich_uploader_asset(presentation, 'image', 'ClubBundle\\\\Entity\\\\presentation') }}\" alt=\"{{ presentation.title }}\" class=\"center-block\" height=\"100%\"\"/>
                        </div>
                        {% else %}
                            <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                                <h2>{{ presentation.soustitre2 }}</h2>
                                <p>{{ presentation.paragraph2|raw }}</p>
                            </div>
                        {% endif %}
                    </div>
                </div>

        {% endfor %}

{% endblock %}
", "ClubBundle:presentation:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/presentation/index.html.twig");
    }
}
