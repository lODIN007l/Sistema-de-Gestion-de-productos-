<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<header style="background:linear-gradient(45deg,#87adfe,#ff77cd) ;" >
        <div  class="container-fluid">
            <div><a style="color: white" href="mostrar.php"><h1 style="color: white;">Productos</h1></a></div>
            <div class="col-md-20"><br/>
                <a href="ingresoProductos.php" class="btn btn-primary btn-lg active" role="button">Ingresar productos</a>
                <a href="mostrarModProdV.php" class="btn btn-primary btn-lg active" role="button">Editar productos</a>
                <a href="mostrarElimProV.php" class="btn btn-primary btn-lg active" role="button">Eliminar producto</a>

                <a style="color: black" class="btn btn-link"><form action="../Modelo/buscarMostrarM.php" method="POST" class="form-inline">
                <input class="form-control mr-sm-2" type="text" placeholder="Nombre del producto" aria-label="Search" name="nombre">
                <button class="btn btn-primary btn-lg active" type="submit">Buscar</button>
                </form></a>
            </div>
        </div>
    </header>
    
    <br/><br/>

    <div class="container-fluid">
        <table border = 1 class="table table-striped table-hover">
            <thead class="table-dark">
                <td> NOMBRE </td>
                <td> DESCRIPCIÓN </td>
                <td> TIPO </td>
                <td> PRECIO </td>
                <td> IMÁGEN </td>
            </thead>
            <?php include("../Modelo/mostrarP.php") ?>
        </table>
    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>