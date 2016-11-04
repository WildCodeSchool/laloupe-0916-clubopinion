<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8c8831e294c77dfcba5bf9e417f11ebcb1dbd40db50b3fb5f9170072e9a2a19e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0158a4a23c60e2305df638e3ab1f6a8673881c63606fca803fbf035a7d24d75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0158a4a23c60e2305df638e3ab1f6a8673881c63606fca803fbf035a7d24d75d->enter($__internal_0158a4a23c60e2305df638e3ab1f6a8673881c63606fca803fbf035a7d24d75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0158a4a23c60e2305df638e3ab1f6a8673881c63606fca803fbf035a7d24d75d->leave($__internal_0158a4a23c60e2305df638e3ab1f6a8673881c63606fca803fbf035a7d24d75d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f642c05adb181c0b4a3aa3cf55e54713c61339e3fd46296d9adbd80dfd9c5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f642c05adb181c0b4a3aa3cf55e54713c61339e3fd46296d9adbd80dfd9c5f2->enter($__internal_1f642c05adb181c0b4a3aa3cf55e54713c61339e3fd46296d9adbd80dfd9c5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_1f642c05adb181c0b4a3aa3cf55e54713c61339e3fd46296d9adbd80dfd9c5f2->leave($__internal_1f642c05adb181c0b4a3aa3cf55e54713c61339e3fd46296d9adbd80dfd9c5f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
