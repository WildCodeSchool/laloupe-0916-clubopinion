<?php

/* base.html.twig */
class __TwigTemplate_54acf9b5bd88582996a902c4b976e050a8ac428f67f6c0ddb2e09516536b2915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        <!--************************* HEADER *********************************-->
        ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 81
        echo "
    <!--*********************************** MAIN *****************************-->
        ";
        // line 83
        $this->displayBlock('main', $context, $blocks);
        // line 88
        echo "
        ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "
            </div>
        </div>
    </main>
    <!--********************************* FOOTER *****************************-->
    <footer class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <ul>
                    <li><a data-toggle=\"modal\" data-target=\"#credits\">Crédits</a></li><span>|</span>
                    <li><a data-toggle=\"modal\" data-target=\"#mentions_légales\" >Mentions légales</a></li>
                </ul>
            </div>
            <div class=\"modal fade\" id=\"credits\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"creditsmodal\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">x</span></button>
                            <h3 class=\"modal-title\">Crédits</h3>
                        </div>
                        <div class=\"modal-body\">
                            <h4>Développé par les étudiants de la Wild Code School :</h4>
                            <div class=\"center-block\">
                                <a href=\"https://fr.linkedin.com/in/veronique-lejeune\" target=\"_blank\">Véronique Lejeune</a><br>
                                <a href=\"https://fr.linkedin.com/in/julien-saint-laurent\" target=\"_blank\">Julien Saint-Laurent</a><br>
                                <a href=\"https://fr.linkedin.com/in/maxime-coustes\" target=\"_blank\">Maxime Coustès</a><br>
                                <a href=\"https://fr.linkedin.com/in/thifainenoirault\" target=\"_blank\">Thifaine Noirault</a>
                            </div>
                            <br>
                        </div>
                        <a href=\"http://www.wildcodeschool.fr\"><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/club/img/wcs.jpg"), "html", null, true);
        echo "\" width=\"20%\"/></a>
                        <br><br>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class=\"modal fade\" id=\"mentions_légales\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"LargeMentionslégalesmodal\">
                <div class=\"modal-dialog modal-lg\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">x</span></button>
                            <h4 class=\"modal-title\">Mentions légales</h4>
                        </div>
                            <br>
                        <div class=\"modal-body\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12\">
                                        <div class=\"center-block\">

                                                SAS MCM Presse <br>
                                                BP 2031 – 37020 Tours Cedex 1 <br>
                                                02 47 70 60 00 <br>

                                        </div>

                                        <p>
                                            <br>
                                            <div class=\"center-block\">
                                            Droits de propriété du site
                                            </div>
                                            <br>
                                            <h3>1. Présentation du site :</h3>

                                            Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site : www.clubdelopinion.com les informations suivantes :<br>

                                            Informations légales :<br>

                                            Statut du propriétaire : societe<br>
                                            Préfixe : SAS<br>
                                            Nom de la Société : MCM Presse<br>
                                            Adresse : MCM Presse BP 2031 - 37020 Cedex 1 Tours<br>
                                            Tél  : 02 47 70 60 00<br>
                                            Au Capital de : 51000 €<br>
                                            SIRET :  341 914 273 00055   R.C.S. : Tours<br>
                                            Numéro TVA intracommunautaire : FR 91 450613591<br>
                                            Adresse de courrier électronique : clubdelopinion@gmail.com<br>

                                            Le Créateur du site est : wildcodeschool.com<br>
                                            Le Responsable de la  publication est : Aurélie Vouteau<br>
                                            Contactez le responsable de la publication : a.vouteau@lettrevalloire.com<br>
                                            Le responsable de la publication est une personne physique<br>

                                            Le Webmaster est  : Aurélie Vouteau<br>
                                            Contactez le Webmaster : a.vouteau@lettrevalloire.com<br>
                                            L’hebergeur du site est : ImageImages 6-8 rue Victor Laloux 37000 Tours<br>
                                            CREDITS : les mentions légales ont étés générées par http://www.generer-mentions-legales.com
                                            <br>
                                            <br>
                                        <div class=\"text-justify\">
                                            <h3>2. Description des services fournis :</h3>

                                            Le site www.clubdelopinion.com a pour objet de fournir une information concernant l’ensemble des activités de l'organisation.
                                            Le proprietaire du site s’efforce de fournir sur le site www.clubdelopinion.com des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.
                                            Tous les informations proposées sur le site www.clubdelopinion.com sont données à titre indicatif, sont non exhaustives, et sont susceptibles d’évoluer. Elles sont données sous réserve de modifications ayant été apportées depuis leur mise en ligne.
                                            <br>
                                            <br>
                                            <h3>3. Propriété intellectuelle et contrefaçons :</h3>

                                            Le proprietaire du site est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels…
                                            Toute reproduction, représentation, modification, publication, adaptation totale ou partielle des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable à l'email : a.vouteau@lettrevalloire.com .
                                            Toute exploitation non autorisée du site ou de l’un de ces éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.
                                            <br>
                                            <br>
                                            <h3>4. Liens hypertextes et cookies :</h3>

                                            Le site www.clubdelopinion.com contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en place avec l’autorisation du proprietaire du site . Cependant, le proprietaire du site n’a pas la possibilité de vérifier le contenu des sites ainsi visités  et décline donc toute responsabilité de ce fait quand aux risques éventuels de contenus illicites.

                                            L’utilisateur est informé que lors de ses visites sur le site www.clubdelopinion.com, un ou des cookies sont susceptible de s’installer automatiquement sur son ordinateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.

                                            Le paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de refuser de la manière décrite à l’adresse suivante : www.cnil.fr
                                            Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :
                                            Sous Internet Explorer : onglet outil / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.
                                            Sous Netscape : onglet édition / préférences. Cliquez sur Avancées et choisissez Désactiver les cookies. Validez sur Ok.
                                            <br>
                                            <br>
                                            <h3>5. Protection des biens et des personnes - gestion des données personnelles :</h3>

                                            Utilisateur : Internaute se connectant, utilisant le site susnommé : www.clubdelopinion.com
                                            En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.

                                            Sur le site www.clubdelopinion.com, le proprietaire du site ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site www.clubdelopinion.com. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site www.clubdelopinion.com l’obligation ou non de fournir ces informations.
                                            Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition aux données personnelles le concernant. Pour l’exercer, adressez votre demande à www.clubdelopinion.com par email : email du webmaster ou  en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.

                                            Aucune information personnelle de l'utilisateur du site www.clubdelopinion.com n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat du site www.clubdelopinion.com à le proprietaire du site et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site www.clubdelopinion.com.
                                            Le site www.clubdelopinion.com est déclaré à la CNIL sous le numéro \"Aucune déclaration CNIL car pas de recueil de données personnelles\".

                                            Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        </div>
    </footer>

        <!--************* SCRIPTS ***************-->
        <script src=\"https://use.fontawesome.com/f0f4368368.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"http://cufon.shoqolate.com/js/cufon-yui.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/club/js/gotham-htf-book.cufonfonts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\">
            Cufon.replace('.gothamhtf-book', { fontFamily: 'GothamHTF-Book', hover: true });
        </script>
    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Le Club de l'Opinion";
    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        // line 19
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) ? $context["clubs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 20
            echo "                <header>
                    <nav class=\"navbar navbar-default\">
                        <div class=\"container-fluid\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class=\"navbar-header\">
                                <div class=\"navbar-brand\">
                                    <a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_index");
            echo "\"><img id=\"logo\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/club/img/club_opinion_sans_fond.png"), "html", null, true);
            echo "\" alt=\"Logo\" /></a>
                                </div>
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-expanded=\"false\">
                                    <span class=\"sr-only\">Navigation</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                            </div>
                            <br>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Accueil <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_index");
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre11", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation_index");
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre12", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagemembre_index");
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre13", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rcvl_index");
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre14", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ara_index");
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre15", array());
            echo "</a></li>
                                            ";
            // line 47
            if ($this->getAttribute($context["club"], "soustitre16", array())) {
                // line 48
                echo "                                                <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_sup_index");
                echo "\">";
                echo $this->getAttribute($context["club"], "soustitre16", array());
                echo "</a></li>
                                            ";
            } else {
            }
            // line 50
            echo "                                        </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-cutlery\" aria-hidden=\"true\"></i> Nos évènements <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evrcvl_index");
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre21", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evara_index");
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre22", array());
            echo "</a></li>
                                            ";
            // line 57
            if ($this->getAttribute($context["club"], "soustitre23", array())) {
                // line 58
                echo "                                                <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evsup_index");
                echo "\">";
                echo $this->getAttribute($context["club"], "soustitre23", array());
                echo "</a></li>
                                            ";
            } else {
            }
            // line 60
            echo "                                        </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i> Avantages du club <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("av1_index");
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre31", array());
            echo "</a></li>
                                            <li><a href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("av2_index");
            echo "\">";
            echo $this->getAttribute($context["club"], "soustitre32", array());
            echo "</a></li>
                                            ";
            // line 67
            if ($this->getAttribute($context["club"], "soustitre33", array())) {
                // line 68
                echo "                                                <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("av3_index");
                echo "\">";
                echo $this->getAttribute($context["club"], "soustitre33", array());
                echo "</a></li>
                                            ";
            } else {
            }
            // line 70
            echo "                                        </ul>
                                    </li>
                                    <li><a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_index");
            echo "\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Contact</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </header>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        ";
    }

    // line 83
    public function block_main($context, array $blocks = array())
    {
        // line 84
        echo "        <main class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-xs-12\">
        ";
    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 89,  391 => 84,  388 => 83,  384 => 80,  370 => 72,  366 => 70,  357 => 68,  355 => 67,  349 => 66,  343 => 65,  336 => 60,  327 => 58,  325 => 57,  319 => 56,  313 => 55,  306 => 50,  297 => 48,  295 => 47,  289 => 46,  283 => 45,  277 => 44,  271 => 43,  265 => 42,  244 => 26,  236 => 20,  231 => 19,  228 => 18,  222 => 8,  211 => 235,  93 => 120,  61 => 90,  59 => 89,  56 => 88,  54 => 83,  50 => 81,  48 => 18,  37 => 10,  32 => 8,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/html/projets/clubdelopinion/app/Resources/views/base.html.twig");
    }
}
