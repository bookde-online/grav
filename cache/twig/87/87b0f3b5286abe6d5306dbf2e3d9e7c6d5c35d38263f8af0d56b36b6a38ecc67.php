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

/* en/home.html.twig */
class __TwigTemplate_ac8026b19b5ee9ebdf9dfb16d1811953702adfff4cc0243e095ef023d2c4f624 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "en/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
      ";
        // line 3
        $this->loadTemplate("partials/header_en.html.twig", "en/home.html.twig", 3)->display($context);
        // line 4
        echo "
<body class=\"index-page\">

 ";
        // line 8
        echo "   ";
        $this->loadTemplate("partials/navigation_en.html.twig", "en/home.html.twig", 8)->display($context);
        // line 9
        echo "
  <main class=\"main\">

      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 13
            echo "        ";
            echo $this->getAttribute($context["module"], "content", []);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    <!-- Services Section -->
    <section id=\"services\" class=\"services section light-background\">

      <div class=\"container\">
        <div class=\"row gy-4\">
          <h2 class=\"inner-title\" ><b>Enhance Your Hotel Online</b></h2>
      
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"service-item item-orange position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781\"></path>
                </svg>
                <i class=\"bi bi-easel\"></i>
              </div>
              <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details"], "method"), "url", []), "html", null, true);
        echo "\" class=\"stretched-link\">
                <h3>Custom Hotel Website</h3>
              </a>
              <p>Create a unique online identity with a customized website.</p>
            </div>
          </div><!-- End Service Item -->
      
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"service-item item-cyan position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426\"></path>
                </svg>
                <i class=\"bi bi-broadcast\"></i>
              </div>
              <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-1"], "method"), "url", []), "html", null, true);
        echo "\" class=\"stretched-link\">
                <h3>Online Booking Support</h3>
              </a>
              <p>Simplify your hotel’s online booking process with ease.</p>
            </div>
          </div><!-- End Service Item -->
      
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"service-item item-teal position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174\"></path>
                </svg>
                <i class=\"bi bi-activity\"></i>
              </div>
              <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-2"], "method"), "url", []), "html", null, true);
        echo "\" class=\"stretched-link\">
                <h3>Booking Optimization Solutions</h3>
              </a>
              <p>Maximize your bookings with our advanced optimization tools.</p>
            </div>
          </div><!-- End Service Item -->
        </div>
        <hr>
        <h3 style=\"font-size: 20px; font-family: 'Poppins-light', sans-serif;; display: flex; justify-content: center; margin-top: 50px; text-align: center;\">
          <i>Launch your own booking website today!</i>
        </h3>
      </div>      

    </section><!-- /Services Section -->
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
        // line 89
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/professional.webp\" alt=\"Professional\">
                    </div>
                    <div class=\"text-overlay\">Professional</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/modern.webp\" alt=\"Modern\">
                    </div>
                    <div class=\"text-overlay\">Modern</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"";
        // line 103
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
        // line 126
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
        // line 135
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
        // line 144
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
        // line 161
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
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "#services\" class=\"btn btn-contact\">Contact Us Now</a>
  </div>

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
           ";
        // line 180
        $this->loadTemplate("partials/footer_en.html.twig", "en/home.html.twig", 180)->display($context);
        // line 181
        echo "</footer>

</body>

</html>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "en/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 181,  265 => 180,  256 => 174,  240 => 161,  220 => 144,  208 => 135,  196 => 126,  170 => 103,  160 => 96,  150 => 89,  119 => 61,  101 => 46,  83 => 31,  65 => 15,  56 => 13,  52 => 12,  47 => 9,  44 => 8,  39 => 4,  37 => 3,  33 => 1,);
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
      {% include 'partials/header_en.html.twig' %}

<body class=\"index-page\">

 {# Menu #}
   {% include 'partials/navigation_en.html.twig' %}

  <main class=\"main\">

      {% for module in page.collection() %}
        {{module.content|raw}}
      {% endfor %}

    <!-- Services Section -->
    <section id=\"services\" class=\"services section light-background\">

      <div class=\"container\">
        <div class=\"row gy-4\">
          <h2 class=\"inner-title\" ><b>Enhance Your Hotel Online</b></h2>
      
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"service-item item-orange position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781\"></path>
                </svg>
                <i class=\"bi bi-easel\"></i>
              </div>
              <a href=\"{{ page.find('/service-details').url }}\" class=\"stretched-link\">
                <h3>Custom Hotel Website</h3>
              </a>
              <p>Create a unique online identity with a customized website.</p>
            </div>
          </div><!-- End Service Item -->
      
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"service-item item-cyan position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426\"></path>
                </svg>
                <i class=\"bi bi-broadcast\"></i>
              </div>
              <a href=\"{{ page.find('/service-details-1').url }}\" class=\"stretched-link\">
                <h3>Online Booking Support</h3>
              </a>
              <p>Simplify your hotel’s online booking process with ease.</p>
            </div>
          </div><!-- End Service Item -->
      
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"service-item item-teal position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174\"></path>
                </svg>
                <i class=\"bi bi-activity\"></i>
              </div>
              <a href=\"{{ page.find('/service-details-2').url }}\" class=\"stretched-link\">
                <h3>Booking Optimization Solutions</h3>
              </a>
              <p>Maximize your bookings with our advanced optimization tools.</p>
            </div>
          </div><!-- End Service Item -->
        </div>
        <hr>
        <h3 style=\"font-size: 20px; font-family: 'Poppins-light', sans-serif;; display: flex; justify-content: center; margin-top: 50px; text-align: center;\">
          <i>Launch your own booking website today!</i>
        </h3>
      </div>      

    </section><!-- /Services Section -->
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

</html>", "en/home.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\en\\home.html.twig");
    }
}
