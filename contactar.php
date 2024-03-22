<?php 
require "includes/app.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $contacto = $_POST["contacto"];
    $mail = new PHPMailer;
    $remite = $contacto["nombre"] . " " . $contacto["apellidos"];
    $email = $contacto["email"];
    $telefono = $contacto["telefono"];
    $direccion = $contacto["direccion"];
    $localidad = $contacto["localidad"];
    $provincia = $contacto["provincia"];
    $mensaje = $contacto["mensaje"];


    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();

        $mail->Host = "smtp.ionos.es";
        $mail->SMTPAuth = true;
        $mail->Username = "info@theelectricbuffalo.com";
        $mail->Password = "QDj7yNir8?UmUQ+";
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;

        // $mail->SMTPOptions = array(
        //     'ssl' => array(
        //         'verify_peer' => false,
        //         'verify_peer_name' => false,
        //         'allow_self_signed' => true
        //     )
        // );

        $mail->setFrom("info@theelectricbuffalo.com", $remite);
        $mail->addAddress("info@theelectricbuffalo.com", "The Electric Buffalo");
        $mail->Subject = "Tienes un nuevo mensaje desde la web";
        $mail->isHTML(true);
        $mail->CharSet = "UTF-8";
        $contenido = "<html><p>" . $mensaje . "</p></html>";

        $mail->Body = $contenido;
        $mail->AltBody = "Esto es texto alternativo sin HTML";
        $mail->send();
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo} <br>";
    }
}