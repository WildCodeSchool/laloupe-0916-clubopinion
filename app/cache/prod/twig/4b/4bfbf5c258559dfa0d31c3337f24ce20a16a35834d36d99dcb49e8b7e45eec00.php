<?php

/* ClubBundle:contact:index.html.twig */
class __TwigTemplate_95f9fb3ac473f3ce7443ef6d56505360743698c40ca7414ba6e06ed301eebba5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:contact:index.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 6
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "title", array()), "html", null, true);
            echo "</h1>

            <div class=\"container-fluid\" id=\"contact\">
                <div class=\"row blockGray\">
                    ";
            // line 10
            if ($this->getAttribute($context["contact"], "iname", array())) {
                // line 11
                echo "                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["contact"], "image", "ClubBundle\\Entity\\contact"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "title", array()), "html", null, true);
                echo "\" class=\"center-block\" height=\"100%\"/>
                        </div>
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <h2>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "soustitre", array()), "html", null, true);
                echo "</h2>
                            <hr/>
                            <p>";
                // line 17
                echo $this->getAttribute($context["contact"], "paragraph", array());
                echo "</p>
                        </div>
                    ";
            } else {
                // line 20
                echo "                        <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                            <h2>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "soustitre", array()), "html", null, true);
                echo "</h2>
                            <hr/>
                            <p>";
                // line 23
                echo $this->getAttribute($context["contact"], "paragraph", array());
                echo "</p>
                        </div>
                    ";
            }
            // line 26
            echo "                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClubBundle:contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  84 => 26,  78 => 23,  73 => 21,  70 => 20,  64 => 17,  59 => 15,  51 => 12,  48 => 11,  46 => 10,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:contact:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/contact/index.html.twig");
    }
}
