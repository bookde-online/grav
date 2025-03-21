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

/* partials/header_en.html.twig */
class __TwigTemplate_65373b9602a7839f5e418daef6405430ee1b8da4a8639d87ce6c26658e7fda83 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Hotel Website Design - Optimize Bookings & Increase Revenue</title>
  <meta name=\"description\" content=\"Professional hotel website design service, SEO optimization, booking support & conversion rate increase. Optimal solution to help hotel owners operate effectively.\">
  <meta name=\"keywords\" content=\"hotel website design, hotel website creation, hotel website construction, online booking, hotel SEO optimization, hotel website solutions\">

  <!-- Favicons -->
  <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/favicon.webp\" rel=\"icon\">
  <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/apple-touch-icon.webp\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/css/main.css\" rel=\"stylesheet\">";
    }

    public function getTemplateName()
    {
        return "partials/header_en.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  43 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Hotel Website Design - Optimize Bookings & Increase Revenue</title>
  <meta name=\"description\" content=\"Professional hotel website design service, SEO optimization, booking support & conversion rate increase. Optimal solution to help hotel owners operate effectively.\">
  <meta name=\"keywords\" content=\"hotel website design, hotel website creation, hotel website construction, online booking, hotel SEO optimization, hotel website solutions\">

  <!-- Favicons -->
  <link href=\"{{ theme_url }}/assets/img/favicon.webp\" rel=\"icon\">
  <link href=\"{{ theme_url }}/assets/img/apple-touch-icon.webp\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"{{ theme_url }}/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"{{ theme_url }}/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"{{ theme_url }}/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"{{ theme_url }}/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"{{ theme_url }}/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"{{ theme_url }}/assets/css/main.css\" rel=\"stylesheet\">", "partials/header_en.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\partials\\header_en.html.twig");
    }
}
