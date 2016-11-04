<?php

/* ClubBundle:club_sup:index.html.twig */
class __TwigTemplate_f11e542b86db3d00cc7dc4ead78110ef118405d34be3ab9ec4b1cf09ad9aa052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:club_sup:index.html.twig", 1);
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
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["club_sups"]) ? $context["club_sups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["club_sup"]) {
            // line 8
            echo "
    <h1>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["club_sup"], "title", array()), "html", null, true);
            echo "</h1>

        <div class=\"container-fluid\">
            <div class=\"row blockGray homepageBlock\"><!--******************* 1er bloc ***************-->
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["club_sup"], "image", "ClubBundle\\Entity\\club_sup"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["club_sup"], "title", array()), "html", null, true);
            echo "\" class=\"center-block\" width=\"100%\"/>
                </div>
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <h2>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["club_sup"], "soutitre", array()), "html", null, true);
            echo "</h2>

                    <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["club_sup"], "paragraph", array()), "html", null, true);
            echo "</p>

                </div>
            </div>
        </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club_sup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ClubBundle:club_sup:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  59 => 17,  51 => 14,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:club_sup:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/club_sup/index.html.twig");
    }
}
