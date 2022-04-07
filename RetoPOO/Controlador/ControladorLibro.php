<?php
    class Libro {
        public $listaAutores = [];

        function __construct($nombre, $precio, $stock){
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->stock = $stock;
            $this->autores = [];
        }

        function agregarAutor($autor){
            array_push($this->autores, $autor);
        }

        function borrarAutor($autor){
            // array_filter($this->autores, function($autor) use ($autor){
            //    echo $autor;  
            // });

            for ($i=0; $i < count($this->autores); $i++) {
                $autoresCopy = $this->autores;
                if($autoresCopy[$i]->nombre == $autor->nombre){
                    unset($this->autores[$i]);
                }
            }
        }
    }   
?>