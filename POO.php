<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERIE II</title>
    

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<!-- -->
</head>
<body>

<div class="container-fluid">

  <div class="row">
    <div class="col-lg-2 col-md-4 col-sm-12 text-center">
      <img src="img/usac.png" alt="" class="rounded img-fluid d-block mx-auto mx-md-0" style="width:200px; height:200px;">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 text-lg-start text-sm-center">
      <p class="titulo">UNIVERSIDAD SAN CARLOS DE GUATEMALA -USAC-</p>
      <p class="titulo">ESCUELA DE PROFESORES DE ENSEÑANZA MEDIA -EFPEM-</p>
      <p class="titulo">PROFESORADO EN COMPUTACION EN INFORMATICA -PEM-</p>
    </div>
        <div class="col-lg-2 col-md-4 col-sm-12 text-center">
      <img src="img/efpem.png" alt="" class="rounded img-fluid d-block mx-auto mx-md-0" style="width:250px; height:200px;">
    </div>
      <div class="col-lg-4 col-md-12 col-sm-12 text-md-center text-lg-start">
      <p class="lead">Creado Por:</p>
      <p class="lead">Francisco Javier Godoy Espinoza :D </p>
      <p class="lead">Carné: 201900209</p>
      </div>
    
   <!-- <div class="col-12">  
      <img src="img/usac.png" alt="" class="rounded  float-start" style="width:200px; height:200px;">
      <img src="img/efpem.png" alt="" class="rounded float-end" style="width:250px; height:200px;">
    </div>-->
  </div>
   <div class="row">
      <div class="col-12">  
        <nav class="navbar navbar-expand-lg bg-none">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">PARCIAL II Programacion cientifica comercial</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php">SERIE I</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="POO.php">SERIE II</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>


   <div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card shadow-lg" style="background: rgba(255, 255, 255, 0.96); border-radius: 20px; border: none;">
            <div class="card-body p-5">
                <h2 class="text-center mb-4" style="color: #d63384; font-weight: 700;">Compra de flores </h2>
                
                <form action="procesar_poo.php" method="POST">
                    <h5 style="color: #6c757d; font-weight: 600; border-bottom: 2px solid #f8d7da; padding-bottom: 5px;"> Flor</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-4"><input type="text" name="flor" class="form-control" placeholder="Tipo de Flor" required></div>
                        <div class="col-md-4"><input type="text" name="color" class="form-control" placeholder="Color" required></div>
                        <div class="col-md-4"><input type="number" name="precio" class="form-control" placeholder="Precio unitario" required></div>
                    </div>

                    <h5 style="color: #6c757d; font-weight: 600; border-bottom: 2px solid #f8d7da; padding-bottom: 5px;">Ramo de flores</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-4"><input type="number" name="cantidad" class="form-control" placeholder="Cantidad" required></div>
                        <div class="col-md-8"><input type="text" name="nota" class="form-control" placeholder="Dedicatoria especial" required></div>
                    </div>

                    <button type="submit" class="btn w-100" style="background: linear-gradient(135deg, #ff9a9e, #fad0c4); color: #d63384; border-radius: 30px; padding: 12px; font-weight: bold; border: 1px solid #ff9a9e;">Enviar Detalle</button>
                </form>
            </div>
        </div>
    </div>
</div>



  </div>


<!-- scripts -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
<!-- -->
</body>
</html>