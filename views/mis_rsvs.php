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

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">

<?php
if($reservaciones == null){
  echo '<h2>no hay datos </h2>';
}else {

 ?>

            <h2>Se han encontrado los siguientes datos: </h2>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Habitación</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Estado</th>
                </tr>
              </thead>
              <tbody>




    <?php

    foreach ($reservaciones as $fila) {

      echo '<tr><th scope="row">'.$fila['nombre']. "</th>\n <td>";
      switch ($fila['tipo']) {
        case 1:
          echo "Sencilla". "<br>\n";
          break;
        case 2:
            echo "Doble". "<br>\n";
          break;
          case 3:
            echo "Triple". "<br>\n";
            break;

      }
      echo "</td>\n<td>";


      switch ($fila['status']) {
        case 0:
          echo "Disponible". "\n";
          break;
        case 1:
          echo "Esperando pago". "\n";
          break;
        case 2:
          echo "Pendiente por confirmar". "\n";
          break;
        case 3:
          echo "Pago confirmado, Gracias". "\n";
          break;
        case 4:
          echo "Ocupada, disfrute su estadia...". "\n";
          break;
      }
      echo "</td>\n</tr>";
    }


     ?>



   </tbody>
 </table>

 <?php

    }

  ?>

    </div><!-- /.col-lg-4 -->


  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->





</div>




  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021 Ricardo J. Sanchez Moreno &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>





  </body>
</html>
