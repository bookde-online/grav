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

/* partials/logo.html.twig */
class __TwigTemplate_c8135f7beff58f2953b6cb5d11ce83f29a2f2bc6dc6dccba836c4515b605a40b extends \Twig\Template
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
        $context["logo_page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/_config"], "method");
        // line 2
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center me-auto\"> 
";
        // line 3
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["logo_page"] ?? null), "header", []), "image", []));
        // line 4
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 5
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["logo_page"] ?? null), "media", []), $this->getAttribute(($context["image"] ?? null), "name", []), [], "array"), "url", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["logo_page"] ?? null), "title", []));
            echo "\">
    ";
        } else {
            // line 7
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.webp"), "html", null, true);
            echo "\" alt=\"Logo\">
    ";
        }
        // line 9
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  50 => 7,  42 => 5,  39 => 4,  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set logo_page = page.find('/_config') %}
<a href=\"{{ home_url }}\" class=\"logo d-flex align-items-center me-auto\"> 
{% set image = logo_page.header.image|first %}
    {% if image %}
        <img src=\"{{ logo_page.media[image.name].url  }}\" alt=\"{{logo_page.title|e}}\">
    {% else %}
        <img src=\"{{ url('theme://images/logo.webp') }}\" alt=\"Logo\">
    {% endif %}
</a>
", "partials/logo.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\quark\\templates\\partials\\logo.html.twig");
    }
}
