<?php

# Mediante el metodo _POST podremos ver la informacion que hemos enviado por el formulario
// print_r($_POST);


/* if ($_POST) {
    # De esta forma lo que hemos hecho es alamacenar mediante el metodo _POST guardar la informacion en variables
    $nombre = $_POST['nombre'];

} else {
    # El header sirve para redirigirnos
    header('Location: http://localhost/curso_php/Formularios/');
} */


# Optimizando el condicional

# Si no hay _POST me vas a ejecutar nuestra redireccion
if (!$_POST) {
    header('Location: http://localhost/curso_php/Formularios/Metodo_POST');
}

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];

echo 'Hola, ' . $nombre . ' eres ' . $sexo;

?> 

 