<?php

/* ClubBundle:av2:edit.html.twig */
class __TwigTemplate_678471d7258e6813cf4dcf50c01e6f4bc58176b88d86f7099e8495d23aaf0e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:av2:edit.html.twig", 1);
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
        $__internal_4a2972a9dfb71cd49e31abda0bbe9b680122b6803fc01a0da6c32da2cc8f3646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2972a9dfb71cd49e31abda0bbe9b680122b6803fc01a0da6c32da2cc8f3646->enter($__internal_4a2972a9dfb71cd49e31abda0bbe9b680122b6803fc01a0da6c32da2cc8f3646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:av2:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a2972a9dfb71cd49e31abda0bbe9b680122b6803fc01a0da6c32da2cc8f3646->leave($__internal_4a2972a9dfb71cd49e31abda0bbe9b680122b6803fc01a0da6c32da2cc8f3646_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_f86cf6d6595dd7d64dccda7bec6fd23d78a0ab550570f8346abf78ac549a08f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86cf6d6595dd7d64dccda7bec6fd23d78a0ab550570f8346abf78ac549a08f4->enter($__internal_f86cf6d6595dd7d64dccda7bec6fd23d78a0ab550570f8346abf78ac549a08f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:av2:edit.html.twig"));

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
        
        $__internal_f86cf6d6595dd7d64dccda7bec6fd23d78a0ab550570f8346abf78ac549a08f4->leave($__internal_f86cf6d6595dd7d64dccda7bec6fd23d78a0ab550570f8346abf78ac549a08f4_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbe72d401957b2a50b488ec2e33f0d634ce57cc234f869980df70ade523722aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe72d401957b2a50b488ec2e33f0d634ce57cc234f869980df70ade523722aa->enter($__internal_dbe72d401957b2a50b488ec2e33f0d634ce57cc234f869980df70ade523722aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:av2:edit.html.twig"));

        // line 62
        echo "    <h1>mode édition</h1>

    ";
        // line 64
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
    <h1><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/club/img/signs.png"), "html", null, true);
        echo "\" width=\"30px\" id=\"fireworks\" /> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["av2"]) ? $context["av2"] : $this->getContext($context, "av2")), "titleAv2", array()), "html", null, true);
        echo "</h1>
    <span class=\"bold\">Titre</span>
    ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titleAv2", array()), 'errors');
        echo "
    ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titleAv2", array()), 'widget');
        echo "
    <input type=\"submit\" value=\"Modifier\" />
    <br><br>
    <div class=\"container-fluid\">
        <div class=\"row blockGray\">
            <div class=\"row\"><!--**************** 2ème bloc *****************-->
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <p>";
        // line 76
        echo $this->getAttribute((isset($context["av2"]) ? $context["av2"] : $this->getContext($context, "av2")), "paragraphAv2", array());
        echo "</p>
                    <br>
                    <span class=\"bold\">Paragraphe</span>
                    ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paragraphAv2", array()), 'errors');
        echo "
                    ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paragraphAv2", array()), 'widget');
        echo "
                    <input type=\"submit\" value=\"Modifier\" />
                </div>
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["av2"]) ? $context["av2"] : $this->getContext($context, "av2")), "image", "ClubBundle\\Entity\\av2"), "html", null, true);
        echo "\" class=\"center-block\" width=\"100%\"/>
                    ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'errors');
        echo "
                    ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'widget', array("label" => false));
        echo "
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 92
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        
        $__internal_dbe72d401957b2a50b488ec2e33f0d634ce57cc234f869980df70ade523722aa->leave($__internal_dbe72d401957b2a50b488ec2e33f0d634ce57cc234f869980df70ade523722aa_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:av2:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 92,  246 => 86,  242 => 85,  238 => 84,  231 => 80,  227 => 79,  221 => 76,  211 => 69,  207 => 68,  200 => 66,  196 => 65,  192 => 64,  188 => 62,  182 => 61,  174 => 58,  161 => 51,  153 => 48,  147 => 47,  141 => 46,  130 => 40,  124 => 39,  118 => 38,  107 => 32,  101 => 31,  95 => 30,  89 => 29,  83 => 28,  77 => 27,  56 => 11,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
    <h1>mode édition</h1>

    {{ form_start(edit_form) }}
    {{ form_errors(edit_form) }}
    <h1><img src=\"{{ asset('bundles/club/img/signs.png') }}\" width=\"30px\" id=\"fireworks\" /> {{ av2.titleAv2 }}</h1>
    <span class=\"bold\">Titre</span>
    {{ form_errors(edit_form.titleAv2) }}
    {{ form_widget(edit_form.titleAv2) }}
    <input type=\"submit\" value=\"Modifier\" />
    <br><br>
    <div class=\"container-fluid\">
        <div class=\"row blockGray\">
            <div class=\"row\"><!--**************** 2ème bloc *****************-->
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <p>{{ av2.paragraphAv2|raw  }}</p>
                    <br>
                    <span class=\"bold\">Paragraphe</span>
                    {{ form_errors(edit_form.paragraphAv2) }}
                    {{ form_widget(edit_form.paragraphAv2) }}
                    <input type=\"submit\" value=\"Modifier\" />
                </div>
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <img src=\"{{ vich_uploader_asset(av2, 'image', 'ClubBundle\\\\Entity\\\\av2') }}\" class=\"center-block\" width=\"100%\"/>
                    {{ form_errors(edit_form.image) }}
                    {{ form_widget(edit_form.image, { label: false }) }}
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    {{ form_end(edit_form) }}
{% endblock %}
", "ClubBundle:av2:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/av2/edit.html.twig");
    }
}
