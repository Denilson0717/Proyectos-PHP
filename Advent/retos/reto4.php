<?php
    $carta = 4;
    pintarArbol($carta);

    function pintarArbol($carta){
        $tamaño = ($carta*2)-1;
        $array = [];
        $tronco = [];
        for ($i=0; $i < $tamaño ; $i++) { 
            $array[$i] = '_';
            if($i == ($carta-1)){
                $tronco[$i] = '#';
            }else{
                $tronco[$i] = '_';
            }
        }
        $tamaño = $carta - 1;
        for ($i=0; $i < $carta; $i++) { 
            $izq = ($tamaño - $i);
            $der = ($tamaño + $i);
            $array[$izq] = '*';
            $array[$der] = '*';
            echo implode ('', $array)."</br>";
        }
        for ($i=0; $i < 2; $i++) { 
            echo implode ('', $tronco)."</br>";
        }
    }
?>