<?php
$conexion = mysqli_connect('localhost', 'root', '', 'pescaderia');
$sql = "SELECT *from usuario";
$result = mysqli_query($conexion, $sql);
while ($mostrar = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['correo'] ?></td>
        <td><?php echo $mostrar['clave'] ?></td>
        <td><a href="../Vista/modificarCli.php?nombre=<?php echo $mostrar['nombre']?> " class="button">Editar</a></td>
        <td><a href="../Modelo/eliminarCli.php?nombre=<?php echo $mostrar['nombre']?>" class="button">Borrar</a></td>
    </tr>
    <?php
}
?>
