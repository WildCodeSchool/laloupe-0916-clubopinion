<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_1ee0ce2cb832e4f39633cb82c8e061b9a5535e5d36fca3708e1df131d93d8929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a0d2f54170626ea571e53911e41bf4579a191483ae32d245d7695f9b53d8d585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d2f54170626ea571e53911e41bf4579a191483ae32d245d7695f9b53d8d585->enter($__internal_a0d2f54170626ea571e53911e41bf4579a191483ae32d245d7695f9b53d8d585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d2f54170626ea571e53911e41bf4579a191483ae32d245d7695f9b53d8d585->leave($__internal_a0d2f54170626ea571e53911e41bf4579a191483ae32d245d7695f9b53d8d585_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b76f5cbab46afcb79f893c9b3735262be8b92d961d21179db4e55fcaabe63f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76f5cbab46afcb79f893c9b3735262be8b92d961d21179db4e55fcaabe63f70->enter($__internal_b76f5cbab46afcb79f893c9b3735262be8b92d961d21179db4e55fcaabe63f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b76f5cbab46afcb79f893c9b3735262be8b92d961d21179db4e55fcaabe63f70->leave($__internal_b76f5cbab46afcb79f893c9b3735262be8b92d961d21179db4e55fcaabe63f70_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/projets/clubdelopinion/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
