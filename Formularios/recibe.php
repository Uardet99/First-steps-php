<?php

# Mediante el metodo _POST podremos ver la informacion que hemos enviado por el formulario
// print_r($_POST);


# Este condicional lo que hace es: Si hay _POST, es decir, si contiene informacion muestranoasla, si no (else)
# redirigenos a la pagina de formulario
/* if ($_POST) {

    # De esta forma lo que hemos hecho es alamacenar mediante el metodo _POST guardar la informacion en variables
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $year = $_POST['year'];
    $terminos = $_POST['terminos'];

    echo 'Hola, ' . $nombre . ' eres ' . $sexo;
} else {
    # El header sirve para redirigirnos
    header('Location: http://localhost/curso_php/Formularios/');
} */


# Optimizando el condicional

# Si no hay _POST me vas a ejecutar nuestra redireccion
if (!$_POST) {
    header('Location: http://localhost/curso_php/Formularios/');
}

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];

echo 'Hola, ' . $nombre . ' eres ' . $sexo;

?>