<?php
//modelo
class ProductModel
{
  private $products = [
    'producto 1',
    'producto 2',
    'producto 3',
  ];

  public function getAllProducts()
  {
    session_start();
    return $_SESSION['products'] ?? $this->products;
  }

  public function addProduct($product)
  {
    session_start();
    $this->products[] = $product;
    // Actualizar la lista de productos en la sesión
    $_SESSION['products'] = $this->products;
  }
}
