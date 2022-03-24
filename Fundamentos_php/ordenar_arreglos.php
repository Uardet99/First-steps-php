<?php 

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 
    'Mayo', 'Junio', 'Julio', 'Agosto', 
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'    
);

# Esta funcion ordenara los valores de nuestro array
sort($meses);

# Esta funcion ordenara tambien los valores de nuestro array pero de manera inversa a la anterior funcion
rsort($meses);

$numeros = array(1,22,23,10,9,5,70,100,20);
# Mediante esta funcion ordenaremos los numeros de forma ascendente
sort($numeros);

# Mediante esta funcion ordenaremos los numeros de forma ascendente
rsort($numeros);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar valores</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php

        # Mediante el bucle foreach estamos recorriendo el array $meses mes a mes. Tambien estamos utilizando la etiqueta <li> para que se vea mejor en el navegador.
        foreach($numeros as $numero){
            echo '<li>' . $numero . '</li>';
        }

        ?>
    </ul>
</body>
</html>