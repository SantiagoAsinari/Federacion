<?php

$conexion = new mysqli("localhost", "root", "", "federacion") or die("not connected".mysqli_connect_error());

$sql = "SELECT * FROM `jugadores` INNER JOIN categorias ON jugadores.Categoria = categorias.id_categoria WHERE Nacimiento BETWEEN '1955-01-01' AND '2007-01-01';";

$result=mysqli_query($conexion, $sql);

$jugador = array();
while ($row = mysqli_fetch_array($result)) {
    array_push($jugador, $row);
}

echo json_encode($jugador);

mysqli_free_result($result);
mysqli_close($conexion);

?>