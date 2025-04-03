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

/* partials/footer.html.twig */
class __TwigTemplate_8e7d198582ac56aa4cf2d2993ab2a5260c542c1e718c975e6bca99d35a3ae514 extends \Twig\Template
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
        $context["page_con"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/_config"], "method");
        // line 2
        $context["page_ser"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/home/_services"], "method");
        // line 3
        $context["macros"] = $this->loadTemplate("macros/macros_foot.html.twig", "partials/footer.html.twig", 3)->unwrap();
        // line 4
        echo "

<footer id=\"footer\" class=\"footer dark-background\">
<section id=\"footer_section\" class=\"section bg-gray\">
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-3 col-md-6 footer-about\">
          ";
        // line 11
        $this->loadTemplate("partials/logo.html.twig", "partials/footer.html.twig", 11)->display($context);
        // line 12
        echo "        </div>

        <div class=\"col-lg-3 col-md-3 footer-links\">
          ";
        // line 15
        if (($context["page_ser"] ?? null)) {
            // line 16
            echo "            ";
            // line 17
            echo "            <ul>
              ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page_ser"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 19
                echo "                <li>
                  <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", []), "html", null, true);
                echo "</a>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            </ul>
          ";
        }
        // line 25
        echo "        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <ul>
                  ";
        // line 29
        echo $context["macros"]->getnav_loop(($context["pages"] ?? null));
        echo "
          </ul>
        </div>
        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
        
          <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center\">
            ";
        // line 35
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "name", [])) {
            // line 36
            echo "              <span class=\"sitename\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "name", []), "html", null, true);
            echo "</span>
            ";
        }
        // line 38
        echo "          </a>
          <div class=\"footer-contact pt-3\">
            ";
        // line 40
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "address", [])) {
            // line 41
            echo "              <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "address", []), "html", null, true);
            echo "</p>
            ";
        }
        // line 43
        echo "
            ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "phone", [])) {
            // line 45
            echo "              <p class=\"mt-3\">
              <strong>
                ";
            // line 47
            if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", []) == "vi")) {
                // line 48
                echo "                   Điện thoại:
                ";
            } else {
                // line 50
                echo "                    Phone:
                ";
            }
            // line 52
            echo "              </strong> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "phone", []), "html", null, true);
            echo "</span></p>
            ";
        }
        // line 54
        echo "
            ";
        // line 55
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "email", [])) {
            // line 56
            echo "              <p><strong>Email:</strong> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "email", []), "html", null, true);
            echo "</span></p>
            ";
        }
        // line 58
        echo "          </div>


          ";
        // line 61
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "social", [])) {
            // line 62
            echo "            <div class=\"social-links d-flex mt-4\">
            ";
            // line 69
            echo "
              ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 71
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "link", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "title", []), "html", null, true);
                echo "\">
                      ";
                // line 72
                if ($this->getAttribute($context["social"], "image", [])) {
                    // line 73
                    echo "                          ";
                    $context["image"] = twig_first($this->env, $this->getAttribute($context["social"], "image", []));
                    // line 74
                    echo "                          ";
                    $context["page_url"] = $this->getAttribute(($context["page_con"] ?? null), "url", []);
                    // line 75
                    echo "                          ";
                    $context["full_url"] = ((($context["page_url"] ?? null) . "/") . $this->getAttribute(($context["image"] ?? null), "name", []));
                    // line 76
                    echo "
                          <img src=\"";
                    // line 77
                    echo twig_escape_filter($this->env, ($context["full_url"] ?? null), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "title", []));
                    echo "\" style=\" width: 24px; height: auto;\">
                      ";
                }
                // line 79
                echo "                  </a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "
            </div>
            ";
        }
        // line 84
        echo "        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      ";
        // line 90
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "foot", [])) {
            // line 91
            echo "      <p>";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "foot", []));
            echo "</p>
      ";
        }
        // line 93
        echo "    </div>
</section>
</footer>

";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 93,  222 => 91,  220 => 90,  212 => 84,  207 => 81,  200 => 79,  193 => 77,  190 => 76,  187 => 75,  184 => 74,  181 => 73,  179 => 72,  172 => 71,  168 => 70,  165 => 69,  162 => 62,  160 => 61,  155 => 58,  149 => 56,  147 => 55,  144 => 54,  138 => 52,  134 => 50,  130 => 48,  128 => 47,  124 => 45,  122 => 44,  119 => 43,  113 => 41,  111 => 40,  107 => 38,  101 => 36,  99 => 35,  95 => 34,  87 => 29,  81 => 25,  77 => 23,  66 => 20,  63 => 19,  59 => 18,  56 => 17,  54 => 16,  52 => 15,  47 => 12,  45 => 11,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set page_con = page.find('/_config') %}
{% set page_ser = page.find('/home/_services') %}
{% import 'macros/macros_foot.html.twig' as macros %}


<footer id=\"footer\" class=\"footer dark-background\">
<section id=\"footer_section\" class=\"section bg-gray\">
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-3 col-md-6 footer-about\">
          {% include 'partials/logo.html.twig' %}
        </div>

        <div class=\"col-lg-3 col-md-3 footer-links\">
          {% if page_ser %}
            {# <h4>Dịch vụ</h4> #}
            <ul>
              {% for service in page_ser.children %}
                <li>
                  <a href=\"{{ service.url }}\">{{ service.title }}</a>
                </li>
              {% endfor %}
            </ul>
          {% endif %}
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <ul>
                  {{ macros.nav_loop(pages) }}
          </ul>
        </div>
        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
        
          <a href=\"{{ page.find('/home').url }}\" class=\"logo d-flex align-items-center\">
            {% if page_con.header.name %}
              <span class=\"sitename\">{{ page_con.header.name }}</span>
            {% endif %}
          </a>
          <div class=\"footer-contact pt-3\">
            {% if page_con.header.address %}
              <p>{{ page_con.header.address }}</p>
            {% endif %}

            {% if page_con.header.phone %}
              <p class=\"mt-3\">
              <strong>
                {% if grav.language.getActive == 'vi' %}
                   Điện thoại:
                {% else %}
                    Phone:
                {% endif %}
              </strong> <span>{{ page_con.header.phone }}</span></p>
            {% endif %}

            {% if page_con.header.email %}
              <p><strong>Email:</strong> <span>{{ page_con.header.email }}</span></p>
            {% endif %}
          </div>


          {% if page_con.header.social %}
            <div class=\"social-links d-flex mt-4\">
            {# {% if page_con.media %}
                {% for media_item in page_con.media %}
        <img src=\"{{ media_item.url }}\" alt=\"{{ media_item.name }}\">
                {% endfor %}
            {% else %}
                <p>No media found.</p> #}

              {% for social in page_con.header.social %}
                  <a href=\"{{ social.link }}\" title=\"{{ social.title }}\">
                      {% if social.image %}
                          {% set image = social.image|first %}
                          {% set page_url = page_con.url %}
                          {% set full_url = page_url ~ '/' ~ image.name %}

                          <img src=\"{{ full_url }}\" alt=\"{{ social.title|e }}\" style=\" width: 24px; height: auto;\">
                      {% endif %}
                  </a>
              {% endfor %}

            </div>
            {% endif %}
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      {% if page_con.header.foot %}
      <p>{{ page_con.header.foot|markdown }}</p>
      {% endif %}
    </div>
</section>
</footer>

", "partials/footer.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\quark\\templates\\partials\\footer.html.twig");
    }
}
