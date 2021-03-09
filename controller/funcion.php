<?php 
        function obtener_productos($limite=10){
            include "conexion.php";
            try {
                $consulta = "SELECT * FROM productos LIMIT $limite";
                return $resultado = $conexion->query($consulta);
            } catch (Exception $error) {
                echo $error;
                return array();
            }
        }

?>