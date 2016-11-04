<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6a0382f2c0558bbae5610449ab5385cda821f3a86a8b4e04ed1aea0bb23a67fd extends Twig_Template
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
        $__internal_7f9df9a14e98524ef94a8a57b5a9f8c963ee99ef2ecb2167dca45e3dabb5fe6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9df9a14e98524ef94a8a57b5a9f8c963ee99ef2ecb2167dca45e3dabb5fe6b->enter($__internal_7f9df9a14e98524ef94a8a57b5a9f8c963ee99ef2ecb2167dca45e3dabb5fe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7f9df9a14e98524ef94a8a57b5a9f8c963ee99ef2ecb2167dca45e3dabb5fe6b->leave($__internal_7f9df9a14e98524ef94a8a57b5a9f8c963ee99ef2ecb2167dca45e3dabb5fe6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
