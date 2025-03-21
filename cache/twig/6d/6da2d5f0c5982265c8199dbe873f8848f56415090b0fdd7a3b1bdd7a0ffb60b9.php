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

/* partials/navigation_vi.html.twig */
class __TwigTemplate_54f5fe8ba0f90b1b12e5bc71e35fe62e088d2a60f5d4b22137af925c06fbbb03 extends \Twig\Template
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
        echo "<header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center me-auto\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/logo.webp\" alt=\"Logo BookDe - Hotel Website Design Services\">
      </a>
        <nav id=\"navmenu\" class=\"navmenu\">
            <ul>

                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 11
            echo "                    ";
            $context["url"] = $this->getAttribute($context["page"], "url", []);
            // line 12
            echo "                    
                    ";
            // line 14
            echo "                    ";
            if (($this->getAttribute($context["page"], "slug", []) == "about")) {
                // line 15
                echo "                        ";
                $context["url"] = (($this->getAttribute($context["page"], "home", [])) ? ("#about") : ((($context["base_url_absolute"] ?? null) . "/#about")));
                // line 16
                echo "                    ";
            } elseif (($this->getAttribute($context["page"], "slug", []) == "services")) {
                // line 17
                echo "                        ";
                $context["url"] = (($this->getAttribute($context["page"], "home", [])) ? ("#services") : ((($context["base_url_absolute"] ?? null) . "/#services")));
                // line 18
                echo "                    ";
            }
            // line 19
            echo "
                    <li class=\"";
            // line 20
            if (($this->getAttribute($this->getAttribute($context["page"], "children", []), "count", []) > 0)) {
                echo "dropdown";
            }
            echo "\">
                        ";
            // line 21
            if (($this->getAttribute($this->getAttribute($context["page"], "children", []), "count", []) > 0)) {
                // line 22
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "</span><i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                            <ul>
                                ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 25
                    echo "                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                            </ul>
                        ";
            } else {
                // line 29
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "</a>
                        ";
            }
            // line 31
            echo "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
            <div class=\"language-dropdown\">
                    <button class=\"dropdown-btn\">
                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/vi.webp\" alt=\"Vietnamese\"><span class=\"textEng\"><u><b>VI</b></u></span><i class=\"bi bi-chevron-down toggle-dropdown\"  id=\"lang\"></i>
                    </button>
                    <div class=\"dropdown-content\">
                        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/en";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "route", []), "html", null, true);
        echo "\" class=\"vi\">
                        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/en.webp\" alt=\"English\"><span class=\"textVi\" style=\"left:-12px;\">EN</span>
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
  </header>";
    }

    public function getTemplateName()
    {
        return "partials/navigation_vi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  137 => 40,  131 => 37,  126 => 34,  118 => 31,  110 => 29,  106 => 27,  95 => 25,  91 => 24,  83 => 22,  81 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  54 => 12,  51 => 11,  47 => 10,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"{{ page.find('/home').url }}\" class=\"logo d-flex align-items-center me-auto\">
        <img src=\"{{ theme_url }}/assets/img/logo.webp\" alt=\"Logo BookDe - Hotel Website Design Services\">
      </a>
        <nav id=\"navmenu\" class=\"navmenu\">
            <ul>

                {% for page in pages.children.visible %}
                    {% set url = page.url %}
                    
                    {# Xử lý cuộn về Home rồi cuộn xuống ID mong muốn #}
                    {% if page.slug == 'about' %}
                        {% set url = page.home ? '#about' : base_url_absolute ~ '/#about' %}
                    {% elseif page.slug == 'services' %}
                        {% set url = page.home ? '#services' : base_url_absolute ~ '/#services' %}
                    {% endif %}

                    <li class=\"{% if page.children.count > 0 %}dropdown{% endif %}\">
                        {% if page.children.count > 0 %}
                            <a href=\"{{ url }}\"><span>{{ page.menu }}</span><i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                            <ul>
                                {% for child in page.children.visible %}
                                    <li><a href=\"{{ child.url }}\">{{ child.menu }}</a></li>
                                {% endfor %}
                            </ul>
                        {% else %}
                            <a href=\"{{ url }}\">{{ page.menu }}</a>
                        {% endif %}

                    </li>
                {% endfor %}

            <div class=\"language-dropdown\">
                    <button class=\"dropdown-btn\">
                    <img src=\"{{ theme_url }}/assets/img/vi.webp\" alt=\"Vietnamese\"><span class=\"textEng\"><u><b>VI</b></u></span><i class=\"bi bi-chevron-down toggle-dropdown\"  id=\"lang\"></i>
                    </button>
                    <div class=\"dropdown-content\">
                        <a href=\"{{ base_url }}/en{{ page.route }}\" class=\"vi\">
                        <img src=\"{{ theme_url }}/assets/img/en.webp\" alt=\"English\"><span class=\"textVi\" style=\"left:-12px;\">EN</span>
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
  </header>", "partials/navigation_vi.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\partials\\navigation_vi.html.twig");
    }
}
