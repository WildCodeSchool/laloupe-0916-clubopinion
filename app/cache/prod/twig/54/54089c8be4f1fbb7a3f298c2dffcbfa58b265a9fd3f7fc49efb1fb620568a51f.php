<?php

/* ClubBundle:evrcvl:index.html.twig */
class __TwigTemplate_1686f7a29e41b70a72dbf8b29fad48a1f1fb3ea2e9fb0a07d1db5886c9ebdf50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:evrcvl:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evRcvls"]) ? $context["evRcvls"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["evRcvl"]) {
            // line 7
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evRcvl"], "title", array()), "html", null, true);
            echo "</h1><br>
        <div class=\"row center-block row-diners\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["evenements"]) ? $context["evenements"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
                // line 10
                echo "
                <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        <div class=\"caption\">
                            ";
                // line 14
                if ($this->getAttribute($context["evenement"], "iname4", array())) {
                    // line 15
                    echo "                            <div class=\"image\" style=\"background-image: url(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image4", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo ")\"></div>
                            ";
                } else {
                }
                // line 17
                echo "                            <br><br>
                            <h4>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "title", array()), "html", null, true);
                echo "</h4>
                                <div class=\"contrainte\">
                            <p>";
                // line 20
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["evenement"], "paragraph", array()), 200, true, "..."), "html", null, true);
                echo "</p>
                                </div>
                            <br>
                            <a id=\"btn-photo\" data-toggle=\"modal\" data-target=\"";
                // line 23
                echo twig_escape_filter($this->env, ("#" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                echo "\"><p>Plus d'infos<span class=\"glyphicon glyphicon-share-alt\"></span></p></a>

                        <div class=\"modal fade\" id=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"evenementmodal\">
                            <div class=\"modal-dialog modal-lg\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">x</span></button>
                                        <h4 class=\"modal-title\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "title", array()), "html", null, true);
                echo "</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <p>";
                // line 33
                echo $this->getAttribute($context["evenement"], "paragraph", array());
                echo "</p>
                                        <div id=\"";
                // line 34
                echo twig_escape_filter($this->env, ("carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                echo "\" class=\"carousel slide center-block\" data-ride=\"carousel\">
                                            <!-- Carousel Indicators -->
                                            <ol class=\"carousel-indicators\">
                                                ";
                // line 37
                if ($this->getAttribute($context["evenement"], "iname", array())) {
                    // line 38
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"0\" class=\"active\"></li>
                                                ";
                } else {
                }
                // line 40
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname2", array())) {
                    // line 41
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"1\"></li>
                                                ";
                } else {
                }
                // line 43
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname3", array())) {
                    // line 44
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"2\"></li>
                                                ";
                } else {
                }
                // line 46
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname4", array())) {
                    // line 47
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"3\"></li>
                                                ";
                } else {
                }
                // line 49
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname5", array())) {
                    // line 50
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"4\"></li>
                                                ";
                } else {
                }
                // line 52
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname6", array())) {
                    // line 53
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"5\"></li>
                                                ";
                } else {
                }
                // line 55
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname7", array())) {
                    // line 56
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"6\"></li>
                                                ";
                } else {
                }
                // line 58
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname8", array())) {
                    // line 59
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"7\"></li>
                                                ";
                } else {
                }
                // line 61
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname9", array())) {
                    // line 62
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"8\"></li>
                                                ";
                } else {
                }
                // line 64
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname10", array())) {
                    // line 65
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"9\"></li>
                                                ";
                } else {
                }
                // line 67
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname11", array())) {
                    // line 68
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"10\"></li>
                                                ";
                } else {
                }
                // line 70
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname12", array())) {
                    // line 71
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"11\"></li>
                                                ";
                } else {
                }
                // line 73
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname13", array())) {
                    // line 74
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"12\"></li>
                                                ";
                } else {
                }
                // line 76
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname14", array())) {
                    // line 77
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"13\"></li>
                                                ";
                } else {
                }
                // line 79
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname15", array())) {
                    // line 80
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"14\"></li>
                                                ";
                } else {
                }
                // line 82
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname16", array())) {
                    // line 83
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"15\"></li>
                                                ";
                } else {
                }
                // line 85
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname17", array())) {
                    // line 86
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"16\"></li>
                                                ";
                } else {
                }
                // line 88
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname18", array())) {
                    // line 89
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"17\"></li>
                                                ";
                } else {
                }
                // line 91
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname19", array())) {
                    // line 92
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"18\"></li>
                                                ";
                } else {
                }
                // line 94
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname20", array())) {
                    // line 95
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"19\"></li>
                                                ";
                } else {
                }
                // line 97
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname21", array())) {
                    // line 98
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"20\"></li>
                                                ";
                } else {
                }
                // line 100
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname22", array())) {
                    // line 101
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"21\"></li>
                                                ";
                } else {
                }
                // line 103
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname23", array())) {
                    // line 104
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"22\"></li>
                                                ";
                } else {
                }
                // line 106
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname24", array())) {
                    // line 107
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"23\"></li>
                                                ";
                } else {
                }
                // line 109
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname25", array())) {
                    // line 110
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"24\"></li>
                                                ";
                } else {
                }
                // line 112
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname26", array())) {
                    // line 113
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"25\"></li>
                                                ";
                } else {
                }
                // line 115
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname27", array())) {
                    // line 116
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"26\"></li>
                                                ";
                } else {
                }
                // line 118
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname28", array())) {
                    // line 119
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"27\"></li>
                                                ";
                } else {
                }
                // line 121
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname29", array())) {
                    // line 122
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"28\"></li>
                                                ";
                } else {
                }
                // line 124
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname30", array())) {
                    // line 125
                    echo "                                                    <li data-target=\"";
                    echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                    echo "\" data-slide-to=\"29\"></li>
                                                ";
                } else {
                }
                // line 127
                echo "                                            </ol>
                                            <!-- Carousel Wrapper -->
                                            <div class=\"carousel-inner\" role=\"listbox\">
                                                ";
                // line 130
                if ($this->getAttribute($context["evenement"], "iname", array())) {
                    // line 131
                    echo "                                                    <div class=\"item active\">
                                                        <img src=\"";
                    // line 132
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 135
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname2", array())) {
                    // line 136
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 137
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image2", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 140
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname3", array())) {
                    // line 141
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image3", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 145
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname4", array())) {
                    // line 146
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 147
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image4", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 150
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname5", array())) {
                    // line 151
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 152
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image5", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 155
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname6", array())) {
                    // line 156
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 157
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image6", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 160
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname7", array())) {
                    // line 161
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 162
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image7", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 165
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname8", array())) {
                    // line 166
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 167
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image8", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 170
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname9", array())) {
                    // line 171
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 172
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image9", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 175
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname10", array())) {
                    // line 176
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 177
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image10", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 180
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname11", array())) {
                    // line 181
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 182
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image11", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 185
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname12", array())) {
                    // line 186
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 187
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image12", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 190
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname13", array())) {
                    // line 191
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 192
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image13", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 195
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname14", array())) {
                    // line 196
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 197
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image14", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 200
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname15", array())) {
                    // line 201
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 202
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image15", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 205
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname16", array())) {
                    // line 206
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 207
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image16", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 210
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname17", array())) {
                    // line 211
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 212
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image17", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 215
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname18", array())) {
                    // line 216
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image18", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 220
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname19", array())) {
                    // line 221
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 222
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image19", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 225
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname20", array())) {
                    // line 226
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 227
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image20", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 230
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname21", array())) {
                    // line 231
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 232
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image21", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 235
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname22", array())) {
                    // line 236
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 237
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image22", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 240
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname23", array())) {
                    // line 241
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 242
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image23", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 245
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname24", array())) {
                    // line 246
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 247
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image24", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 250
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname25", array())) {
                    // line 251
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 252
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image25", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 255
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname26", array())) {
                    // line 256
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 257
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image26", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 260
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname27", array())) {
                    // line 261
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 262
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image27", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 265
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname28", array())) {
                    // line 266
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 267
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image28", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 270
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname29", array())) {
                    // line 271
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 272
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image29", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 275
                echo "                                                ";
                if ($this->getAttribute($context["evenement"], "iname30", array())) {
                    // line 276
                    echo "                                                    <div class=\"item\">
                                                        <img src=\"";
                    // line 277
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["evenement"], "image30", "ClubBundle\\Entity\\Evenements"), "html", null, true);
                    echo "\" alt=\"\" class=\"img-responsive center-block\">
                                                    </div>
                                                ";
                } else {
                }
                // line 280
                echo "                                            </div>

                                            <!-- Carousel Controls -->
                                            <a class=\"left carousel-control\" href=\"";
                // line 283
                echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
                echo "\" role=\"button\" data-slide=\"prev\">
                                                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Précédent</span>
                                            </a>
                                            <a class=\"right carousel-control\" href=\"";
                // line 287
                echo twig_escape_filter($this->env, ("#carousel-evenement" . $this->getAttribute($context["evenement"], "id", array())), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evRcvl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClubBundle:evrcvl:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  837 => 302,  830 => 300,  811 => 287,  804 => 283,  799 => 280,  792 => 277,  789 => 276,  786 => 275,  779 => 272,  776 => 271,  773 => 270,  766 => 267,  763 => 266,  760 => 265,  753 => 262,  750 => 261,  747 => 260,  740 => 257,  737 => 256,  734 => 255,  727 => 252,  724 => 251,  721 => 250,  714 => 247,  711 => 246,  708 => 245,  701 => 242,  698 => 241,  695 => 240,  688 => 237,  685 => 236,  682 => 235,  675 => 232,  672 => 231,  669 => 230,  662 => 227,  659 => 226,  656 => 225,  649 => 222,  646 => 221,  643 => 220,  636 => 217,  633 => 216,  630 => 215,  623 => 212,  620 => 211,  617 => 210,  610 => 207,  607 => 206,  604 => 205,  597 => 202,  594 => 201,  591 => 200,  584 => 197,  581 => 196,  578 => 195,  571 => 192,  568 => 191,  565 => 190,  558 => 187,  555 => 186,  552 => 185,  545 => 182,  542 => 181,  539 => 180,  532 => 177,  529 => 176,  526 => 175,  519 => 172,  516 => 171,  513 => 170,  506 => 167,  503 => 166,  500 => 165,  493 => 162,  490 => 161,  487 => 160,  480 => 157,  477 => 156,  474 => 155,  467 => 152,  464 => 151,  461 => 150,  454 => 147,  451 => 146,  448 => 145,  441 => 142,  438 => 141,  435 => 140,  428 => 137,  425 => 136,  422 => 135,  415 => 132,  412 => 131,  410 => 130,  405 => 127,  398 => 125,  395 => 124,  388 => 122,  385 => 121,  378 => 119,  375 => 118,  368 => 116,  365 => 115,  358 => 113,  355 => 112,  348 => 110,  345 => 109,  338 => 107,  335 => 106,  328 => 104,  325 => 103,  318 => 101,  315 => 100,  308 => 98,  305 => 97,  298 => 95,  295 => 94,  288 => 92,  285 => 91,  278 => 89,  275 => 88,  268 => 86,  265 => 85,  258 => 83,  255 => 82,  248 => 80,  245 => 79,  238 => 77,  235 => 76,  228 => 74,  225 => 73,  218 => 71,  215 => 70,  208 => 68,  205 => 67,  198 => 65,  195 => 64,  188 => 62,  185 => 61,  178 => 59,  175 => 58,  168 => 56,  165 => 55,  158 => 53,  155 => 52,  148 => 50,  145 => 49,  138 => 47,  135 => 46,  128 => 44,  125 => 43,  118 => 41,  115 => 40,  108 => 38,  106 => 37,  100 => 34,  96 => 33,  90 => 30,  82 => 25,  77 => 23,  71 => 20,  66 => 18,  63 => 17,  56 => 15,  54 => 14,  48 => 10,  44 => 9,  38 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:evrcvl:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/evrcvl/index.html.twig");
    }
}
