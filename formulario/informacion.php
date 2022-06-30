<?php

    $conexion=mysqli_connect('localhost','root','','miscelaneabar');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registros de clientes</title>
    <link rel="shortcut icon" href="img/logo3.png" type="image/x-icon">
   <link rel="stylesheet" href="../css/informacion.css">
</head>
<body>
    <img id="Img" src="img/fondo.jpg">
   

    

<br>

<table border="2" cellspacing="15" cellpadding="15">
   <div id="title"> <h1>Registro de clientes</h1> </div>
    

  
     
  
 
     
    <tr>
      <div><td class="cajaT">Nombre</td></div>
      <div><td class="cajaT">Telefono</td></div>
      <div><td class="cajaT">Direccion</td></div>
      <div><td class="cajaT">Email</td></div>
      <div><td class="cajaT">Contraseña</td></div>
      <div><td class="cajaT">Id</td></div>
      <div><div><td class="cajaT">Opciones</td></div>
      </tr>
     
        




<?php
$sql="SELECT * from clientes";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>



<tr>
<td class="cajaA"><?php echo $mostrar['nombre_cli'] ?></td>
<td class="cajaA"><?php echo $mostrar['telefono_cli'] ?></td>
<td class="cajaA"><?php echo $mostrar['direccion_cli'] ?></td>
<td class="cajaA"><?php echo $mostrar['email_cli'] ?></td>
<td class="cajaA"><?php echo $mostrar['contraseña_cli'] ?></td>
<td class="cajaA"><?php echo $mostrar['id_cli'] ?></td>
<td id="Delete"><a href="eliminar.php?
    nombre_cli=<?php echo $mostrar['nombre_cli'] ?>" > Eliminar</a></td>
    <td id="Edit"><a href="editar.php?id=<?php echo $mostrar['nombre_cli'] ?>"> Editar</a></td>
</form>
</tr>



<?php
}
?>
<td id="Back" ><a type="button" href="../index.html">Regresar</a></td>
</table> 

</body>
</html>
    
