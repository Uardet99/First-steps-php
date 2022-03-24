<?php 

# Los arrays multidimensionales son estructuras de datos que almacenan los valores en mas de una dimension.
$amigos = array(
    array('Alejandro', 20,), 
    array('Cesar',21), 
    array('Manuel',18)
);

# Como acceder a sus valores
echo $amigos[0][0] . '<br />';
echo $amigos[1][0] . '<br />';
echo $amigos[2][0] . '<br />';

?>