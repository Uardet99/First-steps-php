<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 
    'Mayo', 'Junio', 'Julio', 'Agosto', 
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'  
);

# Recorrer un array mediante el bucle for

for ($i = 0; $i < count($meses); $i++) {
    echo $meses[$i] . '<br>';
}

# Recorrer un array mediante el bucle while

$contador = 0;
while ($contador < count($meses)) {
    echo $meses[$contador] . '<br>';
    $contador++;
}

?>