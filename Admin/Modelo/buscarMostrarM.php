<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    
    <title>Datos Buscado</title>
</head>

<body>
    <header style="background:linear-gradient(45deg,#87adfe,#ff77cd) ;" >
            <div class="container-fluid">
                <div><a style="color: white;" href="../Vista/mostrar.php"><h1>Productos</h1></a></div>
                <div class="col-md-20"><br/>
                    <a href="../Vista/ingresoProductos.php" class="btn btn-primary btn-lg active" role="button">Ingresar productos</a>
                    <a href="../Vista/mostrarModProdV.php" class="btn btn-primary btn-lg active" role="button">Editar productos</a>
                    <a href="../Vista/mostrarElimProV.php" class="btn btn-primary btn-lg active" role="button">Eliminar producto</a>
                    <a class="btn btn-link"><form action="../Modelo/buscarMostrarM.php" method="POST" class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Nombre del producto" aria-label="Search" name="nombre">
                    <button class="btn btn-primary btn-lg active" type="submit">Buscar</button>
                    </form></a>
                </div>
            </div>
        </header>
    
    <div class="container-fluid">
    <h1>Datos del producto buscado</h1><br/>
        <table border = 1 class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                <th> NOMBRE </th>
                <th> DESCRIPCIÓN </th>
                <th> TIPO </th>
                <th> PRECIO </th>
                <th> IMÁGEN </th>
                </tr>
            
            <?php
    $conexion = mysqli_connect('localhost','root','','pescaderia');
    $nombre=$_POST['nombre'];
    $usuario="SELECT *FROM producto WHERE nombre = '$nombre'";
    $resultado= mysqli_query($conexion,$usuario);
    while($mostrar= mysqli_fetch_array($resultado)){
        ?>
        <div class="container-fluid">
            
                <tr>
                <td><?php echo $mostrar['nombre']?></td>
                <td><?php echo $mostrar['descripcion']?></td>
                <td><?php echo $mostrar['tipo']?></td>
                <td><?php echo $mostrar['precio']?></td>
                <td><img style="height: 8em " src = "<?php echo $mostrar['url'] ?>"></td>
                </tr>
            </thead>
            </table>

        </div>
    <?php
    }
    ?>
    </div>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
</body>
</html>