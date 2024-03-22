<?php 

require_once "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
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
      
        $mail->isSMTP();

        $mail->Host = "smtp.ionos.es";
        $mail->SMTPAuth = true;
        $mail->Username = "info@theelectricbuffalo.com";
        $mail->Password = "QDj7yNir8?UmUQ+";
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;

        $mail->setFrom("info@theelectricbuffalo.com", $remite);
        $mail->addAddress("info@theelectricbuffalo.com", "The Electric Buffalo");
        $mail->Subject = "Tienes un nuevo mensaje desde la web";
        $mail->isHTML(true);
        $mail->CharSet = "UTF-8";
        $contenido = "<html><p>" . $mensaje . "</p>";
        $contenido .= "<P>Mensaje enviado por " . $remite . "</p>";
        $contenido .= "<p>Desde " . $localidad . ", " . $privincia . "</p>";
        $contenido .= "<p>Dirección: " . $direccion . "</p>";
        $contenido .= "<p>Teléfono: " . $telefono . "</p>";
        $contenido .= "<p>" . $email . "</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;
        $mail->AltBody = "Esto es texto alternativo sin HTML";
        $mail->send();
        
        header("Location: mensaje_enviado.php");
       
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo} <br>";
    }
}