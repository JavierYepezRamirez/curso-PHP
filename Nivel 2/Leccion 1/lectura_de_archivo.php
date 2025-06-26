<h2>Lectura de archicvo</h2>
<?php 
  /* Modo de apertura de archivo
  fopen() - Abre un archivo o URL
  fopen("Index.txt", "r");)

  fclose() - Cierra un archivo abierto con fopen()

  r - Abre un archivo para lectura. El puntero del archivo se coloca al principio del archivo.
  w - Abre un archivo para escritura. Si el archivo ya existe, se trunca a cero. Si el archivo no existe, se intenta crear.
  r+ o w+ - Abre un archivo para lectura y escritura. Si el archivo no existe, se intenta crear.
  x o x+ - Crea un nuevo archivo para escritura. Si el archivo ya existe, la llamada a fopen() fallará y devolverá false.
  */

  $mi_archivo = fopen("index.txt", "r");
  fclose($mi_archivo);

?>