<?php
    error_reporting(E_ALL);
            ini_set('display_errors','1');
        
            $enlace= new mysqli ("10.109.32.4", "root", "admin", "calificaciones");
            if($enlace){
                //echo"ACK.<br>";
            }else{
                die("DROP");
            }
    $cal1=$_POST['p1'];
    $cal2=$_POST['p2'];
    $cal3=$_POST['p3'];
    $codigo=$_POST['codigo'];

    foreach ($_POST as $name => $val)
    {
        //echo htmlspecialchars($name . ': ' . $val) . "\n";
    }
    
    $matricula=$name;

    if($cal1!=null){
        if(mysqli_query ($enlace, "UPDATE calificaciones.alumno_materia SET puntaje_parcial1='$cal1' WHERE alumno_matricula ='$matricula' and materia_codigo_materia='$codigo';
        ")){
            echo"Actualizado Primer Parcial -- ";
        }
    }

    if($cal2!=null){
        if(mysqli_query ($enlace, "UPDATE calificaciones.alumno_materia SET puntaje_parcial2='$cal2' WHERE alumno_matricula ='$matricula' and materia_codigo_materia='$codigo';
        ")){
            echo"Actualizado Segundo Parcial -- ";
        }
    }
    
    if($cal3!=null){
        if(mysqli_query ($enlace, "UPDATE calificaciones.alumno_materia SET puntaje_parcial3='$cal3' WHERE alumno_matricula ='$matricula' and materia_codigo_materia='$codigo';
        ")){
            echo"Actualizado Tercer Parcial";
        }
    }
    
    
?>
