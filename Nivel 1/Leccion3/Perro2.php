<?php
include "Acciones.php";

class Perro2 implements Acciones {
    public function caminar() {
        echo "Caminando en cuatro patas<br>";
    }

    public function comer($alimento) {
        echo "Hoy como $alimento<br>";
    }
}
?>
