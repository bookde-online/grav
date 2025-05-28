<?php
// submit_form.php

// BẮT ĐẦU SESSION Ở ĐẦU FILE
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Kích hoạt Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Khởi tạo biến để lưu trạng thái
$status = 'error'; // Mặc định là lỗi

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kích hoạt hiển thị lỗi PHP để debug (chỉ trong môi trường phát triển)
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Lấy dữ liệu từ form
    $name           = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $phone          = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $email          = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $services       = isset($_POST['services']) && is_array($_POST['services'])
        ? array_map('htmlspecialchars', $_POST['services'])
        : [];
    $plan           = implode(', ', $services);
    $timezone          = isset($_POST['timezone']) ? htmlspecialchars($_POST['timezone']) : '';
    $datetime       = isset($_POST['datetime']) ? htmlspecialchars($_POST['datetime']) : '';
    $messageContent = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // --- CHUYỂN timezone ID thành label (GMT±hh:mm) Region - City ---
    try {
        $tzObj = new DateTimeZone($timezone);
        $utcNow = new DateTime('now', new DateTimeZone('UTC'));
        $offset = $tzObj->getOffset($utcNow);
        $hours = floor($offset / 3600);
        $minutes = abs(($offset % 3600) / 60);
        $formattedOffset = sprintf("GMT%+03d:%02d", $hours, $minutes);
        // Ví dụ: "(GMT+07:00) Asia - Ho Chi Minh"
        $timezoneLabel = "($formattedOffset) " . str_replace('_', ' ', str_replace('/', ' - ', $timezone));
    } catch (Exception $e) {
        // Nếu ID không hợp lệ, fallback dùng nguyên ID
        $timezoneLabel = $timezone;
    }
    // --- Đọc cấu hình email từ file YAML ---
    $emailConfig = [];
    $emailConfigFile = __DIR__ . '/../user/config/plugins/email.yaml'; // Đảm bảo đường dẫn này chính xác

    if (file_exists($emailConfigFile)) {
        try {
            $emailConfig = Yaml::parseFile($emailConfigFile);

            if (isset($emailConfig['plugins']['email'])) {
                $emailConfig = $emailConfig['plugins']['email'];
            }
        } catch (Exception $e) {
            error_log("Error reading email config file: " . $e->getMessage());
            // Fallback to default config if file read fails
            $emailConfig = [
                'from' => 'hungpq1309developer@gmail.com', // Replace
                'to' => 'hungpq1309developer@gmail.com',  // Replace
                'mailer' => [
                    'engine' => 'smtp',
                    'host' => 'smtp.gmail.com',
                    'port' => 587,
                    'encryption' => 'tls',
                    'user' => 'hungpq1309developer@gmail.com', // Replace
                    'password' => 'higlwhanglymmfuw',       // Replace
                ],
            ];
        }
    } else {
        error_log("Email config file not found: " . $emailConfigFile);
        // Fallback to default config if file not found
        $emailConfig = [
            'from' => 'hungpq1309developer@gmail.com', // Replace
            'to' => 'hungpq1309developer@gmail.com',  // Replace
            'mailer' => [
                'engine' => 'smtp',
                'host' => 'smtp.gmail.com',
                'port' => 587,
                'encryption' => 'tls',
                'user' => 'hungpq1309developer@gmail.com', // Replace
                'password' => 'higlwhanglymmfuw',       // Replace
            ],
        ];
    }

    $mail = new PHPMailer(true);

    // Bật chế độ debug (Chỉ bật khi gỡ lỗi, sau đó comment hoặc xóa)
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->Debugoutput = 'echo';

    try {
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host       = $emailConfig['mailer']['host'] ?? 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $emailConfig['mailer']['user'] ?? 'hungpq1309developer@gmail.com';
        $mail->Password   = $emailConfig['mailer']['password'] ?? 'higlwhanglymmfuw';
        $mail->SMTPSecure = ($emailConfig['mailer']['encryption'] ?? 'tls') === 'tls' ? PHPMailer::ENCRYPTION_STARTTLS : PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = $emailConfig['mailer']['port'] ?? 587;

        // Đảm bảo email người gửi (From) khớp với email dùng để xác thực SMTP (Gmail)
        $senderName = 'BOOKDE.VN';
        $mail->setFrom($mail->Username, $senderName);
        $mail->addAddress($emailConfig['to'] ?? 'hungpq1309developer@gmail.com');
        $mail->addReplyTo($email, $name);

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'Quan tâm về gói dịch vụ - ' . $name;
        $mail->Body    = "
            <html>
            <head>
                <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
                <title>New Contact from Website</title>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #ffffff; margin: 0; padding: 20px; }
                    .container { max-width: 600px; margin: 20px auto; background-color: #FFF5E1; padding: 30px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
                    h2 { color: #A93226; text-align: center; margin-bottom: 25px; font-size: 24px; }
                    table { width: 100%; border-collapse: separate; border-spacing: 0; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; }
                    th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #eee; border-right: 1px solid #eee; }
                    tr:last-child td { border-bottom: none; }
                    td:last-child { border-right: none; }
                    .header-cell { width: 30%; background-color: #FFF5E1; color: #A93226; font-weight: bold; vertical-align: top; }
                    .data-cell { color: black; font-weight: bold; }
                    table tr:first-child .header-cell { border-top-left-radius: 8px; }
                    table tr:first-child .data-cell { border-top-right-radius: 8px; }
                    table tr:last-child .header-cell { border-bottom-left-radius: 8px; }
                    table tr:last-child .data-cell { border-bottom-right-radius: 8px; }
                    p.footer-text { font-size: 0.9em; color: #777; text-align: center; margin-top: 20px; }
                </style>
            </head>
            <body>
                <div class=\"container\">
                    <h2>Thông tin liên hệ mới :</h2>
                    <table>
                        <tbody>
                            <tr>
                                <td class=\"header-cell\">Tên:</td>
                                <td class=\"data-cell\">{$name}</td>
                            </tr>
                            <tr>
                                <td class=\"header-cell\">Số điện thoại:</td>
                                <td class=\"data-cell\">{$phone}</td>
                            </tr>
                            <tr>
                                <td class=\"header-cell\">Email:</td>
                                <td class=\"data-cell\">{$email}</td>
                            </tr>
                            <tr>
                                <td class=\"header-cell\">Gói dịch vụ:</td>
                                <td class=\"data-cell\">{$plan}</td>
                            </tr>
                             <tr>
                                <td class=\"header-cell\">Thời gian:</td>
                                <td class=\"data-cell\">{$timezoneLabel} - {$datetime} </td>
                            </tr>
                            <tr>
                                <td class=\"header-cell\">Lời nhắn:</td>
                                <td class=\"data-cell\">{$messageContent}</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class=\"footer-text\">Thông tin được gửi về từ Website Bookde.vn.</p>
                </div>
            </body>
            </html>
        ";
        $mail->AltBody = "Name: {$name}\nPhone: {$phone}\nEmail: {$email}\nSelected Plan: {$plan}\nTime: {$timezoneLabel} - {$datetime}\nMessage:\n{$messageContent}";
        $mail->send();



        // --- Update status to success ---
        $status = 'success';
    } catch (Exception $e) {
        // --- Update status to error ---
        $status = 'error';
        error_log("Email sending error: " . $e->getMessage() . " - Mailer Error: " . $mail->ErrorInfo);
    }
} else {
    // If not a POST request, or accessed directly
    $status = 'info'; // Set status to info for direct access
}


if ($status === 'success') {
    // Quay lại trang trước
    $referer = $_SERVER['HTTP_REFERER'] ?? '/';
    header("Location: $referer");
    exit;
} else {
    // Redirect kèm theo lỗi hoặc fallback về trang chủ
    header("Location: /?error=form");
    exit;
}
