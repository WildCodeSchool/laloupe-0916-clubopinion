<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ae58bc3ca37390fa507f874386df93e82ca42f53bbd19f97098ca7692bbe5a3e extends Twig_Template
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
        $__internal_86c9b0c441b08bb0cb4f3ef447a9a5e7e00d06cd5ae78b50803d5b7467fe3737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c9b0c441b08bb0cb4f3ef447a9a5e7e00d06cd5ae78b50803d5b7467fe3737->enter($__internal_86c9b0c441b08bb0cb4f3ef447a9a5e7e00d06cd5ae78b50803d5b7467fe3737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_86c9b0c441b08bb0cb4f3ef447a9a5e7e00d06cd5ae78b50803d5b7467fe3737->leave($__internal_86c9b0c441b08bb0cb4f3ef447a9a5e7e00d06cd5ae78b50803d5b7467fe3737_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
