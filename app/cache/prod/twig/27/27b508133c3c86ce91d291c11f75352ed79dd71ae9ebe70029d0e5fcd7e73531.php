<?php

/* ClubBundle:presentation:index.html.twig */
class __TwigTemplate_385b3c863abfc9f41c90ea50a0c20c77c3828ddcb9da84a8340069d655b9afe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:presentation:index.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["presentations"]) ? $context["presentations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["presentation"]) {
            // line 7
            echo "

                <h1>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "title", array()), "html", null, true);
            echo "</h1>
                <div class=\"container-fluid\">
                    <div class=\"row blockGray homepageBlock \">
                    <!--******************* 1er bloc ***************-->
                        ";
            // line 13
            if ($this->getAttribute($context["presentation"], "iname", array())) {
                // line 14
                echo "                            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                                    <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["presentation"], "image", "ClubBundle\\Entity\\presentation"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "title", array()), "html", null, true);
                echo "\" class=\"center-block\" height=\"100%\"/>
                            </div>
                            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                                <h2>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "soustitre1", array()), "html", null, true);
                echo "</h2>
                                <p>";
                // line 19
                echo $this->getAttribute($context["presentation"], "paragraph1", array());
                echo "</p>
                            </div>
                        ";
            } else {
                // line 22
                echo "                            <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                                <h2>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "soustitre1", array()), "html", null, true);
                echo "</h2>
                                <p>";
                // line 24
                echo $this->getAttribute($context["presentation"], "paragraph1", array());
                echo "</p>
                            </div>
                        ";
            }
            // line 27
            echo "                    </div>
                    <div class=\"row homepageBlock\"><!--**************** 2ème bloc *****************-->
                        ";
            // line 29
            if ($this->getAttribute($context["presentation"], "iname2", array())) {
                // line 30
                echo "                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <h2>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "soustitre2", array()), "html", null, true);
                echo "</h2>
                            <p>";
                // line 32
                echo $this->getAttribute($context["presentation"], "paragraph2", array());
                echo "</p>
                        </div>
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["presentation"], "image", "ClubBundle\\Entity\\presentation"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "title", array()), "html", null, true);
                echo "\" class=\"center-block\" height=\"100%\"\"/>
                        </div>
                        ";
            } else {
                // line 38
                echo "                            <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                                <h2>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["presentation"], "soustitre2", array()), "html", null, true);
                echo "</h2>
                                <p>";
                // line 40
                echo $this->getAttribute($context["presentation"], "paragraph2", array());
                echo "</p>
                            </div>
                        ";
            }
            // line 43
            echo "                    </div>
                </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presentation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClubBundle:presentation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 47,  125 => 43,  119 => 40,  115 => 39,  112 => 38,  104 => 35,  98 => 32,  94 => 31,  91 => 30,  89 => 29,  85 => 27,  79 => 24,  75 => 23,  72 => 22,  66 => 19,  62 => 18,  54 => 15,  51 => 14,  49 => 13,  42 => 9,  38 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:presentation:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/presentation/index.html.twig");
    }
}
