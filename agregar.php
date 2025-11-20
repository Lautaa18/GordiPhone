<?php ?>
<!DOCTYPE html><html><head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
</head><body class='m-4'>
<h2>Agregar Producto</h2>
<form action="insertar.php" method="POST" class='card p-3'>
<input name="nombre" placeholder="Nombre" class='form-control mb-2' required>
<input name="modelo" placeholder="Modelo" class='form-control mb-2' required>
<input name="precio" placeholder="Precio" type='number' step='0.01' class='form-control mb-2' required>
<input name="stock" placeholder="Stock" type='number' class='form-control mb-2' required>
<textarea name="descripcion" placeholder="Descripción" class='form-control mb-2'></textarea>
<input name="imagen" placeholder="Imagen (URL)" class='form-control mb-2'>
<button class='btn btn-success'>Guardar</button>
<a href='index.php' class='btn btn-secondary'>Volver</a>
</form>
</body></html>