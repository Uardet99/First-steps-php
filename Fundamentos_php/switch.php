<?php

$mes = 'Febrero';

# La instruccion switch es una forma de expresion de un anidamiento multiple de instrucciones if
switch ($mes) {
    case 'Diciembre':
        echo 'Feliz Navidad';
    break;

    case 'Enero':
        echo 'Feliz Año Nuevo';
    break;

    default:
        echo 'En este mes no se celebra nada';
    break;
}

?>