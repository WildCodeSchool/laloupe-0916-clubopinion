<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2ceb814e1c39bef07ec49b31b6cf94c695e7c38391ccee43f699ff5a92efcc7f extends Twig_Template
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
        $__internal_099ae24151be86d3a68050cb8cc917c3df1ba328680382c0f738ab7da35d8d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099ae24151be86d3a68050cb8cc917c3df1ba328680382c0f738ab7da35d8d76->enter($__internal_099ae24151be86d3a68050cb8cc917c3df1ba328680382c0f738ab7da35d8d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_099ae24151be86d3a68050cb8cc917c3df1ba328680382c0f738ab7da35d8d76->leave($__internal_099ae24151be86d3a68050cb8cc917c3df1ba328680382c0f738ab7da35d8d76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
