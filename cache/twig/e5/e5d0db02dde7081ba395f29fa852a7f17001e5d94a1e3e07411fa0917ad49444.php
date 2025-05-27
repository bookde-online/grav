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
        echo "
<section id=\"team\" class=\"team-section py-5\" \">
    <div class=\"container\">
        <div class=\"section-title text-center mb-5\" data-aos=\"fade-up\">
            ";
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", [])) {
            // line 6
            echo "                <h2 class=\"inner-title\" style=\"color: #333; font-weight: bold;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
            echo "</h2>
                <hr class=\"mx-auto\" style=\"border-top: 2px solid #A93226; width: 80px;\">
            ";
        }
        // line 9
        echo "        </div>
        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 d-flex justify-content-center\">
            ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", [])) {
            // line 12
            echo "                <p class=\"text-center\" style=\"color: #555; font-size: 1.1em; line-height: 1.6;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []), "html", null, true);
            echo "</p>
            ";
        }
        // line 14
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "items", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "                <div class=\"col\" data-aos=\"fade-up\" data-aos-delay=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", []) * 100), "html", null, true);
            echo "\">
                    <div class=\"team-member\" style=\"background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);\">
                        <div class=\"member-img\" style=\"position: relative;\">
                            ";
            // line 18
            $context["image"] = twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($context["item"], "image", [])));
            // line 19
            echo "                            ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["image"] ?? null), [], "array")) {
                // line 20
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["image"] ?? null), [], "array"), "url", []), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"Image ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []));
                echo "\" style=\"width: 100%; display: block; aspect-ratio: 1/1; object-fit: cover;\">
                            ";
            } else {
                // line 22
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
                echo "/assets/img/default.jpg\" class=\"img-fluid\" alt=\"Default Image\" style=\"width: 100%; display: block; aspect-ratio: 1/1; object-fit: cover;\">
                            ";
            }
            // line 24
            echo "                        </div>
                        <div class=\"member-info text-center p-3\">
                            <h5 style=\"color: black; margin-bottom: 5px; font-weight:bold\">";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["item"], "title", [])), "html", null, true);
            echo "</h5>
                            ";
            // line 27
            if ($this->getAttribute($context["item"], "subtitle", [])) {
                // line 28
                echo "                                <p class=\"small text-muted mb-0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subtitle", []), "html", null, true);
                echo "</p>
                            ";
            }
            // line 30
            echo "                            ";
            if ($this->getAttribute($context["item"], "social", [])) {
                // line 31
                echo "                                <div class=\"mt-2\">
                                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "social", []));
                foreach ($context['_seq'] as $context["_key"] => $context["social_item"]) {
                    // line 33
                    echo "                                        ";
                    $context["social_icon"] = twig_first($this->env, twig_get_array_keys_filter($context["social_item"]));
                    // line 34
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["social_item"], ($context["social_icon"] ?? null), [], "array"), "html", null, true);
                    echo "\" class=\"btn btn-outline-secondary btn-sm rounded-circle me-2\" title=\"";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["social_icon"] ?? null)), "html", null, true);
                    echo "\" target=\"_blank\">
                                            <i class=\"bi bi-";
                    // line 35
                    echo twig_escape_filter($this->env, ($context["social_icon"] ?? null), "html", null, true);
                    echo "\"></i>
                                        </a>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                                </div>
                            ";
            }
            // line 40
            echo "                        </div>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    </div>
</section>";
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
        return array (  167 => 44,  150 => 40,  146 => 38,  137 => 35,  130 => 34,  127 => 33,  123 => 32,  120 => 31,  117 => 30,  111 => 28,  109 => 27,  105 => 26,  101 => 24,  95 => 22,  87 => 20,  84 => 19,  82 => 18,  75 => 15,  57 => 14,  51 => 12,  49 => 11,  45 => 9,  38 => 6,  36 => 5,  30 => 1,);
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
<section id=\"team\" class=\"team-section py-5\" \">
    <div class=\"container\">
        <div class=\"section-title text-center mb-5\" data-aos=\"fade-up\">
            {% if page.header.title %}
                <h2 class=\"inner-title\" style=\"color: #333; font-weight: bold;\">{{ page.header.title }}</h2>
                <hr class=\"mx-auto\" style=\"border-top: 2px solid #A93226; width: 80px;\">
            {% endif %}
        </div>
        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 d-flex justify-content-center\">
            {% if page.header.subtitle %}
                <p class=\"text-center\" style=\"color: #555; font-size: 1.1em; line-height: 1.6;\">{{ page.header.subtitle }}</p>
            {% endif %}
            {% for item in page.header.items %}
                <div class=\"col\" data-aos=\"fade-up\" data-aos-delay=\"{{ loop.index * 100 }}\">
                    <div class=\"team-member\" style=\"background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);\">
                        <div class=\"member-img\" style=\"position: relative;\">
                            {% set image = item.image|keys|first %}
                            {% if page.media[image] %}
                                <img src=\"{{ page.media[image].url }}\" class=\"img-fluid\" alt=\"Image {{ item.title|e }}\" style=\"width: 100%; display: block; aspect-ratio: 1/1; object-fit: cover;\">
                            {% else %}
                                <img src=\"{{ theme_url }}/assets/img/default.jpg\" class=\"img-fluid\" alt=\"Default Image\" style=\"width: 100%; display: block; aspect-ratio: 1/1; object-fit: cover;\">
                            {% endif %}
                        </div>
                        <div class=\"member-info text-center p-3\">
                            <h5 style=\"color: black; margin-bottom: 5px; font-weight:bold\">{{ item.title|upper }}</h5>
                            {% if item.subtitle %}
                                <p class=\"small text-muted mb-0\">{{ item.subtitle }}</p>
                            {% endif %}
                            {% if item.social %}
                                <div class=\"mt-2\">
                                    {% for social_item in item.social %}
                                        {% set social_icon = social_item|keys|first %}
                                        <a href=\"{{ social_item[social_icon] }}\" class=\"btn btn-outline-secondary btn-sm rounded-circle me-2\" title=\"{{ social_icon|capitalize }}\" target=\"_blank\">
                                            <i class=\"bi bi-{{ social_icon }}\"></i>
                                        </a>
                                    {% endfor %}
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</section>", "modular/who-use-service.html.twig", "C:\\xampp\\htdocs\\bookdevn\\user\\themes\\quark\\templates\\modular\\who-use-service.html.twig");
    }
}
