
<?php 
/* Clases */
  class Vehiculo1{
    /* Atributos */
    public $modelo;
    public $marca;
    public $color;


    /* Metodos */
    public function encender(){
      echo "Encendiendo Vehiculo <br>";
    }
    public function apagar(){
      echo "Apagando Vehiculo <br>";
    }
    public function avanzar(){
      echo "Avanzando <br>";
    }
    public function frenar(){
      echo "Frenando <br>";
    }
  }
?>