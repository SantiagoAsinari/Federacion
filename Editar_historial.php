<?php

$conexion = new mysqli("localhost", "root", "", "federacion") or die("not connected".mysqli_connect_error());

//SI TIENE EL DATO OBLIGATORIO "DNI", ENTONCES QUE PROSIGA CON LA FUNCION (AGREGAR EL JUGADOR)

if (isset($_GET["id"])){

    $id = $_GET["id"];
    $DNI = $_GET["DNI"];
    $Fecha = $_GET["Fecha"];
    $Puesto = $_GET["Puesto"];
    $Club = $_GET["Club"];
    $Comentarios = $_GET["Comentarios"];

    $sql="UPDATE `historial` SET `DNI` = '$DNI', `Fecha` = '$Fecha', `Puesto` = '$Puesto', `Club` = '$Club', `Comentarios` = '$Comentarios' WHERE `historial`.`id` = $id;";
    $query=mysqli_query($conexion, $sql);

    if($query){
        echo"1 row updated";
    }else{
        echo mysqli_error($conexion);
    }
}

?>