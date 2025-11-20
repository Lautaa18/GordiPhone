<?php
include "conexion.php";
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$modelo=$_POST['modelo'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$descripcion=$_POST['descripcion'];
$imagen=$_POST['imagen'];

$conexion->query("UPDATE productos SET
nombre='$nombre', modelo='$modelo', precio='$precio',
stock='$stock', descripcion='$descripcion', imagen='$imagen'
WHERE id=$id");
header("Location:index.php");
?>