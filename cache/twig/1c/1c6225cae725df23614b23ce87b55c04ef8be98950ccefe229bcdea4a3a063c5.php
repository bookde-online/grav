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

/* modular/services.html.twig */
class __TwigTemplate_500d173b0e3fe5d79a6f022eca26efae03dab0cdffabd17cd60dc4759e4c95c1 extends \Twig\Template
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
        $context["lang"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []);
        // line 2
        echo "<section id=\"";
        echo (((($context["lang"] ?? null) == "vi")) ? ("dich-vu") : ("services"));
        echo "\" class=\"services section light-background\">
\t<div class=\"container\">
\t\t<div class=\"row gy-4  text-center d-flex justify-content-center\">
            ";
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])) {
            // line 6
            echo "                ";
            $context["image_name"] = ((twig_test_iterable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []))) ? (twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])))) : ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])));
            // line 7
            echo "                ";
            $context["image"] = ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", [], "any", false, true), ($context["image_name"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", [], "any", false, true), ($context["image_name"] ?? null), [], "array")))) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", [], "any", false, true), ($context["image_name"] ?? null), [], "array")) : (null));
            // line 8
            echo "                ";
            if (($context["image"] ?? null)) {
                // line 9
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "url", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
                echo "\" class=\"img-fluid\" style=\"width: 100%; max-width: 600px; height: auto;\">
                ";
            }
            // line 11
            echo "            ";
        }
        // line 12
        echo "
            ";
        // line 14
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", [])) {
            // line 15
            echo "\t\t\t\t<h2 class=\"inner-title\" style=\"color: #A93226;\">
\t\t\t\t\t<b>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo "</b>
\t\t\t\t</h2>
\t\t\t\t<p>Khởi chạy trang web đặt phòng của riêng bạn hôm nay!</p>
\t\t\t";
        }
        // line 20
        echo "          
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", [], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ( !$this->getAttribute($this->getAttribute($context["child"], "header", []), "hidden", [])) {
                // line 22
                echo "\t\t\t\t<div class=\"col-lg-3 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index0", []) * 100), "html", null, true);
                echo "\">
                    <div class=\"card service-card h-100 shadow-sm border-0 \">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                echo "\" target=\"_blank\" class=\"stretched-link text-decoration-none\">
\t\t\t\t\t\t\t";
                // line 27
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($this->getAttribute($context["child"], "header", []), "image", [])) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t";
                    $context["image_name"] = ((twig_test_iterable($this->getAttribute($this->getAttribute($context["child"], "header", []), "image", []))) ? (twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($this->getAttribute($context["child"], "header", []), "image", [])))) : ($this->getAttribute($this->getAttribute($context["child"], "header", []), "image", [])));
                    // line 29
                    echo "\t\t\t\t\t\t\t\t";
                    $context["image"] = ((($this->getAttribute($this->getAttribute($context["child"], "media", [], "any", false, true), ($context["image_name"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["child"], "media", [], "any", false, true), ($context["image_name"] ?? null), [], "array")))) ? ($this->getAttribute($this->getAttribute($context["child"], "media", [], "any", false, true), ($context["image_name"] ?? null), [], "array")) : (null));
                    // line 30
                    echo "\t\t\t\t\t\t\t\t";
                    if (($context["image"] ?? null)) {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "url", []), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "header", []), "title", []), "html", null, true);
                        echo "\" class=\"card-img-top\" style=\"height:200px; object-fit:cover;\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 33
                    echo "\t\t\t\t\t\t\t";
                }
                // line 34
                echo "
\t\t\t\t\t\t\t";
                // line 36
                echo "\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title fw-bold\">
\t\t\t\t\t\t\t\t\t";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "header", []), "title", []), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t<span class=\"ms-1\">&rsaquo;</span>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t";
                // line 41
                if ($this->getAttribute($this->getAttribute($context["child"], "header", []), "subtitle", [])) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"card-text text-muted\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "header", []), "subtitle", []), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "           

\t\t</div>
\t\t<hr>
\t\t";
        // line 55
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 56
            echo "\t\t\t<div style=\"display: flex; justify-content: center; margin-top: 50px; text-align: center; font-size: larger;\">
\t\t\t\t";
            // line 57
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 60
        echo "\t</div>
</section>
<!-- End Services Section -->
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 60,  174 => 57,  171 => 56,  169 => 55,  163 => 51,  149 => 46,  143 => 43,  140 => 42,  138 => 41,  132 => 38,  128 => 36,  125 => 34,  122 => 33,  114 => 31,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  98 => 25,  91 => 22,  80 => 21,  77 => 20,  70 => 16,  67 => 15,  64 => 14,  61 => 12,  58 => 11,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  39 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set lang = grav.language.getLanguage %}
<section id=\"{{ lang == 'vi' ? 'dich-vu' : 'services' }}\" class=\"services section light-background\">
\t<div class=\"container\">
\t\t<div class=\"row gy-4  text-center d-flex justify-content-center\">
            {% if page.header.image %}
                {% set image_name = page.header.image is iterable ? (page.header.image|keys|first) : page.header.image %}
                {% set image = page.media[image_name] ?? null %}
                {% if image %}
                    <img src=\"{{ image.url }}\" alt=\"{{ page.header.title }}\" class=\"img-fluid\" style=\"width: 100%; max-width: 600px; height: auto;\">
                {% endif %}
            {% endif %}

            {# Tiêu đề #}
\t\t\t{% if page.header.title %}
\t\t\t\t<h2 class=\"inner-title\" style=\"color: #A93226;\">
\t\t\t\t\t<b>{{ page.header.title }}</b>
\t\t\t\t</h2>
\t\t\t\t<p>Khởi chạy trang web đặt phòng của riêng bạn hôm nay!</p>
\t\t\t{% endif %}
          
\t\t\t{% for child in page.children() if not child.header.hidden %}
\t\t\t\t<div class=\"col-lg-3 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"{{ loop.index0 * 100 }}\">
                    <div class=\"card service-card h-100 shadow-sm border-0 \">
\t\t\t\t\t\t<a
\t\t\t\t\t\t\thref=\"{{ child.url }}\" target=\"_blank\" class=\"stretched-link text-decoration-none\">
\t\t\t\t\t\t\t{# Hình ảnh #}
\t\t\t\t\t\t\t{% if child.header.image %}
\t\t\t\t\t\t\t\t{% set image_name = child.header.image is iterable ? (child.header.image|keys|first) : child.header.image %}
\t\t\t\t\t\t\t\t{% set image = child.media[image_name] ?? null %}
\t\t\t\t\t\t\t\t{% if image %}
\t\t\t\t\t\t\t\t\t<img src=\"{{ image.url }}\" alt=\"{{ child.header.title }}\" class=\"card-img-top\" style=\"height:200px; object-fit:cover;\">
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{# Nội dung #}
\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title fw-bold\">
\t\t\t\t\t\t\t\t\t{{ child.header.title }}
\t\t\t\t\t\t\t\t\t<span class=\"ms-1\">&rsaquo;</span>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t{% if child.header.subtitle %}
\t\t\t\t\t\t\t\t\t<p class=\"card-text text-muted\">
\t\t\t\t\t\t\t\t\t\t{{ child.header.subtitle }}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
           

\t\t</div>
\t\t<hr>
\t\t{% if page.content %}
\t\t\t<div style=\"display: flex; justify-content: center; margin-top: 50px; text-align: center; font-size: larger;\">
\t\t\t\t{{ page.content|raw }}
\t\t\t</div>
\t\t{% endif %}
\t</div>
</section>
<!-- End Services Section -->
", "modular/services.html.twig", "C:\\xampp\\htdocs\\bookdevn\\user\\themes\\quark\\templates\\modular\\services.html.twig");
    }
}
