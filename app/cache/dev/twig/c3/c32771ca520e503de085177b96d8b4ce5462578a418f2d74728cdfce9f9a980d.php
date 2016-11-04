<?php

/* ClubBundle:presentation:edit.html.twig */
class __TwigTemplate_bab6632ed4b8f069084fa964a01f44ee8ee254924c4f23d97b4af64facba2053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:presentation:edit.html.twig", 1);
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
        $__internal_79aaed8a0409ec5c4adfded8b30bfff33fb258b78d2712984fca78527e36fcd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79aaed8a0409ec5c4adfded8b30bfff33fb258b78d2712984fca78527e36fcd7->enter($__internal_79aaed8a0409ec5c4adfded8b30bfff33fb258b78d2712984fca78527e36fcd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:presentation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79aaed8a0409ec5c4adfded8b30bfff33fb258b78d2712984fca78527e36fcd7->leave($__internal_79aaed8a0409ec5c4adfded8b30bfff33fb258b78d2712984fca78527e36fcd7_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_97d7b225cf02aa76f05879a399ac07b981c77607a6964cc2320ad4bba65577e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d7b225cf02aa76f05879a399ac07b981c77607a6964cc2320ad4bba65577e1->enter($__internal_97d7b225cf02aa76f05879a399ac07b981c77607a6964cc2320ad4bba65577e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:presentation:edit.html.twig"));

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
        
        $__internal_97d7b225cf02aa76f05879a399ac07b981c77607a6964cc2320ad4bba65577e1->leave($__internal_97d7b225cf02aa76f05879a399ac07b981c77607a6964cc2320ad4bba65577e1_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_86a74d7d23f83edbc13fb737c2dc56c34ea22a780f7daf28f94de579fa42d2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a74d7d23f83edbc13fb737c2dc56c34ea22a780f7daf28f94de579fa42d2fa->enter($__internal_86a74d7d23f83edbc13fb737c2dc56c34ea22a780f7daf28f94de579fa42d2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:presentation:edit.html.twig"));

        // line 63
        echo "    <h1>mode édition</h1>
    ";
        // line 64
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

    <h1>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presentation"]) ? $context["presentation"] : $this->getContext($context, "presentation")), "title", array()), "html", null, true);
        echo "</h1>
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
    <br><br>
    <div class=\"container-fluid\">
        <div class=\"row blockGray homepageBlock\"><!--******************* 1er bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["presentation"]) ? $context["presentation"] : $this->getContext($context, "presentation")), "image", "ClubBundle\\Entity\\presentation"), "html", null, true);
        echo "\" class=\"center-block\" width=\"100%\"/>
                ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'errors');
        echo "
                ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'widget', array("label" => false));
        echo "
                <br><br>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presentation"]) ? $context["presentation"] : $this->getContext($context, "presentation")), "soustitre1", array()), "html", null, true);
        echo "</h2>
                <span class=\"bold\">Sous-titre 1</span>
                ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre1", array()), 'errors');
        echo "
                ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre1", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Edit\" />
                <br><br>
                <p>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presentation"]) ? $context["presentation"] : $this->getContext($context, "presentation")), "paragraph1", array()), "html", null, true);
        echo "</p>
                <br>
                <span class=\"bold\">Paragraphe 1</span>
                ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paragraph1", array()), 'errors');
        echo "
                ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paragraph1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <input type=\"submit\" value=\"Edit\" />

            </div>
        </div>
        <div class=\"row homepageBlock\"><!--**************** 2ème bloc *****************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presentation"]) ? $context["presentation"] : $this->getContext($context, "presentation")), "soustitre2", array()), "html", null, true);
        echo "</h2>
                <span class=\"bold\">Sous-titre 2</span>
                ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre2", array()), 'errors');
        echo "
                ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "soustitre2", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Edit\" />
                <br><br>
                <p>";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["presentation"]) ? $context["presentation"] : $this->getContext($context, "presentation")), "paragraph2", array()), "html", null, true);
        echo "</p>
                <br>
                <span class=\"bold\">Paragraphe 2</span>
                ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paragraph2", array()), 'errors');
        echo "
                ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paragraph2", array()), 'widget');
        echo "
                <input type=\"submit\" value=\"Edit\" />
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset((isset($context["presentation"]) ? $context["presentation"] : $this->getContext($context, "presentation")), "image2", "ClubBundle\\Entity\\presentation"), "html", null, true);
        echo "\" class=\"center-block\" width=\"100%\"/>
                ";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image2", array()), 'errors');
        echo "
                ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image2", array()), 'widget', array("label" => false));
        echo "
                <br><br>
            </div>
        </div>
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation_index");
        echo "\" class=\"lienRouge\">Retour à la page visiteur</a>
        </li>
    </ul>

    ";
        // line 126
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

";
        
        $__internal_86a74d7d23f83edbc13fb737c2dc56c34ea22a780f7daf28f94de579fa42d2fa->leave($__internal_86a74d7d23f83edbc13fb737c2dc56c34ea22a780f7daf28f94de579fa42d2fa_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:presentation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 126,  318 => 122,  308 => 115,  304 => 114,  300 => 113,  293 => 109,  289 => 108,  283 => 105,  277 => 102,  273 => 101,  268 => 99,  258 => 92,  254 => 91,  248 => 88,  242 => 85,  238 => 84,  233 => 82,  226 => 78,  222 => 77,  218 => 76,  209 => 70,  205 => 69,  200 => 67,  195 => 65,  191 => 64,  188 => 63,  182 => 62,  174 => 58,  161 => 51,  153 => 48,  147 => 47,  141 => 46,  130 => 40,  124 => 39,  118 => 38,  107 => 32,  101 => 31,  95 => 30,  89 => 29,  83 => 28,  77 => 27,  56 => 11,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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

    <h1>{{ presentation.title }}</h1>
    <span class=\"bold\">Titre</span>
    {{ form_errors(edit_form.title) }}
    {{ form_widget(edit_form.title) }}
    <input type=\"submit\" value=\"Edit\" />
    <br><br>
    <div class=\"container-fluid\">
        <div class=\"row blockGray homepageBlock\"><!--******************* 1er bloc ***************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"{{ vich_uploader_asset(presentation, 'image', 'ClubBundle\\\\Entity\\\\presentation') }}\" class=\"center-block\" width=\"100%\"/>
                {{ form_errors(edit_form.image ) }}
                {{ form_widget(edit_form.image, { label: false }  ) }}
                <br><br>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>{{ presentation.soustitre1 }}</h2>
                <span class=\"bold\">Sous-titre 1</span>
                {{ form_errors(edit_form.soustitre1) }}
                {{ form_widget(edit_form.soustitre1) }}
                <input type=\"submit\" value=\"Edit\" />
                <br><br>
                <p>{{ presentation.paragraph1 }}</p>
                <br>
                <span class=\"bold\">Paragraphe 1</span>
                {{ form_errors(edit_form.paragraph1) }}
                {{ form_widget(edit_form.paragraph1,{'attr':{'class':'form-control'}}) }}
                <input type=\"submit\" value=\"Edit\" />

            </div>
        </div>
        <div class=\"row homepageBlock\"><!--**************** 2ème bloc *****************-->
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>{{ presentation.soustitre2 }}</h2>
                <span class=\"bold\">Sous-titre 2</span>
                {{ form_errors(edit_form.soustitre2) }}
                {{ form_widget(edit_form.soustitre2) }}
                <input type=\"submit\" value=\"Edit\" />
                <br><br>
                <p>{{ presentation.paragraph2 }}</p>
                <br>
                <span class=\"bold\">Paragraphe 2</span>
                {{ form_errors(edit_form.paragraph2) }}
                {{ form_widget(edit_form.paragraph2) }}
                <input type=\"submit\" value=\"Edit\" />
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"{{ vich_uploader_asset(presentation, 'image2', 'ClubBundle\\\\Entity\\\\presentation') }}\" class=\"center-block\" width=\"100%\"/>
                {{ form_errors(edit_form.image2 ) }}
                {{ form_widget(edit_form.image2, { label: false }  ) }}
                <br><br>
            </div>
        </div>
    </div>
    <ul>
        <li>
            <a href=\"{{ path('presentation_index') }}\" class=\"lienRouge\">Retour à la page visiteur</a>
        </li>
    </ul>

    {{ form_end(edit_form) }}

{% endblock %}
", "ClubBundle:presentation:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/presentation/edit.html.twig");
    }
}
