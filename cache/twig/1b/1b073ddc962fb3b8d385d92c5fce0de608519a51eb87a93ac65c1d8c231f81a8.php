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

/* modular/demo.html.twig */
class __TwigTemplate_ecb314aac41d9b6f85918d58856953089d1f7e32e7c202330377696a61ccce0d extends \Twig\Template
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
        echo "<section>
    <div class=\"container-fluid custom-section\">
      <div class=\"container\">
          <div class=\"row align-items-center flex-md-row flex-column-reverse\">
            <div class=\"col-md-6 text-center\">
            ";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])) {
            // line 7
            echo "                ";
            $context["image"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])), "name", []);
            // line 8
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["image"] ?? null), [], "array")) {
                // line 9
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["image"] ?? null), [], "array"), "url", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []));
                echo "\">
                ";
            }
            // line 11
            echo "            ";
        }
        // line 12
        echo "            </div>
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-5 text-center text-md-start\">
                ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", [])) {
            // line 16
            echo "                    <h2 id=\"launch\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo "</h2>
                ";
        }
        // line 18
        echo "                ";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []) && $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_name", []))) {
            // line 19
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []), "html", null, true);
            echo "\" class=\"demo-btn\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button_name", []), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 23
        echo "            </div>
          </div>
      </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/demo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  77 => 20,  72 => 19,  69 => 18,  63 => 16,  61 => 15,  56 => 12,  53 => 11,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section>
    <div class=\"container-fluid custom-section\">
      <div class=\"container\">
          <div class=\"row align-items-center flex-md-row flex-column-reverse\">
            <div class=\"col-md-6 text-center\">
            {% if page.header.image %}
                {% set image = page.header.image|first.name %}
                {% if page.media[image] %}
                    <img src=\"{{ page.media[image].url }}\" alt=\"{{ page.header.title|e }}\">
                {% endif %}
            {% endif %}
            </div>
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-5 text-center text-md-start\">
                {% if page.header.title %}
                    <h2 id=\"launch\">{{ page.header.title }}</h2>
                {% endif %}
                {% if page.header.link and page.header.button_name %}
                    <a href=\"{{ page.header.link }}\" class=\"demo-btn\">
                        {{ page.header.button_name }}
                    </a>
                {% endif %}
            </div>
          </div>
      </div>
    </div>
</section>", "modular/demo.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\quark\\templates\\modular\\demo.html.twig");
    }
}
