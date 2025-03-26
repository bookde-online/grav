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

/* vi/home.html.twig */
class __TwigTemplate_dc6167586f40e961f69c02050f57aa0a9fc5d71ffb37b5858d7ff4f5eadc1665 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vi/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"vi\">
    ";
        // line 3
        $this->loadTemplate("partials/header_vi.html.twig", "vi/home.html.twig", 3)->display($context);
        // line 4
        echo "
<body class=\"index-page\">

 ";
        // line 8
        echo "   ";
        $this->loadTemplate("partials/navigation_vi.html.twig", "vi/home.html.twig", 8)->display($context);
        // line 9
        echo "
  <main class=\"main\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 12
            echo "      ";
            echo $this->getAttribute($context["module"], "content", []);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    <!-- Services Section -->
    <!-- benefit -->
    <section class=\"benefits-section text-center\">
      <div class=\"container\">
        <div class=\"benefits-section\">
            <!-- Phần văn bản -->
            <div class=\"benefits-text\">
                <h2><strong>Benefits of Using Our Services</strong></h2>
                <p>Helps your hotel operate more smoothly, saves time, and optimizes revenue with a modern, professional website design platform.</p>
            </div>
    
            <!-- Card hình ảnh -->
            <div class=\"card-wrapper\">
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/professional.webp\" alt=\"Professional\">
                    </div>
                    <div class=\"text-overlay\">Professional</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/modern.webp\" alt=\"Modern\">
                    </div>
                    <div class=\"text-overlay\">Modern</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/effective.webp\" alt=\"Effective\">
                    </div>
                    <div class=\"text-overlay\">Effective</div>
                </div>
            </div>
        </div>
    </div>
  </section>  
  <!-- Team Section -->
  <section id=\"team\" class=\"team section light-background\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
      <h2>Who Uses Our Services?</h2>
    </div><!-- End Section Title -->

    <div class=\"container\">

      <div class=\"row gy-4\">

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/about/hotel.webp\" class=\"img-fluid\" alt=\"Image hotel\">
              <h4 class=\"text-overlay\">HOTELS</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/about/spa.webp\" class=\"img-fluid\" alt=\"Image spa\" style=\"height: fit-content;\">
              <h4 class=\"text-overlay\">SPA</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/about/tours.webp\" class=\"img-fluid\" alt=\"Image tours\">
              <h4 class=\"text-overlay\">TOURS</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>

  </section><!-- /Team Section -->
  
  <section>
    <div class=\"container-fluid custom-section\">
      <div class=\"container\">
          <div class=\"row align-items-center flex-md-row flex-column-reverse\">
            <div class=\"col-md-6 text-center\">
              <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/services/demo.webp\" alt=\"Hotel Launch\" class=\"img-fluid w-100 rounded\">
            </div>
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-5 text-center text-md-start\">
                <h2 id=\"launch\">Ready to launch your hotel to the web?</h2>
                <a href=\"#\" class=\"demo-btn\">Try our free demo!</a>
            </div>
          </div>
      </div>
    </div>
  </section>

  <div class=\"text-center mt-4\" style=\"margin-bottom: 40px; margin-top: 5px;\" >
    <a href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "#services\" class=\"btn btn-contact\">Contact Us Now</a>
  </div>

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
           ";
        // line 121
        $this->loadTemplate("partials/footer_en.html.twig", "vi/home.html.twig", 121)->display($context);
        // line 122
        echo "</footer>

</body>

</html>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "vi/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 122,  197 => 121,  188 => 115,  172 => 102,  152 => 85,  140 => 76,  128 => 67,  102 => 44,  92 => 37,  82 => 30,  64 => 14,  55 => 12,  51 => 11,  47 => 9,  44 => 8,  39 => 4,  37 => 3,  33 => 1,);
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
<html lang=\"vi\">
    {% include 'partials/header_vi.html.twig' %}

<body class=\"index-page\">

 {# Menu #}
   {% include 'partials/navigation_vi.html.twig' %}

  <main class=\"main\">
    {% for module in page.collection() %}
      {{module.content|raw}}
    {% endfor %}

    <!-- Services Section -->
    <!-- benefit -->
    <section class=\"benefits-section text-center\">
      <div class=\"container\">
        <div class=\"benefits-section\">
            <!-- Phần văn bản -->
            <div class=\"benefits-text\">
                <h2><strong>Benefits of Using Our Services</strong></h2>
                <p>Helps your hotel operate more smoothly, saves time, and optimizes revenue with a modern, professional website design platform.</p>
            </div>
    
            <!-- Card hình ảnh -->
            <div class=\"card-wrapper\">
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"{{ theme_url }}/assets/img/professional.webp\" alt=\"Professional\">
                    </div>
                    <div class=\"text-overlay\">Professional</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"{{ theme_url }}/assets/img/modern.webp\" alt=\"Modern\">
                    </div>
                    <div class=\"text-overlay\">Modern</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"{{ theme_url }}/assets/img/effective.webp\" alt=\"Effective\">
                    </div>
                    <div class=\"text-overlay\">Effective</div>
                </div>
            </div>
        </div>
    </div>
  </section>  
  <!-- Team Section -->
  <section id=\"team\" class=\"team section light-background\">

    <!-- Section Title -->
    <div class=\"container section-title\" data-aos=\"fade-up\">
      <h2>Who Uses Our Services?</h2>
    </div><!-- End Section Title -->

    <div class=\"container\">

      <div class=\"row gy-4\">

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"{{ theme_url }}/assets/img/about/hotel.webp\" class=\"img-fluid\" alt=\"Image hotel\">
              <h4 class=\"text-overlay\">HOTELS</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"{{ theme_url }}/assets/img/about/spa.webp\" class=\"img-fluid\" alt=\"Image spa\" style=\"height: fit-content;\">
              <h4 class=\"text-overlay\">SPA</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"{{ theme_url }}/assets/img/about/tours.webp\" class=\"img-fluid\" alt=\"Image tours\">
              <h4 class=\"text-overlay\">TOURS</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>

  </section><!-- /Team Section -->
  
  <section>
    <div class=\"container-fluid custom-section\">
      <div class=\"container\">
          <div class=\"row align-items-center flex-md-row flex-column-reverse\">
            <div class=\"col-md-6 text-center\">
              <img src=\"{{ theme_url }}/assets/img/services/demo.webp\" alt=\"Hotel Launch\" class=\"img-fluid w-100 rounded\">
            </div>
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-5 text-center text-md-start\">
                <h2 id=\"launch\">Ready to launch your hotel to the web?</h2>
                <a href=\"#\" class=\"demo-btn\">Try our free demo!</a>
            </div>
          </div>
      </div>
    </div>
  </section>

  <div class=\"text-center mt-4\" style=\"margin-bottom: 40px; margin-top: 5px;\" >
    <a href=\"{{ page.find('/contact').url }}#services\" class=\"btn btn-contact\">Contact Us Now</a>
  </div>

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
           {% include 'partials/footer_en.html.twig' %}
</footer>

</body>

</html>", "vi/home.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\vi\\home.html.twig");
    }
}
