<?php
    $pricesBtc = [39, 18, 29, 25, 34, 32, 5];
    //maxProfit(pricesBtc) // -> 16 (compra a 18, vende a 34)
    echo maxProfit($pricesBtc);

    $pricesEth = [10, 20, 30, 40, 50, 60, 70];  
    //maxProfit(pricesEth) // -> 60 (compra a 10, vende a 70)
    echo maxProfit($pricesEth);

    $pricesDoge = [18, 15, 12, 11, 9, 7];
    //maxProfit(pricesDoge) = // -> -1 (no hay ganancia posible)
    echo maxProfit($pricesDoge);

    $pricesAda = [3, 3, 3, 3, 3];
    //echo maxProfit($pricesAda); // -> -1 (no hay ganancia posible)
    echo maxProfit($pricesAda);

    function maxProfit($valor){
        $count = 0;
        do {    
            $mayor = max($valor);
            if ($valor[$count] == $mayor){
                unset($valor[$count]);
                $count += 1; 
                if(empty($valor)){
                    return '-1 <br>';
                }
                $mayor = max($valor); 
            }
        } while ($valor[$count] == $mayor);
        
        $valor = array_values($valor);
        $tamaño = (count($valor) - 1);
        do {
            $menor = min($valor);
            if ($valor[$tamaño] == $menor){
                unset($valor[$tamaño]);
                $tamaño -= 1;
                $menor = min($valor);
            }
            if(sizeof($valor) == 0){
                return '-1 <br>';
            }
        } while ($valor[$tamaño] == $menor);

        $totalDiferencia = 0;
        for ($i=0; $i < count($valor); $i++) { 
            for ($j=$i + 1; $j < count($valor); $j++) { 
                $diferencia = $valor[$j] - $valor[$i];
                if($diferencia > $totalDiferencia){
                    $totalDiferencia = $diferencia;
                    $posicionMenor = $valor[$i];
                    $posicionMayor = $valor[$j];
                }
            }
        }
        return "Ganacia total " . $totalDiferencia . " Compra a " . $posicionMenor . " Vende a " . $posicionMayor . "<br>";
    }



?>