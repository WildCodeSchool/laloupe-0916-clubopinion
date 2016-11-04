<?php

/* ClubBundle:pagemembre:edit.html.twig */
class __TwigTemplate_25b1c944af48a405f6e9882dc38f588e6aa85d0a2de0b4ff00d409cb9a8693a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:pagemembre:edit.html.twig", 1);
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
        $__internal_1ece706046e722754ab49be8d1bf7f24fb756c35342a46ee05e3aac914d2c0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ece706046e722754ab49be8d1bf7f24fb756c35342a46ee05e3aac914d2c0c6->enter($__internal_1ece706046e722754ab49be8d1bf7f24fb756c35342a46ee05e3aac914d2c0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:pagemembre:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ece706046e722754ab49be8d1bf7f24fb756c35342a46ee05e3aac914d2c0c6->leave($__internal_1ece706046e722754ab49be8d1bf7f24fb756c35342a46ee05e3aac914d2c0c6_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_666360992022fa0d8b1708b73a6d82711eaab87f5bda00aa37a31a9fd96824a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666360992022fa0d8b1708b73a6d82711eaab87f5bda00aa37a31a9fd96824a9->enter($__internal_666360992022fa0d8b1708b73a6d82711eaab87f5bda00aa37a31a9fd96824a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:pagemembre:edit.html.twig"));

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
        
        $__internal_666360992022fa0d8b1708b73a6d82711eaab87f5bda00aa37a31a9fd96824a9->leave($__internal_666360992022fa0d8b1708b73a6d82711eaab87f5bda00aa37a31a9fd96824a9_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_4627de15376e5cbca47339c7d70556044ca627664d81db10cd1672c8382f1a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4627de15376e5cbca47339c7d70556044ca627664d81db10cd1672c8382f1a22->enter($__internal_4627de15376e5cbca47339c7d70556044ca627664d81db10cd1672c8382f1a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:pagemembre:edit.html.twig"));

        // line 62
        echo "    <h1>Mode édition</h1>

    ";
        // line 64
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
        <h1>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageMembre"]) ? $context["pageMembre"] : $this->getContext($context, "pageMembre")), "title", array()), "html", null, true);
        echo "</h1><br>
        <span class=\"bold\">Titre</span>
        ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "
        ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
        <input type=\"submit\" value=\"Modifier\" />
    ";
        // line 71
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <br>

        <div class=\"row center-block row-diners\">
            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres"))));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 77
            echo "                <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        ";
            // line 79
            if ($this->getAttribute($context["membre"], "iname", array())) {
                // line 80
                echo "                            <div class=\"image\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["membre"], "image", "ClubBundle\\Entity\\Membres"), "html", null, true);
                echo ")\"></div>
                        ";
            } else {
                // line 82
                echo "                        ";
            }
            // line 83
            echo "                        <div class=\"caption\">
                            <h4>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "name", array()), "html", null, true);
            echo "</h4>
                            <div class=\"contrainte-membre\">
                                <p>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "description", array()), "html", null, true);
            echo "</p>
                            </div>
                            <br>
                            <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membres_edit", array("id" => $this->getAttribute($context["membre"], "id", array()))), "html", null, true);
            echo "\" class=\"lienRouge\">Modifier</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "

            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                <div class=\"thumbnail\" id=\"thumbnail-membre\">
                    <div class=\"caption\">
                        ";
        // line 99
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "image", array()), 'errors');
        echo "
                                    ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "image", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <br>
                            <span class=\"bold\">Nom</span><br>
                            ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "name", array()), 'errors');
        echo "
                            ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "name", array()), 'widget');
        echo "
                            <br>
                            <span class=\"bold\">Description</span><br>
                            ";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "description", array()), 'errors');
        echo "
                            ";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), "description", array()), 'widget');
        echo "
                            <br><br>
                            <input type=\"submit\" value=\"Créer\" />
                        ";
        // line 116
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newForm"]) ? $context["newForm"] : $this->getContext($context, "newForm")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    <a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagemembre_index");
        echo "\" class=\"lienRouge\">Retour à la page visiteur</a>



";
        
        $__internal_4627de15376e5cbca47339c7d70556044ca627664d81db10cd1672c8382f1a22->leave($__internal_4627de15376e5cbca47339c7d70556044ca627664d81db10cd1672c8382f1a22_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:pagemembre:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 121,  311 => 116,  305 => 113,  301 => 112,  295 => 109,  291 => 108,  283 => 103,  279 => 102,  273 => 99,  266 => 94,  255 => 89,  249 => 86,  244 => 84,  241 => 83,  238 => 82,  232 => 80,  230 => 79,  226 => 77,  222 => 76,  214 => 71,  209 => 69,  205 => 68,  200 => 66,  196 => 65,  192 => 64,  188 => 62,  182 => 61,  174 => 58,  161 => 51,  153 => 48,  147 => 47,  141 => 46,  130 => 40,  124 => 39,  118 => 38,  107 => 32,  101 => 31,  95 => 30,  89 => 29,  83 => 28,  77 => 27,  56 => 11,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
        <h1>{{ pageMembre.title }}</h1><br>
        <span class=\"bold\">Titre</span>
        {{ form_errors(edit_form.title) }}
        {{ form_widget(edit_form.title) }}
        <input type=\"submit\" value=\"Modifier\" />
    {{ form_end(edit_form) }}

    <br>

        <div class=\"row center-block row-diners\">
            {% for membre in membres|reverse %}
                <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        {% if membre.iname %}
                            <div class=\"image\" style=\"background-image: url({{ vich_uploader_asset(membre, 'image', 'ClubBundle\\\\Entity\\\\Membres') }})\"></div>
                        {% else %}
                        {% endif %}
                        <div class=\"caption\">
                            <h4>{{ membre.name }}</h4>
                            <div class=\"contrainte-membre\">
                                <p>{{ membre.description }}</p>
                            </div>
                            <br>
                            <a href=\"{{ path('membres_edit', { 'id': membre.id }) }}\" class=\"lienRouge\">Modifier</a>
                        </div>
                    </div>
                </div>
            {% endfor %}


            <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                <div class=\"thumbnail\" id=\"thumbnail-membre\">
                    <div class=\"caption\">
                        {{ form_start(newForm) }}
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    {{ form_errors(newForm.image) }}
                                    {{ form_widget(newForm.image) }}
                                </div>
                            </div>
                            <br>
                            <span class=\"bold\">Nom</span><br>
                            {{ form_errors(newForm.name) }}
                            {{ form_widget(newForm.name) }}
                            <br>
                            <span class=\"bold\">Description</span><br>
                            {{ form_errors(newForm.description) }}
                            {{ form_widget(newForm.description) }}
                            <br><br>
                            <input type=\"submit\" value=\"Créer\" />
                        {{ form_end(newForm) }}
                    </div>
                </div>
            </div>
        </div>
    <a href=\"{{ path('pagemembre_index') }}\" class=\"lienRouge\">Retour à la page visiteur</a>



{% endblock %}
", "ClubBundle:pagemembre:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/pagemembre/edit.html.twig");
    }
}
