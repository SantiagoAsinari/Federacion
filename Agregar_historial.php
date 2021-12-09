<?php

$conexion = new mysqli("localhost", "root", "", "federacion") or die("not connected".mysqli_connect_error());

//SI TIENE EL DATO OBLIGATORIO "DNI", ENTONCES QUE PROSIGA CON LA FUNCION (AGREGAR EL JUGADOR)

if (isset($_GET["DNI"])){

    $DNI = $_GET["DNI"];
    $Fecha = $_GET["Fecha"];
    $Puesto = $_GET["Puesto"];
    $Club = $_GET["Club"];
    $Comentarios = $_GET["Comentarios"];

    $sql="INSERT INTO `historial` (`DNI`, `Fecha`, `Puesto`, `Club`, `Comentarios`) VALUES ('$DNI', '$Fecha', '$Puesto', '$Club', '$Comentarios');";
    $query=mysqli_query($conexion, $sql);

    if($query){
        echo"1 row inserted";
    }else{
        echo mysqli_error($conexion);
    }
}

?>