<?php 
  $entero = 10;
  $decimal = 3.14;
  $texto = "Hola";
  $datos = [5,8];
  $valor = null;
  $abierto = true;
  $cerrado = false;

  echo "Tipo de dato de las variables <br>";
  echo "Variable Entero<br>";
  echo gettype($entero); // Devuelve el tipo de dato de la variable
  echo "<br>";
  echo var_dump($entero); // Muestra el tipo y valor de la variable
  echo "<br>";
  echo "<br>";

  echo "Variable Decimal<br>";
  echo gettype($decimal);
  echo "<br>";
  echo var_dump($decimal);
  echo "<br>";
  echo "<br>";

  echo "Variable Texto<br>";
  echo gettype($texto);
  echo "<br>";
  echo var_dump($texto);
  echo "<br>";
  echo "<br>";

  echo "Variable Datos<br>";
  echo gettype($datos);
  echo "<br>";
  echo var_dump($datos);
  echo "<br>";
  echo "<br>";

  echo "Variable Valor<br>";
  echo gettype($valor);
  echo "<br>";
  echo var_dump($valor);
  echo "<br>";
  echo "<br>";

  echo "Variable Abierto<br>";
  echo gettype($abierto);
  echo "<br>";
  echo var_dump($abierto);
  echo "<br>";
  echo "<br>";

  echo "Variable Cerrado<br>";
  echo gettype($cerrado);
  echo "<br>";
  echo var_dump($cerrado);
  echo "<br>";

  /*
  
  *isset() - Verifica si una variable está definida y no es null

  *empty() - Verifica si una variable está vacía
  vacios 
  0 Entero
  0-0 Flotante
  "" Cadena vacía
  [] Array vacío
  null Variable nula
  false Booleano falso

  *is_null() - Verifica si una variable es null

  $resultado = is_null($valor);
  $resultado = isset($valor);
  $resultado = empty($valor);
  */
?>