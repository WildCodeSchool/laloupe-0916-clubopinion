<?php

/* ClubBundle:supevenements:index.html.twig */
class __TwigTemplate_f2e86dc86cacc0102d6768d9b9714254e33f621b35b9cc6d6482943a32c2d19c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:supevenements:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d78941ca3f45a98a27d04e8a79efd78e6e5c62899cef6066219342c1575d4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d78941ca3f45a98a27d04e8a79efd78e6e5c62899cef6066219342c1575d4e6->enter($__internal_1d78941ca3f45a98a27d04e8a79efd78e6e5c62899cef6066219342c1575d4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:supevenements:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d78941ca3f45a98a27d04e8a79efd78e6e5c62899cef6066219342c1575d4e6->leave($__internal_1d78941ca3f45a98a27d04e8a79efd78e6e5c62899cef6066219342c1575d4e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52b542d93170e28c056ad7115adac0762f75ac5b4a09669f7c0669a2b19658af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b542d93170e28c056ad7115adac0762f75ac5b4a09669f7c0669a2b19658af->enter($__internal_52b542d93170e28c056ad7115adac0762f75ac5b4a09669f7c0669a2b19658af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:supevenements:index.html.twig"));

        // line 4
        echo "    <h1>Supevenements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Paragraph</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["supEvenements"]) ? $context["supEvenements"] : $this->getContext($context, "supEvenements")));
        foreach ($context['_seq'] as $context["_key"] => $context["supEvenement"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supevenements_show", array("id" => $this->getAttribute($context["supEvenement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["supEvenement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["supEvenement"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo $this->getAttribute($context["supEvenement"], "paragraph", array());
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supevenements_show", array("id" => $this->getAttribute($context["supEvenement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supevenements_edit", array("id" => $this->getAttribute($context["supEvenement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supEvenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supevenements_new");
        echo "\">Create a new supEvenement</a>
        </li>
    </ul>
";
        
        $__internal_52b542d93170e28c056ad7115adac0762f75ac5b4a09669f7c0669a2b19658af->leave($__internal_52b542d93170e28c056ad7115adac0762f75ac5b4a09669f7c0669a2b19658af_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:supevenements:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Supevenements list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Paragraph</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for supEvenement in supEvenements %}
            <tr>
                <td><a href=\"{{ path('supevenements_show', { 'id': supEvenement.id }) }}\">{{ supEvenement.id }}</a></td>
                <td>{{ supEvenement.title }}</td>
                <td>{{ supEvenement.paragraph|raw  }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('supevenements_show', { 'id': supEvenement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('supevenements_edit', { 'id': supEvenement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('supevenements_new') }}\">Create a new supEvenement</a>
        </li>
    </ul>
{% endblock %}
", "ClubBundle:supevenements:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/supevenements/index.html.twig");
    }
}
