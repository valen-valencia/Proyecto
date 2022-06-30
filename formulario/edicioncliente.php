<?php

    $conexion=mysqli_connect('localhost','root','','miscelaneabar');

$nombres = $_POST['nombre'];
$telefonos = $_POST['telefono'];
$direcciones = $_POST['direccion'];
$emails = $_POST['email'];
$contraseñas = $_POST['contraseña'];
$id = $_POST['id'];

$actualizar= "UPDATE clientes SET nombre_cli='$nombres',telefono_cli='$telefonos',direccion_cli='$direcciones',email_cli='$emails',contraseña_cli='$contraseñas' WHERE id_cli='$id'";

$result=mysqli_query($conexion, $actualizar);
 
if($result) {
echo"<script>alert('Se han actualizado los cambios correctamente'); window.location='informacion.php';</script>";
} else{
echo"<script>alert('No se pudo actualizar los datos'); window.history.go(-1);</script>";  
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/logo3.png" type="image/x-icon">
</head>
<body>
</body>
</html>