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
class __TwigTemplate_00d2907794d54254fd39a3ae43ab156eb4524b7d474e5e9c619aef95583ee69a extends \Twig\Template
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

<footer id=\"footer\" class=\"footer\" style=\"background-color:#FFF5E1\">
<section id=\"footer_section\" class=\"section bg-gray\">
    <div class=\"container footer-top\">
        <div class=\"row gy-4\">
            <div class=\"col-lg-3 col-md-6 footer-about\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.svg"), "html", null, true);
        echo "\" style=\"width:200px;height:auto\" alt=\"Logo\" class=\"logo\">
            
            </div>
          
          
            <div class=\"col-lg-5   col-md-4 footer-links\">
                ";
        // line 17
        if (($context["page_ser"] ?? null)) {
            // line 18
            echo "                  <h4 class=\"mb-2\" style=\"color: #A93226;\">
                        ";
            // line 19
            $context["language"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", []);
            // line 20
            echo "                        ";
            if ((($context["language"] ?? null) == "en")) {
                // line 21
                echo "                            Quick link
                        ";
            } elseif ((            // line 22
($context["language"] ?? null) == "vi")) {
                // line 23
                echo "                            Truy cập nhanh
                        ";
            } else {
                // line 25
                echo "                            Quick link
                        ";
            }
            // line 27
            echo "                    </h4>
                  <div class=\"d-flex justify-content-around\">
                    <ul style=\"font-weight:bold\">
                    ";
            // line 30
            echo $context["macros"]->getnav_loop(($context["pages"] ?? null));
            echo "
                  </ul>
                    <ul>
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page_ser"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 34
                echo "                            <li>
                                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "url", []), "html", null, true);
                echo "\" style=\"font-weight:bold\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", []), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                    </ul>       
                  </div>  
                ";
        }
        // line 41
        echo "            </div>

            <div class=\"col-lg-4 col-md-12 footer-newsletter\">

                <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center\">
                    ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "name", [])) {
            // line 47
            echo "                        <span class=\"sitename\" style=\"font-weight:bold;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "name", []), "html", null, true);
            echo "</span>
                    ";
        }
        // line 49
        echo "                </a>
                <div class=\"footer-contact pt-3\">
                    ";
        // line 51
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "address", [])) {
            // line 52
            echo "                        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "address", []), "html", null, true);
            echo "</p>
                    ";
        }
        // line 54
        echo "
                    ";
        // line 55
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "phone", [])) {
            // line 56
            echo "                        <p class=\"mt-3\">
                            <strong>
                                ";
            // line 58
            if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", []) == "vi")) {
                // line 59
                echo "                                    Điện thoại:
                                ";
            } else {
                // line 61
                echo "                                    Phone:
                                ";
            }
            // line 63
            echo "                            </strong> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "phone", []), "html", null, true);
            echo "</span></p>
                    ";
        }
        // line 65
        echo "
                    ";
        // line 66
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "email", [])) {
            // line 67
            echo "                        <p><strong>Email:</strong> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "email", []), "html", null, true);
            echo "</span></p>
                    ";
        }
        // line 69
        echo "                </div> 


                ";
        // line 72
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "social", [])) {
            // line 73
            echo "                    <div class=\"social-links d-flex mt-4\">
                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 75
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "link", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "title", []), "html", null, true);
                echo "\" target=\"_blank\">
                                ";
                // line 76
                if ($this->getAttribute($context["social"], "image", [])) {
                    // line 77
                    echo "                                    ";
                    $context["image"] = twig_first($this->env, $this->getAttribute($context["social"], "image", []));
                    // line 78
                    echo "                                    ";
                    $context["page_url"] = $this->getAttribute(($context["page_con"] ?? null), "url", []);
                    // line 79
                    echo "                                    ";
                    $context["full_url"] = ((($context["page_url"] ?? null) . "/") . $this->getAttribute(($context["image"] ?? null), "name", []));
                    // line 80
                    echo "
                                    <img src=\"";
                    // line 81
                    echo twig_escape_filter($this->env, ($context["full_url"] ?? null), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["social"], "title", []));
                    echo "\" style=\" width: 41px; height: 42px; border-radius: 50%; \">
                                ";
                }
                // line 83
                echo "                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "
                    </div>
                ";
        }
        // line 88
        echo "            </div>

        </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
        ";
        // line 94
        if ($this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "foot", [])) {
            // line 95
            echo "            <p>";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($this->getAttribute(($context["page_con"] ?? null), "header", []), "foot", []));
            echo "</p>
        ";
        }
        // line 97
        echo "    </div>
</section>
</footer>";
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
        return array (  247 => 97,  241 => 95,  239 => 94,  231 => 88,  226 => 85,  219 => 83,  212 => 81,  209 => 80,  206 => 79,  203 => 78,  200 => 77,  198 => 76,  191 => 75,  187 => 74,  184 => 73,  182 => 72,  177 => 69,  171 => 67,  169 => 66,  166 => 65,  160 => 63,  156 => 61,  152 => 59,  150 => 58,  146 => 56,  144 => 55,  141 => 54,  135 => 52,  133 => 51,  129 => 49,  123 => 47,  121 => 46,  117 => 45,  111 => 41,  106 => 38,  95 => 35,  92 => 34,  88 => 33,  82 => 30,  77 => 27,  73 => 25,  69 => 23,  67 => 22,  64 => 21,  61 => 20,  59 => 19,  56 => 18,  54 => 17,  45 => 11,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
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


<footer id=\"footer\" class=\"footer\" style=\"background-color:#FFF5E1\">
<section id=\"footer_section\" class=\"section bg-gray\">
    <div class=\"container footer-top\">
        <div class=\"row gy-4\">
            <div class=\"col-lg-3 col-md-6 footer-about\">
                <img src=\"{{ url('theme://images/logo.svg') }}\" style=\"width:200px;height:auto\" alt=\"Logo\" class=\"logo\">
            
            </div>
          
          
            <div class=\"col-lg-5   col-md-4 footer-links\">
                {% if page_ser %}
                  <h4 class=\"mb-2\" style=\"color: #A93226;\">
                        {% set language = grav.language.getActive %}
                        {% if language == 'en' %}
                            Quick link
                        {% elseif language == 'vi' %}
                            Truy cập nhanh
                        {% else %}
                            Quick link
                        {% endif %}
                    </h4>
                  <div class=\"d-flex justify-content-around\">
                    <ul style=\"font-weight:bold\">
                    {{ macros.nav_loop(pages) }}
                  </ul>
                    <ul>
                        {% for service in page_ser.children %}
                            <li>
                                <a href=\"{{ service.url }}\" style=\"font-weight:bold\">{{ service.title }}</a>
                            </li>
                        {% endfor %}
                    </ul>       
                  </div>  
                {% endif %}
            </div>

            <div class=\"col-lg-4 col-md-12 footer-newsletter\">

                <a href=\"{{ page.find('/home').url }}\" class=\"logo d-flex align-items-center\">
                    {% if page_con.header.name %}
                        <span class=\"sitename\" style=\"font-weight:bold;\">{{ page_con.header.name }}</span>
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
                        {% for social in page_con.header.social %}
                            <a href=\"{{ social.link }}\" title=\"{{ social.title }}\" target=\"_blank\">
                                {% if social.image %}
                                    {% set image = social.image|first %}
                                    {% set page_url = page_con.url %}
                                    {% set full_url = page_url ~ '/' ~ image.name %}

                                    <img src=\"{{ full_url }}\" alt=\"{{ social.title|e }}\" style=\" width: 41px; height: 42px; border-radius: 50%; \">
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
</footer>", "partials/footer.html.twig", "C:\\xampp\\htdocs\\bookdevn\\user\\themes\\quark\\templates\\partials\\footer.html.twig");
    }
}
