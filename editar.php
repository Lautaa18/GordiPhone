<?php
include "conexion.php";
$id=$_GET['id'];
$p=$conexion->query("SELECT * FROM productos WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html><html><head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
</head><body class='m-4'>
<h2>Editar Producto</h2>
<form action="actualizar.php" method="POST" class='card p-3'>
<input type="hidden" name="id" value="<?= $p['id'] ?>">
<input name="nombre" value="<?= $p['nombre'] ?>" class='form-control mb-2'>
<input name="modelo" value="<?= $p['modelo'] ?>" class='form-control mb-2'>
<input name="precio" type='number' step='0.01' value="<?= $p['precio'] ?>" class='form-control mb-2'>
<input name="stock" type='number' value="<?= $p['stock'] ?>" class='form-control mb-2'>
<textarea name="descripcion" class='form-control mb-2'><?= $p['descripcion'] ?></textarea>
<input name="imagen" value="<?= $p['imagen'] ?>" class='form-control mb-2'>
<button class='btn btn-warning'>Actualizar</button>
<a href='index.php' class='btn btn-secondary'>Volver</a>
</form>
</body></html>