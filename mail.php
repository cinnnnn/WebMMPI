<?php
    //Mensaje para atencion 
    $para      = 'hello@mmpi.mx';
    $titulo    = 'Mensaje desde Sitio Web ' . $_POST['name'];
    $mensaje   = $_POST['name'] . "\r\n" . $_POST['phone'] . "\r\n" . $_POST['message'];
    $cabeceras = 'From: '.$_POST['email'].'' . "\r\n" .
        'Reply-To: '.$_POST['email'].'' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($para, $titulo, $mensaje, $cabeceras);

    //mensaje de confirmación de envio
    $para      = ''.$_POST['email'].'';
    $titulo    = 'Contacto MMPI';
    $mensaje   = "Gracias por contactarnos " . $_POST['name'] . "\r\n En breve nos pondremos en contacto contigo para resolver tus dudas";
    $cabeceras = 'From: hello@mmpi.mx' . "\r\n" .
        'Reply-To: hello@mmpi.mx' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($para, $titulo, $mensaje, $cabeceras);
    
    echo'<script type="text/javascript">
        alert("TU CORREO HA SIDO ENVIADO EXITOSAMENTE");
        window.location.href="index.php";
        </script>'; 
?>