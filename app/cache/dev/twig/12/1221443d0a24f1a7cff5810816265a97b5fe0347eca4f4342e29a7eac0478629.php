<?php

/* ClubBundle:membres:index.html.twig */
class __TwigTemplate_3c48298807e87365636e9c86118667391feff7a1bf5a298e3714f7305408782b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ClubBundle:membres:index.html.twig", 1);
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
        $__internal_eca45cf635054fa5ee15896a03ab46ccba8094c82b991f6ddf1d9ee53c73f24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca45cf635054fa5ee15896a03ab46ccba8094c82b991f6ddf1d9ee53c73f24e->enter($__internal_eca45cf635054fa5ee15896a03ab46ccba8094c82b991f6ddf1d9ee53c73f24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:membres:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eca45cf635054fa5ee15896a03ab46ccba8094c82b991f6ddf1d9ee53c73f24e->leave($__internal_eca45cf635054fa5ee15896a03ab46ccba8094c82b991f6ddf1d9ee53c73f24e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c81cddc418649d6040bd8b26ed2ca4718bc71160d692fc9e08ac52d8878ee433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81cddc418649d6040bd8b26ed2ca4718bc71160d692fc9e08ac52d8878ee433->enter($__internal_c81cddc418649d6040bd8b26ed2ca4718bc71160d692fc9e08ac52d8878ee433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ClubBundle:membres:index.html.twig"));

        // line 5
        echo "    <h1>Membres list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membres_show", array("id" => $this->getAttribute($context["membre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membres_show", array("id" => $this->getAttribute($context["membre"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membres_edit", array("id" => $this->getAttribute($context["membre"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membres_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_c81cddc418649d6040bd8b26ed2ca4718bc71160d692fc9e08ac52d8878ee433->leave($__internal_c81cddc418649d6040bd8b26ed2ca4718bc71160d692fc9e08ac52d8878ee433_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:membres:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 39,  96 => 34,  84 => 28,  78 => 25,  71 => 21,  67 => 20,  61 => 19,  58 => 18,  54 => 17,  40 => 5,  34 => 4,  11 => 1,);
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
    <h1>Membres list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for membre in membres %}
            <tr>
                <td><a href=\"{{ path('membres_show', { 'id': membre.id }) }}\">{{ membre.id }}</a></td>
                <td>{{ membre.name }}</td>
                <td>{{ membre.description }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('membres_show', { 'id': membre.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('membres_edit', { 'id': membre.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('membres_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
", "ClubBundle:membres:index.html.twig", "/var/www/html/projets/clubdelopinion/src/ClubBundle/Resources/views/membres/index.html.twig");
    }
}
