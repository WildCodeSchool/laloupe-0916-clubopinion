<?php

/* ClubBundle:club:index.html.twig */
class __TwigTemplate_d9ff7f419a8e229564175a661ffb0320a23a412e1359b5cf2c2fc4b629f23755 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        // line 5
        echo "<main class=\"container-fluid\" id=\"container-club\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
    <!-- *********************************************** -->
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) ? $context["clubs"] : null));
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
        return array (  184 => 71,  181 => 70,  174 => 66,  170 => 65,  164 => 62,  160 => 61,  156 => 59,  154 => 58,  148 => 55,  144 => 54,  140 => 53,  134 => 50,  126 => 45,  119 => 41,  115 => 40,  111 => 39,  106 => 36,  100 => 33,  96 => 32,  92 => 31,  89 => 30,  83 => 27,  79 => 26,  75 => 25,  69 => 22,  66 => 21,  64 => 20,  57 => 16,  53 => 15,  50 => 14,  46 => 13,  42 => 11,  39 => 10,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:club:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/club/index.html.twig");
    }
}
