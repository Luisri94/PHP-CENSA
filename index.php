<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Música de Reguetón</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #fdf3f3;
      font-family: sans-serif;
    }
    h1 {
      text-align: center;
      margin: 20px;
      color: #333;
    }
    .info {
      background: #fff;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
    }
    footer {
      background-color: #ffeaa7;
      text-align: center;
      padding: 10px;
      margin-top: 20px;
    }
    .carousel-inner img {
      width: 100%;
      height: 500px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Reguetón</a>
    </div>
  </nav>

  <h1>Estrellas del Reguetón</h1>

  <!-- Carrusel -->
  <div id="carruselRegueton" class="carousel slide container" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="badbunny.jpg" class="d-block w-100" alt="Bad Bunny" />
      </div>
      <div class="carousel-item">
        <img src="karolg.jpg" class="d-block w-100" alt="Karol G" />
      </div>
      <div class="carousel-item">
        <img src="daddyyankee.jpg" class="d-block w-100" alt="Daddy Yankee" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carruselRegueton" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carruselRegueton" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>


<!-- Button trigger modal -->
<div class = "col text-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <table class="table table-dark table-striped-columns">

<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>


    </tr>
  </thead>
<?php
include_once "Controlador/conexion.php";
$conexion = new Conexion();
$conexion = $conexion->conectar();
if ($conexion){
  $sql = "SELECT * FROM registropersonas";
  $consulta = $conexion-> prepare($sql);
  $consulta->execute();
  $i = 0;
  while($fila=$consulta -> fetch(PDO::FETCH_ASSOC )){
   $i +=1; 
  
?>  

  
 <tbody>
    <tr>
    <th scope="row">$1</th>
    <td><?php echo $fila["Nombre"]; ?></td>
	  <td><?php echo $fila["Apellido"]; ?></td>
	  <td><?php echo $fila["Edad"]; ?></td>
	  <td><?php echo $fila["Correo"]; ?></td>
	  <td><?php echo $fila["Telefono"]; ?></td>
	  <td></td>
	  <td></td>
     
    </tr>
    
  </tbody>
  <?php
  }}
  else {
    echo"Error al conectar a la base de datos.";
  }

  ?>
</table>
      
  </div>
 


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


  <!-- Información principal -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-8">
        <h2>J Balvin</h2>
        <img src="jbalvin.jpg" alt="J Balvin" class="img-fluid"/>
        <p>Uno de los artistas más influyentes del género urbano a nivel mundial.</p>
      </div>
      <div class="col-md-4">
        <h2>Natti Natasha</h2>
        <img src="natti.jpg" alt="Natti Natasha" class="img-fluid"/>
        <p>Reconocida cantante dominicana del reguetón y pop latino.</p>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-6 info">
        <h4>¿Qué es el reguetón?</h4>
        <p>Género musical con raíces en el reggae, hip hop y ritmos latinos, nacido en Puerto Rico.</p>
      </div>
      <div class="col-md-6 info">
        <h4>¿Por qué escucharlo?</h4>
        <p>Es pegajoso, bailable y expresa la cultura urbana contemporánea.</p>
      </div>
    </div>
  </div>

  <!-- Tabla -->
  <div class="container mt-3">
    <h4 class="text-center">Artistas Populares</h4>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>País</th>
          <th>Canción destacada</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Bad Bunny</td>
          <td>Puerto Rico</td>
          <td>Tití me preguntó</td>
        </tr>
        <tr>
          <td>Karol G</td>
          <td>Colombia</td>
          <td>Provenza</td>
        </tr>
        <tr>
          <td>Daddy Yankee</td>
          <td>Puerto Rico</td>
          <td>Gasolina</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Formulario -->
  <form action="Controlador/registro.php" method="POST" class="container d-flex justify-content-center align-items-center" style="height: 85vh;">
    <div class="col-4">
      <div class="mb-2">
        <input type="text" class="form-control" placeholder="Nombre" name="nombre" />
      </div>
      <div class="mb-2">
        <input type="text" class="form-control" placeholder="Apellido" name="apellido" />
      </div>
      <div class="mb-2">
        <input type="text" class="form-control" placeholder="Nro. Documento" name="id" />
      </div>
      <div class="mb-2">
        <input type="email" class="form-control" placeholder="Correo electrónico" name="correo" />
      </div>
      <div class="mb-2">
        <input type="number" class="form-control" placeholder="Edad" name="edad" />
      </div>
      <div class="mb-2">
        <input type="text" class="form-control" placeholder="Teléfono" name="tel" />
      </div>
      <button type="submit" class="btn btn-danger">Suscribirse</button>
    </div>
  </form>

  <!-- Footer -->
<footer>
    <p>&copy; 2025 Animales Raros 🐾</p>
  </footer>
<!-- Modal genérico -->
<div class="modal fade" id="mensajeModal" tabindex="-1" aria-labelledby="mensajeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mensajeModalLabel">Resultado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body" id="mensajeTexto">
        <!-- Aquí va el mensaje dinámico -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/modal.js"></script>
</body>
</html>
