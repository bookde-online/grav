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

/* modular/services.html.twig */
class __TwigTemplate_5d170e3cae0d4179556b52bc07a1d9010c205ff2547d0dbca8d7d56ee4125f53 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/services.html.twig"));

        // line 1
        $context["service_page"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => "/home/_services/"], "method");
        // line 2
        $context["services"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home/_services"], "method"), "children", []);
        // line 3
        echo "
<section id=\"services\" class=\"services section light-background\">
      <div class=\"container\">
        <div class=\"row gy-4\">
          <h2 class=\"inner-title\" ><b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["service_page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</b></h2>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 9
            echo "
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"";
            // line 10
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", []) * 100), "html", null, true);
            echo "\">
            <div class=\"service-item item-orange position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781\"></path>
                </svg>
                <i class=\"bi bi-easel\"></i>
              </div>
              <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "url", []), "html", null, true);
            echo "\" class=\"stretched-link\">
                <h3>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", []), "html", null, true);
            echo "</h3>
              </a>
              <p>";
            // line 21
            echo $this->getAttribute($context["service"], "content", []);
            echo "</p>
            </div>
          </div><!-- End Service Item -->
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "          </div>
        <hr>
        <h3 style=\"font-size: 20px; font-family: 'Poppins-light', sans-serif;; display: flex; justify-content: center; margin-top: 50px; text-align: center;\">
          <p>";
        // line 28
        echo $this->getAttribute(($context["service_page"] ?? null), "content", []);
        echo "</p>
        </h3>
      </div>   

      
          ";
        // line 68
        echo "
    </section><!-- /Services Section -->";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 68,  110 => 28,  105 => 25,  87 => 21,  82 => 19,  78 => 18,  67 => 10,  64 => 9,  47 => 8,  43 => 7,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set service_page = page.find('/home/_services/') %}
{% set services = page.find('/home/_services').children %}

<section id=\"services\" class=\"services section light-background\">
      <div class=\"container\">
        <div class=\"row gy-4\">
          <h2 class=\"inner-title\" ><b>{{service_page.header.title}}</b></h2>
        {% for service in services %}

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"{{ loop.index * 100 }}\">
            <div class=\"service-item item-orange position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781\"></path>
                </svg>
                <i class=\"bi bi-easel\"></i>
              </div>
              <a href=\"{{ service.url }}\" class=\"stretched-link\">
                <h3>{{ service.title }}</h3>
              </a>
              <p>{{ service.content|raw }}</p>
            </div>
          </div><!-- End Service Item -->
          {% endfor %}
          </div>
        <hr>
        <h3 style=\"font-size: 20px; font-family: 'Poppins-light', sans-serif;; display: flex; justify-content: center; margin-top: 50px; text-align: center;\">
          <p>{{ service_page.content|raw }}</p>
        </h3>
      </div>   

      
          {# <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
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
          </div>
      
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
          </div>
        </div>
        <hr>
        <h3 style=\"font-size: 20px; font-family: 'Poppins-light', sans-serif;; display: flex; justify-content: center; margin-top: 50px; text-align: center;\">
          <i>Launch your own booking website today!</i>
        </h3>
      </div>       #}

    </section><!-- /Services Section -->", "modular/services.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\modular\\services.html.twig");
    }
}
