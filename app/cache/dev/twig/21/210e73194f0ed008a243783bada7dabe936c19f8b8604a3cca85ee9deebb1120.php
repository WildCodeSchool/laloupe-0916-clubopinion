<?php

/* ClubBundle:club:index.html.twig */
class __TwigTemplate_57157ff225f5e30bcfa54c90988a4201958fef984c5afe9b521b5031c192beb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:club:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3b558d3b4055e072650abf4d8037754fab0fb660ebddf70693617c934969b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b558d3b4055e072650abf4d8037754fab0fb660ebddf70693617c934969b4b->enter($__internal_e3b558d3b4055e072650abf4d8037754fab0fb660ebddf70693617c934969b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:club:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3b558d3b4055e072650abf4d8037754fab0fb660ebddf70693617c934969b4b->leave($__internal_e3b558d3b4055e072650abf4d8037754fab0fb660ebddf70693617c934969b4b_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_1d4eea9be409e2dca1eea67dd2a393dee7dad808cfe4f8c2808e73c8282813f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4eea9be409e2dca1eea67dd2a393dee7dad808cfe4f8c2808e73c8282813f0->enter($__internal_1d4eea9be409e2dca1eea67dd2a393dee7dad808cfe4f8c2808e73c8282813f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:club:index.html.twig"));

        // line 5
        echo "<main class=\"container-fluid\" id=\"container-club\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
";
        
        $__internal_1d4eea9be409e2dca1eea67dd2a393dee7dad808cfe4f8c2808e73c8282813f0->leave($__internal_1d4eea9be409e2dca1eea67dd2a393dee7dad808cfe4f8c2808e73c8282813f0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_22b969a0d6aa5a2081e364a061113017b0d92945c3f448f3cf7ce5c5292d9f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b969a0d6aa5a2081e364a061113017b0d92945c3f448f3cf7ce5c5292d9f32->enter($__internal_22b969a0d6aa5a2081e364a061113017b0d92945c3f448f3cf7ce5c5292d9f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:club:index.html.twig"));

        // line 11
        echo "
    <!-- *********************************************** -->
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) ? $context["clubs"] : $this->getContext($context, "clubs")));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 14
            echo "
    <video autoplay loop poster=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/club/img/poster.png"), "html", null, true);
            echo "\" width=\"100%\" height=\"auto\" class=\"hidden-xs\">
        <source src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["club"], "video", "ClubBundle\\Entity\\Club"), "html", null, true);
            echo "\" />
    </video>
    <div class=\"container-fluid\">
        <div class=\"row blockGray\" id=\"blockhp\"><!--******************* 1er bloc ***************-->
            ";
            // line 20
            if ($this->getAttribute($context["club"], "iname", array())) {
                // line 21
                echo "                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["club"], "image", "ClubBundle\\Entity\\Club"), "html", null, true);
                echo "\" alt=\"logo\" width=\"100%\"/>
                </div>
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <h2>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "blocktitle1", array()), "html", null, true);
                echo "</h2>
                    <p> ";
                // line 26
                echo $this->getAttribute($context["club"], "blockparagraph1", array());
                echo "</p>
                    <p><br><br><a href=\"";
                // line 27
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation_index");
                echo "\">Découvrir le Club de l'Opinion</a></p>
                </div>
            ";
            } else {
                // line 30
                echo "                <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                    <h2>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "blocktitle1", array()), "html", null, true);
                echo "</h2>
                    <p> ";
                // line 32
                echo $this->getAttribute($context["club"], "blockparagraph1", array());
                echo "</p>
                    <p><br><br><a href=\"";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation_index");
                echo "\">Découvrir le Club de l'Opinion</a></p>
                </div>
            ";
            }
            // line 36
            echo "        </div>
        <div class=\"row\"><!--**************** 2ème bloc *****************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "blocktitle2", array()), "html", null, true);
            echo " </h2>
                <p>";
            // line 40
            echo $this->getAttribute($context["club"], "blockparagraph2", array());
            echo "</p>
                <p><br><br><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rcvl_index");
            echo "\">Découvrir notre Club Centre-Val de Loire</a></p>

            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["club"], "image2", "ClubBundle\\Entity\\Club"), "html", null, true);
            echo "\" alt=\"\" width=\"100%\"/>
            </div>
        </div>
        <div class=\"row blockGray\"><!--************* 3ème bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["club"], "image3", "ClubBundle\\Entity\\Club"), "html", null, true);
            echo "\" alt=\"\" width=\"100%\"/>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "blocktitle3", array()), "html", null, true);
            echo "</h2 >
                <p>";
            // line 54
            echo $this->getAttribute($context["club"], "blockparagraph3", array());
            echo "</p>
                <br><br><a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ara_index");
            echo "\">Découvrir notre Club Auvergne-Rhône-Alpes</a>
            </div>
        </div>
        ";
            // line 58
            if ($this->getAttribute($context["club"], "blocktitle4", array())) {
                // line 59
                echo "            <div class=\"row\"><!--************* 4ème bloc ***************-->
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <h2>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "blocktitle4", array()), "html", null, true);
                echo "</h2 >
                    <p>";
                // line 62
                echo $this->getAttribute($context["club"], "blockparagraph4", array());
                echo "</p>
                </div>
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <img src=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["club"], "image4", "ClubBundle\\Entity\\Club"), "html", null, true);
                echo "\" alt=\"\" width=\"100%\"/>
                    <br><br><a href=\"";
                // line 66
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_sup_index");
                echo "\">Découvrir notre nouveau Club</a>
                </div>
            </div>
        ";
            } else {
                // line 70
                echo "        ";
            }
            // line 71
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_22b969a0d6aa5a2081e364a061113017b0d92945c3f448f3cf7ce5c5292d9f32->leave($__internal_22b969a0d6aa5a2081e364a061113017b0d92945c3f448f3cf7ce5c5292d9f32_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:club:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 71,  196 => 70,  189 => 66,  185 => 65,  179 => 62,  175 => 61,  171 => 59,  169 => 58,  163 => 55,  159 => 54,  155 => 53,  149 => 50,  141 => 45,  134 => 41,  130 => 40,  126 => 39,  121 => 36,  115 => 33,  111 => 32,  107 => 31,  104 => 30,  98 => 27,  94 => 26,  90 => 25,  84 => 22,  81 => 21,  79 => 20,  72 => 16,  68 => 15,  65 => 14,  61 => 13,  57 => 11,  51 => 10,  41 => 5,  35 => 4,  11 => 1,);
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


{% block main %}
<main class=\"container-fluid\" id=\"container-club\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
{% endblock %}

{% block body %}

    <!-- *********************************************** -->
    {% for club in clubs %}

    <video autoplay loop poster=\"{{ asset('bundles/club/img/poster.png') }}\" width=\"100%\" height=\"auto\" class=\"hidden-xs\">
        <source src=\"{{ vich_uploader_asset(club, 'video', 'ClubBundle\\\\Entity\\\\Club') }}\" />
    </video>
    <div class=\"container-fluid\">
        <div class=\"row blockGray\" id=\"blockhp\"><!--******************* 1er bloc ***************-->
            {% if club.iname %}
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <img src=\"{{ vich_uploader_asset(club, 'image', 'ClubBundle\\\\Entity\\\\Club') }}\" alt=\"logo\" width=\"100%\"/>
                </div>
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <h2>{{ club.blocktitle1 }}</h2>
                    <p> {{ club.blockparagraph1|raw }}</p>
                    <p><br><br><a href=\"{{ path('presentation_index') }}\">Découvrir le Club de l'Opinion</a></p>
                </div>
            {% else %}
                <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                    <h2>{{ club.blocktitle1 }}</h2>
                    <p> {{ club.blockparagraph1|raw }}</p>
                    <p><br><br><a href=\"{{ path('presentation_index') }}\">Découvrir le Club de l'Opinion</a></p>
                </div>
            {% endif %}
        </div>
        <div class=\"row\"><!--**************** 2ème bloc *****************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2> {{ club.blocktitle2 }} </h2>
                <p>{{ club.blockparagraph2|raw }}</p>
                <p><br><br><a href=\"{{ path('rcvl_index') }}\">Découvrir notre Club Centre-Val de Loire</a></p>

            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"{{ vich_uploader_asset(club, 'image2', 'ClubBundle\\\\Entity\\\\Club') }}\" alt=\"\" width=\"100%\"/>
            </div>
        </div>
        <div class=\"row blockGray\"><!--************* 3ème bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"{{ vich_uploader_asset(club, 'image3', 'ClubBundle\\\\Entity\\\\Club') }}\" alt=\"\" width=\"100%\"/>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>{{ club.blocktitle3 }}</h2 >
                <p>{{ club.blockparagraph3|raw }}</p>
                <br><br><a href=\"{{ path('ara_index') }}\">Découvrir notre Club Auvergne-Rhône-Alpes</a>
            </div>
        </div>
        {% if club.blocktitle4 %}
            <div class=\"row\"><!--************* 4ème bloc ***************-->
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <h2>{{ club.blocktitle4 }}</h2 >
                    <p>{{ club.blockparagraph4|raw }}</p>
                </div>
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <img src=\"{{ vich_uploader_asset(club, 'image4', 'ClubBundle\\\\Entity\\\\Club') }}\" alt=\"\" width=\"100%\"/>
                    <br><br><a href=\"{{ path('club_sup_index') }}\">Découvrir notre nouveau Club</a>
                </div>
            </div>
        {% else %}
        {% endif %}
    </div>
    {% endfor %}
{% endblock %}
", "ClubBundle:club:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/club/index.html.twig");
    }
}
