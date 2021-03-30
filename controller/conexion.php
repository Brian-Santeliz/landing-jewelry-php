<?php 
        $conexion = new mysqli("localhost", "root", "300900", "joyeria-db");
        $conexion->set_charset("utf8");
        if ($conexion->connect_error) {
           die("Ocurrió un error conectandose en la base de datos, intente más tarde: " . $conexion->connect_error);
        }
?>