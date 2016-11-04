<?php

/* ClubBundle:supevenements:edit.html.twig */
class __TwigTemplate_dbd43fa5a519ac78406f648bfb4587c328f266aea8a3ac6ace6869c03b1fab91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:supevenements:edit.html.twig", 1);
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

    // line 61
    public function block_body($context, array $blocks = array())
    {
        // line 62
        echo "    <h1>Modifier un évènement</h1>

    ";
        // line 64
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
    <span class=\"bold\">Titre</span><br>
    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "title", array()), 'errors');
        echo "
    ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "title", array()), 'widget');
        echo "
    <br><br>
    <span class=\"bold\">Description</span><br>
    ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "paragraph", array()), 'errors');
        echo "
    ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "paragraph", array()), 'widget');
        echo "
    <br><br>
    <div class=\"col-xs-12\">
        <div class=\"col-xxs-12 col-xs-4\">
            <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image", array()), 'errors');
        echo "
            ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image2", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image2", array()), 'errors');
        echo "
            ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image2", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image3", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image3", array()), 'errors');
        echo "
            ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image3", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image4", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image4", array()), 'errors');
        echo "
            ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image4", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image5", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image5", array()), 'errors');
        echo "
            ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image5", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image6", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image6", array()), 'errors');
        echo "
            ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image6", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image7", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image7", array()), 'errors');
        echo "
            ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image7", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image8", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image8", array()), 'errors');
        echo "
            ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image8", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image9", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image9", array()), 'errors');
        echo "
            ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image9", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image10", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image10", array()), 'errors');
        echo "
            ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image10", array()), 'widget');
        echo "
            <br><br>
        </div>
        <div class=\"col-xxs-12 col-xs-4\">
            <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image11", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image11", array()), 'errors');
        echo "
            ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image11", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image12", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image12", array()), 'errors');
        echo "
            ";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image12", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image13", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image13", array()), 'errors');
        echo "
            ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image13", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image14", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image14", array()), 'errors');
        echo "
            ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image14", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image15", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image15", array()), 'errors');
        echo "
            ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image15", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image16", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image16", array()), 'errors');
        echo "
            ";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image16", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image17", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image17", array()), 'errors');
        echo "
            ";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image17", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image18", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image18", array()), 'errors');
        echo "
            ";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image18", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image19", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image19", array()), 'errors');
        echo "
            ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image19", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image20", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image20", array()), 'errors');
        echo "
            ";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image20", array()), 'widget');
        echo "
            <br><br>
        </div>
        <div class=\"col-xxs-12 col-xs-4\">
            <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image21", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image21", array()), 'errors');
        echo "
            ";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image21", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image22", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image22", array()), 'errors');
        echo "
            ";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image22", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image23", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image23", array()), 'errors');
        echo "
            ";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image23", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image24", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image24", array()), 'errors');
        echo "
            ";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image24", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image25", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image25", array()), 'errors');
        echo "
            ";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image25", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image26", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image26", array()), 'errors');
        echo "
            ";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image26", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image27", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image27", array()), 'errors');
        echo "
            ";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image27", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image28", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image28", array()), 'errors');
        echo "
            ";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image28", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image29", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image29", array()), 'errors');
        echo "
            ";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image29", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["supEvenement"]) ? $context["supEvenement"] : null), "image30", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image30", array()), 'errors');
        echo "
            ";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image30", array()), 'widget');
        echo "
            <br><br>
        </div>
    </div>
    <br><br>
    <input type=\"submit\" value=\"Modifier\" />
    ";
        // line 203
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
    <br>
    ";
        // line 205
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
    <input type=\"submit\" value=\"Supprimer\">
    ";
        // line 207
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
    <br>
    <a href=\"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evsup_edit", array("id" => 1));
        echo "\" class=\"lienRouge\">Retour à la page précédente</a>
    <br>
";
    }

    public function getTemplateName()
    {
        return "ClubBundle:supevenements:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  616 => 209,  611 => 207,  606 => 205,  601 => 203,  592 => 197,  588 => 196,  584 => 195,  579 => 193,  575 => 192,  571 => 191,  566 => 189,  562 => 188,  558 => 187,  553 => 185,  549 => 184,  545 => 183,  540 => 181,  536 => 180,  532 => 179,  527 => 177,  523 => 176,  519 => 175,  514 => 173,  510 => 172,  506 => 171,  501 => 169,  497 => 168,  493 => 167,  488 => 165,  484 => 164,  480 => 163,  475 => 161,  471 => 160,  467 => 159,  460 => 155,  456 => 154,  452 => 153,  447 => 151,  443 => 150,  439 => 149,  434 => 147,  430 => 146,  426 => 145,  421 => 143,  417 => 142,  413 => 141,  408 => 139,  404 => 138,  400 => 137,  395 => 135,  391 => 134,  387 => 133,  382 => 131,  378 => 130,  374 => 129,  369 => 127,  365 => 126,  361 => 125,  356 => 123,  352 => 122,  348 => 121,  343 => 119,  339 => 118,  335 => 117,  328 => 113,  324 => 112,  320 => 111,  315 => 109,  311 => 108,  307 => 107,  302 => 105,  298 => 104,  294 => 103,  289 => 101,  285 => 100,  281 => 99,  276 => 97,  272 => 96,  268 => 95,  263 => 93,  259 => 92,  255 => 91,  250 => 89,  246 => 88,  242 => 87,  237 => 85,  233 => 84,  229 => 83,  224 => 81,  220 => 80,  216 => 79,  211 => 77,  207 => 76,  203 => 75,  196 => 71,  192 => 70,  186 => 67,  182 => 66,  177 => 64,  173 => 62,  170 => 61,  165 => 58,  152 => 51,  144 => 48,  138 => 47,  132 => 46,  121 => 40,  115 => 39,  109 => 38,  98 => 32,  92 => 31,  86 => 30,  80 => 29,  74 => 28,  68 => 27,  47 => 11,  39 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:supevenements:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/supevenements/edit.html.twig");
    }
}
