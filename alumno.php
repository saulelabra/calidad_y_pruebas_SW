
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sistema para alumnos</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grid.css" rel="stylesheet">
  </head>

  <body>
      
      <?php
            error_reporting(E_ALL);
            ini_set('display_errors','1');
        
            $enlace= new mysqli ("10.109.32.4", "root", "admin", "calificaciones");
            if($enlace){
                //echo"ACK.<br>";
            }else{
                die("DROP");
            }
        
            $matricula = $_POST['matricula'];
            $password = $_POST['contraseña'];

            //Checar Login
            $resultado_query=mysqli_query ($enlace, "select matricula, contraseña from alumno where matricula like '%$matricula%' ;" );
            $row_asociativo_check = mysqli_fetch_assoc($resultado_query);

            if($matricula!=$row_asociativo_check['matricula'] || $password!=$row_asociativo_check['contraseña'] ){
                die("Error en el login");
            }
            
            
        
            $resultado_query=mysqli_query ($enlace, "select * from alumno where matricula like '%$matricula%' ;" );
            $row_asociativo = mysqli_fetch_assoc($resultado_query);
            
            $nombre=$row_asociativo['nombre'];
            $carrera=$row_asociativo['carrera'];
            $mail=$row_asociativo['correo'];
            $lastName=$row_asociativo['apellido'];
            //$pass=$row_asociativo['contraseña'];
            
            
            $resultado_tabla=mysqli_query ($enlace, "select matricula, materia_codigo_materia, puntaje_parcial1, puntaje_parcial2, puntaje_parcial3, nombre_materia from alumno join alumno_materia on alumno.matricula=alumno_materia.alumno_matricula join materia on materia.codigo_materia=alumno_materia.materia_codigo_materia where matricula like '%$matricula%';");
            $row_asociativo2 = mysqli_fetch_assoc($resultado_tabla);
      
            
        ?>
    <div class="container">
        <?php echo "<h1> Buenos días, ".$nombre."</h1>" ?>
        <?php echo "<h3>".$carrera."</h3>" ?>

      <h3>Tus resultados: </h3>
        
    <div class="row">
        <div class="col-3">Nombre de la materia</div>
        <div class="col-3">Calificación primer parcial</div>
        <div class="col-3">Calificación segundo parcial</div>
        <div class="col-3">Calificación final</div>
    </div>
        <?php
                do{
                    echo "<div class='row'>";
                    echo "<div class='col-3'>".$row_asociativo2['nombre_materia']."</div>";
                    echo "<div class='col-3'>".$row_asociativo2['puntaje_parcial1']."</div>";
                    echo "<div class='col-3'>".$row_asociativo2['puntaje_parcial2']."</div>";
                    echo "<div class='col-3'>".$row_asociativo2['puntaje_parcial3']."</div>";
                    
                    echo "</div>";
                }while ($row_asociativo2 = mysqli_fetch_assoc($resultado_tabla))
            ?>

        
    </div> <!-- /container -->
      
      
      
      <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
