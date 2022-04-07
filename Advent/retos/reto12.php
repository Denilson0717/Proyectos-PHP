<?php
    
    $obstacles = [5, 3, 6, 7, 9];
    echo getMinJump($obstacles); // -> 4

    $obstacles = [2, 4, 6, 8, 10];
    echo getMinJump($obstacles); // -> 7
    
    echo getMinJump([1, 2, 3, 5]); // -> 4
    echo getMinJump([3, 7, 5]); // -> 2
    echo getMinJump([9, 5, 1]); // -> 2

    function getMinJump($lista){
        for ($i=0; $i <= 10; $i++) { 
            $listaObstaculos[$i] = '.';
            foreach ($lista as $key) {
                $key == $i ? $listaObstaculos[$i] = 'X' : '.';
            }
        }
        $salto = 0;
        do {
            $salto += 1;
            $validador = true;
            for ($i=0; $i < count($listaObstaculos); $i += $salto) {
                $listaObstaculos[$i] == 'X' ? $validador = false : ''; 
            }
        } while ($validador == false);
        echo "<br>";
        return $validador ? $salto : 'no hay salto viable';
    }
?>