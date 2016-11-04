<?php

/* ClubBundle:ara:index.html.twig */
class __TwigTemplate_1ecec94115470eabad350d1e52878aee5c0f8e8cc123eddb53233bbc3eb57343 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:ara:index.html.twig", 1);
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
    <!-- ****************************************** -->
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aras"]) ? $context["aras"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ara"]) {
            // line 8
            echo "
    <div class=\"container-fluid\">
        <h1>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["ara"], "title", array()), "html", null, true);
            echo "</h1>

        <div class=\"row blockGray homepageBlock\">
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["ara"], "image", "ClubBundle\\Entity\\Ara"), "html", null, true);
            echo "\" alt=\"\" width=\"100%\"/>
            </div>
            <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                <h2>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ara"], "soustitre", array()), "html", null, true);
            echo "</h2>

                <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["ara"], "paragraph", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ara'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClubBundle:ara:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  61 => 19,  56 => 17,  50 => 14,  43 => 10,  39 => 8,  35 => 7,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:ara:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/ara/index.html.twig");
    }
}
