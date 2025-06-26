<?php 
  include"bibliotecas.php";
  echo"Uso de biblioteca con PHP <br>";

  $radio = 10;
  echo "El area del círculo con radio $radio es: " . area_circulo($radio) . "<br>";
  echo "El perímetro del círculo con radio $radio es: " . perimetro_circulo($radio) . "<br>";
  echo "<br>";

  $radio = 15;
  echo "El area del círculo con radio $radio es: " . area_circulo($radio) . "<br>";
  echo "El perímetro del círculo con radio $radio es: " . perimetro_circulo($radio) . "<br>";
  echo "<br>";

  $radio = 20;
  echo "El area del círculo con radio $radio es: " . area_circulo($radio) . "<br>";
  echo "El perímetro del círculo con radio $radio es: " . perimetro_circulo($radio) . "<br>";
  echo "<br>";
?>
