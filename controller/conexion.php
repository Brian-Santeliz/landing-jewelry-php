<?php 
    try {
        $conexion = new mysqli("localhost", "root", "", "joyeria-db");
        $conexion->set_charset("utf8");
    } catch (Exception $error) {
        echo $error->getMessage();
        exit;
    }
?>