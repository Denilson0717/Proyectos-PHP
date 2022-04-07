<?php
    $carta = 'bici {coche (balón) bic)i coche peluche';
    validarLista($carta);

    function validarLista($carta){
        $array = explode(' ', $carta);
        $carta = $array;
        //foreach ($array as $key) {
        for ($i=0; $i < count($array); $i++){
            if( (preg_match("/[\{\}\[\]]/i", $array[$i]) > 0) || (preg_match("/[\(]/i", $array[$i])>0 && !preg_match("/[\)]/i", $array[$i])>0) 
                || (!preg_match("/[\(]/i", $array[$i])>0 && preg_match("/[\)]/i", $array[$i])>0)){
                    echo 'false</br>';
                    unset($carta[$i]);
            }
        }
        print_r($carta);
    }
?>