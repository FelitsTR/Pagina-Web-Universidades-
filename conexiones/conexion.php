<?php
$User = "root";
$Password = "";
$Server = "localhost";
$Database = "feria_u";
$conexion = mysqli_connect($Server, $User, $Password) or die ("Unable to connect to the database server");
$db = mysqli_select_db($conexion, $Database) or die ("Could not connect to the database");
?>