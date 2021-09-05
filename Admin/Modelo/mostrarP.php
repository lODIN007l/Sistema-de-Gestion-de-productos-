<?php
//cambiar el nombre d la  base d datos
$conexion = mysqli_connect('localhost', 'root', '', 'pescaderia');
$sql = "SELECT *from producto";
$result = mysqli_query($conexion, $sql);
while ($mostrar = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['descripcion'] ?></td>
        <td><?php echo $mostrar['tipo'] ?></td>
        <td><?php echo $mostrar['precio'] ?></td>
        <td><img style="height: 8em " src = "<?php echo $mostrar['url'] ?>"></td>
    </tr>
    <?php
}
?>