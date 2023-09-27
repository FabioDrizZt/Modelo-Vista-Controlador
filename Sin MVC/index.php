<?php
session_start();

$products = $_SESSION['products'] ?? [
  'producto 1',
  'producto 2',
  'producto 3',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $products[] = $_POST['product'];
  $_SESSION['products'] = $products;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de productos</title>
</head>

<body>
  <h1>Lista de productos</h1>
  <ul>
    <?php foreach ($products as $product) : ?>
      <li> <?= $product ?> </li>
    <?php endforeach; ?>
  </ul>
  <h2>Agregar nuevo producto</h2>
  <form method="POST">
    <input type="text" name="product" id="product" placeholder="Agregue un producto">
    <input type="submit" value="Enviar">
  </form>
</body>

</html>