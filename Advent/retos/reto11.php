<?php

    echo shouldBuyFidelity(1); // false -> Mejor comprar tickets de un sólo uso
    echo shouldBuyFidelity(100); // true -> Mejor comprar tarjeta fidelidad

    function shouldBuyFidelity($cantidad){
        $valorTickets = 12 * $cantidad;
        $valorTarjeta = 250;
        $countVeces = 0;

        for ($i=0; $i < $cantidad; $i++) { 
            $count = 12 * 0.75;
            for ($j=0; $j < $i   ; $j++) { 
                $count = $count * 0.75;
            }
            $countVeces += $count;
        }
        echo "<br>";
        return $valorTickets > $valorTarjeta ? "Mejor comprar tarjeta" : "Comprar por tickets";
    }

?>