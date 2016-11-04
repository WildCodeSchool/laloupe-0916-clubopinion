<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0c453d0d59da3abc9c4298d13e01471f1e13e6c7931129a82560b133cdbf5dec extends Twig_Template
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
        $__internal_08a8a7b877253f2470b012d0a8a352f73ddd8f227b66b55e1a5f76f481a21f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a8a7b877253f2470b012d0a8a352f73ddd8f227b66b55e1a5f76f481a21f36->enter($__internal_08a8a7b877253f2470b012d0a8a352f73ddd8f227b66b55e1a5f76f481a21f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_08a8a7b877253f2470b012d0a8a352f73ddd8f227b66b55e1a5f76f481a21f36->leave($__internal_08a8a7b877253f2470b012d0a8a352f73ddd8f227b66b55e1a5f76f481a21f36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
