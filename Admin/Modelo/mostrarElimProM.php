<?php
    $msg ='';
    $conexion= mysqli_connect('localhost','root','','pescaderia');
    if(!empty($_POST['nombre'])){
        $id=$_POST['nombre'];
        $del="DELETE from producto WHERE nombre= '$id'";
        $res=mysqli_query($conexion,$del);
    }

    $sql = "SELECT *from producto";
    $result = mysqli_query($conexion, $sql);
    while ($mostrar = mysqli_fetch_array($result)) {
        ?> 
        <form action="../Vista/mostrarElimProV.php" method="post">
            <tr>
                <td ><input type="text" name="nombre" id="nombre" value="<?php echo $mostrar['nombre'] ?>" readonly style="width: 100px;"></td>
                <td name="descripcion"><?php echo $mostrar["descripcion"] ?></td>
                <td name="tipo"><?php echo $mostrar['tipo'] ?></td>
                <td name="precio"><?php echo $mostrar['precio'] ?></td>
                <td name="url"><img style="height: 8em " src = "<?php echo $mostrar['url'] ?>"></td>
                <td><input type="submit" class="btn btn-danger" value="eliminar"></td>
            </tr>
            </form>
        <?php
    }
    if($msg!=''){
        ?>
        <p></p>
    <?php
    }
?>
