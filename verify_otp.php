<?php
require 'config.php';

$email = $_POST['email'];
$otp = $_POST['otp'];

$stmt = $pdo->prepare("SELECT otp_code, otp_expiry FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if (!$user) {
    exit("Email no registrado.");
}

if ($user['otp_code'] === $otp && strtotime($user['otp_expiry']) > time()) {
    echo "¡Login exitoso! Bienvenido $email";
} else {
    echo "Código inválido o expirado.";
}