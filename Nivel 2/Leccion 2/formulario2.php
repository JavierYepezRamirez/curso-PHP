<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulari restrcciones</title>
</head>
<body>

  <form>
    Ingresa correo electronico: <input 
                                  type="email" 
                                  name="correo"
                                  placeholder="correo electronico"
                                  required>
    <br>
    <br>
    Ingresa contraseña: <input type="password"
                                name="contraseña"
                                placeholder="contraseña"
                                required
                                minlenght="5"
                                maxlength="20">
    <br>
    <br>
    <input type="submit"> <input type="reset">
  </form>
  
  <?php 
    if( isset($_REQUEST['correo']) and isset($_REQUEST['contraseña'])) {
      $correo = $_REQUEST['correo'];
      $contraseña = $_REQUEST['contraseña'];
      echo "<br>";
      echo "<p> Bienvenido: {$correo}</p>";
      echo "<br>";
      echo "<p> Tu contraseña es: {$contraseña}</p>";
    }else {
      echo "<br>";
      echo "Entrada {$_REQUEST['correo']} sin contendio";
      echo "<br>";
      echo "Entrada {$_REQUEST['contraseña']} sin contendio";
    }
  ?>
</body>
</html>