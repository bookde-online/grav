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

/* en/blog.html.twig */
class __TwigTemplate_b81e6dc55469089ab7cb8568dee3cdedd055c51f0c65905a8e2de017952eebfb extends \Twig\Template
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
        // line 6
        $this->loadTemplate("partials/header_en.html.twig", "en/blog.html.twig", 6)->display($context);
        // line 7
        echo "  
</head>

<body class=\"blog-page\">
  ";
        // line 12
        echo "   ";
        $this->loadTemplate("partials/navigation_en.html.twig", "en/blog.html.twig", 12)->display($context);
        // line 13
        echo "
  <main class=\"main\">
    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Blog</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Home</a></li>
            <li class=\"current\">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id=\"blog-posts\" class=\"blog-posts section\">
      <div class=\"container\">
        <div class=\"row gy-4\">
          <b><i style=\"font-size: 1.7rem;\">No posts yet</i></b>
          <!-- begin item -->
          <!-- <div class=\"col-lg-4\">
            <article class=\"position-relative h-100\">

              <div class=\"post-img position-relative overflow-hidden\">
                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/blog/blog-1.jpg\" class=\"img-fluid\" alt=\"\">
                <span class=\"post-date\">December 12</span>
              </div>

              <div class=\"post-content d-flex flex-column\">

                <h3 class=\"post-title\">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>

                <div class=\"meta d-flex align-items-center\">
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-person\"></i> <span class=\"ps-2\">John Doe</span>
                  </div>
                  <span class=\"px-3 text-black-50\">/</span>
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-folder2\"></i> <span class=\"ps-2\">Politics</span>
                  </div>
                </div>

                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                </p>

                <hr>

                <a href=\"blog-details.html\" class=\"readmore stretched-link\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>

              </div>

            </article>
          </div>End post list item -->

        </div>
      </div>
    </section>

    <!-- Blog Pagination Section -->
    <!-- <section id=\"blog-pagination\" class=\"blog-pagination section\">

      <div class=\"container\">
        <div class=\"d-flex justify-content-center\">
          <ul>
            <li><a href=\"#\"><i class=\"bi bi-chevron-left\"></i></a></li>
            <li><a href=\"#\">1</a></li>
            <li><a href=\"#\" class=\"active\">2</a></li>
            <li><a href=\"#\">3</a></li>
            <li><a href=\"#\">4</a></li>
            <li>...</li>
            <li><a href=\"#\">10</a></li>
            <li><a href=\"#\"><i class=\"bi bi-chevron-right\"></i></a></li>
          </ul>
        </div>
      </div>

    </section>/Blog Pagination Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-3 col-md-6 footer-about\">
          <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center\">
            <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/logo.webp\" alt=\"BookDe Logo - Hotel Website Design Services\" >
          </a>
        </div>

        <div class=\"col-lg-3 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details"], "method"), "url", []), "html", null, true);
        echo "\">Custom Hotel Website</a></li>
            <li><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-1"], "method"), "url", []), "html", null, true);
        echo "\">Online Booking Support</a></li>
            <li><a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-2"], "method"), "url", []), "html", null, true);
        echo "\">Booking Optimization Solutions</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#about\">About Us</a></li>
            <li><a href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#services\">Services</a></li>
            <li><a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "#services\">Contact</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <a href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center\">
            <span class=\"sitename\">ALLXONE</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>F1, QCoop Building, 150 Nguyen Xi, Ward 26</p>
            <p>Binh Thanh District, Ho Chi Minh City, Vietnam</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+84 523 734 193</span></p>
            <p><strong>Email:</strong> <span>info@bookde.vn</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">BookDe.vn</strong> <span>All Rights Reserved</span></p>
      <div class=\"credits\">
        Designed by <a href=\"#\">AllXone</a>
      </div>
    </div>
</footer>
          ";
        // line 150
        $this->loadTemplate("partials/footer_en.html.twig", "en/blog.html.twig", 150)->display($context);
        // line 151
        echo "  <!-- Scroll Top -->
  ";
        // line 153
        echo "
  <!-- Preloader -->
  ";
        // line 156
        echo "
  <!-- Vendor JS Files -->
  ";
        // line 166
        echo "
  <!-- Main JS File -->
  ";
        // line 170
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "en/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 170,  236 => 166,  232 => 156,  228 => 153,  225 => 151,  223 => 150,  194 => 124,  186 => 119,  182 => 118,  178 => 117,  174 => 116,  164 => 109,  160 => 108,  156 => 107,  146 => 100,  142 => 99,  78 => 38,  58 => 21,  48 => 13,  45 => 12,  39 => 7,  37 => 6,  30 => 1,);
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

<body class=\"blog-page\">
  {# Menu #}
   {% include 'partials/navigation_en.html.twig' %}

  <main class=\"main\">
    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Blog</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ page.find('/home').url }}\">Home</a></li>
            <li class=\"current\">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id=\"blog-posts\" class=\"blog-posts section\">
      <div class=\"container\">
        <div class=\"row gy-4\">
          <b><i style=\"font-size: 1.7rem;\">No posts yet</i></b>
          <!-- begin item -->
          <!-- <div class=\"col-lg-4\">
            <article class=\"position-relative h-100\">

              <div class=\"post-img position-relative overflow-hidden\">
                <img src=\"{{ theme_url }}/assets/img/blog/blog-1.jpg\" class=\"img-fluid\" alt=\"\">
                <span class=\"post-date\">December 12</span>
              </div>

              <div class=\"post-content d-flex flex-column\">

                <h3 class=\"post-title\">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>

                <div class=\"meta d-flex align-items-center\">
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-person\"></i> <span class=\"ps-2\">John Doe</span>
                  </div>
                  <span class=\"px-3 text-black-50\">/</span>
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-folder2\"></i> <span class=\"ps-2\">Politics</span>
                  </div>
                </div>

                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                </p>

                <hr>

                <a href=\"blog-details.html\" class=\"readmore stretched-link\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>

              </div>

            </article>
          </div>End post list item -->

        </div>
      </div>
    </section>

    <!-- Blog Pagination Section -->
    <!-- <section id=\"blog-pagination\" class=\"blog-pagination section\">

      <div class=\"container\">
        <div class=\"d-flex justify-content-center\">
          <ul>
            <li><a href=\"#\"><i class=\"bi bi-chevron-left\"></i></a></li>
            <li><a href=\"#\">1</a></li>
            <li><a href=\"#\" class=\"active\">2</a></li>
            <li><a href=\"#\">3</a></li>
            <li><a href=\"#\">4</a></li>
            <li>...</li>
            <li><a href=\"#\">10</a></li>
            <li><a href=\"#\"><i class=\"bi bi-chevron-right\"></i></a></li>
          </ul>
        </div>
      </div>

    </section>/Blog Pagination Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-3 col-md-6 footer-about\">
          <a href=\"{{ page.find('/home').url }}\" class=\"logo d-flex align-items-center\">
            <img src=\"{{ theme_url }}/assets/img/logo.webp\" alt=\"BookDe Logo - Hotel Website Design Services\" >
          </a>
        </div>

        <div class=\"col-lg-3 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"{{ page.find('/service-details').url }}\">Custom Hotel Website</a></li>
            <li><a href=\"{{ page.find('/service-details-1').url }}\">Online Booking Support</a></li>
            <li><a href=\"{{ page.find('/service-details-2').url }}\">Booking Optimization Solutions</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"{{ page.find('/home').url }}\">Home</a></li>
            <li><a href=\"{{ page.find('/home').url }}#about\">About Us</a></li>
            <li><a href=\"{{ page.find('/home').url }}#services\">Services</a></li>
            <li><a href=\"{{ page.find('/contact').url }}#services\">Contact</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <a href=\"{{ page.find('/home').url }}\" class=\"logo d-flex align-items-center\">
            <span class=\"sitename\">ALLXONE</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>F1, QCoop Building, 150 Nguyen Xi, Ward 26</p>
            <p>Binh Thanh District, Ho Chi Minh City, Vietnam</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+84 523 734 193</span></p>
            <p><strong>Email:</strong> <span>info@bookde.vn</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">BookDe.vn</strong> <span>All Rights Reserved</span></p>
      <div class=\"credits\">
        Designed by <a href=\"#\">AllXone</a>
      </div>
    </div>
</footer>
          {% include 'partials/footer_en.html.twig' %}
  <!-- Scroll Top -->
  {# <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a> #}

  <!-- Preloader -->
  {# <div id=\"preloader\"></div> #}

  <!-- Vendor JS Files -->
  {# <script src=\"{{ theme_url }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/aos/aos.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/waypoints/noframework.waypoints.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/swiper/swiper-bundle.min.js\"></script> #}

  <!-- Main JS File -->
  {# <script src=\"{{ theme_url }}/assets/js/main.js\"></script>
 #}
</body>

</html>", "en/blog.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\en\\blog.html.twig");
    }
}
