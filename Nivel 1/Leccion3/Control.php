<?php 
  require 'Animal.php';
  require 'Perro.php';

  $perro = new Perro("Perro", "Kira", 10, "Dalmata");
  echo "El nombre del {$perro->get_tipo() } es 
  {$perro->get_nombre()},  de raza {$perro->raza} y 
  edad de{$perro->get_edad()} años <br>";
?>