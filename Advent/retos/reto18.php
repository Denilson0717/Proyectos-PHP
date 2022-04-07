<?php
    $files = ['photo', 'postcard', 'photo', 'photo', 'video'];
    //fixFiles(files) => ['photo', 'postcard', 'photo(1)', 'photo(2)', 'video'];
    $files2 = ['file', 'file', 'file', 'game', 'game'];
    //fixFiles(files2) => ['file', 'file(1)', 'file(2)', 'game', 'game(1)']
    $files3 = ['file', 'file(1)', 'icon', 'icon(1)', 'icon(1)'];
    //fixFiles(files3) => ['file', 'file(1)', 'icon', 'icon(1)', 'icon(1)(1)']

    print_r(fixFiles($files));
    echo "</br>";
    print_r(fixFiles($files2));
    echo "</br>";
    print_r(fixFiles($files3));
    echo "</br>";

    function fixFiles($files){
        //Funciona usando for clasico
        $filesFilter = array_unique($files);
        foreach ($filesFilter as $filter) {
            $count = 0;
            for ($i=0; $i < count($files); $i++) {
                if($filter == $files[$i] && $count !== 0){
                    $files[$i] = $filter.'('.$count.')';
                    $count = $count + 1;
                }elseif($filter == $files[$i]){
                    $count = $count + 1;
                }
            }
        }
        return $files;
    }
    
?>