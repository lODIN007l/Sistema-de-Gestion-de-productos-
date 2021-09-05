<?php
$conexion = mysqli_connect('localhost', 'root', '', 'pescaderia');
$idUsuario=$_POST['nombre'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];
$actualizar ="UPDATE usuario SET nombre='$idUsuario', correo='$correo',clave='$clave' WHERE nombre='$idUsuario'";
$resultado=mysqli_query($conexion,$actualizar);
if($resultado)
 {   
     echo "ok";
     header ("location:../Vista/mostrarCli.php");
 }
 else{
     echo("no se pudo insertar");

 }
?>
