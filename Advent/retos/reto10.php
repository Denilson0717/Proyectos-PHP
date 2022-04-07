    <?php
    print_r(getCoins(51)); // [1, 0, 0, 0, 0, 1] -> una moneda de 1 céntimo y otra de 50 céntimos
    print_r(getCoins(3)); // [1, 1, 0, 0, 0, 0] -> una moneda de 1 céntimo y otra de 2
    print_r(getCoins(5)); // [0, 0, 1, 0, 0, 0] -> una moneda de 5 céntimos
    print_r(getCoins(16)); // [1, 0, 1, 1, 0, 0] -> una moneda de 1 céntimo, una de 5 y una de 10
    print_r(getCoins(100)); // [0, 0, 0, 0, 0, 2] -> dos monedas de 50 céntimos

    function getCoins($coin){
        $arrayCoins = [1, 2, 5, 10, 20, 50];
        $arrayDevolucion = [0, 0, 0, 0, 0, 0];

        do {
            if($coin >= '50'){
                $arrayDevolucion[5] += 1;
                $coin -= 50;
            }else if($coin >= '20'){
                $arrayDevolucion[4] += 1;
                $coin -= 20;
            }else if($coin >= '10'){
                $arrayDevolucion[3] += 1;
                $coin -= 10;
            }else if($coin >= '5'){
                $arrayDevolucion[2] += 1;
                $coin -= 5;
            }else if($coin >= '2'){
                $arrayDevolucion[1] += 1;
                $coin -= 2;
            }else if($coin >= '1'){
                $arrayDevolucion[0] += 1;
                $coin -= 1;
            }
        } while ($coin > 0);
        echo "<br>";
        return $arrayDevolucion;
    }

?>