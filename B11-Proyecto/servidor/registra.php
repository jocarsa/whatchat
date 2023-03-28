<?php

    include "cabeceras.php";
    // Me conecto a la base de datos
    $basededatos = new SQLite3('whatchat.sqlite3');        
    // Le pido algo a la base de datos 
    $resultado = $basededatos->query("
    INSERT INTO usuarios 
    VALUES (
        NULL,
        '".$_GET['nuevousuario']."',
        '".$_GET['nuevocontrasena']."',
        '".$_GET['nuevonombre']."',
        '".$_GET['nuevoapellidos']."',
        '".$_GET['nuevotelefono']."',
        '".$_GET['nuevoemail']."'
    )");
?>