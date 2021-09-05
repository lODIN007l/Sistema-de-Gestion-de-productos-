
<?php
$resultado=mysqli_query($conexion,$usuario);
while($mostrar= mysqli_fetch_array($resultado)){
    ?>
    <form action="../Modelo/confModifCli.php" method="POST">
    <tr>
  <td><input type="text" value= <?= $mostrar["nombre"]?> name="nombre">
  <td><input type="text" value= <?php echo $mostrar['correo']?> name="correo"> 
  <td><input type="text" value= <?php echo $mostrar['clave']?> name="clave"> 
  <td><input type="submit" value="editar" class="btn btn-danger"></td>
  </td>
 </tr>
</form>
    
 <?php

}
mysqli_free_result($resultado);

?>