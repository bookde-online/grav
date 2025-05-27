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

/* modular/about.html.twig */
class __TwigTemplate_b808132122d18d1c74bd851e870f15d6f96a2f31e9819e724c0cc648de998cec extends \Twig\Template
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
        echo "<section id=\"about\" class=\"about-section\" style=\"padding: 60px 0; background-color: #f9f9f9;\">
\t<div class=\"container\" style=\"max-width: 1200px; margin: 0 auto;\">
\t\t<div class=\"row\" style=\"display: flex; align-items: center; flex-wrap: wrap;\">

\t\t\t<div class=\"col-lg-6\" style=\"flex: 1 1 50%; padding: 20px; text-align: center;\">
\t\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []), "html", null, true);
        echo "\" alt=\"BookDe\" class=\"img-fluid rounded\" loading=\"lazy\">
\t\t\t</div>

\t\t\t<div class=\"col-lg-6\" style=\"flex: 1 1 50%; padding: 20px;\">
\t\t\t\t<h2 style=\"color: #A93226; font-size: 2.5em; margin-bottom: 20px;\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</h2>
\t\t\t\t<p style=\"font-size: 1.1em; line-height: 1.6; color: #555;\">";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
\t\t\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/";
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("contact") : ("lien-he"));
        echo "\">
\t\t\t\t\t";
        // line 13
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Get in touch") : ("Liên hệ"));
        echo "
\t\t\t\t</a>

\t\t\t</div>

\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  52 => 12,  48 => 11,  44 => 10,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"about\" class=\"about-section\" style=\"padding: 60px 0; background-color: #f9f9f9;\">
\t<div class=\"container\" style=\"max-width: 1200px; margin: 0 auto;\">
\t\t<div class=\"row\" style=\"display: flex; align-items: center; flex-wrap: wrap;\">

\t\t\t<div class=\"col-lg-6\" style=\"flex: 1 1 50%; padding: 20px; text-align: center;\">
\t\t\t\t<img src=\"{{ page.media.images|first.url }}\" alt=\"BookDe\" class=\"img-fluid rounded\" loading=\"lazy\">
\t\t\t</div>

\t\t\t<div class=\"col-lg-6\" style=\"flex: 1 1 50%; padding: 20px;\">
\t\t\t\t<h2 style=\"color: #A93226; font-size: 2.5em; margin-bottom: 20px;\">{{ page.header.title }}</h2>
\t\t\t\t<p style=\"font-size: 1.1em; line-height: 1.6; color: #555;\">{{ page.content|raw }}</p>
\t\t\t\t<a href=\"{{ base_url }}/{{ grav.language.getLanguage == 'en' ? 'contact' : 'lien-he' }}\">
\t\t\t\t\t{{ grav.language.getLanguage == 'en' ? 'Get in touch' : 'Liên hệ' }}
\t\t\t\t</a>

\t\t\t</div>

\t\t</div>
\t</div>
</section>
", "modular/about.html.twig", "C:\\xampp\\htdocs\\bookdevn\\user\\themes\\quark\\templates\\modular\\about.html.twig");
    }
}
