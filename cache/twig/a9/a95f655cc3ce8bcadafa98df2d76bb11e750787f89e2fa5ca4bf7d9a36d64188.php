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
class __TwigTemplate_7d3619c0dc55c5163ec9bbf89a9c745b71b0658674c89e54c33521288bc7e265 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/macros.html.twig"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

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
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "nav_loop"));

            // line 2
            echo "  ";
            $context["macros"] = $this;
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "    ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 5
                echo "    ";
                $context["dropdown_class"] = ((twig_in_filter($this->getAttribute($context["p"], "url", []), [0 => "/grav/services", 1 => "/grav/en/services"])) ? ("dropdown") : (""));
                // line 6
                echo "    ";
                $context["about_page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/home/_about"], "method");
                // line 7
                echo "    ";
                $context["service_page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/home/_services"], "method");
                // line 8
                echo "
    <li class=\"";
                // line 9
                echo twig_escape_filter($this->env, ($context["dropdown_class"] ?? null), "html", null, true);
                echo "\">
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
        ";
                // line 12
                if (($context["dropdown_class"] ?? null)) {
                    // line 13
                    echo "          <i class=\"bi bi-chevron-down toggle-dropdown\"></i>
        ";
                }
                // line 15
                echo "      </a>
      ";
                // line 16
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 17
                    echo "      <ul>
        ";
                    // line 18
                    echo $context["macros"]->getnav_loop($context["p"]);
                    echo "
      </ul>
      ";
                }
                // line 21
                echo "    </li>
    ";
                // line 22
                if (($this->getAttribute($context["p"], "slug", []) == "home")) {
                    // line 23
                    echo "        <li>
          <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
                    echo "home#about\" class=\"";
                    echo (($this->getAttribute(($context["page"] ?? null), "activeChildOf", [0 => "/home"], "method")) ? ("active") : (""));
                    echo "\">
            ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["about_page"] ?? null), "menu", []), "html", null, true);
                    echo "
          </a>
        </li>
        <li>
          <a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
                    echo "home#services\" class=\"";
                    echo (($this->getAttribute(($context["page"] ?? null), "activeChildOf", [0 => "/home"], "method")) ? ("active") : (""));
                    echo "\">
            ";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["service_page"] ?? null), "menu", []), "html", null, true);
                    echo "
          </a>
        </li>
      ";
                }
                // line 34
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

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
        return array (  144 => 34,  137 => 30,  131 => 29,  124 => 25,  118 => 24,  115 => 23,  113 => 22,  110 => 21,  104 => 18,  101 => 17,  99 => 16,  96 => 15,  92 => 13,  90 => 12,  86 => 11,  80 => 10,  76 => 9,  73 => 8,  70 => 7,  67 => 6,  64 => 5,  61 => 4,  56 => 3,  53 => 2,  38 => 1,);
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
  {% for p in page.children.visible %}
    {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
    {% set dropdown_class = (p.url in ['/grav/services', '/grav/en/services']) ? 'dropdown' : '' %}
    {% set about_page = page.find('/home/_about') %}
    {% set service_page = page.find('/home/_services') %}

    <li class=\"{{ dropdown_class }}\">
      <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
        {{ p.menu }}
        {% if dropdown_class %}
          <i class=\"bi bi-chevron-down toggle-dropdown\"></i>
        {% endif %}
      </a>
      {% if p.children.visible.count > 0 %}
      <ul>
        {{ macros.nav_loop(p) }}
      </ul>
      {% endif %}
    </li>
    {% if p.slug == 'home' %}
        <li>
          <a href=\"{{ base_url_absolute }}home#about\" class=\"{{ page.activeChildOf('/home') ? 'active' : '' }}\">
            {{ about_page.menu }}
          </a>
        </li>
        <li>
          <a href=\"{{ base_url_absolute }}home#services\" class=\"{{ page.activeChildOf('/home') ? 'active' : '' }}\">
            {{ service_page.menu }}
          </a>
        </li>
      {% endif %}
    {% endfor %}
{% endmacro %}", "macros/macros.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\macros\\macros.html.twig");
    }
}
