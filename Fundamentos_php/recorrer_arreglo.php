<?php 

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 
    'Mayo', 'Junio', 'Julio', 'Agosto', 
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'    
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php

        # Mediante el bucle foreach estamos recorriendo el array $meses mes a mes. Tambien estamos utilizando la etiqueta <li> para que se vea mejor en el navegador.
        foreach($meses as $mes){
            echo '<li>' . $mes . '</li>';
        }

        ?>
    </ul>
</body>
</html>