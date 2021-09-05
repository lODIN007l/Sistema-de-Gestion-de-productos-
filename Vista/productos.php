


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Aplicaciones</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
      integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../Vista/Estilos/estiloproducto.css">
</head>
<body>
  <div class="contenidoPrincipal">
    <div class="barranavegacion">
        <img src="  https://uploads.disquscdn.com/images/46fe7b9cfbd6ec90491285e27226d3e8464cd4ee19e6afa13c61b72394b3efbc.png " class="logoEmpresa"  alt="">
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="">Productos</a></li>
               
            </ul>
            
        </nav>       
            
    </div>
    <div class="contenido">
        <h1 class="titulop">Productos</h1>
        <div class="contenidoProductos">
                <?php
                    include("../Modelo/conexion.php");
                        $query = "SELECT * FROM producto";
                        $resultado = $conexion->query($query);
                        while($row = $resultado->fetch_assoc()){
                            ?>
                                <div class="producto11">
                                     <form action="agregar_al_carrito" method="post" >
                                        <img src=<?php echo ($row['url']); ?> alt="" class="products__img">
                
                                        <h3 style="color: #3c8091;" class="nombredelproducto"><?php echo $row['nombre'] ?></h3>

                                        <p> <?php echo $row['descripcion'] ?>   </p>

                                        <span class="tipodelproducto"><?php echo $row['tipo'] ?></span>
                                        <br>
                                        <span style="color: #3c8091;" class="precioodelproducto"><?php echo $row['precio'] ?></span>
                
                                        
                                        </form>
                                </div>
                            <div>
                            </div>
                            <?php
                        }
                        ?>
        </div>

    </div>
    
  </div>  
  
</body>
</html>