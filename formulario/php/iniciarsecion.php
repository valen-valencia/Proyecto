<?php
include 'index.php';

$emails = $_POST['email'];
$contraseñas = $_POST['contraseña'];

$conexion=mysqli_connect("localhost", "root", "", "miscelaneabar");
$consultas="SELECT * FROM clientes WHERE email_cli='$emails' and contraseña_cli='$contraseñas'";
$resultados=mysqli_query($conexion, $consultas);

$filas=mysqli_num_rows($resultados);

if ($filas>0) {
    header("location:index.html");
}
else{
    echo "Error al iniciar sesion, intente nuevamente";
}
mysqli_free_result($resultados);
mysqli_close($conexion);