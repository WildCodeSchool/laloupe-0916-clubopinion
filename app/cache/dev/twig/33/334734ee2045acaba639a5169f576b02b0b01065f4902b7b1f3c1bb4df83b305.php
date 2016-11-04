<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c4e6795471d5452599e6b05f79513956f263222c8f7e5f68a0ce0415b1f95742 extends Twig_Template
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
        $__internal_aa222da91177a9e5ab6b2c4de5b5a655ded455f1ba652990b41bdbe6948510af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa222da91177a9e5ab6b2c4de5b5a655ded455f1ba652990b41bdbe6948510af->enter($__internal_aa222da91177a9e5ab6b2c4de5b5a655ded455f1ba652990b41bdbe6948510af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_aa222da91177a9e5ab6b2c4de5b5a655ded455f1ba652990b41bdbe6948510af->leave($__internal_aa222da91177a9e5ab6b2c4de5b5a655ded455f1ba652990b41bdbe6948510af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
