<?php

/* ClubBundle:membres:edit.html.twig */
class __TwigTemplate_6c7b2e77fe7fdbaf08851c1c49812c42b845669a9c5d84aea26419b5beba1dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:membres:edit.html.twig", 1);
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
        $__internal_3c2a302500f90bab0d939d60a66bea31eba02ee819d3b881d8e4e0db63f6754a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2a302500f90bab0d939d60a66bea31eba02ee819d3b881d8e4e0db63f6754a->enter($__internal_3c2a302500f90bab0d939d60a66bea31eba02ee819d3b881d8e4e0db63f6754a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:membres:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c2a302500f90bab0d939d60a66bea31eba02ee819d3b881d8e4e0db63f6754a->leave($__internal_3c2a302500f90bab0d939d60a66bea31eba02ee819d3b881d8e4e0db63f6754a_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_2a730eed8b0b0c02a2517cc4d10d1969daa96b151a9ebf8aa6b13f3a41b0d621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a730eed8b0b0c02a2517cc4d10d1969daa96b151a9ebf8aa6b13f3a41b0d621->enter($__internal_2a730eed8b0b0c02a2517cc4d10d1969daa96b151a9ebf8aa6b13f3a41b0d621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:membres:edit.html.twig"));

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
        
        $__internal_2a730eed8b0b0c02a2517cc4d10d1969daa96b151a9ebf8aa6b13f3a41b0d621->leave($__internal_2a730eed8b0b0c02a2517cc4d10d1969daa96b151a9ebf8aa6b13f3a41b0d621_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9600756fc7b70882b2ff13c36a7f1252e90f0a6d050b85de764d613e15eb811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9600756fc7b70882b2ff13c36a7f1252e90f0a6d050b85de764d613e15eb811->enter($__internal_a9600756fc7b70882b2ff13c36a7f1252e90f0a6d050b85de764d613e15eb811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:membres:edit.html.twig"));

        // line 62
        echo "    <h1>Modifier un membre</h1>

    ";
        // line 64
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        <span class=\"bold\">Nom</span><br>
        ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'errors');
        echo "
        ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo "
        <br><br>
        <span class=\"bold\">Description</span><br>
        ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "
        ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
        <br><br>
        ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'errors');
        echo "
        ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'widget');
        echo "
        <br><br>
        <input type=\"submit\" value=\"Modifier\" />
    ";
        // line 77
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    <br>
    ";
        // line 79
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <input type=\"submit\" value=\"Supprimer\">
    ";
        // line 81
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    <br>
    <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagemembre_edit", array("id" => 1));
        echo "\" class=\"lienRouge\">Retour à la page précédente</a>
    <br>

";
        
        $__internal_a9600756fc7b70882b2ff13c36a7f1252e90f0a6d050b85de764d613e15eb811->leave($__internal_a9600756fc7b70882b2ff13c36a7f1252e90f0a6d050b85de764d613e15eb811_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:membres:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 83,  236 => 81,  231 => 79,  226 => 77,  220 => 74,  216 => 73,  211 => 71,  207 => 70,  201 => 67,  197 => 66,  192 => 64,  188 => 62,  182 => 61,  174 => 58,  161 => 51,  153 => 48,  147 => 47,  141 => 46,  130 => 40,  124 => 39,  118 => 38,  107 => 32,  101 => 31,  95 => 30,  89 => 29,  83 => 28,  77 => 27,  56 => 11,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
    <h1>Modifier un membre</h1>

    {{ form_start(edit_form) }}
        <span class=\"bold\">Nom</span><br>
        {{ form_errors(edit_form.name) }}
        {{ form_widget(edit_form.name) }}
        <br><br>
        <span class=\"bold\">Description</span><br>
        {{ form_errors(edit_form.description) }}
        {{ form_widget(edit_form.description) }}
        <br><br>
        {{ form_errors(edit_form.image) }}
        {{ form_widget(edit_form.image) }}
        <br><br>
        <input type=\"submit\" value=\"Modifier\" />
    {{ form_end(edit_form) }}
    <br>
    {{ form_start(delete_form) }}
    <input type=\"submit\" value=\"Supprimer\">
    {{ form_end(delete_form) }}
    <br>
    <a href=\"{{ path('pagemembre_edit', { 'id': 1 }) }}\" class=\"lienRouge\">Retour à la page précédente</a>
    <br>

{% endblock %}
", "ClubBundle:membres:edit.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/membres/edit.html.twig");
    }
}
