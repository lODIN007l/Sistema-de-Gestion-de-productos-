<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios/Clientes</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <header style="background:linear-gradient(45deg,#87adfe,#ff77cd) ;" >
        <div   class="container-fluid">
            <div><h1 style="margin: left 20px; color:white; " >Usuarios/Clientes</h1></div>
            <div class="col-md-4"><br/>
            </div>
        </div>
    </header>
    
    <br/><br/>

    <div  class="container-fluid">
    <table border = 1 class="table table-striped table-hover">
        <thead class="table-dark">
            <td> NOMBRE </td>
            <td> CORREO </td>
            <td> CONTRASEÑA </td>
            <td> MODIFICAR</td>
            <td> ELIMINAR </td>
        </thead>
        <?php include("../Modelo/mostrarCli.php") ?>
    </table>
    </div>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>