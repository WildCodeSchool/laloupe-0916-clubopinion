<?php

/* ClubBundle:av3:index.html.twig */
class __TwigTemplate_51d320ce951d7d4d4f372c88c7ba5ff1252f874cd35460465dc49daa234a17b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:av3:index.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["av3s"]) ? $context["av3s"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["av3"]) {
            // line 6
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["av3"], "titleAv3", array()), "html", null, true);
            echo "</h1>

            <div class=\"container-fluid\">
                <div class=\"row blockGray\">
                    <div class=\"row\"><!--**************** 2ème bloc *****************-->
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <p>";
            // line 12
            echo $this->getAttribute($context["av3"], "paragraphAv3", array());
            echo "</p>

                        </div>
                        <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["av3"], "image", "ClubBundle\\Entity\\av3"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["av3"], "titleAv3", array()), "html", null, true);
            echo "\" class=\"center-block\" width=\"100%\"/>
                        </div>
                    </div>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['av3'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClubBundle:av3:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  55 => 16,  48 => 12,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:av3:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/av3/index.html.twig");
    }
}
