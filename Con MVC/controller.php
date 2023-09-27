<?php
//controller.php
require 'model.php';

$productModel = new ProductModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $newProduct = $_POST['product'];
  $productModel->addProduct($newProduct);
  header('Location: index.php'); // Redirige después de agregar un producto
}

$products = $productModel->getAllProducts();
