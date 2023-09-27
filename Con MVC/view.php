<!-- view.php -->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Productos</title>
</head>

<body>
  <h1>Lista de Productos</h1>
  <ul>
    <?php foreach ($products as $product) : ?>
      <li><?= $product ?></li>
    <?php endforeach; ?>
  </ul>

  <h2>Agregar Nuevo Producto</h2>
  <form method="POST">
    <input type="text" name="product" placeholder="Nombre del producto" />
    <input type="submit" value="Agregar" />
  </form>
</body>

</html>