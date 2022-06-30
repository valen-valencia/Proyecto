<?php

$id=$_GET['id'];

$editar= "SELECT * FROM clientes WHERE nombre_cli='$id'";

    $conexion=mysqli_connect('localhost','root','','miscelaneabar');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Actualizacion</title>
    <link rel="shortcut icon" href="img/logo3.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/informacion.css">
</head>
<body>
<img id="Img" src="img/fondo.jpg">

<br>

<table border="2" cellspacing="15" cellpadding="15">
<div id="title"><h1> Actualizacion Registro De Clientes</h1></div>
  
    
<tr>
<form action="edicioncliente.php" method="post">
<div><td class="cajaT">Nombre</td></div>
<div><td class="cajaT">Telefono</td></div>
<div><td class="cajaT">Direccion</td></div>
<div><td class="cajaT">Email</td></div>
<div><td class="cajaT">Contraseña</td></div>
<div><td class="cajaT">Id</td></div>
</tr>


<?php
$result=mysqli_query($conexion,$editar);
while($mostrar=mysqli_fetch_array($result)){
?>
<tr>
<td class="cajaA"><input type="text" value="<?php echo $mostrar['nombre_cli'] ?>" name="nombre"></td> 
<td class="cajaA"><input type="text" value="<?php echo $mostrar['telefono_cli'] ?>" name="telefono"></td> 
<td class="cajaA"><input type="text" value="<?php echo $mostrar['direccion_cli'] ?>" name="direccion"></td> 
<td class="cajaA"><input type="text" value="<?php echo $mostrar['email_cli'] ?>" name="email"></td> 
<td class="cajaA"><input type="password" value="<?php echo $mostrar['contraseña_cli'] ?>" name="contraseña"></td>
<td class="cajaA"><input type="hidden" value="<?php echo $mostrar['id_cli'] ?>" name="id"></td> 
<td id="toupdate"><input type="submit" value="Actualizar"></td>
</form>
</tr>



<?php
}
?>
<td id="Back" ><a type="button" href="../formulario/informacion.php">Regresar</a></td>
</table> 

</body>
</html>
    




