<?php

$errores = '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    # En esta condicion lo que buscamos es validar que el formulario no se quede vacio y se envie, no nos inyecten codigo...
    if (!empty($nombre)) {
        
        /* # La funcion trim() elimina los espacios en blanco u otros caracteres al inicio y final de una cadena.
        $nombre = trim($nombre);
        # La funcion htmlspecialchars convierte o escapa caracteres en codigo HTML.
        $nombre = htmlspecialchars($nombre);
        # La funcion stripcslashes() no permite utilizar los \/.
        $nombre = stripcslashes($nombre); */

        # Esta funcion se utiliza para validar y limpiar los datos
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

        echo "Tu nombre es: " . $nombre . "<br>"; 
    } else {
        $errores .= 'Por favor agrega un nombre';
    }

    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        echo "Tu correo es: " . $correo . "<br>";

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor introduce un correo valido <br>';
        } else {
            echo "Tu correo es: " . $correo;
        }

    } else {
        $errores .= 'Por favor agrega un correo';
    }

    
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="correo" placeholder="correo">
        
        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errores ?></div>

        <?php endif; ?>

        <input type="submit" name="submit">
    </form>
</body>
</html>