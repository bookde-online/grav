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

/* partials/blog-list-item.html.twig */
class __TwigTemplate_7724cccd4ec8bd8d00a50a64dfaf737fabd189c271af2e5bfc12fd95bd850b03 extends \Twig\Template
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
        echo "<div class=\"bg-white shadow-lg overflow-hidden transition-transform hover:scale-105 duration-300 mb-5\" style=\"height:550px; border-radius: 10px;\">
    ";
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 3
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 4
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
            echo "\">
        <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 700, 1 => 400], "method"), "url", []), "html", null, true);
            echo "\" alt=\"BookDe Blog\" loading=\"lazy\" class=\"w-full h-30\">
    </a>
    ";
        }
        // line 8
        echo "
    <div class=\"p-4 space-y-3\">
        <div class=\"text-sm text-gray-500\">
            ";
        // line 11
        $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-list-item.html.twig", 11)->display($context);
        // line 12
        echo "        </div>

        <h5 class=\"text-xl font-semibold text-gray-800 hover:text-blue-600 transition-colors mb-5\">
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", []), "html", null, true);
        echo "\">
                ";
        // line 16
        $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-list-item.html.twig", 16)->display(twig_array_merge($context, ["title_level" => "span"]));
        // line 17
        echo "            </a>
        </h5>

       
    </div>

    <div class=\"px-4 pb-4\">
        ";
        // line 24
        $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-list-item.html.twig", 24)->display($context);
        // line 25
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  76 => 24,  67 => 17,  65 => 16,  61 => 15,  56 => 12,  54 => 11,  49 => 8,  43 => 5,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-white shadow-lg overflow-hidden transition-transform hover:scale-105 duration-300 mb-5\" style=\"height:550px; border-radius: 10px;\">
    {% set image = page.media.images|first %}
    {% if image %}
    <a href=\"{{ page.url }}\">
        <img src=\"{{ image.cropZoom(700,400).url }}\" alt=\"BookDe Blog\" loading=\"lazy\" class=\"w-full h-30\">
    </a>
    {% endif %}

    <div class=\"p-4 space-y-3\">
        <div class=\"text-sm text-gray-500\">
            {% include 'partials/blog/date.html.twig' %}
        </div>

        <h5 class=\"text-xl font-semibold text-gray-800 hover:text-blue-600 transition-colors mb-5\">
            <a href=\"{{ page.url }}\">
                {% include 'partials/blog/title.html.twig' with {title_level: 'span'} %}
            </a>
        </h5>

       
    </div>

    <div class=\"px-4 pb-4\">
        {% include 'partials/blog/taxonomy.html.twig' %}
    </div>
</div>
", "partials/blog-list-item.html.twig", "C:\\xampp\\htdocs\\bookdevn\\user\\themes\\quark\\templates\\partials\\blog-list-item.html.twig");
    }
}
