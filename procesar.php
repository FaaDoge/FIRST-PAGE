<?php
$nombre = $_GET['nombre'];
$correo = $_GET['correo'];
$texto = $_GET['texto'];
print("Gracias :<strong>" .$nombre ."</strong><br> por comunicarse con nosotros le mandaremos una respuesta sobre: " .$texto. " al correo: ".$correo);
?>