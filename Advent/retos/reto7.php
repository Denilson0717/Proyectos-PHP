
<?php

    $almacen = [
        'estanteria1' => [
            'cajon1' => [
                'producto1' => 'coca-cola',
                'producto2' => 'fanta',
                'producto3' => 'camiseta'
            ]
        ],
        'estanteria2' => [
            'cajon1' => 'vacio',
            'cajon2' => [
                'producto1' => 'pantalones',
                'producto2' => 'camiseta'
            ]
        ]
    ];
    $dato = 'camiseta';

    echo buscar($almacen, $dato);

    function buscar($almacen, $dato ){
        return (stripos(json_encode($almacen), $dato) > 0) ? true : false;
    }


    // function buscar($almacen, $dato){
    //     $validador = false;
    //     foreach ($almacen as $key) {
    //         if ($validador == false) {
    //             if(is_array($key) && $validador !== true){
    //                 buscar($key, $dato);
    //             }else{
    //                 if($key == $dato){
    //                     echo 'true: esta aqui </br>';
    //                     $validador = true;
    //                     return $validador;
    //                 }
    //             }
    //         }else{
    //             return $validador;
    //         }
    //     }
    //     echo 'False </br>';
    //     return false;
    // }

    // function buscar($almacen, $dato ){
    //     foreach ($almacen as $key) {
    //         if( (!is_array($key) && $key == $dato) || (is_array($key) && buscar($key, $dato)) ){
    //             return true;
    //         }    
    //     }      
    //     return false;
    // }
?>