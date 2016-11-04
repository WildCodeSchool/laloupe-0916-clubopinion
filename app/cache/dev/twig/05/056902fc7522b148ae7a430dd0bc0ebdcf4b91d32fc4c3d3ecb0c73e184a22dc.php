<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_88cb3cb34c25fb0019e9c2b25b10fa6e8b363e66bfb453ca14aae5b3528bc56e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_252fbc91d1ac44cd4e6f354b5a91ec2c52002a03fba08e591da61f42bca17fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252fbc91d1ac44cd4e6f354b5a91ec2c52002a03fba08e591da61f42bca17fa8->enter($__internal_252fbc91d1ac44cd4e6f354b5a91ec2c52002a03fba08e591da61f42bca17fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<!--************************* HEAD *************************************-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/club/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<header>
    <div style=\"background: #0C1319;\">
        <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_index");
        echo "\"><img id=\"logologin\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/club/img/club_opinion_sans_fond.png"), "html", null, true);
        echo "\" alt=\"Logo\" /></a>
        <br>
        <br>
        <br>
    </div>
    <div>
        <h1 style=\"font-weight: bold;\">Accès Administrateur</h1>
        <br>
        <br>
    </div>
</header>

";
        // line 33
        echo "
";
        // line 34
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 35
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 37
        echo "<div class=\"row\" style=\"text-align: center;\">

<form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 40
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 41
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 43
        echo "
    <div class=\"form-group\">
    <label for=\"username\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>
    <div class=\"form-group\">
    <label for=\"password\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>
    <div class=\"form-group\">
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
</div>
<!--************* SCRIPTS ***************-->
<script src=\"https://use.fontawesome.com/f0f4368368.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<script src=\"http://cufon.shoqolate.com/js/cufon-yui.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/club/js/gotham-htf-book.cufonfonts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
    Cufon.replace('.gothamhtf-book', { fontFamily: 'GothamHTF-Book', hover: true });
</script>
</body>
</html>";
        
        $__internal_252fbc91d1ac44cd4e6f354b5a91ec2c52002a03fba08e591da61f42bca17fa8->leave($__internal_252fbc91d1ac44cd4e6f354b5a91ec2c52002a03fba08e591da61f42bca17fa8_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8222f51a1eca3804f87eba2d61cd16b1134b9891abfc7e41b2973ea80544c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8222f51a1eca3804f87eba2d61cd16b1134b9891abfc7e41b2973ea80544c39->enter($__internal_d8222f51a1eca3804f87eba2d61cd16b1134b9891abfc7e41b2973ea80544c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login_content.html.twig"));

        echo "Le Club de l'Opinion";
        
        $__internal_d8222f51a1eca3804f87eba2d61cd16b1134b9891abfc7e41b2973ea80544c39->leave($__internal_d8222f51a1eca3804f87eba2d61cd16b1134b9891abfc7e41b2973ea80544c39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 8,  135 => 64,  124 => 56,  119 => 54,  111 => 49,  105 => 46,  101 => 45,  97 => 43,  91 => 41,  89 => 40,  85 => 39,  81 => 37,  75 => 35,  73 => 34,  70 => 33,  53 => 20,  41 => 11,  37 => 10,  32 => 8,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<!--************************* HEAD *************************************-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Le Club de l'Opinion{% endblock %}</title>
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/club/css/style.css') }}\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<header>
    <div style=\"background: #0C1319;\">
        <a href=\"{{ path('club_index') }}\"><img id=\"logologin\" src=\"{{ asset('bundles/club/img/club_opinion_sans_fond.png') }}\" alt=\"Logo\" /></a>
        <br>
        <br>
        <br>
    </div>
    <div>
        <h1 style=\"font-weight: bold;\">Accès Administrateur</h1>
        <br>
        <br>
    </div>
</header>

{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"row\" style=\"text-align: center;\">

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <div class=\"form-group\">
    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
    </div>
    <div class=\"form-group\">
    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>
    <div class=\"form-group\">
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
    </div>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
</form>
</div>
<!--************* SCRIPTS ***************-->
<script src=\"https://use.fontawesome.com/f0f4368368.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<script src=\"http://cufon.shoqolate.com/js/cufon-yui.js\" type=\"text/javascript\"></script>
<script src=\"{{ asset('bundles/club/js/gotham-htf-book.cufonfonts.js') }}\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
    Cufon.replace('.gothamhtf-book', { fontFamily: 'GothamHTF-Book', hover: true });
</script>
</body>
</html>", "FOSUserBundle:Security:login_content.html.twig", "/var/www/html/projets/clubdelopinion/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
