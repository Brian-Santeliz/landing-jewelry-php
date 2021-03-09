<?php 
    try {
        $conexion = new mysqli("localhost", "root", "300900", "joyeria-db");
    } catch (Exception $error) {
        echo $error->getMessage();
        exit;
    }
?>