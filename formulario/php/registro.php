<?php
include 'index.php';

$nombres = $_POST['nombre'];
$telefonos = $_POST['telefono'];
$direcciones = $_POST['direccion'];
$emails = $_POST['email'];
$contraseñas = $_POST['contraseña'];


$query = "INSERT INTO clientes(nombre_cli, telefono_cli, direccion_cli, email_cli, contraseña_cli) 
VALUES ('$nombres','$telefonos','$direcciones','$emails','$contraseñas')";



$verificar_correo = mysqli_query($conexion, "SELECT * FROM clientes WHERE email_cli = '$emails'");
if (mysqli_num_rows($verificar_correo) > 0){
    echo '<script>alert("Este correo ya esta registrado, intenta con otro diferente"); window.history.go(-1);</script>';
    exit;
}

$ejecutar=mysqli_query($conexion, $query);

if($ejecutar) {
echo '<script>alert("Te has registrado correctamente"); window.location="/miscelaneabarvalencia/index.html";</script>';
//  header("location: informacion.php");
} else{
echo '<script>alert("No se pudo registrar los datos"); window.history.go(-1);</script>';  
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








