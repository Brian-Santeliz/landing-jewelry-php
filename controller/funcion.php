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
    function obtener_producto_id($id){
        include "conexion.php";
        try {
            $consulta = "SELECT nombre, imagen_grande, 
            precio, descripcion, 
            descripcion_corta
            FROM productos WHERE id = $id";
            return $resultado = $conexion->query($consulta);
        } catch (Exception $error) {
            echo $error;
            return array();
        }
    }

?>