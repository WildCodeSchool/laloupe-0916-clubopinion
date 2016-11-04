<?php

/* ClubBundle:Default:index.html.twig */
class __TwigTemplate_4658fea6791b3e1f597cd84c5c0daeee1ff055f2cd357ca7206ef0f2c93efa33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05852fb7cfa870a16d0486206acd09b25e3a18de65990e6b7392617179519081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05852fb7cfa870a16d0486206acd09b25e3a18de65990e6b7392617179519081->enter($__internal_05852fb7cfa870a16d0486206acd09b25e3a18de65990e6b7392617179519081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_05852fb7cfa870a16d0486206acd09b25e3a18de65990e6b7392617179519081->leave($__internal_05852fb7cfa870a16d0486206acd09b25e3a18de65990e6b7392617179519081_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "ClubBundle:Default:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/Default/index.html.twig");
    }
}
