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

/* how_it_work.html.twig */
class __TwigTemplate_cd36582a9be2af30c7d9abf30d735c75d06a2f02384be14068034c7f08dd8c5e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'hero' => [$this, 'block_hero'],
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "how_it_work.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_hero($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->loadTemplate("partials/place.html.twig", "how_it_work.html.twig", 4)->display($context);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "<div class=\"container my-5\">
    ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", [])) {
            // line 10
            echo "        <h1 class=\"text-center fw-bold\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
            echo "</h1>
    ";
        }
        // line 12
        echo "
    <div class=\"timeline-modern\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 15
            echo "            <div class=\"timeline-item\">
                <div class=\"timeline-marker\"></div>
                <div class=\"timeline-content\">
                    <div class=\"timeline-header\">
                        <h2 class=\"mb-2 timeline-title\"><b>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["step"], "title", []), "html", null, true);
            echo "</b></h2>
                    </div>
                    <p class=\"text-muted mb-3 s-20\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["step"], "subtitle", []), "html", null, true);
            echo "</p>
                    ";
            // line 22
            if ($this->getAttribute($context["step"], "image", [])) {
                // line 23
                echo "                        ";
                $context["image"] = twig_first($this->env, $this->getAttribute($context["step"], "image", []));
                // line 24
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["image"] ?? null), "name", []), [], "array"), "url", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["step"], "title", []));
                echo "\" class=\"img-fluid rounded shadow-sm\">
                    ";
            }
            // line 26
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>
</div>
";
    }

    // line 33
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 34
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "how_it_work.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 34,  113 => 33,  107 => 29,  99 => 26,  91 => 24,  88 => 23,  86 => 22,  82 => 21,  77 => 19,  71 => 15,  67 => 14,  63 => 12,  57 => 10,  55 => 9,  52 => 8,  49 => 7,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block hero %}
    {% include 'partials/place.html.twig' %}
{% endblock %}

{% block content %}
<div class=\"container my-5\">
    {% if page.header.title %}
        <h1 class=\"text-center fw-bold\">{{ page.header.subtitle }}</h1>
    {% endif %}

    <div class=\"timeline-modern\">
        {% for step in page.header.items %}
            <div class=\"timeline-item\">
                <div class=\"timeline-marker\"></div>
                <div class=\"timeline-content\">
                    <div class=\"timeline-header\">
                        <h2 class=\"mb-2 timeline-title\"><b>{{ step.title }}</b></h2>
                    </div>
                    <p class=\"text-muted mb-3 s-20\">{{ step.subtitle }}</p>
                    {% if step.image %}
                        {% set image = step.image|first %}
                        <img src=\"{{ page.media[image.name].url }}\" alt=\"{{ step.title|e }}\" class=\"img-fluid rounded shadow-sm\">
                    {% endif %}
                </div>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
{% endblock %}

", "how_it_work.html.twig", "C:\\xampp\\htdocs\\bookdevn\\user\\themes\\quark\\templates\\how_it_work.html.twig");
    }
}
