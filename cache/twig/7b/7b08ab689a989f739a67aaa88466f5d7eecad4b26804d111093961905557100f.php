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

/* partials/navigation_en.html.twig */
class __TwigTemplate_f3aa1f15898042e61b4f3d4eea2f6f03d47f936ee788b5e75c2330de68a73cca extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navigation_en.html.twig"));

        // line 1
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navigation_en.html.twig", 1)->unwrap();
        // line 2
        echo "
<header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center me-auto\">
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/logo.webp\" alt=\"Logo BookDe - Hotel Website Design Services\">
      </a>

        <nav id=\"navmenu\" class=\"navmenu\">

            <ul ";
        // line 12
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
            ";
        // line 13
        echo $context["macros"]->getnav_loop(($context["pages"] ?? null));
        echo "

              <div class=\"language-dropdown\">
                  <button class=\"dropdown-btn\">
                  <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/en.webp\" alt=\"English\">
                  <span class=\"textEng\"><u><b>EN</b></u></span>
                  <i class=\"bi bi-chevron-down toggle-dropdown\" id=\"lang\"></i>
                  </button>
                  <div class=\"dropdown-content\">
                      <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["page"] ?? null), "url", []), ["/en" => "/vi"]), "html", null, true);
        echo "\" class=\"vi\">
                      <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/vi.webp\" alt=\"Vietnamese\">
                      <span class=\"textVi\">VI</span>
                      </a>
                  </div>
              </div>
            </ul>
            <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
        </nav>
    <div class=\"header-social-links\">
        
        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
      </div>

    </div>
  </header>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/navigation_en.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  72 => 22,  64 => 17,  57 => 13,  53 => 12,  45 => 7,  41 => 6,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}

<header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"{{ page.find('/home').url }}\" class=\"logo d-flex align-items-center me-auto\">
        <img src=\"{{ theme_url }}/assets/img/logo.webp\" alt=\"Logo BookDe - Hotel Website Design Services\">
      </a>

        <nav id=\"navmenu\" class=\"navmenu\">

            <ul {{ tree ? 'class=\"tree\"' : '' }}>
            {{ macros.nav_loop(pages) }}

              <div class=\"language-dropdown\">
                  <button class=\"dropdown-btn\">
                  <img src=\"{{ theme_url }}/assets/img/en.webp\" alt=\"English\">
                  <span class=\"textEng\"><u><b>EN</b></u></span>
                  <i class=\"bi bi-chevron-down toggle-dropdown\" id=\"lang\"></i>
                  </button>
                  <div class=\"dropdown-content\">
                      <a href=\"{{ page.url|replace({'/en': '/vi'}) }}\" class=\"vi\">
                      <img src=\"{{ theme_url }}/assets/img/vi.webp\" alt=\"Vietnamese\">
                      <span class=\"textVi\">VI</span>
                      </a>
                  </div>
              </div>
            </ul>
            <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
        </nav>
    <div class=\"header-social-links\">
        
        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
      </div>

    </div>
  </header>
", "partials/navigation_en.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\partials\\navigation_en.html.twig");
    }
}
