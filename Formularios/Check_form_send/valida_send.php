<?php

#De esta forma sabriamos por que metodo hemos enviado la informacion
/* if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "Se enviaron por _GET";
} else {
    echo "Se enviaron por _POST";
} */


# Ahora como saber si el formulario ha sido enviado

if (isset($_POST['submit'])) {
    echo "Se han enviado los datos correctamente";
    print_r($_POST['submit']);
}


?>