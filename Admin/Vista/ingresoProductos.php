<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso ed productos</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<header style="background:linear-gradient(45deg,#87adfe,#ff77cd) ;" >
        <div class="container-fluid">
            <div><a style="color: black" href="mostrar.php"><h1 style="color: white;" >Productos</h1></a></div>
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

    <form class="form-horizontal" id="frmAjax" method="POST">
        <div class="container-fluid" style="padding: 25px; width: 60%">
            <h1>Ingreso de productos</h1>
            <br/>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="nombre">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="descripcion">Descripción</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="tipo">Tipo</label>
                <div class="col-sm-10">
                    <select class="form-control" name="tipo" id="tipo">
                        <option>Pescado</option>
                        <option>Marisco</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="precio">Precio</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="precio" id="precio" placeholder="$" required min="1" max="100">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="url">Enlace de la imágen</label>
                <div class="col-sm-10">
                    <input type="url" class="form-control" name="url" id="url" placeholder="URL" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="btnGuardar">Guardar</button>
        </div>
    </form>
    
</body>
</html>

<script src="../Controlador/ingresoProductos.js"></script>