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

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Hotel Bosque de Reñaca</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
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

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" >
      <div class="carousel-item active">

        <img class="bd-placeholder-img" src="views\img\patiohotel.jpg" width="100%" height="100%">

        <div class="container">
          <div class="carousel-caption text-start">

            <h1>Hermosos Espacios Verdes</h1>

            <p>Pasa un tiempo interesante con tus seres queridos o ven a vacacionar a nuestras instalaciones.</p>
            <p><a class="btn btn-lg btn-primary" href="registro_visitante.php">Crea tu Cuenta</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" src="views\img\resthotel.jpg" width="100%" height="100%">

        <div class="container">
          <div class="carousel-caption" >

            <h1>Nuestras habitaciones incluyen Desayuno.</h1>
            <p>Puedes conocer nuestra hermosa cafeteria y disfrutar de un café o compartir la once con tu familia o amigos.</p>
            <p><a class="btn btn-lg btn-primary" href="registro_visitante.php">Crea tu Cuenta</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" src="views\img\entretenimento.jpg" width="100%" height="100%">

        <div class="container">
          <div class="carousel-caption text-end"   >

            <h1>Con tu Visita, el entretenimiento está garantizado.</h1>
            <p>celebra, comparte y festeja en nuestras instalaciones, el entretemiento corre por nuestra cuenta...</p>
            <p><a class="btn btn-lg btn-primary" href="registro_visitante.php">Crea tu Cuenta</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">

        <img class="placeholder-img rounded-circle" src="views\img\habsencilla.jpg" width="140" height="140">

        <h2>Sencilla</h2>
        <p>La habitacion sencilla esta equipada para recibir una pareja o un grupo pequeño, tiene las comodidades necesarias para que pueda disfrutar su visita.</p>
        <p><a class="btn btn-secondary" href="hab_tour.php?op=1">Ver más detalles</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">

        <img class="placeholder-img rounded-circle" src="views\img\habdoble.jpg" width="140" height="140">


        <h2>Doble</h2>
        <p>Pensada para grupos un poco mas grandes hasta 2 personas, con todas las comodidades necesarias para que pueda disfrutar su visita. </p>
        <p><a class="btn btn-secondary" href="hab_tour.php?op=2">Ver más detalles</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="placeholder-img rounded-circle" src="views\img\habtriple.jpg" width="140" height="140">

        <h2>Triple</h2>
        <p>Pensada para grupos de 3 o 4 personas, con todas las comodidades necesarias para que pueda disfrutar su visita.</p>
        <p><a class="btn btn-secondary" href="hab_tour.php?op=3">Ver más detalles</a></p>
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


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021 Ricardo J. Sanchez Moreno &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>





  </body>
</html>
