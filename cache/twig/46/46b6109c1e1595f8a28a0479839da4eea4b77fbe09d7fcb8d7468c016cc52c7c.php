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

/* en/pricing.html.twig */
class __TwigTemplate_1b670b9bb6284bdd530ed3ce0e0527b39231d55570af6ed236488acb3331829b extends \Twig\Template
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
        $this->loadTemplate("partials/header_en.html.twig", "en/pricing.html.twig", 5)->display($context);
        // line 6
        echo "</head>

<body class=\"pricing-page\">

  ";
        // line 11
        echo "   ";
        $this->loadTemplate("partials/navigation_en.html.twig", "en/pricing.html.twig", 11)->display($context);
        // line 12
        echo "
  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Pricing</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Home</a></li>
            <li class=\"current\">Pricing</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Pricing Section -->
    <section id=\"pricing\" class=\"pricing section\">

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"pricing-item\">
              <h3 style=\"font-size: 25px;\">Trial</h3>
              <h4><sup>\$</sup>0<span> for first 6 month</span></h4>
              <p>Per/account/month, billed annually</p>
              <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "#services\" class=\"cta-btn\">Contact Now</a><br>
              <h5 style=\"font-size: 16px; font-weight: 600;\">For experiencing website of your own</h5>

              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Free domain name.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Hotel image, information,...</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Implication with third-party services</span></li>
                <li><i class=\"bi bi-x\" style=\"color: red;\"></i> <span>No Online booking</span></li>
                <li><i class=\"bi bi-x\" style=\"color: red;\"></i> <span>No Online payment through web</span></li>
                <li><i class=\"bi bi-check\"></i> <span><b>One hotel</b></span></li>

              </ul>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"pricing-item\">
              <h3 style=\"font-size: 25px;\">Normal</h3>
              <h4><sup>\$</sup>1.99</h4>
              <p>Per/account/month, billed annually</p>
              <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "#services\" class=\"cta-btn\">Contact Now</a><br>
              <h5 style=\"font-size: 16px; font-weight: 600;\">For experiencing website of your own</h5>

              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Free domain name.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Hotel image, information,...</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Implication with third-party services</span></li>
                <li><i class=\"bi bi-check\" ></i> <span>Online booking</span></li>
                <li><i class=\"bi bi-check\" ></i> <span>Online payment through web</span></li>
                <li><i class=\"bi bi-check\"></i> <span> <b>One hotel</b></span></li>

              </ul>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"pricing-item\">
              <h3 style=\"font-size: 25px;\">Premium</h3>
              <h4><sup>\$</sup>2.99</h4>
              <p>Per/account/month, billed annually</p>
              <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "#services\" class=\"cta-btn\">Contact Now</a><br>
              <h5 style=\"font-size: 16px; font-weight: 600;\">For experiencing website of your own</h5>

              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Free domain name.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Hotel image, information,...</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Implication with third-party services</span></li>
                <li><i class=\"bi bi-check\" ></i> <span>Online booking</span></li>
                <li><i class=\"bi bi-check\" ></i> <span>Online payment through web</span></li>
                <li><i class=\"bi bi-check\"></i> <span><b>Two or more hotels</b></span></li>
              </ul>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
           ";
        // line 103
        $this->loadTemplate("partials/footer_en.html.twig", "en/pricing.html.twig", 103)->display($context);
        // line 104
        echo "</footer>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "en/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 104,  152 => 103,  126 => 80,  103 => 60,  80 => 40,  58 => 21,  47 => 12,  44 => 11,  38 => 6,  36 => 5,  30 => 1,);
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

<body class=\"pricing-page\">

  {# Menu #}
   {% include 'partials/navigation_en.html.twig' %}

  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Pricing</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ page.find('/home').url }}\">Home</a></li>
            <li class=\"current\">Pricing</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Pricing Section -->
    <section id=\"pricing\" class=\"pricing section\">

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"pricing-item\">
              <h3 style=\"font-size: 25px;\">Trial</h3>
              <h4><sup>\$</sup>0<span> for first 6 month</span></h4>
              <p>Per/account/month, billed annually</p>
              <a href=\"{{ page.find('/contact').url }}#services\" class=\"cta-btn\">Contact Now</a><br>
              <h5 style=\"font-size: 16px; font-weight: 600;\">For experiencing website of your own</h5>

              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Free domain name.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Hotel image, information,...</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Implication with third-party services</span></li>
                <li><i class=\"bi bi-x\" style=\"color: red;\"></i> <span>No Online booking</span></li>
                <li><i class=\"bi bi-x\" style=\"color: red;\"></i> <span>No Online payment through web</span></li>
                <li><i class=\"bi bi-check\"></i> <span><b>One hotel</b></span></li>

              </ul>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"pricing-item\">
              <h3 style=\"font-size: 25px;\">Normal</h3>
              <h4><sup>\$</sup>1.99</h4>
              <p>Per/account/month, billed annually</p>
              <a href=\"{{ page.find('/contact').url }}#services\" class=\"cta-btn\">Contact Now</a><br>
              <h5 style=\"font-size: 16px; font-weight: 600;\">For experiencing website of your own</h5>

              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Free domain name.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Hotel image, information,...</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Implication with third-party services</span></li>
                <li><i class=\"bi bi-check\" ></i> <span>Online booking</span></li>
                <li><i class=\"bi bi-check\" ></i> <span>Online payment through web</span></li>
                <li><i class=\"bi bi-check\"></i> <span> <b>One hotel</b></span></li>

              </ul>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"pricing-item\">
              <h3 style=\"font-size: 25px;\">Premium</h3>
              <h4><sup>\$</sup>2.99</h4>
              <p>Per/account/month, billed annually</p>
              <a href=\"{{ page.find('/contact').url }}#services\" class=\"cta-btn\">Contact Now</a><br>
              <h5 style=\"font-size: 16px; font-weight: 600;\">For experiencing website of your own</h5>

              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Free domain name.</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Hotel image, information,...</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Implication with third-party services</span></li>
                <li><i class=\"bi bi-check\" ></i> <span>Online booking</span></li>
                <li><i class=\"bi bi-check\" ></i> <span>Online payment through web</span></li>
                <li><i class=\"bi bi-check\"></i> <span><b>Two or more hotels</b></span></li>
              </ul>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
           {% include 'partials/footer_en.html.twig' %}
</footer>

</body>

</html>", "en/pricing.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\en\\pricing.html.twig");
    }
}
