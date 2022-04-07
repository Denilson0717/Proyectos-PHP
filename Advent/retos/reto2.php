<?php
    $carta = 'bici coche balón _playstation bici coche peluche';

    print_r(validarLista($carta));

    function validarLista($carta){
        $array = explode(' ', $carta);
        for ($i=0; $i < count($array); $i++){
            if(stripos($array[$i], '_') !== false){
                unset($array[$i]);
            }
        };
        return array_count_values($array);
    }
?>