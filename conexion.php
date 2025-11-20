<?php
$conexion = new mysqli("localhost","root","","gordiphone");
if($conexion->connect_error){ die("Error: ".$conexion->connect_error); }
?>