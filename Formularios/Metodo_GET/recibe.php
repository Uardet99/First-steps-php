<?php

# El metodo $_GET envia la informacion en la propia URL, es decir, la informacion es visible 
# por lo que con este metodo no es recomendable usar para enviar informacion sensible.
if (!$_GET) {
    header('Location: http://localhost/curso_php/Formularios/Metodo_GET');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

echo 'Hola, ' . $nombre . ' eres ' . $sexo;



?>