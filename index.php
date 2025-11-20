<?php
include "conexion.php";
$result = $conexion->query("SELECT * FROM productos");
?>
<!DOCTYPE html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body class='m-4'>
<h1>Productos Gordiphone</h1>
<a href='agregar.php' class='btn btn-primary mb-3'>Agregar</a>
<table class='table table-bordered table-striped'>
<tr><th>ID</th><th>Nombre</th><th>Modelo</th><th>Precio</th><th>Stock</th><th>Acciones</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['nombre'] ?></td>
<td><?= $row['modelo'] ?></td>
<td><?= $row['precio'] ?></td>
<td><?= $row['stock'] ?></td>
<td>
<a href='editar.php?id=<?= $row['id'] ?>' class='btn btn-warning btn-sm'>Editar</a>
<a href='eliminar.php?id=<?= $row['id'] ?>' class='btn btn-danger btn-sm'>Eliminar</a>
</td>
</tr>
<?php endwhile; ?>
</table>
</body></html>