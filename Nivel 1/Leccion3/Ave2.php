<?php 
include "interface.php";

class Ave2 implements Acciones {
    public function nacer() {
        echo "El ave nace de un huevo <br>";
    }

    public function morir($causa) {
        echo "El ave muere por $causa <br>";
    }
}
?>
