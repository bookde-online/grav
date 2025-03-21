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

/* default.html.twig */
class __TwigTemplate_dbcd70d1f059986a4b0fb6e93a6424386e8de106f57ad451006dd3a7ef9d37ea extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    ";
        // line 5
        $this->loadTemplate("partials/header_en.html.twig", "default.html.twig", 5)->display($context);
        // line 6
        echo "</head>

<body class=\"index-page\">

  ";
        // line 11
        echo "   ";
        $this->loadTemplate("partials/navigation_en.html.twig", "default.html.twig", 11)->display($context);
        // line 12
        echo "
  <main class=\"main\">
      ";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
           ";
        // line 18
        $this->loadTemplate("partials/footer_en.html.twig", "default.html.twig", 18)->display($context);
        // line 19
        echo "</footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  58 => 18,  51 => 14,  47 => 12,  44 => 11,  38 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    {% include 'partials/header_en.html.twig' %}
</head>

<body class=\"index-page\">

  {# Menu #}
   {% include 'partials/navigation_en.html.twig' %}

  <main class=\"main\">
      {{ page.content|raw }}
  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
           {% include 'partials/footer_en.html.twig' %}
</footer>

</body>

</html>", "default.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\en\\default.html.twig");
    }
}
