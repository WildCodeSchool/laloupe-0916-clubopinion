<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_69b59ac7b2cd0a28d921fbbb4b71dc804cfb9a0df81ccca95ac50333bd6eef40 extends Twig_Template
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
        $__internal_62ea53d92e6db24ff4d1f388b57669d9db6b07d91c2d595aa8b1ac4d3558fda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ea53d92e6db24ff4d1f388b57669d9db6b07d91c2d595aa8b1ac4d3558fda1->enter($__internal_62ea53d92e6db24ff4d1f388b57669d9db6b07d91c2d595aa8b1ac4d3558fda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_62ea53d92e6db24ff4d1f388b57669d9db6b07d91c2d595aa8b1ac4d3558fda1->leave($__internal_62ea53d92e6db24ff4d1f388b57669d9db6b07d91c2d595aa8b1ac4d3558fda1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
