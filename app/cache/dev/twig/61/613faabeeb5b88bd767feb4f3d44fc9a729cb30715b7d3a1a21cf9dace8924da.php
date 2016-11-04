<?php

/* ClubBundle:evsup:index.html.twig */
class __TwigTemplate_91c1d62737e911e0b59678a45d1248e718fd57080bb32e51b8bcbfe4d8724892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:evsup:index.html.twig", 1);
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
        $__internal_59331739edb256b0d26b67eb9eae8c7220ad97a8fb586c2c7ea2fb8bc86e094c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59331739edb256b0d26b67eb9eae8c7220ad97a8fb586c2c7ea2fb8bc86e094c->enter($__internal_59331739edb256b0d26b67eb9eae8c7220ad97a8fb586c2c7ea2fb8bc86e094c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:evsup:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59331739edb256b0d26b67eb9eae8c7220ad97a8fb586c2c7ea2fb8bc86e094c->leave($__internal_59331739edb256b0d26b67eb9eae8c7220ad97a8fb586c2c7ea2fb8bc86e094c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_264ef3d820c74704b4e57237f072c1eb38fda301b0dc163c390e42e4801c6fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264ef3d820c74704b4e57237f072c1eb38fda301b0dc163c390e42e4801c6fa2->enter($__internal_264ef3d820c74704b4e57237f072c1eb38fda301b0dc163c390e42e4801c6fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:evsup:index.html.twig"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evSups"]) ? $context["evSups"] : $this->getContext($context, "evSups")));
        foreach ($context['_seq'] as $context["_key"] => $context["evSup"]) {
            // line 6
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evSup"], "title", array()), "html", null, true);
            echo "</h1><br>
        <div class=\"row center-block row-diners\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["supEvenements"]) ? $context["supEvenements"] : $this->getContext($context, "supEvenements"))));
            foreach ($context['_seq'] as $context["_key"] => $context["supEvenement"]) {
                // line 9
                echo "
                <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        <div class=\"caption\">
                            ";
                // line 13
                if ($this->getAttribute($context["supEvenement"], "iname4", array())) {
                    // line 14
                    echo "                            <div class=\"image\" style=\"background-image: url(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image4", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo ")\"></div>
                            ";
                } else {
                }
                // line 16
                echo "                            <br><br>
                            <h4>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["supEvenement"], "title", array()), "html", null, true);
                echo "</h4>
                            <div class=\"contrainte\">
                                <p>";
                // line 19
                echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["supEvenement"], "paragraph", array()), 0, 200) . "..."), "html", null, true);
                echo "</p>
                            </div>
                            <br>
                            <a id=\"btn-photo\" data-toggle=\"modal\" data-target=\"";
                // line 22
                echo twig_escape_filter($this->env, ("#" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                echo "\"><p>Plus d'infos<span class=\"glyphicon glyphicon-share-alt\"></span></p></a>

                            <div class=\"modal fade\" id=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["supEvenement"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"evenementmodal\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">x</span></button>
                                            <h4 class=\"modal-title\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["supEvenement"], "title", array()), "html", null, true);
                echo "</h4>
                                        </div>
                                        <div class=\"modal-body\">
                                            <p>";
                // line 32
                echo $this->getAttribute($context["supEvenement"], "paragraph", array());
                echo "</p>
                                            <div id=\"";
                // line 33
                echo twig_escape_filter($this->env, ("carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                echo "\" class=\"carousel slide center-block\" data-ride=\"carousel\">
                                                <!-- Carousel Indicators -->
                                                <ol class=\"carousel-indicators\">
                                                    ";
                // line 36
                if ($this->getAttribute($context["supEvenement"], "iname", array())) {
                    // line 37
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"0\" class=\"active\"></li>
                                                    ";
                } else {
                }
                // line 39
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname2", array())) {
                    // line 40
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"1\"></li>
                                                    ";
                } else {
                }
                // line 42
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname3", array())) {
                    // line 43
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"2\"></li>
                                                    ";
                } else {
                }
                // line 45
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname4", array())) {
                    // line 46
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"3\"></li>
                                                    ";
                } else {
                }
                // line 48
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname5", array())) {
                    // line 49
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"4\"></li>
                                                    ";
                } else {
                }
                // line 51
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname6", array())) {
                    // line 52
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"5\"></li>
                                                    ";
                } else {
                }
                // line 54
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname7", array())) {
                    // line 55
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"6\"></li>
                                                    ";
                } else {
                }
                // line 57
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname8", array())) {
                    // line 58
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"7\"></li>
                                                    ";
                } else {
                }
                // line 60
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname9", array())) {
                    // line 61
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"8\"></li>
                                                    ";
                } else {
                }
                // line 63
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname10", array())) {
                    // line 64
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"9\"></li>
                                                    ";
                } else {
                }
                // line 66
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname11", array())) {
                    // line 67
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"10\"></li>
                                                    ";
                } else {
                }
                // line 69
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname12", array())) {
                    // line 70
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"11\"></li>
                                                    ";
                } else {
                }
                // line 72
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname13", array())) {
                    // line 73
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"12\"></li>
                                                    ";
                } else {
                }
                // line 75
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname14", array())) {
                    // line 76
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"13\"></li>
                                                    ";
                } else {
                }
                // line 78
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname15", array())) {
                    // line 79
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"14\"></li>
                                                    ";
                } else {
                }
                // line 81
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname16", array())) {
                    // line 82
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"15\"></li>
                                                    ";
                } else {
                }
                // line 84
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname17", array())) {
                    // line 85
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"16\"></li>
                                                    ";
                } else {
                }
                // line 87
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname18", array())) {
                    // line 88
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"17\"></li>
                                                    ";
                } else {
                }
                // line 90
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname19", array())) {
                    // line 91
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"18\"></li>
                                                    ";
                } else {
                }
                // line 93
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname20", array())) {
                    // line 94
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"19\"></li>
                                                    ";
                } else {
                }
                // line 96
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname21", array())) {
                    // line 97
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"20\"></li>
                                                    ";
                } else {
                }
                // line 99
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname22", array())) {
                    // line 100
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"21\"></li>
                                                    ";
                } else {
                }
                // line 102
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname23", array())) {
                    // line 103
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"22\"></li>
                                                    ";
                } else {
                }
                // line 105
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname24", array())) {
                    // line 106
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"23\"></li>
                                                    ";
                } else {
                }
                // line 108
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname25", array())) {
                    // line 109
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"24\"></li>
                                                    ";
                } else {
                }
                // line 111
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname26", array())) {
                    // line 112
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"25\"></li>
                                                    ";
                } else {
                }
                // line 114
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname27", array())) {
                    // line 115
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"26\"></li>
                                                    ";
                } else {
                }
                // line 117
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname28", array())) {
                    // line 118
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"27\"></li>
                                                    ";
                } else {
                }
                // line 120
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname29", array())) {
                    // line 121
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"28\"></li>
                                                    ";
                } else {
                }
                // line 123
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname30", array())) {
                    // line 124
                    echo "                                                        <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"29\"></li>
                                                    ";
                } else {
                }
                // line 126
                echo "                                                </ol>
                                                <!-- Carousel Wrapper -->
                                                <div class=\"carousel-inner\" role=\"listbox\">
                                                    ";
                // line 129
                if ($this->getAttribute($context["supEvenement"], "iname", array())) {
                    // line 130
                    echo "                                                        <div class=\"item active\">
                                                            <img src=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 134
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname2", array())) {
                    // line 135
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image2", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 139
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname3", array())) {
                    // line 140
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 141
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image3", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 144
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname4", array())) {
                    // line 145
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 146
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image4", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 149
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname5", array())) {
                    // line 150
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 151
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image5", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 154
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname6", array())) {
                    // line 155
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 156
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image6", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 159
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname7", array())) {
                    // line 160
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 161
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image7", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 164
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname8", array())) {
                    // line 165
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 166
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image8", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 169
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname9", array())) {
                    // line 170
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 171
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image9", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 174
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname10", array())) {
                    // line 175
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 176
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image10", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 179
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname11", array())) {
                    // line 180
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 181
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image11", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 184
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname12", array())) {
                    // line 185
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 186
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image12", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 189
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname13", array())) {
                    // line 190
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 191
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image13", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 194
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname14", array())) {
                    // line 195
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 196
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image14", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 199
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname15", array())) {
                    // line 200
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 201
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image15", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 204
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname16", array())) {
                    // line 205
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 206
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image16", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 209
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname17", array())) {
                    // line 210
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 211
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image17", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 214
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname18", array())) {
                    // line 215
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 216
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image18", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 219
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname19", array())) {
                    // line 220
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 221
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image19", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 224
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname20", array())) {
                    // line 225
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 226
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image20", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 229
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname21", array())) {
                    // line 230
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 231
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image21", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 234
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname22", array())) {
                    // line 235
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 236
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image22", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 239
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname23", array())) {
                    // line 240
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 241
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image23", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 244
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname24", array())) {
                    // line 245
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 246
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image24", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 249
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname25", array())) {
                    // line 250
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 251
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image25", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 254
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname26", array())) {
                    // line 255
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 256
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image26", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 259
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname27", array())) {
                    // line 260
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 261
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image27", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 264
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname28", array())) {
                    // line 265
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 266
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image28", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 269
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname29", array())) {
                    // line 270
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 271
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image29", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 274
                echo "                                                    ";
                if ($this->getAttribute($context["supEvenement"], "iname30", array())) {
                    // line 275
                    echo "                                                        <div class=\"item\">
                                                            <img src=\"";
                    // line 276
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["supEvenement"], "image30", "ClubBundle\\Entity\\SupEvenements"), "html", null, true);
                    echo "\" alt=\"\">
                                                        </div>
                                                    ";
                } else {
                }
                // line 279
                echo "                                                </div>

                                                <!-- Carousel Controls -->
                                                <a class=\"left carousel-control\" href=\"";
                // line 282
                echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
                echo "\" role=\"button\" data-slide=\"prev\">
                                                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                                    <span class=\"sr-only\">Précédent</span>
                                                </a>
                                                <a class=\"right carousel-control\" href=\"";
                // line 286
                echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["supEvenement"], "id", array())), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supEvenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evSup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        echo "

";
        
        $__internal_264ef3d820c74704b4e57237f072c1eb38fda301b0dc163c390e42e4801c6fa2->leave($__internal_264ef3d820c74704b4e57237f072c1eb38fda301b0dc163c390e42e4801c6fa2_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:evsup:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  850 => 305,  843 => 303,  820 => 286,  813 => 282,  808 => 279,  801 => 276,  798 => 275,  795 => 274,  788 => 271,  785 => 270,  782 => 269,  775 => 266,  772 => 265,  769 => 264,  762 => 261,  759 => 260,  756 => 259,  749 => 256,  746 => 255,  743 => 254,  736 => 251,  733 => 250,  730 => 249,  723 => 246,  720 => 245,  717 => 244,  710 => 241,  707 => 240,  704 => 239,  697 => 236,  694 => 235,  691 => 234,  684 => 231,  681 => 230,  678 => 229,  671 => 226,  668 => 225,  665 => 224,  658 => 221,  655 => 220,  652 => 219,  645 => 216,  642 => 215,  639 => 214,  632 => 211,  629 => 210,  626 => 209,  619 => 206,  616 => 205,  613 => 204,  606 => 201,  603 => 200,  600 => 199,  593 => 196,  590 => 195,  587 => 194,  580 => 191,  577 => 190,  574 => 189,  567 => 186,  564 => 185,  561 => 184,  554 => 181,  551 => 180,  548 => 179,  541 => 176,  538 => 175,  535 => 174,  528 => 171,  525 => 170,  522 => 169,  515 => 166,  512 => 165,  509 => 164,  502 => 161,  499 => 160,  496 => 159,  489 => 156,  486 => 155,  483 => 154,  476 => 151,  473 => 150,  470 => 149,  463 => 146,  460 => 145,  457 => 144,  450 => 141,  447 => 140,  444 => 139,  437 => 136,  434 => 135,  431 => 134,  424 => 131,  421 => 130,  419 => 129,  414 => 126,  407 => 124,  404 => 123,  397 => 121,  394 => 120,  387 => 118,  384 => 117,  377 => 115,  374 => 114,  367 => 112,  364 => 111,  357 => 109,  354 => 108,  347 => 106,  344 => 105,  337 => 103,  334 => 102,  327 => 100,  324 => 99,  317 => 97,  314 => 96,  307 => 94,  304 => 93,  297 => 91,  294 => 90,  287 => 88,  284 => 87,  277 => 85,  274 => 84,  267 => 82,  264 => 81,  257 => 79,  254 => 78,  247 => 76,  244 => 75,  237 => 73,  234 => 72,  227 => 70,  224 => 69,  217 => 67,  214 => 66,  207 => 64,  204 => 63,  197 => 61,  194 => 60,  187 => 58,  184 => 57,  177 => 55,  174 => 54,  167 => 52,  164 => 51,  157 => 49,  154 => 48,  147 => 46,  144 => 45,  137 => 43,  134 => 42,  127 => 40,  124 => 39,  117 => 37,  115 => 36,  109 => 33,  105 => 32,  99 => 29,  91 => 24,  86 => 22,  80 => 19,  75 => 17,  72 => 16,  65 => 14,  63 => 13,  57 => 9,  53 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

    {% for evSup in evSups %}
        <h1>{{ evSup.title }}</h1><br>
        <div class=\"row center-block row-diners\">
            {% for supEvenement in supEvenements|reverse %}

                <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        <div class=\"caption\">
                            {% if supEvenement.iname4 %}
                            <div class=\"image\" style=\"background-image: url({{ vich_uploader_asset(supEvenement, 'image4', 'ClubBundle\\\\Entity\\\\SupEvenements') }})\"></div>
                            {% else %}{% endif %}
                            <br><br>
                            <h4>{{ supEvenement.title }}</h4>
                            <div class=\"contrainte\">
                                <p>{{ supEvenement.paragraph|raw[:200] ~ '...' }}</p>
                            </div>
                            <br>
                            <a id=\"btn-photo\" data-toggle=\"modal\" data-target=\"{{ '#' ~ supEvenement.id }}\"><p>Plus d'infos<span class=\"glyphicon glyphicon-share-alt\"></span></p></a>

                            <div class=\"modal fade\" id=\"{{ supEvenement.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"evenementmodal\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">x</span></button>
                                            <h4 class=\"modal-title\">{{ supEvenement.title }}</h4>
                                        </div>
                                        <div class=\"modal-body\">
                                            <p>{{ supEvenement.paragraph|raw }}</p>
                                            <div id=\"{{ 'carousel-evenement' ~ supEvenement.id }}\" class=\"carousel slide center-block\" data-ride=\"carousel\">
                                                <!-- Carousel Indicators -->
                                                <ol class=\"carousel-indicators\">
                                                    {% if supEvenement.iname %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"0\" class=\"active\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname2 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"1\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname3 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"2\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname4 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"3\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname5 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"4\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname6 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"5\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname7 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"6\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname8 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"7\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname9 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"8\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname10 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"9\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname11 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"10\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname12 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"11\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname13 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"12\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname14 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"13\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname15 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"14\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname16 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"15\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname17 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"16\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname18 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"17\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname19 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"18\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname20 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"19\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname21 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"20\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname22 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"21\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname23 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"22\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname24 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"23\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname25 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"24\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname26 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"25\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname27 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"26\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname28 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"27\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname29 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"28\"></li>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname30 %}
                                                        <li data-target=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" data-slide-to=\"29\"></li>
                                                    {% else %}{% endif %}
                                                </ol>
                                                <!-- Carousel Wrapper -->
                                                <div class=\"carousel-inner\" role=\"listbox\">
                                                    {% if supEvenement.iname %}
                                                        <div class=\"item active\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname2 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image2', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname3 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image3', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname4 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image4', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname5 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image5', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname6 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image6', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname7 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image7', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname8 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image8', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname9 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image9', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname10 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image10', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname11 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image11', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname12 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image12', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname13 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image13', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname14 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image14', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname15 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image15', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname16 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image16', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname17 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image17', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname18 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image18', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname19 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image19', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname20 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image20', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname21 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image21', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname22 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image22', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname23 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image23', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname24 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image24', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname25 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image25', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname26 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image26', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname27 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image27', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname28 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image28', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname29 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image29', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                    {% if supEvenement.iname30 %}
                                                        <div class=\"item\">
                                                            <img src=\"{{ vich_uploader_asset(supEvenement, 'image30', 'ClubBundle\\\\Entity\\\\SupEvenements') }}\" alt=\"\">
                                                        </div>
                                                    {% else %}{% endif %}
                                                </div>

                                                <!-- Carousel Controls -->
                                                <a class=\"left carousel-control\" href=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" role=\"button\" data-slide=\"prev\">
                                                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                                    <span class=\"sr-only\">Précédent</span>
                                                </a>
                                                <a class=\"right carousel-control\" href=\"{{ '#carousel-evenement' ~ supEvenement.id }}\" role=\"button\" data-slide=\"next\">
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
", "ClubBundle:evsup:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/evsup/index.html.twig");
    }
}
