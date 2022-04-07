<?php

echo missingReindeer([0, 2, 3]); // -> 1
echo missingReindeer([5, 6, 1, 2, 3, 7, 0]); // -> 4
echo missingReindeer([0, 1]); // -> 2 (¡es el último el que falta!)
echo missingReindeer([3, 0, 1]); // -> 2
echo missingReindeer([9, 2, 3, 5, 6, 4, 7, 0, 1]); // -> 8
echo missingReindeer([0]); // -> 1 (¡es el último el que falta!)

function missingReindeer($lista){
    echo "<br>";
    asort($lista);
    $comparador = 0;
    foreach ($lista as $key) {
        if(!($key == $comparador)){
            return $comparador;
        }
        $comparador += 1;
        if($comparador == count($lista)){
            return $comparador . ' es el ultimo el que falta';
        }
    }
}
?>