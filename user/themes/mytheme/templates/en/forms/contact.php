<?php
/**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
  // Replace contact@example.com with your real receiving email address
//   $receiving_email_address = 'dungnguyen19724@gmail.com';

//   if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//     include( $php_email_form );
//   } else {
//     die( 'Unable to load the "PHP Email Form" Library!');
//   }

//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;
  
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];

//   // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
//   $contact->smtp = array(
//     'host' => 'smtp.gmail.com',
//     'username' => '',
//     'password' => '',
//     'port' => '587'
//   );

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Dùng Composer

function loadEnv($file = '.env') {
  if (!file_exists($file)) return;

  $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  foreach ($lines as $line) {
      if (strpos($line, '#') === 0) continue; // Bỏ qua dòng comment

      list($key, $value) = explode('=', $line, 2);
      putenv(trim($key) . '=' . trim($value));
  }
}

loadEnv();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = strip_tags(trim($_POST["name"]));
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $subject = strip_tags(trim($_POST["subject"]));
  $message = trim($_POST["message"]);

  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
      echo "Vui lòng điền đầy đủ thông tin.";
      exit;
  }

  $mail = new PHPMailer(true);

  try {
      // Cấu hình SMTP
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = getenv('MAIL_USERNAME'); // Lấy từ biến môi trường
      $mail->Password = getenv('MAIL_PASSWORD'); // Lấy từ biến môi trường
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;
      $mail->CharSet = 'UTF-8'; // Để hỗ trợ tiếng Việt

      // Người gửi & nhận
      $mail->setFrom(getenv('MAIL_USERNAME'), 'Website BookDe');
      $mail->addAddress('22520288@gm.uit.edu.vn'); // Email nhận thông tin

      // Nội dung email
      $mail->isHTML(false);
      $mail->Subject = "Liên hệ từ: $name";
      $mail->Body = "Tên: $name\nEmail: $email\nTiêu đề: $subject\nNội dung:\n$message";

      if ($mail->send()) {
          echo "success";
      } else {
          echo "Không thể gửi email. Lỗi: " . $mail->ErrorInfo;
      }
  } catch (Exception $e) {
      echo "Lỗi gửi mail: {$mail->ErrorInfo}";
  }
} else {
  echo "Có lỗi xảy ra.";
}
?>
