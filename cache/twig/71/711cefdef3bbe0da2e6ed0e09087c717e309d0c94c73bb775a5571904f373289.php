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

/* modular/hero.html.twig */
class __TwigTemplate_dd3f052055e115683ba13a7be5eaebbfd83fbf70dcd3e8588f3909d0160df2f1 extends \Twig\Template
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
";
        // line 2
        $context["banners"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "banners", []);
        // line 3
        echo "
";
        // line 4
        if ( !twig_test_empty(($context["banners"] ?? null))) {
            // line 5
            echo "<section id=\"hero\" class=\"hero section dark-background\">
        <div id=\"hero-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 8
                echo "                <div class=\"carousel-item";
                if ($this->getAttribute($context["loop"], "first", [])) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 9
                if ($this->getAttribute($context["banner"], "image", [])) {
                    // line 10
                    echo "                        ";
                    $context["image"] = twig_first($this->env, $this->getAttribute($context["banner"], "image", []));
                    // line 11
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["image"] ?? null), "name", []), [], "array"), "url", []), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "title", []));
                    echo "\">
                    ";
                }
                // line 13
                echo "                    ";
                if ($this->getAttribute($context["banner"], "title", [])) {
                    // line 14
                    echo "                        <div class=\"container\">
                            <h2>";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "title", []));
                    echo "</h2>
                            ";
                    // line 16
                    if ($this->getAttribute($context["banner"], "subtitle", [])) {
                        echo "<p>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "subtitle", []));
                        echo "</p>";
                    }
                    // line 17
                    echo "                            ";
                    if (($this->getAttribute($context["banner"], "button_link", []) && $this->getAttribute($context["banner"], "button_text", []))) {
                        // line 18
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "button_link", []));
                        echo "\" class=\"btn-get-started\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "button_text", []));
                        echo "</a>
                            ";
                    }
                    // line 20
                    echo "                        </div>
                    ";
                }
                // line 22
                echo "                </div>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
            <a class=\"carousel-control-prev\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
            </a>

            <a class=\"carousel-control-next\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
            </a>

                    <ol class=\"carousel-indicators\"></ol>
        </div>
</section>
";
        }
        // line 37
        echo "


";
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 37,  127 => 24,  112 => 22,  108 => 20,  100 => 18,  97 => 17,  91 => 16,  87 => 15,  84 => 14,  81 => 13,  73 => 11,  70 => 10,  68 => 9,  61 => 8,  44 => 7,  40 => 5,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
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
{% set banners = page.header.banners %}

{% if banners is not empty %}
<section id=\"hero\" class=\"hero section dark-background\">
        <div id=\"hero-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">
            {% for banner in banners %}
                <div class=\"carousel-item{% if loop.first %} active{% endif %}\">
                    {% if banner.image %}
                        {% set image = banner.image|first %}
                        <img src=\"{{ page.media[image.name].url }}\" alt=\"{{ banner.title|e }}\">
                    {% endif %}
                    {% if banner.title %}
                        <div class=\"container\">
                            <h2>{{ banner.title|e }}</h2>
                            {% if banner.subtitle %}<p>{{ banner.subtitle|e }}</p>{% endif %}
                            {% if banner.button_link and banner.button_text %}
                                <a href=\"{{ banner.button_link|e }}\" class=\"btn-get-started\">{{ banner.button_text|e }}</a>
                            {% endif %}
                        </div>
                    {% endif %}
                </div>
            {% endfor %}

            <a class=\"carousel-control-prev\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"prev\">
                <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
            </a>

            <a class=\"carousel-control-next\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"next\">
                <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
            </a>

                    <ol class=\"carousel-indicators\"></ol>
        </div>
</section>
{% endif %}



", "modular/hero.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\quark\\templates\\modular\\hero.html.twig");
    }
}
