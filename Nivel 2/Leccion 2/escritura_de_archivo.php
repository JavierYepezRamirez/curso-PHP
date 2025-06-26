<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escritura</title>
</head>
<body>
  <h2>Escritura de archichivos</h2>
  
  <?php 
    $mi_archivo = fopen("index.txt", "w"); // Abrir el archivo en modo escritura
    $texto = "¡Nuevo contenido del archivo!\n";
    fwrite($mi_archivo, $texto); // Escribir en el archivo
    fclose($mi_archivo); // Cerrar el archivo

  ?>

</body>
</html>