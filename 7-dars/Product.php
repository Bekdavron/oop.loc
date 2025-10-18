<?php
class Product
{
  public array $products = [];

  public function add($product): static
  {
    $this->products[] = $product;
    return $this;
  }
  public function getTotal($currency = "$"): string
  {
    $total = 0;
    foreach ($this->products as $product) {
      $total += $product->price;
    }
    return "{$currency}" . $total / 100;
  }
}
