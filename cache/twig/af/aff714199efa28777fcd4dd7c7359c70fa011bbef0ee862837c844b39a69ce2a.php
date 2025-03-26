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
class __TwigTemplate_35133bdb686c1deb75679dcfec4f5ba579727f7f4a5cd9297830ae93440104e0 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/benefit.html.twig"));

        // line 1
        echo "<section class=\"benefits-section text-center\">
  <div class=\"container\">
    <div class=\"benefits-section\">
      <!-- Phần văn bản -->
      <div class=\"benefits-text\">
        <h2><strong>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</strong></h2>
        <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "metadata", []), "description", []), "html", null, true);
        echo "</p>
      </div>

      <!-- Card hình ảnh -->
      <div class=\"card-wrapper\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        foreach ($context['_seq'] as $context["image"] => $context["media"]) {
            // line 13
            echo "                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "url", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "title", []), "html", null, true);
            echo "\">
                    </div>
                    ";
            // line 18
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['image'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </div>
    </div>
  </div>
</section>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

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
        return array (  74 => 20,  67 => 18,  60 => 15,  56 => 13,  52 => 12,  44 => 7,  40 => 6,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"benefits-section text-center\">
  <div class=\"container\">
    <div class=\"benefits-section\">
      <!-- Phần văn bản -->
      <div class=\"benefits-text\">
        <h2><strong>{{ page.header.title }}</strong></h2>
        <p>{{ page.header.metadata.description }}</p>
      </div>

      <!-- Card hình ảnh -->
      <div class=\"card-wrapper\">
            {% for image, media in page.media.images %}
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"{{ media.url }}\" alt=\"{{ media.title }}\">
                    </div>
                    {# <div class=\"text-overlay\">{{ media.title ?: 'No title' }}</div> #}
                </div>
            {% endfor %}
      </div>
    </div>
  </div>
</section>", "modular/benefit.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\modular\\benefit.html.twig");
    }
}
