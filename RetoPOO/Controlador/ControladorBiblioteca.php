<?php
    class Biblioteca {
        public $listaLibros = [];

        function agregarLibro($libro){
            array_push($this->listaLibros, $libro);
        }

        function _get(){
            print_r($this->listaLibros);
        }

        function buscarLibroAutor($nombre){
            $listaEncontrados = [];
            foreach($this->listaLibros as $libro){
                foreach($libro->autores as $autor){
                    if(strpos($autor->nombre, $nombre) !== false){
                        array_push($listaEncontrados, $libro);              
                    }
                }
            }
            return  $listaEncontrados;
        }

        function buscarLibroNombre($nombre){
            $listaEncontrados = [];
            foreach($this->listaLibros as $libro){
                if(strpos($libro->nombre, $nombre) !== false){
                    array_push($listaEncontrados, $libro);              
                }
            }
            return $listaEncontrados;
        }

        function stockTotal(){
            $stockTotal = 0;
            foreach($this->listaLibros as $libro){
                $stockTotal += $libro->stock;
            }
            return $stockTotal;
        }

        function valorTotalStock(){
            $valorTotalStock = 0;
            foreach($this->listaLibros as $libro){
                $valorTotalStock += ($libro->stock * $libro->precio);
            }
            return $valorTotalStock;
        }
    }
?>