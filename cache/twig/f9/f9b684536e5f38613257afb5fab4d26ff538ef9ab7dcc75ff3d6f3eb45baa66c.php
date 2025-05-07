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

/* partials/favicon.html.twig */
class __TwigTemplate_044f8d063c4dc88d77d181e3457a8a5c8a86f57819a7e762e0a01b4bfbc66aeb extends \Twig\Template
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
        // line 2
        $context["fa_page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/_config"], "method");
        // line 3
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["fa_page"] ?? null), "header", []), "favicon", []));
        // line 4
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 5
            echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["fa_page"] ?? null), "media", []), $this->getAttribute(($context["image"] ?? null), "name", []), [], "array"), "url", []), "html", null, true);
            echo "\" />
    ";
        }
    }

    public function getTemplateName()
    {
        return "partials/favicon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  34 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" /> #}
{% set fa_page = page.find('/_config') %}
{% set image = fa_page.header.favicon|first %}
    {% if image %}
        <link rel=\"icon\" type=\"image/png\" href=\"{{ fa_page.media[image.name].url }}\" />
    {% endif %}
", "partials/favicon.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\quark\\templates\\partials\\favicon.html.twig");
    }
}
