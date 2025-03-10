<?php
require 'config.php';

$email = $_POST['email'];
$otp = rand(100000, 999999);
$expiry = date('Y-m-d H:i:s', strtotime('+5 minutes'));

$stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user) {
    $stmt = $pdo->prepare("UPDATE users SET otp_code = ?, otp_expiry = ? WHERE email = ?");
    $stmt->execute([$otp, $expiry, $email]);
} else {
    $stmt = $pdo->prepare("INSERT INTO users (email, otp_code, otp_expiry) VALUES (?, ?, ?)");
    $stmt->execute([$email, $otp, $expiry]);
}

if (enviarOTP($email, $otp)) {
    echo "Código enviado a tu correo.";
    echo '<br><a href="verify.php">Verificar código</a>';
} else {
    echo "Error al enviar el correo.";
}