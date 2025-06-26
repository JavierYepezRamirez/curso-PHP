<?php 
// Excepciones en PHP
  try {
    $numero  = 0;
    if($numero !=0){
      echo "El ubersi de: ".$numero." es: ". 1/$numero."<br>";
    }else{
      throw  new Exception ("Division entre cero");
    }
  }catch (Exception $e) {
    echo "Excepcion capturada: ".$e->getMessage()."<br>";
  }finally {
    echo "<br> Bloque final.";
  }
?>