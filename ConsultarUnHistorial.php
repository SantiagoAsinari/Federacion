<?php

$conexion = new mysqli("localhost", "root", "", "federacion") or die("not connected".mysqli_connect_error());

$id = $_GET['id'];

$sql = "SELECT * FROM `historial` WHERE `id` = $id;";
    
$result=mysqli_query($conexion, $sql);

$historial = array();
while ($row = mysqli_fetch_array($result)) {
    array_push($historial, $row);
}

echo json_encode($historial);

mysqli_free_result($result);
mysqli_close($conexion);

?>