<?php 

# Un array asociativo son strings con valores personalizados
$alex = array('telefono' => '9654654' ,'edad' => 25 ,'apellido' => 'FalconMaster' ,'pais' => 'mexico');

# Como cambiar la informacion del valor
$alex['telefono'] = '1111111';

# Forma de recorrerlo
echo $alex['telefono'] . '<br />';
echo $alex['edad'] . '<br />';
echo $alex['apellido'] . '<br />';
echo $alex['pais'] . '<br />';

?>
