<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_f59bc14af02f57b87c997c1e563512766c1831324c129b2a36d6901796c16104 extends Twig_Template
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
        $__internal_9849e41a0ecaa0963d5dff35f5899f1a468e1261793dd1a0b651e78a33b64fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9849e41a0ecaa0963d5dff35f5899f1a468e1261793dd1a0b651e78a33b64fad->enter($__internal_9849e41a0ecaa0963d5dff35f5899f1a468e1261793dd1a0b651e78a33b64fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9849e41a0ecaa0963d5dff35f5899f1a468e1261793dd1a0b651e78a33b64fad->leave($__internal_9849e41a0ecaa0963d5dff35f5899f1a468e1261793dd1a0b651e78a33b64fad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/projets/clubdelopinion/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
