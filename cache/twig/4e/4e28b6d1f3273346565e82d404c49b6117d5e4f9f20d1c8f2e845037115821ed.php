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
class __TwigTemplate_0cb55638092d5d534a1cb47acad569ca244400546d03fe17e25dc73cbf0ae247 extends \Twig\Template
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
        // line 31
        echo " ";
    }

    // line 1
    public function getnav_loop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["macros"] = $this;
            // line 3
            echo "
    ";
            // line 4
            $context["service_page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/home/_services"], "method");
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 7
                echo "      ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 8
                echo "      <li>
        <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ($context["active_page"] ?? null), "html", null, true);
                echo "\">
          ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                echo "
        </a>
      </li>

      ";
                // line 15
                echo "      ";
                if (($this->getAttribute($context["p"], "slug", []) == "home")) {
                    // line 16
                    echo "          ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["service_page"] ?? null), "children", []), "visible", []), "count", []) > 0)) {
                        // line 17
                        echo "          <li class=\"dropdown\">
            ";
                        // line 18
                        $context["is_service_active"] = (($this->getAttribute(($context["page"] ?? null), "activeChildOf", [0 => "/home/_services"], "method")) ? ("active") : (""));
                        // line 19
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
                        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("#services") : ("#dich-vu"));
                        echo "\" class=\"";
                        echo twig_escape_filter($this->env, ($context["is_service_active"] ?? null), "html", null, true);
                        echo "\">
              <span>";
                        // line 20
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["service_page"] ?? null), "menu", []), "html", null, true);
                        echo "</span>
              <i class=\"bi bi-chevron-down toggle-dropdown\"></i>
            </a>
            <ul>
              ";
                        // line 24
                        echo $context["macros"]->getnav_loop(($context["service_page"] ?? null));
                        echo "
            </ul>
          </li>
          ";
                    }
                    // line 28
                    echo "      ";
                }
                // line 29
                echo "    ";
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
        return array (  116 => 29,  113 => 28,  106 => 24,  99 => 20,  91 => 19,  89 => 18,  86 => 17,  83 => 16,  80 => 15,  73 => 10,  67 => 9,  64 => 8,  61 => 7,  57 => 6,  54 => 5,  52 => 4,  49 => 3,  46 => 2,  34 => 1,  30 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro nav_loop(page) %}
    {% import _self as macros %}

    {% set service_page = page.find('/home/_services') %}

    {% for p in page.children.visible %}
      {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
      <li>
        <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
          {{ p.menu }}
        </a>
      </li>

      {# Insert \"Services\" item right after \"home\" or \"trang-chu\" #}
      {% if p.slug == 'home'%}
          {% if service_page.children.visible.count > 0 %}
          <li class=\"dropdown\">
            {% set is_service_active = page.activeChildOf('/home/_services') ? 'active' : '' %}
            <a href=\"{{ base_url_absolute }}{{ grav.language.getLanguage == 'en' ? '#services' : '#dich-vu' }}\" class=\"{{ is_service_active }}\">
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
 ", "macros/macros.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\quark\\templates\\macros\\macros.html.twig");
    }
}
