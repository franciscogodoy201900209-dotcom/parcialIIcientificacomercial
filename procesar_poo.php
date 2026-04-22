<?php
class Flor {
    public $nombreFlor;
    public $color;
    public $precioUnitario;

    public function __construct($f, $c, $p) {
        $this->nombreFlor = $f;
        $this->color = $c;
        $this->precioUnitario = $p;
    }

    public function descripcionBase() {
        return "Has elegido " . $this->nombreFlor . " de color " . $this->color . ".";
    }
}

class Ramo extends Flor {
    public $cantidad;
    public $dedicatoria;

    public function __construct($f, $c, $p, $cant, $nota) {
        parent::__construct($f, $c, $p);
        $this->cantidad = $cant;
        $this->dedicatoria = $nota;
    }

    public function mensajeFinal() {
        return "Nota adjunta: '" . $this->dedicatoria . "'";
    }

    public function calcularTotal() {
        $total = $this->precioUnitario * $this->cantidad;
        return "El valor de este detalle es de: Q" . $total;
    }
}

    $detalle = new Ramo($_POST['flor'], $_POST['color'], $_POST['precio'], $_POST['cantidad'], $_POST['nota']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Romántico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body style="background: url('img/a.png') no-repeat center center/cover; min-height: 100vh;">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 card-resultado text-center">
                <h2 style="color: #fff;">¡Detalle Preparado! ✨ (✿◠‿◠) </h2>
                <hr>
                <div class="mensaje-original text-start">
                    <strong>Tipo de flor: </strong> <?php echo $detalle->descripcionBase(); ?>
                </div><br>
                <div class="mensaje-original text-start">
                    <strong>Nota adjuntada (❛‿❛✿̶̥̥)</strong> <?php echo $detalle->mensajeFinal(); ?>
                </div><br>
                <div class="alerta-personalizada">
                    <strong>Cálculo de Inversión (✿◠‿◠) ᕙ(^▿^-ᕙ):</strong><br>
                    <?php echo $detalle->calcularTotal(); ?>
                </div><br>
                <a href="POO.php" class="btn btn-warning mt-3">Crear otro ramo</a>
            </div>
        </div>
    </div>
</body>
</html>