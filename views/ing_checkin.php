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
    <link href="views/css/galeria.css" rel="stylesheet">

  </head>
  <body>

<main>

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">


    <?php
    if($PagosPendientes == null ){
      echo '<h3>no hay Habitaciones<br>en espera, por ahora...</h3>';

    }else{
      echo '<h3>En espera de Visitante: </h3><br><p>Recuerde solicitar alguna indentificación al visitante antes de ingresar</p>

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Habitación</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Nombre Visitante</th>
                        <th scope="col">Correo</th>

                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>';

    foreach ($PagosPendientes as $fila) {

      echo '<tr><th scope="row">'.$fila['nombre']. "</th>\n <td>";
      switch ($fila['tipo']) {
        case 1:
          echo "Sencilla". "\n";
          break;
        case 2:
            echo "Doble". "\n";
          break;
          case 3:
            echo "Triple". "\n";
            break;

      }
      echo "</th>\n <td>";
      echo $fila['nombres']." ". $fila['apellido_pa']. " " .$fila['apellido_ma']." </td><td>";
      echo $fila['correo']. " </td><td>";


      echo '<p class="text-center"><a class="btn btn-primary btn-sm"
              href="ing_checkin.php?op=1&hab_id='.$fila['hab_id'].'">Ingresar</a></p>';


      echo "</td>\n</tr>";
    }
  }


     ?>



   </tbody>
 </table>

    </div><!-- /.col-lg-4 -->


  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->





</div>




  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021 Ricardo J. Sanchez Moreno &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</main>





  </body>
</html>
