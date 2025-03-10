# 🔐 OTP Login en PHP 7.4 + PHPMailer

Este proyecto es una aplicación sencilla de login utilizando un código OTP (One-Time Password), enviado por correo electrónico para verificar la identidad del usuario. Desarrollado en PHP 7.4 con soporte de PHPMailer y MySQL como base de datos.

---

## 🚀 Características

- Validación por correo electrónico (OTP)
- Códigos de acceso aleatorios de 6 dígitos
- Vencimiento de código configurable (por defecto, 5 minutos)
- Envío de correo con PHPMailer (vía SMTP)
- Código limpio, organizado y fácil de entender

---

## 📂 Estructura del proyecto

```
otp-login/
├── config.php
├── database.sql
├── login.php
├── send_otp.php
├── verify.php
├── verify_otp.php
├── composer.json
├── README.md
└── vendor/ (autogenerado por Composer)
```

---

## ⚙️ Requisitos

- PHP 7.4+
- MySQL
- Composer
- Servidor SMTP para envío de correos

---

## 🧑‍💻 Instalación

1. Clona este repositorio:
   ```bash
   git clone https://github.com/juansierra02/login_OTP.git
   cd otp-login
   ```

2. Instala dependencias con Composer:
   ```bash
   composer install
   ```

3. Crea la base de datos e importa el script `database.sql`.

4. Configura tu archivo `config.php` con:
   - Tus credenciales de MySQL
   - Los datos SMTP de tu servidor de correo

---

## 📧 Configuración del correo

En el archivo `config.php` ajusta estas líneas:

```php
$mail->Host = 'smtp.tu-servidor.com';
$mail->Username = 'tu@correo.com';
$mail->Password = 'tu_contraseña';
$mail->setFrom('no-reply@tuapp.com', 'Tu App');
```

> ⚠️ Asegúrate de que el servidor tenga acceso a internet para enviar correos.

---

## ✅ Cómo usar

1. Accede a `login.php`
2. Ingresa tu correo
3. Recibirás un código OTP
4. Ve a `verify.php` e ingrésalo para verificar tu acceso

---

## 🛡️ Seguridad

- El código OTP expira automáticamente después de 5 minutos.
- No se guarda ninguna contraseña en la base de datos.
- Ideal como paso inicial para autenticación sin contraseña.

---

## 📜 Licencia

Este proyecto está bajo la licencia MIT. Puedes usarlo, modificarlo y distribuirlo libremente.

---

## 💡 Autor

Desarrollado por **Juan Augusto Sierra Baduy**

---
