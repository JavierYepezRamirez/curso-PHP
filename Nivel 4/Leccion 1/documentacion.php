<?php 
  /**
   * Nombre: Area de un Cuirculo
   * Proposito: Obtener el area de cualquier circulo 
   * Autores: Tu Nombre
   * Fecha: 00/00/0000
   * Version: 1.0
   */

   /**
    * Funcion que calcula el area de un circul.
    * Esta funcion toma como parametro el radio de un
    * ciruclo, evalua si es un numero positivo para calcular de que el 
    *  radio sea negativo lanza una excepcion para informar
    * al usuario del error.
    * @param double radio de un circulo
    * @return double area del circulo
    */

    function calcular_area($radio){
      if($radio <= 0){
        throw new Exception("El radio debe ser un número positivo");
      }
      $area = pi()*pow($radio, 2);
      return $area;
    } 
    
    try{
      $radio_circulo = 5;
      $area = calcular_area($radio_circulo);
      echo"El area del circulo con radio: ". $area ."es: ".number_format($area, 2) ."<br>";
    }catch(Exception $e){
      echo "Error: " . $e->getMessage() . "<br>";
    }
?>