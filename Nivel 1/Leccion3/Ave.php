<?php
  // polimorfismo

  class Ave extends Animal {
    public $ejemplar;

    function __construct($tipo, $nombre, $edad, $ejemplar) {
      parent::__construct($tipo, $nombre, $edad);
      $this->ejemplar = $ejemplar;
    }

    public function emitir_sonido(){
      echo "Soy un ave mi sonido es: !Pio, Pío!  <br>";  
    }
  }
?>