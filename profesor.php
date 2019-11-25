
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
            $resultado_query=mysqli_query ($enlace, "select matricula, contraseña from profesor where matricula like '%$matricula%' ;" );
            $row_asociativo_check = mysqli_fetch_assoc($resultado_query);

            if($matricula!=$row_asociativo_check['matricula'] || $password!=$row_asociativo_check['contraseña'] ){
                die("Error en el login");
            }

            
            //Nombre
            $resultado_query=mysqli_query ($enlace, "select * from profesor where matricula like '%$matricula%' ;" );
            $row_asociativo = mysqli_fetch_assoc($resultado_query);

           
            
            $nombre=$row_asociativo['nombre'];
            $mail=$row_asociativo['correo'];
            $lastName=$row_asociativo['apellido'];
      

            
            
            $resultado_tabla=mysqli_query ($enlace, "select nombre_materia, codigo_materia, grupo from materia where profesor_matricula like '%$matricula%';");
            $row_asociativo2 = mysqli_fetch_assoc($resultado_tabla);
      
      
            //For Materias, Join, En cada ciclo una nueva class row y cada dic col-3 con los datos del query
            //select matricula, materia_codigo_materia, puntaje_parcial1, puntaje_parcial2, puntaje_parcial3 from alumno join alumno_materia where matricula like 'A08769234';
            
            //select nombre_materia, codigo_materia, grupo from materia where profesor_matricula like '0976549';
            
        ?>
    <div class="container">
        <?php echo "<h1> Buenos días, Prof. ".$lastName."</h1>" ?>
      <h3>Sus grupos: </h3>
      <!--<p>There are five tiers to the Bootstrap grid system, one for each range of devices we support. Each tier starts at a minimum viewport size and automatically applies to the larger devices unless overridden.</p>-->
        
    <div class="row">
        <div class="col-3">Nombre de la materia</div>
        <div class="col-3">Código</div>
        <div class="col-3">Grupo</div>
        <div class="col-3"></div>
    </div>
        
        <?php
                do{
                    echo "<form action='materia.php' method='post'>";
                    echo "<div class='row'>";
                    echo "<div class='col-3'>".$row_asociativo2['nombre_materia']."</div>";
                    echo "<div class='col-3'>".$row_asociativo2['codigo_materia']."</div>";
                    echo "<div class='col-3'>".$row_asociativo2['grupo']."</div>";
                    echo "<div class='col-3'><input type='submit' class='btn btn-info' value='Ver Grupo' name='".$row_asociativo2['codigo_materia']."'></div>";
                    echo "</div>";
                    echo "</form>";
                }while ($row_asociativo2 = mysqli_fetch_assoc($resultado_tabla))
            ?>

        
    </div> <!-- /container -->
      
      
      
      <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
