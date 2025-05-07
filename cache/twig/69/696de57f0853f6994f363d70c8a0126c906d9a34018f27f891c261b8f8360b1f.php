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
class __TwigTemplate_befac961d2b1d86b1bba2cd62f6d26afdb538d029beb032bc1ebf109674fdd74 extends \Twig\Template
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
    ";
        // line 4
        if (($this->getAttribute(($context["page"] ?? null), "route", []) == "/")) {
            // line 5
            echo "      <!-- Chỉ hiển thị H1 nếu là trang chủ -->
      <h1 class=\"mb-2 mb-lg-0\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 8
            echo "      <!-- Tiêu đề của trang hiện tại -->
      <h1 class=\"mb-2 mb-lg-0\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <!-- Link và tiêu đề của trang cha (hoặc trang chủ nếu không có cha) -->
          <li>
            ";
            // line 14
            if (($this->getAttribute(($context["page"] ?? null), "parent", []) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "menu", []) != "Pages"))) {
                // line 15
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []), "html", null, true);
                echo "\">
                    ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "menu", []), "html", null, true);
                echo "
                </a>
            ";
            } else {
                // line 19
                echo "                ";
                $context["home_page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method");
                // line 20
                echo "                ";
                if ((($context["home_page"] ?? null) && $this->getAttribute(($context["home_page"] ?? null), "menu", []))) {
                    // line 21
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["home_page"] ?? null), "url", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["home_page"] ?? null), "menu", []), "html", null, true);
                    echo "</a>
                ";
                }
                // line 23
                echo "            ";
            }
            // line 24
            echo "          </li>
          <!-- Tiêu đề của trang hiện tại -->
          <li class=\"current\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</li>
        </ol>
      </nav>
    ";
        }
        // line 30
        echo "  </div>
</div><!-- End Page Title -->";
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
        return array (  97 => 30,  90 => 26,  86 => 24,  83 => 23,  75 => 21,  72 => 20,  69 => 19,  63 => 16,  58 => 15,  56 => 14,  48 => 9,  45 => 8,  40 => 6,  37 => 5,  35 => 4,  30 => 1,);
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
    {% if page.route == '/' %}
      <!-- Chỉ hiển thị H1 nếu là trang chủ -->
      <h1 class=\"mb-2 mb-lg-0\">{{ page.title }}</h1>
    {% else %}
      <!-- Tiêu đề của trang hiện tại -->
      <h1 class=\"mb-2 mb-lg-0\">{{ page.title }}</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <!-- Link và tiêu đề của trang cha (hoặc trang chủ nếu không có cha) -->
          <li>
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
    {% endif %}
  </div>
</div><!-- End Page Title -->", "partials/place.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\quark\\templates\\partials\\place.html.twig");
    }
}
