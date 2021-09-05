<?php
  $conexion = mysqli_connect('localhost', 'root', '', 'pescaderia');
  $idUsuario=$_REQUEST['nombre'];
  $sql= "DELETE from usuario WHERE nombre= '$idUsuario'";
  $sqr=mysqli_query($conexion,$sql);
 if($sqr)
 {   
     header ("location:../Vista/mostrarCli.php");
 }
 else{
     echo("error al eliminar");

 }
?>