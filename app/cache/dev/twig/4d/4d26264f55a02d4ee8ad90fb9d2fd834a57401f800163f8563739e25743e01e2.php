<?php

/* ClubBundle:araevenements:index.html.twig */
class __TwigTemplate_a2195cc7457c9c132c092c0ce5896821d233eef3cd9b9a833ea92545e01a0207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:araevenements:index.html.twig", 1);
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
        $__internal_a2275b6452d0df3ef32c38c608470568eea154f5ac40254ac461c14df5d93ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2275b6452d0df3ef32c38c608470568eea154f5ac40254ac461c14df5d93ad8->enter($__internal_a2275b6452d0df3ef32c38c608470568eea154f5ac40254ac461c14df5d93ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:araevenements:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2275b6452d0df3ef32c38c608470568eea154f5ac40254ac461c14df5d93ad8->leave($__internal_a2275b6452d0df3ef32c38c608470568eea154f5ac40254ac461c14df5d93ad8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_adf057f2467b1b1b147cac979d8d74dc57b4e3388f5eb3724089533d66b265e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf057f2467b1b1b147cac979d8d74dc57b4e3388f5eb3724089533d66b265e8->enter($__internal_adf057f2467b1b1b147cac979d8d74dc57b4e3388f5eb3724089533d66b265e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:araevenements:index.html.twig"));

        // line 4
        echo "    <h1>Araevenements list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["araEvenements"]) ? $context["araEvenements"] : $this->getContext($context, "araEvenements")));
        foreach ($context['_seq'] as $context["_key"] => $context["araEvenement"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("araevenements_show", array("id" => $this->getAttribute($context["araEvenement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["araEvenement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["araEvenement"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo $this->getAttribute($context["araEvenement"], "paragraph", array());
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("araevenements_show", array("id" => $this->getAttribute($context["araEvenement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("araevenements_edit", array("id" => $this->getAttribute($context["araEvenement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['araEvenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("araevenements_new");
        echo "\">Create a new araEvenement</a>
        </li>
    </ul>
";
        
        $__internal_adf057f2467b1b1b147cac979d8d74dc57b4e3388f5eb3724089533d66b265e8->leave($__internal_adf057f2467b1b1b147cac979d8d74dc57b4e3388f5eb3724089533d66b265e8_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:araevenements:index.html.twig";
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
    <h1>Araevenements list</h1>

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
        {% for araEvenement in araEvenements %}
            <tr>
                <td><a href=\"{{ path('araevenements_show', { 'id': araEvenement.id }) }}\">{{ araEvenement.id }}</a></td>
                <td>{{ araEvenement.title }}</td>
                <td>{{ araEvenement.paragraph|raw  }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('araevenements_show', { 'id': araEvenement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('araevenements_edit', { 'id': araEvenement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('araevenements_new') }}\">Create a new araEvenement</a>
        </li>
    </ul>
{% endblock %}
", "ClubBundle:araevenements:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/araevenements/index.html.twig");
    }
}
