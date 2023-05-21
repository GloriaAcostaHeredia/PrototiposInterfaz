<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

  <title>Iniciar Sesión</title>
  <link rel="icon" href="images/logo.png">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <!-- Start navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light bg-light">
    <a class="navbar-brand">
      <img src="images/logo.png" width="50" height="50" class="d-inline-block" alt=""> Sapori d'Italia
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Volver</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End Navigation Bar -->

  <!-- Start of Login -->
  <div class="container">
    <div class="row">
      <div class="col navMenu">
        <h2 class="text-center">~ Iniciar Sesión ~</h2>
      </div>
    </div>
    <br>
    <div class="row bg-light">
      <div class="col">
        <form action="dbconvecter.php" method="POST">
          <div class="form-group col-12">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
          </div>
          <div class="form-group col-12">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="Contraseña">
          </div>
          <div class="row">
            <div class="col-md-4 offset-md-4">
              <button type="submit" class="btn btn-secondary btn-block">Vamos!</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col navMenu">
        <p class="text-center text-danger font-weight-bold">Inicio de sesión incorrecto</p>
      </div>
    </div>
  </div>
  <!-- End of Login -->
</body>
</html>
