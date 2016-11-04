<?php

/* ClubBundle:evrcvl:edit.html.twig */
class __TwigTemplate_0e8f0ef6c624d646db0b03309e78ac3fdeb4db07458c3de9b8bf1c95f60a0771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:evrcvl:edit.html.twig", 1);
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
        echo "    <h1>Mode édition</h1>

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evRcvl"]) ? $context["evRcvl"] : null), "title", array()), "html", null, true);
        echo "</h1><br>
    <span class=\"bold\">Titre</span>
    ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "title", array()), 'errors');
        echo "
    ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "title", array()), 'widget');
        echo "
    <input type=\"submit\" value=\"Modifier\" />
    ";
        // line 72
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "

    <br>

    <div class=\"row center-block row-diners\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["evenements"]) ? $context["evenements"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 78
            echo "            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                <div class=\"thumbnail\">
                    <div class=\"caption\">
                        ";
            // line 81
            if ($this->getAttribute($context["evenement"], "iname4", array())) {
                // line 82
                echo "                        <div class=\"image\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image4", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                echo ")\"></div>
                        ";
            } else {
            }
            // line 84
            echo "                        <br><br>
                        <h4>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "title", array()), "html", null, true);
            echo "</h4>
                        <div class=\"contrainte\">
                            <p>";
            // line 87
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["evenement"], "paragraph", array()), 200, true, "..."), "html", null, true);
            echo "</p>
                        </div>
                        <br>
                        <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenements_edit", array("id" => $this->getAttribute($context["evenement"], "id", array()))), "html", null, true);
            echo "\" class=\"lienRouge\">Modifier</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "

        <div class=\"col-xs-12\">
            <div class=\"thumbnail\" id=\"thumbnail-membre\">
                <div class=\"caption\">
                    <h2>Créer un nouvel évènement</h2>
                    ";
        // line 101
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["new_form"]) ? $context["new_form"] : null), 'form_start');
        echo "
                    <span class=\"bold\">Nom</span><br>
                    ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "title", array()), 'errors');
        echo "
                    ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "title", array()), 'widget');
        echo "
                    <br><br>
                    <span class=\"bold\">Description</span><br>
                    ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "paragraph", array()), 'errors');
        echo "
                    ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "paragraph", array()), 'widget');
        echo "
                    <br><br>
                    <span class=\"bold\">Photos</span><br>
                    <br><br>
                    <div class=\"col-xs-4\">
                        ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image", array()), 'errors');
        echo "
                        ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image2", array()), 'errors');
        echo "
                        ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image2", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image3", array()), 'errors');
        echo "
                        ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image3", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image4", array()), 'errors');
        echo "
                        ";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image4", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image5", array()), 'errors');
        echo "
                        ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image5", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image6", array()), 'errors');
        echo "
                        ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image6", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image7", array()), 'errors');
        echo "
                        ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image7", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image8", array()), 'errors');
        echo "
                        ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image8", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image9", array()), 'errors');
        echo "
                        ";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image9", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image10", array()), 'errors');
        echo "
                        ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image10", array()), 'widget');
        echo "
                        <br><br>
                    </div>
                    <div class=\"col-xs-4\">
                        ";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image11", array()), 'errors');
        echo "
                        ";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image11", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image12", array()), 'errors');
        echo "
                        ";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image12", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image13", array()), 'errors');
        echo "
                        ";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image13", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image14", array()), 'errors');
        echo "
                        ";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image14", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image15", array()), 'errors');
        echo "
                        ";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image15", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image16", array()), 'errors');
        echo "
                        ";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image16", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image17", array()), 'errors');
        echo "
                        ";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image17", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image18", array()), 'errors');
        echo "
                        ";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image18", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image19", array()), 'errors');
        echo "
                        ";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image19", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image20", array()), 'errors');
        echo "
                        ";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image20", array()), 'widget');
        echo "
                        <br><br>
                    </div>
                    <div class=\"col-xs-4\">
                        ";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image21", array()), 'errors');
        echo "
                        ";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image21", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image22", array()), 'errors');
        echo "
                        ";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image22", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image23", array()), 'errors');
        echo "
                        ";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image23", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image24", array()), 'errors');
        echo "
                        ";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image24", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image25", array()), 'errors');
        echo "
                        ";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image25", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image26", array()), 'errors');
        echo "
                        ";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image26", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image27", array()), 'errors');
        echo "
                        ";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image27", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image28", array()), 'errors');
        echo "
                        ";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image28", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image29", array()), 'errors');
        echo "
                        ";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image29", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image30", array()), 'errors');
        echo "
                        ";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image30", array()), 'widget');
        echo "
                        <br><br>
                    </div>
                    <input type=\"submit\" value=\"Créer\" />
                    ";
        // line 209
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["new_form"]) ? $context["new_form"] : null), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
    <a href=\"";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evrcvl_index");
        echo "\" class=\"lienRouge\">Retour à la page visiteur</a>

";
    }

    public function getTemplateName()
    {
        return "ClubBundle:evrcvl:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  569 => 214,  561 => 209,  554 => 205,  550 => 204,  545 => 202,  541 => 201,  536 => 199,  532 => 198,  527 => 196,  523 => 195,  518 => 193,  514 => 192,  509 => 190,  505 => 189,  500 => 187,  496 => 186,  491 => 184,  487 => 183,  482 => 181,  478 => 180,  473 => 178,  469 => 177,  462 => 173,  458 => 172,  453 => 170,  449 => 169,  444 => 167,  440 => 166,  435 => 164,  431 => 163,  426 => 161,  422 => 160,  417 => 158,  413 => 157,  408 => 155,  404 => 154,  399 => 152,  395 => 151,  390 => 149,  386 => 148,  381 => 146,  377 => 145,  370 => 141,  366 => 140,  361 => 138,  357 => 137,  352 => 135,  348 => 134,  343 => 132,  339 => 131,  334 => 129,  330 => 128,  325 => 126,  321 => 125,  316 => 123,  312 => 122,  307 => 120,  303 => 119,  298 => 117,  294 => 116,  289 => 114,  285 => 113,  277 => 108,  273 => 107,  267 => 104,  263 => 103,  258 => 101,  250 => 95,  239 => 90,  233 => 87,  228 => 85,  225 => 84,  218 => 82,  216 => 81,  211 => 78,  207 => 77,  199 => 72,  194 => 70,  190 => 69,  185 => 67,  181 => 66,  177 => 65,  173 => 63,  170 => 62,  165 => 58,  152 => 51,  144 => 48,  138 => 47,  132 => 46,  121 => 40,  115 => 39,  109 => 38,  98 => 32,  92 => 31,  86 => 30,  80 => 29,  74 => 28,  68 => 27,  47 => 11,  39 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:evrcvl:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/evrcvl/edit.html.twig");
    }
}
