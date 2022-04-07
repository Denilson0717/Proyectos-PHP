<?php
    include_once __DIR__ . "/conexion_sqlite.php";

    $query = "SELECT * FROM registros";
    
    $stmt = $baseDatos->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);

    var_dump($registros);
?>