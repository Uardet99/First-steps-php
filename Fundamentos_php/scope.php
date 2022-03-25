<?php

# Cuando queremos trabajar confunciones que estan fuera de nustra funcion, primero la tenemos que pasar como parametros
$numero = 7;

function mostrar ($numero) {
    echo $numero;
}

mostrar($numero);


# Cuando queremos trabajar con una variable que este dentro de una funcion, para poder utilizarla tendremos que retornarla desde la funcion
function mostrar_numero () {
    $numero2 = 10;
    return $numero2;
}

echo mostrar_numero();

?>