<?php 
    try {
        $conexion = new mysqli("localhost", "root", "300900", "joyeria-db");
        $conexion->set_charset("utf8");
    } catch (Exception $error) {
        echo $error->getMessage();
        exit;
    }
?>
