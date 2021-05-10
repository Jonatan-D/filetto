<!DOCTYPE html>
<html>
<head>
  <title>Boostrap</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-dark">
  <div id="contenedor" class="container">
    <header id="cabecera" class="row ">

      <div id="caja-logo" class="d-flex justify-content-center">

        <!-- inicio carousel -->

        <div id="carousel-landing-page" class="carousel slide " data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel-landing-page" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel-landing-page" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel-landing-page" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="img/trabaja.png" class="d-block w-100 " alt="trabaja">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="img/Equipo1.png" class="d-block w-100 " alt="equipo1">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="img/Equipo2.png" class="d-block w-100" alt="Equipo2">
            </div>
          </div>
          <a class="carousel-control-prev" type="button" data-bs-target="#carousel-landing-page" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" type="button" data-bs-target="#carousel-landing-page" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
        <!-- fin carousel-->

      </div>
    </header>
    <section id="contenido" class="row">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/index.php">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">RR-HH</li>
        </ol>
      </nav>

      <div id="contenido1" class="col-md">
        <?php
        if (isset($_GET['ok'])) {
          echo '<p class="text-success text-center"><font size=6> <b>¡Hemos recibido su postulación correctamente!</b></font></p>';
        } else if (isset($_GET['error'])) {

          echo '<p class="text-danger"><font size=4><b>Tu DNI ya se encuentra en nuestra base de datos.</b></font></p>';
          include 'formu_postulacion.php';
        } else {
          include 'formu_postulacion.php';
        }
        ?>
      </div>
    </section>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>