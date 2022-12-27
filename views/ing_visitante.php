<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ricardo Sanchez">

    <title>Ingreso Visitantes</title>




    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="views\css\ingreso.css" rel="stylesheet">
  </head>
  <body class="text-center">

<main class="form-signin">
  <form action="ingreso_visitante.php?op=1" method="post">
    <img class="mb-4" src="views\img\logo_hotel.jpg" alt="">
    <h1 class="h3 mb-3 fw-normal">Bienvenido Identifiquese</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput"
          placeholder="name@example.com" value="<?php echo $email; ?>" name="email" required>
      <label for="floatingInput">Correo electrónico</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword"
          placeholder="Password" name="clave" value="<?php echo $clave; ?>" required>
      <label for="floatingPassword">Clave</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="T" name="recordar" <?php echo ( $recordar=="T" ? "checked" : "" )?> > Recuerdame
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
    <p class="mt-5 mb-3 text-muted">&copy;  Ricardo Sanchez – 2021</p>
  </form>
</main>



  </body>
</html>
