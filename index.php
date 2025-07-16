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
    <p>&copy; 2025 Ritmo Urbano 🎶</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
