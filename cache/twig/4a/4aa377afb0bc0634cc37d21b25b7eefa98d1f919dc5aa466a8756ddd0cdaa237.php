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

/* forms/contact-form.twig */
class __TwigTemplate_96c67648158e9948a0e7104815c14cd85747a4d8e0e8eb83498dbc165063ce90 extends \Twig\Template
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
        // line 2
        echo "
<form id=\"contactForm\" method=\"POST\" action=\"https://localhost/bookdevn/custom-controller/submit_form.php\">
\t<div class=\"mb-3\">
\t\t<label for=\"name\" class=\"form-label\">";
        // line 5
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Your Name") : ("Tên của bạn"));
        echo "</label>
\t\t<input type=\"text\" placeholder=\"Nguyen Van A\" class=\"form-control\" id=\"name\" name=\"name\" required>
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"phone\" class=\"form-label\">";
        // line 9
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Your Phone Number ") : ("Số điện thoại của bạn "));
        echo "
\t\t</label>
\t\t<input type=\"text\" placeholder=\"123xxxxxxx\" class=\"form-control\" id=\"phone\" name=\"phone\" required minlength=\"10\" inputmode=\"numeric\" pattern=\"[0-9]{10,}\">
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"email\" class=\"form-label\">";
        // line 14
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Your Email") : ("Email của bạn"));
        echo "</label>
\t\t<input type=\"email\" placeholder=\"example@email.com\" class=\"form-control\" id=\"email\" name=\"email\" required>
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"plan\" class=\"form-label\">
\t\t\t";
        // line 19
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Select Services :") : ("Chọn dịch vụ :"));
        echo "
\t\t</label>

\t\t<label class=\"container\">
\t\t\t<input type=\"checkbox\" name=\"services[]\" value=\"Custom hotel websites\">
\t\t\t<span class=\"checkmark\"></span>
\t\t\t";
        // line 25
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Custom hotel websites") : ("Trang Web khách sạn tùy chỉnh"));
        echo "
\t\t</label>

\t\t<label class=\"container\">
\t\t\t<input type=\"checkbox\" name=\"services[]\" value=\"Online booking support\">
\t\t\t<span class=\"checkmark\"></span>
\t\t\t";
        // line 31
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Online booking support") : ("Hỗ trợ đặt phòng trực tuyến"));
        echo "
\t\t</label>

\t\t<label class=\"container\">
\t\t\t<input type=\"checkbox\" name=\"services[]\" value=\"Booking optimization solutions\">
\t\t\t<span class=\"checkmark\"></span>
\t\t\t";
        // line 37
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Booking optimization solutions") : ("Giải pháp tối ưu hóa đặt phòng"));
        echo "
\t\t</label>
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"timezone\" class=\"form-label\">
\t\t\t";
        // line 42
        echo (((($context["current_language"] ?? null) == "en")) ? ("Select Date & Time:") : ("Chọn ngày và giờ :"));
        echo "
\t\t</label>
\t\t<div class=\"row g-1 \">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<select
\t\t\t\t\tid=\"timezone\" name=\"timezone\" class=\"form-select\" required>
\t\t\t\t\t";
        // line 49
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grouped_timezones"] ?? null));
        foreach ($context['_seq'] as $context["group_label"] => $context["tz_group"]) {
            // line 50
            echo "\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"";
            // line 51
            echo twig_escape_filter($this->env, $context["group_label"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 53
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["tz_group"]);
            foreach ($context['_seq'] as $context["tz"] => $context["label"]) {
                // line 54
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["tz"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tz'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['tz_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t</select>
\t\t\t</div>

\t\t\t<div class=\"col-md-6\">
\t\t\t\t<input type=\"datetime-local\" id=\"datetime\" name=\"datetime\" class=\"form-control\" min=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+1 day"), "Y-m-d\\TH:i"), "html", null, true);
        echo "\" required/>

\t\t\t</div>
\t\t</div>
\t</div>


\t<div class=\"mb-3\">
\t\t<label for=\"message\" class=\"form-label\">";
        // line 70
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Message") : ("Tin nhắn"));
        echo "</label>
\t\t<textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"5\" required></textarea>
\t</div>
\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t";
        // line 74
        echo ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []) == "en")) ? ("Send Message") : ("Gửi tin nhắn"));
        echo "
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

";
    }

    public function getTemplateName()
    {
        return "forms/contact-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 74,  154 => 70,  143 => 62,  137 => 58,  130 => 56,  119 => 54,  114 => 53,  110 => 51,  107 => 50,  102 => 49,  93 => 42,  85 => 37,  76 => 31,  67 => 25,  58 => 19,  50 => 14,  42 => 9,  35 => 5,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# contact-form.twig - Dành cho việc xử lý bằng file PHP riêng #}

<form id=\"contactForm\" method=\"POST\" action=\"https://localhost/bookdevn/custom-controller/submit_form.php\">
\t<div class=\"mb-3\">
\t\t<label for=\"name\" class=\"form-label\">{{ grav.language.getLanguage == 'en' ? 'Your Name' : 'Tên của bạn' }}</label>
\t\t<input type=\"text\" placeholder=\"Nguyen Van A\" class=\"form-control\" id=\"name\" name=\"name\" required>
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"phone\" class=\"form-label\">{{ grav.language.getLanguage == 'en' ? 'Your Phone Number ' : 'Số điện thoại của bạn ' }}
\t\t</label>
\t\t<input type=\"text\" placeholder=\"123xxxxxxx\" class=\"form-control\" id=\"phone\" name=\"phone\" required minlength=\"10\" inputmode=\"numeric\" pattern=\"[0-9]{10,}\">
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"email\" class=\"form-label\">{{ grav.language.getLanguage == 'en' ? 'Your Email' : 'Email của bạn' }}</label>
\t\t<input type=\"email\" placeholder=\"example@email.com\" class=\"form-control\" id=\"email\" name=\"email\" required>
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"plan\" class=\"form-label\">
\t\t\t{{ grav.language.getLanguage == 'en' ? 'Select Services :' : 'Chọn dịch vụ :' }}
\t\t</label>

\t\t<label class=\"container\">
\t\t\t<input type=\"checkbox\" name=\"services[]\" value=\"Custom hotel websites\">
\t\t\t<span class=\"checkmark\"></span>
\t\t\t{{ grav.language.getLanguage == 'en' ? 'Custom hotel websites' : 'Trang Web khách sạn tùy chỉnh' }}
\t\t</label>

\t\t<label class=\"container\">
\t\t\t<input type=\"checkbox\" name=\"services[]\" value=\"Online booking support\">
\t\t\t<span class=\"checkmark\"></span>
\t\t\t{{ grav.language.getLanguage == 'en' ? 'Online booking support' : 'Hỗ trợ đặt phòng trực tuyến' }}
\t\t</label>

\t\t<label class=\"container\">
\t\t\t<input type=\"checkbox\" name=\"services[]\" value=\"Booking optimization solutions\">
\t\t\t<span class=\"checkmark\"></span>
\t\t\t{{ grav.language.getLanguage == 'en' ? 'Booking optimization solutions' : 'Giải pháp tối ưu hóa đặt phòng' }}
\t\t</label>
\t</div>
\t<div class=\"mb-3\">
\t\t<label for=\"timezone\" class=\"form-label\">
\t\t\t{{ current_language == 'en' ? 'Select Date & Time:' : 'Chọn ngày và giờ :' }}
\t\t</label>
\t\t<div class=\"row g-1 \">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<select
\t\t\t\t\tid=\"timezone\" name=\"timezone\" class=\"form-select\" required>
\t\t\t\t\t{# Duyệt từng nhóm theo label: (GMT+07:00), (GMT+08:00),... #}
\t\t\t\t\t{% for group_label, tz_group in grouped_timezones %}
\t\t\t\t\t\t<optgroup
\t\t\t\t\t\t\tlabel=\"{{ group_label }}\">
\t\t\t\t\t\t\t{# Duyệt từng timezone trong nhóm đó #}
\t\t\t\t\t\t\t{% for tz, label in tz_group %}
\t\t\t\t\t\t\t\t<option value=\"{{ tz }}\">{{ label }}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</optgroup>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t</div>

\t\t\t<div class=\"col-md-6\">
\t\t\t\t<input type=\"datetime-local\" id=\"datetime\" name=\"datetime\" class=\"form-control\" min=\"{{ \"now\"|date_modify(\"+1 day\")|date(\"Y-m-d\\\\TH:i\") }}\" required/>

\t\t\t</div>
\t\t</div>
\t</div>


\t<div class=\"mb-3\">
\t\t<label for=\"message\" class=\"form-label\">{{ grav.language.getLanguage == 'en' ? 'Message' : 'Tin nhắn' }}</label>
\t\t<textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"5\" required></textarea>
\t</div>
\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t{{ grav.language.getLanguage == 'en' ? 'Send Message' : 'Gửi tin nhắn' }}
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

", "forms/contact-form.twig", "C:\\xampp\\htdocs\\bookdevn\\user\\themes\\quark\\templates\\forms\\contact-form.twig");
    }
}
