<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Bucles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="text-center" style="background-color: #fff0f5;"> <div class="container mt-5">
        <h2>Resultado de tu Bucle:</h2>
        <p class="lead">Procesando la secuencia de felicidad...</p>
        
        <div class="row justify-content-center">
            <?php
            
                $cantidad = $_POST['cantidad'];
                for ($i = 1; $i <= $cantidad; $i++) {
                    echo "
                    <div class='col-auto mb-3'>
                        <div class='card' style='width:; border: none; background: none;'>
                            <img src='img/flores.png' class='card-img-top' alt='mimo' style='width:8rem; margin:auto;'>
                            <div class='card-body'>
                                <span class='badge rounded-pill bg-danger'>Flor<3 #$i （‐＾▽＾‐） </span>
                            </div>
                        </div>
                    </div>";
                }
            
            ?>
        </div>
        <br>
        <a href="index.php" class="btn btn-primary">Regresar al inicio</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>

</body>
</html>