<?php
class PHP_Email_Form {
    public $ajax;
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $smtp = [];
    private $messages = [];

    public function add_message($content, $label, $priority = 0) {
        $this->messages[] = "$label: $content";
    }

    public function send() {
        $body = implode("\n", $this->messages);
        $headers = "From: $this->from_name <$this->from_email>\r\nReply-To: $this->from_email\r\n";

        return mail($this->to, $this->subject, $body, $headers) ? 'Email sent!' : 'Email failed to send!';
    }
}
