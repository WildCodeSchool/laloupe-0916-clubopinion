<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bb2743246931ccf5a0492324cd6442341af2c6f4963fd114ded7212d5a9f67fe extends Twig_Template
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
        $__internal_a722148d7c5d5be4bf0e59453829d865a8f99ae76e9043fdaba08b00bcdf38ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a722148d7c5d5be4bf0e59453829d865a8f99ae76e9043fdaba08b00bcdf38ee->enter($__internal_a722148d7c5d5be4bf0e59453829d865a8f99ae76e9043fdaba08b00bcdf38ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a722148d7c5d5be4bf0e59453829d865a8f99ae76e9043fdaba08b00bcdf38ee->leave($__internal_a722148d7c5d5be4bf0e59453829d865a8f99ae76e9043fdaba08b00bcdf38ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
