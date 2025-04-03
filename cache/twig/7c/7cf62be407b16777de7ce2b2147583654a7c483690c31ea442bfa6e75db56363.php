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

/* macros/macros.html.twig */
class __TwigTemplate_a8eb20f2e62703779c8b6476dd9eaf4f3f9ea0db8b4f3c6dec674529ed8b5c2f extends \Twig\Template
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
        echo "
";
    }

    // line 2
    public function getnav_loop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "  ";
            $context["macros"] = $this;
            // line 4
            echo "
  ";
            // line 5
            $context["service_page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/home/_services"], "method");
            // line 6
            echo "
  ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 8
                echo "    ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 9
                echo "    <li>
      <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["active_page"] ?? null), "html", null, true);
                echo "\">
        ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                echo "
      </a>
    </li>

    ";
                // line 16
                echo "    ";
                if (($this->getAttribute($context["p"], "slug", []) == "home")) {
                    // line 17
                    echo "        ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["service_page"] ?? null), "children", []), "visible", []), "count", []) > 0)) {
                        // line 18
                        echo "        <li class=\"dropdown\">
          ";
                        // line 19
                        $context["is_service_active"] = (($this->getAttribute(($context["page"] ?? null), "activeChildOf", [0 => "/home/_services"], "method")) ? ("active") : (""));
                        // line 20
                        echo "
          <a href=\"";
                        // line 21
                        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
                        echo "home#services\" class=\"";
                        echo twig_escape_filter($this->env, ($context["is_service_active"] ?? null), "html", null, true);
                        echo "\">
            <span>";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["service_page"] ?? null), "menu", []), "html", null, true);
                        echo "</span>
            <i class=\"bi bi-chevron-down toggle-dropdown\"></i>
          </a>
          <ul>
            ";
                        // line 26
                        echo $context["macros"]->getnav_loop(($context["service_page"] ?? null));
                        echo "
          </ul>
        </li>
        ";
                    }
                    // line 30
                    echo "    ";
                }
                // line 31
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  115 => 30,  108 => 26,  101 => 22,  95 => 21,  92 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  74 => 11,  68 => 10,  65 => 9,  62 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  47 => 3,  35 => 2,  30 => 1,);
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
{% macro nav_loop(page) %}
  {% import _self as macros %}

  {% set service_page = page.find('/home/_services') %}

  {% for p in page.children.visible %}
    {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
    <li>
      <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
        {{ p.menu }}
      </a>
    </li>

    {# Chèn mục \"Services\" ngay sau \"home\" #}
    {% if p.slug == 'home' %}
        {% if service_page.children.visible.count > 0 %}
        <li class=\"dropdown\">
          {% set is_service_active = page.activeChildOf('/home/_services') ? 'active' : '' %}

          <a href=\"{{ base_url_absolute }}home#services\" class=\"{{ is_service_active }}\">
            <span>{{ service_page.menu }}</span>
            <i class=\"bi bi-chevron-down toggle-dropdown\"></i>
          </a>
          <ul>
            {{ macros.nav_loop(service_page) }}
          </ul>
        </li>
        {% endif %}
    {% endif %}
  {% endfor %}
{% endmacro %}
", "macros/macros.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\quark\\templates\\macros\\macros.html.twig");
    }
}
