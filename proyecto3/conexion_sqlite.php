<?php   
    $baseDatos = new PDO("sqlite:" . __DIR__ . "/usuarios.db");
    $baseDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $definicionTabla = "CREATE TABLE IF NOT EXISTS registros(
        id  INTEGER PRIMARY KEY AUTOINCREMENT,
        cedula TEXT NOT NULL,
        nombre TEXT NOT NULL,
        telefono TEXT NOT NULL,
        email TEXT NOT NULL,
        direccion TEXT NOT NULL,
        departamento TEXT NOT NULL,
        ciudad TEXT NOT NULL,
        fecha_creacion DATE
    );";

    $resulta = $baseDatos->exec($definicionTabla);



?>