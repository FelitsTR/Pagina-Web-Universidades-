<?php
$mysqli = new mysqli('localhost', 'root', '', 'feria_u');
if(mysqli_connect_errno()){
    echo 'Conexion Fallida :', mysqli_connect_error();
    exit();
}
?>