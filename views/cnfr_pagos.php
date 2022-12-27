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
      echo '<h3>no hay comprobantes<br>pendientes, por ahora...</h3>';

    }else{
      echo '<h3>pendientes para confirmar: </h3>

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Habitación</th>
                        <th scope="col">Nombre Visitante</th>
                        <th scope="col">Comprobante de Pago</th>
                      </tr>
                    </thead>
                    <tbody>';

    foreach ($PagosPendientes as $fila) {

      echo '<tr><th scope="row">'.$fila['fecha']. "</th>\n <td>";
      echo $fila['HABITACION']. " </td><td>";
      echo $fila['nombres']." ". $fila['apellido_pa']. " " .$fila['apellido_ma']." </td><td>";


      echo '<div class="row photos">';
      echo '<div class="col-sm-6 col-md-4 col-lg-3 item">'."\n";
      echo '<a href="' . $fila['url_img'].'" data-lightbox="photos">'."\n";
      echo '<img class="img-fluid" src="'. $fila['url_img'].'"></a>'."\n";
      echo "</div>\n";
      echo "</div>\n";




      echo "</td>\n<td>";

      echo '<p class="text-center"><a class="btn btn-primary btn-sm"
              href="cnfr_pagos.php?op=1&hab_id='.$fila['hab_id'].'&comp_id='.$fila['cmp_id'].'">Aceptar</a>';
      echo '<a class="btn btn-danger btn-sm"
              href="cnfr_pagos.php?op=2&hab_id='.$fila['hab_id'].'&comp_id='.$fila['cmp_id'].'">Rechazar</a></p>';

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
