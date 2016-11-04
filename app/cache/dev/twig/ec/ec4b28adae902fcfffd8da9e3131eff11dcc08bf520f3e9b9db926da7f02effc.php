<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_721d6dcec27b90354d2ff7d31a11af01d601080dbf22289e52db2b7809526511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e30fd050411513cf2d0299c2b804ea97a9802167862364a541d48c99958125be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30fd050411513cf2d0299c2b804ea97a9802167862364a541d48c99958125be->enter($__internal_e30fd050411513cf2d0299c2b804ea97a9802167862364a541d48c99958125be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e30fd050411513cf2d0299c2b804ea97a9802167862364a541d48c99958125be->leave($__internal_e30fd050411513cf2d0299c2b804ea97a9802167862364a541d48c99958125be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53cc083d0120c740acce8793434f9b6a38321d5af26c1d4870743c3aca7da7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53cc083d0120c740acce8793434f9b6a38321d5af26c1d4870743c3aca7da7b1->enter($__internal_53cc083d0120c740acce8793434f9b6a38321d5af26c1d4870743c3aca7da7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_53cc083d0120c740acce8793434f9b6a38321d5af26c1d4870743c3aca7da7b1->leave($__internal_53cc083d0120c740acce8793434f9b6a38321d5af26c1d4870743c3aca7da7b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/projets/clubdelopinion/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
