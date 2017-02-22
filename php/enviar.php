<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enviar</title>
</head>
<body>
   
   
    <?php 
    $name = $_REQUEST[name];
    $apellido = $_REQUEST[ape];
    
    $para      = 'lmreyes_depad_mq@hotmail.com';
    $titulo    = 'Mensaje';
    $mensaje   = $_REQUEST[mensa];
    $cabeceras = 'From: contactous@hotmail.com' . "\r\n" .
    'Reply-To: lmreyes_depad_mq@hotmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($para, $titulo, $mensaje, $cabeceras);
    ?>
</body>
</html>