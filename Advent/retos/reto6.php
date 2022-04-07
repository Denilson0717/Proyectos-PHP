<?php
    $array = [3, 2, 2, 1, -1, 1, 4];
    $resultado = 7;
    echo (suma($array, $resultado));

    function suma($array, $resultado){
        for ($i=0; $i < count($array); $i++) { 
            for ($j=$i+1; $j < count($array); $j++) { 
                if(($array[$i] + $array[$j]) == $resultado ){
                    return $array[$i]." ".$array[$j];
                }
            }
        }
        echo 'null';
        return null;
    }
?>