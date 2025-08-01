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
      text-align: center;
      color: #333;
    }

    .info {
      background: #fff;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
    }

    footer {
      background-color: #ffea7;
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Reguetón</a>
    </div>
  </nav>

  <h1>Estrellas del Reguetón</h1>

  <!-- Carrusel -->
  <div id="carouselRegueton" class="carousel slide container" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://via.placeholder.com/1200x500?text=Artista+1" class="d-block w-100" alt="Artista 1">
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1200x500?text=Artista+2" class="d-block w-100" alt="Artista 2">
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1200x500?text=Artista+3" class="d-block w-100" alt="Artista 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselRegueton" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselRegueton" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- Sección Info -->
  <div class="container mt-4">
    <div class="info">
      <h2>¿Qué es el reguetón?</h2>
      <p>El reguetón es un género musical que se originó en Puerto Rico en la década de 1990. Combina el reggae con ritmos latinos y letras urbanas.</p>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>© 2025 Música de Reguetón. Todos los derechos reservados.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>