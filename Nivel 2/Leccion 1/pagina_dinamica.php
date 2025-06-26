<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina web dinamica</title>
</head>
<body>
  <?php  
  date_default_timezone_set('America/Mexico_City');
  $hora_actual = date('h: i: s A');
  $dia = date('d');
  $mes = date('m');
  $año = date('Y');

  echo "<p>Hoy es $dia del $mes de $año.</p>";
  echo "<p>La hora actual es $hora_actual.</p>";
  ?>
</body>
</html>