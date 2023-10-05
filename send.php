<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '3001rick@gmail.com';
    $mail->Password = 'xlhfrnctgnhzjgqo';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($_POST['email'], $_POST['name']);

    $mail->addAddress('3001rick@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = $_POST['onderwerp'];
    $mail->Body = $_POST['bericht'];

    //verstuur ook de datum mee in het bericht
    $mail->Body .= "<br><br>Ons bedrijf is: " . $_POST['name'];

    $mail->send();
?>
    <script>
        alert('Email is verstuurd!');
        window.location.href='index.php';
    </script>
    <?php
}