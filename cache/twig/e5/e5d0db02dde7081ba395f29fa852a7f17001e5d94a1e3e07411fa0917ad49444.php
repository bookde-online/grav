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

/* modular/who-use-service.html.twig */
class __TwigTemplate_e801c6b1f603a3c7ae0ac10d4b1e66218e277f513b837d6b7f6503d69ace5a30 extends \Twig\Template
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
        echo "<!-- Team Section -->
  <section id=\"team\" class=\"team section light-background\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
        ";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", [])) {
            // line 7
            echo "            <h2 class=\"inner-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo "</h2>
        ";
        }
        // line 9
        echo "    </div><!-- End Section Title -->

    <div class=\"container\">
      <div class=\"row gy-4\">
          ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "              <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <div class=\"team-member\">
                      <div class=\"member-img position-relative\">
                          ";
            // line 17
            $context["image"] = twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($context["item"], "image", [])));
            // line 18
            echo "                          ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["image"] ?? null), [], "array")) {
                // line 19
                echo "                              <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["image"] ?? null), [], "array"), "url", []), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"Image ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
                echo "\">
                          ";
            } else {
                // line 21
                echo "                              <img src=\"";
                echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
                echo "/assets/img/default.jpg\" class=\"img-fluid\" alt=\"Default Image\">
                          ";
            }
            // line 23
            echo "                          <h4 class=\"text-overlay\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["item"], "title", [])), "html", null, true);
            echo "</h4> 
                      </div>
                  </div>
              </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "      </div>
  </div>
  </section><!-- /Team Section -->
";
    }

    public function getTemplateName()
    {
        return "modular/who-use-service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  79 => 23,  73 => 21,  65 => 19,  62 => 18,  60 => 17,  55 => 14,  51 => 13,  45 => 9,  39 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Team Section -->
  <section id=\"team\" class=\"team section light-background\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
        {% if page.header.title %}
            <h2 class=\"inner-title\">{{ page.header.title }}</h2>
        {% endif %}
    </div><!-- End Section Title -->

    <div class=\"container\">
      <div class=\"row gy-4\">
          {% for item in page.header.items %}
              <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <div class=\"team-member\">
                      <div class=\"member-img position-relative\">
                          {% set image = item.image|keys|first %}
                          {% if page.media[image] %}
                              <img src=\"{{ page.media[image].url }}\" class=\"img-fluid\" alt=\"Image {{ item.title|e }}\">
                          {% else %}
                              <img src=\"{{ theme_url }}/assets/img/default.jpg\" class=\"img-fluid\" alt=\"Default Image\">
                          {% endif %}
                          <h4 class=\"text-overlay\">{{ item.title|upper }}</h4> 
                      </div>
                  </div>
              </div>
          {% endfor %}
      </div>
  </div>
  </section><!-- /Team Section -->
", "modular/who-use-service.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\quark\\templates\\modular\\who-use-service.html.twig");
    }
}
