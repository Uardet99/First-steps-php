<?php 

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 
    'Mayo', 'Junio', 'Julio', 'Agosto', 
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'  
);

$alejandro = array('telefono' => 354637838, 'edad' => 20, 'pais' => 'mexico')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Meses</h1>
    <ul>
        <?php
            /* foreach ($meses as $mes) {
                echo $mes . '<br>';
            } */

            # La variable alejandro contiene todos los datos
            # La variable dato contiene el telefono, la edad y el pais
            # La variable valor contiene los valores del telefono, edad y pais, es decir, 354637838, 20 y mexico
            foreach ($alejandro as $dato => $valor) {
                echo $dato . ': ' .$valor . '<br>';
            }

        ?>
    </ul>
</body>
</html>