<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_55abfd44c150e4ee7e60ec9ed5d30eb535326218a9b64c8d15622a1e219431de extends Twig_Template
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
        $__internal_5523ecc1d236fd9dfd33ca9648226662c71a4f77fb88eddfb37aac47ca53083a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5523ecc1d236fd9dfd33ca9648226662c71a4f77fb88eddfb37aac47ca53083a->enter($__internal_5523ecc1d236fd9dfd33ca9648226662c71a4f77fb88eddfb37aac47ca53083a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5523ecc1d236fd9dfd33ca9648226662c71a4f77fb88eddfb37aac47ca53083a->leave($__internal_5523ecc1d236fd9dfd33ca9648226662c71a4f77fb88eddfb37aac47ca53083a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
