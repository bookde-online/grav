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

/* partials/navigation.html.twig */
class __TwigTemplate_347186d1481765e58f485955f859d5c59282464843a0a2abc46c11590d721e0f extends \Twig\Template
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
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navigation.html.twig", 1)->unwrap();
        // line 2
        $context["page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/_config"], "method");
        // line 3
        echo "
<ul ";
        // line 4
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 5
        echo $context["macros"]->getnav_loop(($context["pages"] ?? null));
        echo "

    ";
        // line 7
        $context["current_lang"] = ("/" . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [], "method"));
        // line 8
        echo "    ";
        $context["lang_url"] = twig_replace_filter(($context["base_url_absolute"] ?? null), [($context["current_lang"] ?? null) => ""]);
        // line 9
        echo "
    <div class=\"language-dropdown\">
        <button class=\"dropdown-btn\" id=\"lang-toggle\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/";
        echo twig_escape_filter($this->env, ($context["current_lang"] ?? null), "html", null, true);
        echo ".webp\" alt=\"";
        echo twig_escape_filter($this->env, ($context["current_lang"] ?? null), "html", null, true);
        echo "\">
            <span>";
        // line 13
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [], "method")), "html", null, true);
        echo "</span>
            <i class=\"bi bi-chevron-down toggle-dropdown\"></i>
        </button>
        <div class=\"dropdown-content\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguages", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            if (($context["language"] != $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [], "method"))) {
                // line 18
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, ((($context["lang_url"] ?? null) . "/") . $context["language"]), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
                echo "/assets/img/";
                echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                echo ".webp\" alt=\"";
                echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                echo "\">
                    <span>";
                // line 20
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["language"]), "html", null, true);
                echo "</span>
                </a>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
</ul>



";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  89 => 20,  81 => 19,  76 => 18,  71 => 17,  64 => 13,  56 => 12,  51 => 9,  48 => 8,  46 => 7,  41 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}
{% set page = page.find('/_config') %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {{ macros.nav_loop(pages) }}

    {% set current_lang = '/' ~ grav.language.getActive() %}
    {% set lang_url = base_url_absolute|replace({(current_lang): ''}) %}

    <div class=\"language-dropdown\">
        <button class=\"dropdown-btn\" id=\"lang-toggle\">
            <img src=\"{{ theme_url }}/assets/img/{{ current_lang }}.webp\" alt=\"{{ current_lang }}\">
            <span>{{ grav.language.getActive()|upper }}</span>
            <i class=\"bi bi-chevron-down toggle-dropdown\"></i>
        </button>
        <div class=\"dropdown-content\">
            {% for language in grav.language.getLanguages() if language != grav.language.getActive() %}
                <a href=\"{{ lang_url ~ '/' ~ language }}\">
                    <img src=\"{{ theme_url }}/assets/img/{{ language }}.webp\" alt=\"{{ language }}\">
                    <span>{{ language|upper }}</span>
                </a>
            {% endfor %}
        </div>
    </div>
</ul>



", "partials/navigation.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\quark\\templates\\partials\\navigation.html.twig");
    }
}
