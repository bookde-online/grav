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

/* service-detail.html.twig */
class __TwigTemplate_e3a848b8b65267a42aa89e879f57ab1a0aad4271bc8cd01ac05c1c0c562f2780 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "partials/base-home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base-home.html.twig", "service-detail.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        $this->loadTemplate("partials/place.html.twig", "service-detail.html.twig", 5)->display($context);
        // line 6
        echo "
<section id=\"service-details\" class=\"service-details section\">

  <div class=\"container\">

    <div class=\"row gy-4\">

      ";
        // line 14
        echo "      ";
        $context["service_pages"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "children", []), "visible", []);
        // line 15
        echo "
      <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
        <div class=\"services-list\">
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["service_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 19
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "url", []), "html", null, true);
            echo "\" class=\"";
            echo (($this->getAttribute($context["service"], "active", [])) ? ("active") : (""));
            echo "\">
              ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["service"], "header", []), "title", []), "html", null, true);
            echo "
            </a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>

        <h4>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
        echo "</h4>
        <p>";
        // line 26
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "short_description", []));
        echo "</p>
      </div>

      <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"200\">
        ";
        // line 30
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])) {
            // line 31
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo "\" class=\"img-fluid services-img\" loading=\"lazy\">
          ";
            // line 33
            echo "        ";
        }
        // line 34
        echo "        
        <h3 style=\"display: flex; justify-content: center; text-align: center; margin: 10px;\">
          ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "
        </h3>
        <p>";
        // line 38
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []));
        echo "</p>
        
      </div>

    </div>

  </div>

</section><!-- /Service Details Section -->
";
    }

    public function getTemplateName()
    {
        return "service-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 38,  112 => 36,  108 => 34,  105 => 33,  98 => 31,  96 => 30,  89 => 26,  85 => 25,  81 => 23,  72 => 20,  65 => 19,  61 => 18,  56 => 15,  53 => 14,  44 => 6,  42 => 5,  39 => 4,  29 => 2,);
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
{% extends 'partials/base-home.html.twig' %}

{% block content %}
{% include 'partials/place.html.twig' %}

<section id=\"service-details\" class=\"service-details section\">

  <div class=\"container\">

    <div class=\"row gy-4\">

      {# Lấy danh sách các trang con thuộc module \"service\" #}
      {% set service_pages = page.parent.children.visible %}

      <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
        <div class=\"services-list\">
          {% for service in service_pages %}
            <a href=\"{{ service.url }}\" class=\"{{ service.active ? 'active' : '' }}\">
              {{ service.header.title }}
            </a>
          {% endfor %}
        </div>

        <h4>{{ page.header.subtitle }}</h4>
        <p>{{ page.header.short_description|markdown }}</p>
      </div>

      <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"200\">
        {% if page.header.image %}
          <img src=\"{{ page.media.images|first.url }}\" alt=\"{{ page.header.title }}\" class=\"img-fluid services-img\" loading=\"lazy\">
          {# <img src=\"{{ page.media[page.header.image].url }}\" alt=\"{{ page.header.title }}\" class=\"img-fluid services-img\"> #}
        {% endif %}
        
        <h3 style=\"display: flex; justify-content: center; text-align: center; margin: 10px;\">
          {{ page.header.title }}
        </h3>
        <p>{{ page.header.description|markdown }}</p>
        
      </div>

    </div>

  </div>

</section><!-- /Service Details Section -->
{% endblock %}

", "service-detail.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\quark\\templates\\service-detail.html.twig");
    }
}
