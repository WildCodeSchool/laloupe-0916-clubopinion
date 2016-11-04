<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0386fdfd58eb3ab472ca7de1508b44d966e96530ccb8b96d2158c034630a770f extends Twig_Template
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
        $__internal_f5d8eb2b27ff3294dd2c33c4d99265d112b940849bae40cb1041e6d2dbdc227c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d8eb2b27ff3294dd2c33c4d99265d112b940849bae40cb1041e6d2dbdc227c->enter($__internal_f5d8eb2b27ff3294dd2c33c4d99265d112b940849bae40cb1041e6d2dbdc227c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f5d8eb2b27ff3294dd2c33c4d99265d112b940849bae40cb1041e6d2dbdc227c->leave($__internal_f5d8eb2b27ff3294dd2c33c4d99265d112b940849bae40cb1041e6d2dbdc227c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
