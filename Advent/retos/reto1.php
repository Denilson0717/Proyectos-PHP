<?php
    $ovejas = [
        [ "name" => 'Noa', "color" => 'azul'],
        [ "name" => 'Euge', "color" => 'rojo'],
        [ "name" => 'Navidad', "color" => 'rojo'],
        [ "name" => 'Ki Na Ma', "color" => 'rojo'],
        [ "name" => 'AAAAAaaaaa', "color" => 'rojo'],
        [ "name" => 'Nnnnnnnn', "color" => 'rojo']
    ];

    print_r(buscarOvejas($ovejas));

    function buscarOvejas($ovejas){
        $listaOvejas = [];
        foreach ($ovejas as $oveja) {
            if(($oveja["color"] == "rojo") && (stripos($oveja["name"], 'a') !== false) && (stripos($oveja["name"], 'n') !== false)){
                array_push($listaOvejas, $oveja);
            }   
        }
        return $listaOvejas;
    }
?>