<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario para correo y contraseña</title>
</head>
<body>

  <form>
    Ingresa corro electronico: <input type="Email" name="correo" placeholder="correo electronico"><br>
    Ingresa contraseña: <input type="password" name="contraseña" placeholder="contraseña"><br>
    <input type="submit">
    <input type="reset">
  </form>

  <?php 
    echo "<br>";
    echo "<p> Bienvenido: {$_REQUEST['correo']}</p>";
  ?>
  
</body>
</html>