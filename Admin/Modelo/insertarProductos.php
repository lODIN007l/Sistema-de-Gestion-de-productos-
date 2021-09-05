<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'pescaderia');
    echo "Conexión fallida";

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $tipo = ($_POST['tipo']);
    $precio = ($_POST['precio']);
    $url = ($_POST['url']);

    $sql = "INSERT  into producto (nombre, descripcion, tipo, precio, url) values ('$nombre','$descripcion','$tipo', '$precio', '$url')";
    echo mysqli_query($conexion, $sql);
?>