<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d79fa22d7e54d8d64ba105db00dac96b3e8093299022ad8e063385ad009ac34a extends Twig_Template
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
        $__internal_fdd90ec39037b24a521f3c69555cf6222b3f2ec5ba73b11dae3318ce01b375b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd90ec39037b24a521f3c69555cf6222b3f2ec5ba73b11dae3318ce01b375b4->enter($__internal_fdd90ec39037b24a521f3c69555cf6222b3f2ec5ba73b11dae3318ce01b375b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fdd90ec39037b24a521f3c69555cf6222b3f2ec5ba73b11dae3318ce01b375b4->leave($__internal_fdd90ec39037b24a521f3c69555cf6222b3f2ec5ba73b11dae3318ce01b375b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
