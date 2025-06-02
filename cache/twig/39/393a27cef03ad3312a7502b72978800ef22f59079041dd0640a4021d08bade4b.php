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

/* @Page:C:/xampp/htdocs/bookdevn/user/pages/01.home/06._demo */
class __TwigTemplate_d7f26476af6ef8b547106c44bfa624f051b1b653e2c676184ce20bb485f0771b extends \Twig\Template
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
        echo "
<section id=\"demo\" class=\"py-5 mt-5\" style=\"background-color: #f9f9f9\">
   <div class=\"container\">
    <div class=\"row align-items-center\">
      <!-- Left Side -->
      <div class=\"col-md-6 mb-5 mb-md-0\">
        <h1 class=\"display-5 fw-bold\">
            Lên lịch cuộc họp với chúng tôi trong hôm nay !
        </h1>
        <p class=\"text-muted\">
            Chúng tôi rất mong đợi để được gặp bạn và cùng nhau trao đổi những ý tưởng tuyệt vời trong buổi hẹn sắp tới. Nếu bạn có bất kỳ câu hỏi nào trước đó, đừng ngần ngại liên hệ với chúng tôi!
        </p>

        <!-- Email Form Box -->
        <div class=\"form-box mt-4 d-flex align-items-center\">
        
           <button  class=\"btn btn-primary btn-lg cta-button open-contact-modal\">
                         Đăng ký dịch vụ
                    </button>
        </div>

        <div class=\"mt-3 text-success\">
          <i class=\"bi bi-info-circle\"></i>
          Chúng tôi sẽ trả lời bạn sớm nhất trong vòng 24 giờ 😇 
        </div>
      </div>

      <!-- Right Side -->
      <div class=\"col-md-6 text-center\">
                                                                        <img src=\"/bookdevn/user/pages/01.home/06._demo/demo.webp\" alt=\"Bạn đã sẵn sàng đưa khách sạn của mình lên web chưa?\" class=\"img-fluid rounded shadow-sm\">
                                          </div>
    </div>
  </div>
</div>
                 
 
   
<div class=\"modal fade\" id=\"contactModal\" tabindex=\"-1\" aria-labelledby=\"contactModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"contactModalLabel\">
                    Biểu mẫu yêu cầu cuộc họp
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                
<form id=\"contactForm\" method=\"POST\" action=\"https://localhost/bookdevn/custom-controller/submit_form.php\">
\t<div class=\"mb-3\">
\t\t<label for=\"name\" class=\"form-label\">Tên của bạn</label>
\t\t<input type=\"text\" placeholder=\"Nguyen Van A\" class=\"form-control\" id=\"name\" name=\"name\" required>
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"phone\" class=\"form-label\">Số điện thoại của bạn 
\t\t</label>
\t\t<input type=\"text\" placeholder=\"123xxxxxxx\" class=\"form-control\" id=\"phone\" name=\"phone\" required minlength=\"10\" inputmode=\"numeric\" pattern=\"[0-9]{10,}\">
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"email\" class=\"form-label\">Email của bạn</label>
\t\t<input type=\"email\" placeholder=\"example@email.com\" class=\"form-control\" id=\"email\" name=\"email\" required>
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"plan\" class=\"form-label\">
\t\t\tChọn dịch vụ :
\t\t</label>

\t\t<label class=\"container\">
\t\t\t<input type=\"checkbox\" name=\"services[]\" value=\"Custom hotel websites\">
\t\t\t<span class=\"checkmark\"></span>
\t\t\tTrang Web khách sạn tùy chỉnh
\t\t</label>

\t\t<label class=\"container\">
\t\t\t<input type=\"checkbox\" name=\"services[]\" value=\"Online booking support\">
\t\t\t<span class=\"checkmark\"></span>
\t\t\tHỗ trợ đặt phòng trực tuyến
\t\t</label>

\t\t<label class=\"container\">
\t\t\t<input type=\"checkbox\" name=\"services[]\" value=\"Booking optimization solutions\">
\t\t\t<span class=\"checkmark\"></span>
\t\t\tGiải pháp tối ưu hóa đặt phòng
\t\t</label>
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"timezone\" class=\"form-label\">
\t\t\tChọn ngày và giờ :
\t\t</label>
\t\t<div class=\"row g-1 \">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<select
\t\t\t\t\tid=\"timezone\" name=\"timezone\" class=\"form-select\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+00:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Abidjan\">(GMT+00:00) Africa - Abidjan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Accra\">(GMT+00:00) Africa - Accra</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bamako\">(GMT+00:00) Africa - Bamako</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Banjul\">(GMT+00:00) Africa - Banjul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bissau\">(GMT+00:00) Africa - Bissau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Conakry\">(GMT+00:00) Africa - Conakry</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Dakar\">(GMT+00:00) Africa - Dakar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Freetown\">(GMT+00:00) Africa - Freetown</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lome\">(GMT+00:00) Africa - Lome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Monrovia\">(GMT+00:00) Africa - Monrovia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Nouakchott\">(GMT+00:00) Africa - Nouakchott</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Ouagadougou\">(GMT+00:00) Africa - Ouagadougou</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Sao_Tome\">(GMT+00:00) Africa - Sao Tome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Danmarkshavn\">(GMT+00:00) America - Danmarkshavn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Scoresbysund\">(GMT+00:00) America - Scoresbysund</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Azores\">(GMT+00:00) Atlantic - Azores</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Reykjavik\">(GMT+00:00) Atlantic - Reykjavik</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/St_Helena\">(GMT+00:00) Atlantic - St Helena</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC\">(GMT+00:00) UTC</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+01:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Algiers\">(GMT+01:00) Africa - Algiers</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bangui\">(GMT+01:00) Africa - Bangui</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Brazzaville\">(GMT+01:00) Africa - Brazzaville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Casablanca\">(GMT+01:00) Africa - Casablanca</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Douala\">(GMT+01:00) Africa - Douala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/El_Aaiun\">(GMT+01:00) Africa - El Aaiun</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Kinshasa\">(GMT+01:00) Africa - Kinshasa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lagos\">(GMT+01:00) Africa - Lagos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Libreville\">(GMT+01:00) Africa - Libreville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Luanda\">(GMT+01:00) Africa - Luanda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Malabo\">(GMT+01:00) Africa - Malabo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Ndjamena\">(GMT+01:00) Africa - Ndjamena</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Niamey\">(GMT+01:00) Africa - Niamey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Porto-Novo\">(GMT+01:00) Africa - Porto-Novo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Tunis\">(GMT+01:00) Africa - Tunis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Canary\">(GMT+01:00) Atlantic - Canary</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Faroe\">(GMT+01:00) Atlantic - Faroe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Madeira\">(GMT+01:00) Atlantic - Madeira</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Dublin\">(GMT+01:00) Europe - Dublin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Guernsey\">(GMT+01:00) Europe - Guernsey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Isle_of_Man\">(GMT+01:00) Europe - Isle of Man</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Jersey\">(GMT+01:00) Europe - Jersey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Lisbon\">(GMT+01:00) Europe - Lisbon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/London\">(GMT+01:00) Europe - London</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+02:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Blantyre\">(GMT+02:00) Africa - Blantyre</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bujumbura\">(GMT+02:00) Africa - Bujumbura</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Ceuta\">(GMT+02:00) Africa - Ceuta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Gaborone\">(GMT+02:00) Africa - Gaborone</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Harare\">(GMT+02:00) Africa - Harare</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Johannesburg\">(GMT+02:00) Africa - Johannesburg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Juba\">(GMT+02:00) Africa - Juba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Khartoum\">(GMT+02:00) Africa - Khartoum</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Kigali\">(GMT+02:00) Africa - Kigali</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lubumbashi\">(GMT+02:00) Africa - Lubumbashi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lusaka\">(GMT+02:00) Africa - Lusaka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Maputo\">(GMT+02:00) Africa - Maputo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Maseru\">(GMT+02:00) Africa - Maseru</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Mbabane\">(GMT+02:00) Africa - Mbabane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Tripoli\">(GMT+02:00) Africa - Tripoli</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Windhoek\">(GMT+02:00) Africa - Windhoek</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Troll\">(GMT+02:00) Antarctica - Troll</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Arctic/Longyearbyen\">(GMT+02:00) Arctic - Longyearbyen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Amsterdam\">(GMT+02:00) Europe - Amsterdam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Andorra\">(GMT+02:00) Europe - Andorra</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Belgrade\">(GMT+02:00) Europe - Belgrade</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Berlin\">(GMT+02:00) Europe - Berlin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Bratislava\">(GMT+02:00) Europe - Bratislava</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Brussels\">(GMT+02:00) Europe - Brussels</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Budapest\">(GMT+02:00) Europe - Budapest</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Busingen\">(GMT+02:00) Europe - Busingen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Copenhagen\">(GMT+02:00) Europe - Copenhagen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Gibraltar\">(GMT+02:00) Europe - Gibraltar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Kaliningrad\">(GMT+02:00) Europe - Kaliningrad</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Ljubljana\">(GMT+02:00) Europe - Ljubljana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Luxembourg\">(GMT+02:00) Europe - Luxembourg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Madrid\">(GMT+02:00) Europe - Madrid</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Malta\">(GMT+02:00) Europe - Malta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Monaco\">(GMT+02:00) Europe - Monaco</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Oslo\">(GMT+02:00) Europe - Oslo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Paris\">(GMT+02:00) Europe - Paris</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Podgorica\">(GMT+02:00) Europe - Podgorica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Prague\">(GMT+02:00) Europe - Prague</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Rome\">(GMT+02:00) Europe - Rome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/San_Marino\">(GMT+02:00) Europe - San Marino</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Sarajevo\">(GMT+02:00) Europe - Sarajevo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Skopje\">(GMT+02:00) Europe - Skopje</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Stockholm\">(GMT+02:00) Europe - Stockholm</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Tirane\">(GMT+02:00) Europe - Tirane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vaduz\">(GMT+02:00) Europe - Vaduz</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vatican\">(GMT+02:00) Europe - Vatican</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vienna\">(GMT+02:00) Europe - Vienna</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Warsaw\">(GMT+02:00) Europe - Warsaw</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Zagreb\">(GMT+02:00) Europe - Zagreb</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Zurich\">(GMT+02:00) Europe - Zurich</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+03:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Addis_Ababa\">(GMT+03:00) Africa - Addis Ababa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Asmara\">(GMT+03:00) Africa - Asmara</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Cairo\">(GMT+03:00) Africa - Cairo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Dar_es_Salaam\">(GMT+03:00) Africa - Dar es Salaam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Djibouti\">(GMT+03:00) Africa - Djibouti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Kampala\">(GMT+03:00) Africa - Kampala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Mogadishu\">(GMT+03:00) Africa - Mogadishu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Nairobi\">(GMT+03:00) Africa - Nairobi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Syowa\">(GMT+03:00) Antarctica - Syowa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Aden\">(GMT+03:00) Asia - Aden</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Amman\">(GMT+03:00) Asia - Amman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Baghdad\">(GMT+03:00) Asia - Baghdad</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Bahrain\">(GMT+03:00) Asia - Bahrain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Beirut\">(GMT+03:00) Asia - Beirut</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Damascus\">(GMT+03:00) Asia - Damascus</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Famagusta\">(GMT+03:00) Asia - Famagusta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Gaza\">(GMT+03:00) Asia - Gaza</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Hebron\">(GMT+03:00) Asia - Hebron</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Jerusalem\">(GMT+03:00) Asia - Jerusalem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kuwait\">(GMT+03:00) Asia - Kuwait</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Nicosia\">(GMT+03:00) Asia - Nicosia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Qatar\">(GMT+03:00) Asia - Qatar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Riyadh\">(GMT+03:00) Asia - Riyadh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Athens\">(GMT+03:00) Europe - Athens</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Bucharest\">(GMT+03:00) Europe - Bucharest</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Chisinau\">(GMT+03:00) Europe - Chisinau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Helsinki\">(GMT+03:00) Europe - Helsinki</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Istanbul\">(GMT+03:00) Europe - Istanbul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Kirov\">(GMT+03:00) Europe - Kirov</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Kyiv\">(GMT+03:00) Europe - Kyiv</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Mariehamn\">(GMT+03:00) Europe - Mariehamn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Minsk\">(GMT+03:00) Europe - Minsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Moscow\">(GMT+03:00) Europe - Moscow</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Riga\">(GMT+03:00) Europe - Riga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Simferopol\">(GMT+03:00) Europe - Simferopol</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Sofia\">(GMT+03:00) Europe - Sofia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Tallinn\">(GMT+03:00) Europe - Tallinn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vilnius\">(GMT+03:00) Europe - Vilnius</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Volgograd\">(GMT+03:00) Europe - Volgograd</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Antananarivo\">(GMT+03:00) Indian - Antananarivo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Comoro\">(GMT+03:00) Indian - Comoro</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Mayotte\">(GMT+03:00) Indian - Mayotte</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+03:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tehran\">(GMT+03:30) Asia - Tehran</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+04:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Baku\">(GMT+04:00) Asia - Baku</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dubai\">(GMT+04:00) Asia - Dubai</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Muscat\">(GMT+04:00) Asia - Muscat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tbilisi\">(GMT+04:00) Asia - Tbilisi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yerevan\">(GMT+04:00) Asia - Yerevan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Astrakhan\">(GMT+04:00) Europe - Astrakhan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Samara\">(GMT+04:00) Europe - Samara</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Saratov\">(GMT+04:00) Europe - Saratov</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Ulyanovsk\">(GMT+04:00) Europe - Ulyanovsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Mahe\">(GMT+04:00) Indian - Mahe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Mauritius\">(GMT+04:00) Indian - Mauritius</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Reunion\">(GMT+04:00) Indian - Reunion</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+04:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kabul\">(GMT+04:30) Asia - Kabul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+05:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Mawson\">(GMT+05:00) Antarctica - Mawson</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Aqtau\">(GMT+05:00) Asia - Aqtau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Aqtobe\">(GMT+05:00) Asia - Aqtobe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ashgabat\">(GMT+05:00) Asia - Ashgabat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Atyrau\">(GMT+05:00) Asia - Atyrau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dushanbe\">(GMT+05:00) Asia - Dushanbe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Karachi\">(GMT+05:00) Asia - Karachi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Oral\">(GMT+05:00) Asia - Oral</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Qyzylorda\">(GMT+05:00) Asia - Qyzylorda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Samarkand\">(GMT+05:00) Asia - Samarkand</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tashkent\">(GMT+05:00) Asia - Tashkent</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yekaterinburg\">(GMT+05:00) Asia - Yekaterinburg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Kerguelen\">(GMT+05:00) Indian - Kerguelen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Maldives\">(GMT+05:00) Indian - Maldives</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+05:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Colombo\">(GMT+05:30) Asia - Colombo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kolkata\">(GMT+05:30) Asia - Kolkata</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+05:45)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kathmandu\">(GMT+05:45) Asia - Kathmandu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+06:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Vostok\">(GMT+06:00) Antarctica - Vostok</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Almaty\">(GMT+06:00) Asia - Almaty</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Bishkek\">(GMT+06:00) Asia - Bishkek</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dhaka\">(GMT+06:00) Asia - Dhaka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Omsk\">(GMT+06:00) Asia - Omsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Qostanay\">(GMT+06:00) Asia - Qostanay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Thimphu\">(GMT+06:00) Asia - Thimphu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Urumqi\">(GMT+06:00) Asia - Urumqi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Chagos\">(GMT+06:00) Indian - Chagos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+06:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yangon\">(GMT+06:30) Asia - Yangon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Cocos\">(GMT+06:30) Indian - Cocos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+07:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Davis\">(GMT+07:00) Antarctica - Davis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Bangkok\">(GMT+07:00) Asia - Bangkok</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Barnaul\">(GMT+07:00) Asia - Barnaul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ho_Chi_Minh\">(GMT+07:00) Asia - Ho Chi Minh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Hovd\">(GMT+07:00) Asia - Hovd</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Jakarta\">(GMT+07:00) Asia - Jakarta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Krasnoyarsk\">(GMT+07:00) Asia - Krasnoyarsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Novokuznetsk\">(GMT+07:00) Asia - Novokuznetsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Novosibirsk\">(GMT+07:00) Asia - Novosibirsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Phnom_Penh\">(GMT+07:00) Asia - Phnom Penh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Pontianak\">(GMT+07:00) Asia - Pontianak</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tomsk\">(GMT+07:00) Asia - Tomsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Vientiane\">(GMT+07:00) Asia - Vientiane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Christmas\">(GMT+07:00) Indian - Christmas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+08:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Brunei\">(GMT+08:00) Asia - Brunei</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Choibalsan\">(GMT+08:00) Asia - Choibalsan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Hong_Kong\">(GMT+08:00) Asia - Hong Kong</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Irkutsk\">(GMT+08:00) Asia - Irkutsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kuala_Lumpur\">(GMT+08:00) Asia - Kuala Lumpur</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kuching\">(GMT+08:00) Asia - Kuching</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Macau\">(GMT+08:00) Asia - Macau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Makassar\">(GMT+08:00) Asia - Makassar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Manila\">(GMT+08:00) Asia - Manila</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Shanghai\">(GMT+08:00) Asia - Shanghai</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Singapore\">(GMT+08:00) Asia - Singapore</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Taipei\">(GMT+08:00) Asia - Taipei</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ulaanbaatar\">(GMT+08:00) Asia - Ulaanbaatar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Perth\">(GMT+08:00) Australia - Perth</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+08:45)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Eucla\">(GMT+08:45) Australia - Eucla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+09:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Chita\">(GMT+09:00) Asia - Chita</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dili\">(GMT+09:00) Asia - Dili</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Jayapura\">(GMT+09:00) Asia - Jayapura</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Khandyga\">(GMT+09:00) Asia - Khandyga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Pyongyang\">(GMT+09:00) Asia - Pyongyang</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Seoul\">(GMT+09:00) Asia - Seoul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tokyo\">(GMT+09:00) Asia - Tokyo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yakutsk\">(GMT+09:00) Asia - Yakutsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Palau\">(GMT+09:00) Pacific - Palau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+09:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Adelaide\">(GMT+09:30) Australia - Adelaide</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Broken_Hill\">(GMT+09:30) Australia - Broken Hill</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Darwin\">(GMT+09:30) Australia - Darwin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+10:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/DumontDUrville\">(GMT+10:00) Antarctica - DumontDUrville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Macquarie\">(GMT+10:00) Antarctica - Macquarie</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ust-Nera\">(GMT+10:00) Asia - Ust-Nera</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Vladivostok\">(GMT+10:00) Asia - Vladivostok</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Brisbane\">(GMT+10:00) Australia - Brisbane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Hobart\">(GMT+10:00) Australia - Hobart</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Lindeman\">(GMT+10:00) Australia - Lindeman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Melbourne\">(GMT+10:00) Australia - Melbourne</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Sydney\">(GMT+10:00) Australia - Sydney</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Chuuk\">(GMT+10:00) Pacific - Chuuk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Guam\">(GMT+10:00) Pacific - Guam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Port_Moresby\">(GMT+10:00) Pacific - Port Moresby</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Saipan\">(GMT+10:00) Pacific - Saipan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+10:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Lord_Howe\">(GMT+10:30) Australia - Lord Howe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+11:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Casey\">(GMT+11:00) Antarctica - Casey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Magadan\">(GMT+11:00) Asia - Magadan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Sakhalin\">(GMT+11:00) Asia - Sakhalin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Srednekolymsk\">(GMT+11:00) Asia - Srednekolymsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Bougainville\">(GMT+11:00) Pacific - Bougainville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Efate\">(GMT+11:00) Pacific - Efate</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Guadalcanal\">(GMT+11:00) Pacific - Guadalcanal</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kosrae\">(GMT+11:00) Pacific - Kosrae</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Norfolk\">(GMT+11:00) Pacific - Norfolk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Noumea\">(GMT+11:00) Pacific - Noumea</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Pohnpei\">(GMT+11:00) Pacific - Pohnpei</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+12:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/McMurdo\">(GMT+12:00) Antarctica - McMurdo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Anadyr\">(GMT+12:00) Asia - Anadyr</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kamchatka\">(GMT+12:00) Asia - Kamchatka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Auckland\">(GMT+12:00) Pacific - Auckland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Fiji\">(GMT+12:00) Pacific - Fiji</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Funafuti\">(GMT+12:00) Pacific - Funafuti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kwajalein\">(GMT+12:00) Pacific - Kwajalein</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Majuro\">(GMT+12:00) Pacific - Majuro</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Nauru\">(GMT+12:00) Pacific - Nauru</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Tarawa\">(GMT+12:00) Pacific - Tarawa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Wake\">(GMT+12:00) Pacific - Wake</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Wallis\">(GMT+12:00) Pacific - Wallis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+12:45)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Chatham\">(GMT+12:45) Pacific - Chatham</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+13:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Apia\">(GMT+13:00) Pacific - Apia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Fakaofo\">(GMT+13:00) Pacific - Fakaofo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kanton\">(GMT+13:00) Pacific - Kanton</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Tongatapu\">(GMT+13:00) Pacific - Tongatapu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+14:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kiritimati\">(GMT+14:00) Pacific - Kiritimati</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-01:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Nuuk\">(GMT-01:00) America - Nuuk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Cape_Verde\">(GMT-01:00) Atlantic - Cape Verde</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-02:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Miquelon\">(GMT-02:00) America - Miquelon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Noronha\">(GMT-02:00) America - Noronha</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/South_Georgia\">(GMT-02:00) Atlantic - South Georgia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-03:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Araguaina\">(GMT-03:00) America - Araguaina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Buenos_Aires\">(GMT-03:00) America - Argentina - Buenos Aires</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Catamarca\">(GMT-03:00) America - Argentina - Catamarca</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Cordoba\">(GMT-03:00) America - Argentina - Cordoba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Jujuy\">(GMT-03:00) America - Argentina - Jujuy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/La_Rioja\">(GMT-03:00) America - Argentina - La Rioja</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Mendoza\">(GMT-03:00) America - Argentina - Mendoza</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Rio_Gallegos\">(GMT-03:00) America - Argentina - Rio Gallegos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Salta\">(GMT-03:00) America - Argentina - Salta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/San_Juan\">(GMT-03:00) America - Argentina - San Juan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/San_Luis\">(GMT-03:00) America - Argentina - San Luis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Tucuman\">(GMT-03:00) America - Argentina - Tucuman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Ushuaia\">(GMT-03:00) America - Argentina - Ushuaia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Bahia\">(GMT-03:00) America - Bahia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Belem\">(GMT-03:00) America - Belem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cayenne\">(GMT-03:00) America - Cayenne</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Fortaleza\">(GMT-03:00) America - Fortaleza</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Glace_Bay\">(GMT-03:00) America - Glace Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Goose_Bay\">(GMT-03:00) America - Goose Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Halifax\">(GMT-03:00) America - Halifax</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Maceio\">(GMT-03:00) America - Maceio</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Moncton\">(GMT-03:00) America - Moncton</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Montevideo\">(GMT-03:00) America - Montevideo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Paramaribo\">(GMT-03:00) America - Paramaribo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Punta_Arenas\">(GMT-03:00) America - Punta Arenas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Recife\">(GMT-03:00) America - Recife</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santarem\">(GMT-03:00) America - Santarem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Sao_Paulo\">(GMT-03:00) America - Sao Paulo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Thule\">(GMT-03:00) America - Thule</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Palmer\">(GMT-03:00) Antarctica - Palmer</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Rothera\">(GMT-03:00) Antarctica - Rothera</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Bermuda\">(GMT-03:00) Atlantic - Bermuda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Stanley\">(GMT-03:00) Atlantic - Stanley</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-03:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Johns\">(GMT-03:30) America - St Johns</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-04:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Anguilla\">(GMT-04:00) America - Anguilla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Antigua\">(GMT-04:00) America - Antigua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Aruba\">(GMT-04:00) America - Aruba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Asuncion\">(GMT-04:00) America - Asuncion</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Barbados\">(GMT-04:00) America - Barbados</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Blanc-Sablon\">(GMT-04:00) America - Blanc-Sablon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Boa_Vista\">(GMT-04:00) America - Boa Vista</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Campo_Grande\">(GMT-04:00) America - Campo Grande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Caracas\">(GMT-04:00) America - Caracas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cuiaba\">(GMT-04:00) America - Cuiaba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Curacao\">(GMT-04:00) America - Curacao</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Detroit\">(GMT-04:00) America - Detroit</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Dominica\">(GMT-04:00) America - Dominica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Grand_Turk\">(GMT-04:00) America - Grand Turk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Grenada\">(GMT-04:00) America - Grenada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guadeloupe\">(GMT-04:00) America - Guadeloupe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guyana\">(GMT-04:00) America - Guyana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Havana\">(GMT-04:00) America - Havana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Indianapolis\">(GMT-04:00) America - Indiana - Indianapolis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Marengo\">(GMT-04:00) America - Indiana - Marengo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Petersburg\">(GMT-04:00) America - Indiana - Petersburg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Vevay\">(GMT-04:00) America - Indiana - Vevay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Vincennes\">(GMT-04:00) America - Indiana - Vincennes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Winamac\">(GMT-04:00) America - Indiana - Winamac</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Iqaluit\">(GMT-04:00) America - Iqaluit</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Kentucky/Louisville\">(GMT-04:00) America - Kentucky - Louisville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Kentucky/Monticello\">(GMT-04:00) America - Kentucky - Monticello</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Kralendijk\">(GMT-04:00) America - Kralendijk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/La_Paz\">(GMT-04:00) America - La Paz</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Lower_Princes\">(GMT-04:00) America - Lower Princes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Manaus\">(GMT-04:00) America - Manaus</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Marigot\">(GMT-04:00) America - Marigot</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Martinique\">(GMT-04:00) America - Martinique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Montserrat\">(GMT-04:00) America - Montserrat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Nassau\">(GMT-04:00) America - Nassau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/New_York\">(GMT-04:00) America - New York</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Port-au-Prince\">(GMT-04:00) America - Port-au-Prince</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Port_of_Spain\">(GMT-04:00) America - Port of Spain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Porto_Velho\">(GMT-04:00) America - Porto Velho</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Puerto_Rico\">(GMT-04:00) America - Puerto Rico</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santiago\">(GMT-04:00) America - Santiago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santo_Domingo\">(GMT-04:00) America - Santo Domingo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Barthelemy\">(GMT-04:00) America - St Barthelemy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Kitts\">(GMT-04:00) America - St Kitts</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Lucia\">(GMT-04:00) America - St Lucia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Thomas\">(GMT-04:00) America - St Thomas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Vincent\">(GMT-04:00) America - St Vincent</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Toronto\">(GMT-04:00) America - Toronto</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Tortola\">(GMT-04:00) America - Tortola</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-05:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Atikokan\">(GMT-05:00) America - Atikokan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Bogota\">(GMT-05:00) America - Bogota</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cancun\">(GMT-05:00) America - Cancun</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cayman\">(GMT-05:00) America - Cayman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Chicago\">(GMT-05:00) America - Chicago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Eirunepe\">(GMT-05:00) America - Eirunepe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guayaquil\">(GMT-05:00) America - Guayaquil</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Knox\">(GMT-05:00) America - Indiana - Knox</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Tell_City\">(GMT-05:00) America - Indiana - Tell City</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Jamaica\">(GMT-05:00) America - Jamaica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Lima\">(GMT-05:00) America - Lima</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Matamoros\">(GMT-05:00) America - Matamoros</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Menominee\">(GMT-05:00) America - Menominee</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/North_Dakota/Beulah\">(GMT-05:00) America - North Dakota - Beulah</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/North_Dakota/Center\">(GMT-05:00) America - North Dakota - Center</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/North_Dakota/New_Salem\">(GMT-05:00) America - North Dakota - New Salem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Ojinaga\">(GMT-05:00) America - Ojinaga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Panama\">(GMT-05:00) America - Panama</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Rankin_Inlet\">(GMT-05:00) America - Rankin Inlet</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Resolute\">(GMT-05:00) America - Resolute</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Rio_Branco\">(GMT-05:00) America - Rio Branco</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Winnipeg\">(GMT-05:00) America - Winnipeg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-06:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Bahia_Banderas\">(GMT-06:00) America - Bahia Banderas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Belize\">(GMT-06:00) America - Belize</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Boise\">(GMT-06:00) America - Boise</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cambridge_Bay\">(GMT-06:00) America - Cambridge Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Chihuahua\">(GMT-06:00) America - Chihuahua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Ciudad_Juarez\">(GMT-06:00) America - Ciudad Juarez</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Costa_Rica\">(GMT-06:00) America - Costa Rica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Denver\">(GMT-06:00) America - Denver</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Edmonton\">(GMT-06:00) America - Edmonton</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/El_Salvador\">(GMT-06:00) America - El Salvador</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guatemala\">(GMT-06:00) America - Guatemala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Inuvik\">(GMT-06:00) America - Inuvik</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Managua\">(GMT-06:00) America - Managua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Merida\">(GMT-06:00) America - Merida</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Mexico_City\">(GMT-06:00) America - Mexico City</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Monterrey\">(GMT-06:00) America - Monterrey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Regina\">(GMT-06:00) America - Regina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Swift_Current\">(GMT-06:00) America - Swift Current</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Tegucigalpa\">(GMT-06:00) America - Tegucigalpa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Easter\">(GMT-06:00) Pacific - Easter</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Galapagos\">(GMT-06:00) Pacific - Galapagos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-07:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Creston\">(GMT-07:00) America - Creston</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Dawson\">(GMT-07:00) America - Dawson</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Dawson_Creek\">(GMT-07:00) America - Dawson Creek</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Fort_Nelson\">(GMT-07:00) America - Fort Nelson</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Hermosillo\">(GMT-07:00) America - Hermosillo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Los_Angeles\">(GMT-07:00) America - Los Angeles</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Mazatlan\">(GMT-07:00) America - Mazatlan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Phoenix\">(GMT-07:00) America - Phoenix</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Tijuana\">(GMT-07:00) America - Tijuana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Vancouver\">(GMT-07:00) America - Vancouver</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Whitehorse\">(GMT-07:00) America - Whitehorse</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-08:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Anchorage\">(GMT-08:00) America - Anchorage</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Juneau\">(GMT-08:00) America - Juneau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Metlakatla\">(GMT-08:00) America - Metlakatla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Nome\">(GMT-08:00) America - Nome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Sitka\">(GMT-08:00) America - Sitka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Yakutat\">(GMT-08:00) America - Yakutat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Pitcairn\">(GMT-08:00) Pacific - Pitcairn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-09:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Adak\">(GMT-09:00) America - Adak</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Gambier\">(GMT-09:00) Pacific - Gambier</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-10:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Honolulu\">(GMT-10:00) Pacific - Honolulu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Rarotonga\">(GMT-10:00) Pacific - Rarotonga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Tahiti\">(GMT-10:00) Pacific - Tahiti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-10:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Marquesas\">(GMT-10:30) Pacific - Marquesas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-11:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Midway\">(GMT-11:00) Pacific - Midway</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Niue\">(GMT-11:00) Pacific - Niue</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Pago_Pago\">(GMT-11:00) Pacific - Pago Pago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t</div>

\t\t\t<div class=\"col-md-6\">
\t\t\t\t<input type=\"datetime-local\" id=\"datetime\" name=\"datetime\" class=\"form-control\" min=\"2025-06-03T10:30\" required/>

\t\t\t</div>
\t\t</div>
\t</div>


\t<div class=\"mb-3\">
\t\t<label for=\"message\" class=\"form-label\">Tin nhắn</label>
\t\t<textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"5\" required></textarea>
\t</div>
\t<button type=\"submit\" class=\"btn btn-primary\">
\t\tGửi tin nhắn
\t</button>
</form>

 <script>
  document.addEventListener('DOMContentLoaded', function () {
    const tzSelect = document.getElementById('timezone');
    if (!tzSelect) return;

    let userTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;

    const aliases = {
      'Asia/Saigon': 'Asia/Ho_Chi_Minh',
      'Asia/Phnom_Penh': 'Asia/Bangkok',
      'Asia/Vientiane': 'Asia/Bangkok',
      'Etc/GMT+7': 'Asia/Ho_Chi_Minh'
    };

    if (aliases[userTimeZone]) {
      userTimeZone = aliases[userTimeZone];
    }

    for (let i = 0; i < tzSelect.options.length; i++) {
      if (tzSelect.options[i].value === userTimeZone) {
        tzSelect.selectedIndex = i;
        break;
      }
    }

    console.log('Selected Timezone:', userTimeZone);
  });
</script>

            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactButtons = document.querySelectorAll('.open-contact-modal');
    const contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
 

    contactButtons.forEach(button => {
        button.addEventListener('click', function() {
            contactModal.show();
        });
    });

});
</script>

<script>

window.addEventListener('DOMContentLoaded', () => {
    const tzSelect = document.getElementById('timezone');
    const browserTz = Intl.DateTimeFormat().resolvedOptions().timeZone;

    if (browserTz && tzSelect) {
        const option = Array.from(tzSelect.options).find(opt => opt.value === browserTz);
        if (option) option.selected = true;
    }
});
</script>

</section>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/bookdevn/user/pages/01.home/06._demo";
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
        return new Source("
<section id=\"demo\" class=\"py-5 mt-5\" style=\"background-color: #f9f9f9\">
   <div class=\"container\">
    <div class=\"row align-items-center\">
      <!-- Left Side -->
      <div class=\"col-md-6 mb-5 mb-md-0\">
        <h1 class=\"display-5 fw-bold\">
            Lên lịch cuộc họp với chúng tôi trong hôm nay !
        </h1>
        <p class=\"text-muted\">
            Chúng tôi rất mong đợi để được gặp bạn và cùng nhau trao đổi những ý tưởng tuyệt vời trong buổi hẹn sắp tới. Nếu bạn có bất kỳ câu hỏi nào trước đó, đừng ngần ngại liên hệ với chúng tôi!
        </p>

        <!-- Email Form Box -->
        <div class=\"form-box mt-4 d-flex align-items-center\">
        
           <button  class=\"btn btn-primary btn-lg cta-button open-contact-modal\">
                         Đăng ký dịch vụ
                    </button>
        </div>

        <div class=\"mt-3 text-success\">
          <i class=\"bi bi-info-circle\"></i>
          Chúng tôi sẽ trả lời bạn sớm nhất trong vòng 24 giờ 😇 
        </div>
      </div>

      <!-- Right Side -->
      <div class=\"col-md-6 text-center\">
                                                                        <img src=\"/bookdevn/user/pages/01.home/06._demo/demo.webp\" alt=\"Bạn đã sẵn sàng đưa khách sạn của mình lên web chưa?\" class=\"img-fluid rounded shadow-sm\">
                                          </div>
    </div>
  </div>
</div>
                 
 
   
<div class=\"modal fade\" id=\"contactModal\" tabindex=\"-1\" aria-labelledby=\"contactModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"contactModalLabel\">
                    Biểu mẫu yêu cầu cuộc họp
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                
<form id=\"contactForm\" method=\"POST\" action=\"https://localhost/bookdevn/custom-controller/submit_form.php\">
\t<div class=\"mb-3\">
\t\t<label for=\"name\" class=\"form-label\">Tên của bạn</label>
\t\t<input type=\"text\" placeholder=\"Nguyen Van A\" class=\"form-control\" id=\"name\" name=\"name\" required>
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"phone\" class=\"form-label\">Số điện thoại của bạn 
\t\t</label>
\t\t<input type=\"text\" placeholder=\"123xxxxxxx\" class=\"form-control\" id=\"phone\" name=\"phone\" required minlength=\"10\" inputmode=\"numeric\" pattern=\"[0-9]{10,}\">
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"email\" class=\"form-label\">Email của bạn</label>
\t\t<input type=\"email\" placeholder=\"example@email.com\" class=\"form-control\" id=\"email\" name=\"email\" required>
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"plan\" class=\"form-label\">
\t\t\tChọn dịch vụ :
\t\t</label>

\t\t<label class=\"container\">
\t\t\t<input type=\"checkbox\" name=\"services[]\" value=\"Custom hotel websites\">
\t\t\t<span class=\"checkmark\"></span>
\t\t\tTrang Web khách sạn tùy chỉnh
\t\t</label>

\t\t<label class=\"container\">
\t\t\t<input type=\"checkbox\" name=\"services[]\" value=\"Online booking support\">
\t\t\t<span class=\"checkmark\"></span>
\t\t\tHỗ trợ đặt phòng trực tuyến
\t\t</label>

\t\t<label class=\"container\">
\t\t\t<input type=\"checkbox\" name=\"services[]\" value=\"Booking optimization solutions\">
\t\t\t<span class=\"checkmark\"></span>
\t\t\tGiải pháp tối ưu hóa đặt phòng
\t\t</label>
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"timezone\" class=\"form-label\">
\t\t\tChọn ngày và giờ :
\t\t</label>
\t\t<div class=\"row g-1 \">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<select
\t\t\t\t\tid=\"timezone\" name=\"timezone\" class=\"form-select\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+00:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Abidjan\">(GMT+00:00) Africa - Abidjan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Accra\">(GMT+00:00) Africa - Accra</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bamako\">(GMT+00:00) Africa - Bamako</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Banjul\">(GMT+00:00) Africa - Banjul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bissau\">(GMT+00:00) Africa - Bissau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Conakry\">(GMT+00:00) Africa - Conakry</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Dakar\">(GMT+00:00) Africa - Dakar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Freetown\">(GMT+00:00) Africa - Freetown</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lome\">(GMT+00:00) Africa - Lome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Monrovia\">(GMT+00:00) Africa - Monrovia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Nouakchott\">(GMT+00:00) Africa - Nouakchott</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Ouagadougou\">(GMT+00:00) Africa - Ouagadougou</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Sao_Tome\">(GMT+00:00) Africa - Sao Tome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Danmarkshavn\">(GMT+00:00) America - Danmarkshavn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Scoresbysund\">(GMT+00:00) America - Scoresbysund</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Azores\">(GMT+00:00) Atlantic - Azores</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Reykjavik\">(GMT+00:00) Atlantic - Reykjavik</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/St_Helena\">(GMT+00:00) Atlantic - St Helena</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"UTC\">(GMT+00:00) UTC</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+01:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Algiers\">(GMT+01:00) Africa - Algiers</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bangui\">(GMT+01:00) Africa - Bangui</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Brazzaville\">(GMT+01:00) Africa - Brazzaville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Casablanca\">(GMT+01:00) Africa - Casablanca</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Douala\">(GMT+01:00) Africa - Douala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/El_Aaiun\">(GMT+01:00) Africa - El Aaiun</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Kinshasa\">(GMT+01:00) Africa - Kinshasa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lagos\">(GMT+01:00) Africa - Lagos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Libreville\">(GMT+01:00) Africa - Libreville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Luanda\">(GMT+01:00) Africa - Luanda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Malabo\">(GMT+01:00) Africa - Malabo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Ndjamena\">(GMT+01:00) Africa - Ndjamena</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Niamey\">(GMT+01:00) Africa - Niamey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Porto-Novo\">(GMT+01:00) Africa - Porto-Novo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Tunis\">(GMT+01:00) Africa - Tunis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Canary\">(GMT+01:00) Atlantic - Canary</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Faroe\">(GMT+01:00) Atlantic - Faroe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Madeira\">(GMT+01:00) Atlantic - Madeira</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Dublin\">(GMT+01:00) Europe - Dublin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Guernsey\">(GMT+01:00) Europe - Guernsey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Isle_of_Man\">(GMT+01:00) Europe - Isle of Man</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Jersey\">(GMT+01:00) Europe - Jersey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Lisbon\">(GMT+01:00) Europe - Lisbon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/London\">(GMT+01:00) Europe - London</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+02:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Blantyre\">(GMT+02:00) Africa - Blantyre</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Bujumbura\">(GMT+02:00) Africa - Bujumbura</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Ceuta\">(GMT+02:00) Africa - Ceuta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Gaborone\">(GMT+02:00) Africa - Gaborone</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Harare\">(GMT+02:00) Africa - Harare</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Johannesburg\">(GMT+02:00) Africa - Johannesburg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Juba\">(GMT+02:00) Africa - Juba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Khartoum\">(GMT+02:00) Africa - Khartoum</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Kigali\">(GMT+02:00) Africa - Kigali</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lubumbashi\">(GMT+02:00) Africa - Lubumbashi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Lusaka\">(GMT+02:00) Africa - Lusaka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Maputo\">(GMT+02:00) Africa - Maputo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Maseru\">(GMT+02:00) Africa - Maseru</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Mbabane\">(GMT+02:00) Africa - Mbabane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Tripoli\">(GMT+02:00) Africa - Tripoli</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Windhoek\">(GMT+02:00) Africa - Windhoek</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Troll\">(GMT+02:00) Antarctica - Troll</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Arctic/Longyearbyen\">(GMT+02:00) Arctic - Longyearbyen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Amsterdam\">(GMT+02:00) Europe - Amsterdam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Andorra\">(GMT+02:00) Europe - Andorra</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Belgrade\">(GMT+02:00) Europe - Belgrade</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Berlin\">(GMT+02:00) Europe - Berlin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Bratislava\">(GMT+02:00) Europe - Bratislava</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Brussels\">(GMT+02:00) Europe - Brussels</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Budapest\">(GMT+02:00) Europe - Budapest</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Busingen\">(GMT+02:00) Europe - Busingen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Copenhagen\">(GMT+02:00) Europe - Copenhagen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Gibraltar\">(GMT+02:00) Europe - Gibraltar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Kaliningrad\">(GMT+02:00) Europe - Kaliningrad</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Ljubljana\">(GMT+02:00) Europe - Ljubljana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Luxembourg\">(GMT+02:00) Europe - Luxembourg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Madrid\">(GMT+02:00) Europe - Madrid</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Malta\">(GMT+02:00) Europe - Malta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Monaco\">(GMT+02:00) Europe - Monaco</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Oslo\">(GMT+02:00) Europe - Oslo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Paris\">(GMT+02:00) Europe - Paris</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Podgorica\">(GMT+02:00) Europe - Podgorica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Prague\">(GMT+02:00) Europe - Prague</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Rome\">(GMT+02:00) Europe - Rome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/San_Marino\">(GMT+02:00) Europe - San Marino</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Sarajevo\">(GMT+02:00) Europe - Sarajevo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Skopje\">(GMT+02:00) Europe - Skopje</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Stockholm\">(GMT+02:00) Europe - Stockholm</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Tirane\">(GMT+02:00) Europe - Tirane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vaduz\">(GMT+02:00) Europe - Vaduz</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vatican\">(GMT+02:00) Europe - Vatican</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vienna\">(GMT+02:00) Europe - Vienna</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Warsaw\">(GMT+02:00) Europe - Warsaw</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Zagreb\">(GMT+02:00) Europe - Zagreb</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Zurich\">(GMT+02:00) Europe - Zurich</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+03:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Addis_Ababa\">(GMT+03:00) Africa - Addis Ababa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Asmara\">(GMT+03:00) Africa - Asmara</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Cairo\">(GMT+03:00) Africa - Cairo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Dar_es_Salaam\">(GMT+03:00) Africa - Dar es Salaam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Djibouti\">(GMT+03:00) Africa - Djibouti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Kampala\">(GMT+03:00) Africa - Kampala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Mogadishu\">(GMT+03:00) Africa - Mogadishu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Africa/Nairobi\">(GMT+03:00) Africa - Nairobi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Syowa\">(GMT+03:00) Antarctica - Syowa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Aden\">(GMT+03:00) Asia - Aden</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Amman\">(GMT+03:00) Asia - Amman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Baghdad\">(GMT+03:00) Asia - Baghdad</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Bahrain\">(GMT+03:00) Asia - Bahrain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Beirut\">(GMT+03:00) Asia - Beirut</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Damascus\">(GMT+03:00) Asia - Damascus</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Famagusta\">(GMT+03:00) Asia - Famagusta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Gaza\">(GMT+03:00) Asia - Gaza</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Hebron\">(GMT+03:00) Asia - Hebron</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Jerusalem\">(GMT+03:00) Asia - Jerusalem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kuwait\">(GMT+03:00) Asia - Kuwait</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Nicosia\">(GMT+03:00) Asia - Nicosia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Qatar\">(GMT+03:00) Asia - Qatar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Riyadh\">(GMT+03:00) Asia - Riyadh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Athens\">(GMT+03:00) Europe - Athens</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Bucharest\">(GMT+03:00) Europe - Bucharest</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Chisinau\">(GMT+03:00) Europe - Chisinau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Helsinki\">(GMT+03:00) Europe - Helsinki</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Istanbul\">(GMT+03:00) Europe - Istanbul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Kirov\">(GMT+03:00) Europe - Kirov</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Kyiv\">(GMT+03:00) Europe - Kyiv</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Mariehamn\">(GMT+03:00) Europe - Mariehamn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Minsk\">(GMT+03:00) Europe - Minsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Moscow\">(GMT+03:00) Europe - Moscow</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Riga\">(GMT+03:00) Europe - Riga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Simferopol\">(GMT+03:00) Europe - Simferopol</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Sofia\">(GMT+03:00) Europe - Sofia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Tallinn\">(GMT+03:00) Europe - Tallinn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Vilnius\">(GMT+03:00) Europe - Vilnius</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Volgograd\">(GMT+03:00) Europe - Volgograd</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Antananarivo\">(GMT+03:00) Indian - Antananarivo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Comoro\">(GMT+03:00) Indian - Comoro</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Mayotte\">(GMT+03:00) Indian - Mayotte</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+03:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tehran\">(GMT+03:30) Asia - Tehran</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+04:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Baku\">(GMT+04:00) Asia - Baku</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dubai\">(GMT+04:00) Asia - Dubai</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Muscat\">(GMT+04:00) Asia - Muscat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tbilisi\">(GMT+04:00) Asia - Tbilisi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yerevan\">(GMT+04:00) Asia - Yerevan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Astrakhan\">(GMT+04:00) Europe - Astrakhan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Samara\">(GMT+04:00) Europe - Samara</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Saratov\">(GMT+04:00) Europe - Saratov</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Europe/Ulyanovsk\">(GMT+04:00) Europe - Ulyanovsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Mahe\">(GMT+04:00) Indian - Mahe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Mauritius\">(GMT+04:00) Indian - Mauritius</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Reunion\">(GMT+04:00) Indian - Reunion</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+04:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kabul\">(GMT+04:30) Asia - Kabul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+05:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Mawson\">(GMT+05:00) Antarctica - Mawson</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Aqtau\">(GMT+05:00) Asia - Aqtau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Aqtobe\">(GMT+05:00) Asia - Aqtobe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ashgabat\">(GMT+05:00) Asia - Ashgabat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Atyrau\">(GMT+05:00) Asia - Atyrau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dushanbe\">(GMT+05:00) Asia - Dushanbe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Karachi\">(GMT+05:00) Asia - Karachi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Oral\">(GMT+05:00) Asia - Oral</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Qyzylorda\">(GMT+05:00) Asia - Qyzylorda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Samarkand\">(GMT+05:00) Asia - Samarkand</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tashkent\">(GMT+05:00) Asia - Tashkent</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yekaterinburg\">(GMT+05:00) Asia - Yekaterinburg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Kerguelen\">(GMT+05:00) Indian - Kerguelen</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Maldives\">(GMT+05:00) Indian - Maldives</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+05:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Colombo\">(GMT+05:30) Asia - Colombo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kolkata\">(GMT+05:30) Asia - Kolkata</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+05:45)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kathmandu\">(GMT+05:45) Asia - Kathmandu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+06:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Vostok\">(GMT+06:00) Antarctica - Vostok</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Almaty\">(GMT+06:00) Asia - Almaty</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Bishkek\">(GMT+06:00) Asia - Bishkek</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dhaka\">(GMT+06:00) Asia - Dhaka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Omsk\">(GMT+06:00) Asia - Omsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Qostanay\">(GMT+06:00) Asia - Qostanay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Thimphu\">(GMT+06:00) Asia - Thimphu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Urumqi\">(GMT+06:00) Asia - Urumqi</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Chagos\">(GMT+06:00) Indian - Chagos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+06:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yangon\">(GMT+06:30) Asia - Yangon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Cocos\">(GMT+06:30) Indian - Cocos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+07:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Davis\">(GMT+07:00) Antarctica - Davis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Bangkok\">(GMT+07:00) Asia - Bangkok</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Barnaul\">(GMT+07:00) Asia - Barnaul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ho_Chi_Minh\">(GMT+07:00) Asia - Ho Chi Minh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Hovd\">(GMT+07:00) Asia - Hovd</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Jakarta\">(GMT+07:00) Asia - Jakarta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Krasnoyarsk\">(GMT+07:00) Asia - Krasnoyarsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Novokuznetsk\">(GMT+07:00) Asia - Novokuznetsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Novosibirsk\">(GMT+07:00) Asia - Novosibirsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Phnom_Penh\">(GMT+07:00) Asia - Phnom Penh</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Pontianak\">(GMT+07:00) Asia - Pontianak</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tomsk\">(GMT+07:00) Asia - Tomsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Vientiane\">(GMT+07:00) Asia - Vientiane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Indian/Christmas\">(GMT+07:00) Indian - Christmas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+08:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Brunei\">(GMT+08:00) Asia - Brunei</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Choibalsan\">(GMT+08:00) Asia - Choibalsan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Hong_Kong\">(GMT+08:00) Asia - Hong Kong</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Irkutsk\">(GMT+08:00) Asia - Irkutsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kuala_Lumpur\">(GMT+08:00) Asia - Kuala Lumpur</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kuching\">(GMT+08:00) Asia - Kuching</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Macau\">(GMT+08:00) Asia - Macau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Makassar\">(GMT+08:00) Asia - Makassar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Manila\">(GMT+08:00) Asia - Manila</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Shanghai\">(GMT+08:00) Asia - Shanghai</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Singapore\">(GMT+08:00) Asia - Singapore</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Taipei\">(GMT+08:00) Asia - Taipei</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ulaanbaatar\">(GMT+08:00) Asia - Ulaanbaatar</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Perth\">(GMT+08:00) Australia - Perth</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+08:45)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Eucla\">(GMT+08:45) Australia - Eucla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+09:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Chita\">(GMT+09:00) Asia - Chita</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Dili\">(GMT+09:00) Asia - Dili</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Jayapura\">(GMT+09:00) Asia - Jayapura</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Khandyga\">(GMT+09:00) Asia - Khandyga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Pyongyang\">(GMT+09:00) Asia - Pyongyang</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Seoul\">(GMT+09:00) Asia - Seoul</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Tokyo\">(GMT+09:00) Asia - Tokyo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Yakutsk\">(GMT+09:00) Asia - Yakutsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Palau\">(GMT+09:00) Pacific - Palau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+09:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Adelaide\">(GMT+09:30) Australia - Adelaide</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Broken_Hill\">(GMT+09:30) Australia - Broken Hill</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Darwin\">(GMT+09:30) Australia - Darwin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+10:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/DumontDUrville\">(GMT+10:00) Antarctica - DumontDUrville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Macquarie\">(GMT+10:00) Antarctica - Macquarie</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Ust-Nera\">(GMT+10:00) Asia - Ust-Nera</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Vladivostok\">(GMT+10:00) Asia - Vladivostok</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Brisbane\">(GMT+10:00) Australia - Brisbane</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Hobart\">(GMT+10:00) Australia - Hobart</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Lindeman\">(GMT+10:00) Australia - Lindeman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Melbourne\">(GMT+10:00) Australia - Melbourne</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Sydney\">(GMT+10:00) Australia - Sydney</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Chuuk\">(GMT+10:00) Pacific - Chuuk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Guam\">(GMT+10:00) Pacific - Guam</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Port_Moresby\">(GMT+10:00) Pacific - Port Moresby</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Saipan\">(GMT+10:00) Pacific - Saipan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+10:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Australia/Lord_Howe\">(GMT+10:30) Australia - Lord Howe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+11:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Casey\">(GMT+11:00) Antarctica - Casey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Magadan\">(GMT+11:00) Asia - Magadan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Sakhalin\">(GMT+11:00) Asia - Sakhalin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Srednekolymsk\">(GMT+11:00) Asia - Srednekolymsk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Bougainville\">(GMT+11:00) Pacific - Bougainville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Efate\">(GMT+11:00) Pacific - Efate</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Guadalcanal\">(GMT+11:00) Pacific - Guadalcanal</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kosrae\">(GMT+11:00) Pacific - Kosrae</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Norfolk\">(GMT+11:00) Pacific - Norfolk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Noumea\">(GMT+11:00) Pacific - Noumea</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Pohnpei\">(GMT+11:00) Pacific - Pohnpei</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+12:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/McMurdo\">(GMT+12:00) Antarctica - McMurdo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Anadyr\">(GMT+12:00) Asia - Anadyr</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Asia/Kamchatka\">(GMT+12:00) Asia - Kamchatka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Auckland\">(GMT+12:00) Pacific - Auckland</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Fiji\">(GMT+12:00) Pacific - Fiji</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Funafuti\">(GMT+12:00) Pacific - Funafuti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kwajalein\">(GMT+12:00) Pacific - Kwajalein</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Majuro\">(GMT+12:00) Pacific - Majuro</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Nauru\">(GMT+12:00) Pacific - Nauru</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Tarawa\">(GMT+12:00) Pacific - Tarawa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Wake\">(GMT+12:00) Pacific - Wake</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Wallis\">(GMT+12:00) Pacific - Wallis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+12:45)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Chatham\">(GMT+12:45) Pacific - Chatham</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+13:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Apia\">(GMT+13:00) Pacific - Apia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Fakaofo\">(GMT+13:00) Pacific - Fakaofo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kanton\">(GMT+13:00) Pacific - Kanton</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Tongatapu\">(GMT+13:00) Pacific - Tongatapu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT+14:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Kiritimati\">(GMT+14:00) Pacific - Kiritimati</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-01:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Nuuk\">(GMT-01:00) America - Nuuk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Cape_Verde\">(GMT-01:00) Atlantic - Cape Verde</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-02:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Miquelon\">(GMT-02:00) America - Miquelon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Noronha\">(GMT-02:00) America - Noronha</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/South_Georgia\">(GMT-02:00) Atlantic - South Georgia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-03:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Araguaina\">(GMT-03:00) America - Araguaina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Buenos_Aires\">(GMT-03:00) America - Argentina - Buenos Aires</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Catamarca\">(GMT-03:00) America - Argentina - Catamarca</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Cordoba\">(GMT-03:00) America - Argentina - Cordoba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Jujuy\">(GMT-03:00) America - Argentina - Jujuy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/La_Rioja\">(GMT-03:00) America - Argentina - La Rioja</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Mendoza\">(GMT-03:00) America - Argentina - Mendoza</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Rio_Gallegos\">(GMT-03:00) America - Argentina - Rio Gallegos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Salta\">(GMT-03:00) America - Argentina - Salta</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/San_Juan\">(GMT-03:00) America - Argentina - San Juan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/San_Luis\">(GMT-03:00) America - Argentina - San Luis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Tucuman\">(GMT-03:00) America - Argentina - Tucuman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Argentina/Ushuaia\">(GMT-03:00) America - Argentina - Ushuaia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Bahia\">(GMT-03:00) America - Bahia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Belem\">(GMT-03:00) America - Belem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cayenne\">(GMT-03:00) America - Cayenne</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Fortaleza\">(GMT-03:00) America - Fortaleza</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Glace_Bay\">(GMT-03:00) America - Glace Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Goose_Bay\">(GMT-03:00) America - Goose Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Halifax\">(GMT-03:00) America - Halifax</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Maceio\">(GMT-03:00) America - Maceio</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Moncton\">(GMT-03:00) America - Moncton</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Montevideo\">(GMT-03:00) America - Montevideo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Paramaribo\">(GMT-03:00) America - Paramaribo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Punta_Arenas\">(GMT-03:00) America - Punta Arenas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Recife\">(GMT-03:00) America - Recife</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santarem\">(GMT-03:00) America - Santarem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Sao_Paulo\">(GMT-03:00) America - Sao Paulo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Thule\">(GMT-03:00) America - Thule</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Palmer\">(GMT-03:00) Antarctica - Palmer</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Antarctica/Rothera\">(GMT-03:00) Antarctica - Rothera</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Bermuda\">(GMT-03:00) Atlantic - Bermuda</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Atlantic/Stanley\">(GMT-03:00) Atlantic - Stanley</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-03:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Johns\">(GMT-03:30) America - St Johns</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-04:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Anguilla\">(GMT-04:00) America - Anguilla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Antigua\">(GMT-04:00) America - Antigua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Aruba\">(GMT-04:00) America - Aruba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Asuncion\">(GMT-04:00) America - Asuncion</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Barbados\">(GMT-04:00) America - Barbados</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Blanc-Sablon\">(GMT-04:00) America - Blanc-Sablon</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Boa_Vista\">(GMT-04:00) America - Boa Vista</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Campo_Grande\">(GMT-04:00) America - Campo Grande</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Caracas\">(GMT-04:00) America - Caracas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cuiaba\">(GMT-04:00) America - Cuiaba</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Curacao\">(GMT-04:00) America - Curacao</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Detroit\">(GMT-04:00) America - Detroit</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Dominica\">(GMT-04:00) America - Dominica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Grand_Turk\">(GMT-04:00) America - Grand Turk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Grenada\">(GMT-04:00) America - Grenada</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guadeloupe\">(GMT-04:00) America - Guadeloupe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guyana\">(GMT-04:00) America - Guyana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Havana\">(GMT-04:00) America - Havana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Indianapolis\">(GMT-04:00) America - Indiana - Indianapolis</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Marengo\">(GMT-04:00) America - Indiana - Marengo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Petersburg\">(GMT-04:00) America - Indiana - Petersburg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Vevay\">(GMT-04:00) America - Indiana - Vevay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Vincennes\">(GMT-04:00) America - Indiana - Vincennes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Winamac\">(GMT-04:00) America - Indiana - Winamac</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Iqaluit\">(GMT-04:00) America - Iqaluit</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Kentucky/Louisville\">(GMT-04:00) America - Kentucky - Louisville</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Kentucky/Monticello\">(GMT-04:00) America - Kentucky - Monticello</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Kralendijk\">(GMT-04:00) America - Kralendijk</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/La_Paz\">(GMT-04:00) America - La Paz</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Lower_Princes\">(GMT-04:00) America - Lower Princes</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Manaus\">(GMT-04:00) America - Manaus</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Marigot\">(GMT-04:00) America - Marigot</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Martinique\">(GMT-04:00) America - Martinique</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Montserrat\">(GMT-04:00) America - Montserrat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Nassau\">(GMT-04:00) America - Nassau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/New_York\">(GMT-04:00) America - New York</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Port-au-Prince\">(GMT-04:00) America - Port-au-Prince</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Port_of_Spain\">(GMT-04:00) America - Port of Spain</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Porto_Velho\">(GMT-04:00) America - Porto Velho</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Puerto_Rico\">(GMT-04:00) America - Puerto Rico</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santiago\">(GMT-04:00) America - Santiago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Santo_Domingo\">(GMT-04:00) America - Santo Domingo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Barthelemy\">(GMT-04:00) America - St Barthelemy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Kitts\">(GMT-04:00) America - St Kitts</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Lucia\">(GMT-04:00) America - St Lucia</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Thomas\">(GMT-04:00) America - St Thomas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/St_Vincent\">(GMT-04:00) America - St Vincent</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Toronto\">(GMT-04:00) America - Toronto</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Tortola\">(GMT-04:00) America - Tortola</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-05:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Atikokan\">(GMT-05:00) America - Atikokan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Bogota\">(GMT-05:00) America - Bogota</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cancun\">(GMT-05:00) America - Cancun</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cayman\">(GMT-05:00) America - Cayman</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Chicago\">(GMT-05:00) America - Chicago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Eirunepe\">(GMT-05:00) America - Eirunepe</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guayaquil\">(GMT-05:00) America - Guayaquil</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Knox\">(GMT-05:00) America - Indiana - Knox</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Indiana/Tell_City\">(GMT-05:00) America - Indiana - Tell City</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Jamaica\">(GMT-05:00) America - Jamaica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Lima\">(GMT-05:00) America - Lima</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Matamoros\">(GMT-05:00) America - Matamoros</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Menominee\">(GMT-05:00) America - Menominee</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/North_Dakota/Beulah\">(GMT-05:00) America - North Dakota - Beulah</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/North_Dakota/Center\">(GMT-05:00) America - North Dakota - Center</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/North_Dakota/New_Salem\">(GMT-05:00) America - North Dakota - New Salem</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Ojinaga\">(GMT-05:00) America - Ojinaga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Panama\">(GMT-05:00) America - Panama</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Rankin_Inlet\">(GMT-05:00) America - Rankin Inlet</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Resolute\">(GMT-05:00) America - Resolute</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Rio_Branco\">(GMT-05:00) America - Rio Branco</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Winnipeg\">(GMT-05:00) America - Winnipeg</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-06:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Bahia_Banderas\">(GMT-06:00) America - Bahia Banderas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Belize\">(GMT-06:00) America - Belize</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Boise\">(GMT-06:00) America - Boise</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Cambridge_Bay\">(GMT-06:00) America - Cambridge Bay</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Chihuahua\">(GMT-06:00) America - Chihuahua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Ciudad_Juarez\">(GMT-06:00) America - Ciudad Juarez</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Costa_Rica\">(GMT-06:00) America - Costa Rica</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Denver\">(GMT-06:00) America - Denver</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Edmonton\">(GMT-06:00) America - Edmonton</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/El_Salvador\">(GMT-06:00) America - El Salvador</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Guatemala\">(GMT-06:00) America - Guatemala</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Inuvik\">(GMT-06:00) America - Inuvik</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Managua\">(GMT-06:00) America - Managua</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Merida\">(GMT-06:00) America - Merida</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Mexico_City\">(GMT-06:00) America - Mexico City</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Monterrey\">(GMT-06:00) America - Monterrey</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Regina\">(GMT-06:00) America - Regina</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Swift_Current\">(GMT-06:00) America - Swift Current</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Tegucigalpa\">(GMT-06:00) America - Tegucigalpa</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Easter\">(GMT-06:00) Pacific - Easter</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Galapagos\">(GMT-06:00) Pacific - Galapagos</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-07:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Creston\">(GMT-07:00) America - Creston</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Dawson\">(GMT-07:00) America - Dawson</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Dawson_Creek\">(GMT-07:00) America - Dawson Creek</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Fort_Nelson\">(GMT-07:00) America - Fort Nelson</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Hermosillo\">(GMT-07:00) America - Hermosillo</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Los_Angeles\">(GMT-07:00) America - Los Angeles</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Mazatlan\">(GMT-07:00) America - Mazatlan</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Phoenix\">(GMT-07:00) America - Phoenix</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Tijuana\">(GMT-07:00) America - Tijuana</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Vancouver\">(GMT-07:00) America - Vancouver</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Whitehorse\">(GMT-07:00) America - Whitehorse</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-08:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Anchorage\">(GMT-08:00) America - Anchorage</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Juneau\">(GMT-08:00) America - Juneau</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Metlakatla\">(GMT-08:00) America - Metlakatla</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Nome\">(GMT-08:00) America - Nome</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Sitka\">(GMT-08:00) America - Sitka</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Yakutat\">(GMT-08:00) America - Yakutat</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Pitcairn\">(GMT-08:00) Pacific - Pitcairn</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-09:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"America/Adak\">(GMT-09:00) America - Adak</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Gambier\">(GMT-09:00) Pacific - Gambier</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-10:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Honolulu\">(GMT-10:00) Pacific - Honolulu</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Rarotonga\">(GMT-10:00) Pacific - Rarotonga</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Tahiti\">(GMT-10:00) Pacific - Tahiti</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-10:30)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Marquesas\">(GMT-10:30) Pacific - Marquesas</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"(GMT-11:00)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Midway\">(GMT-11:00) Pacific - Midway</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Niue\">(GMT-11:00) Pacific - Niue</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Pacific/Pago_Pago\">(GMT-11:00) Pacific - Pago Pago</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t</div>

\t\t\t<div class=\"col-md-6\">
\t\t\t\t<input type=\"datetime-local\" id=\"datetime\" name=\"datetime\" class=\"form-control\" min=\"2025-06-03T10:30\" required/>

\t\t\t</div>
\t\t</div>
\t</div>


\t<div class=\"mb-3\">
\t\t<label for=\"message\" class=\"form-label\">Tin nhắn</label>
\t\t<textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"5\" required></textarea>
\t</div>
\t<button type=\"submit\" class=\"btn btn-primary\">
\t\tGửi tin nhắn
\t</button>
</form>

 <script>
  document.addEventListener('DOMContentLoaded', function () {
    const tzSelect = document.getElementById('timezone');
    if (!tzSelect) return;

    let userTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;

    const aliases = {
      'Asia/Saigon': 'Asia/Ho_Chi_Minh',
      'Asia/Phnom_Penh': 'Asia/Bangkok',
      'Asia/Vientiane': 'Asia/Bangkok',
      'Etc/GMT+7': 'Asia/Ho_Chi_Minh'
    };

    if (aliases[userTimeZone]) {
      userTimeZone = aliases[userTimeZone];
    }

    for (let i = 0; i < tzSelect.options.length; i++) {
      if (tzSelect.options[i].value === userTimeZone) {
        tzSelect.selectedIndex = i;
        break;
      }
    }

    console.log('Selected Timezone:', userTimeZone);
  });
</script>

            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactButtons = document.querySelectorAll('.open-contact-modal');
    const contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
 

    contactButtons.forEach(button => {
        button.addEventListener('click', function() {
            contactModal.show();
        });
    });

});
</script>

<script>

window.addEventListener('DOMContentLoaded', () => {
    const tzSelect = document.getElementById('timezone');
    const browserTz = Intl.DateTimeFormat().resolvedOptions().timeZone;

    if (browserTz && tzSelect) {
        const option = Array.from(tzSelect.options).find(opt => opt.value === browserTz);
        if (option) option.selected = true;
    }
});
</script>

</section>", "@Page:C:/xampp/htdocs/bookdevn/user/pages/01.home/06._demo", "");
    }
}
