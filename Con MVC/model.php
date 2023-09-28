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
    $_SESSION['products'] =  $_SESSION['products'] ?? $this->products;
    return $_SESSION['products'];
  }

  public function addProduct($product)
  {
    session_start();
    $_SESSION['products'][] = $product;
  }
}
