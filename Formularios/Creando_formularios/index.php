<?php

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    
    if (!empty($nombre)) { # Este if quiere decir que: Si hay contenido ejecutame el codigo que tienes dentro
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); # Elimina etiquetas, opcionalmente elimina o codifica caracteres especiales
    } else {
        $errores .= 'Por favor introduce un nombre <br />';
    }

    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); # Elimina todos los caracteres menos letras, dígitos y !#$%&'*+-=?^_`{|}~@.[].
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) { # Valida una direccion de correo electronico
            $errores .= 'Por favor introduce un correo valido <br />';
        }
    } else {
        $errores .= 'Por favor introduce un correo <br />';
    }

    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje); # Convierte caracteres especiales en caracteres html
        $mensaje = trim($mensaje); # Elimina los espacios 
        $mensaje = stripcslashes($mensaje); # Devuelve la cadena sin las barra (/\)
    } else {
        $errores .= 'Por favor introduce un mensaje <br />';
    }

    if (!$errores) { # Si no hay errores todo es correcto
        $enviar_a = 'tunombre@tuempresa.com';
        $asunto = 'Correo enviado desde mi pagina';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado = "Correo: $correo \n";
        $mensaje_preparado = "Mensaje: " . $mensaje;

        //mail($enviar_a, $asunto, $mensaje_preparado); # Esta funcion no funcionara mientras estemos utilizando XAMPP, tiene que subirse a un hosting
        $enviado = 'true';
    }
}

require 'index.view.php';




?>