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
class __TwigTemplate_46ed62d795cd5608641b40d34996e514a7ed1a0361ce850923a0e5f4fbae5a48 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/hero.html.twig"));

        // line 1
        echo "<section id=\"hero\" class=\"hero section dark-background\">

            <div id=\"hero-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">

                ";
        // line 6
        echo "            ";
        $context["images"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []);
        // line 7
        echo "                
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 9
            echo "                    <div class=\"carousel-item ";
            if ($this->getAttribute($context["loop"], "first", [])) {
                echo "active";
            }
            echo "\">
                        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "url", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "name", []), "html", null, true);
            echo "\" loading=\"lazy\">
                        <div class=\"container\">
                            <h2>";
            // line 12
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["image"], "meta", [], "any", false, true), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["image"], "meta", [], "any", false, true), "title", []), "Bạn muốn nâng cấp website khách sạn?")) : ("Bạn muốn nâng cấp website khách sạn?")), "html", null, true);
            echo "</h2>
                            <p>";
            // line 13
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["image"], "meta", [], "any", false, true), "description", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["image"], "meta", [], "any", false, true), "description", []), "Khám phá ngay!")) : ("Khám phá ngay!")), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
            echo "#services\" class=\"btn-get-started\">Xem Dịch Vụ</a>
                        </div>
                    </div><!-- End Carousel Item -->
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
                <a class=\"carousel-control-prev\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
                </a>

                <a class=\"carousel-control-next\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
                </a>

                <ol class=\"carousel-indicators\"></ol>

            </div>

        </section><!-- /Hero Section -->";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

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
        return array (  102 => 18,  84 => 14,  80 => 13,  76 => 12,  69 => 10,  62 => 9,  45 => 8,  42 => 7,  39 => 6,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"hero\" class=\"hero section dark-background\">

            <div id=\"hero-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">

                {# {% set carousel_page = page.find('/home/_carousel') %} #}
            {% set images = page.media.images %}
                
                {% for image in images %}
                    <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                        <img src=\"{{ image.url }}\" alt=\"{{ image.name }}\" loading=\"lazy\">
                        <div class=\"container\">
                            <h2>{{ image.meta.title|default('Bạn muốn nâng cấp website khách sạn?') }}</h2>
                            <p>{{ image.meta.description|default('Khám phá ngay!') }}</p>
                            <a href=\"{{ page.find('/home').url }}#services\" class=\"btn-get-started\">Xem Dịch Vụ</a>
                        </div>
                    </div><!-- End Carousel Item -->
                {% endfor %}

                <a class=\"carousel-control-prev\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
                </a>

                <a class=\"carousel-control-next\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
                </a>

                <ol class=\"carousel-indicators\"></ol>

            </div>

        </section><!-- /Hero Section -->", "modular/hero.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\modular\\hero.html.twig");
    }
}
