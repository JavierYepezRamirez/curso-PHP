<?php
  $mi_arreglo = [];

  for( $i = 0; $i < 10; $i++ ){
    array_push($mi_arreglo, rand(0, 20));
  }
  echo var_dump($mi_arreglo);
  echo "<br>";

  array_pop($mi_arreglo); // Elimina el último elemento del arreglo
  echo var_dump($mi_arreglo);
  echo "<br>";  

  sort($mi_arreglo); // Ordena el arreglo de menor a mayor
  echo var_dump($mi_arreglo);
  echo "<br>";

  rsort($mi_arreglo); // Ordena el arreglo de mayor a menor
  echo var_dump($mi_arreglo);
  echo "<br>";

  in_array($mi_arreglo[0],$mi_arreglo); // Verifica si un valor está en el arreglo
  in_array(100,$mi_arreglo); // Verifica si un valor está en el arreglo
?>