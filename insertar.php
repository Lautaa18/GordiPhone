<?php
include "conexion.php";
$nombre=$_POST['nombre'];
$modelo=$_POST['modelo'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$descripcion=$_POST['descripcion'];
$imagen=$_POST['imagen'];

$conexion->query("INSERT INTO productos(nombre,modelo,precio,stock,descripcion,imagen)
VALUES('$nombre','$modelo','$precio','$stock','$descripcion','$imagen')");
header("Location:index.php");
?>