<?php 
    include "conexion.php";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $sql ="INSERT INTO contacto (nombre,email,mensaje) VALUES ('$nombre', '$email', '$mensaje')";
    mysqli_query($conexion,$sql)

?>