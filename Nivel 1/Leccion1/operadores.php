<?php 
  echo "Operadores Matematicos";
  echo "<br>";
  

  const PI = 3.1416;
  $radio = 5;

  $area = PI * ($radio ** 2);
  echo "Area del circulo: $area";

  // Operadores Logicos
  echo "<br>";
  echo "<br>";
  echo "Operadores Logicos";
  echo "<br>";
  echo "Ejemplo de operacion (AND) 1 < 3 AND 5 > 3 = ", 1<3 and 5>3;
  echo "<br>";  
  echo "Ejemplo de operacion (OR) 0 < 1 or 5 > 6 = ", 0<1 or 5>6;
  echo "<br>";
  echo "Emplo de una operacion (XOR) 3 < 5 xor 5  > 5 = ", 3<5 xor 5>5;
  echo "<br>";
  echo "Ejemplo de una operacion negacion (NOT) !0 = ", !0;
  echo "<br>";
?>