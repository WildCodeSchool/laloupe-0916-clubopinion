<?php

/* ClubBundle:evenements:index.html.twig */
class __TwigTemplate_88468ad34190212f6fe52153847a1ed3b98070a7edb159c7cde3c0e38c87a544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:evenements:index.html.twig", 1);
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
        $__internal_9d731ff10d82d6908c4ca76555783e37fe593335e247affbf3c4689966be1873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d731ff10d82d6908c4ca76555783e37fe593335e247affbf3c4689966be1873->enter($__internal_9d731ff10d82d6908c4ca76555783e37fe593335e247affbf3c4689966be1873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:evenements:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d731ff10d82d6908c4ca76555783e37fe593335e247affbf3c4689966be1873->leave($__internal_9d731ff10d82d6908c4ca76555783e37fe593335e247affbf3c4689966be1873_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9486ed84828b8524fd195fc4852802583218bbdb6f584cf80cbcbbf6d0582735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9486ed84828b8524fd195fc4852802583218bbdb6f584cf80cbcbbf6d0582735->enter($__internal_9486ed84828b8524fd195fc4852802583218bbdb6f584cf80cbcbbf6d0582735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:evenements:index.html.twig"));

        // line 4
        echo "    <h1>Evenements list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) ? $context["evenements"] : $this->getContext($context, "evenements")));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenements_show", array("id" => $this->getAttribute($context["evenement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo $this->getAttribute($context["evenement"], "paragraph", array());
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenements_show", array("id" => $this->getAttribute($context["evenement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenements_edit", array("id" => $this->getAttribute($context["evenement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenements_new");
        echo "\">Create a new evenement</a>
        </li>
    </ul>
";
        
        $__internal_9486ed84828b8524fd195fc4852802583218bbdb6f584cf80cbcbbf6d0582735->leave($__internal_9486ed84828b8524fd195fc4852802583218bbdb6f584cf80cbcbbf6d0582735_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:evenements:index.html.twig";
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
    <h1>Evenements list</h1>

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
        {% for evenement in evenements %}
            <tr>
                <td><a href=\"{{ path('evenements_show', { 'id': evenement.id }) }}\">{{ evenement.id }}</a></td>
                <td>{{ evenement.title }}</td>
                <td>{{ evenement.paragraph|raw  }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('evenements_show', { 'id': evenement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('evenements_edit', { 'id': evenement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('evenements_new') }}\">Create a new evenement</a>
        </li>
    </ul>
{% endblock %}
", "ClubBundle:evenements:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/evenements/index.html.twig");
    }
}
