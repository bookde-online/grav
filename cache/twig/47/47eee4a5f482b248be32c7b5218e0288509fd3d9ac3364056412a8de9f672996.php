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

/* modular/benefit.html.twig */
class __TwigTemplate_f59d785bad400da40d92e6d6a440d68971e91d4611658ba23a82b7e9c3f9fe52 extends \Twig\Template
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
        echo "<section class=\"benefits-section text-center\" id=\"benefits\">
    <div class=\"container\">
        <div class=\"row gy-4\">
            ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", [])) {
            // line 5
            echo "                <h2 class=\"inner-title\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo "</b></h2>
            ";
        }
        // line 7
        echo "        </div>
        <div class=\"row gy-4\" style=\"margin-bottom: 30px;\">
            ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", [])) {
            // line 10
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
            echo "</p>
            ";
        }
        // line 12
        echo "        </div>

        <!-- Image card -->
        <div class=\"card-wrapper\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "                <div class=\"card-container\">
                    <div class=\"card\">
                        ";
            // line 19
            if ($this->getAttribute($context["item"], "image", [])) {
                // line 20
                echo "                            ";
                $context["image"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($context["item"], "image", [])), "name", []);
                // line 21
                echo "                            ";
                if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["image"] ?? null), [], "array")) {
                    // line 22
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["image"] ?? null), [], "array"), "url", []), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
                    echo "\">
                            ";
                }
                // line 24
                echo "                        ";
            }
            // line 25
            echo "                    </div>
                    ";
            // line 26
            if ($this->getAttribute($context["item"], "title", [])) {
                // line 27
                echo "                        <div class=\"text-overlay\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                echo "</div>
                    ";
            }
            // line 29
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    </div> 
</section>";
    }

    public function getTemplateName()
    {
        return "modular/benefit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  99 => 29,  93 => 27,  91 => 26,  88 => 25,  85 => 24,  77 => 22,  74 => 21,  71 => 20,  69 => 19,  65 => 17,  61 => 16,  55 => 12,  49 => 10,  47 => 9,  43 => 7,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"benefits-section text-center\" id=\"benefits\">
    <div class=\"container\">
        <div class=\"row gy-4\">
            {% if page.header.title %}
                <h2 class=\"inner-title\"><b>{{ page.header.title }}</b></h2>
            {% endif %}
        </div>
        <div class=\"row gy-4\" style=\"margin-bottom: 30px;\">
            {% if page.header.subtitle %}
                <p>{{ page.header.subtitle }}</p>
            {% endif %}
        </div>

        <!-- Image card -->
        <div class=\"card-wrapper\">
            {% for item in page.header.items %}
                <div class=\"card-container\">
                    <div class=\"card\">
                        {% if item.image %}
                            {% set image = item.image|first.name %}
                            {% if page.media[image] %}
                                <img src=\"{{ page.media[image].url }}\" alt=\"{{ item.title|e }}\">
                            {% endif %}
                        {% endif %}
                    </div>
                    {% if item.title %}
                        <div class=\"text-overlay\">{{ item.title }}</div>
                    {% endif %}
                </div>
            {% endfor %}
        </div>
    </div> 
</section>", "modular/benefit.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\quark\\templates\\modular\\benefit.html.twig");
    }
}
