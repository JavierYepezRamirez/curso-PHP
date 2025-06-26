<?php 
  /* Objetos*/
  class Vehiculo2{
    public $modelo;
    public $color;
    public $matricula;

    function __construct( $modelo, $color, $matricula ){
      $this->modelo     = $modelo;
      $this->color      = $color;
      $this->matricula  = $matricula;
    }

    /*
    function __construct( $parametro ){
      $this-> propiedad = $parametro;
    })
    */

    public function informacion_vehiculo(){
      echo "El vehiculo es modelo: $this->modelo, de color: $this->color y con matricula: $this->matricula <br>";
    }
    
  }
  $vehiculo_1 = new Vehiculo2("Mod-1", "Rojo", "1234ABC");
  // Para acceder a los atributos de un objeto se utiliza
  // Objeto - Operador Objeto - Metos
  // Objeto->Atributo
  $vehiculo_1->informacion_vehiculo()
?>