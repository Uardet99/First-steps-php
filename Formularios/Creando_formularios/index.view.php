<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario Contacto</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if (!$enviado && isset($nombre)) echo $nombre ?>"> <!-- La funcion de este if es saber si antes de ser enviado el formulario alguna de las variables tiene un dato y esta bien escrito que no se borre -->
            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="<?php if (!$enviado && isset($correo)) echo $correo ?>">
            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="mensaje"><?php if (!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
            <!-- <div class="alert error">
                Error
            </div>
            <div class="alert exito">
                Exito
            </div> -->

            <?php if (!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
                
            <?php elseif ($enviado):  ?>
                <div class="alert exito">
                    <p>Enviado correctamente</p>
                </div>

            <?php endif; ?>
            
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
            
    </div>
</body>
</html>