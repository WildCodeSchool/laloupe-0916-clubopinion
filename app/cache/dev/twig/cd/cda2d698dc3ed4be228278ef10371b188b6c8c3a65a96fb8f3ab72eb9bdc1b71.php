<?php

/* ClubBundle:evara:index.html.twig */
class __TwigTemplate_25a530ce608e6da2f47b4ae2fb7155e54788b2893dcad90bc588b38a8a5bde4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:evara:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45186ed530c72934656e104e93e13b0c6bffda47c01700bb8f347d15b17dc2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45186ed530c72934656e104e93e13b0c6bffda47c01700bb8f347d15b17dc2ce->enter($__internal_45186ed530c72934656e104e93e13b0c6bffda47c01700bb8f347d15b17dc2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:evara:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45186ed530c72934656e104e93e13b0c6bffda47c01700bb8f347d15b17dc2ce->leave($__internal_45186ed530c72934656e104e93e13b0c6bffda47c01700bb8f347d15b17dc2ce_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8366a448d45d3d5b499e012609ff422e2e1d5251eecb969ced04a503ac237ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8366a448d45d3d5b499e012609ff422e2e1d5251eecb969ced04a503ac237ed->enter($__internal_f8366a448d45d3d5b499e012609ff422e2e1d5251eecb969ced04a503ac237ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:evara:index.html.twig"));

        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evAras"]) ? $context["evAras"] : $this->getContext($context, "evAras")));
        foreach ($context['_seq'] as $context["_key"] => $context["evAra"]) {
            // line 7
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evAra"], "title", array()), "html", null, true);
            echo "</h1><br>
        <div class=\"row center-block row-diners\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["araEvenements"]) ? $context["araEvenements"] : $this->getContext($context, "araEvenements"))));
            foreach ($context['_seq'] as $context["_key"] => $context["araEvenement"]) {
                // line 10
                echo "
                <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        <div class=\"caption\">
                            ";
                // line 14
                if ($this->getAttribute($context["araEvenement"], "iname4", array())) {
                    // line 15
                    echo "                            <div class=\"image\" style=\"background-image: url(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image4", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo ")\"></div>
                            ";
                } else {
                }
                // line 17
                echo "                            <br><br>
                            <h4>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["araEvenement"], "title", array()), "html", null, true);
                echo "</h4>
                            <div class=\"contrainte\">
                                <p>";
                // line 20
                echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["araEvenement"], "paragraph", array()), 0, 200) . "..."), "html", null, true);
                echo "</p>
                            </div>
                            <br>
                            <a id=\"btn-photo\" data-toggle=\"modal\" data-target=\"";
                // line 23
                echo twig_escape_filter($this->env, ("#" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                echo "\"><p>Plus d'infos<span class=\"glyphicon glyphicon-share-alt\"></span></p></a>

                            <div class=\"modal fade\" id=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["araEvenement"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"evenementmodal\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">x</span></button>
                                            <h4 class=\"modal-title\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["araEvenement"], "title", array()), "html", null, true);
                echo "</h4>
                                        </div>
                                        <div class=\"modal-body\">
                                            <p>";
                // line 33
                echo $this->getAttribute($context["araEvenement"], "paragraph", array());
                echo "</p>
                                            <div id=\"";
                // line 34
                echo twig_escape_filter($this->env, ("carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                echo "\" class=\"carousel slide center-block\" data-ride=\"carousel\">
                                                <!-- Carousel Indicators -->
                                                <ol class=\"carousel-indicators\">
                                                    ";
                // line 37
                if ($this->getAttribute($context["araEvenement"], "iname", array())) {
                    // line 38
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"0\" class=\"active\"></li>
                                                    ";
                } else {
                }
                // line 40
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname2", array())) {
                    // line 41
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"1\"></li>
                                                    ";
                } else {
                }
                // line 43
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname3", array())) {
                    // line 44
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"2\"></li>
                                                    ";
                } else {
                }
                // line 46
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname4", array())) {
                    // line 47
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"3\"></li>
                                                    ";
                } else {
                }
                // line 49
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname5", array())) {
                    // line 50
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"4\"></li>
                                                    ";
                } else {
                }
                // line 52
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname6", array())) {
                    // line 53
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"5\"></li>
                                                    ";
                } else {
                }
                // line 55
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname7", array())) {
                    // line 56
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"6\"></li>
                                                    ";
                } else {
                }
                // line 58
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname8", array())) {
                    // line 59
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"7\"></li>
                                                    ";
                } else {
                }
                // line 61
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname9", array())) {
                    // line 62
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"8\"></li>
                                                    ";
                } else {
                }
                // line 64
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname10", array())) {
                    // line 65
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"9\"></li>
                                                    ";
                } else {
                }
                // line 67
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname11", array())) {
                    // line 68
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"10\"></li>
                                                    ";
                } else {
                }
                // line 70
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname12", array())) {
                    // line 71
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"11\"></li>
                                                    ";
                } else {
                }
                // line 73
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname13", array())) {
                    // line 74
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"12\"></li>
                                                    ";
                } else {
                }
                // line 76
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname14", array())) {
                    // line 77
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"13\"></li>
                                                    ";
                } else {
                }
                // line 79
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname15", array())) {
                    // line 80
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"14\"></li>
                                                    ";
                } else {
                }
                // line 82
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname16", array())) {
                    // line 83
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"15\"></li>
                                                    ";
                } else {
                }
                // line 85
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname17", array())) {
                    // line 86
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"16\"></li>
                                                    ";
                } else {
                }
                // line 88
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname18", array())) {
                    // line 89
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"17\"></li>
                                                    ";
                } else {
                }
                // line 91
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname19", array())) {
                    // line 92
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"18\"></li>
                                                    ";
                } else {
                }
                // line 94
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname20", array())) {
                    // line 95
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"19\"></li>
                                                    ";
                } else {
                }
                // line 97
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname21", array())) {
                    // line 98
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"20\"></li>
                                                    ";
                } else {
                }
                // line 100
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname22", array())) {
                    // line 101
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"21\"></li>
                                                    ";
                } else {
                }
                // line 103
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname23", array())) {
                    // line 104
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"22\"></li>
                                                    ";
                } else {
                }
                // line 106
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname24", array())) {
                    // line 107
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"23\"></li>
                                                    ";
                } else {
                }
                // line 109
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname25", array())) {
                    // line 110
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"24\"></li>
                                                    ";
                } else {
                }
                // line 112
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname26", array())) {
                    // line 113
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"25\"></li>
                                                    ";
                } else {
                }
                // line 115
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname27", array())) {
                    // line 116
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"26\"></li>
                                                    ";
                } else {
                }
                // line 118
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname28", array())) {
                    // line 119
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"27\"></li>
                                                    ";
                } else {
                }
                // line 121
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname29", array())) {
                    // line 122
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"28\"></li>
                                                    ";
                } else {
                }
                // line 124
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname30", array())) {
                    // line 125
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"29\"></li>
                                                    ";
                } else {
                }
                // line 127
                echo "                                                </ol>
                                                <!-- Carousel Wrapper -->
                                                <div class=\"carousel-inner\" role=\"listbox\">
                                                    ";
                // line 130
                if ($this->getAttribute($context["araEvenement"], "iname", array())) {
                    // line 131
                    echo "                                                        <div class=\"item active\">
                                                            <img src=\"";
                    // line 132
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 135
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname2", array())) {
                    // line 136
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 137
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image2", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 140
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname3", array())) {
                    // line 141
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image3", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 145
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname4", array())) {
                    // line 146
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 147
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image4", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 150
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname5", array())) {
                    // line 151
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 152
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image5", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 155
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname6", array())) {
                    // line 156
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 157
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image6", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 160
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname7", array())) {
                    // line 161
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 162
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image7", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 165
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname8", array())) {
                    // line 166
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 167
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image8", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 170
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname9", array())) {
                    // line 171
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 172
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image9", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 175
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname10", array())) {
                    // line 176
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 177
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image10", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 180
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname11", array())) {
                    // line 181
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 182
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image11", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 185
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname12", array())) {
                    // line 186
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 187
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image12", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 190
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname13", array())) {
                    // line 191
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 192
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image13", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 195
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname14", array())) {
                    // line 196
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 197
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image14", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 200
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname15", array())) {
                    // line 201
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 202
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image15", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 205
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname16", array())) {
                    // line 206
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 207
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image16", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 210
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname17", array())) {
                    // line 211
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 212
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image17", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 215
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname18", array())) {
                    // line 216
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image18", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 220
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname19", array())) {
                    // line 221
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 222
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image19", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 225
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname20", array())) {
                    // line 226
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 227
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image20", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 230
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname21", array())) {
                    // line 231
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 232
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image21", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 235
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname22", array())) {
                    // line 236
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 237
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image22", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 240
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname23", array())) {
                    // line 241
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 242
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image23", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 245
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname24", array())) {
                    // line 246
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 247
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image24", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 250
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname25", array())) {
                    // line 251
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 252
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image25", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 255
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname26", array())) {
                    // line 256
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 257
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image26", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 260
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname27", array())) {
                    // line 261
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 262
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image27", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 265
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname28", array())) {
                    // line 266
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 267
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image28", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 270
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname29", array())) {
                    // line 271
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 272
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image29", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 275
                echo "                                                    ";
                if ($this->getAttribute($context["araEvenement"], "iname30", array())) {
                    // line 276
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 277
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["araEvenement"], "image30", "ClubBundle\\Entity\\AraEvenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 280
                echo "                                                </div>

                                                <!-- Carousel Controls -->
                                                <a class=\"left carousel-control\" href=\"";
                // line 283
                echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                echo "\" role=\"button\" data-slide=\"prev\">
                                                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                                    <span class=\"sr-only\">Précédent</span>
                                                </a>
                                                <a class=\"right carousel-control\" href=\"";
                // line 287
                echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["araEvenement"], "id", array())), "html", null, true);
                echo "\" role=\"button\" data-slide=\"next\">
                                                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                                    <span class=\"sr-only\">Suivant</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->



                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['araEvenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evAra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f8366a448d45d3d5b499e012609ff422e2e1d5251eecb969ced04a503ac237ed->leave($__internal_f8366a448d45d3d5b499e012609ff422e2e1d5251eecb969ced04a503ac237ed_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:evara:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  842 => 303,  820 => 287,  813 => 283,  808 => 280,  801 => 277,  798 => 276,  795 => 275,  788 => 272,  785 => 271,  782 => 270,  775 => 267,  772 => 266,  769 => 265,  762 => 262,  759 => 261,  756 => 260,  749 => 257,  746 => 256,  743 => 255,  736 => 252,  733 => 251,  730 => 250,  723 => 247,  720 => 246,  717 => 245,  710 => 242,  707 => 241,  704 => 240,  697 => 237,  694 => 236,  691 => 235,  684 => 232,  681 => 231,  678 => 230,  671 => 227,  668 => 226,  665 => 225,  658 => 222,  655 => 221,  652 => 220,  645 => 217,  642 => 216,  639 => 215,  632 => 212,  629 => 211,  626 => 210,  619 => 207,  616 => 206,  613 => 205,  606 => 202,  603 => 201,  600 => 200,  593 => 197,  590 => 196,  587 => 195,  580 => 192,  577 => 191,  574 => 190,  567 => 187,  564 => 186,  561 => 185,  554 => 182,  551 => 181,  548 => 180,  541 => 177,  538 => 176,  535 => 175,  528 => 172,  525 => 171,  522 => 170,  515 => 167,  512 => 166,  509 => 165,  502 => 162,  499 => 161,  496 => 160,  489 => 157,  486 => 156,  483 => 155,  476 => 152,  473 => 151,  470 => 150,  463 => 147,  460 => 146,  457 => 145,  450 => 142,  447 => 141,  444 => 140,  437 => 137,  434 => 136,  431 => 135,  424 => 132,  421 => 131,  419 => 130,  414 => 127,  407 => 125,  404 => 124,  397 => 122,  394 => 121,  387 => 119,  384 => 118,  377 => 116,  374 => 115,  367 => 113,  364 => 112,  357 => 110,  354 => 109,  347 => 107,  344 => 106,  337 => 104,  334 => 103,  327 => 101,  324 => 100,  317 => 98,  314 => 97,  307 => 95,  304 => 94,  297 => 92,  294 => 91,  287 => 89,  284 => 88,  277 => 86,  274 => 85,  267 => 83,  264 => 82,  257 => 80,  254 => 79,  247 => 77,  244 => 76,  237 => 74,  234 => 73,  227 => 71,  224 => 70,  217 => 68,  214 => 67,  207 => 65,  204 => 64,  197 => 62,  194 => 61,  187 => 59,  184 => 58,  177 => 56,  174 => 55,  167 => 53,  164 => 52,  157 => 50,  154 => 49,  147 => 47,  144 => 46,  137 => 44,  134 => 43,  127 => 41,  124 => 40,  117 => 38,  115 => 37,  109 => 34,  105 => 33,  99 => 30,  91 => 25,  86 => 23,  80 => 20,  75 => 18,  72 => 17,  65 => 15,  63 => 14,  57 => 10,  53 => 9,  47 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
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


{% block body %}

    {% for evAra in evAras %}
        <h1>{{ evAra.title }}</h1><br>
        <div class=\"row center-block row-diners\">
            {% for araEvenement in araEvenements|reverse %}

                <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        <div class=\"caption\">
                            {% if araEvenement.iname4 %}
                            <div class=\"image\" style=\"background-image: url({{ vich_uploader_asset(araEvenement, 'image4', 'ClubBundle\\\\Entity\\\\AraEvenements') }})\"></div>
                            {% else %}{% endif %}
                            <br><br>
                            <h4>{{ araEvenement.title }}</h4>
                            <div class=\"contrainte\">
                                <p>{{ araEvenement.paragraph|raw[:200] ~ '...' }}</p>
                            </div>
                            <br>
                            <a id=\"btn-photo\" data-toggle=\"modal\" data-target=\"{{ '#' ~ araEvenement.id }}\"><p>Plus d'infos<span class=\"glyphicon glyphicon-share-alt\"></span></p></a>

                            <div class=\"modal fade\" id=\"{{ araEvenement.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"evenementmodal\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">x</span></button>
                                            <h4 class=\"modal-title\">{{ araEvenement.title }}</h4>
                                        </div>
                                        <div class=\"modal-body\">
                                            <p>{{ araEvenement.paragraph|raw }}</p>
                                            <div id=\"{{ 'carousel-evenement' ~ araEvenement.id }}\" class=\"carousel slide center-block\" data-ride=\"carousel\">
                                                <!-- Carousel Indicators -->
                                                <ol class=\"carousel-indicators\">
                                                    {% if araEvenement.iname %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"0\" class=\"active\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname2 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"1\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname3 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"2\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname4 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"3\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname5 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"4\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname6 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"5\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname7 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"6\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname8 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"7\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname9 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"8\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname10 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"9\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname11 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"10\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname12 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"11\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname13 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"12\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname14 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"13\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname15 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"14\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname16 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"15\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname17 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"16\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname18 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"17\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname19 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"18\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname20 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"19\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname21 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"20\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname22 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"21\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname23 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"22\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname24 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"23\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname25 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"24\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname26 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"25\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname27 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"26\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname28 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"27\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname29 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"28\"></li>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname30 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" data-slide-to=\"29\"></li>
                                                    {% else %}{% endif %}
                                                </ol>
                                                <!-- Carousel Wrapper -->
                                                <div class=\"carousel-inner\" role=\"listbox\">
                                                    {% if araEvenement.iname %}
                                                        <div class=\"item active\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname2 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image2', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname3 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image3', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname4 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image4', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname5 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image5', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname6 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image6', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname7 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image7', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname8 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image8', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname9 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image9', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname10 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image10', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname11 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image11', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname12 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image12', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname13 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image13', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname14 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image14', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname15 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image15', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname16 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image16', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname17 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image17', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname18 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image18', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname19 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image19', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname20 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image20', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname21 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image21', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname22 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image22', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname23 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image23', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname24 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image24', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname25 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image25', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname26 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image26', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname27 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image27', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname28 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image28', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname29 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image29', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if araEvenement.iname30 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(araEvenement, 'image30', 'ClubBundle\\\\Entity\\\\AraEvenements') }}\" alt=\"\" class=\"img-responsive center-block\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                </div>

                                                <!-- Carousel Controls -->
                                                <a class=\"left carousel-control\" href=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" role=\"button\" data-slide=\"prev\">
                                                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                                    <span class=\"sr-only\">Précédent</span>
                                                </a>
                                                <a class=\"right carousel-control\" href=\"{{ '#carousel-evenement' ~ araEvenement.id }}\" role=\"button\" data-slide=\"next\">
                                                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                                    <span class=\"sr-only\">Suivant</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->



                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endfor %}
{% endblock %}
", "ClubBundle:evara:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/evara/index.html.twig");
    }
}
