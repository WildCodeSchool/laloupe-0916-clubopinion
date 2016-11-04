<?php

/* ClubBundle:evrcvl:edit.html.twig */
class __TwigTemplate_b04405ccf111fff640ef612562b3f35db299bcd092f949c0f2de7dbef412946b extends Twig_Template
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
        $__internal_676c60132ea0b32c344d1abdaad61df557dd5a0b8195758c45206798f602acc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676c60132ea0b32c344d1abdaad61df557dd5a0b8195758c45206798f602acc5->enter($__internal_676c60132ea0b32c344d1abdaad61df557dd5a0b8195758c45206798f602acc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:evrcvl:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_676c60132ea0b32c344d1abdaad61df557dd5a0b8195758c45206798f602acc5->leave($__internal_676c60132ea0b32c344d1abdaad61df557dd5a0b8195758c45206798f602acc5_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_d60ddc323d6b6e3371e973e7e511b6b93fb3277d30910d7de4f7c52e5b2dbbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60ddc323d6b6e3371e973e7e511b6b93fb3277d30910d7de4f7c52e5b2dbbec->enter($__internal_d60ddc323d6b6e3371e973e7e511b6b93fb3277d30910d7de4f7c52e5b2dbbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:evrcvl:edit.html.twig"));

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
        
        $__internal_d60ddc323d6b6e3371e973e7e511b6b93fb3277d30910d7de4f7c52e5b2dbbec->leave($__internal_d60ddc323d6b6e3371e973e7e511b6b93fb3277d30910d7de4f7c52e5b2dbbec_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_177a622ef56d3b03a948c3b66dc7b9d8941248af52c182c3e2a03b9d0bafc8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177a622ef56d3b03a948c3b66dc7b9d8941248af52c182c3e2a03b9d0bafc8ad->enter($__internal_177a622ef56d3b03a948c3b66dc7b9d8941248af52c182c3e2a03b9d0bafc8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:evrcvl:edit.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evRcvl"]) ? $context["evRcvl"] : $this->getContext($context, "evRcvl")), "title", array()), "html", null, true);
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
    <input type=\"submit\" value=\"Modifier\" />
    ";
        // line 72
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <br>

    <div class=\"row center-block row-diners\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["evenements"]) ? $context["evenements"] : $this->getContext($context, "evenements"))));
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), 'form_start');
        echo "
                    <span class=\"bold\">Nom</span><br>
                    ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "title", array()), 'errors');
        echo "
                    ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "title", array()), 'widget');
        echo "
                    <br><br>
                    <span class=\"bold\">Description</span><br>
                    ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "paragraph", array()), 'errors');
        echo "
                    ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "paragraph", array()), 'widget');
        echo "
                    <br><br>
                    <span class=\"bold\">Photos</span><br>
                    <br><br>
                    <div class=\"col-xs-4\">
                        ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image", array()), 'errors');
        echo "
                        ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image2", array()), 'errors');
        echo "
                        ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image2", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image3", array()), 'errors');
        echo "
                        ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image3", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image4", array()), 'errors');
        echo "
                        ";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image4", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image5", array()), 'errors');
        echo "
                        ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image5", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image6", array()), 'errors');
        echo "
                        ";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image6", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image7", array()), 'errors');
        echo "
                        ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image7", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image8", array()), 'errors');
        echo "
                        ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image8", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image9", array()), 'errors');
        echo "
                        ";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image9", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image10", array()), 'errors');
        echo "
                        ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image10", array()), 'widget');
        echo "
                        <br><br>
                    </div>
                    <div class=\"col-xs-4\">
                        ";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image11", array()), 'errors');
        echo "
                        ";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image11", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image12", array()), 'errors');
        echo "
                        ";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image12", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image13", array()), 'errors');
        echo "
                        ";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image13", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image14", array()), 'errors');
        echo "
                        ";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image14", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image15", array()), 'errors');
        echo "
                        ";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image15", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image16", array()), 'errors');
        echo "
                        ";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image16", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image17", array()), 'errors');
        echo "
                        ";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image17", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image18", array()), 'errors');
        echo "
                        ";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image18", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image19", array()), 'errors');
        echo "
                        ";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image19", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image20", array()), 'errors');
        echo "
                        ";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image20", array()), 'widget');
        echo "
                        <br><br>
                    </div>
                    <div class=\"col-xs-4\">
                        ";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image21", array()), 'errors');
        echo "
                        ";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image21", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image22", array()), 'errors');
        echo "
                        ";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image22", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image23", array()), 'errors');
        echo "
                        ";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image23", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image24", array()), 'errors');
        echo "
                        ";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image24", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image25", array()), 'errors');
        echo "
                        ";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image25", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image26", array()), 'errors');
        echo "
                        ";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image26", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image27", array()), 'errors');
        echo "
                        ";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image27", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image28", array()), 'errors');
        echo "
                        ";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image28", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image29", array()), 'errors');
        echo "
                        ";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image29", array()), 'widget');
        echo "
                        <br><br>
                        ";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image30", array()), 'errors');
        echo "
                        ";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), "image30", array()), 'widget');
        echo "
                        <br><br>
                    </div>
                    <input type=\"submit\" value=\"Créer\" />
                    ";
        // line 209
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["new_form"]) ? $context["new_form"] : $this->getContext($context, "new_form")), 'form_end');
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
        
        $__internal_177a622ef56d3b03a948c3b66dc7b9d8941248af52c182c3e2a03b9d0bafc8ad->leave($__internal_177a622ef56d3b03a948c3b66dc7b9d8941248af52c182c3e2a03b9d0bafc8ad_prof);

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
        return array (  584 => 214,  576 => 209,  569 => 205,  565 => 204,  560 => 202,  556 => 201,  551 => 199,  547 => 198,  542 => 196,  538 => 195,  533 => 193,  529 => 192,  524 => 190,  520 => 189,  515 => 187,  511 => 186,  506 => 184,  502 => 183,  497 => 181,  493 => 180,  488 => 178,  484 => 177,  477 => 173,  473 => 172,  468 => 170,  464 => 169,  459 => 167,  455 => 166,  450 => 164,  446 => 163,  441 => 161,  437 => 160,  432 => 158,  428 => 157,  423 => 155,  419 => 154,  414 => 152,  410 => 151,  405 => 149,  401 => 148,  396 => 146,  392 => 145,  385 => 141,  381 => 140,  376 => 138,  372 => 137,  367 => 135,  363 => 134,  358 => 132,  354 => 131,  349 => 129,  345 => 128,  340 => 126,  336 => 125,  331 => 123,  327 => 122,  322 => 120,  318 => 119,  313 => 117,  309 => 116,  304 => 114,  300 => 113,  292 => 108,  288 => 107,  282 => 104,  278 => 103,  273 => 101,  265 => 95,  254 => 90,  248 => 87,  243 => 85,  240 => 84,  233 => 82,  231 => 81,  226 => 78,  222 => 77,  214 => 72,  209 => 70,  205 => 69,  200 => 67,  196 => 66,  192 => 65,  188 => 63,  182 => 62,  174 => 58,  161 => 51,  153 => 48,  147 => 47,  141 => 46,  130 => 40,  124 => 39,  118 => 38,  107 => 32,  101 => 31,  95 => 30,  89 => 29,  83 => 28,  77 => 27,  56 => 11,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
    <h1>{{ evRcvl.title }}</h1><br>
    <span class=\"bold\">Titre</span>
    {{ form_errors(edit_form.title) }}
    {{ form_widget(edit_form.title) }}
    <input type=\"submit\" value=\"Modifier\" />
    {{ form_end(edit_form) }}

    <br>

    <div class=\"row center-block row-diners\">
        {% for evenement in evenements|reverse %}
            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                <div class=\"thumbnail\">
                    <div class=\"caption\">
                        {% if evenement.iname4 %}
                        <div class=\"image\" style=\"background-image: url({{ vich_uploader_asset(evenement, 'image4', 'ClubBundle\\\\Entity\\\\Evenements') }})\"></div>
                        {% else %}{% endif %}
                        <br><br>
                        <h4>{{ evenement.title }}</h4>
                        <div class=\"contrainte\">
                            <p>{{ evenement.paragraph|truncate(200, true, '...') }}</p>
                        </div>
                        <br>
                        <a href=\"{{ path('evenements_edit', { 'id': evenement.id }) }}\" class=\"lienRouge\">Modifier</a>
                    </div>
                </div>
            </div>
        {% endfor %}


        <div class=\"col-xs-12\">
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
    <a href=\"{{ path('evrcvl_index') }}\" class=\"lienRouge\">Retour à la page visiteur</a>

{% endblock %}
", "ClubBundle:evrcvl:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/evrcvl/edit.html.twig");
    }
}
