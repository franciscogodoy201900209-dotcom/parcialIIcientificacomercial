<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$postre = $_POST['postre'];

if ($nombre == "Karla" && $apellido == "Jiménez" && $edad == 20 && $postre = 1) {
    header("Location: pag.html");
    exit();
} else  {
    echo '<h1>No eres la persona adecuada</h1>';
    echo '<a href="index.php">Regresar</a> ';
}
?>