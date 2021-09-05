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
          <img src="" alt="" />
          <h1>Inicio de Sesión</h1>
            <?php
                if(!empty($message)):?>
                    <p><?= $message ?></p>
                <?php endif ?>
            <form action="login.php" method="post" class="login-form">

            <div class="input-group">
              <label class="input-fill">
              <input type="text" name="nombre"  value="" required>
                <span class="input-label">  Usuario</span>
                <i class="fas fa-user-tie"></i>
              </label>
            </div>
            <div class="input-group">
              <label class="input-fill">
              <input type="password" name="clave"  required>
                <span class="input-label">Contraseña</span>
                <i class="fas fa-lock"></i>
              </label>
            </div>
            <a  href="registrarse.php">¿Necesitas una Cuenta?</a>
            <input type="submit" value="Loguear" class="btn-login">
            </form>
        </div>
      </div>
    </main>
  </body>
</html>
