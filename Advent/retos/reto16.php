<?php
    echo decodeNumbers('...'); // 3
    echo decodeNumbers('.,'); // 4 (5 - 1)
    echo decodeNumbers(',.'); // 6 (5 + 1)
    echo decodeNumbers(',...'); // 8 (5 + 3)
    echo decodeNumbers('.........!'); // 107 (1 + 1 + 1 + 1 + 1 + 1 + 1 - 1 + 100)
    echo decodeNumbers('.;'); // 49 (50 - 1)
    echo decodeNumbers('..,'); // 5 (-1 + 1 + 5)
    echo decodeNumbers('..,!'); // 95 (1 - 1 - 5 + 100)
    echo decodeNumbers('.;!'); // 49 (-1 -50 + 100)
    echo decodeNumbers('!!!'); // 300
    echo decodeNumbers(';!'); // 50
    echo decodeNumbers(';.W'); // NaN

    //$arr1 = str_split($str);
    //$arr2 = str_split($str, 3);

    function decodeNumbers($str){
        echo "<br>";
        $listaSimbolos = str_split($str);
        $lista = array_map("transformar", $listaSimbolos);
        $total = 0;
        for ($i=0; $i < count($lista) ; $i++) { 
            if( ($i+1) == count($lista)){
                return $total += $lista[$i];
            }

            if($lista[$i+1] == 'Nan' ){
                return "NaN";
            }
            if($lista[$i] < $lista[$i+1]){
                $total -= $lista[$i];
            }else{
                $total += $lista[$i];
            }
        }
    }

    function transformar($key){
        $key == '.' ? $Total = 1 : ($key == ',' ? $Total = 5 : ($key == ':' ? $Total = 10 : ($key == ';' ? $Total = 50 :
            ($key == '!' ? $Total = 100 : $Total = 'Nan'))));
        return $Total;
    }
    
?>