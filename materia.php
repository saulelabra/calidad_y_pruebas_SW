
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sistema de materias</title>

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
      
      foreach ($_POST as $codigo => $val)
        {
        //echo htmlspecialchars($codigo . ': ' . $val) . "\n";
        }
            
            
        
            $resultado_query=mysqli_query ($enlace, "select * from materia where codigo_materia like '%$codigo%' ;" );
            $row_asociativo = mysqli_fetch_assoc($resultado_query);
            
            $nombre_materia=$row_asociativo['nombre_materia'];
            
            $resultado_tabla=mysqli_query ($enlace, "select nombre, apellido, matricula, puntaje_parcial1, puntaje_parcial2, puntaje_parcial3 from alumno join alumno_materia on alumno.matricula=alumno_materia.alumno_matricula join materia on materia.codigo_materia=alumno_materia.materia_codigo_materia where materia_codigo_materia like '%$codigo%'");
            $row_asociativo2 = mysqli_fetch_assoc($resultado_tabla);
      
            
        ?>
    <div class="container">
        <?php echo "<h1> Grupo de materia: ".$nombre_materia."</h1>" ?>
      <h3>Alumnos: </h3>
      <!--<p>There are five tiers to the Bootstrap grid system, one for each range of devices we support. Each tier starts at a minimum viewport size and automatically applies to the larger devices unless overridden.</p>-->
    
        <div class="row">
        <div class="col-3">Nombre</div>
        <div class="col-3">Apellido</div>
        <div class="col-2">Matrícula</div>
        <div class="col-1">P1</div>
        <div class="col-1">P2</div>
        <div class="col-1">Final</div>
        <div class="col-1">Cambiar</div>
      </div>
        
        <?php
                do{
                    echo "<form action='update.php' method='post'>";
                    echo "<div class='row'>";
                    echo "<div class='col-3'>".$row_asociativo2['nombre']."</div>";
                    echo "<div class='col-3'>".$row_asociativo2['apellido']."</div>";
                    echo "<div class='col-2'>".$row_asociativo2['matricula']."</div>";
                    
                    echo "<div class='col-1'><input type='text' name='p1' class='form-control' placeholder='".$row_asociativo2['puntaje_parcial1']."'></div>";
                    
                    echo "<div class='col-1'><input type='text' name='p2' class='form-control' placeholder='".$row_asociativo2['puntaje_parcial2']."'></div>";
                    
                    echo "<div class='col-1'><input type='text' name='p3' class='form-control' placeholder='".$row_asociativo2['puntaje_parcial3']."'></div>";
                    
                    echo "<div><input type='hidden'value='".$codigo."' name='codigo'></div>";
                    
                    echo "<div class='col-1'><input type='submit' class='btn btn-info' value='Actualizar' name='".$row_asociativo2['matricula']."'></div>";
                    echo "</div>";
                    echo "</form>";
                }while ($row_asociativo2 = mysqli_fetch_assoc($resultado_tabla))
            ?>

        <!--<form action="registrar.php"><input type='submit' class='btn btn-info' value='Registrar Alumno' ></form>-->        
    </div> <!-- /container -->
      
      
      
      <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

