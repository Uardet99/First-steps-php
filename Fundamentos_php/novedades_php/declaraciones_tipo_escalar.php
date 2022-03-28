<?php

# Las declaraciones de tipo escalar son de dos tipos: coercitivo (por defecto) y estricto. 
# Ahora se pueden forzar los siguientes tipos de parametros, que significa esto:
    # Con esto podremos evitarnos tener que utilizar un par de lineas mas, simplemente poniendo el tipo de dato que
    # queremos que utilice nuestra funcion, por ejemplo (int $numero) o  (string $texto).
    
function cuadrado (int $numero ) {
    return $numero * $numero; 
}
$numero  = '4';
echo 'El cuadrado de ' . $numero . ' es ' . cuadrado($numero);
