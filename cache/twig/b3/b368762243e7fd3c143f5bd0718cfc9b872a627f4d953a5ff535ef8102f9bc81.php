<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base-home.html.twig */
class __TwigTemplate_e1b3110be0d917f390b0f2491d068f31aaeb6d77a287449350505d424dea64c9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base-home.html.twig", 4);
        // line 4
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 4, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'header_navigation' => [$this, 'block_header_navigation'],
                'content' => [$this, 'block_content'],
                'bottom' => [$this, 'block_bottom'],
                'footer' => [$this, 'block_footer'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 5
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
\t<head>
\t\t";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "
\t\t";
        // line 37
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 47
        echo "
\t\t";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "
\t\t";
        // line 54
        $this->displayBlock('assets', $context, $blocks);
        // line 58
        echo "\t</head>
\t<body class=\"index-page\">
\t\t<header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
\t\t\t<div class=\"container position-relative d-flex align-items-center\">

\t\t\t\t";
        // line 63
        $this->loadTemplate("partials/logo.html.twig", "partials/base-home.html.twig", 63)->display($context);
        // line 64
        echo "
\t\t\t\t<nav id=\"navmenu\" class=\"navmenu d-flex align-items-center\">
\t\t\t\t\t";
        // line 66
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 69
        echo "\t\t\t\t\t<i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
\t\t\t\t\t<div class=\"language-dropdown\">
\t\t\t\t\t\t<button class=\"dropdown-btn\" id=\"lang-toggle\">
\t\t\t\t\t\t\t  <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [], "method"), "html", null, true);
        echo ".webp\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [], "method"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<span>";
        // line 73
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [], "method")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down toggle-dropdown\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguages", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            if (($context["language"] != $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [], "method"))) {
                // line 78
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, ((($context["lang_url"] ?? null) . "/") . $context["language"]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 79
                echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
                echo "/assets/img/";
                echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                echo ".webp\" alt=\"";
                echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<span>";
                // line 80
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["language"]), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>

\t\t\t\t";
        // line 87
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 88
            echo "\t\t\t\t\t<span class=\"login-status-wrapper\">
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t";
            // line 90
            $this->loadTemplate("partials/login-status.html.twig", "partials/base-home.html.twig", 90)->display($context);
            echo "</span>
\t\t\t\t";
        }
        // line 92
        echo "\t\t\t</div>
\t\t</header>


\t\t<main class=\"main\"> ";
        // line 96
        $this->displayBlock('content', $context, $blocks);
        // line 97
        echo "\t\t\t";
        // line 111
        echo "

\t\t\t";
        // line 125
        echo "
\t\t\t";
        // line 126
        $this->displayBlock('bottom', $context, $blocks);
        // line 129
        echo "
\t\t\t";
        // line 130
        $this->displayBlock('footer', $context, $blocks);
        // line 133
        echo "\t\t</main>

\t\t<a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a>

\t\t<!-- Preloader -->
\t\t<div id=\"preloader\"></div>

\t\t<!-- Vendor JS Files -->
\t <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/php-email-form/validate.js\"></script>
\t\t <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/aos/aos.js\"></script>
\t\t <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/glightbox/js/glightbox.min.js\"></script>
\t\t <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
\t\t <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
\t\t <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/waypoints/noframework.waypoints.js\"></script>
\t\t <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/swiper/swiper-bundle.min.js\"></script>

\t\t<!-- Main JS File -->
\t\t <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/js/main.js\"></script>
\t</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head');
    }

    // line 8
    public function block_head_deferred($context, array $blocks = [])
    {
        // line 9
        echo "\t\t\t<meta charset=\"utf-8\"/>
\t\t\t<title>
\t\t\t\t";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            // line 12
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo "
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t</title>

\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t\t";
        // line 18
        $this->loadTemplate("partials/metadata.html.twig", "partials/base-home.html.twig", 18)->display($context);
        // line 19
        echo "
\t\t\t";
        // line 20
        $this->loadTemplate("partials/favicon.html.twig", "partials/base-home.html.twig", 20)->display($context);
        // line 21
        echo "\t\t\t<link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\"/>


\t\t\t<link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
\t\t\t<link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">
\t\t";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 37
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 38
        echo "
\t\t\t";
        // line 44
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 45
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/benefit.css"], "method");
        // line 46
        echo "\t\t";
    }

    // line 48
    public function block_javascripts($context, array $blocks = [])
    {
        // line 49
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 50
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 51
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 52
        echo "\t\t";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 54
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 55
        echo "\t\t\t";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
\t\t\t";
        // line 56
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
\t\t";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 66
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 67
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base-home.html.twig", 67)->display($context);
        // line 68
        echo "\t\t\t\t\t";
    }

    // line 96
    public function block_content($context, array $blocks = [])
    {
    }

    // line 126
    public function block_bottom($context, array $blocks = [])
    {
        // line 127
        echo "\t\t\t\t";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
\t\t\t";
    }

    // line 130
    public function block_footer($context, array $blocks = [])
    {
        // line 131
        echo "\t\t\t\t";
        $this->loadTemplate("partials/footer.html.twig", "partials/base-home.html.twig", 131)->display($context);
        // line 132
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "partials/base-home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 132,  384 => 131,  381 => 130,  374 => 127,  371 => 126,  366 => 96,  362 => 68,  359 => 67,  356 => 66,  349 => 56,  344 => 55,  341 => 54,  332 => 52,  329 => 51,  326 => 50,  323 => 49,  320 => 48,  316 => 46,  313 => 45,  310 => 44,  307 => 38,  304 => 37,  297 => 34,  293 => 33,  289 => 32,  285 => 31,  281 => 30,  268 => 21,  266 => 20,  263 => 19,  261 => 18,  255 => 14,  249 => 12,  247 => 11,  243 => 9,  240 => 8,  226 => 153,  220 => 150,  216 => 149,  212 => 148,  208 => 147,  204 => 146,  200 => 145,  196 => 144,  192 => 143,  180 => 133,  178 => 130,  175 => 129,  173 => 126,  170 => 125,  166 => 111,  164 => 97,  162 => 96,  156 => 92,  151 => 90,  147 => 88,  145 => 87,  139 => 83,  129 => 80,  121 => 79,  116 => 78,  111 => 77,  104 => 73,  96 => 72,  91 => 69,  89 => 66,  85 => 64,  83 => 63,  76 => 58,  74 => 54,  71 => 53,  69 => 48,  66 => 47,  64 => 37,  61 => 36,  59 => 8,  54 => 6,  51 => 5,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# {% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %} #}
{% use 'blocks/base.html.twig' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
\t<head>
\t\t{% block head deferred %}
\t\t\t<meta charset=\"utf-8\"/>
\t\t\t<title>
\t\t\t\t{% if page.title %}
\t\t\t\t\t{{ page.title|e('html') }}
\t\t\t\t{% endif %}
\t\t\t</title>

\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t\t{% include 'partials/metadata.html.twig' %}

\t\t\t{% include 'partials/favicon.html.twig' %}
\t\t\t<link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>


\t\t\t<link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
\t\t\t<link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"{{ theme_url }}/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ theme_url }}/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ theme_url }}/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ theme_url }}/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ theme_url }}/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">
\t\t{% endblock head %}

\t\t{% block stylesheets %}

\t\t\t{# {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
\t\t\t    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
\t\t\t    {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
\t\t\t    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
\t\t\t    {% do assets.addCss('theme://css/line-awesome.min.css') %}  #}
\t\t\t{% do assets.addCss('theme://css/custom.css') %}
\t\t\t{% do assets.addCss('theme://css/benefit.css') %}
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{% do assets.addJs('jquery', 101) %}
\t\t\t{% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
\t\t\t{% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
\t\t{% endblock %}

\t\t{% block assets deferred %}
\t\t\t{{ assets.css()|raw }}
\t\t\t{{ assets.js()|raw }}
\t\t{% endblock %}
\t</head>
\t<body class=\"index-page\">
\t\t<header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
\t\t\t<div class=\"container position-relative d-flex align-items-center\">

\t\t\t\t{% include 'partials/logo.html.twig' %}

\t\t\t\t<nav id=\"navmenu\" class=\"navmenu d-flex align-items-center\">
\t\t\t\t\t{% block header_navigation %}
\t\t\t\t\t\t{% include 'partials/navigation.html.twig' %}
\t\t\t\t\t{% endblock %}
\t\t\t\t\t<i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
\t\t\t\t\t<div class=\"language-dropdown\">
\t\t\t\t\t\t<button class=\"dropdown-btn\" id=\"lang-toggle\">
\t\t\t\t\t\t\t  <img src=\"{{ theme_url }}/assets/img/{{ grav.language.getActive() }}.webp\" alt=\"{{ grav.language.getActive() }}\">
\t\t\t\t\t\t\t<span>{{ grav.language.getActive()|upper }}</span>
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-down toggle-dropdown\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t{% for language in grav.language.getLanguages() if language != grav.language.getActive() %}
\t\t\t\t\t\t\t\t<a href=\"{{ lang_url ~ '/' ~ language }}\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ theme_url }}/assets/img/{{ language }}.webp\" alt=\"{{ language }}\">
\t\t\t\t\t\t\t\t\t<span>{{ language|upper }}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>

\t\t\t\t{% if config.plugins.login.enabled and grav.user.username %}
\t\t\t\t\t<span class=\"login-status-wrapper\">
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t{% include 'partials/login-status.html.twig' %}</span>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</header>


\t\t<main class=\"main\"> {% block content %}{% endblock %}
\t\t\t{# {% block hero %}{% endblock %}
\t\t\t
\t\t\t        <section id=\"start\">
\t\t\t        {% block body %}
\t\t\t            <section id=\"body-wrapper\" class=\"section\">
\t\t\t                <section class=\"container {{ grid_size }}\">
\t\t\t                    {% block messages %}
\t\t\t                        {% include 'partials/messages.html.twig' ignore missing %}
\t\t\t                    {% endblock %}
\t\t\t                    {{ block('content_surround') }}
\t\t\t                </section>
\t\t\t            </section>
\t\t\t        {% endblock %}
\t\t\t        </section> #}


\t\t\t{# {% block mobile %}
\t\t\t    <div class=\"mobile-container\">
\t\t\t        <div class=\"overlay\" id=\"overlay\">
\t\t\t            <div class=\"mobile-logo\">
\t\t\t                {% include 'partials/logo.html.twig' with {mobile: true} %}
\t\t\t            </div>
\t\t\t            <nav class=\"overlay-menu\">
\t\t\t                {% include 'partials/navigation.html.twig' with {tree: true} %}
\t\t\t            </nav>
\t\t\t        </div>
\t\t\t    </div>
\t\t\t    {% endblock %} #}

\t\t\t{% block bottom %}
\t\t\t\t{{ assets.js('bottom')|raw }}
\t\t\t{% endblock %}

\t\t\t{% block footer %}
\t\t\t\t{% include 'partials/footer.html.twig' %}
\t\t\t{% endblock %}
\t\t</main>

\t\t<a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a>

\t\t<!-- Preloader -->
\t\t<div id=\"preloader\"></div>

\t\t<!-- Vendor JS Files -->
\t <script src=\"{{ theme_url }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t <script src=\"{{ theme_url }}/assets/vendor/php-email-form/validate.js\"></script>
\t\t <script src=\"{{ theme_url }}/assets/vendor/aos/aos.js\"></script>
\t\t <script src=\"{{ theme_url }}/assets/vendor/glightbox/js/glightbox.min.js\"></script>
\t\t <script src=\"{{ theme_url }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
\t\t <script src=\"{{ theme_url }}/assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
\t\t <script src=\"{{ theme_url }}/assets/vendor/waypoints/noframework.waypoints.js\"></script>
\t\t <script src=\"{{ theme_url }}/assets/vendor/swiper/swiper-bundle.min.js\"></script>

\t\t<!-- Main JS File -->
\t\t <script src=\"{{ theme_url }}/assets/js/main.js\"></script>
\t</body>
</html>
", "partials/base-home.html.twig", "C:\\xampp\\htdocs\\bookdevn\\user\\themes\\quark\\templates\\partials\\base-home.html.twig");
    }
    private $deferred;
}
