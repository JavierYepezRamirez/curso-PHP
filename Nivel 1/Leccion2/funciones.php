<?php 
  function hola_mundo() {
    echo "!Hola mundo¡ desde una funcion <br>";
  }

  hola_mundo();

  // Funcion con 2 parametros
  function sumar($a,$b) {
    echo "<br> La suma de $a y $b es:" , $a+$b;
  }

  sumar(5,10);

  /*
  Podemos definir el valor de los parametros desde la fucnion
    function sumar($a =10,$b =10) {
    echo "<br> La suma de $a y $b es:" , $a+$b;
  }

  sumar();
  */
?>