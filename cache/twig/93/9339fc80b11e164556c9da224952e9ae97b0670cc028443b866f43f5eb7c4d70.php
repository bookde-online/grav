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

/* modular/default.html.twig */
class __TwigTemplate_bd03ecaec106653bf9cbae8f12c3ddaed5a9a9186a0c17999f090e992c486428 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/default.html.twig"));

        // line 1
        echo "    ";
        if ($this->getAttribute(($context["module"] ?? null), "content", [])) {
            // line 2
            echo "        ";
            echo $this->getAttribute(($context["module"] ?? null), "content", []);
            echo "
    ";
        } elseif ($this->getAttribute(        // line 3
($context["page"] ?? null), "content", [])) {
            // line 4
            echo "        ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  41 => 3,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("    {% if module.content|raw %}
        {{ module.content|raw }}
    {% elseif page.content|raw %}
        {{ page.content|raw }}
    {% endif %}
", "modular/default.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\modular\\default.html.twig");
    }
}
