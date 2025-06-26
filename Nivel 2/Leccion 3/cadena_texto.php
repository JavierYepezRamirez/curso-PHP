<?php 
  $mi_texto = "Desarrollador PHP (orientado a objetos) <br>";

  echo "Longitud de la cadena: ", strlen($mi_texto);


  echo "<br>";
  for($i = 0; $i < strlen($mi_texto); $i++) {
    echo $mi_texto[$i];
  } 

  $texto = "Cadena de texto de prueba";
  $caracter = "a";

  $Nuevo_texto = strtr($texto, $caracter, "A");
  echo "<br>";
  echo "Texto original: $texto <br>";
  echo "Texto modificado: $Nuevo_texto <br>";

  /*
  strtolower() - Convierte una cadena a minúsculas
    CADENA -> cadena
  strtoupper() - Convierte una cadena a mayúsculas
    cadena -> CADENA
  htmlentities() - Convierte caracteres especiales a entidades HTML
   "<p></p>" -> <p></p>;
  parse_str() - Convierte una cadena de consulta a un array
    "nombre=Juan&edad=30" -> ['nombre' => 'Juan', 'edad' => 30]

  */
?>