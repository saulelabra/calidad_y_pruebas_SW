
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sistema Alumnos</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="alumno.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Sistema Alumnos</h1>
      <label for="inputEmail" class="sr-only">Matricula</label>
      <input class="form-control" placeholder="Matricula" required autofocus name="matricula">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="contraseña">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Vengo seguido
        </label>
      </div>
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Entrar">
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
      
      <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      
  </body>
    
    
</html>
