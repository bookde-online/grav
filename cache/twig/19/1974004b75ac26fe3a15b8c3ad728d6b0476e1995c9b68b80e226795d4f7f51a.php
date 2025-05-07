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

/* modular/infor.html.twig */
class __TwigTemplate_ef618fdb3ebe74367e02c27be6dbd55cc155445be096ca5e7c0bd28ad3df68f5 extends \Twig\Template
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
        // line 2
        $context["page_con"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/_config"], "method");
        // line 3
        echo "

<!-- Contact Section -->
<section id=\"contact\" class=\"contact section\">
    ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "iframe", [])) {
            // line 8
            echo "      <div class=\"mb-5\">
      ";
            // line 9
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "iframe", []);
            echo "
      </div><!-- End Google Maps -->
    ";
        }
        // line 12
        echo "

  <div class=\"container\" data-aos=\"fade\">

    <div class=\"row gy-5 gx-lg-5\">

      <div class=\"col-lg-4\">

        <div class=\"info\">
          ";
        // line 21
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", [])) {
            // line 22
            echo "            <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo "</h3>
          ";
        }
        // line 24
        echo "
          ";
        // line 25
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "text", [])) {
            // line 26
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "text", []), "html", null, true);
            echo "</p>
          ";
        }
        // line 28
        echo "
          ";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "address", [])) {
            // line 30
            echo "            <div class=\"info-item d-flex\">
              <i class=\"bi bi-geo-alt flex-shrink-0\"></i>
              <div>
                ";
            // line 33
            if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", []) == "vi")) {
                // line 34
                echo "                    <h4>Địa chỉ:</h4>
                ";
            } else {
                // line 36
                echo "                    <h4>Address:</h4>
                ";
            }
            // line 38
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "address", []), "html", null, true);
            echo "</p>
              </div>
            </div><!-- End Info Item -->
          ";
        }
        // line 42
        echo "
          ";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "email", [])) {
            // line 44
            echo "            <div class=\"info-item d-flex\">
              <i class=\"bi bi-envelope flex-shrink-0\"></i>
              <div>
                <h4>Email:</h4>
                <p>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "email", []), "html", null, true);
            echo "</p>
              </div>
            </div><!-- End Info Item -->
          ";
        }
        // line 52
        echo "
          ";
        // line 53
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "phone", [])) {
            // line 54
            echo "            <div class=\"info-item d-flex\">
              <i class=\"bi bi-phone flex-shrink-0\"></i>
              <div>
                ";
            // line 57
            if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", []) == "vi")) {
                // line 58
                echo "                    <h4>Điện thoại:</h4>
                ";
            } else {
                // line 60
                echo "                    <h4>Phone:</h4>
                ";
            }
            // line 62
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "phone", []), "html", null, true);
            echo "</p>
              </div>
            </div><!-- End Info Item -->
          ";
        }
        // line 66
        echo "
        </div>

      </div><!-- End Contact Info Column -->

    
";
    }

    public function getTemplateName()
    {
        return "modular/infor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 66,  148 => 62,  144 => 60,  140 => 58,  138 => 57,  133 => 54,  131 => 53,  128 => 52,  121 => 48,  115 => 44,  113 => 43,  110 => 42,  102 => 38,  98 => 36,  94 => 34,  92 => 33,  87 => 30,  85 => 29,  82 => 28,  76 => 26,  74 => 25,  71 => 24,  65 => 22,  63 => 21,  52 => 12,  46 => 9,  43 => 8,  41 => 7,  35 => 3,  33 => 2,  30 => 1,);
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
{% set page_con = page.find('/_config') %}


<!-- Contact Section -->
<section id=\"contact\" class=\"contact section\">
    {% if page.header.iframe %}
      <div class=\"mb-5\">
      {{ page.header.iframe|raw }}
      </div><!-- End Google Maps -->
    {% endif %}


  <div class=\"container\" data-aos=\"fade\">

    <div class=\"row gy-5 gx-lg-5\">

      <div class=\"col-lg-4\">

        <div class=\"info\">
          {% if page.header.title %}
            <h3>{{ page.header.title }}</h3>
          {% endif %}

          {% if page.header.text %}
            <p>{{ page.header.text }}</p>
          {% endif %}

          {% if page_con.header.address %}
            <div class=\"info-item d-flex\">
              <i class=\"bi bi-geo-alt flex-shrink-0\"></i>
              <div>
                {% if grav.language.getActive == 'vi' %}
                    <h4>Địa chỉ:</h4>
                {% else %}
                    <h4>Address:</h4>
                {% endif %}
                <p>{{ page_con.header.address }}</p>
              </div>
            </div><!-- End Info Item -->
          {% endif %}

          {% if page_con.header.email %}
            <div class=\"info-item d-flex\">
              <i class=\"bi bi-envelope flex-shrink-0\"></i>
              <div>
                <h4>Email:</h4>
                <p>{{ page_con.header.email }}</p>
              </div>
            </div><!-- End Info Item -->
          {% endif %}

          {% if page_con.header.phone %}
            <div class=\"info-item d-flex\">
              <i class=\"bi bi-phone flex-shrink-0\"></i>
              <div>
                {% if grav.language.getActive == 'vi' %}
                    <h4>Điện thoại:</h4>
                {% else %}
                    <h4>Phone:</h4>
                {% endif %}
                <p>{{ page_con.header.phone }}</p>
              </div>
            </div><!-- End Info Item -->
          {% endif %}

        </div>

      </div><!-- End Contact Info Column -->

    
", "modular/infor.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\quark\\templates\\modular\\infor.html.twig");
    }
}
