<?php 
  $numero_dia = date("N");

  if($numero_dia == 1){
    echo "Hoy es lunes";
  }elseif($numero_dia == 2){
    echo "Hoy es martes";
  }elseif($numero_dia == 3){
    echo "Hoy es miercoles";
  }elseif($numero_dia == 4){
    echo "Hoy es jueves";
  }elseif($numero_dia == 5){  
    echo "Hoy es viernes";
  }elseif($numero_dia == 6){
    echo "Hoy es sabado";
  }elseif($numero_dia == 7){
    echo "Hoy es domingo";
  }else{
    echo "no existe el dia";
  }

  echo "<br>";

  echo "Switch";
  echo "<br>";

  switch($numero_dia){
    case 1:
      echo "Hoy es lunes";
      break;
    case 2:
      echo "hoy es martes";
      break;
    case 3:
      echo "Hoy es miercoles";
      break;
    case 4:
      echo "Hoy es jueves";
      break;
    case 5:
      echo "Hoy es viernes";
      break;
    case 6:
      echo "Hoy es sabado";
      break;
    case 7:
      echo "Hoy es domindo";
      break;
    default:
      echo "Hoy no es un buen dia";
      break;
  }
?>