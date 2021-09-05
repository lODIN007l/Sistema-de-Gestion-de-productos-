<?php
$conexion = mysqli_connect('localhost', 'root', '', 'pescaderia');
$id=$_GET["nombre"];
$usuario="SELECT * FROM usuario WHERE nombre = '$id'";
$resultado=mysqli_query($conexion,$usuario);
?>
<!DOCTYPE html>
<html lang="es">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar datos Usuario</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/general.js"></script>
</head>
<body>
    <header style="background:linear-gradient(45deg,#87adfe,#ff77cd) ;" >
        <div class="container-fluid">
            <div class="col-md-8"><h1>Modificación de Datos</h1></div>
            <div class="col-md-4"><br/>
            </div>
        </div>
    </header>
    <br/><br/>

    <h1>DATOS DE LA PERSONA A EDITAR</h1>
    <div class="container-fluid">
    <table border = 1 class="table table-striped table-hover">
        <thead class="table-dark">
            <td> NOMBRE </td>
            <td> CORREO </td>
            <td> CONTRASEÑA </td>
            <td> MODIFICAR</td>
        </thead>
        <?php 
        while($mostrar= mysqli_fetch_array($resultado)){
            $nn=strval($mostrar['nombre']);
            ?>
            <form action="../Modelo/confModifCli.php" method="POST">
            <p> <?php echo $nn?></p>
            <tr>
                <td><input type="hidden" value= <?php echo $nn?>  name="nombre">
                <td><input type="email" value= <?php echo $mostrar['correo']?> name="correo"> 
                <td><input type="text" value= <?php echo $mostrar['clave']?> name="clave"> 
                <td><input type="submit" value="editar"></td>
            </td>
        </tr>
    </form>
    
 <?php

}
mysqli_free_result($resultado); ?>
    </table>
   
    </div>   
</body>
</html>
