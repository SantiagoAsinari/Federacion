<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","login");

$consulta="SELECT * FROM `usuarios` WHERE `usuario` = '$usuario' AND `contraseña` = '$contraseña';";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['rol_id']==1){ //administrador
    header("location:/jugadores_admin.html");

}else
if($filas['rol_id']==2){ //colaborador
    header("location:/jugadores.html");
}

else{
    ?>
    <h3 style="position: absolute; margin-left: 550px; margin-top: 10px; color: red">Error de autenticación</h3>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>