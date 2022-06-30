
<?php

    $conexion=mysqli_connect('localhost','root','','miscelaneabar');
  
    $id=$_GET['nombre_cli'];

$eliminar= "DELETE FROM clientes WHERE  nombre_cli='$id'";

$result=mysqli_query($conexion,$eliminar);


if($result) {
    echo"<script>alert('Se ha eliminado correctamente'); window.location='informacion.php';</script>";
    } else{
    echo"<script>alert('No se pudo eliminar el dato'); window.history.go(-1);</script>";  
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
