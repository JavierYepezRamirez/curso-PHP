<?php 
  function area_circulo($radio){
    return pi() * pow($radio, 2);
  }

  function perimetro_circulo($radio){
    return 2 * pi() * $radio; 
  }
?>