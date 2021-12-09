<?php

$conexion = new mysqli("localhost", "root", "", "federacion") or die("not connected".mysqli_connect_error());

//SI TIENE EL DATO OBLIGATORIO "DNI", ENTONCES QUE PROSIGA CON LA FUNCION (AGREGAR EL JUGADOR)

if (isset($_GET["DNI"])){

    $DNI = $_GET["DNI"];
    $Nombre = $_GET["Nombre"];
    $Nacimiento = $_GET["Nacimiento"];
    $Categoria = $_GET["Categoria"];
    $Sexo = $_GET["Sexo"];
    $Puntos = $_GET["Puntos"];

    $sql="UPDATE `jugadores` SET `Nombre` = '$Nombre', `Nacimiento` = '$Nacimiento', `Categoria` = '$Categoria', `Sexo` = '$Sexo', `Puntos` = '$Puntos' WHERE `jugadores`.`DNI` = '$DNI';";
    $query=mysqli_query($conexion, $sql);

    if($query){
        echo"1 row updated";
    }else{
        echo mysqli_error($conexion);
    }
}

?>