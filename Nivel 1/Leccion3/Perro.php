<?php 
  // Hijo
  class Perro extends Animal{
    public $raza;

    public function __construct($tipo, $nombre, $edad, $raza) {
      parent::__construct($tipo, $nombre, $edad);
      $this->raza = $raza;
    }

    public function emitir_sonido(){
      echo "Soy un perro mi sonido es: !Gua, Gua!  <br>";  
    }
  }
?>