<?php

/* ClubBundle:pagemembre:index.html.twig */
class __TwigTemplate_44761168923348a72c9fe1d7a58b079bacb9292a1e3816a8f315bb42e377d6f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:pagemembre:index.html.twig", 1);
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
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pageMembres"]) ? $context["pageMembres"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pageMembre"]) {
            // line 5
            echo "            <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pageMembre"], "title", array()), "html", null, true);
            echo "</h1><br>
            <div class=\"row center-block row-diners\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["membres"]) ? $context["membres"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                // line 8
                echo "
                <div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                    <div class=\"thumbnail\" id=\"thumbnail-membre\">
                        ";
                // line 11
                if ($this->getAttribute($context["membre"], "iname", array())) {
                    // line 12
                    echo "                            <div class=\"image\" style=\"background-image: url(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["membre"], "image", "ClubBundle\\Entity\\Membres"), "html", null, true);
                    echo ")\"></div>
                        ";
                } else {
                    // line 14
                    echo "                        ";
                }
                // line 15
                echo "                        <div class=\"caption\">
                            <h4>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "name", array()), "html", null, true);
                echo "</h4>
                            <div class=\"contrainte-membre\">
                                <p>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "description", array()), "html", null, true);
                echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMembre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClubBundle:pagemembre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  82 => 24,  70 => 18,  65 => 16,  62 => 15,  59 => 14,  53 => 12,  51 => 11,  46 => 8,  42 => 7,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClubBundle:pagemembre:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/pagemembre/index.html.twig");
    }
}
