<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manejo de archichivos</title>
</head>
<body>
  <h2>Lectura de archichivos</h2>
  
  <?php 
      $mi_archivo = fopen("index.txt", "r");
      echo fread($mi_archivo, filesize("index.txt"));
      fclose($mi_archivo);

  ?>

</body>
</html>