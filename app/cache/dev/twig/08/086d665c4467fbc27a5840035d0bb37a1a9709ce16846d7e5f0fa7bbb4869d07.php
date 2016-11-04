<?php

/* ClubBundle:club:edit.html.twig */
class __TwigTemplate_3b80dd0689f26403f527f027bd22b02594f0525d8bf68fbd36a2495ba4ba85bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:club:edit.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
        $__internal_73aaaa75542993bf33a5bc0280e1bc862967b1addf8fd6356c8001e4dbc459e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73aaaa75542993bf33a5bc0280e1bc862967b1addf8fd6356c8001e4dbc459e9->enter($__internal_73aaaa75542993bf33a5bc0280e1bc862967b1addf8fd6356c8001e4dbc459e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:club:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73aaaa75542993bf33a5bc0280e1bc862967b1addf8fd6356c8001e4dbc459e9->leave($__internal_73aaaa75542993bf33a5bc0280e1bc862967b1addf8fd6356c8001e4dbc459e9_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_2708cd86ec5636211c5d55773722f47d289bbda86cc53f35f79d7f723e655cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2708cd86ec5636211c5d55773722f47d289bbda86cc53f35f79d7f723e655cff->enter($__internal_2708cd86ec5636211c5d55773722f47d289bbda86cc53f35f79d7f723e655cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:club:edit.html.twig"));

        // line 4
        echo "<!-- ********************Navbar!!!*************** -->
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) ? $context["clubs"] : $this->getContext($context, "clubs")));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 6
            echo "                <header>
                    <nav class=\"navbar navbar-default\">
                        <div class=\"container-fluid\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class=\"navbar-header\">
                                <div class=\"navbar-brand\">
                                    <a href=\"";
            // line 12
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
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre11", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre12", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagemembre_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre13", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rcvl_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre14", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ara_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre15", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 33
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
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evrcvl_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre21", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evara_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre22", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 41
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
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("av1_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre31", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("av2_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre32", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("av3_edit", array("id" => 1));
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre33", array());
            echo "</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"";
            // line 52
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
        // line 59
        echo "            <!-- ********************Fin Navbar************** -->
        ";
        
        $__internal_2708cd86ec5636211c5d55773722f47d289bbda86cc53f35f79d7f723e655cff->leave($__internal_2708cd86ec5636211c5d55773722f47d289bbda86cc53f35f79d7f723e655cff_prof);

    }

    // line 62
    public function block_main($context, array $blocks = array())
    {
        $__internal_fe523f9f2b8667d1231724198c8d4f08e56935c51a5198fbec699e37df809644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe523f9f2b8667d1231724198c8d4f08e56935c51a5198fbec699e37df809644->enter($__internal_fe523f9f2b8667d1231724198c8d4f08e56935c51a5198fbec699e37df809644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:club:edit.html.twig"));

        // line 63
        echo "<main class=\"container-fluid\" id=\"container-club\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
";
        
        $__internal_fe523f9f2b8667d1231724198c8d4f08e56935c51a5198fbec699e37df809644->leave($__internal_fe523f9f2b8667d1231724198c8d4f08e56935c51a5198fbec699e37df809644_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ddf015d9078dd091f13ff0321ebe831a80ab2cf05ace2596595e3a46eb84040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddf015d9078dd091f13ff0321ebe831a80ab2cf05ace2596595e3a46eb84040->enter($__internal_1ddf015d9078dd091f13ff0321ebe831a80ab2cf05ace2596595e3a46eb84040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:club:edit.html.twig"));

        // line 69
        echo "    <h1>Mode édition</h1>

    ";
        // line 71
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

    <h2>édition barre de navigation</h2>
    <div class=\"container-fluid\">
        <div class=\"row \">
            <div class=\"col-xxs-12 col-xs-4\">
                <h3>Menu Accueil</h3>

                <p>Sous-titre 1</p>
                ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre11", array()), 'errors');
        echo "
                ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre11", array()), 'widget');
        echo "

                <p>Sous-titre 2</p>
                ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre12", array()), 'errors');
        echo "
                ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre12", array()), 'widget');
        echo "

                <p>Sous-titre 3</p>
                ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre13", array()), 'errors');
        echo "
                ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre13", array()), 'widget');
        echo "

                <p>Sous-titre 4</p>
                ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre14", array()), 'errors');
        echo "
                ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre14", array()), 'widget');
        echo "

                <p>Sous-titre 5</p>
                ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre15", array()), 'errors');
        echo "
                ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre15", array()), 'widget');
        echo "

                <p>Sous-titre 6</p>
                ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre16", array()), 'errors');
        echo "
                ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre16", array()), 'widget');
        echo "

            </div>
            <div class=\"col-xxs-12 col-xs-4\">
                <h3>Menu nos evenements</h3>

                <p>Sous-titre 1</p>
                ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre21", array()), 'errors');
        echo "
                ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre21", array()), 'widget');
        echo "

                <p>Sous-titre 2</p>
                ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre22", array()), 'errors');
        echo "
                ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre22", array()), 'widget');
        echo "

                <p>Sous-titre 3</p>
                ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre23", array()), 'errors');
        echo "
                ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre23", array()), 'widget');
        echo "

            </div>
            <div class=\"col-xxs-12 col-xs-4\">
                <h3>Menu avantages du club</h3>

                <p>Sous-titre 1</p>
                ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre31", array()), 'errors');
        echo "
                ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre31", array()), 'widget');
        echo "

                <p>Sous-titre 2</p>
                ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre32", array()), 'errors');
        echo "
                ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre32", array()), 'widget');
        echo "

                <p>Sous-titre 3</p>
                ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre33", array()), 'errors');
        echo "
                ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre33", array()), 'widget');
        echo "

            </div>
        </div>
        <br>
        <input type=\"submit\" value=\"Modifier\" />
        <br><br>
        <h2>édition page d'accueil</h2>
        ";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "video", array()), 'errors');
        echo "
        ";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "video", array()), 'widget', array("label" => false));
        echo "
        <br><br>
    </div>

<!-- *********************************************** -->

    <div class=\"container-fluid\">
        <div class=\"row blockGray\" id=\"blockhp\"><!--******************* 1er bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "image", "ClubBundle\\Entity\\Club"), "html", null, true);
        echo "\" width=\"100%\"/>
                ";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'errors');
        echo "
                ";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'widget', array("label" => false));
        echo "
                <br>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "blocktitle1", array()), "html", null, true);
        echo "</h2>
                <span class=\"bold\">Titre du bloc</span>
                ";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blocktitle1", array()), 'errors');
        echo "
                ";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blocktitle1", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
                <br><br>
                <p> ";
        // line 164
        echo $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "blockparagraph1", array());
        echo "</p>
                <br>
                <span class=\"bold\">Paragraphe</span>
                ";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blockparagraph1", array()), 'errors');
        echo "
                ";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blockparagraph1", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
            </div>
        </div>
        <div class=\"row\"><!--**************** 2ème bloc *****************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2> ";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "blocktitle2", array()), "html", null, true);
        echo " </h2>
                <span class=\"bold\">Titre du bloc</span>
                ";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blocktitle2", array()), 'errors');
        echo "
                ";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blocktitle2", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
                <br><br>
                <p>";
        // line 180
        echo $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "blockparagraph2", array());
        echo "</p>
                <br>
                <span class=\"bold\">Paragraphe</span>
                ";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blockparagraph2", array()), 'errors');
        echo "
                ";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blockparagraph2", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "image2", "ClubBundle\\Entity\\Club"), "html", null, true);
        echo "\" width=\"100%\"/>
                ";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image2", array()), 'errors');
        echo "
                ";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image2", array()), 'widget', array("label" => false));
        echo "
                <br>
            </div>
        </div>
        <div class=\"row blockGray\"><!--************* 3ème bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "image3", "ClubBundle\\Entity\\Club"), "html", null, true);
        echo "\" width=\"100%\"/>
                ";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image3", array()), 'errors');
        echo "
                ";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image3", array()), 'widget', array("label" => false));
        echo "
                <br>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "blocktitle3", array()), "html", null, true);
        echo "</h2 >
                <span class=\"bold\">Titre du bloc</span>
                ";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blocktitle3", array()), 'errors');
        echo "
                ";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blocktitle3", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
                <br><br>
                <p>";
        // line 208
        echo $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "blockparagraph3", array());
        echo "</p>
                <br>
                <span class=\"bold\">Paragraphe</span>
                ";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blockparagraph3", array()), 'errors');
        echo "
                ";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blockparagraph3", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
            </div>
        </div>
        <div class=\"row\"><!--************* 4ème bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "blocktitle4", array()), "html", null, true);
        echo "</h2 >
                <span class=\"bold\">Titre du bloc</span>
                ";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blocktitle4", array()), 'errors');
        echo "
                ";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blocktitle4", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
                <br><br>
                <p>";
        // line 224
        echo $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "blockparagraph4", array());
        echo "</p>
                <br>
                <span class=\"bold\">Paragraphe</span>
                ";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blockparagraph4", array()), 'errors');
        echo "
                ";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "blockparagraph4", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "image4", "ClubBundle\\Entity\\Club"), "html", null, true);
        echo "\" width=\"100%\"/>
                ";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image4", array()), 'errors');
        echo "
                ";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image4", array()), 'widget', array("label" => false));
        echo "
                <br>
            </div>
        </div>
    ";
        // line 238
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
        <!-- *********************************************** -->
            <br><br>
        ";
        // line 242
        if ((( !twig_test_empty((isset($context["club_sups"]) ? $context["club_sups"] : $this->getContext($context, "club_sups"))) &&  !twig_test_empty((isset($context["evSups"]) ? $context["evSups"] : $this->getContext($context, "evSups")))) &&  !twig_test_empty((isset($context["av3s"]) ? $context["av3s"] : $this->getContext($context, "av3s"))))) {
            // line 243
            echo "        ";
        } else {
            // line 244
            echo "        <h2>création pages supplémentaires</h2>
        <div class=\"container-fluid\">
            <div class=\"row \">
            ";
        }
        // line 248
        echo "                <!-- *****************   CLUB SUP ******************* -->
                ";
        // line 249
        if ( !twig_test_empty((isset($context["club_sups"]) ? $context["club_sups"] : $this->getContext($context, "club_sups")))) {
            // line 250
            echo "                ";
        } else {
            // line 251
            echo "                    <div class=\"col-xs-12 col-sm-6 col-md-4\">
                        <div class=\"thumbnail\" id=\"thumbnail-membre\">
                            <div class=\"caption\">
                                <h3>Page Club Supplémentaire</h3>
                                ";
            // line 255
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), 'form_start');
            echo "
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        ";
            // line 258
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "image", array()), 'errors');
            echo "
                                        ";
            // line 259
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "image", array()), 'widget');
            echo "
                                    </div>
                                </div>
                                <br>
                                <span class=\"bold\">Titre</span><br>
                                ";
            // line 264
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "title", array()), 'errors');
            echo "
                                ";
            // line 265
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "title", array()), 'widget');
            echo "
                                <br>
                                 <span class=\"bold\">Sous-titre</span><br>
                                ";
            // line 268
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "soutitre", array()), 'errors');
            echo "
                                ";
            // line 269
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "soutitre", array()), 'widget');
            echo "
                                <br>
                                <span class=\"bold\">Paragraphe</span><br>
                                ";
            // line 272
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "paragraph", array()), 'errors');
            echo "
                                ";
            // line 273
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "paragraph", array()), 'widget');
            echo "
                                <br><br>
                                <input type=\"submit\" value=\"Créer\" />
                                ";
            // line 276
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), 'form_end');
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 281
        echo "
                <!-- *****************   EV SUP ******************* -->
                ";
        // line 283
        if ( !twig_test_empty((isset($context["evSups"]) ? $context["evSups"] : $this->getContext($context, "evSups")))) {
            // line 284
            echo "                ";
        } else {
            // line 285
            echo "                <div class=\"col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        <div class=\"caption\">
                            <h3>Page évènement supplémentaire</h3>
                            ";
            // line 289
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm3"]) ? $context["newForm3"] : $this->getContext($context, "newForm3")), 'form_start');
            echo "
                            <span class=\"bold\">Titre</span><br>
                            ";
            // line 291
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm3"]) ? $context["newForm3"] : $this->getContext($context, "newForm3")), "title", array()), 'errors');
            echo "
                            ";
            // line 292
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm3"]) ? $context["newForm3"] : $this->getContext($context, "newForm3")), "title", array()), 'widget');
            echo "
                            <br><br>
                            <input type=\"submit\" value=\"Créer\" />
                            ";
            // line 295
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm3"]) ? $context["newForm3"] : $this->getContext($context, "newForm3")), 'form_end');
            echo "
                        </div>
                    </div>
                </div>
                ";
        }
        // line 300
        echo "                <!-- *****************   AV3 ******************* -->
                ";
        // line 301
        if ( !twig_test_empty((isset($context["av3s"]) ? $context["av3s"] : $this->getContext($context, "av3s")))) {
            // line 302
            echo "                ";
        } else {
            // line 303
            echo "                <div class=\"col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        <div class=\"caption\">
                            <h3>Page Avantage Supplémentaire</h3>
                            ";
            // line 307
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm2"]) ? $context["newForm2"] : $this->getContext($context, "newForm2")), 'form_start');
            echo "
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    ";
            // line 310
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm2"]) ? $context["newForm2"] : $this->getContext($context, "newForm2")), "image", array()), 'errors');
            echo "
                                    ";
            // line 311
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm2"]) ? $context["newForm2"] : $this->getContext($context, "newForm2")), "image", array()), 'widget');
            echo "
                                </div>
                            </div>
                            <br>
                            <span class=\"bold\">Titre</span><br>
                            ";
            // line 316
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm2"]) ? $context["newForm2"] : $this->getContext($context, "newForm2")), "titleAv3", array()), 'errors');
            echo "
                            ";
            // line 317
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm2"]) ? $context["newForm2"] : $this->getContext($context, "newForm2")), "titleAv3", array()), 'widget');
            echo "
                            <br>
                            <span class=\"bold\">Paragraphe</span><br>
                            ";
            // line 320
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm2"]) ? $context["newForm2"] : $this->getContext($context, "newForm2")), "paragraphAv3", array()), 'errors');
            echo "
                            ";
            // line 321
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm2"]) ? $context["newForm2"] : $this->getContext($context, "newForm2")), "paragraphAv3", array()), 'widget');
            echo "
                            <br><br>
                            <input type=\"submit\" value=\"Créer\" />
                            ";
            // line 324
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm2"]) ? $context["newForm2"] : $this->getContext($context, "newForm2")), 'form_end');
            echo "
                        </div>
                    </div>
                </div>
                ";
        }
        // line 329
        echo "
            </div>
        </div>


";
        
        $__internal_1ddf015d9078dd091f13ff0321ebe831a80ab2cf05ace2596595e3a46eb84040->leave($__internal_1ddf015d9078dd091f13ff0321ebe831a80ab2cf05ace2596595e3a46eb84040_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:club:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  754 => 329,  746 => 324,  740 => 321,  736 => 320,  730 => 317,  726 => 316,  718 => 311,  714 => 310,  708 => 307,  702 => 303,  699 => 302,  697 => 301,  694 => 300,  686 => 295,  680 => 292,  676 => 291,  671 => 289,  665 => 285,  662 => 284,  660 => 283,  656 => 281,  648 => 276,  642 => 273,  638 => 272,  632 => 269,  628 => 268,  622 => 265,  618 => 264,  610 => 259,  606 => 258,  600 => 255,  594 => 251,  591 => 250,  589 => 249,  586 => 248,  580 => 244,  577 => 243,  575 => 242,  568 => 238,  561 => 234,  557 => 233,  553 => 232,  546 => 228,  542 => 227,  536 => 224,  530 => 221,  526 => 220,  521 => 218,  512 => 212,  508 => 211,  502 => 208,  496 => 205,  492 => 204,  487 => 202,  480 => 198,  476 => 197,  472 => 196,  463 => 190,  459 => 189,  455 => 188,  448 => 184,  444 => 183,  438 => 180,  432 => 177,  428 => 176,  423 => 174,  414 => 168,  410 => 167,  404 => 164,  398 => 161,  394 => 160,  389 => 158,  382 => 154,  378 => 153,  374 => 152,  362 => 143,  358 => 142,  347 => 134,  343 => 133,  337 => 130,  333 => 129,  327 => 126,  323 => 125,  313 => 118,  309 => 117,  303 => 114,  299 => 113,  293 => 110,  289 => 109,  279 => 102,  275 => 101,  269 => 98,  265 => 97,  259 => 94,  255 => 93,  249 => 90,  245 => 89,  239 => 86,  235 => 85,  229 => 82,  225 => 81,  213 => 72,  209 => 71,  205 => 69,  199 => 68,  189 => 63,  183 => 62,  175 => 59,  162 => 52,  154 => 49,  148 => 48,  142 => 47,  131 => 41,  125 => 40,  119 => 39,  108 => 33,  102 => 32,  96 => 31,  90 => 30,  84 => 29,  78 => 28,  57 => 12,  49 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block main %}
<main class=\"container-fluid\" id=\"container-club\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
{% endblock %}

{% block body %}
    <h1>Mode édition</h1>

    {{ form_start(edit_form) }}
    {{ form_errors(edit_form) }}

    <h2>édition barre de navigation</h2>
    <div class=\"container-fluid\">
        <div class=\"row \">
            <div class=\"col-xxs-12 col-xs-4\">
                <h3>Menu Accueil</h3>

                <p>Sous-titre 1</p>
                {{ form_errors(edit_form.soustitre11 ) }}
                {{ form_widget(edit_form.soustitre11 ) }}

                <p>Sous-titre 2</p>
                {{ form_errors(edit_form.soustitre12 ) }}
                {{ form_widget(edit_form.soustitre12 ) }}

                <p>Sous-titre 3</p>
                {{ form_errors(edit_form.soustitre13 ) }}
                {{ form_widget(edit_form.soustitre13 ) }}

                <p>Sous-titre 4</p>
                {{ form_errors(edit_form.soustitre14 ) }}
                {{ form_widget(edit_form.soustitre14 ) }}

                <p>Sous-titre 5</p>
                {{ form_errors(edit_form.soustitre15 ) }}
                {{ form_widget(edit_form.soustitre15 ) }}

                <p>Sous-titre 6</p>
                {{ form_errors(edit_form.soustitre16 ) }}
                {{ form_widget(edit_form.soustitre16 ) }}

            </div>
            <div class=\"col-xxs-12 col-xs-4\">
                <h3>Menu nos evenements</h3>

                <p>Sous-titre 1</p>
                {{ form_errors(edit_form.soustitre21 ) }}
                {{ form_widget(edit_form.soustitre21 ) }}

                <p>Sous-titre 2</p>
                {{ form_errors(edit_form.soustitre22 ) }}
                {{ form_widget(edit_form.soustitre22 ) }}

                <p>Sous-titre 3</p>
                {{ form_errors(edit_form.soustitre23 ) }}
                {{ form_widget(edit_form.soustitre23 ) }}

            </div>
            <div class=\"col-xxs-12 col-xs-4\">
                <h3>Menu avantages du club</h3>

                <p>Sous-titre 1</p>
                {{ form_errors(edit_form.soustitre31 ) }}
                {{ form_widget(edit_form.soustitre31 ) }}

                <p>Sous-titre 2</p>
                {{ form_errors(edit_form.soustitre32 ) }}
                {{ form_widget(edit_form.soustitre32 ) }}

                <p>Sous-titre 3</p>
                {{ form_errors(edit_form.soustitre33 ) }}
                {{ form_widget(edit_form.soustitre33 ) }}

            </div>
        </div>
        <br>
        <input type=\"submit\" value=\"Modifier\" />
        <br><br>
        <h2>édition page d'accueil</h2>
        {{ form_errors(edit_form.video ) }}
        {{ form_widget(edit_form.video, { label: false }) }}
        <br><br>
    </div>

<!-- *********************************************** -->

    <div class=\"container-fluid\">
        <div class=\"row blockGray\" id=\"blockhp\"><!--******************* 1er bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"{{ vich_uploader_asset(club, 'image', 'ClubBundle\\\\Entity\\\\Club') }}\" width=\"100%\"/>
                {{ form_errors(edit_form.image ) }}
                {{ form_widget(edit_form.image, { label: false } ) }}
                <br>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>{{ club.blocktitle1 }}</h2>
                <span class=\"bold\">Titre du bloc</span>
                {{ form_errors(edit_form.blocktitle1 ) }}
                {{ form_widget(edit_form.blocktitle1 ) }}
                <input type=\"submit\" value=\"Modifier\" />
                <br><br>
                <p> {{ club.blockparagraph1|raw }}</p>
                <br>
                <span class=\"bold\">Paragraphe</span>
                {{ form_errors(edit_form.blockparagraph1) }}
                {{ form_widget(edit_form.blockparagraph1) }}
                <input type=\"submit\" value=\"Modifier\" />
            </div>
        </div>
        <div class=\"row\"><!--**************** 2ème bloc *****************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2> {{ club.blocktitle2 }} </h2>
                <span class=\"bold\">Titre du bloc</span>
                {{ form_errors(edit_form.blocktitle2) }}
                {{ form_widget(edit_form.blocktitle2) }}
                <input type=\"submit\" value=\"Modifier\" />
                <br><br>
                <p>{{ club.blockparagraph2|raw }}</p>
                <br>
                <span class=\"bold\">Paragraphe</span>
                {{ form_errors(edit_form.blockparagraph2) }}
                {{ form_widget(edit_form.blockparagraph2) }}
                <input type=\"submit\" value=\"Modifier\" />
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"{{ vich_uploader_asset(club, 'image2', 'ClubBundle\\\\Entity\\\\Club') }}\" width=\"100%\"/>
                {{ form_errors(edit_form.image2 ) }}
                {{ form_widget(edit_form.image2, { label: false } ) }}
                <br>
            </div>
        </div>
        <div class=\"row blockGray\"><!--************* 3ème bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"{{ vich_uploader_asset(club, 'image3', 'ClubBundle\\\\Entity\\\\Club') }}\" width=\"100%\"/>
                {{ form_errors(edit_form.image3 ) }}
                {{ form_widget(edit_form.image3, { label: false } ) }}
                <br>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>{{ club.blocktitle3 }}</h2 >
                <span class=\"bold\">Titre du bloc</span>
                {{ form_errors(edit_form.blocktitle3) }}
                {{ form_widget(edit_form.blocktitle3) }}
                <input type=\"submit\" value=\"Modifier\" />
                <br><br>
                <p>{{ club.blockparagraph3|raw }}</p>
                <br>
                <span class=\"bold\">Paragraphe</span>
                {{ form_errors(edit_form.blockparagraph3) }}
                {{ form_widget(edit_form.blockparagraph3) }}
                <input type=\"submit\" value=\"Modifier\" />
            </div>
        </div>
        <div class=\"row\"><!--************* 4ème bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>{{ club.blocktitle4 }}</h2 >
                <span class=\"bold\">Titre du bloc</span>
                {{ form_errors(edit_form.blocktitle4) }}
                {{ form_widget(edit_form.blocktitle4) }}
                <input type=\"submit\" value=\"Modifier\" />
                <br><br>
                <p>{{ club.blockparagraph4|raw }}</p>
                <br>
                <span class=\"bold\">Paragraphe</span>
                {{ form_errors(edit_form.blockparagraph4) }}
                {{ form_widget(edit_form.blockparagraph4) }}
                <input type=\"submit\" value=\"Modifier\" />
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"{{ vich_uploader_asset(club, 'image4', 'ClubBundle\\\\Entity\\\\Club') }}\" width=\"100%\"/>
                {{ form_errors(edit_form.image4 ) }}
                {{ form_widget(edit_form.image4, { label: false } ) }}
                <br>
            </div>
        </div>
    {{ form_end(edit_form) }}
    </div>
        <!-- *********************************************** -->
            <br><br>
        {% if club_sups is not empty and evSups is not empty and av3s is not empty %}
        {% else %}
        <h2>création pages supplémentaires</h2>
        <div class=\"container-fluid\">
            <div class=\"row \">
            {% endif %}
                <!-- *****************   CLUB SUP ******************* -->
                {% if club_sups is not empty %}
                {% else %}
                    <div class=\"col-xs-12 col-sm-6 col-md-4\">
                        <div class=\"thumbnail\" id=\"thumbnail-membre\">
                            <div class=\"caption\">
                                <h3>Page Club Supplémentaire</h3>
                                {{ form_start(newForm) }}
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        {{ form_errors(newForm.image) }}
                                        {{ form_widget(newForm.image) }}
                                    </div>
                                </div>
                                <br>
                                <span class=\"bold\">Titre</span><br>
                                {{ form_errors(newForm.title) }}
                                {{ form_widget(newForm.title) }}
                                <br>
                                 <span class=\"bold\">Sous-titre</span><br>
                                {{ form_errors(newForm.soutitre) }}
                                {{ form_widget(newForm.soutitre) }}
                                <br>
                                <span class=\"bold\">Paragraphe</span><br>
                                {{ form_errors(newForm.paragraph) }}
                                {{ form_widget(newForm.paragraph) }}
                                <br><br>
                                <input type=\"submit\" value=\"Créer\" />
                                {{ form_end(newForm) }}
                            </div>
                        </div>
                    </div>
                {% endif %}

                <!-- *****************   EV SUP ******************* -->
                {% if evSups is not empty %}
                {% else %}
                <div class=\"col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        <div class=\"caption\">
                            <h3>Page évènement supplémentaire</h3>
                            {{ form_start(newForm3) }}
                            <span class=\"bold\">Titre</span><br>
                            {{ form_errors(newForm3.title) }}
                            {{ form_widget(newForm3.title) }}
                            <br><br>
                            <input type=\"submit\" value=\"Créer\" />
                            {{ form_end(newForm3) }}
                        </div>
                    </div>
                </div>
                {% endif %}
                <!-- *****************   AV3 ******************* -->
                {% if av3s is not empty %}
                {% else %}
                <div class=\"col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        <div class=\"caption\">
                            <h3>Page Avantage Supplémentaire</h3>
                            {{ form_start(newForm2) }}
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    {{ form_errors(newForm2.image) }}
                                    {{ form_widget(newForm2.image) }}
                                </div>
                            </div>
                            <br>
                            <span class=\"bold\">Titre</span><br>
                            {{ form_errors(newForm2.titleAv3) }}
                            {{ form_widget(newForm2.titleAv3) }}
                            <br>
                            <span class=\"bold\">Paragraphe</span><br>
                            {{ form_errors(newForm2.paragraphAv3) }}
                            {{ form_widget(newForm2.paragraphAv3) }}
                            <br><br>
                            <input type=\"submit\" value=\"Créer\" />
                            {{ form_end(newForm2) }}
                        </div>
                    </div>
                </div>
                {% endif %}

            </div>
        </div>


{% endblock %}", "ClubBundle:club:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/club/edit.html.twig");
    }
}
