<?php

/* ClubBundle:evenements:edit.html.twig */
class __TwigTemplate_82e8729a916be370eef5aabd8222dda50ddc63ec0bf250908bbbb7fa5437f46d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:evenements:edit.html.twig", 1);
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
        $__internal_68ee17a8bd80a98912270b56d8f52626450dc9c7c496270af0e765f273132979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ee17a8bd80a98912270b56d8f52626450dc9c7c496270af0e765f273132979->enter($__internal_68ee17a8bd80a98912270b56d8f52626450dc9c7c496270af0e765f273132979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:evenements:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68ee17a8bd80a98912270b56d8f52626450dc9c7c496270af0e765f273132979->leave($__internal_68ee17a8bd80a98912270b56d8f52626450dc9c7c496270af0e765f273132979_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_10db8f4ecb0ac7a6bcdb168e8fd0076b65200df9ff13f2e3df13b662d5ad6c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10db8f4ecb0ac7a6bcdb168e8fd0076b65200df9ff13f2e3df13b662d5ad6c51->enter($__internal_10db8f4ecb0ac7a6bcdb168e8fd0076b65200df9ff13f2e3df13b662d5ad6c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:evenements:edit.html.twig"));

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
        
        $__internal_10db8f4ecb0ac7a6bcdb168e8fd0076b65200df9ff13f2e3df13b662d5ad6c51->leave($__internal_10db8f4ecb0ac7a6bcdb168e8fd0076b65200df9ff13f2e3df13b662d5ad6c51_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_e93069e3ee34ffcf83d8ab6269bf8484a7764c113c2c3b80e4cd291a1b288838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93069e3ee34ffcf83d8ab6269bf8484a7764c113c2c3b80e4cd291a1b288838->enter($__internal_e93069e3ee34ffcf83d8ab6269bf8484a7764c113c2c3b80e4cd291a1b288838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:evenements:edit.html.twig"));

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
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'errors');
        echo "
        ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image2", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image2", array()), 'errors');
        echo "
        ";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image2", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image3", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image3", array()), 'errors');
        echo "
        ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image3", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image4", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image4", array()), 'errors');
        echo "
        ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image4", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image5", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image5", array()), 'errors');
        echo "
        ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image5", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image6", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image6", array()), 'errors');
        echo "
        ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image6", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image7", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image7", array()), 'errors');
        echo "
        ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image7", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image8", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image8", array()), 'errors');
        echo "
        ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image8", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image9", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image9", array()), 'errors');
        echo "
        ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image9", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image10", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image10", array()), 'errors');
        echo "
        ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image10", array()), 'widget');
        echo "
        <br><br>
    </div>
    <div class=\"col-xxs-12 col-xs-4\">
        <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image11", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image11", array()), 'errors');
        echo "
        ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image11", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image12", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image12", array()), 'errors');
        echo "
        ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image12", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image13", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image13", array()), 'errors');
        echo "
        ";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image13", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image14", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image14", array()), 'errors');
        echo "
        ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image14", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image15", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image15", array()), 'errors');
        echo "
        ";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image15", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image16", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image16", array()), 'errors');
        echo "
        ";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image16", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image17", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image17", array()), 'errors');
        echo "
        ";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image17", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image18", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image18", array()), 'errors');
        echo "
        ";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image18", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image19", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image19", array()), 'errors');
        echo "
        ";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image19", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image20", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image20", array()), 'errors');
        echo "
        ";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image20", array()), 'widget');
        echo "
        <br><br>
    </div>
    <div class=\"col-xxs-12 col-xs-4\">
        <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image21", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image21", array()), 'errors');
        echo "
        ";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image21", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image22", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image22", array()), 'errors');
        echo "
        ";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image22", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image23", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image23", array()), 'errors');
        echo "
        ";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image23", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image24", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image24", array()), 'errors');
        echo "
        ";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image24", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image25", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image25", array()), 'errors');
        echo "
        ";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image25", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image26", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image26", array()), 'errors');
        echo "
        ";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image26", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image27", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image27", array()), 'errors');
        echo "
        ";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image27", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image28", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image28", array()), 'errors');
        echo "
        ";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image28", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image29", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image29", array()), 'errors');
        echo "
        ";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image29", array()), 'widget');
        echo "
        <br><br>
        <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["evenement"]) ? $context["evenement"] : $this->getContext($context, "evenement")), "image30", "ClubBundle\\Entity\\Evenements"), "html", null, true);
        echo "\" width=\"100%\">
        ";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image30", array()), 'errors');
        echo "
        ";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image30", array()), 'widget');
        echo "
        <br><br>
    </div>
    </div>
    <br><br>
    <input type=\"submit\" value=\"Modifier\" />
    ";
        // line 204
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    <br>
    ";
        // line 206
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <input type=\"submit\" value=\"Supprimer\">
    ";
        // line 208
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    <br>
    <a href=\"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evrcvl_edit", array("id" => 1));
        echo "\" class=\"lienRouge\">Retour à la page précédente</a>
    <br>
";
        
        $__internal_e93069e3ee34ffcf83d8ab6269bf8484a7764c113c2c3b80e4cd291a1b288838->leave($__internal_e93069e3ee34ffcf83d8ab6269bf8484a7764c113c2c3b80e4cd291a1b288838_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:evenements:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  632 => 210,  627 => 208,  622 => 206,  617 => 204,  608 => 198,  604 => 197,  600 => 196,  595 => 194,  591 => 193,  587 => 192,  582 => 190,  578 => 189,  574 => 188,  569 => 186,  565 => 185,  561 => 184,  556 => 182,  552 => 181,  548 => 180,  543 => 178,  539 => 177,  535 => 176,  530 => 174,  526 => 173,  522 => 172,  517 => 170,  513 => 169,  509 => 168,  504 => 166,  500 => 165,  496 => 164,  491 => 162,  487 => 161,  483 => 160,  476 => 156,  472 => 155,  468 => 154,  463 => 152,  459 => 151,  455 => 150,  450 => 148,  446 => 147,  442 => 146,  437 => 144,  433 => 143,  429 => 142,  424 => 140,  420 => 139,  416 => 138,  411 => 136,  407 => 135,  403 => 134,  398 => 132,  394 => 131,  390 => 130,  385 => 128,  381 => 127,  377 => 126,  372 => 124,  368 => 123,  364 => 122,  359 => 120,  355 => 119,  351 => 118,  344 => 114,  340 => 113,  336 => 112,  331 => 110,  327 => 109,  323 => 108,  318 => 106,  314 => 105,  310 => 104,  305 => 102,  301 => 101,  297 => 100,  292 => 98,  288 => 97,  284 => 96,  279 => 94,  275 => 93,  271 => 92,  266 => 90,  262 => 89,  258 => 88,  253 => 86,  249 => 85,  245 => 84,  240 => 82,  236 => 81,  232 => 80,  227 => 78,  223 => 77,  219 => 76,  211 => 71,  207 => 70,  201 => 67,  197 => 66,  192 => 64,  188 => 62,  182 => 61,  174 => 58,  161 => 51,  153 => 48,  147 => 47,  141 => 46,  130 => 40,  124 => 39,  118 => 38,  107 => 32,  101 => 31,  95 => 30,  89 => 29,  83 => 28,  77 => 27,  56 => 11,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
        <img src=\"{{ vich_uploader_asset(evenement, 'image', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image) }}
        {{ form_widget(edit_form.image) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image2', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image2) }}
        {{ form_widget(edit_form.image2) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image3', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image3) }}
        {{ form_widget(edit_form.image3) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image4', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image4) }}
        {{ form_widget(edit_form.image4) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image5', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image5) }}
        {{ form_widget(edit_form.image5) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image6', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image6) }}
        {{ form_widget(edit_form.image6) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image7', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image7) }}
        {{ form_widget(edit_form.image7) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image8', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image8) }}
        {{ form_widget(edit_form.image8) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image9', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image9) }}
        {{ form_widget(edit_form.image9) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image10', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image10) }}
        {{ form_widget(edit_form.image10) }}
        <br><br>
    </div>
    <div class=\"col-xxs-12 col-xs-4\">
        <img src=\"{{ vich_uploader_asset(evenement, 'image11', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image11) }}
        {{ form_widget(edit_form.image11) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image12', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image12) }}
        {{ form_widget(edit_form.image12) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image13', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image13) }}
        {{ form_widget(edit_form.image13) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image14', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image14) }}
        {{ form_widget(edit_form.image14) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image15', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image15) }}
        {{ form_widget(edit_form.image15) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image16', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image16) }}
        {{ form_widget(edit_form.image16) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image17', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image17) }}
        {{ form_widget(edit_form.image17) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image18', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image18) }}
        {{ form_widget(edit_form.image18) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image19', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image19) }}
        {{ form_widget(edit_form.image19) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image20', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image20) }}
        {{ form_widget(edit_form.image20) }}
        <br><br>
    </div>
    <div class=\"col-xxs-12 col-xs-4\">
        <img src=\"{{ vich_uploader_asset(evenement, 'image21', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image21) }}
        {{ form_widget(edit_form.image21) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image22', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image22) }}
        {{ form_widget(edit_form.image22) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image23', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image23) }}
        {{ form_widget(edit_form.image23) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image24', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image24) }}
        {{ form_widget(edit_form.image24) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image25', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image25) }}
        {{ form_widget(edit_form.image25) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image26', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image26) }}
        {{ form_widget(edit_form.image26) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image27', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image27) }}
        {{ form_widget(edit_form.image27) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image28', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image28) }}
        {{ form_widget(edit_form.image28) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image29', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
        {{ form_errors(edit_form.image29) }}
        {{ form_widget(edit_form.image29) }}
        <br><br>
        <img src=\"{{ vich_uploader_asset(evenement, 'image30', 'ClubBundle\\\\Entity\\\\Evenements') }}\" width=\"100%\">
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
    <a href=\"{{ path('evrcvl_edit', { 'id': 1 }) }}\" class=\"lienRouge\">Retour à la page précédente</a>
    <br>
{% endblock %}
", "ClubBundle:evenements:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/evenements/edit.html.twig");
    }
}
