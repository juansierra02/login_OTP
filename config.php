<?php
$pdo = new PDO("mysql:host=localhost;dbname=otp_login;charset=utf8mb4", "root", "");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function enviarOTP($email, $otp) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.tu-servidor.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tu@correo.com';
        $mail->Password   = 'tu_contraseña';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('no-reply@tuapp.com', 'Tu App');
        $mail->addAddress($email);
        $mail->Subject = 'Tu código de acceso';
        $mail->Body    = "Tu código OTP es: $otp";

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}