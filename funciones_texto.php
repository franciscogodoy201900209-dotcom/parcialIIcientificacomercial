<?php

    $mensaje = $_POST['mensaje'];
    $mayusculas = strtoupper($mensaje);
    $largo = strlen($mensaje);
    $mensaje_limpio = str_replace("triste", "feliz", $mensaje);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Funciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos2.css">
</head>

<body style="background: url('img/a.png') no-repeat center center/cover; min-height: 100vh;">
    <div class="container mt-5 text-center">
        <div class="card shadow-lg p-4" style="background: rgba(255, 255, 255, 0.9); border-radius: 20px;">
            <h2 style="color: #333;">Analizador de Mensajes</h2>
            <hr>
            <p style="color: #555;"><strong>Tu mensaje original era:</strong> "<?php echo $mensaje; ?>"</p>

            <div class="alert" style="background-color: #fff3cd; color: #856404; border: 1px solid #ffeeba; border-radius: 15px;">
                <p><strong>Gritando con emoción (upper):</strong> <?php echo $mayusculas; ?></p>
                <p><strong>Longitud del amor (strlen):</strong> Este mensaje tiene <?php echo $largo; ?> letras.</p>
                <p><strong>Mensaje optimista (replace):</strong> <?php echo $mensaje_limpio; ?></p>
            </div>

            <a href="index.php" class="btn btn-danger btn-lg w-100" style="border-radius: 50px;">
                Volver a intentar
            </a>
        </div>
    </div>
</body>
</html>