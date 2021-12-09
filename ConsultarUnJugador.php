<?php

$conexion = new mysqli("localhost", "root", "", "federacion") or die("not connected".mysqli_connect_error());

$DNI = $_GET['DNI'];

$sql = "SELECT * FROM `jugadores` WHERE DNI = $DNI;";
    
$result=mysqli_query($conexion, $sql);

$jugador = array();
while ($row = mysqli_fetch_array($result)) {
    array_push($jugador, $row);
}

echo json_encode($jugador);

mysqli_free_result($result);
mysqli_close($conexion);

?>