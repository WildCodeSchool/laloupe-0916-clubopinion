<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a703190dd0a9ef89e28ec1f13b7603b6c4c9e3d69a99c914b196f16a50824276 extends Twig_Template
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
        $__internal_70ef1fa763c80ffe3df4ee4a75365776d740e63dad66c8ccbae058ab162f33de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ef1fa763c80ffe3df4ee4a75365776d740e63dad66c8ccbae058ab162f33de->enter($__internal_70ef1fa763c80ffe3df4ee4a75365776d740e63dad66c8ccbae058ab162f33de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_70ef1fa763c80ffe3df4ee4a75365776d740e63dad66c8ccbae058ab162f33de->leave($__internal_70ef1fa763c80ffe3df4ee4a75365776d740e63dad66c8ccbae058ab162f33de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
