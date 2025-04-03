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

/* partials/place.html.twig */
class __TwigTemplate_f5b8891d417e27c40946af0e863ed69769406c868ab82f5e0c5a9842cc9509a4 extends \Twig\Template
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
        echo "<!-- Page Title -->
<div class=\"page-title accent-background\">
  <div class=\"container d-lg-flex justify-content-between align-items-center\">
    <!-- Tiêu đề của trang hiện tại -->
    <h1 class=\"mb-2 mb-lg-0\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h1>
    <nav class=\"breadcrumbs\">
      <ol>
        <!-- Link và tiêu đề của trang cha (hoặc trang chủ nếu không có cha) -->
        <li>
        ";
        // line 13
        echo "          ";
        if (($this->getAttribute(($context["page"] ?? null), "parent", []) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "menu", []) != "Pages"))) {
            // line 14
            echo "              <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []), "html", null, true);
            echo "\">
                  ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "menu", []), "html", null, true);
            echo "
              </a>
          ";
        } else {
            // line 18
            echo "              ";
            $context["home_page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method");
            // line 19
            echo "              ";
            if ((($context["home_page"] ?? null) && $this->getAttribute(($context["home_page"] ?? null), "menu", []))) {
                // line 20
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["home_page"] ?? null), "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["home_page"] ?? null), "menu", []), "html", null, true);
                echo "</a>
              ";
            }
            // line 22
            echo "          ";
        }
        // line 23
        echo "        </li>
        <!-- Tiêu đề của trang hiện tại -->
        <li class=\"current\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->
";
    }

    public function getTemplateName()
    {
        return "partials/place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  75 => 23,  72 => 22,  64 => 20,  61 => 19,  58 => 18,  52 => 15,  47 => 14,  44 => 13,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Page Title -->
<div class=\"page-title accent-background\">
  <div class=\"container d-lg-flex justify-content-between align-items-center\">
    <!-- Tiêu đề của trang hiện tại -->
    <h1 class=\"mb-2 mb-lg-0\">{{ page.title }}</h1>
    <nav class=\"breadcrumbs\">
      <ol>
        <!-- Link và tiêu đề của trang cha (hoặc trang chủ nếu không có cha) -->
        <li>
        {# <a href=\"{% if page.parent and page.parent.menu == 'Pages' %}{{ page.find('/home').url }}{% else %}{{ page.parent.url}}{% endif %}\">
            {% if page.parent and page.parent.menu == 'Pages' %}Trang chủ{% else %}{{ page.parent.menu }}{% endif %}
          </a> #}
          {% if page.parent and page.parent.menu != 'Pages' %}
              <a href=\"{{ page.parent.url }}\">
                  {{ page.parent.menu }}
              </a>
          {% else %}
              {% set home_page = page.find('/home') %}
              {% if home_page and home_page.menu %}
                  <a href=\"{{ home_page.url }}\">{{ home_page.menu }}</a>
              {% endif %}
          {% endif %}
        </li>
        <!-- Tiêu đề của trang hiện tại -->
        <li class=\"current\">{{ page.title }}</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->
{# {% else %}{{ page.parent.url ?: page.parent.url  }} #}", "partials/place.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\quark\\templates\\partials\\place.html.twig");
    }
}
