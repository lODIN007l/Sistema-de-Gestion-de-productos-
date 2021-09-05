<?php
    session_start();
    
    require '../Pescaderia/Modelo/database.php';

    if(isset($_SESSION['nombre'])){
        $records = $conn->prepare('SELECT * FROM usuario WHERE nombre=:nombre');
        $records->bindParam(':nombre',$_SESSION['nombre']);
        $records->execute();
        $result = $records->fetch(PDO::FETCH_ASSOC);
        $usuario = null;

        if(count($result)>0){
            $usuario = $result;
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Aplicaciones</title>
    <link rel="stylesheet" href="../Pescaderia/estiloPaginaPrincipal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
  <div class="contenidoPrincipal">
    <div class="barranavegacion">
        <img src="../Pescaderia/Imagenes/logo3.png" class="logoEmpresa"  alt="">
        <nav>
            <ul>
                <li><a href="../Pescaderia/index.php">Inicio</a></li>
                <li><a href="../Pescaderia/Vista/productos.php">Productos</a></li>
                
            </ul>
            
        </nav>
        <?php if(!empty($usuario)): ?>
        <?= $usuario['nombre'] ?>
            
            <a style="margin-left:15px;" class="botonlogin" href="../Pescaderia/Vista/logout.php">Cerrar Sesion</a>
            
            <?php 
                include 'Vista/agregar_al_carrito.php';

            ?>
            <img class="botoncarritodecompra" src="../Pescaderia/Imagenes/carritodecompra.png" alt="">

        <?php else: ?>
            <a href="../Pescaderia/Vista/login.php" class="botonlogin" >Iniciar Sesion</a>
            <a href="../Pescaderia/Vista/registrarse.php" class="botonlogin" >Registrarse</a>
            
        <?php endif; ?>
            

        
    </div>
    <div class="contenido">
        <a class="botonPrincipal" href="">NUESTROS PRODUCTOS</a>
        <h1>PESCADERIA <br>  <b>NEMO</b>  </h1>
        <P>Los mejores productos para una deliciosa comida</P>
    </div>
    <img src="../Pescaderia/Imagenes/nemo1.png" class="imagencentral" alt="">
    <img src="../Pescaderia/Imagenes/anclademar.png" class="imagenAncla" alt="">
    <a href="../Pescaderia/Vista/ayuda.php"> <img src="../Pescaderia/Imagenes/ayuda.png" class="imagenayuda" style="height: 12%;
    margin-bottom: 200px;
    bottom: 20px;
    right: 110px;" alt=""></a>
    
  </div>  
  
</body>
</html>