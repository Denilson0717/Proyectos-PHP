<?php 

    //conectando a la base de datos (local, usuario, contraseña, nombre de la base de datos)
    $con = mysqli_connect("localhost", "root", "", "proyecto2");

    //validamos la conexion
    if (mysqli_connect_errno()) {
        echo "No se realizo la conexion correctamente" . mysqli_connect_error();
    }


