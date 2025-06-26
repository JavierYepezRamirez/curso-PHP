<?php 
  $dias_semana = [
    "Lunes",
    "Martes",
    "Miércoles",
    "Jueves",
    "Viernes",
    "Sábado",
    "Domingo"
  ];

  print"<h1>Días de la semana</h1>";

  for($i = 0; $i < 7; $i ++){
    echo "<li>$dias_semana[$i] <br> </li>";
  }
?>