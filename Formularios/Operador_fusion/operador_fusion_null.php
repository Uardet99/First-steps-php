<?php

# Esto es lo mismo que el if condicioanate de bajo
//$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';

/* if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
} else {
    $nombre = 'Anonimo';
} */

# Esta linea sustituye los dos condicionantes de arriba
$nombre = $_GET['nombre'] ?? 'Anonimo';

echo $nombre;

?>