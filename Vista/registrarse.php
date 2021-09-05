<?php

    require '../Modelo/database.php';
    $message = '';

    $existe = 'SELECT nombre, correo FROM usuario where nombre=:nombre OR correo=:correo';
    $consulta = $conn->prepare($existe);
    $consulta->bindParam(':nombre',$_POST['nombre']);
    $consulta->bindParam(':correo',$_POST['correo']);
    $consulta->execute();

    if($consulta->rowCount()==0){
        if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['clave']) && !empty($_POST['confirmar'])){
            if($_POST['clave'] === $_POST['confirmar']){
                $sql = "INSERT INTO usuario (nombre,correo,clave) VALUES (:nombre,:correo,:clave)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':nombre',$_POST['nombre']);
                $stmt->bindParam(':correo',$_POST['correo']);
                $stmt->bindParam(':clave',$_POST['clave']);

                if($stmt->execute()){
                    $message = 'Usuario registrado con exito';
                }
                else{
                    $message = 'Ha ocurrido un error';
                }
            }
            else{
                $message = 'Las contraseñas no coinciden';
            }
        }
    }
    else{
        $message = 'El usuario o correo ya existen';
    }

?>
<?php
    session_start();

    if(isset($_SESSION['nombre'])){
        header('Location: /Pescaderia');
    }
    require '../Modelo/database.php';

    if(!empty($_POST['nombre']) && !empty($_POST['clave'])){
        $records = $conn->prepare('SELECT nombre, correo, clave FROM usuario WHERE nombre=:nombre');
        $records->bindParam(':nombre', $_POST['nombre']);
        $records->execute();
        $message = '';
        if($records->rowCount()==0){
            $message = 'Este usuario no existe';
        }
        else{
            $result = $records->fetch(PDO::FETCH_ASSOC);
            if(count($result)>0 && $_POST['clave']==$result['clave']){
                $_SESSION['nombre'] = $result['nombre'];
                header('Location: /Pescaderia');
            }else{
                $message = "La contraseña no coincide";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
      integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../Vista/Estilos/estiloLogin.css" />
    <link rel="stylesheet" href="../Vista/Estilos/normalizacion.css" />
    <title>Login</title>
  </head>
  <body>
    <main class="login-design">
      <div class="waves">
        <img style="with:80%; height:60%; opacity:0.9; margin-left:80px; border-radius:30px ;" src=" https://uploads.disquscdn.com/images/f1321b1da46fa141a99e04151f32b39c4612b252dfb84980c317a909fc87de55.jpg " alt="">

      </div>
      <div class="login">
        <a href="../index.php"><img src="https://uploads.disquscdn.com/images/97824b7814e1f187ad3302923b4030fc0e955642e999dbdd6136170b98d60d13.png " alt="" ></a>
        <div class="login-data">
          
          <h1>Registrarse</h1>
            <?php if(!empty($message)): ?>
                <p> <?= $message ?> </p>
                <?php endif; ?>
            <form action="registrarse.php" method="post" class="login-form">

            <div class="input-group">
              <label class="input-fill">
              <input type="text" class="form-control" name="nombre" required>
                <span class="input-label">  Nombre de Usuario</span>
                <i class="fas fa-user-tie"></i>
              </label>
            </div>
            <div class="input-group">
              <label class="input-fill">
              <input type="text" class="form-control" name="correo" required>
                <span class="input-label">  Correo </span>
                <i class="fas fa-envelope"></i>
              </label>
            </div>
            <div class="input-group">
              <label class="input-fill">
              <input type="password" class="form-control" name="clave"  required>
                <span class="input-label">Contraseña</span>
                <i class="fas fa-lock"></i>
              </label>
            </div>
            <div class="input-group">
              <label class="input-fill">
              <input type="password" class="form-control" name="confirmar"  required>
                <span class="input-label">Confirmar Contraseña</span>
                <i class="fas fa-lock"></i>
              </label>
            </div>
            <a  href="login.php">¿Ya tienes una cuenta?</a>
            <input type="submit" value="Registrarse" class="btn-login">
            </form>
        </div>
      </div>
    </main>
  </body>
</html>

    

    
