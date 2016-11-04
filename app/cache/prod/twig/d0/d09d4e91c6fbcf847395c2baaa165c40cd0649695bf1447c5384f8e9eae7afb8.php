<?php

/* ClubBundle:club:edit.html.twig */
class __TwigTemplate_6042cabab8d1b53374c174c78ced732976c9a7d12446e7b34109b12d003d0211 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "<!-- ********************Navbar!!!*************** -->
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) ? $context["clubs"] : null));
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
    }

    // line 62
    public function block_main($context, array $blocks = array())
    {
        // line 63
        echo "<main class=\"container-fluid\" id=\"container-club\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
";
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        // line 69
        echo "    <h1>Mode édition</h1>

    ";
        // line 71
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
    ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'errors');
        echo "

    <h2>édition barre de navigation</h2>
    <div class=\"container-fluid\">
        <div class=\"row \">
            <div class=\"col-xxs-12 col-xs-4\">
                <h3>Menu Accueil</h3>

                <p>Sous-titre 1</p>
                ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre11", array()), 'errors');
        echo "
                ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre11", array()), 'widget');
        echo "

                <p>Sous-titre 2</p>
                ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre12", array()), 'errors');
        echo "
                ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre12", array()), 'widget');
        echo "

                <p>Sous-titre 3</p>
                ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre13", array()), 'errors');
        echo "
                ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre13", array()), 'widget');
        echo "

                <p>Sous-titre 4</p>
                ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre14", array()), 'errors');
        echo "
                ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre14", array()), 'widget');
        echo "

                <p>Sous-titre 5</p>
                ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre15", array()), 'errors');
        echo "
                ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre15", array()), 'widget');
        echo "

                <p>Sous-titre 6</p>
                ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre16", array()), 'errors');
        echo "
                ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre16", array()), 'widget');
        echo "

            </div>
            <div class=\"col-xxs-12 col-xs-4\">
                <h3>Menu nos evenements</h3>

                <p>Sous-titre 1</p>
                ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre21", array()), 'errors');
        echo "
                ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre21", array()), 'widget');
        echo "

                <p>Sous-titre 2</p>
                ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre22", array()), 'errors');
        echo "
                ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre22", array()), 'widget');
        echo "

                <p>Sous-titre 3</p>
                ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre23", array()), 'errors');
        echo "
                ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre23", array()), 'widget');
        echo "

            </div>
            <div class=\"col-xxs-12 col-xs-4\">
                <h3>Menu avantages du club</h3>

                <p>Sous-titre 1</p>
                ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre31", array()), 'errors');
        echo "
                ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre31", array()), 'widget');
        echo "

                <p>Sous-titre 2</p>
                ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre32", array()), 'errors');
        echo "
                ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre32", array()), 'widget');
        echo "

                <p>Sous-titre 3</p>
                ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre33", array()), 'errors');
        echo "
                ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "soustitre33", array()), 'widget');
        echo "

            </div>
        </div>
        <br>
        <input type=\"submit\" value=\"Modifier\" />
        <br><br>
        <h2>édition page d'accueil</h2>
        ";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "video", array()), 'errors');
        echo "
        ";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "video", array()), 'widget', array("label" => false));
        echo "
        <br><br>
    </div>

<!-- *********************************************** -->

    <div class=\"container-fluid\">
        <div class=\"row blockGray\" id=\"blockhp\"><!--******************* 1er bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["club"]) ? $context["club"] : null), "image", "ClubBundle\\Entity\\Club"), "html", null, true);
        echo "\" width=\"100%\"/>
                ";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image", array()), 'errors');
        echo "
                ";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image", array()), 'widget', array("label" => false));
        echo "
                <br>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "blocktitle1", array()), "html", null, true);
        echo "</h2>
                <span class=\"bold\">Titre du bloc</span>
                ";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blocktitle1", array()), 'errors');
        echo "
                ";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blocktitle1", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
                <br><br>
                <p> ";
        // line 164
        echo $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "blockparagraph1", array());
        echo "</p>
                <br>
                <span class=\"bold\">Paragraphe</span>
                ";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blockparagraph1", array()), 'errors');
        echo "
                ";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blockparagraph1", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
            </div>
        </div>
        <div class=\"row\"><!--**************** 2ème bloc *****************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2> ";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "blocktitle2", array()), "html", null, true);
        echo " </h2>
                <span class=\"bold\">Titre du bloc</span>
                ";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blocktitle2", array()), 'errors');
        echo "
                ";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blocktitle2", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
                <br><br>
                <p>";
        // line 180
        echo $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "blockparagraph2", array());
        echo "</p>
                <br>
                <span class=\"bold\">Paragraphe</span>
                ";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blockparagraph2", array()), 'errors');
        echo "
                ";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blockparagraph2", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["club"]) ? $context["club"] : null), "image2", "ClubBundle\\Entity\\Club"), "html", null, true);
        echo "\" width=\"100%\"/>
                ";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image2", array()), 'errors');
        echo "
                ";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image2", array()), 'widget', array("label" => false));
        echo "
                <br>
            </div>
        </div>
        <div class=\"row blockGray\"><!--************* 3ème bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["club"]) ? $context["club"] : null), "image3", "ClubBundle\\Entity\\Club"), "html", null, true);
        echo "\" width=\"100%\"/>
                ";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image3", array()), 'errors');
        echo "
                ";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image3", array()), 'widget', array("label" => false));
        echo "
                <br>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "blocktitle3", array()), "html", null, true);
        echo "</h2 >
                <span class=\"bold\">Titre du bloc</span>
                ";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blocktitle3", array()), 'errors');
        echo "
                ";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blocktitle3", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
                <br><br>
                <p>";
        // line 208
        echo $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "blockparagraph3", array());
        echo "</p>
                <br>
                <span class=\"bold\">Paragraphe</span>
                ";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blockparagraph3", array()), 'errors');
        echo "
                ";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blockparagraph3", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
            </div>
        </div>
        <div class=\"row\"><!--************* 4ème bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "blocktitle4", array()), "html", null, true);
        echo "</h2 >
                <span class=\"bold\">Titre du bloc</span>
                ";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blocktitle4", array()), 'errors');
        echo "
                ";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blocktitle4", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
                <br><br>
                <p>";
        // line 224
        echo $this->getAttribute((isset($context["club"]) ? $context["club"] : null), "blockparagraph4", array());
        echo "</p>
                <br>
                <span class=\"bold\">Paragraphe</span>
                ";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blockparagraph4", array()), 'errors');
        echo "
                ";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "blockparagraph4", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Modifier\" />
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["club"]) ? $context["club"] : null), "image4", "ClubBundle\\Entity\\Club"), "html", null, true);
        echo "\" width=\"100%\"/>
                ";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image4", array()), 'errors');
        echo "
                ";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "image4", array()), 'widget', array("label" => false));
        echo "
                <br>
            </div>
        </div>
    ";
        // line 238
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
    </div>
        <!-- *********************************************** -->
            <br><br>
        ";
        // line 242
        if ((( !twig_test_empty((isset($context["club_sups"]) ? $context["club_sups"] : null)) &&  !twig_test_empty((isset($context["evSups"]) ? $context["evSups"] : null))) &&  !twig_test_empty((isset($context["av3s"]) ? $context["av3s"] : null)))) {
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
        if ( !twig_test_empty((isset($context["club_sups"]) ? $context["club_sups"] : null))) {
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
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm"]) ? $context["newForm"] : null), 'form_start');
            echo "
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        ";
            // line 258
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : null), "image", array()), 'errors');
            echo "
                                        ";
            // line 259
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : null), "image", array()), 'widget');
            echo "
                                    </div>
                                </div>
                                <br>
                                <span class=\"bold\">Titre</span><br>
                                ";
            // line 264
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : null), "title", array()), 'errors');
            echo "
                                ";
            // line 265
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : null), "title", array()), 'widget');
            echo "
                                <br>
                                 <span class=\"bold\">Sous-titre</span><br>
                                ";
            // line 268
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : null), "soutitre", array()), 'errors');
            echo "
                                ";
            // line 269
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : null), "soutitre", array()), 'widget');
            echo "
                                <br>
                                <span class=\"bold\">Paragraphe</span><br>
                                ";
            // line 272
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : null), "paragraph", array()), 'errors');
            echo "
                                ";
            // line 273
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : null), "paragraph", array()), 'widget');
            echo "
                                <br><br>
                                <input type=\"submit\" value=\"Créer\" />
                                ";
            // line 276
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm"]) ? $context["newForm"] : null), 'form_end');
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
        if ( !twig_test_empty((isset($context["evSups"]) ? $context["evSups"] : null))) {
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
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm3"]) ? $context["newForm3"] : null), 'form_start');
            echo "
                            <span class=\"bold\">Titre</span><br>
                            ";
            // line 291
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm3"]) ? $context["newForm3"] : null), "title", array()), 'errors');
            echo "
                            ";
            // line 292
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm3"]) ? $context["newForm3"] : null), "title", array()), 'widget');
            echo "
                            <br><br>
                            <input type=\"submit\" value=\"Créer\" />
                            ";
            // line 295
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm3"]) ? $context["newForm3"] : null), 'form_end');
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
        if ( !twig_test_empty((isset($context["av3s"]) ? $context["av3s"] : null))) {
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
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm2"]) ? $context["newForm2"] : null), 'form_start');
            echo "
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    ";
            // line 310
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm2"]) ? $context["newForm2"] : null), "image", array()), 'errors');
            echo "
                                    ";
            // line 311
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm2"]) ? $context["newForm2"] : null), "image", array()), 'widget');
            echo "
                                </div>
                            </div>
                            <br>
                            <span class=\"bold\">Titre</span><br>
                            ";
            // line 316
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm2"]) ? $context["newForm2"] : null), "titleAv3", array()), 'errors');
            echo "
                            ";
            // line 317
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm2"]) ? $context["newForm2"] : null), "titleAv3", array()), 'widget');
            echo "
                            <br>
                            <span class=\"bold\">Paragraphe</span><br>
                            ";
            // line 320
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm2"]) ? $context["newForm2"] : null), "paragraphAv3", array()), 'errors');
            echo "
                            ";
            // line 321
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm2"]) ? $context["newForm2"] : null), "paragraphAv3", array()), 'widget');
            echo "
                            <br><br>
                            <input type=\"submit\" value=\"Créer\" />
                            ";
            // line 324
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm2"]) ? $context["newForm2"] : null), 'form_end');
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
        return array (  733 => 329,  725 => 324,  719 => 321,  715 => 320,  709 => 317,  705 => 316,  697 => 311,  693 => 310,  687 => 307,  681 => 303,  678 => 302,  676 => 301,  673 => 300,  665 => 295,  659 => 292,  655 => 291,  650 => 289,  644 => 285,  641 => 284,  639 => 283,  635 => 281,  627 => 276,  621 => 273,  617 => 272,  611 => 269,  607 => 268,  601 => 265,  597 => 264,  589 => 259,  585 => 258,  579 => 255,  573 => 251,  570 => 250,  568 => 249,  565 => 248,  559 => 244,  556 => 243,  554 => 242,  547 => 238,  540 => 234,  536 => 233,  532 => 232,  525 => 228,  521 => 227,  515 => 224,  509 => 221,  505 => 220,  500 => 218,  491 => 212,  487 => 211,  481 => 208,  475 => 205,  471 => 204,  466 => 202,  459 => 198,  455 => 197,  451 => 196,  442 => 190,  438 => 189,  434 => 188,  427 => 184,  423 => 183,  417 => 180,  411 => 177,  407 => 176,  402 => 174,  393 => 168,  389 => 167,  383 => 164,  377 => 161,  373 => 160,  368 => 158,  361 => 154,  357 => 153,  353 => 152,  341 => 143,  337 => 142,  326 => 134,  322 => 133,  316 => 130,  312 => 129,  306 => 126,  302 => 125,  292 => 118,  288 => 117,  282 => 114,  278 => 113,  272 => 110,  268 => 109,  258 => 102,  254 => 101,  248 => 98,  244 => 97,  238 => 94,  234 => 93,  228 => 90,  224 => 89,  218 => 86,  214 => 85,  208 => 82,  204 => 81,  192 => 72,  188 => 71,  184 => 69,  181 => 68,  174 => 63,  171 => 62,  166 => 59,  153 => 52,  145 => 49,  139 => 48,  133 => 47,  122 => 41,  116 => 40,  110 => 39,  99 => 33,  93 => 32,  87 => 31,  81 => 30,  75 => 29,  69 => 28,  48 => 12,  40 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:club:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/club/edit.html.twig");
    }
}
