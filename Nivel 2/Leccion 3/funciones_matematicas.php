<?php

use BcMath\Number;

  $aleatorio = [];

  for ($i = 0; $i < 10; $i++) {
    $aleatorio[$i] = rand(0, 20);
  }

  for($i = 0; $i < 10; $i++) {
    echo $aleatorio[$i], ", ";
  }

  echo "<br>El valor mínimo es: " . min($aleatorio);
  echo "<br>El valor máximo es: " . max($aleatorio);

  echo "<br>";
  echo "<br> Redondeando el número 5.5: <br>";
  echo round(5.02);

  echo "<br>";
  echo "<br> agrega comillas al número 200000000000: <br>";
  echo number_format("200000000000");
?>