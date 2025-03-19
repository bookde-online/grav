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
<html lang=\"vi\">

<head>
  <meta charset=\"utf-8\">
<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
<title>Hotel Website Design - Optimize Booking & Increase Revenue</title>
<meta name=\"description\" content=\"Professional hotel website design services, SEO optimization, booking support & conversion rate improvement. The optimal solution for efficient hotel management.\">
<meta name=\"keywords\" content=\"hotel website design, hotel web development, hotel website building, online booking, hotel SEO optimization, hotel website solutions\">

  <!-- Favicons -->
  <link href=\"assets/img/favicon.webp\" rel=\"icon\">
  <link href=\"assets/img/apple-touch-icon.webp\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
  <!-- Vendor CSS Files -->
  <link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"assets/css/main.css\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Company
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class=\"index-page\">

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=\"assets/img/logo.webp\" alt=\"Logo BookDe - Dịch vụ thiết kế website khách sạn\">
        <!-- <h1 class=\"sitename\">Company</h1><span>.</span> -->
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"index.html\" class=\"active\">Home</a></li>
          <li><a href=\"#about\">About</a></li>
          <li class=\"dropdown\"><a href=\"#services\"><span>Services</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"service-details.html\">Website customization</a></li>
              <li><a href=\"service-details-1.html\">Online booking support</a></li>
              <li><a href=\"service-details-2.html\">Booking optimization solution</a></li>
            </ul>
          </li>
          <li><a href=\"pricing.html\">Price</a></li>
          <li><a href=\"howItWork.html\">How it works</a></li>
          <li><a href=\"blog.html\">Blog</a></li>
          <li><a href=\"contact.html\">Contact</a></li>
          <div class=\"language-dropdown\">
            <button class=\"dropdown-btn\">
              <img src=\"assets/img/en.webp\" alt=\"English\"><span class=\"textEng\"><u><b>EN</b></u></span><i class=\"bi bi-chevron-down toggle-dropdown\" id=\"lang\"></i></i>
            </button>
            <div class=\"dropdown-content\">
                <a href=\"../vi/index.html\" class=\"vi\">
                  <img src=\"assets/img/vi.webp\" alt=\"Vietnamese\"><span class=\"textVi\">VI</span>
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

    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section dark-background\">

      <div id=\"hero-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">

        <div class=\"carousel-item active\">
          <img src=\"assets/img/hero-carousel/banner1.webp\" alt=\"Build your hotel brand\" loading=\"lazy\">
          <div class=\"container\">
            <h2>Your Brand</h2>
            <p>Create a dedicated booking website for your hotel</p>
            <a href=\"services.html\" class=\"btn-get-started\">View Services</a>
          </div>
        </div><!-- End Carousel Item -->
        
        <div class=\"carousel-item\">
          <img src=\"assets/img/hero-carousel/banner2.webp\" alt=\"Custom domain for your hotel\" loading=\"lazy\">
          <div class=\"container\">
            <h2>Your Domain</h2>
            <p>Full control with a customized website – No shared system</p>
            <a href=\"services.html\" class=\"btn-get-started\">View Services</a>
          </div>
        </div><!-- End Carousel Item -->
        
        <div class=\"carousel-item\">
          <img src=\"assets/img/hero-carousel/banner3.webp\" alt=\"Direct customer connection\" loading=\"lazy\">
          <div class=\"container\">
            <h2>Your Customers</h2>
            <p>Connect directly with your customers – No commission fees</p>
            <a href=\"services.html\" class=\"btn-get-started\">View Services</a>
          </div>
        </div>
        <!-- End Carousel Item -->

        <a class=\"carousel-control-prev\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
        </a>

        <a class=\"carousel-control-next\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
        </a>

        <ol class=\"carousel-indicators\"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id=\"about\" class=\"about section\">

      <div class=\"container\">

        <div class=\"row position-relative\">
          <div class=\"circle-bg circle-1\"></div>
          <div class=\"circle-bg circle-2\"></div>

          <div class=\"row align-items-center\">
            <!-- Phần văn bản -->
            <div class=\"col-lg-7 col-md-12 about-text\">
                <h2>About Us!</h2>
                <h5 style=\"font-weight: 700;\">Boost Bookings with Your Own Hotel Website</h4>
                <p>
                    At BookDe.vn, we empower hotels in Vietnam to take full control of their online presence.
                    Our service enables you to create a customized website with your own domain, allowing you to engage directly with customers.
                </p>
                <h5 style=\"font-weight: 700;\">One platform, manage all your hotels, customers, and transactions.</h5>
                <p>
                    Control all your hotels and data with just one website. Manage your customer's data, booking, rooms, hotels,...
                    Create events, vouchers within the web.
                    <br><br>
                    Having your own hotel website not only helps customers find you easily on the internet, but also optimizes the online booking experience, making management simpler, more efficient, saving time and optimizing revenue in the best way.
                </p>
            </div>

            <!-- Phần hình ảnh -->
            <div class=\"col-lg-5 col-md-12 about-image text-center\">
                <img src=\"assets/img/about.webp\" alt=\"Hotel Booking Website\" style=\"width: 100%;\">
            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id=\"services\" class=\"services section light-background\">

      <div class=\"container\">
        <div class=\"row gy-4\">
          <h2 class=\"inner-title\"><b>Enhance Your Hotel Online</b></h2>
      
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"service-item item-orange position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781\"></path>
                </svg>
                <i class=\"bi bi-easel\"></i>
              </div>
              <a href=\"service-details.html\" class=\"stretched-link\">
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
              <a href=\"service-details.html\" class=\"stretched-link\">
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
              <a href=\"service-details.html\" class=\"stretched-link\">
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
                        <img src=\"assets/img/professional.webp\" alt=\"Save time\">
                    </div>
                    <div class=\"text-overlay\">Professional</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"assets/img/modern.webp\" alt=\"Save time\">
                    </div>
                    <div class=\"text-overlay\">Modern</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"assets/img/effective.webp\" alt=\"Save time\">
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
              <img src=\"assets/img/about/hotel.webp\" class=\"img-fluid\" alt=\"Image hotel\">
              <h4 class=\"text-overlay\">HOTELS</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"assets/img/about/spa.webp\" class=\"img-fluid\" alt=\"Image spa\" style=\"height: fit-content;\">
              <h4 class=\"text-overlay\">SPA</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"assets/img/about/tours.webp\" class=\"img-fluid\" alt=\"Image tours\">
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
              <img src=\"assets/img/services/demo.webp\" alt=\"Hotel Launch\" class=\"img-fluid w-100 rounded\">
            </div>
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-5 text-center text-md-start\">
                <h2>Ready to launch your hotel to the web?</h2>
                <a href=\"#\" class=\"demo-btn\">Try our free demo!</a>
            </div>
          </div>
      </div>
    </div>
  </section>

  <div class=\"text-center mt-4\" style=\"margin-bottom: 40px; margin-top: 5px;\" >
    <a href=\"contact.html\" class=\"btn btn-contact\">Contact Us Now</a>
  </div>

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-3 col-md-6 footer-about\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"assets/img/logo.webp\" alt=\"BookDe Logo - Hotel Website Design Services\">
          </a>
        </div>

        <div class=\"col-lg-3 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"service-details.html\">Custom Hotel Website</a></li>
            <li><a href=\"service-details-1.html\">Online Booking Support</a></li>
            <li><a href=\"service-details-2.html\">Booking Optimization Solutions</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"index.html\">Home</a></li>
            <li><a href=\"about.html\">About Us</a></li>
            <li><a href=\"services.html\">Services</a></li>
            <li><a href=\"contact.html\">Contact</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
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
  <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"assets/vendor/aos/aos.js\"></script>
  <script src=\"assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
  <script src=\"assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"assets/vendor/waypoints/noframework.waypoints.js\"></script>
  <script src=\"assets/vendor/swiper/swiper-bundle.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"assets/js/main.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
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
<title>Hotel Website Design - Optimize Booking & Increase Revenue</title>
<meta name=\"description\" content=\"Professional hotel website design services, SEO optimization, booking support & conversion rate improvement. The optimal solution for efficient hotel management.\">
<meta name=\"keywords\" content=\"hotel website design, hotel web development, hotel website building, online booking, hotel SEO optimization, hotel website solutions\">

  <!-- Favicons -->
  <link href=\"assets/img/favicon.webp\" rel=\"icon\">
  <link href=\"assets/img/apple-touch-icon.webp\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
  <!-- Vendor CSS Files -->
  <link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"assets/css/main.css\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Company
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class=\"index-page\">

  <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container position-relative d-flex align-items-center\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=\"assets/img/logo.webp\" alt=\"Logo BookDe - Dịch vụ thiết kế website khách sạn\">
        <!-- <h1 class=\"sitename\">Company</h1><span>.</span> -->
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"index.html\" class=\"active\">Home</a></li>
          <li><a href=\"#about\">About</a></li>
          <li class=\"dropdown\"><a href=\"#services\"><span>Services</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"service-details.html\">Website customization</a></li>
              <li><a href=\"service-details-1.html\">Online booking support</a></li>
              <li><a href=\"service-details-2.html\">Booking optimization solution</a></li>
            </ul>
          </li>
          <li><a href=\"pricing.html\">Price</a></li>
          <li><a href=\"howItWork.html\">How it works</a></li>
          <li><a href=\"blog.html\">Blog</a></li>
          <li><a href=\"contact.html\">Contact</a></li>
          <div class=\"language-dropdown\">
            <button class=\"dropdown-btn\">
              <img src=\"assets/img/en.webp\" alt=\"English\"><span class=\"textEng\"><u><b>EN</b></u></span><i class=\"bi bi-chevron-down toggle-dropdown\" id=\"lang\"></i></i>
            </button>
            <div class=\"dropdown-content\">
                <a href=\"../vi/index.html\" class=\"vi\">
                  <img src=\"assets/img/vi.webp\" alt=\"Vietnamese\"><span class=\"textVi\">VI</span>
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

    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section dark-background\">

      <div id=\"hero-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">

        <div class=\"carousel-item active\">
          <img src=\"assets/img/hero-carousel/banner1.webp\" alt=\"Build your hotel brand\" loading=\"lazy\">
          <div class=\"container\">
            <h2>Your Brand</h2>
            <p>Create a dedicated booking website for your hotel</p>
            <a href=\"services.html\" class=\"btn-get-started\">View Services</a>
          </div>
        </div><!-- End Carousel Item -->
        
        <div class=\"carousel-item\">
          <img src=\"assets/img/hero-carousel/banner2.webp\" alt=\"Custom domain for your hotel\" loading=\"lazy\">
          <div class=\"container\">
            <h2>Your Domain</h2>
            <p>Full control with a customized website – No shared system</p>
            <a href=\"services.html\" class=\"btn-get-started\">View Services</a>
          </div>
        </div><!-- End Carousel Item -->
        
        <div class=\"carousel-item\">
          <img src=\"assets/img/hero-carousel/banner3.webp\" alt=\"Direct customer connection\" loading=\"lazy\">
          <div class=\"container\">
            <h2>Your Customers</h2>
            <p>Connect directly with your customers – No commission fees</p>
            <a href=\"services.html\" class=\"btn-get-started\">View Services</a>
          </div>
        </div>
        <!-- End Carousel Item -->

        <a class=\"carousel-control-prev\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
        </a>

        <a class=\"carousel-control-next\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
        </a>

        <ol class=\"carousel-indicators\"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id=\"about\" class=\"about section\">

      <div class=\"container\">

        <div class=\"row position-relative\">
          <div class=\"circle-bg circle-1\"></div>
          <div class=\"circle-bg circle-2\"></div>

          <div class=\"row align-items-center\">
            <!-- Phần văn bản -->
            <div class=\"col-lg-7 col-md-12 about-text\">
                <h2>About Us!</h2>
                <h5 style=\"font-weight: 700;\">Boost Bookings with Your Own Hotel Website</h4>
                <p>
                    At BookDe.vn, we empower hotels in Vietnam to take full control of their online presence.
                    Our service enables you to create a customized website with your own domain, allowing you to engage directly with customers.
                </p>
                <h5 style=\"font-weight: 700;\">One platform, manage all your hotels, customers, and transactions.</h5>
                <p>
                    Control all your hotels and data with just one website. Manage your customer's data, booking, rooms, hotels,...
                    Create events, vouchers within the web.
                    <br><br>
                    Having your own hotel website not only helps customers find you easily on the internet, but also optimizes the online booking experience, making management simpler, more efficient, saving time and optimizing revenue in the best way.
                </p>
            </div>

            <!-- Phần hình ảnh -->
            <div class=\"col-lg-5 col-md-12 about-image text-center\">
                <img src=\"assets/img/about.webp\" alt=\"Hotel Booking Website\" style=\"width: 100%;\">
            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id=\"services\" class=\"services section light-background\">

      <div class=\"container\">
        <div class=\"row gy-4\">
          <h2 class=\"inner-title\"><b>Enhance Your Hotel Online</b></h2>
      
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"service-item item-orange position-relative\" style=\"text-align: center;\">
              <div class=\"icon\">
                <svg width=\"100\" height=\"100\" viewBox=\"0 0 600 600\" xmlns=\"http://www.w3.org/2000/svg\">
                  <path stroke=\"none\" stroke-width=\"0\" fill=\"#f5f5f5\" d=\"M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781\"></path>
                </svg>
                <i class=\"bi bi-easel\"></i>
              </div>
              <a href=\"service-details.html\" class=\"stretched-link\">
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
              <a href=\"service-details.html\" class=\"stretched-link\">
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
              <a href=\"service-details.html\" class=\"stretched-link\">
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
                        <img src=\"assets/img/professional.webp\" alt=\"Save time\">
                    </div>
                    <div class=\"text-overlay\">Professional</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"assets/img/modern.webp\" alt=\"Save time\">
                    </div>
                    <div class=\"text-overlay\">Modern</div>
                </div>
    
                <div class=\"card-container\">
                    <div class=\"card\">
                        <img src=\"assets/img/effective.webp\" alt=\"Save time\">
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
              <img src=\"assets/img/about/hotel.webp\" class=\"img-fluid\" alt=\"Image hotel\">
              <h4 class=\"text-overlay\">HOTELS</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"assets/img/about/spa.webp\" class=\"img-fluid\" alt=\"Image spa\" style=\"height: fit-content;\">
              <h4 class=\"text-overlay\">SPA</h4> 
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"team-member\">
            <div class=\"member-img position-relative\">
              <img src=\"assets/img/about/tours.webp\" class=\"img-fluid\" alt=\"Image tours\">
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
              <img src=\"assets/img/services/demo.webp\" alt=\"Hotel Launch\" class=\"img-fluid w-100 rounded\">
            </div>
            <div class=\"col-md-1\"></div>
            <div class=\"col-md-5 text-center text-md-start\">
                <h2>Ready to launch your hotel to the web?</h2>
                <a href=\"#\" class=\"demo-btn\">Try our free demo!</a>
            </div>
          </div>
      </div>
    </div>
  </section>

  <div class=\"text-center mt-4\" style=\"margin-bottom: 40px; margin-top: 5px;\" >
    <a href=\"contact.html\" class=\"btn btn-contact\">Contact Us Now</a>
  </div>

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">
    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-3 col-md-6 footer-about\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"assets/img/logo.webp\" alt=\"BookDe Logo - Hotel Website Design Services\">
          </a>
        </div>

        <div class=\"col-lg-3 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"service-details.html\">Custom Hotel Website</a></li>
            <li><a href=\"service-details-1.html\">Online Booking Support</a></li>
            <li><a href=\"service-details-2.html\">Booking Optimization Solutions</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"index.html\">Home</a></li>
            <li><a href=\"about.html\">About Us</a></li>
            <li><a href=\"services.html\">Services</a></li>
            <li><a href=\"contact.html\">Contact</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
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
  <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"assets/vendor/php-email-form/validate.js\"></script>
  <script src=\"assets/vendor/aos/aos.js\"></script>
  <script src=\"assets/vendor/glightbox/js/glightbox.min.js\"></script>
  <script src=\"assets/vendor/imagesloaded/imagesloaded.pkgd.min.js\"></script>
  <script src=\"assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
  <script src=\"assets/vendor/waypoints/noframework.waypoints.js\"></script>
  <script src=\"assets/vendor/swiper/swiper-bundle.min.js\"></script>

  <!-- Main JS File -->
  <script src=\"assets/js/main.js\"></script>

</body>

</html>", "default.html.twig", "C:\\wamp64\\www\\grav-admin\\user\\themes\\mytheme\\templates\\en\\default.html.twig");
    }
}
