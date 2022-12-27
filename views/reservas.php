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
<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" ></script>
    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="views/css/carousel.css" rel="stylesheet">
  </head>
  <body>

<main>


<?php
if($tipo == 0){
?>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">

        <img class="placeholder-img rounded-circle" src="views\img\habsencilla.jpg" width="140" height="140">

        <h2>Sencilla, habitaciones disponibles: <?php echo $sencilla_count?></h2>
        <p>La habitacion sencilla esta equipada para recibir una pareja o un grupo pequeño, tiene las comodidades necesarias para que pueda disfrutar su visita.</p>
        <p><a class="btn btn-primary"
                href="hab_tour.php?op=1&id=<?php echo $id ?>">Seleccionar esta Habitación</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">

        <img class="placeholder-img rounded-circle" src="views\img\habdoble.jpg" width="140" height="140">


        <h2>Doble, habitaciones disponibles: <?php echo $doble_count?></h2>
        <p>Pensada para grupos un poco mas grandes hasta 2 personas, con todas las comodidades necesarias para que pueda disfrutar su visita. </p>
        <p><a class="btn btn-primary"
                href="hab_tour.php?op=2&id=<?php echo $id ?>">Seleccionar esta Habitación</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="placeholder-img rounded-circle" src="views\img\habtriple.jpg" width="140" height="140">

        <h2>Triple, habitaciones disponibles: <?php echo $triple_count?></h2>
        <p>Pensada para grupos de 3 o 4 personas, con todas las comodidades necesarias para que pueda disfrutar su visita.</p>
        <p><a class="btn btn-primary"
                href="hab_tour.php?op=3&id=<?php echo $id ?>">Seleccionar esta Habitación</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Si nos visitas durante el verano. <span class="text-muted">te invitamos a disfrutar de nuestras refrescantes áreas verdes.</span></h2>
        <p class="lead">Un lugar ideal para compartir con tu familia o amigos, completamente equipado e ideal para niños pequeños.</p>
      </div>
      <div class="col-md-5">
        <img src="views\img\piscina_exterior.jpg"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Ahora si tu visita es durante el invierno <span class="text-muted">puedes disfrutar de nuestras comodas piscinas temperadas.</span></h2>
        <p class="lead">un hermoso lugar un poco mas calido e intimo para compartir con esa persona especial</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="views\img\piscina_temperada.jpg"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Y Finalmente, nuestro buffet <span class="text-muted">donde las delicias de nuestro Cheff maravillaran tus sentidos.</span></h2>
        <p class="lead">Nuestros comedores ofrecen una experiencia para todos los sentidos, ven a compartir con nosotros.</p>
      </div>
      <div class="col-md-5">
        <img src="views\img\sala_restaurant.jpg"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
<<?php
}else{
?>

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">

      <img class="placeholder-img rounded-circle" src="views\img\gracias.jpg" width="260" height="260">

      <h2>Se le ha asignado la habitacion: <?php echo $nombre_hab?></h2>

    </div><!-- /.col-lg-4 -->


  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->





</div>



<?php
}
 ?>

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021 Ricardo J. Sanchez Moreno &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>





  </body>
</html>
