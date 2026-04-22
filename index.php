<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERIE I</title>
    

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<!-- -->
</head>
<body>

<div class="container-fluid mb-2">

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


    <div class="row d-flex justify-content-center cartas">
      <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card bg-none">
          <img src="img/descarga.jpg" class="card-img-top img-fluid" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title text-center">Condicionales</h5>
            <p class="card-text texto_cartas">Llena el formulario con tus datos, si eres la persona adecuada y tus datos coinciden. Saldra una pesetaña con algo especial :D</p>
          <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal1">Abrir formulario</a>
          </div>
        </div>    
        </div> 
      <div class="col-lg-3 col-md-4 col-sm-12 text-center">
        <div class="card bg-none">
          <img src="img/michu.png" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title text-center">Bucles</h5>
            <p class="card-text texto_cartas">Sera una secuencia repetitiva, hasta que los datos coincidan sea afirmativa, de lo contrario saldra algo.</p>

            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal2">Abrir formulario</a>
          </div>
        </div>       
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12 text-center">
        <div class="card bg-none">
          <img src="img/gatito.png" class="card-img-top img-fluid" alt="...">
          <div class="card-body ">
            <h5 class="card-title text-center">Funciones de texto</h5>
            <p class="card-text texto_cartas">Rellena el formulario con un texto y mira lo que pasara :D</p>
            <br>
            
            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal3">Abrir formulario</a>
          </div>
        </div>       
      </div>
      </div>
  
</div>
      <!-- modales -->
      <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Llena el formulario con tus datos (≧◡≦)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="condicional.php" method="POST">
          <div class="row g-3">
            <div class="col">
              <input type="text" name="nombre" class="form-control" placeholder="Escribe tu nombre :D" required>
            </div>
            <div class="col">
              <input type="text" name="apellido" class="form-control" placeholder="Escribe tu apellido u.u/" required>
            </div>
          </div>
          <br>
          <div class="row g-3">
            <div class="col">
              <input type="number" name="edad" class="form-control" placeholder="Escribe tu Edad :^)" required>
            </div>
            <div class="col">
              <select class="form-select" name="postre" required>
                <option selected disabled>Elige tu postre Fav :3 </option>
                <option value="1">Roles de canela bimbo</option>
                <option value="2">Anguila cocinada con pepinillos</option>
                <option value="3">Carpincho de chocolate</option>
              </select> 
            </div>
          </div>
          <br>
          <input type="submit" class="btn btn-danger w-100" value="Registrar">
        </form> 
      </div>
    </div>
  </div>
</div>

<!-- modal 2 -->

<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Llena el formulario con la cantidad de flores que te gustaria recibir ≧'◡'≦</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="bucle.php" method="POST">
          <div class="mb-3">
            <label class="form-label">¿Cuántas flores quieres ver hoy ? ʕ•́ᴥ•̀ʔっ♡ </label>
            <input type="number" name="cantidad" class="form-control" min="1" max="50" placeholder="Escribe cuantas quieres ver" required>
          </div>
          <input type="submit" class="btn btn-danger w-100" value="Generar cantidad de flores ≧◠ᴥ◠≦">
        </form> 
      </div>
    </div>
  </div>
</div> 

<!-- modal 3 -->

  
<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">Escribe como te fue hoy :D</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="funciones_texto.php" method="POST">
          <div class="mb-3">
            <label for="mensaje" class="form-label">Escribe aqui el mensaje: :3 :</label>
            <textarea name="mensaje" id="mensaje" class="form-control" rows="3" placeholder="Escribe u.u ... " required></textarea>
            <div class="form-text">Usaremos PHP para transformar y analizar tu texto, y darte algo bonito :D</div>
          </div>
          <input type="submit" class="btn btn-danger w-100" value="Enviar Mensaje  ≧◠ᴥ◠≦">
        </form> 
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