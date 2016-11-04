<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2eae55947e19f23361ab26cbe1d79060011ba16529a4efead3efbd4728aa4f3d extends Twig_Template
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
        $__internal_9bac57eda9b4008278dd9bd4acb3ed5e74f2e10b978f8f67ddf1e8d2946c55e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bac57eda9b4008278dd9bd4acb3ed5e74f2e10b978f8f67ddf1e8d2946c55e3->enter($__internal_9bac57eda9b4008278dd9bd4acb3ed5e74f2e10b978f8f67ddf1e8d2946c55e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9bac57eda9b4008278dd9bd4acb3ed5e74f2e10b978f8f67ddf1e8d2946c55e3->leave($__internal_9bac57eda9b4008278dd9bd4acb3ed5e74f2e10b978f8f67ddf1e8d2946c55e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
