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
        echo "

\t";
        // line 6
        $this->loadTemplate("partials/place.html.twig", "pricing.html.twig", 6)->display($context);
        // line 7
        echo "
\t<section id=\"pricing\" class=\"pricing section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row gy d-flex justify-content-center\"> 
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "pricing_plans", []));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 12
            echo "\t\t\t\t\t<div class=\"col-lg-4 col-md-7 mt-3\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
\t\t\t\t\t\t<div class=\"pricing-item\">
\t\t\t\t\t\t\t<h3 style=\"font-size: 25px; color: #A93226;\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "name", []), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t<h5 style=\"font-size: 20px; font-weight: 600;\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "features_title", []), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<p style=\"  text-decoration:line-through ; font-size:12px ;\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "orginal_price", []), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "currency_unit", []), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<div class=\" d-flex justify-content-around\">
\t\t\t\t\t\t\t\t<p style=\"font-size: 20px; font-weight: 600;\">

\t\t\t\t\t\t\t\t\t<b style=\"color:#32aa27 \">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "price", []), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "currency_unit", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t<span> / ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "duration_unit", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</p>
                                <div style=\"padding: 5px 10px ; background-color:#A93226;; font-weight:bold ; color:black ; border-radius:16px ; text-align:center; display:flex ; justify-content:center;  \">-";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "discount_tag", []), "html", null, true);
            echo "</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"display: flex; justify-content: center; align-items: center;\">
\t\t\t\t\t\t\t\t<a class=\"cta-btn mb-3\" href=\"./#demo\">
\t\t\t\t\t\t\t\t\t";
            // line 30
            echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Booking now !") : ("Đăng ký ngay"));
            echo "</a>
\t\t\t\t\t\t\t</div>
                        <div style=\"height: 340px\">
\t\t\t\t\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["plan"], "features", []));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 34
                echo "
\t\t\t\t\t\t\t\t<a style=\"d-flex justify-content-center\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "text", []), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                        </div>
                         <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "link", []), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 43
            echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Show more") : ("Xem thêm"));
            echo "
\t\t\t\t\t\t\t\t</a>   
\t\t\t\t\t\t</div>
                        
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t</div>
\t\t</div>
\t</section>


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
        return array (  142 => 49,  130 => 43,  126 => 42,  123 => 41,  111 => 35,  108 => 34,  104 => 33,  98 => 30,  90 => 25,  84 => 22,  78 => 20,  70 => 16,  66 => 15,  62 => 14,  58 => 12,  54 => 11,  48 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
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


\t{% include 'partials/place.html.twig' %}

\t<section id=\"pricing\" class=\"pricing section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row gy d-flex justify-content-center\"> 
\t\t\t\t{% for plan in page.header.pricing_plans %}
\t\t\t\t\t<div class=\"col-lg-4 col-md-7 mt-3\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
\t\t\t\t\t\t<div class=\"pricing-item\">
\t\t\t\t\t\t\t<h3 style=\"font-size: 25px; color: #A93226;\">{{ plan.name }}</h3>
\t\t\t\t\t\t\t<h5 style=\"font-size: 20px; font-weight: 600;\">{{ plan.features_title }}</h5>
\t\t\t\t\t\t\t<p style=\"  text-decoration:line-through ; font-size:12px ;\">{{ plan.orginal_price }}{{ plan.currency_unit }}</p>
\t\t\t\t\t\t\t<div class=\" d-flex justify-content-around\">
\t\t\t\t\t\t\t\t<p style=\"font-size: 20px; font-weight: 600;\">

\t\t\t\t\t\t\t\t\t<b style=\"color:#32aa27 \">{{ plan.price }}{{ plan.currency_unit }}
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t<span> / {{ plan.duration_unit }}</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</p>
                                <div style=\"padding: 5px 10px ; background-color:#A93226;; font-weight:bold ; color:black ; border-radius:16px ; text-align:center; display:flex ; justify-content:center;  \">-{{ plan.discount_tag }}</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"display: flex; justify-content: center; align-items: center;\">
\t\t\t\t\t\t\t\t<a class=\"cta-btn mb-3\" href=\"./#demo\">
\t\t\t\t\t\t\t\t\t{{ grav.language.getLanguage == 'en' ? 'Booking now !' : 'Đăng ký ngay' }}</a>
\t\t\t\t\t\t\t</div>
                        <div style=\"height: 340px\">
\t\t\t\t\t\t\t{% for feature in plan.features %}

\t\t\t\t\t\t\t\t<a style=\"d-flex justify-content-center\">{{ feature.text }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% endfor %}
                        </div>
                         <a href=\"{{ plan.link }}\">
\t\t\t\t\t\t\t\t\t{{ grav.language.getLanguage == 'en' ? 'Show more' : 'Xem thêm' }}
\t\t\t\t\t\t\t\t</a>   
\t\t\t\t\t\t</div>
                        
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</section>


{% endblock %}
", "pricing.html.twig", "C:\\xampp\\htdocs\\bookdevn\\user\\themes\\quark\\templates\\pricing.html.twig");
    }
}
