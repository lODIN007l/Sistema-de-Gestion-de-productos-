<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'pescaderia');
    $nombre = $_POST['nombre'];
    $descripcion = $_POST["descripcion"];
    $tipo = $_POST['tipo'];
    $precio = $_POST['precio'];
    $url = $_POST['url'];

    $actualizar = "UPDATE producto SET descripcion='$descripcion', tipo='$tipo', precio='$precio', url='$url' WHERE nombre='$nombre'";
    $resultado = mysqli_query($conexion, $actualizar);
    if ($resultado) {
        echo "ok";
        header("location:../Vista/mostrar.php");
    } else {
        echo ("No se pudó editar");
    }
?>