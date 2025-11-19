<?php 
include "conexion.php";
$id = $_GET['id'];
$producto = $conexion->query("SELECT * FROM productos WHERE id=$id")->fetch_assoc();

if ($_POST) {
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $descripcion = $_POST['descripcion'];
    $imagen = $_POST['imagen'];

    $sql = "UPDATE productos SET 
            nombre='$nombre',
            modelo='$modelo',
            precio='$precio',
            stock='$stock',
            descripcion='$descripcion',
            imagen='$imagen'
            WHERE id=$id";

    $conexion->query($sql);
    header("Location: listar.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4">Editar Producto</h2>

    <form method="POST" class="card p-4 shadow">

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input type="text" name="modelo" value="<?= $producto['modelo'] ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="number" name="stock" value="<?= $producto['stock'] ?>" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control"><?= $producto['descripcion'] ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Imagen</label>
            <input type="text" name="imagen" value="<?= $producto['imagen'] ?>" class="form-control">
        </div>

        <button class="btn btn-warning">Actualizar</button>
        <a href="listar.php" class="btn btn-secondary">Volver</a>

    </form>

</div>

</body>
</html>
