<?php

/* ClubBundle:evsup:edit.html.twig */
class __TwigTemplate_16771dad9fc5ae61ab2faf34d65338a5d72359605bd86aadc0f06a2e8f14f1fc extends Twig_Template
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
        $__internal_e1effd025122102bc1f5c5044567bf5a4a5dfed0c294d8d8a94134a91e5cbf24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1effd025122102bc1f5c5044567bf5a4a5dfed0c294d8d8a94134a91e5cbf24->enter($__internal_e1effd025122102bc1f5c5044567bf5a4a5dfed0c294d8d8a94134a91e5cbf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:evsup:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1effd025122102bc1f5c5044567bf5a4a5dfed0c294d8d8a94134a91e5cbf24->leave($__internal_e1effd025122102bc1f5c5044567bf5a4a5dfed0c294d8d8a94134a91e5cbf24_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_9c920dd60dc94823390163ac98cf61bbd18961c58bde37ae81edb0f83b4aabe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c920dd60dc94823390163ac98cf61bbd18961c58bde37ae81edb0f83b4aabe0->enter($__internal_9c920dd60dc94823390163ac98cf61bbd18961c58bde37ae81edb0f83b4aabe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:evsup:edit.html.twig"));

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
        
        $__internal_9c920dd60dc94823390163ac98cf61bbd18961c58bde37ae81edb0f83b4aabe0->leave($__internal_9c920dd60dc94823390163ac98cf61bbd18961c58bde37ae81edb0f83b4aabe0_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_09708c9b5bdcd6b9680e421bd31e2786db411b773c083109a6458a1e1b2b3b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09708c9b5bdcd6b9680e421bd31e2786db411b773c083109a6458a1e1b2b3b46->enter($__internal_09708c9b5bdcd6b9680e421bd31e2786db411b773c083109a6458a1e1b2b3b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:evsup:edit.html.twig"));

        // line 63
        echo "    <h1>Mode édition</h1>

    ";
        // line 65
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
    <h1>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evSup"]) ? $context["evSup"] : $this->getContext($context, "evSup")), "title", array()), "html", null, true);
        echo "</h1><br>
    <span class=\"bold\">Titre</span>
    ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "
    ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
    <input type=\"submit\" value=\"Edit\" />
    ";
        // line 72
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <br>

    <div class=\"row center-block row-diners\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["supEvenements"]) ? $context["supEvenements"] : $this->getContext($context, "supEvenements"))));
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), 'form_start');
        echo "
                    <span class=\"bold\">Nom</span><br>
                    ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "title", array()), 'errors');
        echo "
                    ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "title", array()), 'widget');
        echo "
                    <br><br>
                    <span class=\"bold\">Description</span><br>
                    ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "paragraph", array()), 'errors');
        echo "
                    ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "paragraph", array()), 'widget');
        echo "
                    <br><br>
                    <span class=\"bold\">Photos</span><br>
                    <br><br>
                    <div class=\"col-xs-4\">
                    ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image", array()), 'errors');
        echo "
                    ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image2", array()), 'errors');
        echo "
                    ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image2", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image3", array()), 'errors');
        echo "
                    ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image3", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image4", array()), 'errors');
        echo "
                    ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image4", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image5", array()), 'errors');
        echo "
                    ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image5", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image6", array()), 'errors');
        echo "
                    ";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image6", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image7", array()), 'errors');
        echo "
                    ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image7", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image8", array()), 'errors');
        echo "
                    ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image8", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image9", array()), 'errors');
        echo "
                    ";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image9", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image10", array()), 'errors');
        echo "
                    ";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image10", array()), 'widget');
        echo "
                    <br><br>
                    </div>
                    <div class=\"col-xs-4\">
                    ";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image11", array()), 'errors');
        echo "
                    ";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image11", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image12", array()), 'errors');
        echo "
                    ";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image12", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image13", array()), 'errors');
        echo "
                    ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image13", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image14", array()), 'errors');
        echo "
                    ";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image14", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image15", array()), 'errors');
        echo "
                    ";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image15", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image16", array()), 'errors');
        echo "
                    ";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image16", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image17", array()), 'errors');
        echo "
                    ";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image17", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image18", array()), 'errors');
        echo "
                    ";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image18", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image19", array()), 'errors');
        echo "
                    ";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image19", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image20", array()), 'errors');
        echo "
                    ";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image20", array()), 'widget');
        echo "
                    <br><br>
                    </div>
                    <div class=\"col-xs-4\">
                    ";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image21", array()), 'errors');
        echo "
                    ";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image21", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image22", array()), 'errors');
        echo "
                    ";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image22", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image23", array()), 'errors');
        echo "
                    ";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image23", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image24", array()), 'errors');
        echo "
                    ";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image24", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 188
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image25", array()), 'errors');
        echo "
                    ";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image25", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image26", array()), 'errors');
        echo "
                    ";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image26", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image27", array()), 'errors');
        echo "
                    ";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image27", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image28", array()), 'errors');
        echo "
                    ";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image28", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image29", array()), 'errors');
        echo "
                    ";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image29", array()), 'widget');
        echo "
                    <br><br>
                    ";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image30", array()), 'errors');
        echo "
                    ";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image30", array()), 'widget');
        echo "
                    <br><br>
                    </div>
                    <input type=\"submit\" value=\"Créer\" />
                    ";
        // line 208
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), 'form_end');
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
        
        $__internal_09708c9b5bdcd6b9680e421bd31e2786db411b773c083109a6458a1e1b2b3b46->leave($__internal_09708c9b5bdcd6b9680e421bd31e2786db411b773c083109a6458a1e1b2b3b46_prof);

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
        return array (  583 => 213,  575 => 208,  568 => 204,  564 => 203,  559 => 201,  555 => 200,  550 => 198,  546 => 197,  541 => 195,  537 => 194,  532 => 192,  528 => 191,  523 => 189,  519 => 188,  514 => 186,  510 => 185,  505 => 183,  501 => 182,  496 => 180,  492 => 179,  487 => 177,  483 => 176,  476 => 172,  472 => 171,  467 => 169,  463 => 168,  458 => 166,  454 => 165,  449 => 163,  445 => 162,  440 => 160,  436 => 159,  431 => 157,  427 => 156,  422 => 154,  418 => 153,  413 => 151,  409 => 150,  404 => 148,  400 => 147,  395 => 145,  391 => 144,  384 => 140,  380 => 139,  375 => 137,  371 => 136,  366 => 134,  362 => 133,  357 => 131,  353 => 130,  348 => 128,  344 => 127,  339 => 125,  335 => 124,  330 => 122,  326 => 121,  321 => 119,  317 => 118,  312 => 116,  308 => 115,  303 => 113,  299 => 112,  291 => 107,  287 => 106,  281 => 103,  277 => 102,  272 => 100,  265 => 95,  254 => 90,  248 => 87,  243 => 85,  240 => 84,  233 => 82,  231 => 81,  226 => 78,  222 => 77,  214 => 72,  209 => 70,  205 => 69,  200 => 67,  196 => 66,  192 => 65,  188 => 63,  182 => 62,  174 => 58,  161 => 51,  153 => 48,  147 => 47,  141 => 46,  130 => 40,  124 => 39,  118 => 38,  107 => 32,  101 => 31,  95 => 30,  89 => 29,  83 => 28,  77 => 27,  56 => 11,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
    <h1>Mode édition</h1>

    {{ form_start(edit_form) }}
    {{ form_errors(edit_form) }}
    <h1>{{ evSup.title }}</h1><br>
    <span class=\"bold\">Titre</span>
    {{ form_errors(edit_form.title) }}
    {{ form_widget(edit_form.title) }}
    <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <br>

    <div class=\"row center-block row-diners\">
        {% for supEvenement in supEvenements|reverse %}
            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                <div class=\"thumbnail\">
                    <div class=\"caption\">
                        {% if supEvenement.iname4 %}
                        <div class=\"image\" style=\"background-image: url({{ vich_uploader_asset(supEvenement, 'image4', 'ClubBundle\\\\Entity\\\\SupEvenements') }})\"></div>
                        {% else %}{% endif %}
                        <br><br>
                        <h4>{{ supEvenement.title }}</h4>
                        <div class=\"contrainte\">
                            <p>{{ supEvenement.paragraph|truncate(200, true, '...') }}</p>
                        </div>
                        <br>
                        <a href=\"{{ path('supevenements_edit', { 'id': supEvenement.id }) }}\" class=\"lienRouge\">Modifier</a>
                    </div>
                </div>
            </div>
        {% endfor %}

        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"thumbnail\" id=\"thumbnail-membre\">
                <div class=\"caption\">
                    <h2>Créer un nouvel évènement</h2>
                    {{ form_start(new_form) }}
                    <span class=\"bold\">Nom</span><br>
                    {{ form_errors(new_form.title) }}
                    {{ form_widget(new_form.title) }}
                    <br><br>
                    <span class=\"bold\">Description</span><br>
                    {{ form_errors(new_form.paragraph) }}
                    {{ form_widget(new_form.paragraph) }}
                    <br><br>
                    <span class=\"bold\">Photos</span><br>
                    <br><br>
                    <div class=\"col-xs-4\">
                    {{ form_errors(new_form.image) }}
                    {{ form_widget(new_form.image) }}
                    <br><br>
                    {{ form_errors(new_form.image2) }}
                    {{ form_widget(new_form.image2) }}
                    <br><br>
                    {{ form_errors(new_form.image3) }}
                    {{ form_widget(new_form.image3) }}
                    <br><br>
                    {{ form_errors(new_form.image4) }}
                    {{ form_widget(new_form.image4) }}
                    <br><br>
                    {{ form_errors(new_form.image5) }}
                    {{ form_widget(new_form.image5) }}
                    <br><br>
                    {{ form_errors(new_form.image6) }}
                    {{ form_widget(new_form.image6) }}
                    <br><br>
                    {{ form_errors(new_form.image7) }}
                    {{ form_widget(new_form.image7) }}
                    <br><br>
                    {{ form_errors(new_form.image8) }}
                    {{ form_widget(new_form.image8) }}
                    <br><br>
                    {{ form_errors(new_form.image9) }}
                    {{ form_widget(new_form.image9) }}
                    <br><br>
                    {{ form_errors(new_form.image10) }}
                    {{ form_widget(new_form.image10) }}
                    <br><br>
                    </div>
                    <div class=\"col-xs-4\">
                    {{ form_errors(new_form.image11) }}
                    {{ form_widget(new_form.image11) }}
                    <br><br>
                    {{ form_errors(new_form.image12) }}
                    {{ form_widget(new_form.image12) }}
                    <br><br>
                    {{ form_errors(new_form.image13) }}
                    {{ form_widget(new_form.image13) }}
                    <br><br>
                    {{ form_errors(new_form.image14) }}
                    {{ form_widget(new_form.image14) }}
                    <br><br>
                    {{ form_errors(new_form.image15) }}
                    {{ form_widget(new_form.image15) }}
                    <br><br>
                    {{ form_errors(new_form.image16) }}
                    {{ form_widget(new_form.image16) }}
                    <br><br>
                    {{ form_errors(new_form.image17) }}
                    {{ form_widget(new_form.image17) }}
                    <br><br>
                    {{ form_errors(new_form.image18) }}
                    {{ form_widget(new_form.image18) }}
                    <br><br>
                    {{ form_errors(new_form.image19) }}
                    {{ form_widget(new_form.image19) }}
                    <br><br>
                    {{ form_errors(new_form.image20) }}
                    {{ form_widget(new_form.image20) }}
                    <br><br>
                    </div>
                    <div class=\"col-xs-4\">
                    {{ form_errors(new_form.image21) }}
                    {{ form_widget(new_form.image21) }}
                    <br><br>
                    {{ form_errors(new_form.image22) }}
                    {{ form_widget(new_form.image22) }}
                    <br><br>
                    {{ form_errors(new_form.image23) }}
                    {{ form_widget(new_form.image23) }}
                    <br><br>
                    {{ form_errors(new_form.image24) }}
                    {{ form_widget(new_form.image24) }}
                    <br><br>
                    {{ form_errors(new_form.image25) }}
                    {{ form_widget(new_form.image25) }}
                    <br><br>
                    {{ form_errors(new_form.image26) }}
                    {{ form_widget(new_form.image26) }}
                    <br><br>
                    {{ form_errors(new_form.image27) }}
                    {{ form_widget(new_form.image27) }}
                    <br><br>
                    {{ form_errors(new_form.image28) }}
                    {{ form_widget(new_form.image28) }}
                    <br><br>
                    {{ form_errors(new_form.image29) }}
                    {{ form_widget(new_form.image29) }}
                    <br><br>
                    {{ form_errors(new_form.image30) }}
                    {{ form_widget(new_form.image30) }}
                    <br><br>
                    </div>
                    <input type=\"submit\" value=\"Créer\" />
                    {{ form_end(new_form) }}
                </div>
            </div>
        </div>
    </div>
    <a href=\"{{ path('evsup_index') }}\" class=\"lienRouge\">Retour à la page visiteur</a>

{% endblock %}
", "ClubBundle:evsup:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/evsup/edit.html.twig");
    }
}
