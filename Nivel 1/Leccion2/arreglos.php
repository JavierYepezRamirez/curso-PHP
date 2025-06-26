<?php
  // Arreglos
  echo "Arreglos";
  echo "<br>";

  $dias_semana = [
    "lunes",
    "martes",
    "miercoles",
    "jueves"
  ];

  echo "Impirmir arreflo;¿: <br>";
  var_dump($dias_semana);
  echo "<br>";

  echo "Operaciones con arreglos";
  echo "<br>";

  echo "Pimer elemento del arreglo: ";
  echo "<br>";
  echo "Elmento 0: $dias_semana[0]";
  echo "<br>";

  echo "Añadiendo un elemento al arreglo";
  $dias_semana[] = "viernes";
  echo "<br>";
  var_dump($dias_semana);

  echo "<br>";
  echo "Actualizar el valor de un elemento del arreglo";
  echo "<br>";
  $dias_seman[0] = "domingo";
  var_dump($dias_semana);

  echo "<br>";
  echo "Eliminar un elemento del arreglo";
  echo "<br>";
  unset($dias_semana[3]);
  var_dump($dias_semana);
?>  