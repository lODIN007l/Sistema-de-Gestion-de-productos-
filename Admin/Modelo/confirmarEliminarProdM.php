<?php
    $conexion= mysqli_connect('localhost','root','','pescaderia');
    $id=$_REQUEST['id'];
    $sql="DELETE from producto WHERE id= $id";
    $sqr=mysqli_query($conexion,$sql);
    if($sqr)
    {
        header ("location:../Vista/mostrar.php");
    }
    else
    {
        echo("Error al eliminar");
    }
?>