<?php

/* ClubBundle:av3:edit.html.twig */
class __TwigTemplate_215c340f5059d7013babd0c0b53f638ade980192c7ff398c06bb1c6a96658be8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:av3:edit.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- ********************Navbar!!!*************** -->
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) ? $context["clubs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 5
            echo "        <header>
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <div class=\"navbar-brand\">
                            <a href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_index");
            echo "\"><img id=\"logo\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/club/img/club_opinion_sans_fond.png"), "html", null, true);
            echo "\" alt=\"Logo\" /></a>
                        </div>
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <br>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Accueil <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre11", array());
            echo "</a></li>
                                    <li><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre12", array());
            echo "</a></li>
                                    <li><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagemembre_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre13", array());
            echo "</a></li>
                                    <li><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rcvl_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre14", array());
            echo "</a></li>
                                    <li><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ara_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre15", array());
            echo "</a></li>
                                    <li><a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_sup_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre16", array());
            echo "</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> Nos évènements <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evrcvl_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre21", array());
            echo "</a></li>
                                    <li><a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evara_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre22", array());
            echo "</a></li>
                                    <li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evsup_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre23", array());
            echo "</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> Avantages du club <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("av1_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre31", array());
            echo "</a></li>
                                    <li><a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("av2_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre32", array());
            echo "</a></li>
                                    <li><a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("av3_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre33", array());
            echo "</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_edit", array("id" => 1));
            echo "\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    <!-- ********************Fin Navbar************** -->
";
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        // line 63
        echo "    <h1>mode édition</h1>

    ";
        // line 65
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors');
        echo "
    <h1>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["av3"]) ? $context["av3"] : null), "titleAv3", array()), "html", null, true);
        echo "</h1>
    <span class=\"bold\">Titre</span>
    ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "titleAv3", array()), 'errors');
        echo "
    ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "titleAv3", array()), 'widget');
        echo "
    <input type=\"submit\" value=\"Modifier\" />
    <br><br>
    <div class=\"container-fluid\">
        <div class=\"row blockGray\">
            <div class=\"row\"><!--**************** 2ème bloc *****************-->
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <p>";
        // line 77
        echo $this->getAttribute((isset($context["av3"]) ? $context["av3"] : null), "paragraphAv3", array());
        echo "</p>
                    <br>
                    <span class=\"bold\">Paragraphe</span>
                    ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "paragraphAv3", array()), 'errors');
        echo "
                    ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "paragraphAv3", array()), 'widget');
        echo "
                    <input type=\"submit\" value=\"Modifier\" />
                </div>
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["av3"]) ? $context["av3"] : null), "image", "ClubBundle\\Entity\\av3"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["av3"]) ? $context["av3"] : null), "titleAv3", array()), "html", null, true);
        echo "\" class=\"center-block\" width=\"100%\"/>
                    ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image", array()), 'errors');
        echo "
                    ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image", array()), 'widget', array("label" => false));
        echo "
                    <br><br>
                </div>
            </div>
        </div>
    </div>


 ";
        // line 95
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClubBundle:av3:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 95,  231 => 87,  227 => 86,  221 => 85,  214 => 81,  210 => 80,  204 => 77,  194 => 70,  190 => 69,  185 => 67,  181 => 66,  177 => 65,  173 => 63,  170 => 62,  165 => 58,  152 => 51,  144 => 48,  138 => 47,  132 => 46,  121 => 40,  115 => 39,  109 => 38,  98 => 32,  92 => 31,  86 => 30,  80 => 29,  74 => 28,  68 => 27,  47 => 11,  39 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:av3:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/av3/edit.html.twig");
    }
}
