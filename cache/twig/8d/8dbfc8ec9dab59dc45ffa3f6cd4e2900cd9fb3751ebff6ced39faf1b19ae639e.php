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

/* partials/base.html.twig */
class __TwigTemplate_64c04403c4c39e884e643833e8edb162ce5c885f6adcabfc13294cea1bc4572f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base.html.twig", 4);
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
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
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
<head>
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('assets', $context, $blocks);
        // line 63
        echo "</head>
<body  class=\"index-page\">
    <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
        <div class=\"container position-relative d-flex align-items-center\">

            ";
        // line 68
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 68)->display($context);
        // line 69
        echo "
            <nav id=\"navmenu\" class=\"navmenu\">
            ";
        // line 71
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 74
        echo "                <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
            </nav>

            ";
        // line 77
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 78
            echo "                <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 78)->display($context);
            echo "</span>
            ";
        }
        // line 80
        echo "            ";
        // line 85
        echo "        </div>
    </header>
  <main class=\"main\">
    ";
        // line 89
        echo "     ";
        $this->displayBlock('hero', $context, $blocks);
        // line 90
        echo "
        <section id=\"start\">
        ";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "        </section>
   

    ";
        // line 117
        echo "
";
        // line 118
        $this->displayBlock('bottom', $context, $blocks);
        // line 121
        echo "
     ";
        // line 122
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "  </main>

    <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>

  <!-- Vendor JS Files -->
  <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/aos/aos.js\"></script>
  <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
  <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/waypoints/noframework.waypoints.js\"></script>
  <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/swiper/swiper-bundle.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/js/main.js\"></script>
</body>
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
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo "  ";
        }
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 14
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "
    ";
        // line 16
        $this->loadTemplate("partials/favicon.html.twig", "partials/base.html.twig", 16)->display($context);
        // line 17
        echo "
    <link rel=\"canonical\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />


    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
    <!-- Google tag (gtag.js) -->
   <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-3X9T7CW009\"></script>
   <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-3X9T7CW009');
    </script>
    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 40
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 41
        echo "
    ";
        // line 42
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 43
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 44
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 45
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 46
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
        echo " 
    ";
        // line 47
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 48
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/howitwork.css"], "method");
        // line 49
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/form.css"], "method");
        // line 50
        echo " 
";
    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        // line 54
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 55
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 56
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 59
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 60
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 61
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 71
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 72
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 72)->display($context);
        // line 73
        echo "            ";
    }

    // line 89
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 92
    public function block_body($context, array $blocks = [])
    {
        // line 93
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 94
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 95
        $this->displayBlock('messages', $context, $blocks);
        // line 98
        echo "                    ";
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
                </section>
            </section>
        ";
    }

    // line 95
    public function block_messages($context, array $blocks = [])
    {
        // line 96
        echo "                        ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 96);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 97
        echo "                    ";
    }

    // line 118
    public function block_bottom($context, array $blocks = [])
    {
        // line 119
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    // line 122
    public function block_footer($context, array $blocks = [])
    {
        // line 123
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 123)->display($context);
        // line 124
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 124,  402 => 123,  399 => 122,  392 => 119,  389 => 118,  385 => 97,  374 => 96,  371 => 95,  362 => 98,  360 => 95,  356 => 94,  353 => 93,  350 => 92,  345 => 89,  341 => 73,  338 => 72,  335 => 71,  328 => 61,  323 => 60,  320 => 59,  310 => 56,  307 => 55,  304 => 54,  301 => 53,  296 => 50,  293 => 49,  290 => 48,  288 => 47,  283 => 46,  280 => 45,  275 => 44,  270 => 43,  268 => 42,  265 => 41,  262 => 40,  255 => 37,  251 => 36,  247 => 35,  243 => 34,  239 => 33,  221 => 18,  218 => 17,  216 => 16,  213 => 15,  211 => 14,  201 => 10,  198 => 9,  195 => 8,  181 => 143,  175 => 140,  171 => 139,  167 => 138,  163 => 137,  159 => 136,  155 => 135,  151 => 134,  147 => 133,  137 => 125,  135 => 122,  132 => 121,  130 => 118,  127 => 117,  122 => 102,  120 => 92,  116 => 90,  113 => 89,  108 => 85,  106 => 80,  100 => 78,  98 => 77,  93 => 74,  91 => 71,  87 => 69,  85 => 68,  78 => 63,  76 => 59,  73 => 58,  71 => 53,  68 => 52,  66 => 40,  63 => 39,  61 => 8,  56 => 6,  53 => 5,  25 => 4,);
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
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e('html') }}  {% endif %}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    {% include 'partials/favicon.html.twig' %}

    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />


    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
    <!-- Google tag (gtag.js) -->
   <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-3X9T7CW009\"></script>
   <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-3X9T7CW009');
    </script>
    <!-- Vendor CSS Files -->
    <link href=\"{{ theme_url }}/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"{{ theme_url }}/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
    <link href=\"{{ theme_url }}/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
    <link href=\"{{ theme_url }}/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
    <link href=\"{{ theme_url }}/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">
{% endblock head %}

{% block stylesheets %}

    {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
    {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
    {% do assets.addCss('theme://css/line-awesome.min.css') %} 
    {% do assets.addCss('theme://css/custom.css') %}
    {% do assets.addCss('theme://css/howitwork.css') %}
    {% do assets.addCss('theme://css/form.css') %}
 
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body  class=\"index-page\">
    <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
        <div class=\"container position-relative d-flex align-items-center\">

            {% include 'partials/logo.html.twig' %}

            <nav id=\"navmenu\" class=\"navmenu\">
            {% block header_navigation %}
                {% include 'partials/navigation.html.twig' %}
            {% endblock %}
                <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
            </nav>

            {% if config.plugins.login.enabled and grav.user.username %}
                <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
            {% endif %}
            {# <div class=\"header-social-links\">
                <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
            </div>     #}
        </div>
    </header>
  <main class=\"main\">
    {# {% block content %}{% endblock %} #}
     {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {{ block('content_surround') }}
                </section>
            </section>
        {% endblock %}
        </section>
   

    {# {% block mobile %}
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>
    {% endblock %} #}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

     {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}
  </main>

    <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>

  <!-- Vendor JS Files -->
  <script src=\"{{ theme_url }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/aos/aos.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/waypoints/noframework.waypoints.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/swiper/swiper-bundle.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"{{ theme_url }}/assets/js/main.js\"></script>
</body>
</html> 
", "partials/base.html.twig", "C:\\xampp\\htdocs\\bookdevn\\user\\themes\\quark\\templates\\partials\\base.html.twig");
    }
    private $deferred;
}
