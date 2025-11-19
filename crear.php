<?php 
include "conexion.php";

if ($_POST) {
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $descripcion = $_POST['descripcion'];
    $imagen = $_POST['imagen'];

    $sql = "INSERT INTO productos (nombre, modelo, precio, stock, descripcion, imagen)
            VALUES ('$nombre','$modelo','$precio','$stock','$descripcion','$imagen')";
    $conexion->query($sql);

    header("Location: listar.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4">Agregar Nuevo Producto</h2>

    <form method="POST" class="card p-4 shadow">

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input type="text" name="modelo" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Imagen (URL)</label>
            <input type="text" name="imagen" class="form-control">
        </div>

        <button class="btn btn-success">Guardar</button>
        <a href="listar.php" class="btn btn-secondary">Volver</a>

    </form>

</div>

</body>
</html>
