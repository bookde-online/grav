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

/* pricing.html.twig */
class __TwigTemplate_dd60b00ce7c8cf804adc41d6fc4c98f74f11a19e3faa5adca1c7977169e1b278 extends \Twig\Template
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
        // line 1
        return "partials/base-home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base-home.html.twig", "pricing.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        $this->loadTemplate("partials/place.html.twig", "pricing.html.twig", 4)->display($context);
        // line 5
        echo "
<section id=\"pricing\" class=\"pricing section\">
      <div class=\"container\">

        <div class=\"row gy-4\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "pricing_plans", []));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 11
            echo "                    <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                        <div class=\"pricing-item\">
                            <h3 style=\"font-size: 25px;\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "name", []), "html", null, true);
            echo "</h3>
                            <h4><sup>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "currency_unit", []), "html", null, true);
            echo "</sup>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "price", []), "html", null, true);
            echo "</h4>
                            <p style=\"color: #858585; margin: 1rem 0;\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "duration", []), "html", null, true);
            echo "</p>
                            <h5 style=\"font-size: 20px; font-weight: 600;\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "features_title", []), "html", null, true);
            echo "</h5>
                            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
            echo "#services\" class=\"cta-btn\">Liên hệ ngay</a><br>
                            <ul>
                                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["plan"], "features", []));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 20
                echo "                                    <li>
                                        <i class=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "icon", []), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["feature"], "icon", []) == "bi bi-x")) {
                    echo "style=\"color: red;\"";
                }
                echo "></i>
                                        <span>";
                // line 22
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["feature"], "text", []));
                echo "</span>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                            </ul>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        <!-- End Pricing Item -->
        </div>

      </div>

    </section><!-- /Pricing Section -->

";
    }

    public function getTemplateName()
    {
        return "pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  106 => 25,  97 => 22,  89 => 21,  86 => 20,  82 => 19,  77 => 17,  73 => 16,  69 => 15,  63 => 14,  59 => 13,  55 => 11,  51 => 10,  44 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base-home.html.twig' %}

{% block content %}
{% include 'partials/place.html.twig' %}

<section id=\"pricing\" class=\"pricing section\">
      <div class=\"container\">

        <div class=\"row gy-4\">
                    {% for plan in page.header.pricing_plans %}
                    <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                        <div class=\"pricing-item\">
                            <h3 style=\"font-size: 25px;\">{{ plan.name }}</h3>
                            <h4><sup>{{plan.currency_unit}}</sup>{{ plan.price }}</h4>
                            <p style=\"color: #858585; margin: 1rem 0;\">{{ plan.duration }}</p>
                            <h5 style=\"font-size: 20px; font-weight: 600;\">{{ plan.features_title }}</h5>
                            <a href=\"{{ page.find('/contact').url }}#services\" class=\"cta-btn\">Liên hệ ngay</a><br>
                            <ul>
                                {% for feature in plan.features %}
                                    <li>
                                        <i class=\"{{ feature.icon }}\" {% if feature.icon == 'bi bi-x' %}style=\"color: red;\"{% endif %}></i>
                                        <span>{{ feature.text|markdown }}</span>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                    {% endfor %}
        <!-- End Pricing Item -->
        </div>

      </div>

    </section><!-- /Pricing Section -->

{% endblock %}
", "pricing.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\quark\\templates\\pricing.html.twig");
    }
}
