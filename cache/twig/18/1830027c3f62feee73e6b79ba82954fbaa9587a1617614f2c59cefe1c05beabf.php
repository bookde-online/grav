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

/* en/howItWork.html.twig */
class __TwigTemplate_19c3674c81bed485ed9cd9fd0fb8f0368ae45461ac4e838805e8deb3f688d732 extends \Twig\Template
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
<html lang=\"vi\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Thiết Kế Website Khách Sạn - Tối Ưu Đặt Phòng & Tăng Doanh Thu</title>
  <meta name=\"description\" content=\"Dịch vụ thiết kế website khách sạn chuyên nghiệp, tối ưu SEO, hỗ trợ đặt phòng & tăng tỉ lệ chuyển đổi. Giải pháp tối ưu giúp chủ khách sạn vận hành hiệu quả.\">
  <meta name=\"keywords\" content=\"thiết kế website khách sạn, làm web khách sạn, xây dựng website khách sạn, đặt phòng trực tuyến, tối ưu SEO khách sạn, giải pháp website khách sạn\">

  <!-- Favicons -->
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/favicon.webp\" rel=\"icon\">
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/apple-touch-icon.webp\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/css/main.css\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets\\css\\howitwork.css\">


  <!-- =======================================================
  * Template Name: Company
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class=\"blog-page\">

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center me-auto\">
        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/logo.webp\" alt=\"Logo BookDe - Hotel Website Design Services\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" >Home</a></li>
          <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#about\">About</a></li>
          <li class=\"dropdown\"><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#services\"><span>Services</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details"], "method"), "url", []), "html", null, true);
        echo "\">Website customization</a></li>
              <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-1"], "method"), "url", []), "html", null, true);
        echo "\">Online booking support</a></li>
              <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-2"], "method"), "url", []), "html", null, true);
        echo "\">Booking optimization solution</a></li>
            </ul>
          </li>
          <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/pricing"], "method"), "url", []), "html", null, true);
        echo "\">Price</a></li>
          <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/howitwork"], "method"), "url", []), "html", null, true);
        echo "\" class=\"active\">How it works</a></li>
          <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "url", []), "html", null, true);
        echo "\">Blog</a></li>
          <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "\">Contact</a></li>
          <div class=\"language-dropdown\">
            <button class=\"dropdown-btn\">
              <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/en.webp\" alt=\"English\"><span class=\"textEng\"><u><b>EN</b></u></span><i class=\"bi bi-chevron-down toggle-dropdown\" id=\"lang\"></i></i>
            </button>
            <div class=\"dropdown-content\">
                <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["page"] ?? null), "url", []), ["/en" => "/vi"]), "html", null, true);
        echo "\" class=\"vi\">
                  <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/vi.webp\" alt=\"Vietnamese\"><span class=\"textVi\">VI</span>
                </a>
              </div>
          </div>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <div class=\"header-social-links\">
        
        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
      </div>

    </div>
  </header>

  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">How It Works</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Home</a></li>
            <li class=\"current\">How It Works</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class=\"container my-5\">
      <h2 class=\"text-center fw-bold\">Simple Steps to Launch Your Hotel Website</h2>
    
      <div class=\"timeline\">
          <!-- Step 1 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                  <h4 style=\"color: #379777;\"><b>Develop a Custom Website</b></h4>
                  <p>Create a custom website with your own domain to attract direct bookings.</p>
                  <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/services/work1.webp\" alt=\"Hotel website development\" >
              </div>
          </div>
  
          <!-- Step 2 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                <h4 style=\"color: #379777;\"><b>Optimize Direct Bookings</b></h4>
                  <p>Optimize your website to increase direct bookings and reduce commission fees.</p>
                  <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/services/work2.webp\" alt=\"Hotel booking optimization\" >
              </div>
          </div>
  
          <!-- Step 3 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                <h4 style=\"color: #379777;\"><b>Maximize Online Visibility & Revenue</b></h4>
                  <p>Enhance visibility and maximize bookings with intelligent analytics.</p>
                  <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/services/work3.webp\" alt=\"Increase revenue using services\">
              </div>
          </div>
      </div>
  
  </div>

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-3 col-md-6 footer-about\">
          <a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\" class=\"logo d-flex align-items-center\">
            <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/img/logo.webp\" alt=\"BookDe Logo - Hotel Website Design Services\" >
          </a>
        </div>

        <div class=\"col-lg-3 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details"], "method"), "url", []), "html", null, true);
        echo "\">Custom Hotel Website</a></li>
            <li><a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-1"], "method"), "url", []), "html", null, true);
        echo "\">Online Booking Support</a></li>
            <li><a href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/service-details-2"], "method"), "url", []), "html", null, true);
        echo "\">Booking Optimization Solutions</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#about\">About Us</a></li>
            <li><a href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/home"], "method"), "url", []), "html", null, true);
        echo "#services\">Services</a></li>
            <li><a href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/contact"], "method"), "url", []), "html", null, true);
        echo "#services\">Contact</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <a href=\"";
        // line 169
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

  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>

  <!-- Vendor JS Files -->
  <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/aos/aos.js\"></script>
  <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
  <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/waypoints/noframework.waypoints.js\"></script>
  <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/vendor/swiper/swiper-bundle.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/assets/js/main.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "en/howItWork.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 213,  376 => 210,  372 => 209,  368 => 208,  364 => 207,  360 => 206,  356 => 205,  352 => 204,  348 => 203,  311 => 169,  303 => 164,  299 => 163,  295 => 162,  291 => 161,  281 => 154,  277 => 153,  273 => 152,  263 => 145,  259 => 144,  243 => 131,  231 => 122,  219 => 113,  200 => 97,  171 => 71,  167 => 70,  161 => 67,  155 => 64,  151 => 63,  147 => 62,  143 => 61,  137 => 58,  133 => 57,  129 => 56,  124 => 54,  120 => 53,  116 => 52,  108 => 47,  104 => 46,  84 => 29,  80 => 28,  74 => 25,  70 => 24,  66 => 23,  62 => 22,  58 => 21,  47 => 13,  43 => 12,  30 => 1,);
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

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Thiết Kế Website Khách Sạn - Tối Ưu Đặt Phòng & Tăng Doanh Thu</title>
  <meta name=\"description\" content=\"Dịch vụ thiết kế website khách sạn chuyên nghiệp, tối ưu SEO, hỗ trợ đặt phòng & tăng tỉ lệ chuyển đổi. Giải pháp tối ưu giúp chủ khách sạn vận hành hiệu quả.\">
  <meta name=\"keywords\" content=\"thiết kế website khách sạn, làm web khách sạn, xây dựng website khách sạn, đặt phòng trực tuyến, tối ưu SEO khách sạn, giải pháp website khách sạn\">

  <!-- Favicons -->
  <link href=\"{{ theme_url }}/assets/img/favicon.webp\" rel=\"icon\">
  <link href=\"{{ theme_url }}/assets/img/apple-touch-icon.webp\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"{{ theme_url }}/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"{{ theme_url }}/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"{{ theme_url }}/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"{{ theme_url }}/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"{{ theme_url }}/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"{{ theme_url }}/assets/css/main.css\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"{{ theme_url }}/assets\\css\\howitwork.css\">


  <!-- =======================================================
  * Template Name: Company
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class=\"blog-page\">

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"{{ page.find('/home').url }}\" class=\"logo d-flex align-items-center me-auto\">
        <img src=\"{{ theme_url }}/assets/img/logo.webp\" alt=\"Logo BookDe - Hotel Website Design Services\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"{{ page.find('/home').url }}\" >Home</a></li>
          <li><a href=\"{{ page.find('/home').url }}#about\">About</a></li>
          <li class=\"dropdown\"><a href=\"{{ page.find('/home').url }}#services\"><span>Services</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"{{ page.find('/service-details').url }}\">Website customization</a></li>
              <li><a href=\"{{ page.find('/service-details-1').url }}\">Online booking support</a></li>
              <li><a href=\"{{ page.find('/service-details-2').url }}\">Booking optimization solution</a></li>
            </ul>
          </li>
          <li><a href=\"{{ page.find('/pricing').url }}\">Price</a></li>
          <li><a href=\"{{ page.find('/howitwork').url }}\" class=\"active\">How it works</a></li>
          <li><a href=\"{{ page.find('/blog').url }}\">Blog</a></li>
          <li><a href=\"{{ page.find('/contact').url }}\">Contact</a></li>
          <div class=\"language-dropdown\">
            <button class=\"dropdown-btn\">
              <img src=\"{{ theme_url }}/assets/img/en.webp\" alt=\"English\"><span class=\"textEng\"><u><b>EN</b></u></span><i class=\"bi bi-chevron-down toggle-dropdown\" id=\"lang\"></i></i>
            </button>
            <div class=\"dropdown-content\">
                <a href=\"{{ page.url|replace({'/en': '/vi'}) }}\" class=\"vi\">
                  <img src=\"{{ theme_url }}/assets/img/vi.webp\" alt=\"Vietnamese\"><span class=\"textVi\">VI</span>
                </a>
              </div>
          </div>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <div class=\"header-social-links\">
        
        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
      </div>

    </div>
  </header>

  <main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title accent-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">How It Works</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ page.find('/home').url }}\">Home</a></li>
            <li class=\"current\">How It Works</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class=\"container my-5\">
      <h2 class=\"text-center fw-bold\">Simple Steps to Launch Your Hotel Website</h2>
    
      <div class=\"timeline\">
          <!-- Step 1 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                  <h4 style=\"color: #379777;\"><b>Develop a Custom Website</b></h4>
                  <p>Create a custom website with your own domain to attract direct bookings.</p>
                  <img src=\"{{ theme_url }}/assets/img/services/work1.webp\" alt=\"Hotel website development\" >
              </div>
          </div>
  
          <!-- Step 2 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                <h4 style=\"color: #379777;\"><b>Optimize Direct Bookings</b></h4>
                  <p>Optimize your website to increase direct bookings and reduce commission fees.</p>
                  <img src=\"{{ theme_url }}/assets/img/services/work2.webp\" alt=\"Hotel booking optimization\" >
              </div>
          </div>
  
          <!-- Step 3 -->
          <div class=\"timeline-step\">
              <div class=\"step-content\">
                <h4 style=\"color: #379777;\"><b>Maximize Online Visibility & Revenue</b></h4>
                  <p>Enhance visibility and maximize bookings with intelligent analytics.</p>
                  <img src=\"{{ theme_url }}/assets/img/services/work3.webp\" alt=\"Increase revenue using services\">
              </div>
          </div>
      </div>
  
  </div>

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

  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>

  <!-- Vendor JS Files -->
  <script src=\"{{ theme_url }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/aos/aos.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/waypoints/noframework.waypoints.js\"></script>
  <script src=\"{{ theme_url }}/assets/vendor/swiper/swiper-bundle.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"{{ theme_url }}/assets/js/main.js\"></script>

</body>

</html>", "en/howItWork.html.twig", "C:\\wamp64\\www\\grav\\user\\themes\\mytheme\\templates\\en\\howItWork.html.twig");
    }
}
