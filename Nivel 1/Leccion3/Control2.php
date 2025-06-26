<?
  include "Ave2.php";
  include "Perro2.php";

  echo "Obejto perro de la clase Perro  utlizado medos de la clase abstracta <br>";
  $perro = new Perro2();
  $perro->caminar();
  $perro->comer("Crocantes <br>");

  echo "Obejto ave de la clase Ave2 utlizado medos de la intrface <br>";
  $ave = new Ave2();
  $ave->nacer();
  $ave->morir("Enfermedad <br>");
?>