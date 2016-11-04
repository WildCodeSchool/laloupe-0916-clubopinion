<?php

/* ClubBundle:araevenements:edit.html.twig */
class __TwigTemplate_bd8ea7c00622798c3fca36211f37b19f972973784f09b80bcf060a58fb28c4c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:araevenements:edit.html.twig", 1);
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
        $__internal_290c9b2bb611d512925e2386b105d4a8a95f6aef4e191713c032349a0be73f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290c9b2bb611d512925e2386b105d4a8a95f6aef4e191713c032349a0be73f17->enter($__internal_290c9b2bb611d512925e2386b105d4a8a95f6aef4e191713c032349a0be73f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:araevenements:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_290c9b2bb611d512925e2386b105d4a8a95f6aef4e191713c032349a0be73f17->leave($__internal_290c9b2bb611d512925e2386b105d4a8a95f6aef4e191713c032349a0be73f17_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_f7b1e264c514a615e873a5cc1f44fb2207619db268da047a666ffe03286050f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b1e264c514a615e873a5cc1f44fb2207619db268da047a666ffe03286050f8->enter($__internal_f7b1e264c514a615e873a5cc1f44fb2207619db268da047a666ffe03286050f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:araevenements:edit.html.twig"));

        // line 3
        echo "    <!-- ********************Navbar!!!*************** -->
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) ? $context["clubs"] : $this->getContext($context, "clubs")));
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
        
        $__internal_f7b1e264c514a615e873a5cc1f44fb2207619db268da047a666ffe03286050f8->leave($__internal_f7b1e264c514a615e873a5cc1f44fb2207619db268da047a666ffe03286050f8_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca6f47beea2a50be9fd3de2b95327ea8a0e8078f5a4bc5bdc125c4ea7b1094d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6f47beea2a50be9fd3de2b95327ea8a0e8078f5a4bc5bdc125c4ea7b1094d3->enter($__internal_ca6f47beea2a50be9fd3de2b95327ea8a0e8078f5a4bc5bdc125c4ea7b1094d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:araevenements:edit.html.twig"));

        // line 62
        echo "    <h1>Modifier un évènement</h1>

    ";
        // line 64
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    <span class=\"bold\">Titre</span><br>
    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "
    ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
    <br><br>
    <span class=\"bold\">Description</span><br>
    ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paragraph", array()), 'errors');
        echo "
    ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paragraph", array()), 'widget');
        echo "
    <br><br>
    <div class=\"col-xs-12\">
        <div class=\"col-xxs-12 col-xs-4\">
            <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'errors');
        echo "
            ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image2", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image2", array()), 'errors');
        echo "
            ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image2", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image3", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image3", array()), 'errors');
        echo "
            ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image3", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image4", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image4", array()), 'errors');
        echo "
            ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image4", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image5", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image5", array()), 'errors');
        echo "
            ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image5", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image6", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image6", array()), 'errors');
        echo "
            ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image6", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image7", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image7", array()), 'errors');
        echo "
            ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image7", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image8", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image8", array()), 'errors');
        echo "
            ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image8", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image9", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image9", array()), 'errors');
        echo "
            ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image9", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image10", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image10", array()), 'errors');
        echo "
            ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image10", array()), 'widget');
        echo "
            <br><br>
        </div>
        <div class=\"col-xxs-12 col-xs-4\">
            <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image11", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image11", array()), 'errors');
        echo "
            ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image11", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image12", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image12", array()), 'errors');
        echo "
            ";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image12", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image13", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image13", array()), 'errors');
        echo "
            ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image13", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image14", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image14", array()), 'errors');
        echo "
            ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image14", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image15", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image15", array()), 'errors');
        echo "
            ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image15", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image16", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image16", array()), 'errors');
        echo "
            ";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image16", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image17", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image17", array()), 'errors');
        echo "
            ";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image17", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image18", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image18", array()), 'errors');
        echo "
            ";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image18", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image19", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image19", array()), 'errors');
        echo "
            ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image19", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image20", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image20", array()), 'errors');
        echo "
            ";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image20", array()), 'widget');
        echo "
            <br><br>
        </div>
        <div class=\"col-xxs-12 col-xs-4\">
            <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image21", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image21", array()), 'errors');
        echo "
            ";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image21", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image22", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image22", array()), 'errors');
        echo "
            ";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image22", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image23", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image23", array()), 'errors');
        echo "
            ";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image23", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image24", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image24", array()), 'errors');
        echo "
            ";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image24", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image25", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image25", array()), 'errors');
        echo "
            ";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image25", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image26", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image26", array()), 'errors');
        echo "
            ";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image26", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image27", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image27", array()), 'errors');
        echo "
            ";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image27", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image28", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image28", array()), 'errors');
        echo "
            ";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image28", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image29", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image29", array()), 'errors');
        echo "
            ";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image29", array()), 'widget');
        echo "
            <br><br>
            <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["araEvenement"]) ? $context["araEvenement"] : $this->getContext($context, "araEvenement")), "image30", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
        echo "\" width=\"100%\">
            ";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image30", array()), 'errors');
        echo "
            ";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image30", array()), 'widget');
        echo "
            <br><br>
        </div>
    </div>
    <br><br>
    <input type=\"submit\" value=\"Modifier\" />
    ";
        // line 203
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    <br>
    ";
        // line 205
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <input type=\"submit\" value=\"Supprimer\">
    ";
        // line 207
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    <br>
    <a href=\"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evara_edit", array("id" => 1));
        echo "\" class=\"lienRouge\">Retour à la page précédente</a>
    <br>
";
        
        $__internal_ca6f47beea2a50be9fd3de2b95327ea8a0e8078f5a4bc5bdc125c4ea7b1094d3->leave($__internal_ca6f47beea2a50be9fd3de2b95327ea8a0e8078f5a4bc5bdc125c4ea7b1094d3_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:araevenements:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 209,  626 => 207,  621 => 205,  616 => 203,  607 => 197,  603 => 196,  599 => 195,  594 => 193,  590 => 192,  586 => 191,  581 => 189,  577 => 188,  573 => 187,  568 => 185,  564 => 184,  560 => 183,  555 => 181,  551 => 180,  547 => 179,  542 => 177,  538 => 176,  534 => 175,  529 => 173,  525 => 172,  521 => 171,  516 => 169,  512 => 168,  508 => 167,  503 => 165,  499 => 164,  495 => 163,  490 => 161,  486 => 160,  482 => 159,  475 => 155,  471 => 154,  467 => 153,  462 => 151,  458 => 150,  454 => 149,  449 => 147,  445 => 146,  441 => 145,  436 => 143,  432 => 142,  428 => 141,  423 => 139,  419 => 138,  415 => 137,  410 => 135,  406 => 134,  402 => 133,  397 => 131,  393 => 130,  389 => 129,  384 => 127,  380 => 126,  376 => 125,  371 => 123,  367 => 122,  363 => 121,  358 => 119,  354 => 118,  350 => 117,  343 => 113,  339 => 112,  335 => 111,  330 => 109,  326 => 108,  322 => 107,  317 => 105,  313 => 104,  309 => 103,  304 => 101,  300 => 100,  296 => 99,  291 => 97,  287 => 96,  283 => 95,  278 => 93,  274 => 92,  270 => 91,  265 => 89,  261 => 88,  257 => 87,  252 => 85,  248 => 84,  244 => 83,  239 => 81,  235 => 80,  231 => 79,  226 => 77,  222 => 76,  218 => 75,  211 => 71,  207 => 70,  201 => 67,  197 => 66,  192 => 64,  188 => 62,  182 => 61,  174 => 58,  161 => 51,  153 => 48,  147 => 47,  141 => 46,  130 => 40,  124 => 39,  118 => 38,  107 => 32,  101 => 31,  95 => 30,  89 => 29,  83 => 28,  77 => 27,  56 => 11,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
{% block header %}
    <!-- ********************Navbar!!!*************** -->
    {% for club in clubs %}
        <header>
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <div class=\"navbar-brand\">
                            <a href=\"{{ path('club_index') }}\"><img id=\"logo\" src=\"{{ asset('bundles/club/img/club_opinion_sans_fond.png') }}\" alt=\"Logo\" /></a>
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
                                    <li><a href=\"{{ path('club_edit', { 'id': 1 }) }}\">{{ club.soustitre11|raw }}</a></li>
                                    <li><a href=\"{{ path('presentation_edit', { 'id': 1 }) }}\">{{ club.soustitre12|raw }}</a></li>
                                    <li><a href=\"{{ path('pagemembre_edit', { 'id': 1 }) }}\">{{ club.soustitre13|raw }}</a></li>
                                    <li><a href=\"{{ path('rcvl_edit', { 'id': 1 }) }}\">{{ club.soustitre14|raw }}</a></li>
                                    <li><a href=\"{{ path('ara_edit', { 'id': 1 }) }}\">{{ club.soustitre15|raw }}</a></li>
                                    <li><a href=\"{{ path('club_sup_edit', { 'id': 1 }) }}\">{{ club.soustitre16|raw }}</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> Nos évènements <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path('evrcvl_edit', { 'id': 1 }) }}\">{{ club.soustitre21|raw }}</a></li>
                                    <li><a href=\"{{ path('evara_edit', { 'id': 1 }) }}\">{{ club.soustitre22|raw }}</a></li>
                                    <li><a href=\"{{ path('evsup_edit', { 'id': 1 }) }}\">{{ club.soustitre23|raw }}</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> Avantages du club <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path('av1_edit', { 'id': 1 }) }}\">{{ club.soustitre31|raw }}</a></li>
                                    <li><a href=\"{{ path('av2_edit', { 'id': 1 }) }}\">{{ club.soustitre32|raw }}</a></li>
                                    <li><a href=\"{{ path('av3_edit', { 'id': 1 }) }}\">{{ club.soustitre33|raw }}</a></li>
                                </ul>
                            </li>
                            <li><a href=\"{{ path('contact_edit', { 'id': 1 }) }}\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
    {% endfor %}
    <!-- ********************Fin Navbar************** -->
{% endblock %}

{% block body %}
    <h1>Modifier un évènement</h1>

    {{ form_start(edit_form) }}
    <span class=\"bold\">Titre</span><br>
    {{ form_errors(edit_form.title) }}
    {{ form_widget(edit_form.title) }}
    <br><br>
    <span class=\"bold\">Description</span><br>
    {{ form_errors(edit_form.paragraph) }}
    {{ form_widget(edit_form.paragraph) }}
    <br><br>
    <div class=\"col-xs-12\">
        <div class=\"col-xxs-12 col-xs-4\">
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image) }}
            {{ form_widget(edit_form.image) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image2', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image2) }}
            {{ form_widget(edit_form.image2) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image3', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image3) }}
            {{ form_widget(edit_form.image3) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image4', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image4) }}
            {{ form_widget(edit_form.image4) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image5', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image5) }}
            {{ form_widget(edit_form.image5) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image6', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image6) }}
            {{ form_widget(edit_form.image6) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image7', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image7) }}
            {{ form_widget(edit_form.image7) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image8', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image8) }}
            {{ form_widget(edit_form.image8) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image9', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image9) }}
            {{ form_widget(edit_form.image9) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image10', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image10) }}
            {{ form_widget(edit_form.image10) }}
            <br><br>
        </div>
        <div class=\"col-xxs-12 col-xs-4\">
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image11', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image11) }}
            {{ form_widget(edit_form.image11) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image12', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image12) }}
            {{ form_widget(edit_form.image12) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image13', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image13) }}
            {{ form_widget(edit_form.image13) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image14', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image14) }}
            {{ form_widget(edit_form.image14) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image15', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image15) }}
            {{ form_widget(edit_form.image15) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image16', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image16) }}
            {{ form_widget(edit_form.image16) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image17', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image17) }}
            {{ form_widget(edit_form.image17) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image18', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image18) }}
            {{ form_widget(edit_form.image18) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image19', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image19) }}
            {{ form_widget(edit_form.image19) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image20', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image20) }}
            {{ form_widget(edit_form.image20) }}
            <br><br>
        </div>
        <div class=\"col-xxs-12 col-xs-4\">
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image21', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image21) }}
            {{ form_widget(edit_form.image21) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image22', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image22) }}
            {{ form_widget(edit_form.image22) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image23', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image23) }}
            {{ form_widget(edit_form.image23) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image24', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image24) }}
            {{ form_widget(edit_form.image24) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image25', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image25) }}
            {{ form_widget(edit_form.image25) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image26', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image26) }}
            {{ form_widget(edit_form.image26) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image27', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image27) }}
            {{ form_widget(edit_form.image27) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image28', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image28) }}
            {{ form_widget(edit_form.image28) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image29', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image29) }}
            {{ form_widget(edit_form.image29) }}
            <br><br>
            <img src=\"{{ vich_uploader_asset(araEvenement, 'image30', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" width=\"100%\">
            {{ form_errors(edit_form.image30) }}
            {{ form_widget(edit_form.image30) }}
            <br><br>
        </div>
    </div>
    <br><br>
    <input type=\"submit\" value=\"Modifier\" />
    {{ form_end(edit_form) }}
    <br>
    {{ form_start(delete_form) }}
    <input type=\"submit\" value=\"Supprimer\">
    {{ form_end(delete_form) }}
    <br>
    <a href=\"{{ path('evara_edit', { 'id': 1 }) }}\" class=\"lienRouge\">Retour à la page précédente</a>
    <br>
{% endblock %}
", "ClubBundle:araevenements:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/araevenements/edit.html.twig");
    }
}
