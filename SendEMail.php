<?php

require 'PHPMailer/PHPMailerAutoload.php';
class SendEMail
{
    private $email;
    private $email_code;

    public function __construct($email, $email_code)
    {
        $this->email = $email;
        $this->email_code = $email_code;
    }

    public function sendMail()
    {

        $mail = new PHPMailer();

        $mail->isSMTP();            // Set mailer to use SMTP.
        $mail->SMTPDebug = 2;
        $mail->From = "johnkpart@gmail.com";
        $mail->FromName = "john karamitsos";
        $mail->Host = "smtp.gmail.com";             // Specific SMTP server.
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = "johnkpart@gmail.com";           // SMTP username.
        $mail->Password = "karam1986";
        $mail->addAddress($this->email, "part2");

        $mail->isHTML(true);
        $mail->Subject = "Account activation";
        $mail->Body = "Hello " . $this->email . ", thanks for registering on our page. Please click on the link below to activate your account.
          or copy and paste the link to your browser in order to activate your account! http://localhost:8888/controller/activateAccount.php?emailCode=" . $this->email_code
            . "email=" . $this->email;

        if ($mail->Send()) {
            echo "Send email succesfully";
        } else {
            echo "Send mail fail!";
        }

    }
}