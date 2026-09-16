<?php
require "class.phpmailer.php";

$asuntos = $_POST['asunto'];
$mensaje = $_POST['contenido'];


$correo = $_POST['email']; // CORREO DONDE LLEGARÁN LOS MENSAJES
$arcorreo = explode(',',$correo);
$totalemails = count($arcorreo);
$i=0;

$pedido ="Nuevo mensaje desde el sitio web.<br><br>"; 
$pedido .= "Asunto:. " . $asuntos . "<br>";
$pedido .= "Mensaje:.<br> " . $mensaje . "<br>";
$asunto=$asuntos." | Plataforma Noticias";
$empresa="Goma de Mascar | Plataforma de Noticias";
$correo_empresa="info@publicidadgdem.com";

//echo $pedido;

$mail = new PHPMailer();
$mail->Host = "https://www.publicidadgdem.com/";
$mail->From = $correo_empresa;
$mail->FromName = $empresa;
$mail->Subject = $asunto;
while($i < $totalemails)
{
   $mail->AddAddress("$arcorreo[$i]","Mensaje de Goma de Mascar");
   $i++;

}

//$mail->AddAddress("tiwperu@gmail.com","Copia de Mensaje Contacto Web");
$mail->Body = $pedido;
$mail->AltBody = "Recuerda responder este mensaje a la brevedad del tiempo.";
/*$mail->AddAttachment("images/foto.jpg", "foto.jpg");*/
if ($mail->Send())
    {
        echo '<script> swal("¡Urra!", "Correo enviado exitomasamente.", "success");
                        var pagina="panel"
                        function redireccionar() 
                        {
                        location.href=pagina
                        } 
                        setTimeout ("redireccionar()", 2500);
                      </script>';

    }
    else
    {
        echo '<script> swal("¡Ups!", "No pudimos enviar el correo, intentalo nuevamente o espera unos minutos.", "error");
                        var pagina="mail"
                        function redireccionar() 
                        {
                        location.href=pagina
                        } 
                        setTimeout ("redireccionar()", 2500);
                      </script>';
    }

?>