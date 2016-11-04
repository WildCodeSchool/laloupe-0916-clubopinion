<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_37447279cb6cb1e457cd2efd9c9932747794e38b2952b10eabcfdf44da5d7db7 extends Twig_Template
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
        $__internal_6176e4bd4fbf8310e151c93839b45f344b7b8e3edfa0616ccdcfe877445b0522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6176e4bd4fbf8310e151c93839b45f344b7b8e3edfa0616ccdcfe877445b0522->enter($__internal_6176e4bd4fbf8310e151c93839b45f344b7b8e3edfa0616ccdcfe877445b0522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6176e4bd4fbf8310e151c93839b45f344b7b8e3edfa0616ccdcfe877445b0522->leave($__internal_6176e4bd4fbf8310e151c93839b45f344b7b8e3edfa0616ccdcfe877445b0522_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
