<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3983afbe965171dfaae183f537796af5dc6a0f0a3bf406b4f738aef9124d3358 extends Twig_Template
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
        $__internal_174e63013451feaed307d6de6aeff99fa154580b462e17519f302b57fe22e0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174e63013451feaed307d6de6aeff99fa154580b462e17519f302b57fe22e0f7->enter($__internal_174e63013451feaed307d6de6aeff99fa154580b462e17519f302b57fe22e0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_174e63013451feaed307d6de6aeff99fa154580b462e17519f302b57fe22e0f7->leave($__internal_174e63013451feaed307d6de6aeff99fa154580b462e17519f302b57fe22e0f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
