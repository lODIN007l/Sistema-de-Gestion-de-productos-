<?php
$conexion = mysqli_connect('localhost', 'root', '', 'pescaderia');
$nombre = $_GET['nombre'];
$usuario = "SELECT * from producto WHERE nombre='$nombre'";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Editar productos</title>
</head>
<body>
        <br/>    
        <h1>Modificación de datos</h1>
        <br/>
        
        <div class="container-fluid">
            <table border = 1 class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th> NOMBRE </th>
                        <th> DESCRIPCIÓN </th>
                        <th> PRECIO </th>
                        <th> TIPO </th>
                        <th> IMÁGEN </th>
                        <th> EDITAR </th>
                    </tr>
</body>
</html>

<?php
    $resultado = mysqli_query($conexion, $usuario);
    while ($mostrar = mysqli_fetch_array($resultado)) {
        ?>
        <br/>
        <p><?php echo $mostrar['nombre'] ?></p>
        
        <form action="../Modelo/procesarModificarProducto.php" method="POST">
                <tr>
                    <td> <input type="text" value= <?php echo $mostrar['nombre'] ?> name="nombre" style="width: 100px;" readonly> </td>
                    <td> <input type="text" value= <?php echo $mostrar["descripcion"] ?>  name="descripcion" required> </td>
                    <td> <input type="number" step="any" value= <?php echo $mostrar['precio'] ?> style="width: 100px;" name="precio" required> </td>
                    <td>
                        <select value= <?php echo $mostrar['tipo'] ?> name="tipo">
                            <option>Pescado</option>
                            <option>Marisco</option>
                        </select>
                    </td>
                    <td> <input type="text" value= <?php echo $mostrar['url'] ?> name="url"> </td>
                    <td> <button type="submit" class="btn btn-warning" value="Editar">Editar</button></td>
                </tr>
                </form>
                </thead>
            </table>
        </div>
<?php
    }
    mysqli_free_result($resultado);
?>
