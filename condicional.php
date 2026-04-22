<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$postre = $_POST['postre'];

if ($nombre == "Karla" && $apellido == "Jiménez" && $edad == 20 && $postre = 1) {
    header("Location: pag.html");
    exit();
} else {
    echo "No eres la persona adecuada.";
}
?>