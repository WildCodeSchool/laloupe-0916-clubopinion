<?php

/* ClubBundle:av2:index.html.twig */
class __TwigTemplate_ce09e2f02236f28bab4a582935700833d77aa3b51db3d58de1160ceca70e817b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:av2:index.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["av2s"]) ? $context["av2s"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["av2"]) {
            // line 6
            echo "        <h1><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/club/img/signs.png"), "html", null, true);
            echo "\" width=\"30px\" id=\"fireworks\" /> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["av2"], "titleAv2", array()), "html", null, true);
            echo "</h1>

    <div class=\"container-fluid\">
        <div class=\"row blockGray\">
            ";
            // line 10
            if ($this->getAttribute($context["av2"], "iname", array())) {
                // line 11
                echo "                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["av2"], "image", "ClubBundle\\Entity\\av2"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["av2"], "titleAv2", array()), "html", null, true);
                echo "\" class=\"center-block\" height=\"100%\"/>
                </div>
                <div class=\"col-xxs-12 col-xs-6 homepageBlock2\">
                    <p>";
                // line 15
                echo $this->getAttribute($context["av2"], "paragraphAv2", array());
                echo "</p>
                </div>
            ";
            } else {
                // line 18
                echo "                <div class=\"col-xxs-12 col-xs-10 homepageBlock2 col-xs-offset-1\">
                    <p>";
                // line 19
                echo $this->getAttribute($context["av2"], "paragraphAv2", array());
                echo "</p>
                </div>
            ";
            }
            // line 22
            echo "        </div>
    </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['av2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ClubBundle:av2:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  70 => 19,  67 => 18,  61 => 15,  53 => 12,  50 => 11,  48 => 10,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:av2:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/av2/index.html.twig");
    }
}
