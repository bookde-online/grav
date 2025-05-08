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
            echo "        <h2 class=\"text-center fw-bold\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
            echo "</h2>
    ";
        }
        // line 12
        echo "
  <div class=\"timeline\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 15
            echo "      <div class=\"timeline-step\">
        <div class=\"step-content\">
          <h4 style=\"color: #379777;\"><b>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["step"], "title", []), "html", null, true);
            echo "</b></h4>
          <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["step"], "subtitle", []), "html", null, true);
            echo "</p>
            ";
            // line 19
            if ($this->getAttribute($context["step"], "image", [])) {
                // line 20
                echo "                ";
                $context["image"] = twig_first($this->env, $this->getAttribute($context["step"], "image", []));
                // line 21
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["image"] ?? null), "name", []), [], "array"), "url", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["step"], "title", []));
                echo "\">
            ";
            }
            // line 23
            echo "        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </div>
</div>
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
        return array (  102 => 26,  94 => 23,  86 => 21,  83 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 15,  65 => 14,  61 => 12,  55 => 10,  53 => 9,  50 => 8,  47 => 7,  43 => 4,  40 => 3,  30 => 1,);
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
        <h2 class=\"text-center fw-bold\">{{page.header.subtitle}}</h2>
    {% endif %}

  <div class=\"timeline\">
    {% for step in page.header.items %}
      <div class=\"timeline-step\">
        <div class=\"step-content\">
          <h4 style=\"color: #379777;\"><b>{{ step.title }}</b></h4>
          <p>{{ step.subtitle }}</p>
            {% if step.image %}
                {% set image = step.image|first %}
                <img src=\"{{ page.media[image.name].url }}\" alt=\"{{ step.title|e }}\">
            {% endif %}
        </div>
      </div>
    {% endfor %}
  </div>
</div>
{% endblock %}
", "how_it_work.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\quark\\templates\\how_it_work.html.twig");
    }
}
