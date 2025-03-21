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
class __TwigTemplate_4997acf47bbe7e0270c774205739507117412578acc83da935d941fbfae6e276 extends \Twig\Template
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
        echo "
<header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center me-auto\">
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/logo.webp\" alt=\"Logo BookDe - Hotel Website Design Services\">
      </a>

        <nav id=\"navmenu\" class=\"navmenu\">
            <ul>

                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 13
            echo "                    ";
            $context["url"] = $this->getAttribute($context["page"], "url", []);
            // line 14
            echo "                    
                    ";
            // line 16
            echo "                    ";
            if (($this->getAttribute($context["page"], "slug", []) == "about")) {
                // line 17
                echo "                        ";
                $context["url"] = (($this->getAttribute($context["page"], "home", [])) ? ("#about") : ((($context["base_url_absolute"] ?? null) . "/#about")));
                // line 18
                echo "                    ";
            } elseif (($this->getAttribute($context["page"], "slug", []) == "services")) {
                // line 19
                echo "                        ";
                $context["url"] = (($this->getAttribute($context["page"], "home", [])) ? ("#services") : ((($context["base_url_absolute"] ?? null) . "/#services")));
                // line 20
                echo "                    ";
            }
            // line 21
            echo "
                    <li class=\"";
            // line 22
            if (($this->getAttribute($this->getAttribute($context["page"], "children", []), "count", []) > 0)) {
                echo "dropdown";
            }
            echo "\">
                        ";
            // line 23
            if (($this->getAttribute($this->getAttribute($context["page"], "children", []), "count", []) > 0)) {
                // line 24
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "</span><i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                            <ul>
                                ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 27
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
                // line 29
                echo "                            </ul>
                        ";
            } else {
                // line 31
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
                echo "</a>
                        ";
            }
            // line 33
            echo "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "

                <div class=\"language-dropdown\">
                    <button class=\"dropdown-btn\">
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/en.webp\" alt=\"English\">
                    <span class=\"textEng\"><u><b>EN</b></u></span>
                    <i class=\"bi bi-chevron-down toggle-dropdown\" id=\"lang\"></i>
                    </button>
                    <div class=\"dropdown-content\">
                        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["page"] ?? null), "url", []), ["/en" => "/vi"]), "html", null, true);
        echo "\" class=\"vi\">
                        <img src=\"";
        // line 46
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
        return array (  146 => 46,  142 => 45,  134 => 40,  128 => 36,  120 => 33,  112 => 31,  108 => 29,  97 => 27,  93 => 26,  85 => 24,  83 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  62 => 17,  59 => 16,  56 => 14,  53 => 13,  49 => 12,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
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
