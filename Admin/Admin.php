<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shortcut icon" href="/Admin/images/logoA.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3" id="aside-left">
                <div class="row">
                    <div class="col" id="image">
                        <center><img src="/Admin/images/logoA.png" alt="logo" width="200px"></center>
                        <center>ADMIN</center>
                    </div>
                </div>
                <div class="row" id="nav">
                    
                    <div  class="col">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" onclick="mosCli()" id="navbarDropdown" >
                        USUARIOS
                        </a>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" onclick="mosPro()" id="navbarDropdown">
                        PRODUCTOS
                        </a>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        REPORTES
                        </a>
                        <div  class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="ReporteUsuarios.php" style="color: black;">Usuarios</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="ReporteProductos.php" style="color: black;">Productos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="ReportePescado.php" style="color: black;">Categoria: Pescados</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="ReporteMariscos.php" style="color: black;">Categoria: Mariscos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background:linear-gradient(45deg,#87adfe,#ff77cd) ;" class="col-9" id="aside-rigth">
                <div  class="row">
                    <div class="content">
                        <iframe id="mosCli" src="Vista/mostrarCli.php" frameborder="0"></iframe>
                        <iframe id="mosPro" src="Vista/mostrar.php" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="general.js"></script>
</html>