<?php 
include "conexion.php";
$resultado = $conexion->query("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-4">Lista de Productos</h1>

    <a href="crear.php" class="btn btn-primary mb-3">➕ Agregar producto</a>

    <table class="table table-striped table-bordered shadow">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php while($fila = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?= $fila['id'] ?></td>
                <td><?= $fila['nombre'] ?></td>
                <td><?= $fila['modelo'] ?></td>
                <td>$<?= $fila['precio'] ?></td>
                <td><?= $fila['stock'] ?></td>
                <td><img src="<?= $fila['imagen'] ?>" width="60" class="rounded"></td>
                <td>
                    <a href="editar.php?id=<?= $fila['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="borrar.php?id=<?= $fila['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>

</body>
</html>
