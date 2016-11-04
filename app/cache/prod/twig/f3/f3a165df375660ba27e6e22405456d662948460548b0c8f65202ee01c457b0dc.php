<?php

/* ClubBundle:evsup:edit.html.twig */
class __TwigTemplate_7baf491762fcab780698e846db097675746d160704ddefcc83bf4255d8cb6325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:evsup:edit.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evSup"]) ? $context["evSup"] : null), "title", array()), "html", null, true);
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
    <input type=\"submit\" value=\"Edit\" />
    ";
        // line 72
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "

    <br>

    <div class=\"row center-block row-diners\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["supEvenements"]) ? $context["supEvenements"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["supEvenement"]) {
            // line 78
            echo "            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                <div class=\"thumbnail\">
                    <div class=\"caption\">
                        ";
            // line 81
            if ($this->getAttribute($context["supEvenement"], "iname4", array())) {
                // line 82
                echo "                        <div class=\"image\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image4", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                echo ")\"></div>
                        ";
            } else {
            }
            // line 84
            echo "                        <br><br>
                        <h4>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["supEvenement"], "title", array()), "html", null, true);
            echo "</h4>
                        <div class=\"contrainte\">
                            <p>";
            // line 87
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["supEvenement"], "paragraph", array()), 200, true, "..."), "html", null, true);
            echo "</p>
                        </div>
                        <br>
                        <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supevenements_edit", array("id" => $this->getAttribute($context["supEvenement"], "id", array()))), "html", null, true);
            echo "\" class=\"lienRouge\">Modifier</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supEvenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"thumbnail\" id=\"thumbnail-membre\">
                <div class=\"caption\">
                    <h2>Créer un nouvel évènement</h2>
                    ";
        // line 100
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["new_form"]) ? $context["new_form"] : null), 'form_start');
        echo "
                    <span class=\"bold\">Nom</span><br>
                    ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "title", array()), 'errors');
        echo "
                    ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "title", array()), 'widget');
        echo "
                    <br><br>
                    <span class=\"bold\">Description</span><br>
                    ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "paragraph", array()), 'errors');
        echo "
                    ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "paragraph", array()), 'widget');
        echo "
                    <br><br>
                    <span class=\"bold\">Photos</span><br>
                    <br><br>
                    <div class=\"col-xs-4\">
                    ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image", array()), 'errors');
        echo "
                    ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image2", array()), 'errors');
        echo "
                    ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image2", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image3", array()), 'errors');
        echo "
                    ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image3", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image4", array()), 'errors');
        echo "
                    ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image4", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image5", array()), 'errors');
        echo "
                    ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image5", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image6", array()), 'errors');
        echo "
                    ";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image6", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image7", array()), 'errors');
        echo "
                    ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image7", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image8", array()), 'errors');
        echo "
                    ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image8", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image9", array()), 'errors');
        echo "
                    ";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image9", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image10", array()), 'errors');
        echo "
                    ";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image10", array()), 'widget');
        echo "
                    <br><br>
                    </div>
                    <div class=\"col-xs-4\">
                    ";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image11", array()), 'errors');
        echo "
                    ";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image11", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image12", array()), 'errors');
        echo "
                    ";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image12", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image13", array()), 'errors');
        echo "
                    ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image13", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image14", array()), 'errors');
        echo "
                    ";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image14", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image15", array()), 'errors');
        echo "
                    ";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image15", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image16", array()), 'errors');
        echo "
                    ";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image16", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image17", array()), 'errors');
        echo "
                    ";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image17", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image18", array()), 'errors');
        echo "
                    ";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image18", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image19", array()), 'errors');
        echo "
                    ";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image19", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image20", array()), 'errors');
        echo "
                    ";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image20", array()), 'widget');
        echo "
                    <br><br>
                    </div>
                    <div class=\"col-xs-4\">
                    ";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image21", array()), 'errors');
        echo "
                    ";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image21", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image22", array()), 'errors');
        echo "
                    ";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image22", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image23", array()), 'errors');
        echo "
                    ";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image23", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image24", array()), 'errors');
        echo "
                    ";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image24", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image25", array()), 'errors');
        echo "
                    ";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image25", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image26", array()), 'errors');
        echo "
                    ";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image26", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image27", array()), 'errors');
        echo "
                    ";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image27", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image28", array()), 'errors');
        echo "
                    ";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image28", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image29", array()), 'errors');
        echo "
                    ";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image29", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image30", array()), 'errors');
        echo "
                    ";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : null), "image30", array()), 'widget');
        echo "
                    <br><br>
                    </div>
                    <input type=\"submit\" value=\"Créer\" />
                    ";
        // line 208
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["new_form"]) ? $context["new_form"] : null), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
    <a href=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evsup_index");
        echo "\" class=\"lienRouge\">Retour à la page visiteur</a>

";
    }

    public function getTemplateName()
    {
        return "ClubBundle:evsup:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 213,  560 => 208,  553 => 204,  549 => 203,  544 => 201,  540 => 200,  535 => 198,  531 => 197,  526 => 195,  522 => 194,  517 => 192,  513 => 191,  508 => 189,  504 => 188,  499 => 186,  495 => 185,  490 => 183,  486 => 182,  481 => 180,  477 => 179,  472 => 177,  468 => 176,  461 => 172,  457 => 171,  452 => 169,  448 => 168,  443 => 166,  439 => 165,  434 => 163,  430 => 162,  425 => 160,  421 => 159,  416 => 157,  412 => 156,  407 => 154,  403 => 153,  398 => 151,  394 => 150,  389 => 148,  385 => 147,  380 => 145,  376 => 144,  369 => 140,  365 => 139,  360 => 137,  356 => 136,  351 => 134,  347 => 133,  342 => 131,  338 => 130,  333 => 128,  329 => 127,  324 => 125,  320 => 124,  315 => 122,  311 => 121,  306 => 119,  302 => 118,  297 => 116,  293 => 115,  288 => 113,  284 => 112,  276 => 107,  272 => 106,  266 => 103,  262 => 102,  257 => 100,  250 => 95,  239 => 90,  233 => 87,  228 => 85,  225 => 84,  218 => 82,  216 => 81,  211 => 78,  207 => 77,  199 => 72,  194 => 70,  190 => 69,  185 => 67,  181 => 66,  177 => 65,  173 => 63,  170 => 62,  165 => 58,  152 => 51,  144 => 48,  138 => 47,  132 => 46,  121 => 40,  115 => 39,  109 => 38,  98 => 32,  92 => 31,  86 => 30,  80 => 29,  74 => 28,  68 => 27,  47 => 11,  39 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:evsup:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/evsup/edit.html.twig");
    }
}
