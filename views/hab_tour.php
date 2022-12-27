<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ricardo Sanchez">
    <title>Sistema de Reservas</title>

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

<!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

<!-- Custom styles for this template -->
<link href="views/css/galeria.css" rel="stylesheet">

  </head>
  <body>
<?php
if($id == 0){
  echo '

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Hotel Bosque de Reñaca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro_staff.php">Registro Staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ingreso_staff.php">Area Privada</a>
            </li>
          </ul>


          <a class="btn btn-outline-success" href="ingreso_visitante.php">Ingresar</a>
          <a class="btn btn-outline-success" href="registro_visitante.php">Registrarse</a>

        </div>
      </div>
    </nav>
  </header>
  ';
}else{

}

?>




<main>
<br><br>
  <div class="photo-gallery">
      <div class="container">
          <div class="intro">
              <h2 class="text-center"><?php echo $titulo ?></h2>
              <p class="text-center"><?php echo $mensaje ?></p>
<?php

if($id == 0){
}else{
  echo '<p class="text-center"><a class="btn btn-primary"
          href="reservas.php?rsrv=1&op='.$op.'&id='.$id.'">Seleccionar esta Habitación</a></p>';
}

?>
          </div>

          <div class="row photos">

          <?php
          if($fotos == null){
            echo "no hay fotos";
          }else{
          foreach ($fotos as $foto) {
            echo '<div class="col-sm-6 col-md-4 col-lg-3 item">'."\n";
            echo '<a href="' . $foto['url_img'].'" data-lightbox="photos">'."\n";
            echo '<img class="img-fluid" src="'. $foto['url_img'].'"></a>'."\n";
            echo "</div>\n";

          }}

          if($id == 0){
          }else{
            echo '<p class="text-center"><a class="btn btn-primary"
                    href="reservas.php?rsrv=1&op='.$op.'&id='.$id.'">Seleccionar esta Habitación</a></p>';
          }


          ?>





          </div>
      </div>
  </div>



  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021 Ricardo J. Sanchez Moreno &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

  </body>
</html>
