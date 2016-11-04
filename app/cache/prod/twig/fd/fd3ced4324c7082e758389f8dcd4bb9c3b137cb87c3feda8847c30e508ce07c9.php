<?php

/* ClubBundle:rcvl:index.html.twig */
class __TwigTemplate_cd1152488e9e7c5681bf4a6a554adb147d24a6c4b9e52665a09782423a248877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:rcvl:index.html.twig", 1);
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
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rcvls"]) ? $context["rcvls"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rcvl"]) {
            // line 7
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rcvl"], "title", array()), "html", null, true);
            echo "</h1>

            <div class=\"container-fluid\">
                <div class=\"row blockGray homepageBlock\"><!--******************* 1er bloc ***************-->
                    <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                        <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["rcvl"], "image", "ClubBundle\\Entity\\rcvl"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rcvl"], "title", array()), "html", null, true);
            echo "\" class=\"center-block\" width=\"100%\"/>
                    </div>


                    <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                        <h2>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["rcvl"], "soustitre", array()), "html", null, true);
            echo "</h2>

                        <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["rcvl"], "paragraph", array()), "html", null, true);
            echo "</p>

                    </div>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rcvl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ClubBundle:rcvl:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  58 => 17,  48 => 12,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:rcvl:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/rcvl/index.html.twig");
    }
}
