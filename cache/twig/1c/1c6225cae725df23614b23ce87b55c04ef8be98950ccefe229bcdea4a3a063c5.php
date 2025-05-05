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
        echo "
<section id=\"services\" class=\"services section light-background\">
    <div class=\"container\">
        <div class=\"row gy-4\">
            ";
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", [])) {
            // line 6
            echo "                <h2 class=\"inner-title\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo "</b></h2>
            ";
        }
        // line 8
        echo "
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ( !$this->getAttribute($this->getAttribute($context["child"], "header", []), "hidden", [])) {
                // line 10
                echo "                <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                    <div class=\"service-item item-orange position-relative\" style=\"text-align: center;\">
                        <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                echo "\">
                            ";
                // line 13
                if ($this->getAttribute($this->getAttribute($context["child"], "header", []), "image", [])) {
                    // line 14
                    echo "                                ";
                    if (($this->getAttribute($this->getAttribute($context["child"], "header", [], "any", false, true), "image", [], "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "header", []), "image", []))) {
                        // line 15
                        echo "                                    <div class=\"icon\">
                                        ";
                        // line 16
                        $context["image_name"] = $this->getAttribute($this->getAttribute($context["child"], "header", []), "image", []);
                        // line 17
                        echo "                                        ";
                        if (twig_test_iterable(($context["image_name"] ?? null))) {
                            // line 18
                            echo "                                            ";
                            $context["image_name"] = twig_first($this->env, twig_get_array_keys_filter(($context["image_name"] ?? null)));
                            // line 19
                            echo "                                        ";
                        }
                        // line 20
                        echo "                                        ";
                        $context["image"] = ((($this->getAttribute($this->getAttribute($context["child"], "media", [], "any", false, true), ($context["image_name"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["child"], "media", [], "any", false, true), ($context["image_name"] ?? null), [], "array")))) ? ($this->getAttribute($this->getAttribute($context["child"], "media", [], "any", false, true), ($context["image_name"] ?? null), [], "array")) : (null));
                        // line 21
                        echo "                                        ";
                        if (($context["image"] ?? null)) {
                            // line 22
                            echo "                                            <img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "url", []), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "header", []), "title", []), "html", null, true);
                            echo "\" style=\"width: 100%; height: 140px; border-radius: 50%;\" loading=\"lazy\">
                                        ";
                        }
                        // line 24
                        echo "                                    </div>
                                ";
                    }
                    // line 26
                    echo "                            ";
                }
                // line 27
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                echo "\"><h3>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "header", []), "title", []), "html", null, true);
                echo "</h3></a>
                            ";
                // line 28
                if ($this->getAttribute($this->getAttribute($context["child"], "header", []), "subtitle", [])) {
                    // line 29
                    echo "                                <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "header", []), "subtitle", []), "html", null, true);
                    echo "</p>
                            ";
                }
                // line 31
                echo "                        </a>
                    </div>
                </div><!-- End Service Item -->
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>
        <hr>
        ";
        // line 37
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 38
            echo "            <div style=\"display: flex; justify-content: center; margin-top: 50px; text-align: center; font-size: larger;\">
                ";
            // line 39
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
            </div>
        ";
        }
        // line 42
        echo "    </div>
</section><!-- /Services Section -->
<!-- /Services Section -->
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
        return array (  140 => 42,  134 => 39,  131 => 38,  129 => 37,  125 => 35,  115 => 31,  109 => 29,  107 => 28,  100 => 27,  97 => 26,  93 => 24,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  68 => 16,  65 => 15,  62 => 14,  60 => 13,  56 => 12,  52 => 10,  47 => 9,  44 => 8,  38 => 6,  36 => 5,  30 => 1,);
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
<section id=\"services\" class=\"services section light-background\">
    <div class=\"container\">
        <div class=\"row gy-4\">
            {% if page.header.title %}
                <h2 class=\"inner-title\"><b>{{ page.header.title }}</b></h2>
            {% endif %}

            {% for child in page.children() if not child.header.hidden %}
                <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                    <div class=\"service-item item-orange position-relative\" style=\"text-align: center;\">
                        <a href=\"{{ child.url }}\">
                            {% if child.header.image %}
                                {% if child.header.image is defined and child.header.image %}
                                    <div class=\"icon\">
                                        {% set image_name = child.header.image %}
                                        {% if image_name is iterable %}
                                            {% set image_name = image_name|keys|first %}
                                        {% endif %}
                                        {% set image = child.media[image_name] ?? null %}
                                        {% if image %}
                                            <img src=\"{{ image.url }}\" alt=\"{{ child.header.title }}\" style=\"width: 100%; height: 140px; border-radius: 50%;\" loading=\"lazy\">
                                        {% endif %}
                                    </div>
                                {% endif %}
                            {% endif %}
                                <a href=\"{{ child.url }}\"><h3>{{ child.header.title }}</h3></a>
                            {% if child.header.subtitle %}
                                <p>{{ child.header.subtitle }}</p>
                            {% endif %}
                        </a>
                    </div>
                </div><!-- End Service Item -->
            {% endfor %}
        </div>
        <hr>
        {% if page.content %}
            <div style=\"display: flex; justify-content: center; margin-top: 50px; text-align: center; font-size: larger;\">
                {{ page.content|raw }}
            </div>
        {% endif %}
    </div>
</section><!-- /Services Section -->
<!-- /Services Section -->
", "modular/services.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\quark\\templates\\modular\\services.html.twig");
    }
}
