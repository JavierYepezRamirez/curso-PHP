<?php 
    require 'Animal.php';
    require 'Ave.php';
    require 'Perro.php';

    $perro = new Perro("Perro", "Kira", 10, "Dalmata");
    $perro->emitir_sonido();

    $ave = new Ave("Ave", "Dorado", 5, "Loro");
    $ave->emitir_sonido();
?>